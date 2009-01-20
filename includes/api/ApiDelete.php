<?php

/*
 * Created on Jun 30, 2007
 * API for MediaWiki 1.8+
 *
 * Copyright (C) 2007 Roan Kattouw <Firstname>.<Lastname>@home.nl
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

if (!defined('MEDIAWIKI')) {
	// Eclipse helper - will be ignored in production
	require_once ("ApiBase.php");
}


/**
 * API module that facilitates deleting pages. The API eqivalent of action=delete.
 * Requires API write mode to be enabled.
 *
 * @ingroup API
 */
class ApiDelete extends ApiBase {

	public function __construct($main, $action) {
		parent :: __construct($main, $action);
	}

	/**
	 * Extracts the title, token, and reason from the request parameters and invokes
	 * the local delete() function with these as arguments. It does not make use of
	 * the delete function specified by Article.php. If the deletion succeeds, the
	 * details of the article deleted and the reason for deletion are added to the
	 * result object.
	 */
	public function execute() {
		global $wgUser;
		$this->getMain()->requestWriteMode();
		$params = $this->extractRequestParams();

		$this->requireOnlyOneParameter($params, 'title', 'pageid');
		if(!isset($params['token']))
			$this->dieUsageMsg(array('missingparam', 'token'));

		if(isset($params['title']))
		{
			$titleObj = Title::newFromText($params['title']);
			if(!$titleObj)
				$this->dieUsageMsg(array('invalidtitle', $params['title']));
		}
		else if(isset($params['pageid']))
		{
			$titleObj = Title::newFromID($params['pageid']);
			if(!$titleObj)
				$this->dieUsageMsg(array('nosuchpageid', $params['pageid']));
		}
		if(!$titleObj->exists())
			$this->dieUsageMsg(array('notanarticle'));

		$reason = (isset($params['reason']) ? $params['reason'] : NULL);
		if ($titleObj->getNamespace() == NS_FILE) {
			$retval = self::deleteFile($params['token'], $titleObj, $params['oldimage'], $reason, false);
			if(count($retval))
				// We don't care about multiple errors, just report one of them
				$this->dieUsageMsg(current($retval));
		} else {
			$articleObj = new Article($titleObj);
				if( $articleObj->isBigDeletion() && !$wgUser->isAllowed( 'bigdelete' ) ) {
					global $wgDeleteRevisionsLimit;
					$this->dieUsageMsg(array('delete-toobig', $wgDeleteRevisionsLimit));
				}
			$retval = self::delete($articleObj, $params['token'], $reason);
			
			if(count($retval))
				// We don't care about multiple errors, just report one of them
				$this->dieUsageMsg(current($retval));
			
			if($params['watch'] || $wgUser->getOption('watchdeletion'))
				$articleObj->doWatch();
			else if($params['unwatch'])
				$articleObj->doUnwatch();
		}

		$r = array('title' => $titleObj->getPrefixedText(), 'reason' => $reason);
		$this->getResult()->addValue(null, $this->getModuleName(), $r);
	}

	private static function getPermissionsError(&$title, $token) {
		global $wgUser;
		
		// Check permissions
		$errors = $title->getUserPermissionsErrors('delete', $wgUser);
		if (count($errors) > 0) return $errors;
		
		// Check token
		if(!$wgUser->matchEditToken($token))
			return array(array('sessionfailure'));
		return array();
	}

	/**
	 * We have our own delete() function, since Article.php's implementation is split in two phases
	 *
	 * @param Article $article - Article object to work on
	 * @param string $token - Delete token (same as edit token)
	 * @param string $reason - Reason for the deletion. Autogenerated if NULL
	 * @return Title::getUserPermissionsErrors()-like array
	 */
	public static function delete(&$article, $token, &$reason = NULL)
	{
		global $wgUser;
		$title = $article->getTitle();
		$errors = self::getPermissionsError($title, $token);
		if (count($errors)) return $errors;

		// Auto-generate a summary, if necessary
		if(is_null($reason))
		{
			# Need to pass a throwaway variable because generateReason expects
			# a reference
			$hasHistory = false;
			$reason = $article->generateReason($hasHistory);
			if($reason === false)
				return array(array('cannotdelete'));
		}
		
		if (!wfRunHooks('ArticleDelete', array(&$article, &$wgUser, &$reason)))
			$this->dieUsageMsg(array('hookaborted'));

		// Luckily, Article.php provides a reusable delete function that does the hard work for us
		if($article->doDeleteArticle($reason)) {
			wfRunHooks('ArticleDeleteComplete', array(&$article, &$wgUser, $reason, $article->getId()));
			return array();
		}
		return array(array('cannotdelete', $article->mTitle->getPrefixedText()));
	}

	public static function deleteFile($token, &$title, $oldimage, &$reason = NULL, $suppress = false)
	{
		$errors = self::getPermissionsError($title, $token);
		if (count($errors)) return $errors;

		if( $oldimage && !FileDeleteForm::isValidOldSpec($oldimage) )
			return array(array('invalidoldimage'));

		$file = wfFindFile($title, false, FileRepo::FIND_IGNORE_REDIRECT);
		$oldfile = false;
		
		if( $oldimage )
			$oldfile = RepoGroup::singleton()->getLocalRepo()->newFromArchiveName( $title, $oldimage );
			
		if( !FileDeleteForm::haveDeletableFile($file, $oldfile, $oldimage) )
			return array(array('nofile'));
		if (is_null($reason)) # Log and RC don't like null reasons
			$reason = '';
		$status = FileDeleteForm::doDelete( $title, $file, $oldimage, $reason, $suppress );
				
		if( !$status->isGood() )
			return array(array('cannotdelete', $title->getPrefixedText()));
			
		return array();
	}
	
	public function mustBePosted() { return true; }

	public function getAllowedParams() {
		return array (
			'title' => null,
			'pageid' => array(
				ApiBase::PARAM_TYPE => 'integer'
			),
			'token' => null,
			'reason' => null,
			'watch' => false,
			'unwatch' => false,
			'oldimage' => null
		);
	}

	public function getParamDescription() {
		return array (
			'title' => 'Title of the page you want to delete. Cannot be used together with pageid',
			'pageid' => 'Page ID of the page you want to delete. Cannot be used together with title',
			'token' => 'A delete token previously retrieved through prop=info',
			'reason' => 'Reason for the deletion. If not set, an automatically generated reason will be used.',
			'watch' => 'Add the page to your watchlist',
			'unwatch' => 'Remove the page from your watchlist',
			'oldimage' => 'The name of the old image to delete as provided by iiprop=archivename'
		);
	}

	public function getDescription() {
		return array(
			'Delete a page.'
		);
	}

	protected function getExamples() {
		return array (
			'api.php?action=delete&title=Main%20Page&token=123ABC',
			'api.php?action=delete&title=Main%20Page&token=123ABC&reason=Preparing%20for%20move'
		);
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}
