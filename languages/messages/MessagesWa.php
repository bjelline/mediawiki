<?php
/** Walloon (walon)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Lucyin
 * @author Srtxg
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$fallback = 'fr';

# lists "no preferences", normall (long) walloon date,
# short walloon date, and ISO format
# MW_DATE_DMY is alias for long format, as it is dd mmmmm yyyy.
$datePreferences = array(
	'default',
	'dmy',
	'walloon short',
	'ISO 8601'
);

$datePreferenceMigrationMap = array(
	0 => 'default',
	2 => 'dmy',
	4 => 'walloon short',
);
$defaultDateFormat = 'dmy';

$dateFormats = array(
	'walloon short time' => 'H:i'
);

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Sipeciås',
	NS_TALK             => 'Copene',
	NS_USER             => 'Uzeu',
	NS_USER_TALK        => 'Uzeu_copene',
	NS_PROJECT_TALK     => '$1_copene',
	NS_FILE             => 'Imådje',
	NS_FILE_TALK        => 'Imådje_copene',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_copene',
	NS_TEMPLATE         => 'Modele',
	NS_TEMPLATE_TALK    => 'Modele_copene',
	NS_HELP             => 'Aidance',
	NS_HELP_TALK        => 'Aidance_copene',
	NS_CATEGORY         => 'Categoreye',
	NS_CATEGORY_TALK    => 'Categoreye_copene',
);

$specialPageAliases = array(
	'Allpages'                  => array( 'Totes_les_pådjes' ),
	'Block'                     => array( 'Bloker', 'Blocaedje' ),
	'Categories'                => array( 'Categoreyes' ),
	'Listusers'                 => array( 'Djivêye_des_uzeus' ),
	'Log'                       => array( 'Djournå', 'Djournås' ),
	'Preferences'               => array( 'Preferinces' ),
	'Prefixindex'               => array( 'Indecse_pa_betchete' ),
	'Search'                    => array( 'Cweri' ),
	'Specialpages'              => array( 'Pådjes_sipeciåles' ),
	'Statistics'                => array( 'Sitatistikes' ),
	'Undelete'                  => array( 'Rapexhî' ),
	'Upload'                    => array( 'Eberweter', 'Eberwetaedje' ),
	'Userlogin'                 => array( 'Elodjaedje' ),
	'Userlogout'                => array( 'Dislodjaedje' ),
	'Version'                   => array( 'Modêye' ),
	'Watchlist'                 => array( 'Pådjes_shuvowes' ),
);

# definixha del cogne po les limeros
# (number format definition)
# en: 12,345.67 -> wa: 12 345,67
$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

# $linkTrail = '/^([a-zåâêîôûçéèA-ZÅÂÊÎÔÛÇÉÈ]+)(.*)$/sDu';
$linkTrail = '/^([a-zåâêîôûçéè]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline' => 'Sorlignî les loyéns:',
'tog-justify' => 'Djustifyî les hagnons',
'tog-hideminor' => 'Èn nén mostrer les dierins candjmints mineurs',
'tog-hidepatrolled' => 'Èn nén mostrer les candjmints ddja patrouyîs',
'tog-newpageshidepatrolled' => 'Èn nén mostrer el djivêye des novelès pådjes les cenes dedja patrouyeyes',
'tog-extendwatchlist' => "Ragrandi l' djivêye po mostrer tos les candjmints, nén seulmint les dierins",
'tog-usenewrc' => "Relére par pådje dins les dierins candjmints et l' djivêye des shuvous (i fåt JavaScript)",
'tog-numberheadings' => 'Limerotaedje otomatike des tites',
'tog-showtoolbar' => "Mostrer l' bår d' usteyes e môde candjmint (JavaScript)",
'tog-editondblclick' => 'Candjî les pådjes avou on dobe-clitch (JavaScript)',
'tog-editsection' => "Eployî les loyéns «[candjî]» po candjî rén k' ene seccion",
'tog-editsectiononrightclick' => 'Candjî les seccions avou on dobe-clitch sol tite (JavaScript)',
'tog-showtoc' => "Mostrer l' tåvlea d' ådvins<br />(po ls årtikes avou pus di 3 seccions)",
'tog-rememberpassword' => "Rimimbrer m' sicret inte les sessions (nén dpus ki po $1 {{PLURAL:$1|djoû|djoûs}})",
'tog-watchcreations' => "Mete les pådjes ki dj' askepeye dins l' djivêye des pådjes shuvowes",
'tog-watchdefault' => "Shuve les årtikes ki dj' fwai ou ki dj' candje",
'tog-watchmoves' => "Radjouter a m' djivêye des shuvous les pådjes ki dji displaece",
'tog-watchdeletion' => "Radjouter a m' djivêye des shuvous les pådjes ki dji disface",
'tog-minordefault' => 'Prémete mes candjmints come mineurs',
'tog-previewontop' => "Prévey l' årtike å dzeu del boesse d' aspougnaedje",
'tog-previewonfirst' => "Prévey l' årtike å prumî candjmint",
'tog-nocache' => "Èn nén eployî d' muchete pol håynaedje des pådjes",
'tog-enotifwatchlistpages' => "M' emiler cwand ene pådje shuvowe candje",
'tog-enotifusertalkpages' => "M' emiler cwand l' pådje di copene da minne candje",
'tog-enotifminoredits' => "M' emiler eto po les ptits candjmints",
'tog-enotifrevealaddr' => 'Mostrer mi adresse emile dins les emiles di notifiaedje',
'tog-shownumberswatching' => "Mostrer l' nombe d' uzeus ki shuvèt l' pådje",
'tog-oldsig' => 'Siné pol moumint:',
'tog-fancysig' => 'Sinateure avou do tecse wiki (sins loyén otomatike)',
'tog-externaleditor' => "Eployî on dfoûtrin aspougneu d' tecse come prémetowe dujhance (po les spepieus uzeus seulmint, ca i vs fåt fé des apontiaedjes sol sopiutrece da vosse, [//www.mediawiki.org/wiki/Manual:External_editors loukîz chal po pus di racsegnes]).",
'tog-externaldiff' => 'Eployî on dfoûtrin programe di diferinces come prémetowe dujhance (po les spepieus uzeus seulmint, ca i vs fåt fé des apontiaedjes sol sopiutrece da vosse, [//www.mediawiki.org/wiki/Manual:External_editors loukîz chal po pus di racsegnes]).',
'tog-showjumplinks' => 'Mete en alaedje les loyéns di naiviaedje «potchî a» å dzeu del pådje (pol pea «Myskin» et ds ôtes)',
'tog-uselivepreview' => "Eployî l' prévoeyaedje abeye (JavaScript) (Esperimintå)",
'tog-forceeditsummary' => "M' advierti cwand dji lai vude on rascourti",
'tog-watchlisthideown' => 'Èn nén mostrer les candjmints da minne',
'tog-watchlisthidebots' => 'Èn nén mostrer les candjmints des robots',
'tog-watchlisthideminor' => 'Èn nén mostrer les candjmints mineurs',
'tog-watchlisthideliu' => 'Èn nén mostrer les candjmints fwait pa des uzeus edjîstrés',
'tog-watchlisthideanons' => 'Èn nén mostrer les candjmints fwait pa des uzeus anonimes',
'tog-watchlisthidepatrolled' => 'Èn nén mostrer les candjmints ddja patrouyîs',
'tog-ccmeonemails' => "M' evoyî ene copeye des emiles ki dj' evoye ås ôtes",
'tog-diffonly' => "Èn nén håyner l' contnou del pådje pa dzo l' pådje des diferinces",
'tog-showhiddencats' => 'Mostrer les categoreyes mucheyes',

'underline-always' => 'Tofer',
'underline-never' => 'Måy',
'underline-default' => 'Valixhance do betchteu',

# Font style option in Special:Preferences
'editfont-style' => 'Stîle del fonte pol boesse di tecse',
'editfont-default' => 'Valixhance do betchteu',

# Dates
'sunday' => 'dimegne',
'monday' => 'londi',
'tuesday' => 'mårdi',
'wednesday' => 'mierkidi',
'thursday' => 'djudi',
'friday' => 'vénrdi',
'saturday' => 'semdi',
'sun' => 'dim',
'mon' => 'lon',
'tue' => 'mår',
'wed' => 'mie',
'thu' => 'dju',
'fri' => 'vén',
'sat' => 'sem',
'january' => 'djanvî',
'february' => 'fevrî',
'march' => 'måss',
'april' => 'avri',
'may_long' => 'may',
'june' => 'djun',
'july' => 'djulete',
'august' => 'awousse',
'september' => 'setimbe',
'october' => 'octôbe',
'november' => 'nôvimbe',
'december' => 'decimbe',
'january-gen' => 'djanvî',
'february-gen' => 'fevrî',
'march-gen' => 'måss',
'april-gen' => 'avri',
'may-gen' => 'may',
'june-gen' => 'djun',
'july-gen' => 'djulete',
'august-gen' => 'awousse',
'september-gen' => 'setimbe',
'october-gen' => 'octôbe',
'november-gen' => 'nôvimbe',
'december-gen' => 'decimbe',
'jan' => 'dja',
'feb' => 'fev',
'mar' => 'mås',
'apr' => 'avr',
'may' => 'may',
'jun' => 'djn',
'jul' => 'djl',
'aug' => 'awo',
'sep' => 'set',
'oct' => 'oct',
'nov' => 'nôv',
'dec' => 'dec',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categoreye|Categoreyes}}',
'category_header' => 'Årtikes el categoreye «$1»',
'subcategories' => 'Dizo-categoreyes',
'category-media-header' => 'Media el categoreye «$1»',
'category-empty' => "''Cisse categoreye ci n' a pol moumint nol årtike ni media.''",
'hidden-categories' => '{{PLURAL:$1|Categoreye catcheye|Categoreyes catcheyes}}',
'hidden-category-category' => 'Categoreyes catcheyes',
'category-subcat-count' => 'Dins cisse categoreye, gn a {{PLURAL:$2|li dzo-categoreye|$2 dizo-categoreyes, inte di zeles {{PLURAL:$1|li cene|les $1}}}} cial pa-dzo.',
'category-subcat-count-limited' => "Dins cisse categoreye, gn a {{PLURAL:$1|l' dizo-categoreye|les dzo-categoreyes}} shuvantes.",
'category-article-count' => 'Dins cisse categoreye cial, gn a {{PLURAL:$2|li pådje ki shût|$2 pådjes, inte di zeles {{PLURAL:$1|li cene|les $1}} cial padzo}}.',
'category-article-count-limited' => "{{PLURAL:$1|Gn a l' pådje ki shût|Les $1 pådjes ki shuvnut si trovèt ddja}} dins cisse categoreye ci.",
'category-file-count' => "{{PLURAL:$2|Dins cisse categoreye ci, gn a k' ene pådje.|{{PLURAL:$1|Gn a cisse pådje ci|Gn a les $1 pådjes ki shuvèt}} dins cisse categoreye ci, po $2 pådjes å totå.}}",
'category-file-count-limited' => "{{PLURAL:$1|Gn a k' cisse pådje cial|Gn a les $1 pådjes ciddé padzo}} dins cisse categoreye ci.",
'listingcontinuesabbrev' => '(shûte)',

'about' => 'Åd fwait',
'article' => 'Årtike',
'newwindow' => '(drovant en on novea purnea)',
'cancel' => 'Rinoncî',
'moredotdotdot' => 'Co dpus...',
'mypage' => 'Mi pådje',
'mytalk' => 'Mi copinaedje',
'anontalk' => 'Pådje di copene po ciste adresse IP',
'navigation' => 'Naiviaedje',
'and' => '&#32;eyet',

# Cologne Blue skin
'qbfind' => 'Trover',
'qbbrowse' => 'Foyter',
'qbedit' => 'Candjî',
'qbpageoptions' => 'Cisse pådje ci',
'qbpageinfo' => 'Contecse',
'qbmyoptions' => 'Mes pådjes',
'qbspecialpages' => 'Pådjes sipeciåles',

# Vector skin
'vector-action-addsection' => 'Radjouter on sudjet',
'vector-action-delete' => 'Disfacer',
'vector-action-move' => 'Displaecî',
'vector-action-protect' => 'Protedjî',
'vector-action-undelete' => 'Rapexhî',
'vector-action-unprotect' => "Candjî l' protedjaedje",
'vector-simplesearch-preference' => 'Permete les amidreyès sudjestions di cweraedje (pea «Vector» seulmint)',
'vector-view-create' => 'Ahiver',
'vector-view-edit' => 'Candjî',
'vector-view-history' => "Vey l' istwere",
'vector-view-view' => 'Lére',
'vector-view-viewsource' => 'Vey côde sourdant',
'actions' => 'Accions',
'namespaces' => 'Espåces di lomaedje',
'variants' => 'Variantes',

'errorpagetitle' => 'Aroke',
'returnto' => 'Rivni al pådje «$1».',
'tagline' => 'Èn årtike di {{SITENAME}}.',
'help' => 'Aidance',
'search' => 'Cweri',
'searchbutton' => 'Cweri',
'go' => 'Potchî',
'searcharticle' => 'Potchî',
'history' => 'Istwere del pådje',
'history_short' => 'Istwere',
'updatedmarker' => 'candjî dispoy mi dierinne vizite',
'printableversion' => 'Modêye sicrirece-amiståve',
'permalink' => 'Hårdêye viè cisse modêye ci',
'print' => 'Imprimer',
'view' => 'Vey',
'edit' => 'Candjî',
'create' => 'Ahiver',
'editthispage' => "Candjî l' pådje",
'create-this-page' => 'Ahiver cisse pådje la',
'delete' => 'Disfacer',
'deletethispage' => "Disfacer l' pådje",
'undelete_short' => 'Rapexhî {{PLURAL:$1|on candjmint|$1 candjmints}}',
'viewdeleted_short' => 'Vey {{PLURAL:$1|on candjmint disfacé|$1 candjmints disfacés}}',
'protect' => 'Protedjî',
'protect_change' => 'candjî',
'protectthispage' => "Protedjî l' pådje",
'unprotect' => "Candjî l' protedjaedje",
'unprotectthispage' => "Candjî l' protedjaedje del pådje",
'newpage' => 'Novele pådje',
'talkpage' => 'Copene sol pådje',
'talkpagelinktext' => 'Copiner',
'specialpage' => 'Pådje sipeciåle',
'personaltools' => 'Usteyes da vosse',
'postcomment' => 'Novele seccion',
'articlepage' => "Vey l' årtike",
'talk' => 'Copene',
'views' => 'Vuwes',
'toolbox' => 'Boesse ås usteyes',
'userpage' => "Vey li pådje di l' uzeu",
'projectpage' => 'Vey li pådje do pordjet',
'imagepage' => 'Vey li pådje do fitchî',
'viewtalkpage' => 'Vey li pådje di copene',
'otherlanguages' => 'Ôtes lingaedjes',
'redirectedfrom' => '(Redjiblé di $1)',
'redirectpagesub' => 'Pådje di redjiblaedje',
'lastmodifiedat' => 'Cisse pådje a stî candjeye pol dierin côp li $2 a $1.',
'viewcount' => 'Cisse pådje la a stî léjhowe {{PLURAL:$1|on côp|$1 côps}}.',
'protectedpage' => 'Pådje protedjeye',
'jumpto' => 'Potchî a:',
'jumptonavigation' => 'naiviaedje',
'jumptosearch' => 'cweri',
'view-pool-error' => "Mande escuze, les sierveus sont fortcherdjîs pol moumint.
Gn a trop d' uzeus ki saynut di vey cisse pådje ci.
Soeyoz vayant di ratinde ene miete divant di rsayî di vey cisse pådje ci.

$1",
'pool-errorunknown' => 'Aroke nén cnoxhowe',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Åd fwait di {{SITENAME}}',
'aboutpage' => 'Project:Åd fwait',
'copyright' => "Li contnou est dizo l' $1.",
'copyrightpage' => '{{ns:project}}:Abondroets',
'currentevents' => 'Actouwålités',
'currentevents-url' => 'Project:Actouwålités',
'edithelp' => 'Aidance',
'edithelppage' => 'Help:Kimint candjî ene pådje',
'helppage' => 'Help:Aidance',
'mainpage' => 'Mwaisse pådje',
'mainpage-description' => 'Mwaisse pådje',
'portal' => 'Inte di nozôtes',
'portal-url' => 'Project:Inte di nozôtes',

'badaccess' => "Åk n' a nén stî avou les permissions",

'versionrequired' => "I vs fåt l' modêye $1 di MediaWiki",
'versionrequiredtext' => "I vs fåt l' modêye $1 di MediaWiki po-z eployî cisse pådje ci. Loukîz [[Special:Version|al pådje des modêyes]]",

'ok' => "'l est bon",
'retrievedfrom' => 'Prin del pådje «$1»',
'youhavenewmessages' => 'Vos avoz des $1 ($2).',
'newmessageslink' => 'noveas messaedjes',
'newmessagesdifflink' => 'dierin candjmint',
'youhavenewmessagesmulti' => 'Vos avoz des noveas messaedjes so $1',
'editsection' => 'candjî',
'editold' => 'candjî',
'viewsourceold' => 'vey côde sourdant',
'editlink' => 'candjî',
'viewsourcelink' => 'Vey côde sourdant',
'editsectionhint' => "Candjî l' seccion: $1",
'toc' => 'Ådvins',
'showtoc' => 'mostrer',
'hidetoc' => 'catchî',
'collapsible-collapse' => 'erôler',
'collapsible-expand' => 'diswalper',
'thisisdeleted' => 'Vey ou rapexhî $1?',
'viewdeleted' => 'Vey $1?',
'restorelink' => '{{PLURAL:$1|on candjmint disfacé|$1 candjmints disfacés}}',
'feedlinks' => 'Sindicåcion:',
'feed-invalid' => 'Sôre di sindicåcion nén valide.',
'site-atom-feed' => 'Floûs Atom di $1',
'page-atom-feed' => 'Floûs Atom di «$1»',
'red-link-title' => '$1 (nén co ataké)',
'sort-descending' => 'Discrexhant relijhaedje',
'sort-ascending' => 'Acrexhant relijhaedje',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Årtike',
'nstab-user' => "Pådje di l' uzeu",
'nstab-media' => 'Media',
'nstab-special' => 'Pådje sipeciåle',
'nstab-project' => 'Pådje',
'nstab-image' => 'Fitchî',
'nstab-mediawiki' => 'Messaedje',
'nstab-template' => 'Modele',
'nstab-help' => 'Aidance',
'nstab-category' => 'Categoreye',

# Main script and global functions
'nosuchaction' => 'Nole sifwaite accion',
'nosuchactiontext' => "L' accion specifieye pal hårdêye n' est nén ricnoxhowe på wiki.
Motoit ki vos avoz må scrît l' hårdêye ou shuvou on cron loyén.
Ça pôreut eto esse on bug do programe eployî pa {{SITENAME}}.",
'nosuchspecialpage' => 'Nole sifwaite pådje',
'nospecialpagetext' => 'Vos avoz dmandé ene pådje sipeciåle nén valide, po ene djivêye des pådjes sipeciåles valides, loukîz a [[Special:SpecialPages]].',

# General errors
'error' => 'Aroke',
'databaseerror' => "Åk n' a nén stî avou l' båze di dnêyes",
'dberrortext' => "Åk n' a nén stî avou l' sintacse do cweraedje del båze di dnêyes.
Çoula pout esse cåze d' on bug dins l' programe.
Li dierin cweraedje del båze di dnêyes di sayî esteut:
<blockquote><tt>$1</tt></blockquote>
a pårti del fonccion «<tt>$2</tt>».
Li båze di dnêyes a rtourné l' aroke «<tt>$3: $4</tt>».",
'dberrortextcl' => "Åk n' a nén stî avou l' sintacse do cweraedje del båze di dnêyes.
Li dierin cweraedje del båze di dnêyes di sayî esteut:
«$1»
a pårti del fonccion «$2».
Li båze di dnêyes a rtourné l' aroke «$3: $4».",
'laggedslavemode' => "Asteme: I s' pout ki l' pådje n' åye nén co les dierins candjmints.",
'readonly' => 'Li båze di dnêyes est aclawêye',
'missing-article' => "Li båze di dnêyes n' a nén trové l' tecse d' ene pådje k' åreut dvou esse trovêye, lomêye «$1» $2.

Çoula arive cwand on shût on loyén po ene diferince k' est houte ou viè l' istwere d' ene pådej disfacêye.

Si c' est nén çoula, motoit k' vos avoz trové on bug dins l' programe.
Adon dijhoz l' a on [[Special:ListUsers/sysop|manaedjeu]], sins rovyî d' mete li hårdêye (URL) ki mostere l' aroke.",
'missingarticle-rev' => '(l° del modêye: $1)',
'missingarticle-diff' => '(dif: $1, $2)',
'internalerror' => 'Divintrinne aroke',
'internalerror_info' => 'Divintrinne aroke: $1',
'filecopyerror' => "Dji n' a savou copyî l' fitchî «$1» viè «$2».",
'filerenameerror' => "Dji n' a savou rlomer l' fitchî «$1» e «$2».",
'filedeleteerror' => "Dji n' a savou disfacer l' fitchî «$1».",
'directorycreateerror' => 'On n\' såreut askepyî l\' dossî "$1".',
'filenotfound' => "Dji n' a savou trover l' fitchî «$1».",
'unexpected' => 'Valixhance nén ratindowe: «$1»=«$2».',
'badarticleerror' => "Cisse accion la n' si pout nén fé so cisse pådje ci.",
'cannotdelete' => "Dji n' sai disfacer l' pådje ou l' fitchî «$1».
Ça s' pôreut k' ene ôte sakî l' a ddja disfacé.",
'cannotdelete-title' => "Dji n' sai disfacer l' pådje «$1»",
'badtitle' => 'Måva tite',
'badtitletext' => "Li tite del pådje dimandêye n' esteut nén valide, il estet vude, oudonbén c' esteut on cron loyén eterlingaedje ou eterwiki. Ça s' pout k' il åye onk ou sacwants caracteres ki n' polèt nén esse eployîs dins les tites.",
'perfcached' => "Les dnêyes ki shuvèt c' est ene copeye e muchete, et ça s' pout ki ça n' soeye nén ttafwaitmint a djoû. Li muchete a-st on macsimom {{PLURAL:$1|d' on rzultat|di $1 rizultats}}.",
'perfcachedts' => "Les dnêyes ki shuvèt c' est ene copeye e muchete, ey elle ont stî metowes a djoû pol dierin côp li $1. Li muchete a-st on macsimom {{PLURAL:$4|d' on rzultat|di $4 rizultats}}.",
'wrong_wfQuery_params' => 'Parametes incoreks po wfQuery()<br />
Fonccion: $1<br />
Cweraedje: $2',
'viewsource' => 'Vey côde sourdant',
'viewsource-title' => 'Côde sourdant di «$1»',
'viewsourcetext' => "Loukîz li contnou d' l’ årtike, et s’ li rcopyî si vos vloz, por vos bouter dsu foû des fyis:",
'protectedinterface' => "Cisse pådje ci dene on tecse d' eterface pol programe, eyet elle a stî protedjeye po s' waeranti siconte des abus.",
'editinginterface' => "'''Asteme:''' Vos estoz ki candje ene pådje eployeye po fé l' tecse po l' eterface do programe.
Les candjmints ki vso frîz vont candjî l' rivnance di l' eterface po ds ôtes uzeus.
Po des ratournaedjes, loukîz purade a [//translatewiki.net/wiki/Main_Page?setlang=en translatewiki.net], li pordjet di locålijhaedje da MediaWiki.",
'cascadeprotected' => "Cisse pådje ci a stî protedjeye siconte des candjmints, pask' ele est eploye ådvins {{PLURAL:$1|del pådje shuvante k' est protedjeye|des pådjes shuvantes ki sont protedjeyes}} avou l' tchuze «e cascåde» en alaedje:
$2",

# Login and logout pages
'logouttext' => "'''Vos vs avoz dislodjî.'''

Vos ploz continouwer a naivyî so {{SITENAME}} anonimmint, oudonbén [[Special:UserLogin|vos relodjî]], dizo l' minme uzeu ou dizo èn uzeu diferin.
Notez ki des pådjes k' i gn a si pôrént continowuer a vey come si vos estîz elodjî, disk' a tant ki vos vudrîz l' muchete di vosse betchteu waibe.",
'welcomecreation' => '== Bénvnowe, $1! ==

Vosse conte a stî ahivé.
Èn rovyîz nén di candjî les [[Special:Preferences|preferinces di {{SITENAME}}]] a vosse môde.',
'yourname' => "Vosse no d' elodjaedje:",
'yourpassword' => 'Vosse sicret',
'yourpasswordagain' => 'Ritapez vosse sicret',
'remembermypassword' => "Rimimbrer m' sicret inte les sessions (nén dpus ki po $1 {{PLURAL:$1|djoû|djoûs}})",
'yourdomainname' => 'Vosse dominne',
'login' => "S' elodjî",
'nav-login-createaccount' => "Ahiver on conte, udon-bén s' elodjî",
'loginprompt' => 'Vos dvoz permete les coûkes po vs elodjî so {{SITENAME}}.',
'userlogin' => "S' elodjî",
'userloginnocreate' => "S' elodjî",
'logout' => 'Si dislodjî',
'userlogout' => 'Si dislodjî',
'notloggedin' => 'Nén elodjî',
'nologin' => "Vos n' avoz nén d' conte so ç' wiki ci? $1.",
'nologinlink' => 'Ahivez on conte da vosse',
'createaccount' => 'Ahiver on novea conte',
'gotaccount' => "Vos avoz ddja on conte so ç' wiki ci? '''$1'''.",
'gotaccountlink' => 'Elodjîz vs',
'userlogin-resetlink' => "Avoz rovyî vos detays d' elodjaedje?",
'createaccountmail' => 'pa emile',
'createaccountreason' => 'Råjhon:',
'badretype' => 'Vos avoz dné deus screts diferins.',
'userexists' => "Li no d' uzeu ki vs avoz tchoezi est ddja eployî.
Tchoezixhoz è èn ôte s' i vs plait.",
'loginerror' => "Aroke d' elodjaedje",
'nocookiesnew' => "Li conte a stî ahivé, mins vos n' estoz nén elodjî. {{SITENAME}} eploye des coûkes po l' elodjaedje des uzeus. Vos avoz dismetou l' sopoirt des coûkes dins vosse betchteu waibe; rimetoz l' en alaedje et relodjîz vs avou vosse novea no d' elodjaedje eyet scret, s' i vs plait.",
'nocookieslogin' => "{{SITENAME}} eploye des coûkes po l' elodjaedje des uzeus. Vos avoz dismetou l' sopoirt des coûkes dins vosse betchteu waibe; rimetoz l' en alaedje et relodjîz vs s' i vs plait.",
'noname' => "Vos n' avoz nén dné di no d' uzeu valide.",
'loginsuccesstitle' => 'Vos estoz elodjî',
'loginsuccess' => "'''L' elodjaedje a stî comifåt, asteure vos estoz elodjî dins {{SITENAME}} dizo l' no d' uzeu «$1».'''",
'nosuchuser' => "I g na nou uzeu dizo l' no «$1».
Notez k' les nos d' uzeu fjhèt l' diferince etur pitites et grandès letes.
Verifyîz çou k' vos avoz tapé, oudonbén [[Special:UserLogin/signup|ahivez on novea conte]].",
'nosuchusershort' => "I g na nou uzeu dizo l' no «$1». Verifyîz çou k' vos avoz tapé.",
'nouserspecified' => "Vos dvoz dner on no d' elodjaedje.",
'wrongpassword' => "Li scret ki vs avoz dné est måva. Rissayîz s' i vs plait.",
'wrongpasswordempty' => "Vos avoz dné on vude sicret. Rissayîz s' i vs plait.",
'passwordtooshort' => 'Li scret doet esse di pol moens {{PLURAL:$1|1 caractere|$1 caracteres}}.',
'mailmypassword' => "M' emiler on novea scret",
'passwordremindertitle' => 'Novea scret timporaire po {{SITENAME}}',
'passwordremindertext' => "Ene sakî (probåblumint vos-minme, avou l' adresse IP $1) a dmandé 
on novea scret po {{SITENAME}} ($4).
On scret timporare po l' uzeu «$2» a stî fwait, c' est «$3».
Si c' est vos k' a fwait l' dimande, vos vs divoz elodjî eyet tchoezi on novea scret.
Li scret timporaire ni srè pus valide après {{PLURAL:$5|on djoû|$5 djoûs}}.

Si c' est ene ôte sakî k' a fwait l' dimande, ou si vos vs avoz rtrové l' vî scret eyet 
nel pus vleur candjî, vos ploz djusse ignorer ci messaedje ci eyet continouwer avou l' vî scret.",
'noemail' => "I n' a pont d' adresse emile di cnoxhowe po l' uzeu «$1».",
'noemailcreate' => 'Vos dvoz dner ene adresse emile valide.',
'passwordsent' => "On novea scret a stî emilé a l' adresse emile
racsegneye po l' uzeu «$1».
Relodjîz vs avou ç' noû scret on côp ki vos l' åroz rçuvou s' i vs plait.",
'blocked-mailpassword' => "Voste adresse IP est blokêye pol sicrijhaedje, et do côp vos n' poloz nén eployî l' fonccion d' rapexhaedje do scret po-z eviter les abus.",
'eauthentsent' => "Èn emile d' acertinaedje a stî evoyî a l' adresse emile tchoezeye.
Divant d' poleur evoyî èn ôte emile a ci conte la, vos dvroz shure les instruccions di l' emile ki vos alez rçure, po-z acertiner ki l' conte est bén da vosse.",
'mailerror' => "Åk n' a nén stî tot-z evoyant l' emile: $1",
'acct_creation_throttle_hit' => "Ene sakî a ddja ahivé {{PLURAL:$1|1 conte|$1 contes}} dins les dierinnes 24 eures a pårti dek minme adresse IP, çou k' est l' limite acceptêye po ene sifwaite termene.
Ça fwait ki l' ahivaedje di contes a p·årti di ciste adresse IP la a stî dismetou pol moumint.",
'emailauthenticated' => 'Voste adresse emile a stî acertinêye li $2 a $3.',
'emailnotauthenticated' => "Voste adresse emile n' a nén co stî acertinêye. Nol emile ni serè-st evoyî po les fonccions shuvantes.",
'noemailprefs' => 'Dinez ene adresse emile po ces fonccions si mete en alaedje.',
'emailconfirmlink' => 'Acertinaedje di voste adresse emile',
'invalidemailaddress' => "L' adresse emile ni pout nén esse acceptêye la k' i shonnreut k' ele soeye dins ene cogne nén valide.
Tapez ene adresse emile sicrîte comifåt oudobén vudîz l' tchamp, s' i vs plait.",
'accountcreated' => 'Conte ahivé',
'accountcreatedtext' => "Li conte d' uzeu «$1» a stî ahivé.",
'loginlanguagelabel' => 'Lingaedje: $1',

# Change password dialog
'resetpass' => "Candjî l' sicret",
'resetpass_announce' => "Vos vs avoz elodjî avou on scret timporaire ki vos a stî emilé.
Por vos fini l' elodjaedje, vos dvoz defini on novea scret:",
'resetpass_header' => "Candjî l' sicret do conte",
'oldpassword' => 'Vî scret:',
'newpassword' => 'Noû scret:',
'retypenew' => "Ritapez l' noû scret:",
'resetpass_submit' => "Defini on scret et s' elodjî",
'resetpass_success' => "Vosse sicret a stî candjî comifåt!
Asteure l' elodjaedje...",
'resetpass_forbidden' => "Les screts n' polèt nén esse candjîs",
'resetpass-no-info' => 'Vos dvoz esse elodjî po pleur aveur accès a cisse pådje ci.',
'resetpass-submit-loggedin' => "Candjî l' sicret",
'resetpass-submit-cancel' => 'Rinoncî',
'resetpass-wrong-oldpass' => "Li scret timporaire ou do moumint n' est nén valide.
Motoit ki vos l' avoz ddja candjî ou ridmandé on novea scret timporaire.",
'resetpass-temp-password' => 'Sicret timporaire:',

# Special:PasswordReset
'passwordreset' => "Rifé l' sicret",
'passwordreset-text' => 'Completez cisse formulrece ci po rçure èn emile ki dene les detays do conte da vosse.',
'passwordreset-legend' => "Rifé l' sicret",
'passwordreset-disabled' => "Li rfijhaedje di screts a stî dismetou so ç' wiki ci.",
'passwordreset-pretext' => '{{PLURAL:$1||Dinez onk des elemints di dnêyes shuvants}}',
'passwordreset-username' => "No d' elodjaedje:",
'passwordreset-domain' => 'Dominne:',
'passwordreset-capture' => "Vey li messaedje di l' emile?",
'passwordreset-capture-help' => "Si vos clitchîz cisse boesse ci, l' emile (eyet li scret timporaire) vos srè håyné e minme tins k' il est emilé.",
'passwordreset-email' => 'Adresse emile:',
'passwordreset-emailtitle' => 'Detays do contre so {{SITENAME}}',

# Special:ChangeEmail
'changeemail' => "Candjî l' emile",
'changeemail-header' => "Candjî l' adresse emile do conte",
'changeemail-text' => "Rimplixhoz l' formulrece po candjî voste adresse emile. Vos dvroz dner vosse sicret po-z acertiner l' candjmint.",
'changeemail-no-info' => 'Vos dvoz esse elodjî po pleur aveur accès a cisse pådje ci.',
'changeemail-oldemail' => 'Adresse emile pol moumint:',
'changeemail-newemail' => 'Novele adresse emile:',
'changeemail-none' => '(nole)',
'changeemail-submit' => "Candjî l' emile",
'changeemail-cancel' => 'Rinoncî',

# Edit page toolbar
'bold_sample' => 'Cråssès letes',
'bold_tip' => 'Tecse e cråssès letes',
'italic_sample' => 'Clintcheyès letes',
'italic_tip' => 'Tecse e clintcheyès letes',
'link_sample' => 'Tecse pol loyén',
'link_tip' => 'Divintrin loyén',
'extlink_sample' => 'http://www.example.com tecse pol hårdêye',
'extlink_tip' => 'Difoûtrinne hårdêye (èn rovyîz nén di mete «http://» pa dvant)',
'headline_sample' => 'Tecse di tite',
'headline_tip' => 'Tite di 2inme livea',
'nowiki_sample' => "Tapez l' tecse nén wiki chal",
'nowiki_tip' => 'Èn nén analijhî des côdes wiki, eyet purade les håyner sins fôrmater',
'image_sample' => 'Egzimpe.jpg',
'image_tip' => 'Ravalêye imådje',
'media_sample' => 'Egzimpe.ogg',
'media_tip' => 'Loyén viè on fitchî multimedia (come do son evnd)',
'sig_tip' => "Li sinateure da vosse, avou l' date et l' eure",
'hr_tip' => "Roye di coûtchî (a n' nén eployî d' trop)",

# Edit pages
'summary' => 'Rascourti:',
'subject' => 'Sudjet/tiestire:',
'minoredit' => "Ci n' est k' ene tchitcheye",
'watchthis' => 'Shuve cist årtike',
'savearticle' => "Schaper l' pådje",
'preview' => 'Vey divant',
'showpreview' => 'Vey divant',
'showlivepreview' => 'Vey divant',
'showdiff' => 'Vey les candjmints',
'anoneditwarning' => "'''Asteme:''' Vos n' estoz nén elodjî.
Voste adresse IP serè rashiowe dins l' istwere di cisse pådje ci.",
'anonpreviewwarning' => "''Vos n' estoz nén elodjî. Si vos schapez c' est voste adresse IP ki serè wårdêye dins l' istwere des candjmints.''",
'missingsummary' => "'''Asteme:''' Vos n' avoz nén dné on tecse di rascourti po vosse candjmint. Si vos rclitchîz sol boton «Schaper», li candjmint da vosse serè schapé sins nou tecse di rascourti po l' istwere del pådje.",
'missingcommenttext' => "Tapez on comintaire chal pa dzo s' i vs plait.",
'blockedtitle' => "L' uzeu est bloké",
'blockedtext' => "'''Vosse no d' uzeu ou voste adresse IP a stî blokêye.'''

Li blocaedje a stî fwait pa $1.
Li råjhon dnêye est ''$2''.

* Comince do blocaedje: $8
* Fén do blocaedje: $6
* Blocaedje di: $7

Vos ploz contacter $1 oudonbén onk des
[[{{MediaWiki:Grouppage-sysop}}|manaedjeus]] po discuter do blocaedje.
Notez ki vos n' poloz nén eployî l' fonccion «emiler a l' uzeu» a moens ki vos åyîz ene adresse emile valide dins vos [[Special:Preferences|preferinces]] et ki cisse possibilité n' a nén stî blokêye.
Voste adresse IP est $3 eyet l' ID di blocaedje est $5.
S' i vs plait racsegnoz totes les racsegnes chal å dzeur dins les dmandes ki vos frîz.",
'autoblockedtext' => "Voste adresse IP a stî ablokêye otomaticmint, pask' elle a stî eployeye pa èn ôte uzeu, lu-minme dedja rbouté pa $1.
Li råjhon k' on-z a dné, c' est:

:''$2''.

* Comince do blocaedje: $8
* Fén do blocaedje: $6
* Blocaedje di: $7

Vos ploz contacter $1 oudonbén onk des
[[{{MediaWiki:Grouppage-sysop}}|manaedjeus]] po discuter do blocaedje.

Notez ki vos n' poloz nén eployî l' fonccion «emiler a l' uzeu» a moens ki vos åyîz ene adresse emile valide dins vos [[Special:Preferences|preferinces]] et ki cisse possibilité n' a nén stî blokêye.

Voste adresse IP est $3 eyet l' ID di blocaedje est $5.
S' i vs plait racsegnoz totes les racsegnes chal å dzeur dins les dmandes ki vos frîz.",
'blockednoreason' => 'sins dire pocwè',
'whitelistedittext' => 'I vs fåt $1 po pleur candjî les årtikes.',
'confirmedittext' => "I vs fåt acertiner vost emile po pleur candjî les årtikes. Dinez èn emile eyet l' acertiner dins vos [[Special:Preferences|preferinces d' uzeu]].",
'loginreqtitle' => 'I vs fåt esse elodjî',
'loginreqlink' => 'elodjî',
'loginreqpagetext' => 'Vos vs divoz $1 po vey des ôtès pådjes.',
'accmailtitle' => 'Li scret a stî evoyî.',
'accmailtext' => "On scret costrût a l' astcheyance po [[User talk:$1|$1]] a stî evoyî a $2.

Li scret po ci novea conte ci pout esse candjî sol pådje di ''[[Special:ChangePassword|candjmint di scret]]'' après l' elodjaedje.",
'newarticle' => '(Novea)',
'newarticletext' => "Vos avoz clitchî so on loyén viè ene pådje ki n' egzistêye nén co.
Mins '''vos''' l' poloz askepyî! Po çoula, vos n' avoz k' a cmincî a taper vosse tecse dins l' boesse di tecse chal pa dzo (alez vey li [[{{MediaWiki:Helppage}}|pådje d' aidance]] po pus d' infôrmåcion).
Si vos n' voloz nén scrire cisse pådje chal, clitchîz simplumint sol boton '''En erî''' di vosse betchteu waibe po rivni al pådje di dvant.",
'anontalkpagetext' => "---- ''Çouchal, c' est li pådje di copene po èn uzeu anonime ki n' a nén (co) fwait on conte por lu s' elodjî, ou ki n' l' eploye nén.
Ça fwait k' on doet eployî si adresse IP limerike po l' idintifyî.
Come ene sifwaite adresse IP pout esse eployeye pa pus d' èn uzeu, i s' pout ki vos voeyoz chal des rmarkes et des messaedjes ki n' sont nén por vos.
Loukîz s' i vs plait po [[Special:UserLogin/signup|fé on novea conte]] ou [[Special:UserLogin|s' elodjî]] po n' pus aveur d' ecramiaedje avou des ôtes uzeus anonimes.''",
'noarticletext' => 'I gn a pol moumint nou tecse e cisse pådje chal.
Vos ploz [[Special:Search/{{PAGENAME}}|cweri après l\' tite di cisse pådje ci]] dins des ôtès pådjes,
oudonbén <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} cweri dins les djournås],
ou co [{{fullurl:{{FULLPAGENAME}}|action=edit}} ahiver l\' pådje]</span>.',
'noarticletext-nopermission' => 'I gn a pol moumint nou tecse e cisse pådje chal.
Vos ploz [[Special:Search/{{PAGENAME}}|cweri après l\' tite di cisse pådje ci]] dins des ôtès pådjes,
oudonbén <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} cweri dins les djournås]</span>.',
'blocked-notice-logextract' => '{{GENDER:$1|Cist uzeu est bloké|Ciste uzeuse est blokêye}} pol moumint.
Li dierinne intrêye e djournå des blocaedjes est dnêye chal pa dzo po infôrmåcion:',
'clearyourcache' => "'''Note:''' après aveur schapé l' pådje, vos l' divoz rafrister, po pleur vey les candjmints dins vosse betchteu waibe.
* '''Firefox / Safari:''' tchôkîz so ''Shift'' tot clitchant so ''Rafrister'', ou co fjhoz ''Ctrl-F5'' ou ''Ctrl-R'' (''⌘-R'' so on Mac)
* '''Google Chrome:''' tchôkîz so ''Ctrl-Shift-R'' (''⌘-Shift-R'' on a Mac)
* '''Internet Explorer:''' tchôkîz so ''Ctrl'' tot clitchant so ''Rafrister'', ou co fjhoz ''Ctrl-F5''
* '''Konqueror:''' clitchîz so ''Rafrister'' ou tchôkîz so ''F5''
* '''Opera:''' vudîz l' muchete dins ''Usteyes → Preferinces''.",
'usercssyoucanpreview' => "'''Racsegne:''' eployîz l' boton «{{int:showpreview}}» po sayî vosse novea CSS divant del schaper.",
'userjsyoucanpreview' => "'''Racsegne:''' eployîz l' boton «{{int:showpreview}}» po sayî vosse novea JavaScript divant del schaper.",
'usercsspreview' => "Èn rovyîz nén ki c' est djusse on prévoeyaedje di vosse stîle CSS d' uzeu.'''
'''I n' a nén co stî schapé!'''",
'userjspreview' => "'''Èn rovyîz nén ki c' est djusse on prévoeyaedje/saye di vosse JavaScript d' uzeu, i n' a nén co stî schapé!'''",
'userinvalidcssjstitle' => "'''Asteme:''' I n' a pont d' pea lomêye «$1». Tuzez ki les pådjes .css eyet .js des uzeus eployèt des tite e ptitès letes, metans {{ns:user}}:Toto/vector.css et nén {{ns:user}}:Toto/Vector.css.",
'updated' => '(Ramidré)',
'note' => "'''Note :'''",
'previewnote' => "'''Èn rovyîz nén ki c' est djusse on prévoeyaedje.'''
'''Les candmints n' ont nén co stî schapés!'''",
'continue-editing' => 'Continouwer a candjî',
'previewconflict' => 'Ci prévoeyaedje ci mostere kimint kel tecse del boesse di tecse do dzeu sereut håyné si vos decidez del schaper.',
'session_fail_preview' => "'''Mande escuzes! Mins dji n' a nén polou traitî vosse candjmint paski les dnêyes del session ont stî pierdowes.
Rissayîz s' i vs plait. Si çoula n' va todi nén, sayîz di vs dislodjî eyet di vs relodjî.'''",
'session_fail_preview_html' => "'''Mande escuzes! Mins dji n' a nén polou traitî vosse candjmint paski les dnêyes del session ont stî pierdowes.'''

''Come {{SITENAME}} a-st en alaedje li HTML brut, li prévoeyaedje est catchî, come proteccion siconte des atakes JavaScript.''

'''Si c' est ene saye oniesse di candjî l' pådje, rissayîz s' i vs plait.'''
Si çoula n' va todi nén, sayîz di vs [[Special:UserLogout|dislodjî]] eyet di vs relodjî.",
'editing' => 'Candjant $1',
'creating' => 'Ahivant $1',
'editingsection' => 'Candjant $1 (seccion)',
'editingcomment' => 'Candjant $1 (novele seccion)',
'editconflict' => 'Ecramiaedje inte deus candjmints: $1',
'explainconflict' => "Ene sakî a candjî l' pådje do tins ki vos estîz a scrire.
Li boesse di tecse do dzeur mostere li tecse del pådje come il est
pol moumint sol sierveu. Li tecse da vosse est sol boesse di tecse do dzo.
Les diferinces sont håynêyes å mitan. Vos dvoz mete vos candjmints dins
l' tecse d' asteure (å dzeur) si vos lez vloz co evoyî.
'''Seulmint''' li tecse do dzeur serè candjî cwand vos clitchroz sol boton «{{int:savearticle}}».",
'yourtext' => 'Li tecse da vosse',
'storedversion' => 'Modêye sol sierveu',
'nonunicodebrowser' => "'''ASTEME: li betchteu waibe da vosse ni sopoite nén l' ecôdaedje unicôde, cåze di çoula les caracteres nén-ASCII vont aparexhe dins l' boesse di tecse come des côdes hecsadecimås, insi vos pôroz tot l' minme candjî l' pådje.'''",
'editingold' => "'''ASTEME: Vos estoz ki candje ene viye modêye del pådje.
Si vos l' schapez, tos les candjmints k' ont stî fwaits
dispoy adon si vont piede.'''",
'yourdiff' => 'Diferinces',
'copyrightwarning' => "Notez ki tos les contribouwaedjes fwaits po {{SITENAME}} dvèt esse dizo l' licince $2 (loukîz $1 po pus di racsegnes).
Si vos n' voloz nén ki vosse tecse poye esse candjî eyet spårdou pa tot l' minme kî, adon nel evoyîz nén chal.<br />
Vos nos acertinez eto ki vos avoz scrît l' tecse vos-minme, oudonbén l' avoz copyî d' on sourdant libe (dominne publik ou on sourdant pareymint libe).
'''N' EVOYÎZ NÉN DES TECSES DIZO ABONDROETS SINS PERMISSION!'''",
'copyrightwarning2' => "Notez ki tos les contribouwaedjes fwaits po {{SITENAME}} polèt esse esse candjîs ou disfacés pa des ôtes contribouweus.
Si vos n' voloz nén scrire des årtikes ki polèt esse candjîs pa des ôtes, adon nels evoyîz nén chal.<br />
Vos nos acertinez eto ki vos avoz scrît l' tecse vos-minme, oudonbén l' avoz copyî d' on sourdant libe (voeyoz $1 po pus di racsegnes).
'''N' EVOYÎZ NÉN DES TECSES DIZO ABONDROETS SINS PERMISSION!'''",
'longpageerror' => "'''AROKE: Li tecse ki vos avoz evoyî fwait di pus d' $1 kilo-octet{{PLURAL:$1||s}}, çou k' est pus ki l' macsimom di $2 kilo-octet{{PLURAL:$2||s}}.'''
C' est nén possible del schaper sol sierveu.",
'readonlywarning' => "'''ASTEME: On-z overe sol båze di dnêyes pol moumint, ey elle a stî metowe e mode seulmint-lére.
Do côp, vos n' såroz schaper vos candjmints asteure.'''
Motoit vos dvrîz copyî et aclaper l' tecse dins on fitchî da vosse pol poleur rimete pus tård.

Li manaedjeu k' a-st eclawé l' båze di dnêyes a dné cist esplicaedje ci: $1",
'protectedpagewarning' => "'''ASTEME: Cisse pådje chal a stî protedjeye, seulmint les uzeus avou èn accès di manaedjeu el polèt candjî.'''
Li dierinne intrêye ezès djournås est håynêye chal pa dzo po referince:",
'semiprotectedpagewarning' => "'''Note:''' cisse pådje ci a stî protedjeye po k' seulmint les uzeus edjîstrés el polexhe candjî.
Li dierinne intrêye do djournå est håynêye chal pa dzo po referince:",
'cascadeprotectedwarning' => "'''ASTEME:''' cisse pådje ci a stî protedjeye ça fwait ki seulmint les uzeus avou l' livea d' manaedjeu el polnut candjî, paski l' pådje est eployeye å dvins {{PLURAL:$1|del pådje shuvante, k' est protedjeye|des pådjes shuvantes, ki sont protedjeyes}} avou l' tchuze «e cascåde» en alaedje:",
'templatesused' => '{{PLURAL:$1|Modele eployî|Modeles eployîs}} e cisse pådje ci:',
'templatesusedpreview' => "{{PLURAL:$1|Modele eployî|Modeles eployîs}} e ç' prévoeyaedje ci:",
'templatesusedsection' => '{{PLURAL:$1|Modele eployî|Modeles eployîs}} e cisse seccion ci:',
'template-protected' => '(protedjî)',
'template-semiprotected' => '(dimey-protedjî)',
'hiddencategories' => "Cisse pådje ci est mimbe {{PLURAL:$1|d' ene categoreye catcheye|di $1 categoreyes catcheyes}}:",
'nocreatetitle' => 'Ahivaedje di pådjes limité',
'nocreatetext' => "{{SITENAME}} a limité l' possibilité d' ahiver des novelès pådjes.
Vos ploz rivni en erî eyet candjî ene pådje k' egzistêye dedja, oudonbén, [[Special:UserLogin|vos elodjî ou ahiver on conte d' uzeu]].",
'nocreate-loggedin' => "Vos n' avoz nén l' droet d' ahiver des novelès pådjes.",
'permissionserrorstext-withaction' => "Vos n' avoz nén l' droet d' $2, cåze {{PLURAL:$1|del råjhon shuvante|des råjhons shuvantes}}:",
'recreate-moveddeleted-warn' => "'''Asteme : vous estoz ki rahive ene pådje k' a stî disfacêye davance.'''

Tuzez bén s' el fåt vormint rahiver, tot tapant èn ouy so l' istwere del pådje :",
'edit-gone-missing' => "Li pàdje n' a sepou esse rapontieye.
Motoit k' elle a stî tapêye evoye.",
'edit-conflict' => 'Ecramiaedje di candjmints.',
'edit-no-change' => "Vosse sicrijhaedje n' a nén passé, paski rén n' a stî candjî al modêye di dvant.",
'edit-already-exists' => "Li novele pâdje n' a savou esse ahivêye, ca cisse pâdje la egzistêye dedja.",

# Parser/template warnings
'post-expand-template-inclusion-warning' => "'''Asteme:''' I gn a trop di modeles dins cisse pådje ci.
Sacwants di zels ni seront nén eployîs.",
'post-expand-template-inclusion-category' => "Pådjes ki l' inclusion d' modeles est foû limite",

# Account creation failure
'cantcreateaccounttitle' => "Vos n' ploz nén ahiver-st on conte.",

# History pages
'viewpagelogs' => 'Vey les djournås po cisse pådje ci',
'nohistory' => "I n' a pont d' istwere des modêyes po cisse pådje chal.",
'currentrev' => "Modêye d' asteure",
'currentrev-asof' => 'Dierinne modêye å $1',
'revisionasof' => 'Modêye do $1',
'revision-info' => 'Modêye do $1 pa $2',
'previousrevision' => '←Modêye di dvant',
'nextrevision' => 'Modêye shuvante→',
'currentrevisionlink' => "Modêye d' asteure",
'cur' => 'ast.',
'next' => 'shuv.',
'last' => 'div.',
'page_first' => 'prumî',
'page_last' => 'dierin',
'histlegend' => "Tchoezi les modêyes a comparer: clitchîz so les botons radio des deus modêyes
ki vos vloz comparer et s' tchôkîz sol tape «enter» ou clitchîz sol
boton do dzo.<br />
Ledjinde: '''({{int:cur}})''' = diferince avou l' modêye d' asteure, '''({{int:last}})''' = diferince avou l' modêye di dvant, '''{{int:minoreditletter}}''' = pitit candjmint d' rén do tot.",
'history-fieldset-title' => "Naivyî l' istwere des candjmints",
'history-show-deleted' => 'Disfacés seulmint',
'histfirst' => 'li pus vî',
'histlast' => 'li dierin',
'historysize' => '({{PLURAL:$1|1 octet|$1 octets}})',
'historyempty' => '(vude)',

# Revision feed
'history-feed-title' => 'Istwere des modêyes',
'history-feed-description' => 'Istwere des candjmints di cisse pådje ci sol wiki',
'history-feed-item-nocomment' => '$1 li $2',
'history-feed-empty' => "Li pådje ki vos vloz drovi n' egzistêye nén.
Elle a motoit stî  disfacêye ou k' elle a rcandjî d' no.
Asprouvez do [[Special:Search|ricweri sol wiki]] po trover des pådjes vijhenes.",

# Revision deletion
'rev-deleted-comment' => '(rascourti di candjmint oisté)',
'rev-deleted-user' => "(no d' elodjaedje oisté)",
'rev-deleted-text-permission' => "Cisse modêye ci del pådje a stî '''disfacêye'''.
Vos ploz vey les ca et les ma sol [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} djournå des disfaçaedjes].",
'rev-deleted-text-view' => "Cisse modêye ci del pådje a stî '''disfacêye'''.
Vos l' poloz co vey; i gn a des detays sol [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} djournå des disfaçaedjes].",
'rev-delundel' => 'mostrer/catchî',
'revisiondelete' => 'Disfacer/rapexhî des modêyes',
'revdelete-show-file-submit' => 'Oyi',
'revdelete-selected' => "'''{{PLURAL:$2|Tchoezeye modêye|Tchoezeyès modêyes}} di [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Evenmint tchoezi|Evenmints tchoezis}} ezès djournås:'''",
'revdelete-text' => "'''Les disfacés avenmints et modêyes vont continouwer d' aparexhe dins l' pådje di l' istwere, mins leu contnou n' serè nén veyåve do publik.'''

Les ôtes manaedjeus so {{SITENAME}} pôront todi vey li contnou catchî eyet l' rapexhî åd triviè di cisse minme eterface ci, a moens k' ene restriccion di pus ni soeye metowe en alaedje pås mwaisses-manaedjeus del waibe.",
'revdelete-legend' => 'Defini des restriccions sol voeyaedje',
'revdelete-hide-text' => "Catchî l' tecse del modêye",
'revdelete-hide-comment' => "Catchî l' comintaire di candjmint",
'revdelete-hide-user' => "Catchî l' no d' uzeu/adresse IP do candjeu",
'revdelete-hide-restricted' => "Oister foû les dnêyes ossu bén po les manaedjeus k' po les ôtes",
'revdelete-radio-set' => 'Oyi',
'revdelete-radio-unset' => 'Neni',
'revdelete-log' => 'Råjhon:',
'revdelete-submit' => 'Apliker {{PLURAL:$1|al modêye tchoezeye|åzès modêyes tchoezeyes}}',
'revdel-restore' => "candjî l' veyåvisté",
'revdel-restore-deleted' => 'disfacêyès modêyes',
'revdel-restore-visible' => 'veyåvès modêyes',
'deletedhist' => 'Istwere disfacêye',

# History merging
'mergehistory-success' => '$3 modêye{{PLURAL:$3||s}} di [[:$1]] {{PLURAL:$3|a stî metowe|ont stî metowes}} avou [[:$2]].',
'mergehistory-fail' => "Nén possibe di mete eshonne les istweres. Verifyîz l' pådje et les parametes di date.",
'mergehistory-no-source' => "Li pådje sourdant $1 n' egzistêye nén.",
'mergehistory-reason' => 'Råjhon:',

# Merge log
'revertmerge' => 'Dispårti',

# Diffs
'history-title' => 'Istwere des candjmints po «$1»',
'lineno' => 'Roye $1:',
'compareselectedversions' => 'Comparer les modêyes tchoezeyes',
'editundo' => 'disfé',

# Search results
'searchresults' => 'Rizultats do cweraedje',
'searchresults-title' => 'Rizultats des rcwerances po « $1 »',
'searchresulttext' => 'Po pus di racsegnes sol manire di fé des cweraedjes so {{SITENAME}}, loukîz [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => "Vos avoz cwerou après «'''[[:$1]]'''» ([[Special:Prefixindex/$1|totes les pådjes ki cmincèt avou «$1»]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|totes les pådjes ki loynut viè «$1»]])",
'searchsubtitleinvalid' => 'Pol cweraedje «$1»',
'titlematches' => 'Årtikes avou on tite ki corespond',
'notitlematches' => 'Nol årtike avou on tite ki corespond',
'textmatches' => 'Årtikes avou do tecse ki corespond',
'notextmatches' => 'Nol årtike avou do tecse ki corespond',
'prevn' => '{{PLURAL:$1|di dvant|$1 di dvant}}',
'nextn' => '{{PLURAL:$1|shuvant|$1 shuvants}}',
'prevn-title' => '$1 {{PLURAL:$1|rizultat|rizultats}} di dvant',
'nextn-title' => '{{PLURAL:$1|rizultat shuvant|$1 rizultats shuvants}}',
'shown-title' => 'Mostrer $1 rizultat{{PLURAL:$1||s}} par pådje',
'viewprevnext' => 'Vey ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend' => 'Tchuzes di cweraedje',
'searchmenu-exists' => "'''Gn a ddja ene pådje lomêye « [[:$1]] » so ç' wiki ci'''",
'searchmenu-new' => "'''Ahiver l' pådje \"[[:\$1]]\" so ç' wiki ci!'''",
'searchhelp-url' => 'Help:Aidance',
'searchprofile-articles' => 'Pådjes di contnou',
'searchprofile-project' => "Pådjes d' aidance et do pordjet",
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Tote li waibe',
'searchprofile-advanced' => 'Sipepieus',
'searchprofile-articles-tooltip' => 'Cweri dins $1',
'searchprofile-project-tooltip' => 'Cweri dins $1',
'searchprofile-images-tooltip' => 'Cweri après des fitchîs multimedia',
'searchprofile-everything-tooltip' => "Cweri tot avå l' waibe (dins tos les espåces di lomaedje eyet leu pådjes di copene)",
'searchprofile-advanced-tooltip' => 'Tchoezixhoz les espåces di lomaedje ki vos vloz rwaitî pol cweraedje',
'search-result-size' => '$1 ($2 mot{{PLURAL:$2||s}})',
'search-result-category-size' => '$1 mimbe{{PLURAL:$1||s}} ($2 dizo-categoreye{{PLURAL:$2||s}}, $3 fitchî{{PLURAL:$3||s}})',
'search-result-score' => 'Pertinance: $1%',
'search-redirect' => '(redjiblé di $1)',
'search-section' => '(seccion $1)',
'search-suggest' => 'Sayîz motoit çoula: $1',
'search-interwiki-caption' => 'So les ôtes pordjets frés',
'search-interwiki-default' => 'Gn a des sfwaitès sacwès so $1 :',
'search-interwiki-more' => '(dipus)',
'searchall' => 'totafwait',
'showingresults' => "Chal pa dzo {{PLURAL:$1|'''1''' rizultat|'''$1''' rizultats}} a pårti do limero '''$2'''.",
'showingresultsnum' => "Chal pa dzo {{PLURAL:$3|'''1''' rizultat|'''$3''' rizultats}} a pårti do limero '''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Rizultat '''$1'''|Rizultats '''$1 - $2'''}} foû di '''$3'' po '''$4'''",
'nonefound' => "'''Note''': li prémetowe dujhance c' est d' cweri seulmint e sacwants espåces di lomaedje.
Vos ploz sayî di mete «all:» pa dvant l' tecse a cweri po cweri dins tot l' contnou do wiki (dj' ô bén, ezès pådjes di copene, les modeles, evnd.), oudobén vos ploz mete li no d' l' espåce di lomaedje come betchete.",
'search-nonefound' => "N' a rén di çou ki vs cweroz après",
'powersearch' => 'Cweri',
'powersearch-legend' => 'Pus spepieus rcweraedjes',
'powersearch-ns' => 'Cweri ezès espåces di lomaedje:',
'powersearch-redir' => 'Håyner les rdjiblaedjes',
'powersearch-field' => 'Cweri',
'powersearch-togglelabel' => 'Tchoezi:',
'powersearch-toggleall' => 'Totafwait',
'powersearch-togglenone' => 'Disclitchî tot',
'search-external' => 'Difoûtrin cweraedje',
'searchdisabled' => "Mande escuzes! Li cweraedje å dvins des årtikes a stî dismetou pol moumint, cåze ki l' sierveu est fortcherdjî. Tot ratindant, vos ploz eployî Google po fé les rcweraedjes so {{SITENAME}}, mins çoula pout esse ene miete vî.",

# Quickbar
'qbsettings' => 'Apontiaedjes pol bår di menu',
'qbsettings-none' => 'Nole bår',
'qbsettings-fixedleft' => 'Aclawêye a hintche',
'qbsettings-fixedright' => 'Aclawêye a droete',
'qbsettings-floatingleft' => 'Flotante a hintche',
'qbsettings-floatingright' => 'Flotante a droete',
'qbsettings-directionality' => "Aclawêye, sorlon l' sinse di scrijhaedje di vosse lingaedje",

# Preferences page
'preferences' => 'Preferinces',
'mypreferences' => 'Mes preferinces',
'prefs-edits' => 'Nombe di candjmints:',
'prefsnologin' => "Vos n' estoz nén elodjî",
'prefsnologintext' => 'I vs fåt esse <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} elodjî]</span> po pleur candjî vos preferinces.',
'changepassword' => "Candjî l' sicret",
'prefs-skin' => 'Pea',
'skin-preview' => 'vey divant',
'datedefault' => 'Nole preferince',
'prefs-datetime' => 'Cogne del date',
'prefs-user-pages' => 'Pådjes des uzeus',
'prefs-personal' => 'Dinêyes da vosse',
'prefs-rc' => 'Håynaedje des dierins candjmints',
'prefs-watchlist' => 'Djivêye des shuvous',
'prefs-watchlist-days' => "Nombe di djoûs a mostrer dins l' djivêye:",
'prefs-watchlist-days-max' => 'Macsimom $1 djoû{{PLURAL:$1||s}}',
'prefs-watchlist-edits' => "Nombe di candjmints a mostrer dins l' djivêye:",
'prefs-misc' => 'Totes sôres',
'prefs-resetpass' => "Candjî l' sicret",
'prefs-changeemail' => "Candjî l' emile",
'prefs-setemail' => 'Diner ene adresse emile',
'prefs-email' => "Tchuzes d' emilaedje",
'prefs-rendering' => 'Rivnance',
'saveprefs' => 'Schaper les preferinces',
'resetprefs' => 'Rimete les prémetowès valixhances',
'restoreprefs' => 'Rimete totes les prémetowès valixhances',
'prefs-editing' => 'Boesse di tecse',
'rows' => 'Royes',
'columns' => 'Colones',
'searchresultshead' => 'Håynaedje des rzultats di cweraedje',
'resultsperpage' => 'Nombe di responses a håyner so ene pådje',
'recentchangesdays' => 'Nombe di djoûs po les dierins candjmints:',
'recentchangesdays-max' => 'Macsimom $1 djoû{{PLURAL:$1||s}}',
'recentchangescount' => 'Prémetou nombe di candjmintstites a håyner:',
'savedprefs' => 'Vos preferinces ont stî schapêyes.',
'timezonelegend' => "Coisse d' eureye:",
'localtime' => "L' eure locåle",
'timezoneuseserverdefault' => "Epoyî l' prémetowe valixhance ($1)",
'timezoneuseoffset' => "Ôte (dinez l' diferince d' eures)",
'timezoneoffset' => "Diferince d' eures¹:",
'servertime' => "L' eure sol sierveu:",
'guesstimezone' => "Prinde d' après l' betchteu",
'timezoneregion-africa' => 'Afrike',
'timezoneregion-america' => 'Amerike',
'timezoneregion-antarctica' => 'Antartike',
'timezoneregion-arctic' => 'Arctike',
'timezoneregion-asia' => 'Azeye',
'timezoneregion-atlantic' => 'Oceyan Atlantike',
'timezoneregion-australia' => 'Ostraleye',
'timezoneregion-europe' => 'Urope',
'timezoneregion-indian' => 'Oceyan Indyin',
'timezoneregion-pacific' => 'Oceyan Pacifike',
'allowemail' => "Permete di rçure des emiles d' ôtes uzeus",
'prefs-searchoptions' => 'Tchuzes di cweraedje',
'prefs-namespaces' => 'Espåces di lomaedje',
'defaultns' => 'Oudonbén dins les spåces di nos shuvants:',
'default' => 'prémetou',
'prefs-files' => 'Fitchîs',
'prefs-custom-css' => 'CSS a vosse môde',
'prefs-custom-js' => 'JavaScript a vosse môde',
'prefs-common-css-js' => 'CSS/JavaScript pårtaedjî po totes les peas:',
'prefs-reset-intro' => "Vos ploz eployî ç' boton chal po rmete totes vos preferinces åzès prémetowès valixhances del waibe.
Çoul n' pôrè nén esse disfwait.",
'prefs-emailconfirm-label' => "Acertinaedje di l' emile:",
'prefs-textboxsize' => 'Grandeu del boesse di tecse',
'youremail' => 'Vost emile:',
'username' => "No d' elodjaedje:",
'uid' => "Limero d' l' uzeu:",
'prefs-memberingroups' => 'Mimbe {{PLURAL:$1|do groupe|des groupes}}:',
'prefs-registration' => "Date d' edjîstraedje:",
'yourrealname' => 'Li vraiy no da vosse:',
'yourlanguage' => "Lingaedje po l' eterface",
'yourvariant' => 'Variante di lingaedje pol contnou:',
'prefs-help-variant' => "Li variante ou ortografeye ki vos avoz ptchî po håyner li contnou des pådjes so ç' wiki ci.",
'yournick' => 'Novele sinateure:',
'prefs-help-signature' => "Les comintaires so les pådjes di copene divrént esse sinés avou «<nowiki>~~~~</nowiki>» (dj' ô bén, 4 wachletes), çou ki srè candjî otomaticmint a vosse sinateure eyet li date et l' eure.",
'badsig' => 'Sinateure brute nén valide.
Verifyîz les etiketes HTML.',
'badsiglength' => "Vosse sinateure est pår trop longowe.
Racourtixhoz l' a moens di $1 {{PLURAL:$1|caractere|caracteres}}.",
'yourgender' => 'Seke:',
'gender-unknown' => 'Nén dné',
'gender-male' => 'Omrin',
'gender-female' => 'Femrin',
'prefs-help-gender' => "Seke (opcionel): eployî po-z acoirder l' djinre di sacwants messaedjes di l' eterface.
Ciste infôrmacion serè publike po tertos.",
'email' => 'Emile',
'prefs-help-realname' => 'Li vraiy no da vosse (opcionel): si vos tchoezixhoz del diner i serè-st eployî po les contribouwaedjes da vosse.',
'prefs-help-email' => "Emile (opcionel): permete di rçure des emiles ki ds ôtes uzeus vos polèt evoyî a pårti del pådje d' uzeu da vosse, sins ki voste adresse emile ni soeye håynêye.",
'prefs-help-email-others' => "Vos ploz eto tchoezi k' les ôtes vos emilexhe a pårti d' on loyén sol pådje di copene da vosse. Voste adresse emile n' est nén veyowe cwand des ôtes uzeus vos scrijhèt.",
'prefs-help-email-required' => 'I fåt dner ene adresse emile.',
'prefs-info' => "Infôrmåcion d' båze",
'prefs-i18n' => 'Eternåcionålijhaedje',
'prefs-signature' => 'Sinateure',
'prefs-dateformat' => 'Cogne del date',
'prefs-timeoffset' => "Diferince d' eures",
'prefs-advancedediting' => 'Sipepieuzès tchuzes',
'prefs-advancedrc' => 'Sipepieuzès tchuzes',
'prefs-advancedrendering' => 'Sipepieuzès tchuzes',
'prefs-advancedsearchoptions' => 'Sipepieuzès tchuzes',
'prefs-advancedwatchlist' => 'Sipepieuzès tchuzes',
'prefs-displayrc' => 'Tchuzes di håynaedje',
'prefs-displaysearchoptions' => 'Tchuzes di håynaedje',
'prefs-displaywatchlist' => 'Tchuzes di håynaedje',
'prefs-diffs' => 'Diferinces',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => "L' adresse emile a l' air d' esse valide",
'email-address-validity-invalid' => 'Dinez ene adresse emile valide',

# User rights
'userrights' => 'Manaedjî les liveas des uzeus',
'userrights-lookup-user' => "Manaedjî les groupes d' uzeus",
'userrights-user-editname' => "Tapez on no d' uzeu:",
'editusergroup' => "Candjî les groupes d' uzeus",
'editinguser' => "Candjant les droets d' l' {{GENDER:$1|uzeu|uzeuse}} '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => "Candjî les groupes d' uzeus",
'saveusergroups' => "Schaper les groupes d' uzeus",
'userrights-groupsmember' => 'Mimbe di:',
'userrights-groupsmember-auto' => 'Mimbe implicite di:',
'userrights-groups-help' => "Vos ploz candjî les groupes ki {{GENDER:\$1|cist uzeu|ciste uzeuse}} apårtént:
* Ene boesse clitcheye c' est k' {{GENDER:\$|il|elle}} est mimbe do groupe.
* Ene boesse disclitcheye c' est k' {{GENDER:\$|i|ele}} n' end est nén mimbe.
* Ene sitoele (*) mostere k' on n' pout nén rsaetchî l' groupe on côp k' il a stî radjouté, ou årvierdimint.",
'userrights-reason' => 'Råjhon:',
'userrights-no-interwiki' => "Vos n' avoz nén les permissions po candjî les droets des uzeus so ds ôtes wikis.",
'userrights-nodatabase' => "Li båze di dnêyes «$1» n' egzistêye nén ou n' est nén locåle.",
'userrights-nologin' => 'Vos vs divoz [[Special:UserLogin|elodjî]] avou on conte manaedjeu por vos pleur candjî les droets des uzeus.',
'userrights-notallowed' => "Li conte da vosse n' pout nén radjouter ou rsaetchî des droets des uzeus.",
'userrights-changeable-col' => 'Groupes ki vos ploz candjî',
'userrights-unchangeable-col' => "Groupes ki vos n' poloz nén candjî",

# Groups
'group' => 'Groupe:',
'group-user' => 'Uzeus',
'group-autoconfirmed' => 'Uzeus edjîstrés',
'group-bot' => 'Robots',
'group-sysop' => 'Manaedjeus',
'group-bureaucrat' => 'Mwaisse-manaedjeus',
'group-suppress' => 'Supervizeus',
'group-all' => '(tertos)',

'group-user-member' => '{{GENDER:$1|uzeu|uzeuse}}',
'group-autoconfirmed-member' => '{{GENDER:$1|uzeu edjîstré|uzeuse edjîstrêye}}',
'group-bot-member' => '{{GENDER:$1|robot|robote}}',
'group-sysop-member' => '{{GENDER:$1|manaedjeu|manaedjresse}}',
'group-bureaucrat-member' => '{{GENDER:$1|mwaisse-manaedjeu|mwaisse-manaedjresse}}',
'group-suppress-member' => '{{GENDER:$1|supervizeu|supervizeuse}}',

'grouppage-user' => '{{ns:project}}:Uzeus',
'grouppage-autoconfirmed' => '{{ns:project}}:Uzeus edjîstrés',
'grouppage-bot' => '{{ns:project}}:Robots',
'grouppage-sysop' => '{{ns:project}}:Manaedjeus',
'grouppage-bureaucrat' => '{{ns:project}}:Mwaisse-manaedjeus',
'grouppage-suppress' => '{{ns:project}}:Supervizeus',

# Rights
'right-read' => 'Lére les pådjes',
'right-edit' => 'Candjî les pådjes',
'right-createpage' => "Ahiver des pådjes (ki n' sont nén des pådjes di copene)",
'right-createtalk' => 'Ahiver des pådjes di copinaedje',
'right-createaccount' => "Ahiver des noveas contes d' uzeu",
'right-minoredit' => 'Marker les candjmints come mineurs',
'right-move' => 'Displaecî des pådjes',
'right-move-subpages' => 'Displaecî des pådjes avou leus dzo-pådjes',
'right-move-rootuserpages' => 'Displaecî les pådjes raecene des uzeus',
'right-movefile' => 'Displaecî des fitchîs',
'right-suppressredirect' => 'Èn nén fé di pådje di redjiblaedje dispoy li vî no cwand on displaece ene pådje',
'right-upload' => 'Eberweter des fitchîs',
'right-reupload' => "Sipotchî des fitchîs k' egzitèt ddja",
'right-reupload-own' => 'Sipotchî les itchîs eberwetés pa vos-minme',
'right-reupload-shared' => "Sipotchî locålmint des fitchî ki s' trovèt sol depot pårtaedjî",
'right-upload_by_url' => "Eberweter des fitchîs a pårti d' hårdêyes",
'right-purge' => "Vudî l' muchete des pådjes sins acertinaedje",
'right-autoconfirmed' => 'Candjî les pådjes dimey-protedjeyes',
'right-bot' => 'Esse traitî come on programe otomatike',
'right-nominornewtalk' => "Èn nén dire k' i gn a des noveas messaedjes cwand les candjmints del pådje di copene d' èn uzeu sont mineurs",
'right-writeapi' => "Eployî l' API di scrijhaedje sol wiki",
'right-delete' => 'Disfacer des pådjes',
'right-bigdelete' => 'Disfacer des pådjes avou ene longowe istwere',
'right-deleterevision' => "Disfacer et rapexhî des modêyes d' ene pådje",
'right-deletedhistory' => "Vey les disfacêyès intrêyes di l' istwere, sins leu tecse",
'right-deletedtext' => 'Vey les tecses disfacés eyet les candjmints etur disfacêyès modêyes',
'right-browsearchive' => 'Loukî après les disfacêyès pådjes',
'right-undelete' => "Rapexhî ene pådje k' a stî disfacêye",
'right-suppressrevision' => 'Verifyî et rapexhî les modêyes catcheyes åzès manaedjeus',
'right-suppressionlog' => 'Vey les djournås privés',
'right-block' => "Espaitchî d' ôtes uzeus di scrire",
'right-blockemail' => "Espaitchî èn uzeu d' evoyî des emiles",
'right-hideuser' => "Bloker on no d' uzeu, tot catchant s' no ås ôtes",
'right-ipblock-exempt' => "Passer houte des blocaedjes pa adresse IP, pa fortchete d' adresses ou des blocaedjes otomatikes",
'right-proxyunbannable' => 'Passer houte des blocaedjes otomatikes des procsis',
'right-unblockself' => 'Si disbloker lu-minme',
'right-protect' => "Candjî les liveas d' protedjaedje eyet candjî les pådjes protedjeyes",

# User rights log
'rightslog' => 'Djournå des droets des uzeus',
'rightslogtext' => "Çouchal, c' est on djournå des candjmints des droets des uzeus.",
'rightslogentry' => "a candjî l' uzeu «$1» do groupe «$2» viè «$3»",
'rightslogentry-autopromote' => 'a stî otomaticmint candjî di «$2» a «$3»',
'rightsnone' => '(nouk)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'lére cisse pådje ci',
'action-edit' => "candjî l' pådje",
'action-createpage' => 'ahiver des pådjes',
'action-createtalk' => 'ahiver des pådjes di copinaedje',
'action-createaccount' => "ahiver ci conte d' uzeu ci",
'action-minoredit' => "marker ç' candjmint la come mineur",
'action-move' => 'displaecî cisse pådje ci',
'action-move-subpages' => "displaecî l' pådje et ses dzo-pådjes",
'action-move-rootuserpages' => "displaecî l' pådje raecene d' èn uzeu",
'action-movefile' => "displaecî ç' fitchî ci",
'action-upload' => "eberweter ç' fitchî ci",
'action-reupload' => 'sipotchî ci fitchî ci',
'action-reupload-shared' => "sipotchî l' pårtaedjî fitchî avou ci-chal",
'action-upload_by_url' => "eberweter l' fitchî a pårti d' ene hårdêye",
'action-writeapi' => "eployî l' API di scrijhaedje",
'action-delete' => 'disfacer cisse pådje ci',
'action-deleterevision' => 'disfacer cisse modêye ci',
'action-deletedhistory' => "vey les disfacêyès intrêyes di l' istwere",
'action-browsearchive' => 'loukî après les disfacêyès pådjes',
'action-undelete' => "rapexhî l' pådje",
'action-suppressrevision' => "verifyî et rapexhî l' modêye catcheye",
'action-suppressionlog' => 'vey ci djournå privé ci',
'action-block' => 'espaitchî cist(e) uzeu(se) ci di scrire',
'action-protect' => "candjî les liveas d' protedjaedje del pådje",

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|candjmint|candjmints}}',
'recentchanges' => 'Dierins candjmints',
'recentchanges-legend' => 'Tchuzes po les dierins candjmints',
'recentchanges-summary' => "Shuvoz chal les dierins candjmints k' i gn a yeu dsu {{SITENAME}}.",
'recentchanges-feed-description' => "Shuvoz so ç' canå ci les dierins candjmints k' i gn a yeu sol wiki.",
'recentchanges-label-newpage' => "Ci candjmint la est èn ahivaedje d' ene nouve pådje",
'recentchanges-label-minor' => "Ci n' est k' on ptit candjmint",
'recentchanges-label-bot' => 'Ci candjmint la a stî fwait pa on robot',
'recentchanges-label-unpatrolled' => "Ci candjmint la n' a nén co stî patrouyî",
'rcnote' => "Chal pa dzo {{PLURAL:$1|li dierin candjmint|les '''$1''' dierins candjmints}} {{PLURAL:$2|do dierin djoû|des '''$2''' dierins djoûs}}, disk' å $4 a $5.",
'rcnotefrom' => "Chal pa dzo les candjmints dispoy li '''$2''' (disk' a '''$1''' di mostrés).",
'rclistfrom' => "Mostrer les candjmints k' i gn a yeu a pårti do $1",
'rcshowhideminor' => '$1 candjmints mineurs',
'rcshowhidebots' => '$1 robots',
'rcshowhideliu' => '$1 uzeus eredjîstrés',
'rcshowhideanons' => '$1 uzeus anonimes',
'rcshowhidepatr' => '$1 candjmints rwaitîs',
'rcshowhidemine' => '$1 candjmints da minne',
'rclinks' => 'Mostrer les $1 dierins candjmints des dierins $2 djoûs.<br />$3',
'diff' => 'dif.',
'hist' => 'ist.',
'hide' => 'catch.',
'show' => 'håy.',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[shuvou pa $1 {{PLURAL:$1|uzeu|uzeus}}]',
'rc_categories' => 'Limiter åzès categoreyes (separer avou des «|»)',
'rc_categories_any' => 'Totes',
'rc-change-size-new' => "$1 {{PLURAL:$1|octet|octets}} après l' candjmint",
'newsectionsummary' => '/* $1 */ novele seccion',
'rc-enhanced-expand' => 'Mostrer les detays (i fåt JavaScript)',
'rc-enhanced-hide' => 'Catchî les detays',

# Recent changes linked
'recentchangeslinked' => 'Candjmints aloyîs',
'recentchangeslinked-feed' => 'Candjmints aloyîs',
'recentchangeslinked-toolbox' => 'Candjmints aloyîs',
'recentchangeslinked-title' => 'Candjmints aloyîs a «$1»',
'recentchangeslinked-summary' => "Çouchal c' est ene djivêye des candjmints k' ont stî fwaits dierinnmint a des pådjes aloyeyes a pårti d' ene pådje dinêye (ou mimbes d' ene categoreye dinêye).
Les pådjes ki [[Special:Watchlist|vos shuvoz]] sont-st e '''cråssès letes'''.",
'recentchangeslinked-page' => 'No del pådje:',
'recentchangeslinked-to' => "Mostere les candjmints des pådjes avou on loyén viè l' pådje dinêye purade k' å rviè",

# Upload
'upload' => 'Eberweter on fitchî',
'uploadbtn' => 'Eberweter',
'reuploaddesc' => "Rivni al pådje d' eberwetaedje.",
'uploadnologin' => 'Nén elodjî',
'uploadnologintext' => 'I vs fåt esse [[Special:UserLogin|elodjî]] por vos pleur eberweter des fitchîs.',
'upload_directory_read_only' => "Li sierveu waibe èn pout nén scrire sol ridant d' eberwetaedje ($1).",
'uploaderror' => "Aroke d' eberwetaedje",
'uploadtext' => "Eployîz les boesses d' intrêye chal pa dzo po-z eberweter des fitchîs.
Po håyner ou cweri des fitchîs k' ont ddja stî rçuvous, alez sol [[Special:FileList|djivêye des fitchîs ddja eberwetés]].
Les (r)eberwetaedjes sont eto metos sol [[Special:Log/upload|djournå des eberwetaedjes]], les disfaçaedjes sol [[Special:Log/delete|ci des disfaçaedjes]].

Po mete on fitchî dins ene pådje, eployîz on loyén del fôme:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fitchî.jpg]]</nowiki></code>''' po-z eployî l' modêye e grandeu oridjinnåle do fitchî
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fitchî.png|200px|thumb|left|tecse di rawete]]</nowiki></code>''' po håyner so ene lårdjeur di 200 picsels dins ene boesse (''thumb'') sol hintche (''left''; metoz ''right'' pol mete sol droete) avou «tecse di rawete» come discrijhaedje
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Fitchî.ogg]]</nowiki></code>''' po fé on loyén viè l' fitchî, sins l' håyner",
'uploadlog' => 'djournå des eberwetaedjes',
'uploadlogpage' => 'Djournå des eberwetaedjes',
'uploadlogpagetext' => 'Chal pa dzo li djivêye des dierins eberwetaedjes.
Loukîz al [[Special:NewFiles|galreye des noveas fitchîs]] po ene vuwe pus vizuwele.',
'filename' => 'No do fitchî',
'filedesc' => 'Discrijhaedje',
'fileuploadsummary' => 'Discrijhaedje:',
'filestatus' => 'Abondroets ey eployaedje:',
'filesource' => 'Sourdant:',
'uploadedfiles' => 'Fitchîs eberwetés',
'ignorewarning' => "Passer houte des adviertixhmints eyet schaper tot l' minme li fitchî.",
'ignorewarnings' => 'Passer houte des adviertixhmints',
'illegalfilename' => "Li no d' fitchî «$1» a des caracteres ki n' si polèt nén eployî dins l' tite d' ene pådje. Candjîz l' no do fitchî eyet sayîz del reberweter s' i vs plait.",
'badfilename' => "Li no d' l' imådje a stî candjî a «$1».",
'largefileserver' => "Ci fitchî ci est pus pezant ki çou k' li sierveu est apontyî po-z accepter.",
'emptyfile' => "I shonnreut kel fitchî k' vos eberwetez soeye vude. Çoula pout esse cåze d' ene aroke di tapaedje dins l' no do fitchî. Acertinez si vos vloz evoyî po do bon ç' fitchî ci, s' i vs plait.",
'fileexists' => "On fitchî avou ç' no la egzistêye dedja, loukîz s' i vs plait a <strong>[[:$1]]</strong> po vs acertiner ki vos vloz bén replaecî l' fitchî avou l' ci ki vos eberwetez asteure, oubén si vos l' voloz eberweter dizo èn ôte no.
[[$1|thumb]]",
'fileexists-forbidden' => "I gn a ddja on fitchî avou ç' no la, et n' pout nén esse sipotchî.
Si vos l' voloz tot l' minme eberweter, rivnoz en erî et s' reberwetez l' fitchî dizo èn ôte no.
[[File:$1|thumb|center|$1]]",
'fileexists-shared-forbidden' => "I gn a ddja on fitchî avou ç' no la e ridant des fitchîs pårtaedjîs.
Rivnoz s' i vs plait en erî et s' reberwetez l' fitchî dizo èn ôte no si vos vloz.
[[File:$1|thumb|center|$1]]",
'uploadwarning' => "Adviertixhmint so l' eberwetaedje",
'savefile' => "Schaper l' fitchî",
'uploadedimage' => 'eberwetaedje di «[[$1]]»',
'uploaddisabled' => 'Eberwetaedje di fitchîs dismetou',
'uploaddisabledtext' => "L' eberwetaedje di fitchîs a stî dismetou.",
'uploadscripted' => 'Ci fitchî ci a-st å dvins do côde HTML ou on scripe ki pôreut esse må comprin pa on betchteu waibe.',
'uploadvirus' => 'Li fitchî a-st on virusse! Detays: $1',
'sourcefilename' => "No d' fitchî so vosse copiutrece:",
'destfilename' => "No d' fitchî a eployî so {{SITENAME}}:",
'filewasdeleted' => "On fitchî avou ç' no la a ddja stî disfacé. Vos dvrîz loukî å $1 divant d' continouwer.",
'upload-success-subj' => "L' eberwetaedje a stî comifåt",

'upload-file-error' => 'Divintrinne aroke',

'license' => 'Licince:',
'license-header' => 'Licince',
'nolicense' => 'Nole licince tchoezeye',
'upload_source_file' => ' (on fitchî sol copiutrece da vosse)',

# Special:ListFiles
'listfiles_search_for' => "Cweri l' no d' imådje:",
'imgfile' => 'fitchî',
'listfiles' => 'Djivêye des imådjes',
'listfiles_thumb' => 'Imådjete',
'listfiles_date' => 'Date',
'listfiles_name' => 'No',
'listfiles_user' => 'Uzeu',
'listfiles_size' => 'Grandeu',
'listfiles_description' => 'Discrijhaedje',
'listfiles_count' => 'Modêyes',

# File description page
'file-anchor-link' => 'Fitchî',
'filehist' => 'Istwere do fitchî',
'filehist-help' => "Clitchîz so ene date ey ene eure po vey kimint ki l' fitchî esteut adon.",
'filehist-deleteall' => 'disfacer ttafwait',
'filehist-deleteone' => 'disfacer',
'filehist-revert' => 'disfé',
'filehist-current' => 'asteure',
'filehist-datetime' => 'Date/Eure',
'filehist-thumb' => 'Imådjete',
'filehist-thumbtext' => 'Imådjete pol modêye do $1',
'filehist-nothumb' => 'Nole imådjete',
'filehist-user' => 'Uzeu',
'filehist-dimensions' => 'Grandeur',
'filehist-filesize' => 'Grandeur do fitchî',
'filehist-comment' => 'Comintaire',
'filehist-missing' => 'Fitchî mancant',
'imagelinks' => 'Eployaedjes do fitchî',
'linkstoimage' => '{{PLURAL:$1|Li pådje shuvante eploye|Les $1 pådjes shuvantes eployèt}} ciste imådje chal:',
'nolinkstoimage' => "I n' a nole pådje k' eploye ciste imådje chal.",
'sharedupload' => "Ci fitchî ci vént d' $1 ey i s' pout k' i soeye eployî pa ds ôtes pordjets.",
'sharedupload-desc-there' => "Ci fitchî ci provént d' $1; si pout i esse reployî dins des ôtes pordjets. Loukîz [$2 si pådje di discrijhaedje] po-z esse mî racsegnî.",
'sharedupload-desc-here' => "Ci fitchî ci provént d' $1; si pout i esse eployî divins des ôtes pordjets Wiki. Li discrijhaedje di [$2 si pådje di discrijhaedje] låvå est håynêye cial ådzo.",
'uploadnewversion-linktext' => 'Eberweter ene nouve modêye di ci fitchî ci',
'shared-repo-from' => "vént d' $1",
'shared-repo' => 'on depot pårtaedjî',

# File reversion
'filerevert' => 'Rimete come divant $1',
'filerevert-comment' => 'Råjhon:',
'filerevert-submit' => 'Disfé',

# File deletion
'filedelete' => 'Disfacer $1',
'filedelete-legend' => 'Disfacer fitchî',
'filedelete-comment' => 'Råjhon:',
'filedelete-submit' => 'Disfacer',
'filedelete-otherreason' => 'Ene råjhon diferinne ou di pus:',
'filedelete-reason-dropdown' => '*Råjhons po disfacer (å pus sovint)
** Nén respet des abondroets
** Fitchî e dobe',

# MIME search
'mimesearch' => 'Cweraedje MIME',
'mimetype' => 'sôre MIME:',
'download' => 'aberweter',

# Unwatched pages
'unwatchedpages' => 'Pådjes nén shuvowes',

# List redirects
'listredirects' => 'Djivêye des redjiblaedjes',

# Unused templates
'unusedtemplates' => 'Modeles nén eployîs',
'unusedtemplatestext' => "Cisse pådje ci mostere totes les pådjes di modele (espåce di lomaedje «{{ns:template}}») ki n' sont nén eployîs dins ene ôte pådje.
Rimimbrez vs di verifyî s' i n' a nén des ôtes loyéns divant delzès disfacer.",
'unusedtemplateswlh' => 'ôtes loyéns',

# Random page
'randompage' => "Årtike a l' astcheyance",

# Random redirect
'randomredirect' => "Redjiblaedje a l' astcheyance",

# Statistics
'statistics' => 'Sitatistikes',
'statistics-header-users' => 'Sitatistikes des uzeus',
'statistics-articles' => 'Pådjes di contnou',
'statistics-pages-desc' => 'Totes les pådjes do "Wiki", minme les copinaedjes, les rdjiblaedjes, evnd.',
'statistics-mostpopular' => 'Pådjes les pus veyowes',

'disambiguations' => "Pådjes avou des loyéns viè des pådjes d' omonimeye",
'disambiguationspage' => 'Template:omonimeye',
'disambiguations-text' => "Ces pådjes ci loynut eviè ene '''pådje d' omonimeye'''.
Ele divrént purade raloyî direk å mwaisse sudjet.<br />
Ene pådje est waiteye come pådje d' omonimeye s' ele eploye on modele k' est loyî a [[MediaWiki:Disambiguationspage]].",

'doubleredirects' => 'Dobes redjiblaedjes',
'doubleredirectstext' => "Cisse pådje ci mostere les dobes redjiblaedjes (pådjes ki redjiblèt viè ene ôte pådje di redjiblaedje).
Tchaeke roye a-st on loyén viè l' prumî eyet l' deujhinme redjiblaedje, avou on mostraedje del såme do deujhinme redjiblaedje, çou ki å pus sovint dene li «vraiy» årtike såme, ki l' prumî redjiblaedje divreut evoyî viè lu.
Lis intrêyes <del>bårêyes</del> otn ddja stî coridjeyes.",
'double-redirect-fixed-move' => "[[$1]] a stî displaecî.
Asteure c' est on redjiblaedje viè [[$2]].",
'double-redirect-fixer' => 'Coridjaedje des dobes redjiblaedjes',

'brokenredirects' => 'Pierdous redjiblaedjes',
'brokenredirectstext' => "Les redjiblaedjes shuvants evoyèt so ene pådje ki n' egzistêye nén:",
'brokenredirects-edit' => 'candjî',
'brokenredirects-delete' => 'disfacer',

'withoutinterwiki' => 'Pådjes sins loyéns eterwiki',
'withoutinterwiki-summary' => "Les pådjes shuvantes n' ont nén des loyéns viè ds ôtes lingaedjes.",
'withoutinterwiki-legend' => 'Betchete',
'withoutinterwiki-submit' => 'Vey',

'fewestrevisions' => "Årtikes k' on n' î a waire bodjî",

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|octet|octets}}',
'ncategories' => '$1 {{PLURAL:$1|categoreye|categoreyes}}',
'nlinks' => '$1 {{PLURAL:$1|loyén|loyéns}}',
'nmembers' => '$1 {{PLURAL:$1|mimbe|mimbes}}',
'nrevisions' => '$1 {{PLURAL:$1|modêye|modêyes}}',
'nviews' => 'léjhowe $1 {{PLURAL:$1|côp|côps}}',
'nimagelinks' => 'Eployî so $1 pådje{{PLURAL:$1||s}}',
'ntransclusions' => 'eployî so $1 pådje{{PLURAL:$1||s}}',
'specialpage-empty' => 'Cisse pådje cial est vude.',
'lonelypages' => 'Pådjes ôrfulinnes',
'uncategorizedpages' => 'Pådjes sins nole categoreye',
'uncategorizedcategories' => 'Categoreyes nén categorijheyes',
'uncategorizedimages' => 'Fitchîs nén categorijhîs',
'uncategorizedtemplates' => 'Modele nén categorijhî',
'unusedcategories' => 'Categoreyes nén eployeyes',
'unusedimages' => 'Imådjes nén eployeyes',
'popularpages' => 'Pådjes les pus léjhowes',
'wantedcategories' => 'Categoreyes les pus rcwerowes',
'wantedpages' => 'Pådjes les pus rcwerowes',
'wantedfiles' => 'Fitchîs les pus rcwerous',
'wantedtemplates' => 'Modeles ricwerous',
'mostlinked' => 'Pådjes les pus loyeyes',
'mostlinkedcategories' => 'Categoreyes les pus loyeyes',
'mostlinkedtemplates' => 'Modeles les pus eployîs',
'mostcategories' => "Årtikes avou l' pus di categoreyes",
'mostimages' => 'Imådjes les pus loyeyes',
'mostrevisions' => "Årtikes avou l' pus di candjmints",
'prefixindex' => 'Indecse pa betchete',
'shortpages' => 'Coûtès pådjes',
'longpages' => 'Longowès pådjes',
'deadendpages' => 'Pådjes sins nou loyén wiki',
'deadendpagestext' => "Les pådjes shuvantes n' ont nou loyén viè ds ôtès pådjes di {{SITENAME}}.",
'protectedpages' => 'Pådjes protedjeyes',
'protectedpages-indef' => "Seulmint les protedjaedje disk' a todi",
'protectedpages-cascade' => 'Seulmint les protedjaedjes e cascåde',
'protectedpagestext' => "Les pådjes shuvantes sont protedjeyes siconte li displaeçaedje ou l' candjmint do tecse",
'protectedpagesempty' => 'I gn a pol moumint nole pådje sifwaitmint protedjeye.',
'protectedtitles' => 'Tites protedjîs',
'protectedtitlestext' => "Les tites shuvants sont protedjîs, ça fwait k' on n' pout nén ahiver ene pådje lomêye inla.",
'protectedtitlesempty' => 'I gn a pol moumint nou tite sifwaitmint protedjî.',
'listusers' => 'Djivêye des uzeus',
'usereditcount' => '$1 candjmint{{PLURAL:$1||s}}',
'usercreated' => '{{GENDER:$3|Edjîstré|Edjîstrêye}} li $1 a $2',
'newpages' => 'Novelès pådjes',
'newpages-username' => "No d' elodjaedje:",
'ancientpages' => 'Viyès pådjes',
'move' => 'Displaecî',
'movethispage' => 'Displaecî cisse pådje',
'unusedimagestext' => "Les fitchîs shuvants egzistèt mins n' sont håynés dins nole pādje.
Notez tot l' minme ki d' ôtès waibes polèt aveur des loyéns viè ces imådjes la gråcès a ene direke hårdêye; do côp, ces imådjes aparexhèt chal, mågré k' ele soeyexhe eployeyes.",
'unusedcategoriestext' => "Les pådjes di categoreye shuvantes egzistént, mins i n' a nol årtike ni categoreye å dvins.",
'pager-newer-n' => '{{PLURAL:$1|$1 pus novea|$1 pus noveas}}',
'pager-older-n' => '{{PLURAL:$1|$1 pus vî|$1 pus vîs}}',

# Book sources
'booksources' => 'Sourdants po les lives',
'booksources-search-legend' => 'Cweri des sourdants po des lives',
'booksources-go' => 'I va',

# Special:Log
'specialloguserlabel' => 'Fwait pa:',
'speciallogtitlelabel' => 'Såme (tite ou uzeu):',
'log' => 'Djournås',
'all-logs-page' => 'Tos les djournås publiks',
'alllogstext' => "Håynaedje etercroejhlé di tos les djournås disponibes so {{SITENAME}}.<br />
Vos ploz defini l' håynaedje tot tchoezixhant ene sôre di djournå, on no d' uzeu, ou l' tite d' ene pådje (po ces deus dierins l' sitinme fwait l' diferince inte les grandes et les ptitès letes).",
'logempty' => "Rén n' corespond dins l' djournå.",
'log-title-wildcard' => "Cweri emey les tites ki cmincèt avou ç' tecse la",

# Special:AllPages
'allpages' => 'Totes les pådjes',
'alphaindexline' => 'di $1 a $2',
'nextpage' => 'Pådje shuvante ($1)',
'allpagesfrom' => 'Håyner les pådjes a pårti di:',
'allpagesto' => "Håyner les pådjes disk' a:",
'allarticles' => 'Tos les årtikes',
'allinnamespace' => 'Totes les pådjes (espåce di lomaedje $1)',
'allnotinnamespace' => "Totes les pådjes (foû d' l' espåce di lomaedje $1)",
'allpagesprev' => 'Di dvant',
'allpagesnext' => 'Shuvant',
'allpagessubmit' => 'I va',
'allpagesprefix' => "Håyner les pådjes avou l' betchete:",
'allpagesbadtitle' => "Li tite di pådje diné n' est nén valide oudonbén il a-st ene betchete di loyén eterlingaedje ou eterwiki. Ça s' pout k' il åye onk ou d' pus d' caracteres ki n' si polèt nén eployî dins les tites.",

# Special:Categories
'categories' => 'Categoreyes',
'categoriespagetext' => '{{PLURAL:$1|Li categoreye shuvante est eployeye|Les categoreyes shuvantes sont-st eployeyes}} pa des pådjes ou des fitchîs.
[[Special:UnusedCategories|Les categoreyes nén eployeyes]] èn sont nén håynêyes chal.
Loukîz eto [[Special:WantedCategories|les categoreyes dimandêyes]].',
'categoriesfrom' => 'Håyner les categoreyes a pårti di:',
'special-categories-sort-count' => 'relére pa nombe di cayets',
'special-categories-sort-abc' => 'relére alfabeticmint',

# Special:DeletedContributions
'deletedcontributions' => 'Contribouwaedjes disfacés',
'deletedcontributions-title' => 'Contribouwaedjes disfacés',
'sp-deletedcontributions-contribs' => 'contribouwaedjes',

# Special:LinkSearch
'linksearch' => 'Cweri des dfoûtrinnès hårdêyes',
'linksearch-pat' => 'Patron pol cweraedje:',
'linksearch-ns' => 'Espåce di lomaedje:',
'linksearch-ok' => 'Cweri',
'linksearch-text' => 'Des caracteres «djokers» polèt esse eployîs, metans «*.wikipedia.org».
Mins i fåt pol moens on dominne di prumî livea, metans «*.org»<br />
Protocoles ricnoxhous: <code>$1</code> (nelzès metoz nén dins vosse tchinne di cweraedje).',
'linksearch-line' => "$1 est loyî a pårti d' $2",
'linksearch-error' => "Les caracteres djokers èn polèt esse eployîs k' a l' atake d' on no d' dominne ou d' lodjoe.",

# Special:ListUsers
'listusersfrom' => 'Håyner les uzeus a pårti di:',
'listusers-submit' => 'Vey',
'listusers-noresult' => 'Nol uzeu di trové.',
'listusers-blocked' => '({{GENDER:$1|bloké|blokêye}})',

# Special:Log/newusers
'newuserlogpage' => 'Djournå des noveas uzeus',
'newuserlogpagetext' => "Chal pa dzo c' est ene djivêye des uzeus novelmint eredjîstrés.",

# Special:ListGroupRights
'listgrouprights-members' => '(djivêye des mimbes)',

# E-mail user
'mailnologin' => "Nole adresse d' evoyeu",
'mailnologintext' => "Po-z evoyî èn emile a èn ôte uzeu i vs fåt esse [[Special:UserLogin|elodjî]] eyet aveur ene adresse emile d' evoyeu ki soeye valide dins vos [[Special:Preferences|preferinces]].",
'emailuser' => "Emiler a l' uzeu",
'emailpage' => 'Emilaedje a èn uzeu',
'emailpagetext' => "Vos ploz eployî l' formulrece chal pa dzo po-z evoyî èn emile a l' uzeu.
L' adresse emile k' i gn a dins [[Special:Preferences|vos preferinces]] serè-st eployeye
come adresse di l' evoyeu (adresse «From:» di l' emile),
po ki l' riçuveu poye risponde.",
'usermailererror' => "Åk n' a nén stî tot voyant l' emile:",
'defemailsubject' => "Emile da l' uzeu «$1» so {{SITENAME}}",
'noemailtitle' => "Pont d' adresse emile",
'noemailtext' => "Cist uzeu chal n' a nén dné d' adresse emile valide.",
'emailfrom' => 'Di:',
'emailto' => 'Po:',
'emailsubject' => 'Sudjet:',
'emailmessage' => 'Messaedje:',
'emailsend' => 'Evoyî',
'emailccme' => "M' emiler ene copeye do messaedje",
'emailccsubject' => 'Copeyee di vosse messaedje a $1: $2',
'emailsent' => 'Emile evoyî',
'emailsenttext' => 'Vost emilaedje a stî evoyî comifåt.',

# Watchlist
'watchlist' => 'Pådjes shuvowes',
'mywatchlist' => 'Pådjes shuvowes',
'watchlistfor2' => 'Pa $1 ($2)',
'nowatchlist' => 'Vosse djivêye des pådjes a shuve est vude.',
'watchlistanontext' => 'I vs fåt $1 po vey ou candjî les cayets di vosse djivêye des shuvous.',
'watchnologin' => "Vos n' estoz nén elodjî",
'watchnologintext' => 'I vs fåt esse [[Special:UserLogin|elodjî]] po pleur candjî vosse djivêye des pådjes a shuve.',
'addedwatchtext' => "Li pådje «<nowiki>$1</nowiki>» a stî radjoutêye a vosse [[Special:Watchlist|djivêye des pådjes a shuve]].
Tos les candjmints k' i gn årè di cisse pådje chal,
eyet di si pådje di copene, seront håynés chal, eyet li pådje serè metowe e '''cråssès letes'''
el [[Special:RecentChanges|djivêye des dierins candjmints]] po k' ça soeye pus åjhey por vos del rimårker.

Si vos vloz bodjî l' pådje foû di vosse djivêye des shuvous, clitchîz so «Èn pus shuve li pådje» dins l' bår di menu sol costé.",
'removedwatchtext' => 'Li pådje «[[:$1]]» a stî bodjeye foû di vosse djivêye des pådjes a shuve.',
'watch' => 'Shuve',
'watchthispage' => 'Shuve cisse pådje',
'unwatch' => 'Èn pus shuve',
'unwatchthispage' => 'Èn pus shuve li pådje',
'notanarticle' => 'Nén èn årtike',
'watchnochange' => "Nole des pådjes di vosse djivêye di pådjes a shuve n' a stî candjeye dins l' termene di tins dmandêye.",
'watchlist-details' => 'Vos avoz {{PLURAL:$1|$1 pådje shuvowe|$1 pådjes shuvowes}} (sins conter les pådjes di copene).',
'wlheader-enotif' => '* Li notifiaedje pa emile est en alaedje.',
'wlheader-showupdated' => "* Les pådjes k' ont candjî dispoy vosse dierinne vizite sont metowes e '''cråssès letes'''",
'watchmethod-recent' => "Cwerant après les pådjes k' ont stî candjeyes dierinnmint ki sont eto des pådjes shuvowes",
'watchmethod-list' => "Cwerant après les pådjes shuvowes k' ont stî candjeyes dierinnmint",
'watchlistcontains' => 'I gn a {{PLURAL:$1|$1 pådje|$1 pådjes}} e vosse djivêye des pådjes a shuve.',
'iteminvalidname' => "Åk n' a nén stî avou «$1», li no n' est nén valide...",
'wlnote' => "Chal pa dzo {{PLURAL:$1|li dierin candjmint|les '''$1''' dierins candjmints}} {{PLURAL:$2|del dierinne eure|des '''$2''' dierinnès eures}}, disk' å $3 a $4.",
'wlshowlast' => 'Mostrer les dierin(nè)s $1 eures, $2 djoûs ou $3',
'watchlist-options' => 'Tchuzes del djivêye des shuvous',

'enotif_mailer' => 'Notifiaedje pa emile di {{SITENAME}}',
'enotif_reset' => 'Mårker totes les pådjes come vizitêyes',
'enotif_newpagetext' => "C' est ene nouve pådje.",
'changed' => 'candjeye',
'created' => 'ahivêye',
'enotif_subject' => 'Li pådje «$PAGETITLE» so {{SITENAME}} a stî $CHANGEDORCREATED pa $PAGEEDITOR',
'enotif_lastvisited' => 'Loukîz $1 po tos les candjmints dispoy vosse dierinne vizite.',
'enotif_body' => 'Binamé $WATCHINGUSERNAME,

Li pådje «$PAGETITLE» so {{SITENAME}} a stî $CHANGEDORCREATED li $PAGEEDITDATE pa $PAGEEDITOR,
loukîz $PAGETITLE_URL pol modêye do moumint.

$NEWPAGE

Comintaire do candjeu: $PAGESUMMARY $PAGEMINOREDIT

Contak do candjeu:
emile: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

I n\' årè nén d\' ôtes notifiaedjes po ds ôtes candjmints di ç\' minme pådje ci tant k\' vos n\' l\' åroz nén vizitêye.
Vos ploz eto rimete a noû les drapeas di notifiaedje po totes les pådjes di vosse djivêye des pådjes a shuve.


Vosse binamé sistinme di notifiaedje so {{SITENAME}}

--
Po candjî l\' apontiaedje di vos notifiaedjes pa emile, loukîz
{{canonicalurl:{{#special:Preferences}}}}

Po candjî l\' apontiaedje di vosse djivêye a shuve, loukîz
{{canonicalurl:{{#special:EditWatchlist}}}}

Po rsaetchî l\' pådje di vosse djivêye a shuve, alez so
$UNWATCHURL

Po pus d\' aidance:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => "Disfacer l' pådje",
'confirm' => 'Acertiner',
'excontent' => 'li contnou esteut: «$1»',
'excontentauthor' => "li contnou esteut: «$1» (eyet l' seu contribouweu esteut «$2»)",
'exbeforeblank' => "li contnou dvant l' disfaçaedje esteut: «$1»",
'exblank' => 'li pådje esteut vude',
'delete-confirm' => 'Disfacer «$1»',
'delete-legend' => 'Disfacer',
'historywarning' => "'''Asteme:''' Li pådje ki vos alez disfacer a-st ene istwere avou a pô près $1 modêye{{PLURAL:$1||s}}:",
'confirmdeletetext' => "Vos alez disfacer ene pådje avou tote si istwere.
Acertinez s' i vs plait ki c' est bén çoula ki vos vloz fé,
ki vos comprindoz les consecwinces, et ki vos fjhoz çoula
tot [[{{MediaWiki:Policy-url}}|shuvant les rîles]].",
'actioncomplete' => 'Fwait',
'actionfailed' => "L' accion a fwait berwete",
'deletedtext' => 'Li pådje «$1» a stî disfacêye. Loukîz li $2 po ene
djivêye des dierins disfaçaedjes.',
'dellogpage' => 'Djournå des disfaçaedjes',
'dellogpagetext' => "Chal pa dzo c' est l' djivêye des dierins disfaçaedjes.",
'deletionlog' => 'djournå des disfaçaedjes',
'reverted' => 'Rimetou ene modêye di dvant',
'deletecomment' => 'Råjhon:',
'deleteotherreason' => 'Ene råjhon diferinne ou di pus:',
'deletereasonotherlist' => 'Ôte råjhon',
'deletereason-dropdown' => "* Råjhons les pus corantes po disfacer
** Dimande di l' oteur
** Violåcion d' abondroets
** Vandalisse",
'delete-edit-reasonlist' => 'Candjî les råjhons do disfaçaedje',
'delete-toobig' => "Cisse pådje ci a ene foû grande istwere, avou dpus di $1 modêye{{PLURAL:$1||s}}.
Li disfaçaedje des sfwaitès pådjes a stî dismetou po-z espaitchî k' i gn åye des problinmes so {{SITENAME}}.",
'delete-warning-toobig' => "Cisse pådje ci a ene foû grande istwere, avou dpus di $1 modêye{{PLURAL:$1||s}}.
Si disfaçaedje pôreut fé des problinmes avou l' rotaedje del båze di dnêyes so {{SITENAME}}; 
nel fijhoz k' avou asteme.",

# Rollback
'rollbacklink' => 'netyî',
'cantrollback' => "Dji n' sai disfé les candjmints; li dierin contribouweu est li seu oteur po cist årtike ci.",
'alreadyrolled' => "Dji n' sai disfé li dierin candjmint di [[$1]] fwait pa [[User:$2|$2]] ([[User talk:$2|Copene]]);
ene sakî d' ôte a ddja candjî l' årtike ou ddja rmetou l' modêye di dvant.

Li dierin candjmint a stî fwait pa [[User:$3|$3]] ([[User talk:$3|Copene]]).",
'editcomment' => "Li rascourti do candjmint esteut: «''$1''».",
'revertpage' => 'Disfwait les candjmints da [[Special:Contributions/$2|$2]] ([[User talk:$2|copene]]); li dierin candjmint est asteure da [[User:$1|$1]]',

# Protect
'protectlogpage' => 'Djournå des protedjaedjes',
'protectlogtext' => "Chal pa dzo c' est ene djivêye des protedjaedjes et disprotedjaedjes des pådjes.
Loukîz al [[Special:ProtectedPages|djivêye des pådjes protedjeyes]] po vey les protedjaedjes ki sont en alaedje pol moumint.",
'protectedarticle' => '«[[$1]]» protedjî',
'modifiedarticleprotection' => "a candjî l' livea d' protedjaedje di «[[$1]]»",
'unprotectedarticle' => 'a disprotedjî «[[$1]]»',
'movedarticleprotection' => 'a displaecî les parametes di protedjaedje di «[[$1]]» eviè «[[$2]]»',
'protect-title' => 'Protedjant «$1»',
'protect-title-notallowed' => "Livea d' protedjaedje di «$1»",
'prot_1movedto2' => '[[$1]] displaecî viè [[$2]]',
'protect-badnamespace-title' => 'Espåce di lomaedjé nén protedjåve',
'protect-badnamespace-text' => "Les pådjes e cist espåce di lomaedje ci n' polèt nén esse protedjeyes.",
'protect-legend' => "Acertinez l' protedjaedje",
'protectcomment' => 'Råjhon:',
'protectexpiry' => 'Termene:',
'protect-unchain-permissions' => "Disclawer d' ôtès tchuzes di protedjaedje",
'protect-text' => "Vos ploz droci vey eyet candjî l' livea d' protedjaedje pol pådje '''$1'''.",
'protect-default' => 'Permete a tos les uzeus',
'protect-level-autoconfirmed' => 'Bloker les noveas uzeus et les cis nén edjîstrés',
'protect-level-sysop' => 'Seulmint les manaedjeus',
'protect-summary-cascade' => 'e cascåde',
'protect-expiring' => 'finixh li $1 (UTC)',
'protect-expiring-local' => 'finixh li $1',
'protect-expiry-indefinite' => 'po todi',
'protect-cascade' => 'Protedjî eto les modeles eployîs so cisse pådje ci (protedjaedje e cascåde)',
'protect-othertime' => 'Date di fén:',
'protect-othertime-op' => 'ôte (a vos del diner)',
'protect-existing-expiry' => 'Li protedjaedje finixh li $2 a $3',
'protect-otherreason' => 'Ene råjhon diferinne ou di pus:',
'protect-otherreason-op' => 'Ôte råjhon',
'protect-expiry-options' => '1 eure:1 hour,1 djoû:1 day,1 samwinne:1 week,2 samwinnes:2 weeks,1 moes:1 month,3 moes:3 months,6 moes:6 months,1 anêye:1 year,po todi:infinite',
'restriction-type' => 'Permission po:',
'restriction-level' => "Livea d' protedjaedje:",
'minimum-size' => 'Grandeu minimom',
'maximum-size' => 'Grandeu macsimom:',
'pagesize' => '(octets)',

# Restrictions (nouns)
'restriction-edit' => 'candjî',
'restriction-move' => 'displaecî',
'restriction-create' => 'ahiver',
'restriction-upload' => 'eberweter',

# Restriction levels
'restriction-level-sysop' => 'protedjaedje complet',
'restriction-level-autoconfirmed' => 'dimey-protedjaedje',
'restriction-level-all' => 'tos les liveas',

# Undelete
'undelete' => 'Rapexhî des disfacêyès pådjes',
'undeletepage' => 'Vey et rapexhî des disfacêyès pådjes',
'viewdeletedpage' => 'Vey les disfacêyès pådjes',
'undeletepagetext' => '{{PLURAL:$1|Li pådje shuvante a stî disfacêye mins elle est co ezès årtchives, do côp ele pout esse rapexheye|Les pådjes shuvantes ont stî disfacêyes mins ele sont co ezès årtchives, do côp ele polèt esse rapexheyes}}.
Les årtchives polèt esse rnetieyes di tinzintins.',
'undelete-fieldset-title' => 'Rapexhî les modêyes',
'undeleteextrahelp' => "Po rapexhî l' istwere etire del pådje, leyîz vudes totes les boesses a clitchî eyet clitchîz sol boton «'''{{int:undeletebtn}}'''».
Po rapexhî seulmint des modêyes k' i gn a, tchoezixhoz les cenes ki vos vloz avou les boesses a clitchî, eyet poy clitchîz sol boton «'''{{int:undeletebtn}}'''».",
'undeleterevisions' => '$1 modêye{{PLURAL:$1||s}} ezès årtchives',
'undeletehistory' => "Si vos rapexhîz l' pådje, tote l' istwere del pådje serè rapexheye eto.
Si ene novele pådje avou l' minme no a stî askepieye dispoy li disfaçaedje di cisse-chal,
les rapexheyès modêyes seront metowes e l' istwere del nouve pådje, come viyès modêyes di cisse-lale.",
'undeletehistorynoadmin' => "Cist årtike a stî disfacé. Li råjhon do
disfaçaedje est dnêye chal pa dzo, avou les detays des uzeus k' ont
candjî l' pådje divant do disfaçaedje. Li tecse di ces modêyes disfacêyes
ni pout esse veyou ki des manaedjeus.",
'undeletebtn' => 'Rapexhî',
'undeletelink' => 'vey/rapexhî',
'undeleteviewlink' => 'vey',
'undeletereset' => 'Netyî',
'undeletecomment' => 'Råjhon:',
'undeletedrevisions' => '{{PLURAL:$1|1 modêye|$1 modêyes}} di rapexheyes',
'undeletedrevisions-files' => '{{PLURAL:$1|1 modêye|$1 modêyes}} et {{PLURAL:$2|1 fitchî|$2 fitchîs}} di rapexhîs',
'undeletedfiles' => '{{PLURAL:$1|1 fitchî|$1 fitchîs}} di rapexhîs',
'cannotundelete' => "Li rapexhaedje a fwait berwete; motoit bén k' ene ôte sakî l' a ddja rapexhî.",
'undeletedpage' => "'''Li pådje $1 a stî rapexheye.'''

Loukîz l' [[Special:Log/delete|djournå des disfaçaedjes]] po ene djivêye des dierins disfaçaedjes eyet rapexhaedjes.",
'undelete-search-submit' => 'Cweri',
'undelete-filename-mismatch' => 'Nén possibe di rapexhî li fitchî do $1 : on nel ritrove nén.',
'undelete-bad-store-key' => "Nén possibe d' aler rapexhî li fitchî daté do $1: i n' esteut nén la divant li disfaçaedje.",
'undelete-missing-filearchive' => "Nén possibe d' aler rapexhî li fitchî avou l’ ID $1 pask' i n' est nén dins l' båze di dnêyes. Motoit k' il a ddja stî rapexhî dvant.",

# Namespace form on various pages
'namespace' => 'Espåce di lomaedje:',
'invert' => 'Tchuze å rvier',
'blanknamespace' => '(Mwaisse)',

# Contributions
'contributions' => "Ovraedjes di l' uzeu",
'contributions-title' => "Djivêye des ovraedjes di l' {{GENDER:$1|uzeu|uzeuse}} $1",
'mycontris' => 'Mi ovraedje',
'contribsub2' => "Po l' uzeu $1 ($2)",
'nocontribs' => "Nou candjmint di trové ki corespondreut a ç' critere la.",
'uctop' => '(dierinne)',
'month' => "dispu l' moes (et pus timpe)",
'year' => "Dispu l' anêye (et pus timpe):",

'sp-contributions-newbies' => 'Mostrer seulmint les contribouwaedjes des noveas contes',
'sp-contributions-newbies-sub' => 'Emey les noveas uzeus',
'sp-contributions-newbies-title' => 'Contribouwaedjes des noveas uzeus',
'sp-contributions-blocklog' => 'djournå des blocaedjes',
'sp-contributions-deleted' => 'contribouwaedjes disfacés',
'sp-contributions-uploads' => 'eberwetaedjes',
'sp-contributions-logs' => 'djournås',
'sp-contributions-talk' => 'copiner',
'sp-contributions-userrights' => 'droets',
'sp-contributions-blocked-notice' => '{{GENDER:$1|Cist uzeu est bloké|Ciste uzeuse est blokêye}} pol moumint.
Li dierinne intrêye e djournå des blocaedjes est dnêye chal pa dzo po infôrmåcion:',
'sp-contributions-blocked-notice-anon' => 'Ciste adresse IP est blokêye pol moumint.
Li dierinne intrêye e djournå des blocaedjes est dnêye chal pa dzo po infôrmåcion:',
'sp-contributions-search' => 'Cweri les contribouwaedjes',
'sp-contributions-username' => "Adresse IP ou no d' uzeu:",
'sp-contributions-submit' => 'Cweri',

# What links here
'whatlinkshere' => 'Pådjes ki loynut chal',
'whatlinkshere-title' => 'Pådjes ki loynut aviè «$1»',
'whatlinkshere-page' => 'Pådje:',
'linkshere' => "Les pådjes ki shuvèt ont des loyéns viè '''[[:$1]]''':",
'nolinkshere' => "Nole pådje avou des loyéns viè '''[[:$1]]'''.",
'isredirect' => 'pådje di redjiblaedje',
'isimage' => "loyén viè l' fitchî",
'whatlinkshere-prev' => '{{PLURAL:$1|di dvant|$1 di dvant}}',
'whatlinkshere-next' => '{{PLURAL:$1|shuvant|$1 shuvants}}',
'whatlinkshere-links' => '← loyaedjes',
'whatlinkshere-hideredirs' => '$1 les rdjiblaedjes',
'whatlinkshere-hidetrans' => '$1 les inclusions',
'whatlinkshere-hidelinks' => '$1 les loyaedjes',
'whatlinkshere-hideimages' => "$1 fitchîs k' eploynut cist imådje ci",
'whatlinkshere-filters' => 'Passetes',

# Block/unblock
'autoblockid' => 'Blocaedje otomatike #$1',
'blockip' => 'Bloker èn uzeu',
'blockiptext' => "Rimplixhoz les tchamps chal pa dzo po bloker
l' accès e scrijhaedje d' èn uzeu dné ou a pårt d' ene
adresse IP dnêye. Çouci èn doet esse fwait ki po-z arester les
vandales, et çoula doet esse fwait tot shuvant les
[[{{MediaWiki:Policy-url}}|rîles]].
Dinez ene råjhon do blocaedje (eg: dijhoz les pådjes k' ont
stî vandalijheyes).",
'ipadressorusername' => "Adresse IP ou no d' uzeu",
'ipbexpiry' => 'Tins do blocaedje',
'ipbreason' => 'Råjhon:',
'ipbsubmit' => 'Bloker cist uzeu',
'ipbother' => 'Ôte termene',
'ipboptions' => '2 eures:2 hours,1 djoû:1 day,3 djoûs:3 days,1 samwinne:1 week,2 samwinnes:2 weeks,1 moes:1 month,3 moes:3 months,6 moes:6 months,1 anêye:1 year,po todi:infinite',
'ipbotheroption' => 'ôte',
'badipaddress' => "Nol uzeu avou ç' no la, ou adresse IP nén valide",
'blockipsuccesssub' => 'Li blocaedje a stî comifåt',
'blockipsuccesstext' => '«[[Special:Contributions/$1|$1]]» a stî {{GENDER:$1|bloké|blokêye}}.<br />
Loukîz li [[Special:BlockList|djivêye des blocaedjes]] po verifyî les blocaedjes.',
'unblockip' => 'Disbloker èn uzeu',
'unblockiptext' => "Rimplixhoz les tchamps chal pa dzo po ridner accès e scrijhaedje a èn uzeu ou adresse IP k' estént blokés.",
'ipusubmit' => "Rissaetchî l' blocaedje",
'unblocked' => '«[[User:$1|$1]]» a stî disbloké',
'unblocked-range' => '$1 a stî disbloké',
'unblocked-id' => 'Li blocaedje $1 a stî rsaetchî',
'blocklist' => 'Uzeus blokés',
'ipblocklist' => 'Uzeus blokés',
'ipblocklist-legend' => 'Cweri après èn uzeu bloké',
'blocklist-userblocks' => 'Catchî les blocaedjes des contes',
'blocklist-tempblocks' => 'Catchî les blocaedjes timporaires',
'blocklist-addressblocks' => "Catchî les blocaedjes d' ene seule adresse IP",
'blocklist-rangeblocks' => 'Catchî les blocaedjes di fortchetes',
'blocklist-timestamp' => 'Date et eure',
'blocklist-target' => 'Såme',
'blocklist-reason' => 'Råjhon',
'ipblocklist-submit' => 'Cweri',
'ipblocklist-localblock' => 'Blocaedje locå',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Ôte blocaedje|Ôtes blocaedjes}}',
'infiniteblock' => 'po todi',
'expiringblock' => "disk' å $1 a $2",
'blocklink' => 'bloker',
'unblocklink' => 'disbloker',
'change-blocklink' => "candjî l' blocaedje",
'contribslink' => 'contribouwaedjes',
'emaillink' => 'evoyî èn emile',
'autoblocker' => "Bloké otomaticmint paski vos eployîz li minme adresse IP ki «[[User:$1|$1]]». Råjhon do blocaedje «'''$2'''».",
'blocklogpage' => 'Djournå des blocaedjes',
'blocklogentry' => 'a bloké «[[$1]]» po ene termene di $2 $3',
'blocklogtext' => "Çouchal, c' est on djournå des blocaedjes eyet disblocaedjes d' uzeus.
Les adresses IP blokêyes otomaticmint èn sont nén håynêyes.
Loukîz li [[Special:BlockList|djivêye des blocaedjes]] po vey les blocaedjes èn alaedje pol moumint.",
'unblocklogentry' => 'a disbloké «$1»',
'range_block_disabled' => "Li possibilité po les manaedjeus di bloker des fortchetes d' adresses IP a stî dismetowe.",
'ipb_expiry_invalid' => 'Tins di blocaedje nén valide.',
'ip_range_invalid' => "Fortchete d' adresses IP nén valide.",
'proxyblocker' => 'Blocaedje di procsi',
'proxyblockreason' => "Voste adresse IP a stî blokêye paski c' est on procsi k' est å lådje. Contactez vost ahesseu Internet ou l' siervice di sopoirt tecnike eyet lzî dire po çoula, la k' c' est on problinme di såvrité serieus.",
'proxyblocksuccess' => 'Fwait.',
'sorbsreason' => "Voste adresse IP si trove dins l' djivêye des procsis å lådje di DNSBL.",
'sorbs_create_account_reason' => "Voste adresse IP si trove dins l' djivêye des procsis å lådje di DNSBL. Vos n' poloz nén ahiver on conte d' uzeu.",

# Developer tools
'lockdb' => 'Aclawaedje del båze di dnêyes',
'lockdbsuccesssub' => "L' aclawaedje del båze di dnêyes a stî comifåt",
'lockdbsuccesstext' => 'Li båze di dnêyes a stî aclawêye.<br />
Ni rovyîz nén del [[Special:UnlockDB|disserer]] cwand vos åroz tot fwait avou voste etertinaedje.',
'lockedbyandtime' => '(pa $1 li $2 a $3)',

# Move page
'move-page' => 'Rilomer $1',
'move-page-legend' => "Displaecî l' pådje",
'movepagetext' => "Chal vos ploz candjî l' no d' ene pådje, dj' ô bén displaecî l' pådje, eyet si istwere, eviè l' novea no.
Li vî tite divénrè-st ene pådje di redjiblaedje viè l' novele.
Vos ploz mete otomaticmint a djoû les redjiblaedje k' evoyént sol vî tite.
Si vos nel vloz nén fé, acertinez vs di verifyî s' i n' a nén des [[Special:DoubleRedirects|dobes]] ou [[Special:BrokenRedirects|crons redjiblaedjes]].
Vos estoz responsåve di fé çou k' i fåt po k' les loyéns continouwexhe di moenner la k' i fåt.

Notez k' el pådje èn serè '''nén''' displaeceye s' i gn a ddja ene pådje avou l' novea tite, a moens k' ele soeye vude, ou ene pådje di redjiblaedje, et k' ele n' åye nole istwere.
Çoula vout dire ki vos ploz ridisplaecî ene pådje viè l' no k' ele aveut djusse divant, et insi disfé vosse prumî displaeçaedje, å cas ou vos vs rindrîz conte ki vos avoz fwait ene flotche;
ey eto ki vos n' poloz nén spotchî par accidint ene pådje k' egzistêye dedja.

'''ASTEME!'''
On displaeçaedje pout esse on consecant et nén atindou candjmint po ene pådje foirt léjhowe;
s' i vs plait tuzez bén åzès consecwinces divant d' continouwer.",
'movepagetalktext' => "Li pådje di copene associeye serè
displaeceye otomaticmint avou, '''a moens ki:'''
*Ene pådje di copene nén vude egzistêye dedja dizo l' novea no,
*Vos disclitchrîz l' boesse a clitchî chal pa dzo.

Dins ces cas la, vos dvroz displaecî l' pådje di copene al mwin, ou rcopyî
si contnou, si vos l' vloz mete adlé l' novea no
d' l' årtike.",
'movearticle' => 'Displaecî di',
'movenologin' => 'Nén elodjî',
'movenologintext' => 'I vs fåt esse èn uzeu eredjîstré eyet esse [[Special:UserLogin|elodjî]] por vos pleur displaecî ene pådje.',
'newtitle' => "Viè l' novea tite",
'move-watch' => 'Shuve cisse pådje cial',
'movepagebtn' => 'Displaecî',
'pagemovedsub' => 'Li displaçaedje a stî comifåt',
'articleexists' => "Ene pådje egzistêye dedja avou ç' no la, oudonbén
li no k' vos avoz tchoezi n' est nén valide.
Tchoezixhoz è èn ôte s' i vs plait.",
'talkexists' => "'''Li pådje leye minme a stî displaeceye comifåt, mins nén li pådje di copene, ca i gn aveut ddja ene pådje di copene k' egzistéve al novele plaece. I vs fårè copyî l' tecse del pådje di copene al mwin.'''",
'movedto' => 'displaecî viè',
'movetalk' => 'Displaecî li pådje di copene avou, si ça astchait.',
'movelogpage' => 'Djournå des displaeçaedjes',
'movelogpagetext' => "Chal pa dzo c' est ene djivêye des pådjes k' on stî displaceyes.",
'movereason' => 'Råjhon:',
'revertmove' => 'disfé',
'delete_and_move' => 'Disfacer et displaecî',
'delete_and_move_text' => "==I gn a mezåjhe di disfacer==

L' årtike såme «[[:$1]]» egzistêye dedja. El voloz vs disfacer po vs permete di displaecî l' ôte?",
'delete_and_move_confirm' => "Oyi, disfacer l' pådje",
'delete_and_move_reason' => 'Disfacé po permete li displaeçaedje di «[[$1]]»',
'selfmove' => 'Les tites sourdant et såme sont les minmes; ene pådje ni pout nén esse displaeceye so leye minme.',
'fix-double-redirects' => "Rapontyî eto les rdjiblaedjes ki loynut aviè l' mwaisse tite",

# Export
'export' => 'Ricopyî des pådjes foû',
'exporttext' => "Vos ploz rcopyî foû l' tecse eyet l' istwere des candjmints d' ene pådje dinêye, ou co di sacwantes pådjes, eyet l' aveur dins on fitchî e cogne XML. Çoula pout adon esse ristitchî dins èn ôte wiki k' eploye MediaWiki, åd triviè del pådje di rstitchaedje (Special:Import).

Po rcopyî des pådjes foû, metoz les tites des pådjes dins l' boesse di tecse chal pa dzo, on tite pa roye, eyet tchoezixhoz si vos vloz totes les modêyes avou l' istwere, ou rén kel dierinne modêye avou fok les racsegnes sol dierin candjmint.

Dins ç' dierin cas, vos ploz eto eployî ene hårdêye, eg: [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] pol pådje «[[{{MediaWiki:Mainpage}}]]».",
'exportcuronly' => "Inclure fok li modêye do moumint, nén tote l' istwere",
'exportnohistory' => "----
'''Note:''' li rcopiaedje foû di tote l' istwere des pådjes a stî dismetou cåze di problinmes di tchedje des sierveus.",
'export-submit' => 'Ricopyî foû',
'export-addcat' => 'Radjouter',

# Namespace 8 related
'allmessages' => 'Tos les messaedjes ratournåves',
'allmessagesname' => 'No del variåve',
'allmessagesdefault' => 'Tecse prémetou',
'allmessagescurrent' => 'Tecse pol moumint',
'allmessagestext' => "Çouchal est ene djivêye des messaedjes sistinme k' i gn a dins l' espåce di lomaedje ''MediaWiki:''.
Loukîz les pådjes sol [//www.mediawiki.org/wiki/Localisation Locålijhaedje di MediaWiki] et 
[//translatewiki.net/ translatewiki.net] si vos vloz pårticiper avou l' ratournaeje djenerike di MediaWiki.",
'allmessagesnotsupportedDB' => "'''{{ns:special}}:AllMessages''' n' est nén sopoirté paski '''\$wgUseDatabaseMessages''' est dismetou.",
'allmessages-filter-legend' => 'Passete',
'allmessages-filter' => "Sorlon l' estat d' candjaedje:",
'allmessages-filter-unmodified' => 'Nén candjîs',
'allmessages-filter-all' => 'Totafwait',
'allmessages-filter-modified' => 'Candjîs',
'allmessages-prefix' => "Sorlon l' betchete:",
'allmessages-language' => 'Lingaedje:',
'allmessages-filter-submit' => 'Apliker',

# Thumbnails
'thumbnail-more' => 'Ragrandi',
'filemissing' => 'Fitchî mancant',
'thumbnail_error' => "Åk n' a nén stî tot fjhant l' pitite imådje: $1",

# Special:Import
'import' => 'Ristitchî des pådjes',
'importinterwiki' => 'Ricopiaedje eterwiki',
'import-interwiki-text' => "Tchoezixhoz on wiki eyet on tite di pådje did wice ricopyî l' contnou a stitchî chal.
Les dates des diferinnès modêyes eyet les nos des contribouweus seront consiervés.
Totes les accions di rcopiaedje eterwiki sont metowes e [[Special:Log/import|djournå des ristitchaedjes]].",
'import-interwiki-history' => "Ristitchî avou l' istwere di totes les modêyes",
'import-interwiki-submit' => 'Ristitchî',
'import-comment' => 'Comintaire:',
'importtext' => "S' i vs plait ricopyîz l' fitchî foû do sourdant wiki avou l' [[Special:Export|usteye di rcopiaedje foû]].
Et s' el schaper so voste éndjole, et poy li ristitchî droci.",
'importstart' => "Dj' enonde li ristitchaedje...",
'import-revision-count' => '{{PLURAL:$1|1 modêye|$1 modêyes}}',
'importnopages' => 'Nole pådje a ristitchî.',
'importfailed' => 'Li ristitchaedje a fwait berwete: <nowiki>$1</nowiki>',
'importunknownsource' => 'Sourdant nén cnoxhou pol ristitchaedje',
'importcantopen' => "Dji n' sai drovi l' fitchî a ristitchî",
'importbadinterwiki' => 'Cron loyén eterwiki',
'importnotext' => "Vude ou pont d' tecse",
'importsuccess' => 'Li ristitchaedje a stî comifåt!',
'xml-error-string' => '$1 al roye $2, colone $3 (octet $4): $5',

# Import log
'importlogpage' => 'Djournå des ristitchaedjes',
'importlogpagetext' => "Ristitchaedjes (import) administratifs di pådjes avou leus istorikes di candjmints, a pårti d' ôtes wikis.",
'import-logentry-upload' => 'a ristitchî [[$1]] avou èn eberwetaedje di fitchî',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|modêye|modêyes}}',
'import-logentry-interwiki' => "a ristitchî $1 foû d' èn ôte wiki",
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|modêye|modêyes}} foû di $2',

# Tooltip help for the actions
'tooltip-pt-userpage' => "Pådje d' uzeu da minne",
'tooltip-pt-anonuserpage' => "Li pådje d' uzeu po l' adresse IP ki vos eployîz pol moumint",
'tooltip-pt-mytalk' => 'Pådje di copene da minne',
'tooltip-pt-anontalk' => 'Pådje di copene po les candjmints fwaits a pårti di ciste adresse IP ci',
'tooltip-pt-preferences' => 'Mes preferinces',
'tooltip-pt-watchlist' => 'Li djivêye des pådjes ki vos shujhoz po cwand ele sont candjeyes.',
'tooltip-pt-mycontris' => 'Djivêye des ovraedjes da minne',
'tooltip-pt-login' => "Vos estoz ecoraedjî d' vos elodjî, mins nerén, c' est nén oblidjî.",
'tooltip-pt-anonlogin' => "Vos estoz ecoraedjî d' vos elodjî, mins nerén, c' est nén oblidjî.",
'tooltip-pt-logout' => 'Vos dislodjî',
'tooltip-ca-talk' => 'Copene åd fwait do contnou del pådje',
'tooltip-ca-edit' => "Vos ploz candjî cisse pådje ci. S' i vs plait, eployîz l' boton «Vey divant» po vs acertiner k' tot est comifåt dvant d' schaper vos candjmints.",
'tooltip-ca-addsection' => 'Radjouter ene novele seccion',
'tooltip-ca-viewsource' => "Cisse pådje ci est protedjeye.
Vos ploz seulmint vey li côde sourdant, mins nén l' candjî.",
'tooltip-ca-history' => 'Viyès modêyes del pådje.',
'tooltip-ca-protect' => 'Protedjî cisse pådje ci',
'tooltip-ca-unprotect' => "Candjî l' protedjaedje del pådje",
'tooltip-ca-delete' => 'Disfacer ci pådje ci',
'tooltip-ca-undelete' => "Rapexhî les candjmitns fwaits al pådje divant k' ele soeyexhe disfacêye",
'tooltip-ca-move' => 'Displaecî cisse pådje ci',
'tooltip-ca-watch' => 'Radjouter cisse pådje ci al djivêye di vos årtikes shuvous',
'tooltip-ca-unwatch' => 'Bodjî cisse pådje ci di vosse djivêye des årtikes shuvous',
'tooltip-search' => 'Cweri so ci wiki chal',
'tooltip-search-go' => 'Potchî so ene pådje avou egzactumint ci no ci, si ele egzistêye.',
'tooltip-search-fulltext' => "Cweri les pådjes avou ç' tecse ci",
'tooltip-p-logo' => 'Mwaisse pådje',
'tooltip-n-mainpage' => 'Vizitez li Mwaisse pådje',
'tooltip-n-mainpage-description' => 'Vizitez li Mwaisse pådje',
'tooltip-n-portal' => "Åd fwait do pordjet, çou k' vos ploz fé, wice trover des sacwès",
'tooltip-n-currentevents' => "Des infôrmåcions so des evenmints d' actouwålité",
'tooltip-n-recentchanges' => "Li djivêye des dierins candjmints k' i gn a-st avou sol wiki.",
'tooltip-n-randompage' => "Tcherdjî ene pådje a l' astcheyance",
'tooltip-n-help' => "Li plaece po trover les responses a vos kesses so l' eployaedje do wiki.",
'tooltip-t-whatlinkshere' => "Djivêye di totes les pådjes k' ont des loyéns viè cisse pådje ci",
'tooltip-t-recentchangeslinked' => 'Dierins candjmints fwaits so des pådjes ki cisse pådje ci a des loyéns viè zeles',
'tooltip-feed-rss' => 'Sindicåcion RSS po cisse pådje ci',
'tooltip-feed-atom' => 'Sindicåcion Atom po cisse pådje ci',
'tooltip-t-contributions' => 'Vey li djivêye des ovraedjes fwait pa cist uzeu ci',
'tooltip-t-emailuser' => 'Evoyî èn emile a cist uzeu ci',
'tooltip-t-upload' => 'Eberweter sol sierveu des imådjes ou fitchîs media',
'tooltip-t-specialpages' => 'Djivêye di totes les pådjes sipeciåles',
'tooltip-t-print' => 'Modêye sicrirece-amiståve del pådje',
'tooltip-t-permalink' => 'Permanante hårdêye viè cisse modêye chal del pådje',
'tooltip-ca-nstab-main' => 'Vey li pådje di contnou',
'tooltip-ca-nstab-user' => "Vey li pådje di l' uzeu",
'tooltip-ca-nstab-media' => 'Vey li pådje di media',
'tooltip-ca-nstab-special' => "Çouchal, c' est ene pådje sipeciåle, vos n' poloz nén candjî l' pådje leye-minme.",
'tooltip-ca-nstab-project' => 'Vey li pådje di pordjet',
'tooltip-ca-nstab-image' => 'Vey li pådje do fitchî',
'tooltip-ca-nstab-mediawiki' => 'Vey li messaedje ratournåve do sistinme',
'tooltip-ca-nstab-template' => 'Vey li modele',
'tooltip-ca-nstab-help' => "Vey li pådje d' aidance",
'tooltip-ca-nstab-category' => 'Vey li pådje di categoreye',
'tooltip-minoredit' => "Mete çouci come on ptit candjmint d' rén do tot",
'tooltip-save' => 'Schaper vos candjmints [alt-s]',
'tooltip-preview' => "Prévey vos candjmints, fijhoz l' divant d' schaper s' i vs plait! [alt-p]",
'tooltip-diff' => 'Mostrer les candjmints ki vos avoz fwait e tecse. [alt-v]',
'tooltip-compareselectedversions' => 'Mostrer les diferinces etur les deus modêyes tchoezeyes di cisse pådje ci. [alt-v]',
'tooltip-watch' => 'Radjouter cisse pådje ci a vosse djivêye des shuvous [alt-w]',
'tooltip-recreate' => "Rifé cisse pådje ci mågré k' ele åye sitî disfacêye",
'tooltip-rollback' => "Li loyén «{{int:rollbacklink}}» permete di disfé d' on seu clitch tos les candjmints(s) fwaits sol pådje på dierin uzeu.",
'tooltip-undo' => "Li loyén «{{int:editundo}}» permete di disfé li candjmint et drouve li boesse di candjmint e môde prévoeyaedje.
Dj' ô bén, ça permete di disfé l' candjmint et d' mete on messaedje dins l' boesse di rascourti.",
'tooltip-summary' => 'Dinez on ptit rascourti',

# Stylesheets
'common.css' => '/* li côde CSS metou chal serè eployî pa totes les peas et tos les uzeus */',
'monobook.css' => "/* li côde CSS metou chal serè eployî pa tos les uzeus eployant l' pea «monobook» */",

# Metadata
'notacceptable' => 'Li sierveu wiki èn vos pout nén dner les dnêyes dins ene cogne ki vosse cliyint sait lére.',

# Attribution
'anonymous' => '{{PLURAL:$1|Uzeu anonime|Uzeus anonimes}} di {{SITENAME}}',
'siteuser' => "$1, {{GENDER:$2|uzeu d'|uzeuse di}} {{SITENAME}}",
'anonuser' => '$1, uzeu anonime di {{SITENAME}}',
'lastmodifiedatby' => 'Cisse pådje a stî candjeye pol dierin côp li $2, $1 pa $3.',
'othercontribs' => "Båzé so l' ovraedje da $1.",
'others' => 'co ds ôtes',
'siteusers' => "$1, {{PLURAL:$2|uzeu|uzeus}} d' {{SITENAME}}",
'anonusers' => '$1, {{PLURAL:$2|uzeu anonime|uzeus anonimes}} di {{SITENAME}}',
'creditspage' => 'Pådje di credits',
'nocredits' => "I n' a pont d' infôrmåcion di credits po cisse pådje ci.",

# Info page
'pageinfo-title' => 'Infôrmåcion po «$1»',
'pageinfo-views' => 'Nombe di lijhaedjes',
'pageinfo-watchers' => 'Nombe di shuveus',
'pageinfo-edits' => 'Nombe di candjmints',
'pageinfo-authors' => "Nombe d' oteurs diferins",

# Patrolling
'markaspatrolleddiff' => 'Marké come patrouyî',
'markaspatrolledtext' => 'Marker cisse pådje ci come dedja patrouyeye',

# Patrol log
'patrol-log-page' => 'Djournå des patrouyaedjes',
'patrol-log-header' => "Çouchal c' est on djournå des modêyes k' ont stî patrouyeyes.",

# Image deletion
'deletedrevision' => 'Viye modêye $1 disfacêye',
'filedelete-missing' => "Li fitchî «$1» n' pout nén esse disfacé, la k' i n' egzistêye nén.",
'filedelete-old-unregistered' => "Li modêye do fitchî dnêye «$1» ni s' trove nén el båze di dnêyes.",
'filedelete-current-unregistered' => "Li fitchî dné «$1» ni s' trove nén el båze di dnêyes.",

# Browsing diffs
'previousdiff' => '← Diferinces des candjmints di dvant',
'nextdiff' => 'Diferinces des candjmints shuvants →',

# Media information
'mediawarning' => "'''Asteme''': Ci fitchî chal pôreut esse evirussé.
Si vos l' enondez vos pôrîz infecter l' sistinme da vosse.",
'imagemaxsize' => "Limite pol grandeu des imådjes:<br />''(ezès pådjes d'i discrijhaedje di fitchîs)''",
'thumbsize' => 'Grandeu po les imådjetes (thumb):',
'widthheightpage' => '$1 × $2, $3 pådje{{PLURAL:$3||s}}',
'file-info-size' => '$1 × $2 picsels, groxheur do fitchî: $3, del sôre "MIME": $4',
'file-nohires' => "I n' a nén di pus grande finté.",
'svg-long-desc' => 'Fitchî SVG, finté di $1 × $2 picsels, grandeu: $3',
'show-big-image' => "Imådje a si grandeur d' oridjinne",

# Special:NewFiles
'newimages' => 'Galreye des nouvès imådjes',
'imagelisttext' => "Chal pa dzo c' est ene djivêye di '''$1''' {{PLURAL:$1|imådje relîte|imådjes relîtes}} $2.",
'showhidebots' => '($1 robots)',
'noimages' => "I n' a rén a vey.",
'ilsubmit' => 'Cweri',
'bydate' => 'pazès dates',
'sp-newimages-showfrom' => 'Mostrer les nouvès imådjes a pårti do $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '$1 segonde{{PLURAL:$1||s}}',
'minutes' => '$1 munute{{PLURAL:$1||s}}',
'hours' => '$1 eures{{PLURAL:$1||s}}',
'days' => '$1 djoû{{PLURAL:$1||s}}',
'ago' => 'i gn a $1',

# Bad image list
'bad_image_list' => "Li fôrmat est l' shuvant:

Seulmint les intrêyes di djivêye (dj' ô bén, les royes ki cmincèt avou ene sitoele «*») sont acontêyes.
Li prumî loén d' ene roye doet esse on loyén viè on fitchî k' on vout bloker si eployaedje.
Les ôtes loyéns dnés sol minme roye sont veyous come des foû-rîle, dj' ô bén les pådjes wice ki l' fitchî pout esse eployî",

# Metadata
'metadata' => 'Meta-dnêyes',
'metadata-help' => "Ci fitchî chal a des infôrmåcions di rawete, motoit bén radjoutêyes pa l' aparey foto limerike ou l' sicanrece eployeye po fé l' imådje.
Si l' imådje a stî candjeye dispoy adon, i s' pout ki sacwants detays ni corespondexhe pus totafwait.",
'metadata-expand' => 'Mostrer les stindous detays',
'metadata-collapse' => 'Catchî les stindous detays',
'metadata-fields' => "Les tchamps di meta-dnêyes des imådjes metous chal vont esse
håynés ezès pådjes d' imådje cwand l' tåvlea di meta-dnêyes
est raptiti. Les ôtes seront catchîs.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude",

# EXIF tags
'exif-imagewidth' => 'Lårdjeur',
'exif-imagelength' => 'Hôteur',
'exif-bitspersample' => 'Bits pa compôzant',
'exif-photometricinterpretation' => 'Compôzaedje des picsels',
'exif-orientation' => 'Oryintåcion',
'exif-samplesperpixel' => 'Nombe di compôzants',
'exif-xresolution' => "Finté d' coûtchî",
'exif-yresolution' => "Finté d' astampé",
'exif-datetime' => "Date ey eure ki l' fitchî a stî candjî",
'exif-imagedescription' => "Tite di l' imådje",
'exif-make' => 'Måke del camera',
'exif-model' => 'Modele del camera',
'exif-software' => 'Programe eployî',
'exif-artist' => 'Oteur',
'exif-copyright' => 'Ditinteu des abondroets',
'exif-exifversion' => "Modêye d' exif",
'exif-colorspace' => 'Espåce di coleurs',
'exif-usercomment' => "Comintaires di l' uzeu",
'exif-datetimeoriginal' => 'Date ey eure ki les dnêyes ont stî fwaites',
'exif-datetimedigitized' => 'Date ey eure do scanaedje',
'exif-exposuretime-format' => '$1 seg ($2)',
'exif-lightsource' => 'Sourdant del loumire',
'exif-filesource' => 'Fitchî sourdant',
'exif-scenetype' => 'Sôre di sinne',
'exif-whitebalance' => 'Balance di blancs',
'exif-digitalzoomratio' => 'Rapoirt di zoumaedje limerike',
'exif-contrast' => 'Contrasse',
'exif-saturation' => 'Saturaedje',
'exif-gpslatituderef' => 'Latitude Nôr ou Sud',
'exif-gpslongituderef' => 'Londjitude Ess ou Ouwess',
'exif-gpslongitude' => 'Londjitude',
'exif-gpsaltituderef' => 'Referince di hôteur',
'exif-gpsaltitude' => 'Hôteur',
'exif-gpstimestamp' => 'Tins do GPS (ôrlodje atomike)',
'exif-gpssatellites' => 'Sipoutniks eployîs pol mezuraedje',
'exif-gpsmeasuremode' => 'Môde di mzuraedje',
'exif-gpsdop' => 'Precizion di mzuraedje',
'exif-gpsareainformation' => 'No del redjon GPS',
'exif-gpsdatestamp' => 'Date do GPS',
'exif-gpsdifferential' => 'Coridjaedje diferenciel do GPS',
'exif-iimcategory' => 'Categoreye',
'exif-iimsupplementalcategory' => 'Categoreyes di rawete',

'exif-orientation-1' => 'Normå',
'exif-orientation-3' => 'Tourné di 180°',

'exif-componentsconfiguration-0' => "n' egzistêye nén",

'exif-exposureprogram-0' => 'Nén defini',
'exif-exposureprogram-1' => 'Al mwin',
'exif-exposureprogram-2' => 'Programaedje normå',

'exif-subjectdistance-value' => '$1 metes',

'exif-meteringmode-0' => 'Nén cnoxhou',
'exif-meteringmode-1' => 'Moyene',
'exif-meteringmode-255' => 'Ôte',

'exif-lightsource-0' => 'Nén cnoxhou',
'exif-lightsource-1' => 'Loumire do djoû',
'exif-lightsource-9' => 'Bon tins',
'exif-lightsource-10' => 'Tins avou des nûlêyes',
'exif-lightsource-17' => 'Loumire standård A',
'exif-lightsource-18' => 'Loumire standård B',
'exif-lightsource-19' => 'Loumire standård C',
'exif-lightsource-255' => "Ôte sourdant d' loumire",

'exif-focalplaneresolutionunit-2' => 'pôces',

'exif-sensingmethod-1' => 'Nén defineye',

'exif-scenetype-1' => 'On poitrait saetchî directumint',

'exif-whitebalance-0' => 'Balance di blancs otomatike',
'exif-whitebalance-1' => 'Balance di blancs al mwin',

'exif-scenecapturetype-3' => 'Sinne di nute',

'exif-contrast-0' => 'Normå',
'exif-contrast-1' => 'Doûs',
'exif-contrast-2' => 'Deur',

'exif-saturation-0' => 'Normå',
'exif-saturation-1' => 'Fwebe saturaedje',
'exif-saturation-2' => 'Foirt saturaedje',

'exif-sharpness-0' => 'Normåle',
'exif-sharpness-1' => 'Doûce',
'exif-sharpness-2' => 'Deure',

'exif-subjectdistancerange-0' => 'Nén cnoxhowe',
'exif-subjectdistancerange-2' => 'Did près',
'exif-subjectdistancerange-3' => 'Did lon',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitude Nôr',
'exif-gpslatitude-s' => 'Latitude Sud',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Londjitude Ess',
'exif-gpslongitude-w' => 'Londjitude Ouwess',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'km/h',
'exif-gpsspeed-m' => 'miles/h',
'exif-gpsspeed-n' => 'nuks',

# External editor support
'edit-externally' => "Candjî ç' fitchî ci avou on dfoûtrin programe",
'edit-externally-help' => "(Loukîz les [//www.mediawiki.org/wiki/Manual:External_editors instruccions d' apontiaedje] po pus di racsegnes)",

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'totafwait',
'namespacesall' => 'tos',
'monthsall' => 'tos',

# E-mail address confirmation
'confirmemail' => "Acertinaedje di l' adresse emile",
'confirmemail_text' => "Ci wiki chal a mezåjhe ki vos acertinîz voste adresse emile
divant d' poleur eployî les fonccions d' emilaedje. Clitchîz sol boton
chal pa dzo po-z evoyî èn emile d' acertinaedje a voste adresse.
Li messaedje a-st å dvins ene hårdêye (loyén) avou on côde;
tcherdjîz l' hårdêye dins l' betchteu waibe da vosse, eyet
acertinez ki l' adresse emile est djusse tot dnant l' côde.",
'confirmemail_send' => "Emiler on côde d' acertinaedje",
'confirmemail_sent' => "L' emile d' acertinaedje a stî evoyî.",
'confirmemail_sendfailed' => "{{SITENAME}} n' a nén savou vs evoyî l' emile d' acertinaedje.
Verifyîz ki l' adresse est bén djusse.

Li programe d' emilaedje a rtourné: $1",
'confirmemail_invalid' => "Côde d' acertinaedje nén valide. Motoit k' il esteut trop vî.",
'confirmemail_needlogin' => 'I vs fåt $1 po pleur acertiner voste adresse emile.',
'confirmemail_success' => 'Voste adresse emile a stî acertinêye. Vos vs poloz asteure elodjî eyet profiter do wiki.',
'confirmemail_loggedin' => 'Voste adresse emile a stî acertinêye.',
'confirmemail_subject' => "Acertinaedje di l' adresse emile po {{SITENAME}}",
'confirmemail_body' => "Ene sakî, probåblumint vos-minme, avou l' adresse IP $1,
a-st ahivé on conte so {{SITENAME}} avou ciste adresse
emile ci eyet come no d' elodjaedje «$2».

Po-z acertiner ki ç' conte ci est bén da vosse eyet mete
en alaedje les fonccions d' emilaedje so {{SITENAME}},
alez drovî avou vosse betchteu waibe li hårdêye ki shût:

$3

Si c' est *nén* vos k' a-st ahivé l' conte, adon shuvoz
l' hårdêye shuvante po fé rnoncî l' acertinaedje d' emile:

$5

Ci côde d' acertinaedje ci va-st espirer po l' $4.",

# Scary transclusion
'scarytranscludetoolong' => '[Li hårdêye est pår trop longue]',

# Delete conflict
'deletedwhileediting' => "'''Asteme''': Cisse pådje ci a stî disfacêye sol tins ki vos scrijhîz!",
'confirmrecreate' => "L' uzeu [[User:$1|$1]] ([[User talk:$1|copene]]) a disfacé cisse pådje ci après ki vos avoz cmincî a scrire, li råjhon k' il a dné c' est:
: ''$2''.
Acertinez s' i vs plait ki vos vloz vormint rifé cisse pådje ci.",
'recreate' => 'Rifé',

# action=purge
'confirm_purge_button' => "'l est bon",
'confirm-purge-top' => "Netyî l' muchete di cisse pådje ci?",

# Multipage image navigation
'imgmultipageprev' => '← pådje di dvant',
'imgmultipagenext' => 'pådje shuvante →',

# Table pager
'ascending_abbrev' => 'crexh.',
'descending_abbrev' => 'discr.',
'table_pager_next' => 'Pådje shuvante',
'table_pager_prev' => 'Pådje di dvant',
'table_pager_first' => 'Prumire pådje',
'table_pager_last' => 'Dierinne pådje',
'table_pager_limit' => 'Håyner $1 cayets el pådje',
'table_pager_limit_label' => 'Cayets par pådje:',
'table_pager_limit_submit' => 'I va',
'table_pager_empty' => 'Nou rzultat',

# Auto-summaries
'autosumm-blank' => 'Pådje vudeye',
'autosumm-replace' => 'Li contnou a stî replaecî pa « $1 »',
'autoredircomment' => 'Redjiblaedje viè [[$1]]',
'autosumm-new' => 'Pådje ahivêye avou «$1»',

# Size units
'size-bytes' => '$1 o',
'size-kilobytes' => '$1 Ko',
'size-megabytes' => '$1 Mo',
'size-gigabytes' => '$1 Go',

# Live preview
'livepreview-loading' => 'Tcherdjant...',

# Watchlist editor
'watchlistedit-raw-titles' => 'Tites:',

# Watchlist editing tools
'watchlisttools-edit' => "Vey et candjî l' djivêye des shuvous",

# Special:Version
'version' => 'Modêye des programes',
'version-extensions' => "Rawetes d' astalêyes",
'version-specialpages' => 'Pådjes sipeciåles',
'version-variables' => 'Variåves',
'version-antispam' => 'Siconte do spam',
'version-skins' => 'Peas',
'version-other' => 'Ôtes',
'version-license' => 'Licince',
'version-software' => 'Programes astalés',
'version-software-product' => 'Prodût',
'version-software-version' => 'Modêye',

# Special:FilePath
'filepath-page' => 'Fitchî:',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Cweraedje après les dobes fitchîs',
'fileduplicatesearch-submit' => 'Cweri',

# Special:SpecialPages
'specialpages' => 'Pådjes sipeciåles',
'specialpages-group-maintenance' => 'Etertinance',
'specialpages-group-other' => 'Ôtès pådjes especiåles',
'specialpages-group-login' => "S' elodjî / si rashire",
'specialpages-group-changes' => 'Dierins candjmints et djournås',
'specialpages-group-media' => 'Rapoirts et eberwetaedjes multimedia',
'specialpages-group-users' => 'Uzeus et abondroets',
'specialpages-group-highuse' => 'Eployaedje timpesse des pådjes',
'specialpages-group-pages' => 'Djivêyes di pådjes',
'specialpages-group-pagetools' => 'Usteyes po les pådjes',
'specialpages-group-wiki' => 'Usteyes et dnêyes do wiki',
'specialpages-group-redirects' => 'Ridjiblaedjes di pådjes sipeciåles',
'specialpages-group-spam' => 'Usteyes siconte do spam',

# Special:BlankPage
'blankpage' => 'Vude pådje',
'intentionallyblankpage' => 'Cisse pådje ci est vude en esprès.',

# Special:Tags
'tag-filter' => 'Passete po ls [[Special:Tags|etiketes]]:',
'tag-filter-submit' => 'Passete',
'tags-edit' => 'candjî',
'tags-hitcount' => '$1 candjmint{{PLURAL:$1||s}}',

# Special:ComparePages
'comparepages' => 'Comparer des pådjes',
'compare-selector' => 'Comparer des modêyes di pådjes',
'compare-page1' => 'Pådje 1',
'compare-page2' => 'Pådje 2',
'compare-rev1' => 'Modêye 1',
'compare-rev2' => 'Modêye 2',
'compare-submit' => 'Comparer',

# New logging system
'logentry-delete-delete' => "$1 a disfacé l' pådje $3",
'logentry-delete-restore' => "$1 a rapexhî l' pådje $3",
'logentry-delete-event' => "$1 a candjî l' veyåvisté d' {{PLURAL:$5| èn evenmint|$5 evenmints}} do djournå åd fwait di $3: $4",
'logentry-delete-revision' => "$1 a candjî l' veyåvisté d' {{PLURAL:$5| on candjmint|$5 candjmints}} åd fwait di $3: $4",
'logentry-delete-event-legacy' => "$1 a candjî l' veyåvisté d' evenmints do djournå åd fwait di $3",
'logentry-delete-revision-legacy' => "$1 a candjî l' veyåvisté des candjmints so $3",
'logentry-suppress-delete' => "$1 a disfacé l' pådje $3",
'logentry-suppress-event' => "$1 a catcheymint candjî l' veyåvisté d' {{PLURAL:$5| èn evenmint|$5 evenmints}} do djournå åd fwait di $3: $4",
'logentry-suppress-revision' => "$1 a catcheymint candjî l' veyåvisté d' {{PLURAL:$5| on candjmint|$5 candjmints}} åd fwait di $3: $4",
'logentry-suppress-event-legacy' => "$1 a catcheymint candjî l' veyåvisté d' evenmints do djournå åd fwait di $3",
'logentry-suppress-revision-legacy' => "$1 a catcheymint candjî l' veyåvisté des candjmints so $3",
'revdelete-content-hid' => 'contnou catchî',
'revdelete-summary-hid' => 'rascourti catchî',
'revdelete-uname-hid' => "no d' uzeu catchî",
'revdelete-content-unhid' => 'contnou discatchî',
'revdelete-summary-unhid' => 'rascourti discatchî',
'revdelete-uname-unhid' => "no d' uzeu discatchî",
'revdelete-restricted' => 'restriccions aplikêyes ås manaedjeus',
'revdelete-unrestricted' => 'restriccions ås manaedjeus rsaetcheyes',
'logentry-move-move' => "$1 a displaecî l' pådje $3 viè $4",
'logentry-move-move-noredirect' => "$1 a displaecî l' pådje $3 viè $4 sins leyî d' redjiblaedje",
'logentry-move-move_redir' => "$1 a displaecî l' pådje $3 viè $4 pa dzeu d' on redjiblaedje",
'logentry-move-move_redir-noredirect' => "$1 a displaecî l' pådje $3 viè $4 pa dzeu d' on redjiblaedje et sins leyî d' redjblaedje",
'logentry-patrol-patrol' => "$1 a marké come patrouyî l' candjmint $4 del pådje $3",
'logentry-patrol-patrol-auto' => "$1 a marké otomaticmint come patrouyî l' candjmint $4 del pådje $3",
'logentry-newusers-newusers' => "$1 a-st ahivé on conte d' uzeu",
'logentry-newusers-create' => "$1 a-st ahivé on conte d' uzeu",
'logentry-newusers-create2' => "$1 a-st ahivé on conte d' uzeu $3",
'logentry-newusers-autocreate' => 'li conte $1 a stî ahivé otomaticmint',
'newuserlog-byemail' => "emilaedje d' on scret",

# Feedback
'feedback-subject' => 'Sudjet',
'feedback-message' => 'Messaedje',
'feedback-cancel' => 'Rinoncî',
'feedback-submit' => "Evoyî l' vosse",
'feedback-adding' => 'Vosse messaedje a stî håyné sol pådje...',
'feedback-error2' => "Aroke : Li candjaedje n' a nén stî",
'feedback-close' => 'Fwait',

# Search suggestions
'searchsuggest-search' => 'Cweri',
'searchsuggest-containing' => 'ki contént...',

# API errors
'api-error-badaccess-groups' => "Vos n' avoz nén l' droet d' eberweter des fitchîs so ç' wiki cial",
'api-error-copyuploaddisabled' => "Les eberwetaedjes pa URL ni vont nén so ç' sierveu cial.",
'api-error-duplicate' => "N a ddja {{PLURAL:$1|[$2 èn ôte fitchî]|[$2 des ôtes fitchîs]}} avou l' minme contnou so nosse waibe",
'api-error-duplicate-archive' => "N aveut ddja {{PLURAL:$1|[$2 èn ôte fitchî]|[$2 des ôtes fitchîs]}} avou l' minme contnou so nosse waibe, mins {{PLURAL:$1|il a stî rsaetchî|il ont stî rsaetchîs}}.",
'api-error-duplicate-archive-popup-title' => "Ricopyî {{PLURAL:$1|l' fitchî|les fitchîs}} k' {{PLURAL:$1|a stî rsaetchî|k' ont stî rsaetchîs}}",
'api-error-duplicate-popup-title' => '{{PLURAL:$1|fitchî|fitchîs}} a dobe',
'api-error-empty-file' => 'Vosse fitchî est vude.',
'api-error-emptypage' => "C' est nén permetou d' ahiver ene novele pådje et l' leyî vude.",
'api-error-fetchfileerror' => 'Aroke divintrinne : ene sacwè a fwait berwete cwand on-z a volou rawè vosse fitchî',
'api-error-file-too-large' => 'Vosse fitchî est trop pezant',
'api-error-filename-tooshort' => 'Li no do fitchî est trop court',
'api-error-filetype-banned' => "On n' pout nén eberweter des sfwaits fitchîs",
'api-error-filetype-missing' => 'I manke li cawete do fitchî',
'api-error-hookaborted' => 'Li candjmint ki vos vlîz fé a stî espaitchî pa on module di rawete.',
'api-error-http' => 'Aroke divintrinne : nou raloyaedje å sierveu',
'api-error-illegal-filename' => "On n' pout nén prinde ci no la pol fitchî",
'api-error-internal-error' => "Aroke divintrinne : gn a ene sacwè k' a må stî tins d' l' eredjistrumint d' vost eberwetêye",
'api-error-invalid-file-key' => "Aroke divintrinne : Li fitchî n' a nén stî rtrové dins l' eredjistrumint provizwere",
'api-error-missingparam' => 'Aroke divintrinne : i manke des dnêyes dins vosse dimande',
'api-error-missingresult' => "Aroke divintrinne : on n' såreut dire si l' fitchî a bén passé",
'api-error-mustbeloggedin' => 'Vos dvoz esse elodjî (eye) po-z aberweter des fitchîs',
'api-error-mustbeposted' => "Aroke divintrinne : li programe n' eploye nén li boune hårdêye HTTP",
'api-error-noimageinfo' => "L' eberwetaedje a bén stî, mins l' sierveu n' a pont dné d' racsegnes sol fitchî",
'api-error-nomodule' => "Aroke divintrinne : pont d' voye d' eberwetaedje tchoezeye",
'api-error-ok-but-empty' => "Aroke divintrinne : li sierveu n' respond nén",
'api-error-overwrite' => "Vos n' ploz nén spotchî on fitchî k' egzistêye dedja",
'api-error-stashfailed' => 'Aroke divintrinne : li sierveu a pierdou les dnêyes provizweres',
'api-error-timeout' => "Li sierveu n' a nén respondou dins les tins",
'api-error-unclassified' => 'Aroke nén cnoxhowe',
'api-error-unknown-code' => 'Aroke nén cnoxhowe: «$1».',
'api-error-unknown-error' => "Aroke divintrinne : gn a ene sacwè ki n' a nén stî tins d' l' eberwetaedje",
'api-error-unknown-warning' => 'Adviertixhmint nén cnoxhou: «$1».',
'api-error-unknownerror' => 'Aroke nén cnoxhowe: «$1».',
'api-error-uploaddisabled' => "L' eberwetaedje ni va nén so ç' wiki cial",
'api-error-verification-error' => "Ci fitchî la est cron, oudon-bén si cawete n' est nén boune",

# Durations
'duration-seconds' => '$1 segonde{{PLURAL:$1||s}}',
'duration-minutes' => '$1 munute{{PLURAL:$1||s}}',
'duration-hours' => '$1 eure{{PLURAL:$1||s}}',
'duration-days' => '$1 djoû{{PLURAL:$1||s}}',
'duration-weeks' => '$1 samwinne{{PLURAL:$1||s}}',
'duration-years' => '$1 anêye{{PLURAL:$1||s}}',
'duration-decades' => "$1 dijhinne{{PLURAL:$1||s}} d' anêyes",
'duration-centuries' => '$1 sieke{{PLURAL:$1||s}}',
'duration-millennia' => '$1 meynaire{{PLURAL:$1||s}}',

);
