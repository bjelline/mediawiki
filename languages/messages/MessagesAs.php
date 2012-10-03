<?php
/** Assamese (অসমীয়া)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bishnu Saikia
 * @author Chaipau
 * @author Gahori
 * @author Gitartha.bordoloi
 * @author Jaminianurag
 * @author Nilamdyuti
 * @author Priyankoo
 * @author Psneog
 * @author Rajuonline
 * @author Reedy
 * @author Simbu123
 * @author Urhixidur
 */

$namespaceNames = array(
	NS_MEDIA            => 'মাধ্যম',
	NS_SPECIAL          => 'বিশেষ',
	NS_TALK             => 'বাৰ্তা',
	NS_USER             => 'সদস্য',
	NS_USER_TALK        => 'সদস্য_বাৰ্তা',
	NS_PROJECT_TALK     => '$1_বাৰ্তা',
	NS_FILE             => 'চিত্ৰ',
	NS_FILE_TALK        => 'চিত্ৰ_বাৰ্তা',
	NS_MEDIAWIKI        => 'মিডিয়াৱিকি',
	NS_MEDIAWIKI_TALK   => 'মিডিয়াৱিকি_আলোচনা',
	NS_TEMPLATE         => 'সাঁচ',
	NS_TEMPLATE_TALK    => 'সাঁচ_বাৰ্তা',
	NS_HELP             => 'সহায়',
	NS_HELP_TALK        => 'সহায়_বাৰ্তা',
	NS_CATEGORY         => 'শ্ৰেণী',
	NS_CATEGORY_TALK    => 'শ্ৰেণী_বাৰ্তা',
);

$namespaceAliases = array(
	'विशेष' => NS_SPECIAL,
	'वार्ता' => NS_TALK,
	'বার্তা' => NS_TALK,
	'सदस्य' => NS_USER,
	'सदस्य_वार्ता' => NS_USER_TALK,
	'সদস্য বার্তা' => NS_USER_TALK,
	'$1_वार्ता' => NS_PROJECT_TALK,
	'$1 বার্তা' => NS_PROJECT_TALK,
	'चित्र' => NS_FILE,
	'चित्र_वार्ता' => NS_FILE_TALK,
	'চিত্র' => NS_FILE,
	'চিত্র বার্তা' => NS_FILE_TALK,
	'মেডিয়াৱিকি' => NS_MEDIAWIKI,
	'মেডিয়াৱিকি_বাৰ্তা' => NS_MEDIAWIKI_TALK,
	'MediaWiki বার্তা' => NS_MEDIAWIKI_TALK,
	'साँचा' => NS_TEMPLATE,
	'साँचा_वार्ता' => NS_TEMPLATE_TALK,
	'সাঁচ বার্তা' => NS_TEMPLATE_TALK,
	'সহায় বার্তা' => NS_HELP_TALK,
	'श्रेणी' => NS_CATEGORY,
	'श्रेणी_वार्ता' => NS_CATEGORY_TALK,
	'শ্রেণী' => NS_CATEGORY,
	'শ্রেণী বার্তা' => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'সক্ৰিয়_সদস্যসকল' ),
	'Allmessages'               => array( 'সকলোবোৰ_বাৰ্তা' ),
	'Allpages'                  => array( 'সকলোবোৰ_পৃষ্ঠা' ),
	'Ancientpages'              => array( 'পুৰণি_পৃষ্ঠা' ),
	'Badtitle'                  => array( 'ভুল_শিৰোনাম' ),
	'Blankpage'                 => array( 'উকা_পৃষ্ঠা' ),
	'Block'                     => array( 'অৱৰোধ', 'আই_পি_অৱৰোধ', 'সদস্য_অৱৰোধ' ),
	'Blockme'                   => array( 'মোক_অৱৰোধ_কৰক' ),
	'Booksources'               => array( 'গ্ৰন্থৰ_উত্স' ),
	'BrokenRedirects'           => array( 'ভঙা_পূণঃনিৰ্দেশনাসমূহ' ),
	'Categories'                => array( 'শ্ৰেণীসমূহ' ),
	'ChangeEmail'               => array( 'ইমেইল_সলনি_কৰক' ),
	'ChangePassword'            => array( 'গুপ্তশব্দ_সলনি_কৰক', 'গুপ্তশব্দ_সলনি' ),
	'ComparePages'              => array( 'তুলনা_কৰক' ),
	'Confirmemail'              => array( 'ইমেইল_নিশ্চিত_কৰক' ),
	'Contributions'             => array( 'বৰঙনিসমূহ', 'বৰঙনিদাতাসকল', 'বৰঙনি' ),
	'CreateAccount'             => array( 'সদস্যভুক্তি' ),
	'DeletedContributions'      => array( 'বিলোপ_কৰা_বৰঙনিসমূহ' ),
	'Disambiguations'           => array( 'দ্ব্যৰ্থতা_দূৰীকৰণসমূহ' ),
	'DoubleRedirects'           => array( 'দ্বি_পুণঃনিৰ্দেশনাসমূহ' ),
	'EditWatchlist'             => array( 'লক্ষ্যতালিকা_সম্পাদনা_কৰক' ),
	'Emailuser'                 => array( 'সদস্যলৈ_ই-মেইল_পঠিয়াওক' ),
	'Export'                    => array( 'ৰপ্তানি' ),
	'Fewestrevisions'           => array( 'নূন্যতম_সংস্কৰণসমূহ' ),
	'FileDuplicateSearch'       => array( 'প্ৰতিলিপি_সনিবিষ্ট_নথি_অনুসন্ধান' ),
	'Filepath'                  => array( 'ফাইলৰ_পথ' ),
	'Import'                    => array( 'আমদানি' ),
	'Invalidateemail'           => array( 'অবৈধ_ই-মেইল' ),
	'JavaScriptTest'            => array( 'জাভাস্ক্ৰীপ্ত_পৰীক্ষা' ),
	'BlockList'                 => array( 'অৱৰোধৰ_তালিকা' ),
	'LinkSearch'                => array( 'সংযোগ_সন্ধান' ),
	'Listadmins'                => array( 'প্ৰশাসকৰ_তালিকা' ),
	'Listbots'                  => array( 'বটৰ_তালিকা' ),
	'Listfiles'                 => array( 'চিত্ৰ-তালিকা' ),
	'Listgrouprights'           => array( 'গোটৰ_অধিকাৰসমূহ' ),
	'Listredirects'             => array( 'পুণঃনিৰ্দেশনাসমূহৰ_তালিকা' ),
	'Listusers'                 => array( 'সদস্য-তালিকা' ),
	'Lockdb'                    => array( 'তথ্যকোষ_বন্ধ_কৰক' ),
	'Log'                       => array( 'অভিলেখ', 'অভিলেখসমূহ' ),
	'Lonelypages'               => array( 'অকলশৰীয়া_পৃষ্ঠা' ),
	'Longpages'                 => array( 'দীঘলীয়া_পৃষ্ঠাসমূহ' ),
	'MergeHistory'              => array( 'একত্ৰীকৰণ_ইতিহাস' ),
	'MIMEsearch'                => array( 'MIME_অনুসন্ধান' ),
	'Movepage'                  => array( 'পৃষ্ঠা_স্থানান্তৰ' ),
	'Mycontributions'           => array( 'মোৰ_বৰঙনি' ),
	'Mypage'                    => array( 'মোৰ_পৃষ্ঠা' ),
	'Mytalk'                    => array( 'মোৰ_কথোপকথন' ),
	'Myuploads'                 => array( 'মোৰ_আপল’ডসমূহ' ),
	'Newimages'                 => array( 'নতুন_চিত্ৰ' ),
	'Newpages'                  => array( 'পৰৱৰ্তী_পৃষ্ঠা' ),
	'PasswordReset'             => array( 'গুপ্তশব্দ_ঘূৰাই_আনক' ),
	'PermanentLink'             => array( 'স্থায়ী_সংযোগ' ),
	'Popularpages'              => array( 'জনপ্ৰিয়_পৃষ্ঠাসমূহ' ),
	'Preferences'               => array( 'পচন্দ' ),
	'Protectedpages'            => array( 'সুৰক্ষিত_পৃষ্ঠাসমূহ' ),
	'Protectedtitles'           => array( 'সুৰক্ষিত_শিৰোনামসমূহ' ),
	'Randompage'                => array( 'আকস্মিক' ),
	'Randomredirect'            => array( 'আকস্মিক_পুণঃনিৰ্দেশনা' ),
	'Recentchanges'             => array( 'শেহতীয়া_সালসলনি' ),
	'Recentchangeslinked'       => array( 'সম্পৰ্কিত_সালসলনিসমূহ' ),
	'Revisiondelete'            => array( 'সংস্কৰণ_বিলোপ' ),
	'RevisionMove'              => array( 'সংস্কৰণ_স্থানান্তৰ' ),
	'Search'                    => array( 'সন্ধান' ),
	'Shortpages'                => array( 'চমু_পৃষ্ঠা' ),
	'Specialpages'              => array( 'বিশেষ_পৃষ্ঠাসমূহ' ),
	'Statistics'                => array( 'পৰিসংখ্যা' ),
	'Tags'                      => array( 'টেগসমূহ' ),
	'Unblock'                   => array( 'অৱৰোধ_বাৰণ' ),
	'Uncategorizedcategories'   => array( 'অবিন্যস্ত_শ্ৰেণীসমূহ' ),
	'Uncategorizedimages'       => array( 'অবিন্যস্ত_চিত্ৰসমূহ' ),
	'Uncategorizedpages'        => array( 'অবিন্যস্ত_পৃষ্ঠাসমূহ' ),
	'Uncategorizedtemplates'    => array( 'অবিন্যস্ত_সাঁচসমূহ' ),
	'Undelete'                  => array( 'বিলোপ_ঘূৰাই_আনক' ),
	'Unlockdb'                  => array( 'তথ্যকোষ_খোলক' ),
	'Unusedcategories'          => array( 'অব্যৱহৃত_শ্ৰেণীসমূহ' ),
	'Unusedimages'              => array( 'অব্যৱহৃত_চিত্ৰসমূহ' ),
	'Unusedtemplates'           => array( 'অব্যৱহৃত_সাঁচসমূহ' ),
	'Unwatchedpages'            => array( 'লক্ষ্য_নৰখা_পৃষ্ঠাসমূহ' ),
	'Upload'                    => array( 'আপল’ড', 'বোজাই' ),
	'Userlogin'                 => array( 'সদস্যৰ_প্ৰৱেশ' ),
	'Userlogout'                => array( 'সদস্যৰ_প্ৰস্থান' ),
	'Userrights'                => array( 'সদস্যৰ_অধিকাৰ', 'প্ৰশাসক_সৃষ্টি', 'বট_সৃষ্টি' ),
	'Version'                   => array( 'সংস্কৰণ' ),
	'Wantedcategories'          => array( 'আকাংক্ষিত_শ্ৰেণীসমূহ' ),
	'Wantedfiles'               => array( 'কাম্য_ফাইলসমূহ' ),
	'Wantedpages'               => array( 'কাম্য_পৃষ্ঠাসমূহ', 'ভগা_সংযোগসমূহ' ),
	'Wantedtemplates'           => array( 'কাম্য_সাঁচসমূহ' ),
	'Watchlist'                 => array( 'লক্ষ্যতালিকা' ),
	'Whatlinkshere'             => array( 'পৃষ্ঠালৈ_থকা_সংযোগসমূহ' ),
	'Withoutinterwiki'          => array( 'আন্তঃৱিকিবিহীন' ),
);

$magicWords = array(
	'redirect'                  => array( '0', 'পুণঃনিৰ্দেশ', '#REDIRECT' ),
	'special'                   => array( '0', 'বিশেষ', 'special' ),
	'hiddencat'                 => array( '1', '__গোপন_শ্ৰেণী__', '__HIDDENCAT__' ),
	'pagesize'                  => array( '1', 'পৃষ্ঠাৰ_আকাৰ', 'PAGESIZE' ),
	'index'                     => array( '1', '__সূচী__', '__INDEX__' ),
);

$digitTransformTable = array(
	'0' => '০', # &#x09e6;
	'1' => '১', # &#x09e7;
	'2' => '২', # &#x09e8;
	'3' => '৩', # &#x09e9;
	'4' => '৪', # &#x09ea;
	'5' => '৫', # &#x09eb;
	'6' => '৬', # &#x09ec;
	'7' => '৭', # &#x09ed;
	'8' => '৮', # &#x09ee;
	'9' => '৯', # &#x09ef;
);

$digitGroupingPattern = "##,##,###";

$messages = array(
# User preference toggles
'tog-underline' => 'সংযোগ সমূহ অধোৰেখিত কৰক:',
'tog-justify' => 'দফাৰ সীমা সমান কৰাক',
'tog-hideminor' => 'সাম্প্ৰতিক সাল-সলনিত অগুৰুত্বপূৰ্ণ সম্পাদনা নেদেখুৱাব',
'tog-hidepatrolled' => 'সাম্প্ৰতিক সাল-সলনিত তহলদাৰী সম্পাদনা নেদেখুৱাব',
'tog-newpageshidepatrolled' => 'নতুন পৃষ্ঠা তালিকাত তহলদাৰী পৃষ্ঠাসমূহ নেদেখুৱাব',
'tog-extendwatchlist' => 'কেৱল সাম্প্ৰতিকেই নহয, লক্ষ্য-তালিকাৰ সকলো সাল-সলনি বহলাই দেখুৱাওক',
'tog-usenewrc' => 'বৰ্দ্ধিত সাম্প্ৰতিক সাল-সলনি ব্যৱহাৰ কৰক (জাভাস্ক্ৰিপ্টৰ প্ৰয়োজন)',
'tog-numberheadings' => 'শীৰ্ষকত স্বয়ংক্ৰিয়ভাৱে ক্ৰমিক নং দিয়ক',
'tog-showtoolbar' => 'সম্পাদনা দণ্ডিকা দেখুৱাওক (জাভাস্ক্ৰিপ্টৰ দৰকাৰ)',
'tog-editondblclick' => 'একেলগে দুবাৰ টিপা মাৰিলে পৃষ্ঠা সম্পাদনা কৰক (জাভাস্ক্ৰিপ্টৰ দৰকাৰ)',
'tog-editsection' => '[সম্পাদনা] সংযোগৰ দ্বাৰা অনুচ্ছেদ সম্পাদনা কৰা সক্ৰিয় কৰক',
'tog-editsectiononrightclick' => 'অনুচ্ছেদৰ শিৰোনামাত সোঁ-বুটাম টিপা মাৰি সম্পাদনা কৰাটো সক্ৰিয় কৰক (জাভাস্ক্ৰিপ্টৰ প্ৰয়োজন)',
'tog-showtoc' => 'শিৰোনামাৰ সূচী দেখুৱাওক (যিবোৰ পৃষ্ঠাত তিনিটাতকৈ বেছি শিৰোনামা আছে)',
'tog-rememberpassword' => 'মোৰ প্ৰৱেশ এই কম্পিউটাৰত মনত ৰাখক (সৰ্বাধিক $1 {{PLURAL:$1|দিনলৈ|দিনলৈ}})',
'tog-watchcreations' => 'মই সৃষ্টি সকলো পৃষ্ঠা মোৰ লক্ষ্য-তালিকাত যোগ কৰক',
'tog-watchdefault' => 'মই সম্পাদনা কৰা সকলো পৃষ্ঠা মোৰ লক্ষ্য-তালিকাত যোগ কৰক',
'tog-watchmoves' => 'মই স্থানান্তৰ কৰা সকলো পৃষ্ঠা মোৰ লক্ষ্য-তালিকাত যোগ কৰক',
'tog-watchdeletion' => 'মই বিলোপ কৰা সকলো পৃষ্ঠা মোৰ লক্ষ্য-তালিকাত যোগ কৰক',
'tog-minordefault' => 'সকলো সম্পাদনা অগুৰুত্বপূৰ্ণ বুলি নিজে নিজে চিহ্নিত কৰক',
'tog-previewontop' => 'সম্পাদনা বাকছৰ ওপৰত খচৰা দেখুৱাওক',
'tog-previewonfirst' => 'প্ৰথম সম্পাদনাৰ পিছত খচৰা দেখুৱাওক',
'tog-nocache' => 'ব্ৰাউজাৰ পৃষ্ঠা কেশ্বিং নিষ্ক্ৰীয় কৰক',
'tog-enotifwatchlistpages' => 'মোৰ লক্ষ্য-তালিকাত থকা পৃষ্ঠা সলনি হলে মোলৈ ই-মেইল পঠাব',
'tog-enotifusertalkpages' => 'মোৰ বাৰ্তা পৃষ্ঠা সলনি হলে মোলৈ ই-মেইল পঠাব',
'tog-enotifminoredits' => "অগুৰুত্বপূৰ্ণ সম্পাদনা হ'লেও মোলৈ ই-মেইল পঠাব",
'tog-enotifrevealaddr' => 'জাননী ই-মেইল বোৰত মোৰ ই-মেইল ঠিকনা দেখুৱাব',
'tog-shownumberswatching' => 'লক্ষ্য কৰি থকা সদস্য সমূহৰ সংখ্যা দেখুৱাওক',
'tog-oldsig' => 'বৰ্তমানৰ স্বাক্ষৰ:',
'tog-fancysig' => 'স্বাক্ষৰ ৱিকিটেক্সট হিচাপে ব্যৱহাৰ কৰক (স্বয়ংক্ৰিয় সংযোগ অবিহনে)',
'tog-externaleditor' => 'ডিফ’ল্ট ভাবে বাহ্যিক সম্পাদন-সঁজুলি ব্যৱহাৰ কৰক (দক্ষ জনৰ বাবেহে, আপোনাৰ কম্পিউটাৰত বিশেষ ব্যৱস্থা থাকিব লাগিব । [//www.mediawiki.org/wiki/Manual:External_editors সবিশেষ ।])',
'tog-externaldiff' => 'ডিফ’ল্ট ভাবে বাহ্যিক তফাৎ (diff) ব্যৱহাৰ কৰক (দক্ষ জনৰ বাবেহে, আপোনাৰ কম্পিউটাৰত বিশেষ ব্যৱস্থা থাকিব লাগিব । [//www.mediawiki.org/wiki/Manual:External_editors সবিশেষ ।])',
'tog-showjumplinks' => '"জঁপিয়াই যাওক" সংযোগ সক্ৰিয় কৰক',
'tog-uselivepreview' => 'সম্পাদনাৰ লগে লগে খচৰা দেখুৱাওক (জাভাস্ক্ৰিপ্টৰ প্ৰয়োজন) (পৰীক্ষামূলক)',
'tog-forceeditsummary' => 'সম্পাদনাৰ সাৰাংশ নিদিলে মোক জনাব',
'tog-watchlisthideown' => 'মোৰ লক্ষ্য-তালিকাত মোৰ সম্পাদনা নেদেখুৱাব',
'tog-watchlisthidebots' => "মোৰ লক্ষ্য-তালিকাত ব'টে কৰা সম্পাদনা নেদেখুৱাব",
'tog-watchlisthideminor' => 'মোৰ লক্ষ্য-তালিকাত অগুৰুত্বপূৰ্ণ সম্পাদনা নেদেখুৱাব',
'tog-watchlisthideliu' => 'প্ৰবেশ কৰা সদস্যৰ সম্পাদনাসমূহ আঁতৰাই অনুসৰণ-তালিকা দেখুৱাওক',
'tog-watchlisthideanons' => 'বেনামী সদস্যৰ সম্পাদনাসমূহ আঁতৰাই অনুসৰণ-তালিকা দেখুৱাওক',
'tog-watchlisthidepatrolled' => 'পৰীক্ষিত সম্পাদনাসমূহ লক্ষ্য-তালিকাৰ পৰা লুকুৱাই ৰাখক',
'tog-ccmeonemails' => 'মই অন্য সদস্যলৈ পঠোৱা ই-মেইলৰ প্ৰতিলিপি এটা মোলৈও পঠাব',
'tog-diffonly' => 'পার্থক্যৰ তলত পৃষ্ঠাৰ বিষয়বস্তু নেদেখুৱাব',
'tog-showhiddencats' => 'নিহিত শ্ৰেণী সমূহ দেখুৱাওক',
'tog-norollbackdiff' => 'পূৰ্বৱত কৰা পাছত পাৰ্থক্য নেদেখুৱাব',

'underline-always' => 'সদায়',
'underline-never' => 'কেতিয়াও নহয়',
'underline-default' => 'ব্ৰাউজাৰ ডিফল্ট',

# Font style option in Special:Preferences
'editfont-style' => 'সম্পাদনাৰ ফন্ট ষ্টাইল',
'editfont-default' => "ব্ৰাউজাৰ ডিফ'ল্ট",
'editfont-monospace' => 'মনোস্পেচ ফন্ট',
'editfont-sansserif' => 'চেন্স-চেৰিফ ফন্ট',
'editfont-serif' => 'চেৰিফ ফন্ট',

# Dates
'sunday' => 'দেওঁবাৰ',
'monday' => 'সোমবাৰ',
'tuesday' => 'মঙ্গলবাৰ',
'wednesday' => 'বুধবাৰ',
'thursday' => 'বৃহস্পতিবাৰ',
'friday' => 'শুক্ৰবাৰ',
'saturday' => 'শণিবাৰ',
'sun' => 'দেওঁ',
'mon' => 'সোম',
'tue' => 'মংগল',
'wed' => 'বুধ',
'thu' => 'বৃহস্পতি',
'fri' => 'শুক্ৰ',
'sat' => 'শনি',
'january' => 'জানুৱাৰী',
'february' => 'ফেব্ৰুৱাৰী',
'march' => 'মাৰ্চ',
'april' => 'এপ্ৰিল',
'may_long' => "মে'",
'june' => 'জুন',
'july' => 'জুলাই',
'august' => 'আগষ্ট',
'september' => 'ছেপ্টেম্বৰ',
'october' => 'অক্টোবৰ',
'november' => 'নৱেম্বৰ',
'december' => 'ডিচেম্বৰ',
'january-gen' => 'জানুৱাৰী',
'february-gen' => 'ফেব্ৰুৱাৰী',
'march-gen' => 'মাৰ্চ',
'april-gen' => 'এপ্ৰিল',
'may-gen' => 'মে’',
'june-gen' => 'জুন',
'july-gen' => 'জুলাই',
'august-gen' => 'আগষ্ট',
'september-gen' => 'ছেপ্টেম্বৰ',
'october-gen' => 'অক্টোবৰ',
'november-gen' => 'নৱেম্বৰ',
'december-gen' => 'ডিচেম্বৰ',
'jan' => 'জানুৱাৰী:',
'feb' => 'ফেব্ৰুৱাৰী:',
'mar' => 'মাৰ্চ',
'apr' => 'এপ্ৰিল',
'may' => 'মে',
'jun' => 'জুন',
'jul' => 'জুলাই',
'aug' => 'আগষ্ট',
'sep' => 'ছেপ্টেম্বৰ:',
'oct' => 'অক্টোবৰ:',
'nov' => 'নৱেম্বৰ:',
'dec' => 'ডিচেম্বৰ:',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|শ্ৰেণী|শ্ৰেণীসমূহ}}',
'category_header' => '"$1" শ্ৰেণীৰ পৃষ্ঠাসমূহ',
'subcategories' => 'উপশ্ৰেণীসমূহ',
'category-media-header' => '"$1" শ্ৰেণীৰ মিডিয়া',
'category-empty' => "''এই শ্ৰেণীত বৰ্তমান কোনো পৃষ্ঠা বা মিডিয়া ফাইল নাই ।''",
'hidden-categories' => '{{PLURAL:$1|নিহিত শ্ৰেণী|নিহিত শ্ৰেণীসমূহ}}',
'hidden-category-category' => 'অদৃশ্য শ্ৰেণীসমূহ',
'category-subcat-count' => '{{PLURAL:$2|এই শ্ৰেণীত নিম্নলিখিত উপশ্ৰেণীসমূহ আছে। মুঠ $2টা উপশ্ৰেণীৰ ভিতৰত এই শ্ৰেণীত নিম্নলিখিত {{PLURAL:$1|এটা উপশ্ৰেণী|$1 টা উপশ্ৰেণী}} আছে।}}',
'category-subcat-count-limited' => 'এই শ্ৰেণীত নিম্নলিখিত {{PLURAL:$1|টা উপশ্ৰেণী আছে|$1টা উপশ্ৰেণী আছে}}।',
'category-article-count' => '{{PLURAL:$2|এই শ্ৰেণীটোত কেৱল তলত দিয়া পৃষ্ঠাহে আছে । মুঠ $2 খনৰ ভিতৰত এই শ্ৰেণীটোত তলৰ {{PLURAL:$1|এখন পৃষ্ঠা আছে|$1 খন পৃষ্ঠা আছে}}।}}',
'category-article-count-limited' => 'এই {{PLURAL:$1|পৃষ্ঠা|$1 পৃষ্ঠাসমূহ}} সাম্প্ৰতিক শ্ৰেণীত আছে ।',
'category-file-count' => '{{PLURAL:$2|এই শ্ৰেণীটোত কেবল তলত দিয়া ফাইলটোহে আছে। মুঠ $2টাৰ ভিতৰত এই শ্ৰেণীটোত তলৰ {{PLURAL:$1|এটা ফাইল|$1 টা ফাইল}} আছে।}}',
'category-file-count-limited' => 'তলৰ {{PLURAL:$1|ফাইলটো|$1 ফাইলসমূহ}} সাম্প্ৰতিক শ্ৰেণীত আছে।',
'listingcontinuesabbrev' => 'আগলৈ',
'index-category' => 'সূচীকৃত পৃষ্ঠাসমূহ',
'noindex-category' => 'অসূচীকৃত পৃষ্ঠাসমূহ',
'broken-file-category' => 'অবৈধ ফাইল সংযোগযুক্ত পৃষ্ঠাবোৰ',

'about' => 'বিষয়ে',
'article' => 'সমল পৃষ্ঠা',
'newwindow' => "(নতুন ৱিণ্ড'ত খোল খায়)",
'cancel' => 'বাতিল কৰক',
'moredotdotdot' => 'অধিক...',
'mypage' => 'মোৰ পৃষ্ঠা',
'mytalk' => 'মোৰ কথা-বতৰা',
'anontalk' => 'এই IP-ত যোগাযোগ কৰক',
'navigation' => 'দিকদৰ্শন',
'and' => '&#32;আৰু',

# Cologne Blue skin
'qbfind' => 'বিচৰা হওক',
'qbbrowse' => 'ব্ৰাওজ',
'qbedit' => 'সম্পাদনা',
'qbpageoptions' => 'এই পৃষ্ঠা',
'qbpageinfo' => 'প্ৰসংগ',
'qbmyoptions' => 'মোৰ পৃষ্ঠাসমূহ',
'qbspecialpages' => 'বিশেষ পৃষ্ঠাসমূহ',
'faq' => 'সততে উদিত প্ৰশ্নসমূহ (FAQ)',
'faqpage' => 'Project:সততে উদিত প্ৰশ্নসমূহ',

# Vector skin
'vector-action-addsection' => 'বিষয় যোগ',
'vector-action-delete' => 'বিলোপ কৰক',
'vector-action-move' => 'স্থানান্তৰ কৰক',
'vector-action-protect' => 'সুৰক্ষিত কৰক',
'vector-action-undelete' => 'পুনৰুদ্ধাৰ কৰক',
'vector-action-unprotect' => 'সুৰক্ষা সলনি কৰক',
'vector-simplesearch-preference' => 'উৎকৃষ্ট সন্ধানৰ পৰামৰ্শ সক্ৰিয় কৰক (ভেক্টৰ স্কিনৰ বাবেহে)',
'vector-view-create' => 'সৃষ্টি কৰক',
'vector-view-edit' => 'সম্পাদনা',
'vector-view-history' => 'ইতিহাস চাওক',
'vector-view-view' => 'পঢ়ক',
'vector-view-viewsource' => 'উৎস চাওক',
'actions' => 'কাৰ্যসমূহ',
'namespaces' => 'নামস্থান',
'variants' => 'বিকল্পসমূহ',

'errorpagetitle' => 'ভুল',
'returnto' => '$1লৈ ঘূৰি যাওক ।',
'tagline' => '{{SITENAME}}ৰ পৰা',
'help' => 'সহায়',
'search' => 'সন্ধান',
'searchbutton' => 'সন্ধান কৰক',
'go' => 'যাওক',
'searcharticle' => 'যাওক',
'history' => 'খতিয়ান',
'history_short' => 'খতিয়ান',
'updatedmarker' => 'মোৰ শেহতীয়া আগমনৰ পাছৰ পৰিৱৰ্তনবিলাক',
'printableversion' => 'প্ৰকাশনযোগ্য সংস্কৰন',
'permalink' => 'স্থায়ী সূত্ৰ (লিংক)',
'print' => 'প্ৰিণ্ট কৰিবলৈ',
'view' => 'দেখুৱাওক',
'edit' => 'সম্পাদনা',
'create' => 'সৃষ্টি কৰক',
'editthispage' => 'বৰ্তমান পৃষ্ঠাটো সম্পাদন কৰিবলৈ',
'create-this-page' => 'নতুন পৃষ্ঠা সৃষ্টি কৰক',
'delete' => 'বিলোপ',
'deletethispage' => 'এই পৃষ্ঠাখন বিলোপ কৰক',
'undelete_short' => '{{PLURAL:$1|বিলোপিত পৃষ্ঠাৰ|$1 সংখ্যক বিলোপিত পৃষ্ঠাৰ}} পূৰ্ববৎকৰণ',
'viewdeleted_short' => '{{PLURAL:$1| এটা বিলুপ্ত সম্পাদনা|$1 টা বিলুপ্ত সম্পাদনা}} দেখুৱাওক',
'protect' => 'সুৰক্ষিত কৰক',
'protect_change' => 'সলাওক',
'protectthispage' => 'বৰ্তমান পৃষ্ঠাৰ সংৰক্ষণবিধিৰ পৰিবৰ্তন',
'unprotect' => 'সুৰক্ষা সলনি কৰক',
'unprotectthispage' => 'এই পৃষ্ঠাৰ সুৰক্ষা সলনি কৰক',
'newpage' => 'নতুন পৃষ্ঠা',
'talkpage' => 'এই পৃষ্ঠা সম্পৰ্কে কথা-বতৰা',
'talkpagelinktext' => 'কথা-বতৰা',
'specialpage' => 'বিশেষ পৃষ্ঠা',
'personaltools' => 'ব্যক্তিগত সৰঞ্জাম',
'postcomment' => 'নতুন অনুচ্ছেদ',
'articlepage' => 'সমল পৃষ্ঠা চাওক',
'talk' => 'আলোচনা',
'views' => 'দৰ্শন',
'toolbox' => 'সা-সৰঞ্জাম',
'userpage' => 'সদস্য পৃষ্ঠা চাওক',
'projectpage' => 'প্ৰকল্প পৃষ্ঠা চাওক',
'imagepage' => 'নথি পৃষ্ঠা চাওক',
'mediawikipage' => 'বাৰ্তা পৃষ্ঠা চাওক',
'templatepage' => 'সাঁচ পৃষ্ঠা চাওক',
'viewhelppage' => 'সহায় পৃষ্ঠা চাওক',
'categorypage' => 'শ্ৰেণী পৃষ্ঠা চাওক',
'viewtalkpage' => 'আলোচনা চাওক',
'otherlanguages' => 'আন ভাষাসমূহত',
'redirectedfrom' => '($1ৰ পৰা পুনঃনিৰ্দেশিত)',
'redirectpagesub' => 'পুনঃনিৰ্দেশিত পৃষ্ঠা',
'lastmodifiedat' => 'এই পৃষ্ঠাখন শেষবাৰৰ কাৰণে $1 তাৰিখে $2 বজাত সলনি কৰা হৈছিল।',
'viewcount' => 'এই পৃষ্ঠাটো {{PLURAL:$1|এবাৰ|$1 বাৰ}} চোৱা হৈছে',
'protectedpage' => 'সুৰক্ষিত পৃষ্ঠা',
'jumpto' => 'গম্যাৰ্থে',
'jumptonavigation' => 'দিকদৰ্শন',
'jumptosearch' => 'সন্ধানাৰ্থে',
'view-pool-error' => 'দুঃখিত, এই মুহূৰ্তত চাৰ্ভাৰত অতিৰিক্ত চাপ পৰিছে ।
অজস্ৰ সদস্যই এই পৃষ্ঠা চাব বিচাৰিছে ।
অনুগ্ৰহ কৰি অলপ পাছত এই পৃষ্ঠা চাবলৈ প্ৰয়াস কৰক ।

$1',
'pool-timeout' => 'বন্ধ কৰাৰ বাবে অপেক্ষা কৰাৰ সময় উকলি গৈছে',
'pool-queuefull' => 'পোল কিউ (pool queue) সমূল',
'pool-errorunknown' => 'অপৰিচিত ত্ৰুটি',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => '{{SITENAME}}ৰ বিষয়ে',
'aboutpage' => 'Project:ইতিবৃত্ত',
'copyright' => 'এই বিষয়বস্তু $1 ৰ আওতাত উপলব্ধ।',
'copyrightpage' => '{{ns:project}}:স্বত্ব',
'currentevents' => 'সাম্প্ৰতিক ঘটনাৱলী',
'currentevents-url' => 'Project:শেহতীয়া ঘটনাৱলী',
'disclaimers' => 'দায়লুপ্তি',
'disclaimerpage' => 'Project:সাধাৰণ দায়লুপ্তি',
'edithelp' => 'সম্পাদনাৰ বাবে সহায়',
'edithelppage' => 'Help:সম্পাদনা',
'helppage' => 'Help:সমল',
'mainpage' => 'বেটুপাত',
'mainpage-description' => 'বেটুপাত',
'policy-url' => 'Project:নীতি',
'portal' => "সমাজৰ বাটচ'ৰা",
'portal-url' => 'Project:সমজুৱা পৃষ্ঠা',
'privacy' => 'গোপনীয়তা নীতি',
'privacypage' => 'Project:গোপনীয়তা নীতি',

'badaccess' => 'অনুমোদন ত্ৰুটি',
'badaccess-group0' => 'আপুনি কৰিব বিচৰা কামতো কৰাৰ অধিকাৰ আপোনাৰ নাই।',
'badaccess-groups' => 'আপুনি অনুৰোধ কৰা কাৰ্য কেৱল {{plural:$2|গোটৰ|গোটৰ}} সদস্যৰ বাবে সীমিত: $1',

'versionrequired' => 'মিডিয়াৱিকিৰ $1 সংকলন থাকিব লাগিব ।',
'versionrequiredtext' => 'এই পৃষ্ঠাটো ব্যৱহাৰ কৰিবলৈ মিডিয়াৱিকিৰ $1 সংস্কৰণ থাকিব লাগিব । [[Special:Version|সংস্কৰণ পৃষ্ঠা]] চাওক।',

'ok' => 'ঠিক আছে',
'retrievedfrom' => '"$1"ৰ পৰা সংকলিত',
'youhavenewmessages' => 'আপোনাৰ কাৰণে $1 আছে। ($2)',
'newmessageslink' => 'নতুন সংবাদ',
'newmessagesdifflink' => 'শেহতীয়া সাল-সলনি',
'youhavenewmessagesmulti' => '$1ত আপোনাৰ কাৰণে নতুন সংবাদ আছে',
'editsection' => 'সম্পাদনা কৰক',
'editold' => 'সম্পাদনা',
'viewsourceold' => 'উৎস চাওক',
'editlink' => 'সম্পাদনা কৰক',
'viewsourcelink' => 'উৎস চাওক',
'editsectionhint' => '$1 খণ্ডৰ সম্পাদনা',
'toc' => 'সূচী',
'showtoc' => 'দেখুৱাওক',
'hidetoc' => 'দেখুৱাব নালাগে',
'collapsible-collapse' => 'সংকোচন',
'collapsible-expand' => 'বহলাওক',
'thisisdeleted' => '$1 চাওক বা সলনি কৰক?',
'viewdeleted' => '$1 চাওক?',
'restorelink' => '{{PLURAL:$1| এটা বিলুপ্ত সম্পাদনা|$1 টা বিলুপ্ত সম্পাদনা}}',
'feedlinks' => 'ফিড:',
'feed-invalid' => 'অবৈধ গ্ৰাহক ফিড প্ৰকাৰ',
'feed-unavailable' => 'চিণ্ডিকেশ্যন ফিড মজুত নাই',
'site-rss-feed' => '$1 আৰ-এচ-এচ ফীড',
'site-atom-feed' => '$1 এটম ফীড',
'page-rss-feed' => '"$1" আৰ-এচ-এচ ফীড',
'page-atom-feed' => '"$1" এটম ফীড',
'red-link-title' => '$1 (পৃষ্ঠাটো নাই)',
'sort-descending' => 'ক্ৰমহ্ৰস্বমান ভাৱে ক্ৰমবদ্ধ কৰক',
'sort-ascending' => 'ক্ৰমবৰ্দ্ধমান ভাৱে ক্ৰমবদ্ধ কৰক',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'পৃষ্ঠা',
'nstab-user' => 'সদস্য পৃষ্ঠা',
'nstab-media' => 'মিডিয়া পৃষ্ঠা',
'nstab-special' => 'বিশেষ পৃষ্ঠা',
'nstab-project' => 'প্ৰকল্প পৃষ্ঠা',
'nstab-image' => 'নথি',
'nstab-mediawiki' => 'সংবাদ',
'nstab-template' => 'সাঁচ',
'nstab-help' => 'সাহায্য পৃষ্ঠা',
'nstab-category' => 'শ্ৰেণী',

# Main script and global functions
'nosuchaction' => 'এনে কাৰ্য নাই',
'nosuchactiontext' => "এই ইউআৰএলে নিৰ্ধাৰিত কৰা কাৰ্য অবৈধ।
আপুনি বোধহয়  ইউআৰএল ভুলকৈ লিখিছে বা এটা ভুল লিঙ্ক অনুকৰণ কৰিছে ।
{{SITENAME}}ত ব্যৱহাৰ হোৱা চফ্টৱেৰত ত্ৰুটি হ'বও পাৰে ।",
'nosuchspecialpage' => 'এনে ধৰনৰ কোনো বিশেষ পৃষ্ঠা নাই',
'nospecialpagetext' => '<strong>আপুনি অবৈধ বিশেষ পৃষ্ঠা এটা অনুৰোধ কৰিছে ।</strong>

বৈধ বিশেষ পৃষ্ঠাসমূহৰ তালিকা ইয়াত পাব [[Special:SpecialPages|{{int:specialpages}}]] ।',

# General errors
'error' => 'ভুল',
'databaseerror' => 'তথ্যকোষৰ ভুল',
'dberrortext' => 'Database query’ত ত্ৰুটি আছে।
ছফ্টৱেৰত থকা কোনো বাগৰ বাবে এনে হব পাৰে।
অন্তিমবাৰ চেষ্টা কৰা ডাটাবেচ কুৱেৰীটো আছিল এনেধৰণৰ:
<blockquote><tt>$1</tt></blockquote>
"<tt>$2</tt>" ফাংচনৰ পৰা
ডাটাবেচে প্ৰেৰণ কৰা ত্ৰুটি: "<tt>$3: $4</tt>".',
'dberrortextcl' => 'এক ডাটাবেচ চিণ্টেক্স ত্ৰুটি ঘটিছে।
অন্তিমবাৰ চেষ্টা কৰা ডাটাবেচ কুৱেৰীটো আছিল এনেধৰণৰ:
"$1"
"$2" ফাংচনৰ পৰা
ডাটাবেচে প্ৰেৰণ কৰা ত্ৰুটি "$3: $4"',
'laggedslavemode' => 'সাৱধানবাণী: ইয়াত সাম্প্ৰতিক সাল-সলনি নাথাকিব পাৰে',
'readonly' => 'তথ্যকোষ বন্ধ কৰা আছে',
'enterlockreason' => 'বন্ধ কৰাৰ কাৰণ দিয়ক, লগতে কেতিয়ামানে খোলা হব তাকো জনাব।',
'readonlytext' => 'নতুন সম্পাদন আৰু আন সাল-সলনিৰ কাৰণে তথ্যকোষ বৰ্তমানে বন্ধ আছে, হয়তো নিয়মীয়া চোৱা-চিতা কৰিবলৈ, কিছু সময় পিছত এয়া সাধাৰণ অৱস্থালৈ আহিব।

যিজন প্ৰশাসকে বন্ধ কৰিছে তেওঁ এই কাৰণ দিছে: $1',
'missing-article' => '"$1" $2 লেখাটো তথ্যকোষত পোৱা নগ’ল ।

বিলোপ কৰা কোনো পৃষ্ঠাৰ সংযোগৰ বাবে সাধাৰণতে এনে ঘটে ।

যদি এনে হোৱা নাই তেন্তে আপুনি ছফ্টৱেৰত কিবা সমস্যা পাইছে ।
অনুগ্ৰহ কৰি এই সম্পৰ্কে ইউ.আৰ.এল. সহ কোনো [[Special:ListUsers/sysop|প্ৰশাসক]]ক জনাওক ।',
'missingarticle-rev' => '(সংস্কৰণ#: $1)',
'missingarticle-diff' => '(তফাৎ: $1, $2)',
'readonly_lag' => 'তথ্যকোষ স্বয়ংক্ৰিয়ভাৱে বন্ধ হৈছে যাতে দ্বিতীয় শ্ৰেণীৰ তথ্যকোষৰ চাৰ্ভাৰ প্ৰধান তথ্যকোষৰ চাৰ্ভাৰৰ অৱস্থালৈ আহিব পাৰে ।',
'internalerror' => 'আভ্যন্তৰীণ ক্ৰুটি',
'internalerror_info' => 'আভ্যন্তৰীণ ত্ৰুটি: $1',
'fileappenderrorread' => 'যোৰা দিয়াৰ সময়ত "$1" পাঠ্য কৰা নহ\'ল ।',
'fileappenderror' => '"$2"ৰ লগত "$1"ৰ সংযোগ কৰা নহ\'ল ।',
'filecopyerror' => '"$1" ফাইলটো "$2"লৈ প্ৰতিলিপি কৰিব পৰা নগ’ল।',
'filerenameerror' => '"$1" ফাইলৰ নাম সলনি কৰি "$2" কৰিব পৰা নগ’ল ।',
'filedeleteerror' => '"$1" ফাইলতো বিলোপ কৰিব পৰা নগ’ল।',
'directorycreateerror' => '"$1" নিৰ্দেশিকা সৃষ্টি কৰিব পৰা নগ’ল।',
'filenotfound' => '"$1" নামৰ ফাইলটো বিচাৰি পোৱা নগ’ল।',
'fileexistserror' => '"$1" ফাইলটোত লিখিব নোৱাৰি: ফাইলটো আগৰ পৰাই আছে',
'unexpected' => 'অনাকাংক্ষিত মূল্য: "$1"="$2".',
'formerror' => 'ভুল: ফৰ্ম খন জমা দিব পৰা নগ’ল',
'badarticleerror' => 'এই পৃষ্ঠাটোত এই কামটো কৰিব নোৱাৰি ।',
'cannotdelete' => '"$1" পৃষ্ঠা বা নথিখন বিলোপ কৰা অসম্ভৱ ।
সম্ভৱ আনে আগেই বিলোপ কৰিছে ।',
'cannotdelete-title' => '"$1" পৃষ্ঠা বিলোপ কৰিব নোৱাৰি',
'delete-hook-aborted' => 'হুকৰ দ্বাৰা সম্পাদনা প্ৰত্যাখ্যান কৰা হৈছে ।
ইয়াৰ কোনো ব্যাখ্যা নাই ।',
'badtitle' => 'অগ্ৰহণীয় শিৰোনামা',
'badtitletext' => 'আপুনি বিচৰা পৃষ্ঠাটোৰ শিৰোনামা অযোগ্য, খালী বা ভুলকৈ জড়িত আন্তৰ্ভাষিক বা আন্তৰ্ৱিকি শিৰোনামা। ইয়াত এক বা ততোধিক বৰ্ণ আছে যাক শিৰোনামাত ব্যৱহাৰ কৰিব নোৱাৰি।',
'perfcached' => "তলত দিয়া তথ্যখিনি আগতে জমা কৰি থোৱা (cached) আৰু সাম্প্ৰতিক নহ'ব পাৰে। এই তথ্যখিনিত সৰ্বোচ্চ {{PLURAL:$1|এটা ফলাফল|$1টা ফলাফল}} উপলব্ধ।",
'perfcachedts' => 'তলত দিয়া তথ্য খিনি আগতে জমা কৰি থোৱা (cached) আৰু শেষবাৰৰ কাৰণে $1 ত নবীকৰণ কৰা হৈছিল। সৰ্বাধিক {{PLURAL:$4|এটা ফলাফল|$4 টা ফলাফল}} এই কেশ্বত পাব।',
'querypage-no-updates' => 'এই পৃষ্ঠাটো নৱীকৰণ কৰা ৰোধ কৰা হৈছে। ইয়াৰ তথ্য এতিয়া সতেজ কৰিব নোৱাৰি।',
'wrong_wfQuery_params' => 'wfQuery() ৰ কাৰণে ভুল মাপদণ্ড দিয়া হৈছে <br />
কাৰ্য: $1<br />পৃষ্ঠা: $2',
'viewsource' => 'উৎস চাওক',
'viewsource-title' => '$1ৰ উৎস চাওক',
'actionthrottled' => 'কাৰ্য লেহেম কৰা হৈছে',
'actionthrottledtext' => 'স্পাম ৰোধ কৰিবলৈ এই ক্ৰিয়াতো কম সময়ৰ ভিতৰত বহু বেছি বাৰ কৰাতো ৰোধ কৰা হৈছে, আৰু আপুনি ইতিমধ্যে সেই সীমা অতিক্ৰম কৰিলে।
অনুগ্ৰহ কৰি কিছু সময় পাছত চেষ্টা কৰক।',
'protectedpagetext' => 'এই পৃষ্ঠাটোৰ সম্পাদনা ৰোধ কৰিবলৈ সুৰক্ষিত কৰা হৈছে।',
'viewsourcetext' => 'আপুনি এই পৃষ্ঠাটোৰ উৎস চাব আৰু নকল কৰিব পাৰে',
'viewyourtext' => "আপুনি '''আপোনাৰ সম্পাদনাসমূহ'''ৰ উৎস চাব আৰু এই পৃষ্ঠালৈ নকল কৰিব পাৰে:",
'protectedinterface' => 'এই পৃষ্ঠাই ৱিকি ছফ্টৱেৰৰ ইণ্টাৰফে’চ বাৰ্তা প্ৰদান কৰে, আৰু ইয়াক সুৰক্ষিত কৰি ৰখা হৈছে ।',
'editinginterface' => "'''সাৱধানবাণী:''' আপুনি যিখন পৃষ্ঠা সম্পাদনা কৰিছে সেইখন ৱিকি ছফ্টৱেৰৰ ইণ্টাৰফে’চ বাৰ্তা দিবলৈ ব্যৱহাৰ হয় । এই পৃষ্ঠাৰ সাল-সলনিয়ে আন ব্যৱহাৰকাৰীৰ বাবে ইণ্টাৰফে’চত প্ৰভাৱ পেলাব । অনুবাদৰ বাবে অনুগ্ৰহ কৰি মিডিয়াৱিকি স্থানীয়কৰণ প্ৰকল্প [//translatewiki.net/wiki/Main_Page?setlang=bn translatewiki.net] ব্যৱহাৰ কৰক ।",
'sqlhidden' => '(নিহিত SQL query)',
'cascadeprotected' => 'এই পৃষ্ঠাখন সম্পাদনাৰ পৰা সুৰক্ষিত কাৰণ এই {{PLURAL:$1|পৃষ্ঠা, যিখন|পৃষ্ঠা, যিবোৰ}} "প্ৰপাতাকাৰ" (cascading) বিকল্পৰ সহযোগত সুৰক্ষিত কৰা হৈছে: 
$2',
'namespaceprotected' => "আপোনাৰ '''$1''' নামস্থানৰ পৃষ্ঠাসমূহ সম্পাদনা কৰাৰ অধিকাৰ নাই।",
'customcssprotected' => 'এই CSS পৃষ্ঠা সম্পাদনা কৰাৰ অধিকাৰ আপোনাৰ নাই, কাৰণ ইয়াত আন সদস্যৰ ব্যক্তিগত পছন্দসমূহত আছে ।',
'customjsprotected' => 'এই জাভালিপিৰ পৃষ্ঠা সম্পাদনা কৰাৰ অধিকাৰ আপোনাৰ নাই, কাৰণ ইয়াত আন সদস্যৰ ব্যক্তিগত পছন্দসমূহত আছে ।',
'ns-specialprotected' => 'বিশেষ পৃষ্ঠা সম্পাদিত কৰিব নোৱাৰি।',
'titleprotected' => "[[User:$1|$1]] সদস্যজনে এই শিৰোনাণমাৰ লিখনী লিখা ৰোধ কৰিছে ।
ইয়াৰ কাৰণ হৈছে ''$2'' ।",
'filereadonlyerror' => '"$1" ফাইলটোক পৰিৱৰ্তন কৰিব পৰা নগ\'ল কাৰণ ফাইল ভঁৰাল "$2" কেৱল পঢ়িব পৰা অৱস্থাত আছে।
যিজন প্ৰশাসকে এইটো বন্ধ কৰিছে তেওঁ দৰ্শোৱা কাৰণ হৈছে: \'\'$3\'\'।',
'invalidtitle-knownnamespace' => 'নামস্থান "$2" আৰু পাঠ্য "$3" থকা অবৈধ শিৰোনাম',
'invalidtitle-unknownnamespace' => 'অজ্ঞাত নামস্থান সংখ্যা $1 আৰু পাঠ্য "$2" থকা অবৈধ শিৰোনাম',
'exception-nologin' => 'প্ৰৱেশ কৰা নাই',
'exception-nologin-text' => 'এই পৃষ্ঠা অথবা কামৰ বাবে আপুনি প্ৰৱেশ কৰা বাধ্যতামূলক',

# Virus scanner
'virus-badscanner' => "ভুল কনফিগাৰেচন: অজ্ঞাত ভাইৰাছ স্কেনাৰ: ''$1''",
'virus-scanfailed' => 'স্কেন অসফল (কোড $1)',
'virus-unknownscanner' => 'অজ্ঞাত এন্টিভাইৰাচ:',

# Login and logout pages
'logouttext' => "'''আপুনি প্ৰস্থান কৰিলে ।'''

আপুনি বেনামী ভাবেও {{SITENAME}} ব্যৱহাৰ কৰিব পাৰে, অথবা আকৌ সেই একে বা বেলেগ নামেৰে [[Special:UserLogin|প্ৰৱেশ]] কৰিব পাৰে।
মন কৰিব যে যেতিয়ালৈকে আপোনাৰ ব্ৰাউজাৰৰ অস্থায়ী-স্মৃতি (cache memory) খালী নকৰে, তেতিয়ালৈকে কিছুমান পৃষ্ঠাত আপুনি প্ৰৱেশ কৰা বুলি দেখুৱাই থাকিব পাৰে।",
'welcomecreation' => '== আদৰিছোঁ, $1! ==
আপোনাৰ সদস্যভুক্তি হৈ গ’ল ।
[[Special:Preferences|{{SITENAME}}ৰ পছন্দসমূহ]]ত আপোনাৰ পছন্দমতে ব্যক্তিগতকৰণ কৰি ল’বলৈ নাপাহৰে যেন ।',
'yourname' => 'সদস্যনাম:',
'yourpassword' => 'আপোনাৰ গুপ্তশব্দ',
'yourpasswordagain' => 'গুপ্তশব্দ আকৌ এবাৰ লিখক',
'remembermypassword' => 'মোৰ প্ৰৱেশ এই কম্পিউটাৰত মনত ৰাখিব (সৰ্বাধিক $1 {{PLURAL:$1|দিনলৈ|দিনলৈ}})',
'securelogin-stick-https' => 'প্ৰৱেশ কৰা পাছত HTTPS-ৰ দ্বাৰা সংযোগ ৰাখক',
'yourdomainname' => 'আপোনাৰ ডমেইন:',
'externaldberror' => 'কোনো প্ৰামাণ্যকৰণ তথ্যকোষৰ ত্ৰুটি ঘটিছে নতুবা আপোনাৰ বৰ্হি-একাউণ্ট নৱীকৰণ কৰাৰ অনুমতি নাই ।',
'login' => 'প্ৰৱেশ',
'nav-login-createaccount' => 'প্ৰৱেশ/সদস্যভুক্তি',
'loginprompt' => '{{SITENAME}}ত প্ৰৱেশ কৰিবলৈ আপুনি কুকিজ্ সক্ৰিয় থাকিব লাগিব।',
'userlogin' => 'প্ৰৱেশ/সদস্যভুক্তি',
'userloginnocreate' => 'প্ৰৱেশ',
'logout' => 'প্ৰস্থান',
'userlogout' => 'প্ৰস্থান',
'notloggedin' => 'প্ৰৱেশ কৰা নাই',
'nologin' => "ৱিকিপিডিয়াত আপোনাৰ একাউণ্ট নাই নেকি? তেনে '''$1'''।",
'nologinlink' => 'নতুন একাউণ্ট খোলক',
'createaccount' => 'সভ্যভুক্ত হবলৈ',
'gotaccount' => "আপুনি সদস্য হয়নে? '''$1'''",
'gotaccountlink' => 'প্ৰৱেশ',
'userlogin-resetlink' => 'আপোনাৰ প্ৰৱেশ তথ্য পাহৰিছে?',
'createaccountmail' => 'ই-মেইলেৰে',
'createaccountreason' => 'কাৰণ:',
'badretype' => 'আপুনি দিয়া গুপ্ত শব্দ দুটা মিলা নাই।',
'userexists' => 'আপুনি দিয়া সদস্যনাম আগৰে পৰাই ব্যৱহাৰ হৈ আছে।
অনুগ্ৰহ কৰি বেলেগ সদস্যনাম এটা নিৰ্বাচন কৰক।',
'loginerror' => 'প্ৰৱেশ সমস্যা',
'createaccounterror' => "একাউন্ট সৃষ্টি কৰা নহ'ল: $1",
'nocookiesnew' => 'আপোনাৰ সদস্যভুক্তি হৈ গৈছে, কিন্তু আপুনি প্ৰৱেশ কৰা নাই।
{{SITENAME}}ত প্ৰৱেশ কৰিবলৈ কুকি সক্ৰিয় থাকিব লাগিব।
আপুনি কুকি নিষ্ক্ৰিয় কৰি থৈছে।
অনুগ্ৰহ কৰি কুকি সক্ৰিয় কৰক, আৰু তাৰ পাছত আপোনাৰ সদস্য নামেৰে প্ৰৱেশ কৰক।',
'nocookieslogin' => '{{SITENAME}} ত প্ৰৱেশ কৰিবলৈ কুকি সক্ৰিয় থাকিব লাগিব।
আপুনি কুকি নিষ্ক্ৰিয় কৰি থৈছে।
অনুগ্ৰহ কৰি কুকি সক্ৰিয় কৰক, আৰু তাৰ পাছত চেষ্টা কৰক।',
'nocookiesfornew' => 'সদস্য একাউন্ট সৃষ্টি কৰা নহল, কাৰণ তাৰ উৎস অনিশ্চিত ।
আপোনাৰ কুকি সক্ৰিয় ৰাখক, এই পৃষ্ঠা ৰি-লোড কৰি পুনৰ চেষ্টা কৰক ।',
'noname' => 'আপুনি বৈধ সদস্যনাম এটা দিয়া নাই।',
'loginsuccesstitle' => "প্ৰৱেশ অনুমোদিত হ'ল",
'loginsuccess' => "''' আপুনি {{SITENAME}}ত \"\$1\" নামেৰে প্ৰৱেশ কৰিলে '''",
'nosuchuser' => '"$1" নামৰ কোনো সদস্য নাই।
সদস্য নাম আকাৰ সংবেদনশীল।
আপোনাৰ বানানতো চাওক, বা  [[Special:UserLogin/signup|নতুন সদস্যভুক্তি কৰক]]।',
'nosuchusershort' => '"$1" এই নামৰ কোনো সদস্য নাই ।
বানানতো আকৌ এবাৰ ভালদৰে চাওক ।',
'nouserspecified' => 'সদস্যনাম দিয়া বাধ্যতামূলক।',
'login-userblocked' => 'এই সদস্যক নিষেধ কৰা হৈছে। প্ৰৱেশ অসম্ভৱ।',
'wrongpassword' => 'আপুনি ভুল গুপ্তশব্দ দিছে। অনুগ্ৰহ কৰি আকৌ এবাৰ চেষ্টা কৰক।',
'wrongpasswordempty' => 'দিয়া গুপ্তশব্দতো খালী; অনুগ্ৰহ কৰি আকৌ এবাৰ চেষ্টা কৰক। ।',
'passwordtooshort' => "গুপ্তশব্দ কমেও {{PLURAL:$1|১ টা|$1 টা}} আখৰৰ হ'ব লাগিব ।",
'password-name-match' => "আপোনাৰ গুপ্তশব্দ আৰু আপোনাৰ সদস্যনাম বেলেগ হ'ব লাগিব",
'password-login-forbidden' => 'এই সদস্যনাম আৰু গুপ্তশব্দৰ ব্যৱহাৰ নিষিদ্ধ কৰা হৈছে ।',
'mailmypassword' => 'ই-মেইলত গুপ্তশব্দ পঠিয়াওক',
'passwordremindertitle' => '{{SITENAME}}ৰ কাৰণে নতুন অস্থায়ী গুপ্তশব্দ',
'passwordremindertext' => 'কোনোবাই (হয়তো আপুনি, $1 আই-পি ঠিকনাৰ পৰা)
{{SITENAME}}ত ব্যৱহাৰ কৰিবলৈ নতুন গুপ্তশব্দৰ বাবে অনুৰোধ কৰিছে ($4) ।
"$2" সদস্যজনৰ কাৰণে এতিয়া নতুন গুপ্তশব্দ হৈছে "$3" ।
আপুনি এতিয়া প্ৰৱেশ কৰক আৰু গুপ্তশব্দতো সলনি কৰক।
আপোনাৰ অস্থায়ী গুপ্তশব্দ {{PLURAL:$5|এদিনৰ|$5 দিনৰ}} ভিতৰত বাতিল কৰা হ\'ব ।

যদি আপুনি এই অনুৰোধ কৰা নাছিল অথবা যদি আপোনাৰ গুপ্তশব্দতো মনত আছে আৰু তাক সলাব নিবিছাৰে, তেনেহলে আপুনি এই বাৰ্তাতো অৱজ্ঞা কৰিব পাৰে আৰু আপোনাৰ আগৰ গুপ্তশব্দটোকে ব্যৱহাৰ কৰি থাকিব পাৰে।',
'noemail' => '"$1" সদস্যজনৰ কোনো ই-মেইল ঠিকনা সঞ্চিত কৰা নাই।',
'noemailcreate' => 'আপুনি এটা সঠিক ই-মেইল ঠিকনা দিব লাগিব',
'passwordsent' => '"$1" ৰ ই-মেইল ঠিকনাত নতুন গুপ্তশব্দ এটা পঠোৱা হৈছে। অনুগ্ৰহ কৰি সেয়া পোৱাৰ পাছত পুনৰ প্ৰৱেশ কৰক।',
'blocked-mailpassword' => 'আপোনাৰ আইপি ঠিকনাৰ পৰা সম্পাদনা কৰা বাৰণ কৰা হৈছে, এনে অৱস্থাত দুৰ্ব্যৱহাৰ ৰোধ কৰিবলৈ গুপ্তশব্দ পুনঃউদ্ধাৰ কৰা সুবিধাতো বাতিল কৰা হৈছে।',
'eauthentsent' => 'সঞ্চিত ই-মেইল ঠিকনাত নিশ্চিতকৰণ ই-মেইল এখন পঠোৱা হৈছে।
আৰু অন্যান্য ই-মেইল পঠোৱাৰ আগতে, আপোনাৰ সদস্যতাৰ নিশ্চিত কৰিবলৈ সেই ই-মেইলত দিয়া নিৰ্দেশনা আপুনি অনু্সৰণ কৰিব লাগিব।',
'throttled-mailpassword' => 'যোৱা {{PLURAL:$1|এঘণ্টাত|$1 ঘণ্টাত}} গুপ্তশব্দ পুনৰুদ্ধাৰ স্মাৰক পঠিওৱা হৈছে ।
অবৈধ ব্যৱহাৰ ৰোধ কৰিবলৈ $1 ঘণ্টাত এবাৰহে গুপ্তশব্দ পুনৰুদ্ধাৰ স্মাৰক পঠিওৱা হয়।',
'mailerror' => 'ই-মেইল পঠোৱাত সমস্যা হৈছে: $1',
'acct_creation_throttle_hit' => 'যোৱা ২৪ ঘন্টাত আপোনাৰ আই-পি ঠিকনাৰ পৰা এই ৱিকিৰ পঢ়োঁতাই  {{PLURAL:$1|১-টা একাউন্ট|$1-টা একাউন্ট}} সৃষ্টি কৰিলে, যিটো সৰ্বোচ্চ অনুমোদনকৃত ।
এতেকে, এই আই-পি ঠিকনাৰ পৰা এই মূহুৰ্তত একাউন্ট সৃষ্টি কৰিব নোৱাৰিব ।',
'emailauthenticated' => 'আপোনাৰ ই-মেইল ঠিকনাটো $2 তাৰিখৰ $3 বজাত নিশ্চিত কৰা হৈছিল ।',
'emailnotauthenticated' => 'আপোনাৰ ই-মেইল ঠিকনাতো এতিয়ালৈ প্ৰমাণিত হোৱা নাই ।
আপুনি তলৰ বিষয়বোৰৰ কাৰণে মেইল পঠাব নোৱাৰে ।',
'noemailprefs' => 'এই সুবিধাবোৰ ব্যৱহাৰ কৰিবলৈ এটা ই-মেইল ঠিকনা দিয়ক।',
'emailconfirmlink' => 'আপোনাৰ ই-মেইল ঠিকনাটো প্ৰমাণিত কৰক',
'invalidemailaddress' => 'এই ই-মেইল ঠিকনাতো গ্ৰহনযোগ্য নহয়, কাৰণ ই অবৈধ প্ৰকাৰৰ যেন লাগিছে।
অনুগ্ৰহ কৰি এটা বৈধ ই-মেইল ঠিকনা লিখক অথবা একো নিলিখিব।',
'cannotchangeemail' => 'এই ৱিকিত একাউন্ট ই-মেইল ঠিকনা সলনি কৰিব পৰা নাযায়',
'emaildisabled' => 'এই ছাইটে ইমেইল পঠিয়াব নোৱাৰে',
'accountcreated' => "একাউণ্ট সৃষ্টি কৰা হ'ল",
'accountcreatedtext' => "$1ৰ কাৰণে সদস্য একাউণ্ট সৃষ্টি কৰা হ'ল।",
'createaccount-title' => '{{SITENAME}}ৰ কাৰণে একাউণ্ট সৃষ্টি কৰক।',
'createaccount-text' => 'আপোনাৰ ই-মেইল ঠিকনাৰ কাৰণে {{SITENAME}} ($4)ত "$2" নামৰ কোনোবাই, "$3" গুপ্তশব্দ দি সদস্যভুক্তি কৰিছে। অনুগ্ৰহ কৰি আপুনি প্ৰৱেশ কৰক আৰু গুপ্তশব্দটো সলনি কৰক।

যদি এইয়া ভুলতে হৈছে, তেনেহলে আপুনি এই বাৰ্তাটো অবজ্ঞা কৰিব পাৰে ।',
'usernamehasherror' => 'সদস্যনামত হেচ্‌ চিহ্ন থাকিব নোৱাৰে',
'login-throttled' => 'আপুনি স‍ম্প্ৰতি অজস্ৰবাৰ লগ্‌-ইনৰ প্ৰয়াস কৰিছে ।
অনুগ্ৰহ কৰি কিছু সময় অপেক্ষা কৰি আকৌ প্ৰয়াস কৰক ।',
'login-abort-generic' => 'আপোনাৰ প্ৰৱেশ অসফল হৈছে- বাতিল কৰা হ’ল',
'loginlanguagelabel' => 'ভাষা: $1',
'suspicious-userlogout' => 'আপোনাৰ প্ৰস্থানৰ অনুৰোধ বাতিল কৰা হৈছে কাৰণ হয়তো আপোনাৰ ব্ৰাউজাৰ অসম্পূৰ্ণ নতুবা পূৰ্বৱতী তথ্য পঠাইছে ।',

# E-mail sending
'php-mail-error-unknown' => 'পি.এইছ.পি মেইল () কাৰ্যত অজ্ঞাত ত্ৰুটি ।',
'user-mail-no-addy' => 'ই-মেইল ঠিকনা নোহোৱাকৈয়ে ই-মেইল পঠোৱাৰ চেষ্টা কৰা হৈছে ।',

# Change password dialog
'resetpass' => 'গুপ্তশব্দ সলনি কৰক',
'resetpass_announce' => 'আপুনি ই-মেইলত পোৱা অস্থায়ী গুপ্তশব্দৰে প্ৰৱেশ কৰিছে।
প্ৰৱেশ সম্পূৰ্ণ কৰিবলৈ, আপুনি এটা নতুন গুপ্তশব্দ দিব লাগিব:',
'resetpass_header' => 'গুপ্তশব্দ সলনি কৰক',
'oldpassword' => 'পুৰণি গুপ্তশব্দ:',
'newpassword' => 'নতুন গুপ্তশব্দ:',
'retypenew' => 'নতুন গুপ্তশব্দ আকৌ লিখক',
'resetpass_submit' => 'গুপ্তশব্দ বহাওক আৰু প্ৰৱেশ কৰক',
'resetpass_success' => 'আপোনাৰ গুপ্তশব্দ সফলতাৰে সলনি কৰা হৈছে, এতিয়া আপুনি প্ৰৱেশ কৰি আছে...',
'resetpass_forbidden' => 'গুপ্তশব্দ সলনি কৰিব নোৱাৰি',
'resetpass-no-info' => 'এই পৃষ্ঠা প্ৰত্যক্ষ ভাৱে ঢুকি পাবলৈ আপুনি প্ৰৱেশ কৰিব লাগিব ।',
'resetpass-submit-loggedin' => 'গুপ্তশব্দ সলনি কৰক',
'resetpass-submit-cancel' => 'বাতিল কৰক',
'resetpass-wrong-oldpass' => 'অস্থায়ী বা সাম্প্ৰতিক গুপ্তশব্দ গ্ৰহণযোগ্য নহয় ।
হয়টো আপুনি ইতিমধ্যেই সফলভাবে আপুনাৰ গুপ্তশব্দ সলনি কৰিছিল বা এটা নতুন অস্থায়ী গুপ্তশব্দৰ বাবে অনুৰোধ কৰিছিল ।',
'resetpass-temp-password' => 'অস্থায়ী গুপ্তশব্দ:',

# Special:PasswordReset
'passwordreset' => 'গুপ্তশব্দ ন-কৈ বহাওক',
'passwordreset-text' => 'আপোনাৰ একাউণ্টৰ সবিশেষ তথ্য ই-পত্ৰৰ জৰিয়তে পাবলৈ তলৰ প্ৰ-পত্ৰ পুৰাওক ।',
'passwordreset-legend' => 'গুপ্তশব্দ ন-কৈ বহাওক',
'passwordreset-disabled' => 'এই ৱিকিত গুপ্তশব্দ নবীকৰণ নিষ্ক্ৰিয় কৰা হৈছে ।',
'passwordreset-pretext' => '{{PLURAL:$1||তলত উল্লেখ কৰা তথ্যৰ কোনো অংশ ভৰাওক}}',
'passwordreset-username' => 'সদস্যনাম',
'passwordreset-domain' => 'ডমেইন :',
'passwordreset-capture' => 'ফলাফল ই-মেইলখন চাওক ?',
'passwordreset-capture-help' => "আপুনি এই ঘৰটো চিহ্নিত কৰিলে এই ই-মেইল (আৰু অস্থায়ী গুপ্তশব্দ) আপুনি দেখা পোৱাৰ লগতে সদস্যজনলৈও পঠোৱা হ'ব।",
'passwordreset-email' => 'ই-মেইল ঠিকনা:',
'passwordreset-emailtitle' => '{{SITENAME}}ত একাউণ্টৰ সবিশেষ তথ্য আছে ।',
'passwordreset-emailtext-ip' => 'কোনোবাই (IP ঠিকনা $1 ৰ পৰা সম্ভৱত: আপুনিয়েই) {{SITENAME}} ($4) ৰ বাবে আপোনাৰ একাউণ্টৰ সবিশেষ তথ্য বিচাৰিছিল । ই-পত্ৰ ঠিকনাটোৰ লগত এই সদস্যৰ {{PLURAL:$3|একাউণ্ট|একাউণ্টবোৰ}} জড়িত হৈ আছে ।

$2
 
{{PLURAL:$3|এই অস্থায়ী গুপ্তশব্দ|এই অস্থায়ী গুপ্তশব্দবোৰ}} {{PLURAL:$5|এদিনত|$5 দিনত }} নাইকীয়া হ’ব । আপুনি লগ-ইন কৰি এটা নতুন গুপ্তশব্দ দিয়া উচিত । যদি আন কোনোবাই এই অনুৰোধ কৰিছিল, বা আপুনি নিজৰ পূৰ্বৰ গুপ্তশব্দ মনত পেলাইছে আৰু ইয়াক সলাব খোজা নাই, তেন্তে আপুনি এই বাৰ্তাক অগ্ৰাহ্য কৰি নিজৰ পূৰ্বৰ গুপ্তশব্দ ব্যৱহাৰ কৰি থাকিব পাৰে ।',
'passwordreset-emailtext-user' => '$1 ব্যৱহাৰকাৰীয়ে {{SITENAME}} ($4) ৰ বাবে আপোনাৰ একাউণ্টৰ সবিশেষ তথ্য বিচাৰিছিল । ই-পত্ৰ ঠিকনাটোৰ লগত এই সদস্যৰ {{PLURAL:$3|একাউণ্ট|একাউণ্টসমূহ}} জড়িত হৈ আছে ।
 
$2
 
{{PLURAL:$3|এই অস্থায়ী গুপ্তশব্দ|এই অস্থায়ী গুপ্তশব্দবোৰ}} {{PLURAL:$5|এদিনত|$5 দিনত }} নাইকীয়া হ’ব । আপুনি লগ-ইন কৰি এটা নতুন গুপ্তশব্দ দিয়া উচিত । যদি আন কোনোবাই এই অনুৰোধ কৰিছিল, বা আপুনি নিজৰ পূৰ্বৰ গুপ্তশব্দ মনত পেলাইছে আৰু ইয়াক সলাব খোজা নাই, তেন্তে আপুনি এই বাৰ্তাক অগ্ৰাহ্য কৰি নিজৰ পূৰ্বৰ গুপ্তশব্দ ব্যৱহাৰ কৰি থাকিব পাৰে ।',
'passwordreset-emailelement' => 'সদস্যনাম: $1
অস্থায়ী গুপ্তশব্দ: $2',
'passwordreset-emailsent' => 'এখন স্মাৰক ই-মেইল পঠোৱা হৈছে।',
'passwordreset-emailsent-capture' => 'এখন স্মাৰক ই-মেইল পঠোৱা হৈছে, এইখন তলত দেখা পাব।',
'passwordreset-emailerror-capture' => "এখন স্মাৰক ই-মেইল সৃষ্টি কৰা হ'ল কিন্তু সদস্যজনলৈ পঠিয়াব পৰা নগ'ল, এইখন তলত দেখুওৱা হৈছে: $1",

# Special:ChangeEmail
'changeemail' => 'ই-মেইল ঠিকনা সলনি কৰক',
'changeemail-header' => 'একাউণ্টৰ ই-মেইল ঠিকনা সলনি কৰক',
'changeemail-text' => 'আপোনাৰ ই-মেইল ঠিকনা সলাবলৈ এই প্ৰপত্ৰখন পূৰাওক । এই সালসলনি নিশ্চিত কৰিবলৈ আপোনাৰ গুপ্তশব্দ দিব লাগিব ।',
'changeemail-no-info' => 'এই পৃষ্ঠা প্ৰত্যক্ষ্ ভাৱে ঢুকি পাবলৈ আপুনি প্ৰৱেশ কৰিব লাগিব ।',
'changeemail-oldemail' => 'বৰ্তমানৰ ই-মেইল ঠিকনা:',
'changeemail-newemail' => 'নতুন ই-মেইল ঠিকনা:',
'changeemail-none' => '(নাই)',
'changeemail-submit' => 'ই-মেইল ঠিকনা সলনি কৰক',
'changeemail-cancel' => 'বাতিল কৰক',

# Edit page toolbar
'bold_sample' => 'গাঢ় পাঠ্য',
'bold_tip' => 'গাঢ় পাঠ্য',
'italic_sample' => 'হেলনীয়া পাঠ্য',
'italic_tip' => 'বেঁকা পাঠ্য',
'link_sample' => 'শিৰোনামা সংযোগ',
'link_tip' => 'আভ্যন্তৰীণ সংযোগ',
'extlink_sample' => 'http://www.example.com শীৰ্ষক সংযোগ',
'extlink_tip' => 'বাহ্যিক সংযোগ (http:// উপসৰ্গ মনত ৰাখিব)',
'headline_sample' => 'শিৰোনামা পাঠ্য',
'headline_tip' => 'দ্বিতীয় স্তৰৰ শিৰোনামা',
'nowiki_sample' => 'নসজোৱা পাঠ্য ইয়াত অন্তৰ্ভুক্ত কৰক',
'nowiki_tip' => 'ৱিকি-সম্মত সাজ-সজ্জা অৱজ্ঞা কৰক',
'image_tip' => 'এম্বেডেড ফাইল',
'media_tip' => 'ফাইল সংযোগ',
'sig_tip' => 'সময়ৰ সৈতে আপোনাৰ স্বাক্ষৰ',
'hr_tip' => 'পথালি ৰেখা (কমকৈ ব্যৱহাৰ কৰিব)',

# Edit pages
'summary' => 'সাৰাংশ:',
'subject' => 'বিষয় / শীৰ্ষক:',
'minoredit' => 'এইটো এটা অগুৰুত্বপূৰ্ণ সম্পাদনা',
'watchthis' => 'এই পৃষ্ঠাটো লক্ষ্য কৰক',
'savearticle' => 'পৃষ্ঠা সাঁচক',
'preview' => 'খচৰা',
'showpreview' => 'খচৰা চাওক',
'showlivepreview' => 'পোনপটীয়া খচৰা',
'showdiff' => 'সালসলনিবোৰ দেখুৱাওক',
'anoneditwarning' => "<span style=\"color:red;\">'''সাৱধান:''' আপুনি প্ৰৱেশ কৰা নাই ।</span> 
এই পৃষ্ঠাৰ ইতিহাসত আপোনাৰ আই পি ঠিকনা সংৰক্ষিত কৰা হ'ব।",
'anonpreviewwarning' => "''আপুনি প্ৰৱেশ কৰা নাই। আপোনাৰ সম্পাদনা সাঁচিলে আপোনাৰ আই-পি ঠিকনা এই পৃষ্ঠাৰ ইতিহাসত সংৰক্ষিত হ'ব।\"",
'missingsummary' => "'''স্মাৰক:''' আপুনি সম্পাদনা সাৰাংশ দিয়া নাই।
আপুনি আৰু এবাৰ সংৰক্ষণৰ বাবে ক্লিক কৰিলে সাৰাংশৰ অবিহনে সংৰক্ষিত হব।",
'missingcommenttext' => 'অনুগ্ৰহ কৰি তলত মন্তব্য এটা দিয়ক।',
'missingcommentheader' => "'''স্মাৰক:''' আপুনি এই মন্তব্যটোত শিৰোনামা দিয়া নাই।
যদি আকৌ এবাৰ যদি \"{{int:savearticle}}\" টিপে, তেনেহলে সম্পাদনা শিৰোনামা অবিহনে সংৰক্ষিত হব।",
'summary-preview' => 'সাৰাংশৰ খচৰা:',
'subject-preview' => 'বিষয়/শিৰোনামাৰ খচৰা:',
'blockedtitle' => 'সদস্যজনক অবৰোধ কৰা হৈছে',
'blockedtext' => "'''আপোনাৰ সদস্যনাম অথবা আই-পি ঠিকনা অৱৰোধ কৰা হৈছে ।'''

$1ৰ দ্বাৰা এই অৱৰোধ কৰা হৈছে ।
ইয়াৰ বাবে দিয়া কাৰণ হৈছে ''$2'' ।

* অৱৰোধ আৰম্ভণি: $8
* অৱৰোধ সমাপ্তি: $6
* অৱৰোধ কৰা হৈছে: $7

আপুনি এই অৱৰোধৰ বিষয়ে আলোচনা কৰিবলৈ $1 বা [[{{MediaWiki:Grouppage-sysop}}|প্ৰবন্ধকৰ]] লগত সম্পৰ্ক স্থাপন কৰিব পাৰে ।
আপুনি যেতিয়ালৈ [[Special:Preferences|সদস্য পছন্দ]] পৃষ্ঠাত আপোনাৰ ই-মেইল ঠিকনা নিদিয়ে তেতিয়ালৈ ’সদস্যক ই-মেইল পঠাওক’ সুবিধাতো ব্যৱহাৰ কৰিব নোৱাৰিব, আৰু আপোনাক এয়া কৰিবলৈ ৰোধ কৰা হোৱা নাই ।
আপোনাৰ এতিয়াৰ আই-পি ঠিকনা হল $3, আৰু আপোনাৰ অবৰোধ ক্ৰমিক হৈছে #$5 ।
এই বিষয়ে হোৱা আলোচনাত ইয়াৰ সবিশেষ সদৰী কৰে যেন।",
'autoblockedtext' => "আপোনাৰ আই-পি ঠিকনা নিজে নিজে অৱৰোধিত হৈছে, কাৰণ ইয়াক কোনোবাই ব্যৱহাৰ কৰি থাকোতে $1ৰ দ্বাৰা অৱৰোধ কৰা হৈছে।
ইয়াৰ বাবে দিয়া কাৰণ হৈছে:

:''$2''

* অৱৰোধ আৰম্ভণি:  $8
* অৱৰোধ সমাপ্তি: $6
* অৱৰোধ কৰা হৈছে: $7

আপুনি এই অবৰোধৰ বিষয়ে আলোচনা কৰিবলৈ $1 বা [[{{MediaWiki:Grouppage-sysop}}|প্ৰশাসক]]ৰ লগত সম্পৰ্ক স্থাপন কৰিব পাৰে ।

আপুনি যেতিয়ালৈ [[Special:Preferences|সদস্য পছন্দ]] পৃষ্ঠাত আপোনাৰ ই-মেইল ঠিকনা নিদিয়ে তেতিয়ালৈ ’সদস্যক ই-মেইল পঠাওক’ সুবিধাতো ব্যৱহাৰ কৰিব নোৱাৰে। আপোনাক এয়া কৰিবলৈ ৰোধ কৰা হোৱা নাই ।
আপোনাৰ এতিয়াৰ আই পি ঠিকনা হৈছে $3, আৰু আপোনাৰ অৱৰোধ ক্ৰমিক হৈছে $5 ।
এই বিষয়ে হোৱা আলোচনাত ইয়াক ব্যৱহাৰ কৰিবলৈ অনুৰোধ কৰা হ’ল।",
'blockednoreason' => 'কাৰণ দিয়া নাই',
'whitelistedittext' => 'সম্পাদনা কৰিবলৈ $1 কৰক ।',
'confirmedittext' => 'সম্পাদনা কৰাৰ আগতে আপুনি আপোনাৰ ই-মেইল ঠিকনাটো প্ৰমানিত কৰিব লাগিব।
অনুগ্ৰহ কৰি [[Special:Preferences|মোৰ পচন্দ]] ত গৈ আপোনাৰ ই-মেইল ঠিকনা দিয়ক আৰু তাক প্ৰমানিত কৰক।',
'nosuchsectiontitle' => 'এনেকুৱা কোনো বিভাগ নাই',
'nosuchsectiontext' => 'অপুনি এনে এটা বিভাগ সম্পাদিত কৰিব বিচাৰিছে যাৰ কোনো অস্তিত্ব নাই।',
'loginreqtitle' => 'প্ৰৱেশ আৱশ্যক',
'loginreqlink' => 'প্ৰৱেশ',
'loginreqpagetext' => 'অন্যান্য পৃষ্ঠা চাবলৈ আপুনি $1 কৰিব লাগিব।',
'accmailtitle' => "গুপ্তশব্দ পঠোৱা হ'ল।",
'accmailtext' => "[[User talk:$1|$1]]-ৰ কাৰণে যাদৃচ্ছিক ভাৱে উৎপন্ন কৰা গুপ্তশব্দ $2লৈ পঠোৱা হ'ল । 
এই নতুন একাউন্টত প্ৰৱেশ কৰি ''[[Special:ChangePassword|গুপ্তশব্দ সলনি কৰক]]'' পৃষ্ঠাখনত গুপ্তশব্দতো সলনি কৰি ল’ব পাৰিব ।",
'newarticle' => '(নতুন)',
'newarticletext' => "আপুনি বিচৰা প্ৰবন্ধটো বিচাৰি পোৱা নগ'ল।

ইচ্ছা কৰিলে আপুনিয়েই এই প্ৰবন্ধটো লিখা আৰম্ভ কৰিব পাৰে। [[{{MediaWiki:Helppage}}|ইয়াত]] সহায় পাব।

আপুনি যদি ইয়ালৈ ভুলতে আহিছে, তেনেহলে আপোনাৰ ব্ৰাওজাৰৰ '''BACK''' বুটামত টিপা মাৰক।",
'anontalkpagetext' => "----''এইখন আলোচনা পৃষ্ঠা বেনামী সদস্যৰ বাবে, যিয়ে নিজা একাউন্ট  সৃষ্টি কৰা নাই বা যিয়ে সেই একাউন্ট ব্যৱহাৰ নকৰে ।
এতেকে আমি তেখেতসকলক আই-পি ঠিকনাৰে চিনাক্ত কৰিবলৈ বাধ্য ।
সেই একেই আই-পি ঠিকনা অনেকেই ব্যৱহাৰ কৰিব পাৰে ।
আপুনি যদি এজন বেনামী সদস্য আৰু যদি আপুনি অনুভৱ কৰে যে আপোনাৰ প্ৰতি অপ্ৰাসঙ্গিক মন্তব্য কৰা হৈছে, তেনেহলে আন বেনামী সদস্যৰ পৰা পৃথক কৰিবলৈ 
[[Special:UserLogin/signup|একাউন্ট সৃষ্টি কৰক]] বা [[Special:UserLogin|প্ৰৱেশ কৰক]] ।''",
'noarticletext' => 'এই পৃষ্ঠাত বৰ্তমান কোনো পাঠ্য নাই ।
আপুনি আন পৃষ্ঠাত [[Special:Search/{{PAGENAME}}| এই শিৰোনামা অনুসন্ধান কৰিব পাৰে]],
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} সম্পৰ্কীয় অভিলেখ অনুসন্ধান কৰিব পাৰে],
বা [{{fullurl:{{FULLPAGENAME}}|action=edit}} এই পৃষ্ঠা সম্পাদনা কৰিব পাৰে]</span>',
'noarticletext-nopermission' => 'এই পৃষ্ঠাত বৰ্তমান কোনো পাঠ্য নাই ।
আপুনি আন পৃষ্ঠাত [[Special:Search/{{PAGENAME}}| এই শিৰোনামা অনুসন্ধান কৰিব পাৰে]],
বা <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} সম্পৰ্কীয় অভিলেখ অনুসন্ধান কৰিব পাৰে ।]</span>',
'userpage-userdoesnotexist' => '"<nowiki>$1</nowiki>" নামৰ সদস্য একাউন্ট নিবন্ধিত নহয় ।
অনুগ্ৰহ কৰি চাওক আপুনি এই পৃষ্ঠা সৃষ্টি/সম্পাদনা কৰিব বিচাৰিছে নেকি ।',
'userpage-userdoesnotexist-view' => "সদস্য একাউন্ট ''$1'' পঞ্জীভূত নহয়",
'blocked-notice-logextract' => "বৰ্তমানে এই সদস্যক বাৰণ কৰা হৈছে ।
প্ৰসংগক্ৰমে সাম্প্ৰতিক বাৰণ সূচী তলত দিয়া হ'ল ।",
'clearyourcache' => "'''টোকা:''' সাঁচি ৰখাৰ পিছত পৰিৱৰ্তনখিনি চাবৰ বাবে আপুনি আপোনাৰ ব্ৰাউজাৰৰ কেচ্‌ (cache) অগ্ৰাহ্য কৰিব লগা হ’ব পাৰে।
* '''Firefox / Safari: ''' ''Shift'' ধৰি ৰাখি ''Reload'' ক্লিক কৰক, নাইবা ''Ctrl-F5'' বা ''Ctrl-R'' টিপক (এপল মেকৰ বাবে ''⌘-R'')
* '''Google Chrome:''' ''Ctrl-Shift-R'' টিপক (এপল মেকৰ বাবে ''⌘-Shift-R'' )
* '''Internet Explorer:''' ''Ctrl'' ধৰি ৰাখি ''Refresh'' ক্লিক কৰক, অথবা ''Ctrl-F5'' টিপক
* '''Konqueror: ''' ''Reload'' ক্লিক কৰক বা ''F5'' টিপক
* '''Opera:''' ''Tools→Preferences'' ত গৈ কেচ্‌ মচি পেলাওক",
'usercssyoucanpreview' => "'''পৰামৰ্শ:''' \"{{int:showpreview}}\" বুটাম ব্যৱহাৰ কৰি সাঁচি ৰখাৰ আগতে আপোনাৰ নতুন CSS পৰীক্ষা কৰক ।",
'userjsyoucanpreview' => "'''পৰামৰ্শ:''' \"{{int:showpreview}}\" বুটাম ব্যৱহাৰ কৰি সাঁচি ৰখাৰ আগতে আপোনাৰ নতুন জাভালিপি পৰীক্ষা কৰক ।",
'usercsspreview' => "'''মনত ৰাখিব আপুনি কেৱল আপোনাৰ ব্যৱহাৰকাৰী CSS  প্ৰাকদৰ্শন কৰিছে ।''' 
'''এইটো এতিয়াও সাঁচি ৰখা হোৱা নাই ।'''",
'userjspreview' => "'''মনত ৰাখিব আপুনি আপোনাৰ ব্যৱহাৰকাৰী জাভালিপি কেৱল পৰীক্ষা/প্ৰাকদৰ্শন কৰিছে ।'''
 '''এইটো এতিয়াও সাঁচি ৰখা হোৱা নাই ।'''",
'sitecsspreview' => "'''মনত ৰাখিব আপুনি কেৱল এইটো CSS  প্ৰাকদৰ্শন কৰিছে ।''' 
'''এইটো এতিয়াও সাঁচি ৰখা হোৱা নাই !'''",
'sitejspreview' => "'''মনত ৰাখিব আপুনি এই জাভালিপি ক’ড কেৱল প্ৰাকদৰ্শন কৰিছে ।'''
 '''এইটো এতিয়াও সাঁচি ৰখা হোৱা নাই !'''",
'userinvalidcssjstitle' => "'''সতৰ্কবাণী:'''  \"\$1\" নামৰ কোনো আৱৰণ নাই। Custom .css আৰু .js পৃষ্ঠাই সৰুফলাৰ শিৰোনামা ব্যৱহাৰ কৰে, যেনে-  {{ns:user}}:Foo/Vector.css ৰ সলনি {{ns:user}}:Foo/vector.css।",
'updated' => "(আপডেট কৰা হ'ল)",
'note' => "'''টোকা:'''",
'previewnote' => "'''মনত ৰাখিব এয়া মাথোন প্ৰাক্‌দৰ্শনহে।'''
আপোনাৰ সালসলনিসমূহ এতিয়াও সংৰক্ষণ কৰা হোৱা নাই!",
'continue-editing' => 'সম্পাদনা জাৰী ৰাখক',
'previewconflict' => 'এই প্ৰাকদৰ্শনে ওপৰৰ সম্পাদনা ক্ষেত্ৰৰ লেখা সাঁচি ৰাখিলে যেনেকুৱা দেখা যাব তেনেকুৱা দেখাইছে ।',
'session_fail_preview' => "'''দুঃখিত! চেচন ডাটা হেৰাই যোৱাৰ কাৰণে আপোনাৰ সম্পাদনা কৃতকাৰ্য্য নহ'ল ।'''
অনুগ্ৰহ কৰি পুনৰ চেষ্টা কৰক ।
তথাপি যদি নহয় [[Special:UserLogout|প্ৰস্থান]] কৰি আকৌ প্ৰৱেশ কৰক ।",
'session_fail_preview_html' => "'''দুঃখিত! চেচন ডাটা হেৰাই যোৱাৰ কাৰণে আপোনাৰ সম্পাদনা কৃতকাৰ্য্য নহ'ল ।'''

''যিহেতু {{SITENAME}}ত নগ্ন এইচ-টি-এম-এল (raw HTML) সক্ৰিয় কৰা আছে, জাভাস্ক্ৰিপ্ট আক্ৰমণৰ বিৰুদ্ধে সতৰ্কতাৰ স্বাৰ্থত খচৰা আঁৰ কৰা হৈছে ।''

'''এইয়া যদি এটা বৈধ সম্পাদনা আছিল, তেনে আকৌ চেষ্টা কৰক ।'''
তথাপি যদি নহয় [[Special:UserLogout|প্ৰস্থান]] কৰি আকৌ প্ৰৱেশ কৰক ।",
'token_suffix_mismatch' => "'''আপোনাৰ সম্পাদনাটো প্ৰত্যাখ্যান কৰা হৈছে কাৰণ আপোনাৰ সহায়কাৰীয়ে সম্পাদনা লেখাৰ বিৰাম-চিহ্ন মচি পেলাইছে । '''
পৃষ্ঠাটোৰ যাতে ক্ষতি নহওক, তাৰ বাবে সম্পাদনাটো প্ৰত্যাখ্যান কৰা হৈছে । 
কোনো আসোঁৱাহপূৰ্ণ ৱেব-ভিত্তিক বেনামী প্ৰক্সী সেৱা ব্যৱহাৰ কৰিলে এনে হ’ব পাৰে ।",
'edit_form_incomplete' => "'''এই সম্পাদনাৰ কিছু অংশ চাৰ্ভাৰলৈ নগ’ল; আপোনাৰ সম্পাদনা ঠিকে আছেনে পৰীক্ষা কৰি পুনৰ চেষ্টা কৰক ।'''",
'editing' => '$1 সম্পাদনা',
'creating' => '$1 পৃষ্ঠাখন আপুনি সৃষ্টি কৰি আছে',
'editingsection' => '$1 (অনুচ্ছেদ) সম্পাদনা কৰি আছে',
'editingcomment' => '$1 (নতুন অনুচ্ছেদ) সম্পাদনা কৰি আছে',
'editconflict' => 'সম্পাদনা দ্বন্দ: $1',
'explainconflict' => "আপুনি সম্পাদনা আৰম্ভ কৰাৰ পাছত আন কোনোবাই এই পৃষ্ঠাখন সলনি কৰিলে।
পাঠ্য-স্থানৰ উপৰ ভাগত এই পৃষ্ঠাৰ প্ৰচলিত পাঠ্য দিয়া হৈছে।
আপোনাৰ সলনিসমূহ পাঠ্য-স্থানৰ তলৰ ভাগত দেখুওৱা হৈছে।
আপুনি আপোনাৰ সালসলনিসমূহ প্ৰচলিত পাঠ্যত অন্তৰ্ভুক্ত কৰিব পাৰে।
আপুনি \"{{int:savearticle}}\" টিপিলে '''কেৱল''' পাঠ্য-স্থানৰ উপৰ ভাগৰ অংশখিনিহে সংৰক্ষিত হ'ব ।",
'yourtext' => 'আপুনি লিখা পাঠ',
'storedversion' => 'জমা সংস্কৰণ',
'nonunicodebrowser' => "'''সতৰ্কবাণী: আপোনাৰ ব্ৰাউজাৰ ইউনিক’ড-ভাৱাপন্ন নহয় ।'''
আপুনি ঠিকমতে সম্পাদনা কৰিব পৰাকৈ সমাধান আছে: non-ASCII কেৰেক্টাৰবোৰ সম্পাদনা ক্ষেত্ৰত hexadecimal ক’ড হিছাপে দেখা যাব ।",
'editingold' => "'''সাৱধান: আপুনি এই পৃষ্ঠাৰ এটি পুৰণি সংস্কৰণ সম্পাদনা কৰি আছে ।
যদি আপুনি আপোনাৰ সম্পাদনাসমূহ জমা কৰে, সেই পৰৱৰ্তী সংস্কৰণসমূহ হেৰাই যাব ‌‌।'''",
'yourdiff' => 'তফাৎ',
'copyrightwarning' => "অনুগ্ৰহ কৰি মন কৰক যে {{SITENAME}}লৈ কৰা সকলো বৰঙণি $2 ৰ চৰ্তাৱলীৰ মতে প্ৰদান কৰা বুলি ধৰি লোৱা হ'ব (আৰু অধিক জানিবলৈ $1 চাওক)। যদি আপুনি আপোনাৰ লিখনি নিৰ্দয়ভাৱে সম্পাদনা কৰা আৰু ইচ্ছামতে পুনৰ্বিতৰণ কৰা ভাল নাপায়, তেনেহ'লে নিজৰ লিখনি ইয়াত নিদিব।
<br />

ইয়াত আপোনাৰ লিখনি দিয়াৰ লগে লগে আপোনা-আপুনি প্ৰতিশ্ৰুতি দিয়া হৈছে যে এই লিখনিটো আপোনাৰ মৌলিক লিখনি, বা কোনো স্বত্বাধিকাৰ নথকা বা কোনো ৰাজহুৱা ৱেবছাইট বা তেনে কোনো মুকলি উৎসৰ পৰা আহৰণ কৰা।
'''স্বত্বাধিকাৰযুক্ত কোনো সমল অনুমতি অবিহনে দাখিল নকৰে যেন!'''",
'copyrightwarning2' => "অনুগ্ৰহ কৰি মন কৰক যে {{SITENAME}}লৈ কৰা সকলো বৰঙণি আন সদস্যই সম্পাদনা কৰিব, সলনি কৰিব অথবা মচি পেলাব পাৰে ।
আপুনি যদি আপোনাৰ লিখনি নিৰ্দয়ভাৱে সম্পাদনা কৰা ভাল নাপায়, তেনেহলে নিজৰ লিখনি ইয়াত নিদিব ।<br />
ইয়াত আপোনাৰ লিখনি দিয়াৰ লগে লগে আপুনি আপোনা-আপুনি প্ৰতিশ্ৰুতি দিছে যে এই লিখনিটো আপোনাৰ মৌলিক লিখনি, বা কোনো স্বত্বাধিকাৰ নথকা বা কোনো ৰাজহুৱা ৱেবছাইট বা তেনে কোনো মুকলি উৎসৰ পৰা আহৰণ কৰা । (অধিক জানিবলৈ $1 চাওক)

'''স্বত্বাধিকাৰযুক্ত কোনো সমল অনুমতি অবিহনে দাখিল নকৰে যেন!'''",
'longpageerror' => "'''ভুল: আপুনি জমা দিয়া পাঠ {{PLURAL:$1|এক কিলো-বাইট|$1 কিলো-বাইট}} আকাৰৰ, যি {{PLURAL:$2|এক কিলো-বাইট|$2 কিলো-বাইট}} সীমাতকৈ বেছি।'''
ইয়াক সাঁচিব পৰা নাযাব।",
'readonlywarning' => "'''সতৰ্কবাণী: চোৱা-চিতাৰ হেতু এই তথ্যকোষ বন্ধ কৰি ৰখা হৈছে, গতিকে আপুনি এই মূহুৰ্তত আপোনাৰ সম্পাদনা সাঁচিব নোৱাৰিব ।'''
আপুনি লেখাটো কাটি টেক্সট-ফাইলত লেপন কৰি পিছলৈ ব্যৱহাৰৰ বাবে সাঁচি ৰাখিব পাৰে ।

তথ্যকোষ বন্ধ কৰি ৰখা প্ৰশাসকজনে এই ব্যাখ্যা দিছে: $1",
'protectedpagewarning' => "'''সতৰ্কবাণী: এই পৃষ্ঠা বন্ধ ৰখা হৈছে; কেৱল প্ৰশাসকৰৰ মৰ্যদাৰ সদস্যইহে সম্পাদনা কৰিব পাৰিব ।'''
আপোনাৰ সুবিধাৰ বাবে পৃষ্ঠাৰ সাম্প্ৰতিক ল'গ সংৰক্ষণ তলত দিয়া হ'ল ।",
'semiprotectedpagewarning' => "টোকা: এই পৃষ্ঠা বন্ধ ৰখা হৈছে; কেৱল পঞ্জীভূত সদস্যই হে সম্পাদনা কৰিব পাৰিব ।
আপোনাৰ সুবিধাৰ বাবে পৃষ্ঠাৰ সাম্প্ৰতিক ল'গ সংৰক্ষণ তলত দিয়া হ'ল ।",
'cascadeprotectedwarning' => "'''সতৰ্কবাণী:''' এই পৃষ্ঠাখন সুৰক্ষিত কৰি ৰখা হৈছে যাতে কেৱল প্ৰশাসনিক ক্ষমতা থকা সদস্যই ইয়াক সম্পাদনা কৰিব পাৰে, কাৰণ ই প্ৰপাতাকাৰ-সুৰক্ষিত  {{PLURAL:$1|পৃষ্ঠাখনৰ|পৃষ্ঠাবোৰৰ}} অন্তৰ্ভুক্ত:",
'titleprotectedwarning' => "'''সতৰ্কবাণী: এই পৃষ্ঠাখন সুৰক্ষিত কৰা হৈছে যাতে কেৱল [[Special:ListGroupRights|specific rights]] সদস্যই ইয়াক তৈয়াৰ কৰিব পাৰে ।'''
আপোনাৰ সুবিধাৰ্থে লগৰ শেহতীয়া ভৰ্তি তলত দিয়া হ’ল ।",
'templatesused' => 'এই পৃষ্ঠাত ব্যৱহৃত {{PLURAL:$1|সাঁচ|সাঁচ সমূহ}}:',
'templatesusedpreview' => 'এই খচৰাত ব্যৱহৃত {{PLURAL:$1|সাঁচ|সাঁচ সমূহ}}:',
'templatesusedsection' => 'এই দফাত ব্যৱহৃত {{PLURAL:$1|সাঁচ|সাঁচ সমূহ}}:',
'template-protected' => '(সুৰক্ষিত)',
'template-semiprotected' => '(অৰ্ধ-সুৰক্ষিত)',
'hiddencategories' => 'এই পৃষ্ঠা {{PLURAL:$1|১-টা নিহিত শ্ৰেণীৰ|$1-টা নিহিত শ্ৰেণীৰ}} সদস্য:',
'nocreatetitle' => 'পৃষ্ঠা সৃষ্টি সীমিত',
'nocreatetext' => '{{SITENAME}}ত নতুন পৃষ্ঠা সৃষ্টিৰ ক্ষমতা সীমাবদ্ধ কৰা হৈছে।
আপুনি ঘূৰি গৈ বৰ্তমানে থকা পৃষ্ঠা এটা সম্পাদনা কৰিব পাৰে, বা [[Special:UserLogin|নতুন সদস্যভৰ্তি হওক/ প্ৰবেশ কৰক]] ।',
'nocreate-loggedin' => 'নতুন পৃষ্ঠা সৃষ্টি কৰিবলৈ আপোনাৰ অনুমতি নাই ।',
'sectioneditnotsupported-title' => 'অনুচ্ছেদ সম্পাদনাৰ সমৰ্থন নাই',
'sectioneditnotsupported-text' => 'এই পৃষ্ঠাত অনুচ্ছেদ সম্পাদনাৰ সমৰ্থন নাই',
'permissionserrors' => 'অনুমতি ভুলসমূহ',
'permissionserrorstext' => "আপোনাৰ এই কামটো কৰিবলৈ অনুমতি নাই, যাৰ {{PLURAL:$1|কাৰণ|কাৰণসমূহ}} হ'ল:",
'permissionserrorstext-withaction' => "আপোনাৰ $2 কৰিবলৈ অনুমতি নাই, যাৰ {{PLURAL:$1|কাৰণ|কাৰণসমূহ}} হ'ল:",
'recreate-moveddeleted-warn' => "'''সাৱধান: আগতে বিলোপ কৰা পৃষ্ঠা এটা আপুনি পুনঃনিৰ্মাণ কৰি আছে। '''

এই পৃষ্ঠাটো সম্পাদনা কৰা উচিত হব নে নহয় আপুনি বিবেচনা কৰি চাওক।
এই পৃষ্ঠাটো বিলোপ আৰু স্থানান্তৰ কৰাৰ অভিলেখ আপোনাৰ সুবিধাৰ্থে ইয়াত দিয়া হৈছে।",
'moveddeleted-notice' => "এই পৃষ্ঠা বাতিল কৰা হৈছে ।
পৃষ্ঠাটিৰ বাতিল আৰু স্থানান্তৰ কৰা অভিলেখ তলত দিয়া হ'ল ।",
'log-fulllog' => 'সম্পূৰ্ণ অভিলেখ চাওক',
'edit-hook-aborted' => 'হুকৰ দ্বাৰা সম্পাদনা প্ৰত্যাখ্যান কৰা হৈছে ।
ইয়াৰ কোনো ব্যাখ্যা নাই ।',
'edit-gone-missing' => 'পৃষ্ঠাখন নবীকৰণ কৰিব পৰা নগ’ল ।
সম্ভৱতঃ পৃষ্ঠাখন বিলোপ কৰা হৈছে ।',
'edit-conflict' => 'সম্পাদনা দ্বন্দ ।',
'edit-no-change' => 'আপোনাৰ সম্পাদনা আওকাণ কৰা হৈছে, কাৰণ লেখাত কোনো তফাৎ নাই',
'edit-already-exists' => "নতুন পৃষ্ঠা সৃষ্টি কৰা নহ'ল ।
পৃষ্ঠাখন ইতিমধ্যে আছেই ।",
'defaultmessagetext' => 'সাধাৰণ বাৰ্তা পাঠ্য',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''সতৰ্কবাণী:''' এই পৃষ্ঠাখনত অধিক এক্সপেনচিভ পাৰ্চাৰ ফাংচন কল আছে ।

ইয়াত $2 {{PLURAL:$2|কল|কল}} তকৈ কম থকা উচিত, এতিয়া মুঠ কলৰ সংখ্যা {{PLURAL:$1|বৰ্তমান $1|বৰ্তমান $1}} ।",
'expensive-parserfunction-category' => 'অধিক পৰিমাণে এক্সপেনসিভ পাৰ্চাৰ ফাংচন কল থকা পৃষ্ঠাসমূহ',
'post-expand-template-inclusion-warning' => "'''সতৰ্কবাণী:''' সাঁচৰ আকাৰ ডাঙৰ হৈছে ।
কিছুমান সাঁচ অন্তৰ্ভুক্ত কৰিব পৰা নাযাব ।",
'post-expand-template-inclusion-category' => 'সাঁচৰ আকাৰ ডাঙৰ হোৱা পৃষ্ঠাসমূহ',
'post-expand-template-argument-warning' => "'''সতৰ্কবাণী:''' এই পৃষ্ঠাত কমেও এটা সাঁচ যুক্তি আছে যাৰ আকাৰ অতি বেছি ।
এই যুক্তিসমূহ বাতিল কৰা হৈছে ।",
'post-expand-template-argument-category' => 'বাতিল কৰা সাঁচ যুক্তি থকা পৃষ্ঠাসমূহ',
'parser-template-loop-warning' => 'সাঁচ লুপ চিহ্নিত কৰা হৈছে: [[$1]]',
'parser-template-recursion-depth-warning' => 'সাঁচৰ পুনৰাবৃত্তি গভীৰতা সীমা ($1) তকৈ অধিক হৈছে',
'language-converter-depth-warning' => 'ভাষা পৰিৱৰ্তকৰ গভীৰতা সীমাই ($1) অতিক্ৰম কৰিছে',
'node-count-exceeded-category' => "ন'ড-গণনা বেছি হোৱা পৃষ্ঠাসমূহ",
'node-count-exceeded-warning' => "পৃষ্ঠাৰ ন'ড-গণনা বেছি হৈছে",
'expansion-depth-exceeded-category' => 'বিস্তৃতি গভীৰতা বেছি হোৱা পৃষ্ঠা',
'expansion-depth-exceeded-warning' => 'পৃষ্ঠাখনৰ বিস্তৃতি গভীৰতা বেছি হৈছে',
'parser-unstrip-loop-warning' => 'আন্‌ষ্ট্ৰীপ লুপ চিনাক্ত কৰা হৈছে',
'parser-unstrip-recursion-limit' => 'আন্‌ষ্ট্ৰিপ ৰিকাৰ্ছন সীমা অতিক্ৰম হৈছে ($1)',

# "Undo" feature
'undo-success' => 'এই সম্পাদনা পূৰ্ববৎ কৰিব পাৰি ।
অনুগ্ৰহ কৰি তলৰ তুলনাটি পৰীক্ষা কৰি ঠাৱৰ কৰক যে আপুনি এনে কৰিব বিচাৰিছে, আৰু তলত সালসলনিসমূহ সাঁচি এই কাৰ্য্য সম্পন্ন কৰক ।',
'undo-failure' => "এই সম্পাদনা মধ্যৱৰ্তী সম্পাদনাসমূহৰ দ্বন্দৰ কাৰণে পূৰ্ববৎ কৰা নহ'ব ।",
'undo-norev' => "এই সম্পাদনাটি ৰদ কৰিব নোৱাৰি, কাৰণ ই আৰু নাই বা ইয়াক বাতিল কৰা হ'ল ।",
'undo-summary' => '[[Special:Contributions/$2|$2]] ([[User talk:$2|আলোচনা]]) সম্পাদিত $1 সংশোধনটি বাতিল কৰক',

# Account creation failure
'cantcreateaccounttitle' => "একাউন্ট সৃষ্টি কৰা নহ'ব",
'cantcreateaccount-text' => "আই পি ঠিকনা ('''$1''')ৰ পৰা একাউণ্ট সৃষ্টিত [[User:$3|$3]]’য়ে বাধা প্ৰদান কৰিছে ।

$3 য়ে আগবঢ়োৱা ইয়াৰ কাৰণ হৈছে ''$2''",

# History pages
'viewpagelogs' => 'এই পৃষ্ঠাৰ অভিলেখ চাওক ।',
'nohistory' => 'এই পৃষ্ঠাৰ কোনো সম্পাদনাৰ ইতিহাস নাই।',
'currentrev' => 'শেহতীয়া সংস্কৰণ',
'currentrev-asof' => '$1 অনুযায়ী বৰ্তমান সংস্কৰণ',
'revisionasof' => '$1ৰ সংস্কৰণ',
'revision-info' => '$1-লৈ $2ই কৰা সংশোধন',
'previousrevision' => '← আগৰ সংশোধন',
'nextrevision' => 'সদ্যসংশোধিত',
'currentrevisionlink' => 'শেহতীয়া ভাষ্য',
'cur' => 'বৰ্তমান',
'next' => 'পৰৱৰ্তী',
'last' => 'পূৰ্বৱৰ্তী',
'page_first' => 'প্ৰথম',
'page_last' => 'অন্তিম',
'histlegend' => "পাৰ্থক্য বাছনি: পাৰ্থক্য চাবলৈ সংকলনবোৰৰ সম্মুখত থকা ৰেডিঅ' বুটামবোৰ বাচনী কৰি এণ্টাৰ টিপক অথবা একেবাৰে তলত দিয়া বুটামতো ক্লিক কৰক <br />
লিজেণ্ড: '''({{int:cur}})''' = বৰ্তমানৰ সংকলনৰ লগত পাৰ্থক্য,
'''({{int:last}})''' = আগৰ সংকলনৰ লগত পাৰ্থক্য, '''{{int:minoreditletter}}'' = অগুৰুত্বপূৰ্ণ সম্পাদনা।",
'history-fieldset-title' => 'ইতিহাসত অনুসন্ধান কৰক',
'history-show-deleted' => 'মাথোঁ বিলোপ কৰা',
'histfirst' => 'আটাইতকৈ পুৰণি',
'histlast' => 'শেহতীয়া',
'historysize' => '({{PLURAL:$1|১ বাইট|$1 বাইট}})',
'historyempty' => '(খালী)',

# Revision feed
'history-feed-title' => 'সংকলন ইতিহাস',
'history-feed-description' => 'ৱিকিত উপলব্ধ এই পৃষ্ঠাৰ সংকলন ইতিহাস',
'history-feed-item-nocomment' => '$1-য়ে $2',
'history-feed-empty' => 'অনুৰোধ কৰা পৃষ্ঠাৰ কোনো অস্বিত্ব নাই।
হয়তো ইয়াক বিলোপ কৰা হৈছে অথবা ইয়াৰ নাম সলনি কৰা হৈছে।
[[Special:Search|সন্ধান]] ব্যৱহাৰ কৰি প্ৰাসংগিক পৃষ্ঠাসমূহ চাওক।',

# Revision deletion
'rev-deleted-comment' => "(সম্পাদনা সাৰাংশ আঁতৰোৱা হ'ল)",
'rev-deleted-user' => '(সদস্যনাম আঁতৰোৱা হ’ল)',
'rev-deleted-event' => "(অভিলেখ কাৰ্য আঁতৰোৱা হ'ল)",
'rev-deleted-user-contribs' => "[সদস্যনাম বা আই-পি ঠিকনা আঁতৰোৱা হ'ল - সম্পাদনা বৰঙনিসমূহৰ পৰা আঁৰ কৰা হৈছে]",
'rev-deleted-text-permission' => "পৃষ্ঠাৰ এই সংশোধনটি '''বিলোপ''' কৰা হ'ল ।
সবিশেষ পাব [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} অবলুপ্তি অভিলেখত]",
'rev-deleted-text-unhide' => "পৃষ্ঠাখনৰ এই সংশোধনটো '''বিলোপ''' কৰা হৈছে | 
সবিশেষ পাব [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} অৱলুপ্তি অভিলেখত]।
আপুনি মন কৰিলে [$1 এই সংশোধনটো চাব পাৰে]।",
'rev-suppressed-text-unhide' => "পৃষ্ঠাখনৰ এই সংশোধনটো '''নিবাৰণ''' কৰা হৈছে ।
সবিশেষ পাব [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} নিবাৰণ অভিলেখত]।
আপুনি মন কৰিলে [$1 এই সংশোধনটো চাব পাৰে]।",
'rev-deleted-text-view' => "পৃষ্ঠাৰ এই সংশোধনটো '''বিলোপ''' কৰা হ'ল ।
আপুনি এইটো চাব পাৰে; সবিশেষ পাব [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} অবলুপ্তি অভিলেখত]।",
'rev-suppressed-text-view' => "পৃষ্ঠাৰ এই সংশোধনটো '''নিবাৰণ''' কৰা হ’ল।
আপুনি এইটো চাব পাৰে; সবিশেষ পাব [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} নিবাৰণ অভিলেখত]।",
'rev-deleted-no-diff' => "আপুনি এই পাৰ্থক্য চাব নোৱাৰে কাৰণ এটা সংস্কৰণ '''বিলোপ''' কৰা হৈছে ।
সবিশেষ পাব [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} অৱলুপ্তি অভিলেখত]।",
'rev-suppressed-no-diff' => "আপুনি এই পাৰ্থক্য চাব নোৱাৰে কাৰণ এটা সংস্কৰণ '''বিলোপ''' কৰা হৈছে ।",
'rev-deleted-unhide-diff' => "এই পাৰ্থক্যৰ এটা সংস্কৰণ '''বিলোপ''' কৰা হৈছে ।
বিস্তাৰিত কাৰণ [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} অৱলুপ্তি অভিলেখত] পাব ।
আপুনি মন কৰিলে [$1 এই পাৰ্থক্য চাওক] ।",
'rev-suppressed-unhide-diff' => "এই পাৰ্থক্যৰ এটা সংশোধন '''নিবাৰণ''' কৰা হৈছে ।
সবিশেষ পাব [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} নিবাৰণ অভিলেখত] ।
আপুনি মন কৰিলে [$1 এই সংশোধনটো চাব পাৰে] ।",
'rev-deleted-diff-view' => "এই পাৰ্থক্যৰ এটা সংশোধন '''বিলোপ''' কৰা হ'ল ।
আপুনি এই পাৰ্থক্য চাব পাৰে; সবিশেষ পাব [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} অৱলুপ্তি অভিলেখত]",
'rev-suppressed-diff-view' => "এই পাৰ্থক্যৰ এটা সংশোধন '''নিবাৰণ''' কৰা হ’ল ।
আপুনি এই পাৰ্থক্য চাব পাৰে; সবিশেষ পাব [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} নিবাৰণ অভিলেখত] ।",
'rev-delundel' => 'দেখুৱাওক/নেদেখুৱাব',
'rev-showdeleted' => 'দেখুৱাওক',
'revisiondelete' => 'সংকলন বিলোপ কৰক / পুণৰ স্থাপন কৰক',
'revdelete-nooldid-title' => 'লক্ষ্য সংশোধন যুক্তিসংগত নহয়',
'revdelete-nooldid-text' => 'কামটো কৰাৰ বাবে আপুনি লক্ষ্য সংশোধন নিৰ্বাচন কৰা নাই, নিৰ্বাচিত সংশোধন নাই, অথবা আপুনি বৰ্তমানৰ সংশোধন লুকুৱাব বিচাৰিছে ।',
'revdelete-nologtype-title' => 'কোনো অভিলেখ প্ৰকাৰ দিয়া হোৱা নাই',
'revdelete-nologtype-text' => 'এই কামটো কৰাৰ বাবে আপুনি কোনো অভিলেখ  প্ৰকাৰ নিৰ্বাচন কৰা নাই ।',
'revdelete-nologid-title' => 'অযুক্তিসংগত অভিলেখ ভৰ্তি',
'revdelete-nologid-text' => 'আপুনি এইটো কৰাৰ বাবে কোনো অভিলেখ ভৰ্তি নিৰ্বাচন কৰা নাই অথবা নিৰ্বাচিত অভিলেখ ভৰ্তিটো নাই ।',
'revdelete-no-file' => 'নিৰ্ধাৰিত ফাইলটি নাই ।',
'revdelete-show-file-confirm' => 'আপুনি "<nowiki>$1</nowiki>"  ফাইলৰ বিলোপ কৰা কৰা সংশোধন $2 তাৰিখৰ পৰা $3 সময়ত চাব বিচাৰিছে নেকি?',
'revdelete-show-file-submit' => 'হয়',
'revdelete-selected' => "'''[[:$1]]-ৰ {{PLURAL:$2|নিৰ্বাচিত সংশোধন|নিৰ্বাচিত সংশোধনসমূহ}}:'''",
'logdelete-selected' => "'''{{PLURAL:$1|টা নিৰ্বাচিত ল’গ ভৰ্তি|টা নিৰ্বাচিত ল’গ ভৰ্তি}}:'''",
'revdelete-text' => "'''বিলোপ কৰা সংশোধনবোৰ আৰু ঘটনাবোৰ পৃষ্ঠাৰ ইতিহাস আৰু ল’গত পোৱা যাব, কিন্তু তাৰ কিছু অংশ সৰ্বসাধাৰণৰ বাবে মুকলি নহ’ব ।''' 
{{SITENAME}} ৰ অন্য প্ৰশাসকসকলে তথাপিও লুকুৱাই থোৱা বিষয়বস্তু দেখা পাব আৰু কোনো সীমাবদ্ধতা নাথাকিলে একেটা ইণ্টাৰফে’চৰ জৰিয়তে ইয়াক পুনৰুদ্ধাৰ কৰিব পাৰিব ।",
'revdelete-confirm' => 'অনুগ্ৰহ কৰি সাব্যস্ত কৰক যে আপুনি ইয়াৰ পৰিণাম বুজি আৰু [[{{MediaWiki:Policy-url}}|the policy]] ৰ সৈতে সহমত হৈ এই কামটো কৰিব বিচাৰিছে |',
'revdelete-suppress-text' => "নিবাৰণ '''কেৱল''' তলত দিয়া কাৰণসমূহত ব্যৱহৃত হ’ব:
* সম্ভাব্য ক্ষতিকাৰক তথ্য 
* অনুপযুক্ত ব্যক্তিগত তথ্য 
* : ''ঘৰৰ ঠিকনা আৰু টেলিফোন সংখ্যা, সামাজিক সুৰক্ষা সংখ্যা, আদি । ''",
'revdelete-legend' => 'দৃষ্টিপাত সীমাবদ্ধ কৰক',
'revdelete-hide-text' => 'সংশোধিত পাঠ গোপন কৰক',
'revdelete-hide-image' => 'ফাইলৰ বিষয়বস্তু গোপন কৰক',
'revdelete-hide-name' => 'কাৰ্য আৰু লক্ষ্য গোপন কৰক',
'revdelete-hide-comment' => 'সম্পাদনা মন্তব্য আতৰাই থওক',
'revdelete-hide-user' => 'সম্পাদকৰ সদস্যনাম/আই-পি ঠিকনা গোপন কৰক',
'revdelete-hide-restricted' => 'প্ৰশাসকবৃন্দৰ লগতে আনৰ পৰাও তথ্য ৰোধ কৰক',
'revdelete-radio-same' => '(সলনি নকৰিব)',
'revdelete-radio-set' => 'হয়',
'revdelete-radio-unset' => 'নহয়',
'revdelete-suppress' => 'প্ৰশাসকবৃন্দৰ লগতে আনৰ পৰাও তথ্য ৰোধ কৰক',
'revdelete-unsuppress' => 'পুনৰ্স্থাপন কৰা সংশোধনসমূহৰ সীমাবদ্ধতা আতৰাওক',
'revdelete-log' => 'কাৰণ:',
'revdelete-submit' => 'নিৰ্বাচিত {{PLURAL:$1|সংশোধনত|সংশোধনবোৰত}} প্ৰয়োগ কৰক ।',
'revdelete-success' => "'''সংশোধন প্ৰত্যক্ষতা সফলতাৰে নবীকৰণ কৰা হ’ল ।'''",
'revdelete-failure' => "'''সংশোধন প্ৰত্যক্ষতা নবীকৰণ কৰিব পৰা নগ’ল:''' 
$1",
'logdelete-success' => "'''ল’গ প্ৰত্যক্ষতা সফলতাৰে স্থাপন কৰা হ’ল ।'''",
'logdelete-failure' => "'''ল’গ প্ৰত্যক্ষতা স্থাপন কৰিব পৰা নগ’ল:'''
$1",
'revdel-restore' => 'দৃষ্টিপাত সালসলনি কৰক',
'revdel-restore-deleted' => 'বাতিল কৰা সংশোধনসমূহ',
'revdel-restore-visible' => 'দৃশ্যমান সংশোধনসমূহ',
'pagehist' => 'পৃষ্ঠা ইতিহাস',
'deletedhist' => 'বিলোপ কৰাৰ ইতিহাস',
'revdelete-hide-current' => ' $2, $1 তাৰিখৰ এই আইটেমটো গোপন কৰাত সমস্যা হৈছে: এইটো বৰ্তমানৰ সংশোধনী ।
এইটোক গোপন কৰিব পৰা নাযাব ।',
'revdelete-show-no-access' => '$2, $1 তাৰিখৰ এই আইটেমটো দেখুওৱাত সমস্যা হৈছে: এই আইটেমটো "সীমাবদ্ধ" হিছাপে চিহ্নিত ।
আপুনি ইয়াত প্ৰৱেশ কৰিব নোৱাৰে ।',
'revdelete-modify-no-access' => '$2, $1 তাৰিখৰ আইটেমটো পৰিৱৰ্তন কৰিব পৰা নগ’ল: এই আইটেমটো "সীমাবদ্ধ" হিছাপে চিহ্নিত ।
আপুনি ইয়াত প্ৰৱেশ কৰিব নোৱাৰে ।',
'revdelete-modify-missing' => 'ID $1 আইটেমটো পৰিৱৰ্তন কৰোঁতে সমস্যা হৈছে: এইটো তথ্যভঁৰালত নাই!',
'revdelete-no-change' => "'''সতৰ্কবাণী:'''  $2, $1 তাৰিখৰ এই আইটেমটোত ইতিমধ্যে অনুৰোধ কৰা প্ৰত্যক্ষতা ছেটিং আছে ।",
'revdelete-concurrent-change' => '$2, $1 তাৰিখৰ এই আইটেমটো পৰিৱৰ্তন কৰাত সমস্যা হৈছে: আপোনাৰ চেষ্টাৰ মাজতে আন কোনোবাই ইয়াৰ অৱস্থা সলনি কৰিছে ।
অনুগ্ৰহ কৰি ল’গ পৰীক্ষা কৰক ।',
'revdelete-only-restricted' => '$2, $1 তৰিখৰ আইটেমটো গোপন কৰাত সমস্যা হৈছে: আন প্ৰত্যক্ষতা বিকল্প বাছনি নকৰাকৈ আপুনি প্ৰশাসকৰ দৃষ্টিৰ পৰা আইটেমসমূহ নিবাৰণ কৰিব নোৱাৰে ।',
'revdelete-reason-dropdown' => '*বিলোপৰ সাধাৰণ কাৰণসমূহ 
** স্বত্বাধিকাৰ উলংঘন 
** অনুপযুক্ত ব্যক্তিগত তথ্য 
** সম্ভাব্য ক্ষতিকাৰক তথ্য',
'revdelete-otherreason' => 'অন্য/অতিৰিক্ত কাৰণ:',
'revdelete-reasonotherlist' => 'অন্য কাৰণ',
'revdelete-edit-reasonlist' => 'বিলোপণৰ কাৰণ সম্পাদনা',
'revdelete-offender' => 'সংশোধন লেখক:',

# Suppression log
'suppressionlog' => 'নিবাৰণ ল’গ',
'suppressionlogtext' => 'প্ৰশাসকৰ পৰা গোপনে ৰখা সমল সম্পৰ্কীয় অৱলুপ্তি আৰু প্ৰতিবন্ধকৰ তালিকা তলত দিয়া হৈছে ।
বৰ্তমান কাৰ্য্যৰত নিষেধ আৰু প্ৰতিবন্ধকসমূহৰ বাবে [[Special:BlockList|IP প্ৰতিবন্ধক তালিকা]] চাওক।',

# History merging
'mergehistory' => 'পৃষ্ঠাৰ ইতিহাসবোৰ মিলাই দিয়ক',
'mergehistory-header' => 'এই পৃষ্ঠাৰ সহায়ত আপুনি এখন উৎস পৃষ্ঠাৰ ইতিহাস এখন নতুন পৃষ্ঠাৰ লগত একত্ৰিত কৰিব পাৰে ।
এই সালসলনিয়ে যাতে ইতিহাসৰ অবিচ্ছিন্নতা অক্ষুণ্ণ ৰাখে তাক নিশ্চিত কৰক ।',
'mergehistory-box' => 'দুয়োটা পৃষ্ঠাৰ সংস্কৰণসমূহ মিলাই দিয়ক:',
'mergehistory-from' => 'উৎস পৃষ্ঠা',
'mergehistory-into' => 'গন্তব্য পৃষ্ঠা',
'mergehistory-list' => 'মিলনযোগ্য সম্পাদনা ইতিহাস',
'mergehistory-merge' => '[[:$1]]  ৰ তলত দিয়া সংশোধনসমূহ [[:$2]] ৰ লগত একত্ৰিত কৰিব পৰা যাব ।
ৰেডিঅ’ বুটাম কলামটো ব্যৱহাৰ কৰি কেৱল নিৰ্দেশিত তাৰিখ আৰু তাৰ আগৰ সংশোধনসমূহ একত্ৰিত কৰক ।
মন কৰক যে পৰিভ্ৰমণ সংযোগ ব্যৱহাৰ কৰিলে কলামটো আগৰ অৱস্থালৈ ঘূৰি যাব ।',
'mergehistory-go' => 'একত্ৰীকৰণযোগ্য সম্পাদনাসমূহ দেখুৱাওক',
'mergehistory-submit' => 'সংস্কৰণসমূহ মিলাই দিয়ক',
'mergehistory-empty' => 'কোনো সংস্কৰণ একত্ৰিত কৰিব নোৱাৰি ।',
'mergehistory-success' => '[[:$1]] ৰ $3 {{PLURAL:$3| টা সংশোধন|টা সংশোধন}}  [[:$2]] ৰ লগত সফলতাৰে একত্ৰিত কৰা হ’ল ।',
'mergehistory-fail' => 'ইতিহাস একত্ৰিত কৰিব পৰা নগ’ল । অনুগ্ৰহ কৰি পৃষ্ঠাখন আৰু সময়ৰ পাৰামিটাৰ পুনৰ পৰীক্ষা কৰক ।',
'mergehistory-no-source' => '$1 নামৰ কোনো উৎস পৃষ্ঠৰ অস্তিত্ব নাই ।',
'mergehistory-no-destination' => '$1 নামৰ কোনো গন্তব্য পৃষ্ঠাৰ অস্তিত্ব নাই ।',
'mergehistory-invalid-source' => 'উৎস পৃষ্ঠাৰ অৱশ্যেই বৈধ শিৰোনামা থাকিব লাগিব ।',
'mergehistory-invalid-destination' => 'লক্ষ্য পৃষ্ঠাৰ শিৰোনামা বৈধ হ’ব লাগিব ।',
'mergehistory-autocomment' => "[[:$1]]ক [[:$2]]ত অন্তৰ্ভুক্ত কৰা হ'ল",
'mergehistory-comment' => "[[:$1]]ক [[:$2]]ত অন্তৰ্ভুক্ত কৰা হ'ল: $3",
'mergehistory-same-destination' => "উৎস আৰু গন্তব্য পৃষ্ঠা একে হ'ব নোৱাৰে",
'mergehistory-reason' => 'কাৰণ:',

# Merge log
'mergelog' => 'অভিলেখ একত্ৰীকৰণ',
'pagemerge-logentry' => "[[$1]] [[$2]]-ত মিলোৱা হ'ল (সংশোধনসমূহ $3-লৈ)",
'revertmerge' => 'একত্ৰিকৰণ বাতিল কৰক',
'mergelogpagetext' => 'এখন পৃষ্ঠাৰ ইতিহাস আন এখনৰ লগত কৰা একত্ৰীকৰণৰ সকলোতকৈ শেহতীয়া তালিকা তলত দিয়া হ’ল ।',

# Diffs
'history-title' => '"$1" ৰ সংশোধনৰ ইতিহাস',
'difference-title' => '"$1"ৰ বিভিন্ন সংশোধনসমূহৰ মাজৰ পাৰ্থক্য',
'difference-title-multipage' => '"$1" আৰু "$2" পৃষ্ঠাৰ মাজৰ পাৰ্থক্যসমূহ',
'difference-multipage' => '(পৃষ্ঠাসমূহৰ মাজত তফাৎ)',
'lineno' => '$1 নং শাৰীঃ',
'compareselectedversions' => 'নিৰ্বাচিত কৰা সংকলন সমূহৰ মাজত পাৰ্থক্য চাওক',
'showhideselectedversions' => 'নিৰ্বাচিত সংশোধনসমূহ দেখুৱাওক/আঁৰ কৰক',
'editundo' => 'পূৰ্ববত কৰক',
'diff-multi' => '({{PLURAL:$2|এজন সদস্যৰ|$2জন সদস্যৰ}} দ্বাৰা {{PLURAL:$1|এটা মধ্যৱৰ্তী সংশোধন|$1-টা মধ্যৱৰ্তী সংশোধন}} দেখোৱা হোৱা নাই)',
'diff-multi-manyusers' => '({{PLURAL:$2|এজনতকৈ|$2-জনতকৈ}} অধিক সদস্যৰ দ্বাৰা {{PLURAL:$1|এটা মধ্যৱৰ্তী সংশোধন|$1-টা মধ্যৱৰ্তী সংশোধন}} দেখুওৱা হোৱা নাই)',

# Search results
'searchresults' => 'অনুসন্ধানৰ ফলাফল',
'searchresults-title' => '"$1" অনুসন্ধানৰ ফলাফল',
'searchresulttext' => '{{SITENAME}}ৰ বিষয়ে বিতংকৈ জানিবলৈ [[{{MediaWiki:Helppage}}|{{int:help}}]] চাওক ।',
'searchsubtitle' => 'আপুনি অনুসন্ধান কৰিছে \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|"$1" দি আৰম্ভ হোৱা পৃষ্ঠাসমূহ]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|"$1" লগত সংযুক্ত পৃষ্ঠাসমূহ]])',
'searchsubtitleinvalid' => "আপোনাৰ অনুসন্ধান হ'ল '''$1'''",
'toomanymatches' => "বহুত বেছি মিল পোৱা গৈছে, সন্ধান-শব্দ সলনি কৰিবলৈ অনুৰোধ কৰা হ'ল",
'titlematches' => 'পৃষ্ঠাৰ শিৰোনামা মিলিছে',
'notitlematches' => 'এটাও পৃষ্ঠাৰ শিৰোনামা মিলা নাই',
'textmatches' => 'পৃষ্ঠাৰ পাঠ মিলিছে',
'notextmatches' => 'কোনো পৃষ্ঠাৰ পাঠ মিলা নাই',
'prevn' => 'পূৰ্বৱৰ্তী {{PLURAL:$1|$1}}টা',
'nextn' => 'পৰৱৰ্তী {{PLURAL:$1|$1}}টা',
'prevn-title' => 'আগৰ $1 {{PLURAL:$1|ফলাফল|ফলাফলবোৰ}}',
'nextn-title' => 'পিছৰ $1 {{PLURAL:$1|ফলাফল|ফলাফলবোৰ}}',
'shown-title' => 'পৃষ্ঠাই প্ৰতি $1 {{PLURAL:$1|টা ফলাফল|টা ফলাফল}} দেখুৱাওক',
'viewprevnext' => '($1 {{int:pipe-separator}} $2) ($3) চাওক।',
'searchmenu-legend' => 'সন্ধান বিকল্পসমূহ',
'searchmenu-exists' => 'এই ৱিকিত "[[:$1]]" নামৰ পৃষ্ঠা এখন আছে ।',
'searchmenu-new' => "'''এই ৱিকিত \"[[:\$1]]\" পৃষ্ঠাখন সৃষ্টি কৰক!'''",
'searchhelp-url' => 'Help:সমল',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|এই উপসৰ্গ থকা পৃষ্ঠাসমূহ ব্ৰাউজ কৰক]]',
'searchprofile-articles' => 'বিষয়বস্তুৰ পৃষ্ঠা',
'searchprofile-project' => 'সহায় আৰু প্ৰকল্প পৃষ্ঠাসমূহ',
'searchprofile-images' => 'মাল্টিমিডিয়া',
'searchprofile-everything' => 'সকলো',
'searchprofile-advanced' => 'উচ্চতৰ',
'searchprofile-articles-tooltip' => '$1-ত অনুসন্ধান কৰক',
'searchprofile-project-tooltip' => '$1-ত অনুসন্ধান',
'searchprofile-images-tooltip' => 'ফাইলৰ বাবে অনুসন্ধান',
'searchprofile-everything-tooltip' => 'সকলো বিষয়বস্তু অনুসন্ধান কৰক (কথা-বতৰা পৃষ্ঠা সহ)',
'searchprofile-advanced-tooltip' => 'স্বনিৰ্ধাৰিত নামস্থানত অনুসন্ধান কৰক',
'search-result-size' => '$1 ({{PLURAL:$2|1 শব্দ|$2 শব্দসমূহ}})',
'search-result-category-size' => '{{PLURAL:$1|১ জন সদস্য|$1 জন সদস্য}} ({{PLURAL:$2|এটা উপশ্ৰেণী|$2 টা উপশ্ৰেণী}}, {{PLURAL:$3|এটা ফাইল|$3 টা ফাইল}})',
'search-result-score' => 'যথাৰ্থতা: $1%',
'search-redirect' => '(পুনৰ্নিদেশনা $1)',
'search-section' => '(অনুচ্ছেদ $1)',
'search-suggest' => 'আপুনি $1 বুজাব খুজিছে নেকি?',
'search-interwiki-caption' => 'সহপ্ৰকল্পসমূহ',
'search-interwiki-default' => '$1 ফলাফলসমূহ:',
'search-interwiki-more' => '(আৰু)',
'search-relatedarticle' => 'সম্পৰ্কিত',
'mwsuggest-disable' => 'AJAX পৰামৰ্শ নিষ্ক্ৰিয় কৰক',
'searcheverything-enable' => 'সকলো নামস্থানত অনুসন্ধান কৰক',
'searchrelated' => 'সম্পৰ্কিত',
'searchall' => 'সকলো',
'showingresults' => "তলত #'''$2'''ৰ পৰা {{PLURAL:$1|'''1''' ফলাফল|'''$1''' ফলাফল}} দেখুওৱা হৈছে।",
'showingresultsnum' => "তলত #'''$2'''ৰ পৰা {{PLURAL:$3|'''1''' ফলাফল|'''$3'''ফলাফল}} দেখুওৱা হৈছে ।",
'showingresultsheader' => "'''$4'''ৰ বাবে {{PLURAL:$5|'''$3''' ৰ '''$1''' ফলাফল| '''$3''' ৰ '''$1 - $2''' ফলাফলসমূহ}}",
'nonefound' => "'''টোকা:''' ডিফ’ল্ট অনুযায়ী মাথোঁ কেইটামানহে নামস্থান অনুসন্ধান কৰা হয় ।
আপোনাৰ অনুসন্ধানত ''all:'' ব্যবহাৰ কৰি সকলো সমল (কথা-বতৰা, শ্ৰেনী ইত্যদি) অনুসন্ধান কৰিব পাৰে, নতুবা আকাংক্ষিত নামস্থান প্ৰিফিক্স হিছাপে ব্যবহাৰ কৰিব পাৰে ।",
'search-nonefound' => 'এই অনুসন্ধানৰ কোনো ফলাফল নাই ।',
'powersearch' => 'অতিসন্ধান',
'powersearch-legend' => 'শক্তিশালী সন্ধান',
'powersearch-ns' => 'নামস্থানবোৰত সন্ধান:',
'powersearch-redir' => 'পুননিৰ্দেশকৰ তালিকা',
'powersearch-field' => 'ৰ কাৰণে সন্ধান কৰক',
'powersearch-togglelabel' => 'পৰীক্ষা কৰক:',
'powersearch-toggleall' => 'সকলো',
'powersearch-togglenone' => 'একো নাই',
'search-external' => 'বাহ্যিক সন্ধান',
'searchdisabled' => '{{SITENAME}} ত অনুসন্ধান কৰা সাময়িক ভাবে নিষ্ক্ৰিয় কৰা হৈছে।
তেতিয়ালৈকে গুগলত অনুসন্ধান কৰক।
মনত ৰাখিব যে তেঁওলোকৰ {{SITENAME}}ৰ ইণ্ডেক্স পুৰণি হব পাৰে।',

# Quickbar
'qbsettings' => 'শীঘ্ৰদণ্ডিকা',
'qbsettings-none' => 'একেবাৰে নহয়',
'qbsettings-fixedleft' => 'বাঁওফাল স্থিৰ',
'qbsettings-fixedright' => 'সোঁফাল স্থিৰ',
'qbsettings-floatingleft' => 'বাঁওফাল অস্থিৰ',
'qbsettings-floatingright' => 'সোঁফাল অস্থিৰ',
'qbsettings-directionality' => 'আপোনাৰ ভাষাৰ আৰু লিপিৰ দিশৰ ওপৰত নিৰ্ভৰ কৰি ঠিক কৰা হ’ল',

# Preferences page
'preferences' => 'পছন্দসমূহ',
'mypreferences' => 'মোৰ পছন্দসমূহ',
'prefs-edits' => 'সম্পাদনাৰ সংখ্যা:',
'prefsnologin' => 'প্ৰৱেশ কৰা নাই',
'prefsnologintext' => 'আপোনাৰ পছন্দ সলনি কৰিবলৈ হ’লে <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} প্ৰৱেশ]</span> কৰাতো আৱশ্যক।',
'changepassword' => 'গুপ্তশব্দ সলনি কৰক',
'prefs-skin' => 'আৱৰন',
'skin-preview' => 'খচৰা',
'datedefault' => 'কোনো পছন্দ নাই',
'prefs-beta' => 'বিটা বৈশিষ্টসমূহ',
'prefs-datetime' => 'তাৰিখ আৰু সময়',
'prefs-labs' => 'পৰীক্ষাগাৰ বৈশিষ্টসমূহ',
'prefs-user-pages' => 'সদস্য পৃষ্ঠাসমূহ',
'prefs-personal' => 'সদস্যৰ বিৱৰণ',
'prefs-rc' => 'শেহতীয়া সাল-সলনি',
'prefs-watchlist' => 'লক্ষ্য তালিকা',
'prefs-watchlist-days' => 'লক্ষ্য তালিকাত দেখুৱাব লগা দিন:',
'prefs-watchlist-days-max' => 'সৰ্বাধিক $1 {{PLURAL:$1|day|days}}',
'prefs-watchlist-edits' => 'বৰ্ধিত লক্ষ্যসুচীত দেখুৱাব লগা সৰ্বোচ্চ সাল-সলনি:',
'prefs-watchlist-edits-max' => 'সৰ্বোচ্চ নম্বৰ: ১০০০',
'prefs-watchlist-token' => 'লক্ষ্যতালিকা টোকেন:',
'prefs-misc' => 'অন্যান্য',
'prefs-resetpass' => 'গুপ্তশব্দ শলনি কৰক',
'prefs-changeemail' => 'ই-মেইল ঠিকনা সলনি কৰক',
'prefs-setemail' => 'এটা ই-মেইল ঠিকনা দিয়ক',
'prefs-email' => 'ই-মেইল বিকল্প',
'prefs-rendering' => 'ৰূপ',
'saveprefs' => 'সাঁচি থওক',
'resetprefs' => 'অসঞ্চিত সাল-সলনি বাতিল কৰক',
'restoreprefs' => 'সকলো পূৰ্বনিৰ্ধাৰিত ছেটিং ঘূৰাই আনক',
'prefs-editing' => 'সম্পাদন',
'prefs-edit-boxsize' => "সম্পাদনা ৱিণ্ড'ৰ আকাৰ",
'rows' => 'পথালী শাৰী:',
'columns' => 'ঠিয় শাৰী:',
'searchresultshead' => 'অনুসন্ধান',
'resultsperpage' => 'প্ৰতি পৃষ্ঠা দৰ্শন:',
'stub-threshold' => '<a href="#" class="stub">আধাৰ সংযোগ</a> ৰ সৰ্বোচ্চ আকাৰ (বাইটত):',
'stub-threshold-disabled' => 'নিষ্ক্ৰিয়',
'recentchangesdays' => 'শেহতীয়া সাল-সলনিত দেখুৱাব লগা দিন:',
'recentchangesdays-max' => 'সৰ্বোচ্চ $1 {{PLURAL:$1|দিন|দিন}}',
'recentchangescount' => 'শেহতীয়া সাল-সলনি, ইতিহাস আৰু লগ পৃষ্ঠাত দেখুৱাব লগা সম্পাদনাৰ সংখ্যা:',
'prefs-help-recentchangescount' => 'ইয়াত শেহতীয়া সাল-সলনি, পৃষ্ঠাৰ ইতিহাস আৰু লগ অন্তৰ্ভুক্ত ।',
'prefs-help-watchlist-token' => 'এই ঘৰটো এটা গোপন শব্দ চাবিৰে পূৰণ কৰিলে আপোনাৰ লক্ষ্য-তালিকাৰ বাবে এটা আৰ.এচ.এচ. ফিড তৈয়াৰ হ’ব । এই শব্দচাবি জনা সদস্যই আপোনাৰ লক্ষ্য-তালিকা চাব পাৰিব, সেয়ে এটা সুৰক্ষিত মান ব্যৱহাৰ কৰক ।
আপুনি ব্যৱহাৰ কৰিব পৰাকৈ এটা যাদৃচ্ছিক মান দিয়া হ’ল: $1',
'savedprefs' => 'আপোনাৰ পছন্দসমূহ সাঁচি ৰখা হ’ল।',
'timezonelegend' => 'সময় স্থান:',
'localtime' => 'স্থানীয় সময়:',
'timezoneuseserverdefault' => 'ডিফ’ল্ট ৱিকি ($1) ব্যৱহাৰ কৰক',
'timezoneuseoffset' => 'অন্য (অফচেট ধাৰ্য কৰক)',
'timezoneoffset' => 'অফচেট¹:',
'servertime' => 'চাৰ্ভাৰৰ সময়:',
'guesstimezone' => 'ব্ৰাউজাৰৰ পৰা ভৰাওক',
'timezoneregion-africa' => 'আফ্ৰিকা',
'timezoneregion-america' => 'আমেৰিকা',
'timezoneregion-antarctica' => 'এন্টাৰ্কটিকা',
'timezoneregion-arctic' => 'আৰ্কটিক',
'timezoneregion-asia' => 'এছিয়া',
'timezoneregion-atlantic' => 'আটলান্টিক মহাসাগৰ',
'timezoneregion-australia' => 'অষ্ট্ৰেলিয়া',
'timezoneregion-europe' => 'ইউৰোপ',
'timezoneregion-indian' => 'ভাৰত মহাসাগৰ',
'timezoneregion-pacific' => 'প্ৰশান্ত মহাসাগৰ',
'allowemail' => 'অন্য সদস্যৰ পৰা ই-মেইল সমৰ্থ কৰক',
'prefs-searchoptions' => 'সন্ধান বিকল্পসমূহ',
'prefs-namespaces' => 'নামস্থান',
'defaultns' => 'অন্যথা এই নামস্থান সমূহত অনুসন্ধান কৰিব:',
'default' => 'অবিচল',
'prefs-files' => 'ফাইলসমূহ',
'prefs-custom-css' => 'স্বনিৰ্ধাৰিত CSS',
'prefs-custom-js' => 'স্বনিৰ্ধাৰিত জাভা লিপি',
'prefs-common-css-js' => 'সকলো আৱৰণৰ বাবে উমৈহতীয়া চি.এচ.এচ./জাভালিপি',
'prefs-reset-intro' => 'আপুনি এই পৃষ্ঠা ব্যৱহাৰ কৰি আপোনাৰ পছন্দসমূহক চাইটৰ পূৰ্বনিৰ্ধাৰিত ছেটঙলৈ ঘূৰাই নিব পাৰে ।
এই পৰিৱৰ্তন পিছত সলাব পৰা নাযাব ।',
'prefs-emailconfirm-label' => 'ইমেইল নিশ্চিতকৰণ:',
'prefs-textboxsize' => 'সম্পাদনা ৱিণ্ড’ৰ আকাৰ',
'youremail' => 'আপোনাৰ ই-মেইল *',
'username' => 'সদস্যনাম:',
'uid' => 'সদস্য চিহ্ন:',
'prefs-memberingroups' => 'এই {{PLURAL:$1|গোটৰ|গোটবোৰৰ}} সদস্য:',
'prefs-registration' => 'পঞ্জীয়ন কৰাৰ সময়:',
'yourrealname' => 'প্ৰকৃত নাম:',
'yourlanguage' => 'ভাষা:',
'yourvariant' => 'বিষয়-বস্তুৰ ভাষা বিকল্প',
'prefs-help-variant' => 'এই ৱিকিৰ সমল পৃষ্ঠাসমূহ প্ৰদৰ্শন কৰিবলে আপোনাৰ পছন্দৰ অপৰ অথবা বৰ্ণবিন্যাস।',
'yournick' => 'নতুন স্বাক্ষ্যৰ:',
'prefs-help-signature' => 'কথা-বতৰা পৃষ্ঠাত মন্তব্যসমূহৰ তলত "<nowiki>~~~~</nowiki>" লিখিলে ই স্বয়ংক্ৰিয়ভাৱে আপোনাৰ নাম আৰু সময় সংযুক্ত কৰিব ।',
'badsig' => 'অনুপযোগী স্বাক্ষ্যৰ, HTML টেগ পৰীক্ষা কৰি লওক।',
'badsiglength' => 'আপোনাৰ স্বাক্ষৰ অত্যাধিক দীঘলীয়া ।
আপোনাৰ স্বাক্ষৰ {{PLURAL:$1|এটা আখৰৰ|টা আখৰৰ}} বেছি হ’ব নালাগে ।',
'yourgender' => 'লিঙ্গ:',
'gender-unknown' => 'অনিধাৰ্য্য',
'gender-male' => 'পুৰুষ',
'gender-female' => 'মহিলা',
'prefs-help-gender' => 'বৈকল্পিক: ছফ্টৱেৰৰ দ্বাৰা কৰা সম্বোধনৰ লিংগ-শুদ্ধতাৰ বাবে ব্যৱহৃত ।
এই তথ্য ৰাজহুৱা কৰা হ’ব ।',
'email' => 'ই-মেইল',
'prefs-help-realname' => 'আপোনাৰ আচল নাম দিয়াতো জৰুৰী নহয়, কিন্তু দিলে আপোনাৰ কামবোৰ আপোনাৰ নামত দেখুওৱা হব।',
'prefs-help-email' => 'ই-মেইল ঠিকনা দিয়াটো বৈকল্পিক, কিন্তু আপুনি গুপ্তশব্দ পাহৰি গ’লে ন-কৈ বহুৱাবৰ বাবে ই প্ৰয়োজনীয়।',
'prefs-help-email-others' => 'আপুনি আপোনাৰ সদস্যপৃষ্ঠা বা কথা-বতৰা পৃষ্ঠাত দিয়া লিংকৰ জৰিয়তে আনে আপোনাক যোগাযোগ কৰিব পাৰে ।
আন সদস্যই যোগাযোগ কৰিলে আপোনাৰ ই-মেইল ঠিকনা প্ৰকাশ নাপায় ।',
'prefs-help-email-required' => 'ই-মেইল ঠিকনা দিবই লাগিব',
'prefs-info' => 'সাধাৰণ তথ্য',
'prefs-i18n' => 'আন্তঃৰাষ্ট্ৰীয়কৰণ',
'prefs-signature' => 'স্বাক্ষৰ',
'prefs-dateformat' => 'তাৰিখ বিন্যাস',
'prefs-timeoffset' => 'সময় অফচেট',
'prefs-advancedediting' => 'উচ্চতৰ উপায়ান্তৰ সমূহ',
'prefs-advancedrc' => 'উচ্চতৰ উপায়ান্তৰ সমূহ',
'prefs-advancedrendering' => 'উচ্চতৰ উপায়ান্তৰ সমূহ',
'prefs-advancedsearchoptions' => 'উচ্চতৰ উপায়ান্তৰ সমূহ',
'prefs-advancedwatchlist' => 'উচ্চতৰ উপায়ান্তৰ সমূহ',
'prefs-displayrc' => 'প্ৰদৰ্শনী উপায়ান্তৰ সমূহ',
'prefs-displaysearchoptions' => 'বিকল্প প্ৰদৰ্শন কৰক',
'prefs-displaywatchlist' => 'বিকল্প প্ৰদৰ্শন কৰক',
'prefs-diffs' => 'পাৰ্থক্য',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'ই-মেইল ঠিকনাটো সঠিক',
'email-address-validity-invalid' => 'সঠিক ই-মেইল ঠিকনা প্ৰদান কৰক',

# User rights
'userrights' => 'সদস্যৰ অধিকাৰ ব্যৱস্থাপনা',
'userrights-lookup-user' => 'সদস্য গোটবোৰ ব্যৱস্থাপনা কৰক',
'userrights-user-editname' => 'সদস্যনাম দিয়ক:',
'editusergroup' => 'সদস্য গোটবোৰ সম্পাদনা কৰক',
'editinguser' => "'''[[User:$1|$1]]''' $2 সদস্যজনৰ অধিকাৰ সলনি কৰি থকা হৈছে।",
'userrights-editusergroup' => 'সদস্য গোট সম্পাদনা কৰক',
'saveusergroups' => 'সদস্য গোট সংৰক্ষিত কৰক',
'userrights-groupsmember' => 'এই গোটবোৰৰ সদস্য:',
'userrights-groupsmember-auto' => 'অসন্দিগ্ধ সদস্য:',
'userrights-groups-help' => 'আপুনি এই সদস্য থকা গোটসমূহৰ সালসলনি কৰিব পাৰে:
* টিক চিহ্ন দিয়া ঘৰৰ অৰ্থ সদস্যজন সেই গোটত আছে ।
* টিক চিহ্ন নিদিয়া ঘৰৰ অৰ্থ সদস্যজন সেই গোটত নাই ।
* এটা তাৰকাচিহ্নই বুজাব যে এবাৰ গোটটো অন্তৰ্ভুক্ত কৰাৰ পিছত আপুনি ইয়াক বাতিল কৰিব নোৱাৰে বা তাৰ ওলোটাটো ।',
'userrights-reason' => 'কাৰণ:',
'userrights-no-interwiki' => 'আপোনাৰ অন্য ৱিকিত সদস্যৰ অধিকাৰ সম্পাদনা কৰাৰ অনুমতি নাই',
'userrights-nodatabase' => '$1  তথ্যকোষৰ কোনো অস্তিত্ব নাই অথবা ই স্থানীয় নহয় ।',
'userrights-nologin' => 'সদস্যৰ অধিকাৰ নিৰূপণ কৰিবলৈ আপুনি কোনো প্ৰশাসকৰ একাউণ্টৰ জৰিয়তে [[Special:UserLogin|প্ৰৱেশ]] কৰিব লাগিব ।',
'userrights-notallowed' => 'সদস্যৰ অধিকাৰ যোগ কৰিবলৈ বা আঁতৰ কৰিবলৈ আপোনাৰ একাউণ্টৰ অনুমতি নাই ।',
'userrights-changeable-col' => 'আপুনি সলনি কৰিব পৰা গোটসমূহ',
'userrights-unchangeable-col' => 'আপুনি সলনি কৰিব নোৱাৰা গোটসমূহ',

# Groups
'group' => 'গোট:',
'group-user' => 'সদস্যসকল',
'group-autoconfirmed' => 'স্বয়ংনিশ্চিত সদস্য',
'group-bot' => 'বট',
'group-sysop' => 'প্ৰশাসকসকল',
'group-bureaucrat' => 'কূটনীতিজ্ঞসকল',
'group-suppress' => 'অনৱেক্ষা',
'group-all' => '(সকলো)',

'group-user-member' => '{{GENDER:$1|সদস্য}}',
'group-autoconfirmed-member' => '{{GENDER:$1| স্বয়ংনিশ্চিত সদস্য}}',
'group-bot-member' => '{{GENDER:$1|বট}}',
'group-sysop-member' => '{{GENDER:$1|প্ৰশাসক}}',
'group-bureaucrat-member' => '{{GENDER:$1|কূটনীতিজ্ঞ}}',
'group-suppress-member' => '{{GENDER:$1|অনৱেক্ষা}}',

'grouppage-user' => '{{ns:project}}:সদস্যসকল',
'grouppage-autoconfirmed' => '{{ns:project}}:স্বয়ংনিশ্চিত সদস্য',
'grouppage-bot' => '{{ns:project}}:বটসমূহ',
'grouppage-sysop' => '{{ns:project}}:প্ৰশাসকবৃন্দ',
'grouppage-bureaucrat' => '{{ns:project}}:কূটনীতিজ্ঞসকল',
'grouppage-suppress' => '{{ns:project}}:অনৱেক্ষা',

# Rights
'right-read' => 'পৃষ্ঠাসমূহ পঢ়ক',
'right-edit' => 'পৃষ্ঠাসমূহ সম্পাদনা কৰক',
'right-createpage' => 'পৃষ্ঠাসমূহ সৃষ্টি কৰক (আলোচনা পৃষ্ঠা নহয়)',
'right-createtalk' => 'কথাবতৰা পৃষ্ঠা সৃষ্টি কৰক',
'right-createaccount' => 'নতুন সদস্য একাউন্ট সৃষ্টি কৰক',
'right-minoredit' => 'সম্পাদনা অগুৰুত্বপূৰ্ণ বুলি চিহ্নিত কৰক',
'right-move' => 'পৃষ্ঠাসমূহ স্থানান্তৰ কৰক',
'right-move-subpages' => 'পৃষ্ঠাৰ সৈতে উপ-পৃষ্ঠাসমূহও স্থানান্তৰ কৰক',
'right-move-rootuserpages' => 'ৰুট সদস্যৰ পৃষ্ঠাসমূহ স্থানান্তৰ কৰক',
'right-movefile' => 'ফাইল স্থানান্তৰ কৰক',
'right-suppressredirect' => 'পৃষ্ঠা স্থানান্তৰ কৰোঁতে উৎস পৃষ্ঠাৰ পৰা পুনঃনিৰ্দেশনা সৃষ্টি কৰিব নালাগে',
'right-upload' => "ফাইল আপল'ড কৰক",
'right-reupload' => 'বৰ্তমান থকা ফাইলৰ ওপৰত লিখক',
'right-reupload-own' => "এজনে আপল'ড কৰা বৰ্তমানৰ ফাইলৰ ওপৰত লিখক",
'right-reupload-shared' => 'উমৈহতীয়া মিডিয়া ভঁৰালত থকা ফাইলসমূহ স্থানীয়ভাৱে উপেক্ষা কৰক ।',
'right-upload_by_url' => "ইউ-আৰ-এলৰ পৰা ফাইল আপল'ড কৰক",
'right-purge' => 'চাইট কেচৰ পৰা নিশ্চয়তা নোহোৱা পৃষ্ঠা মচি পেলাওক ।',
'right-autoconfirmed' => 'অৰ্দ্ধ-সুৰক্ষিত পৃষ্ঠা সম্পাদনা কৰক',
'right-bot' => 'স্বয়ংক্ৰিয় প্ৰক্ৰিয়া হিছাপে ব্যৱহৃত হওক',
'right-nominornewtalk' => 'আলোচনা পৃষ্ঠাৰ লঘূ সম্পাদনা হওঁতে নতুন সদস্য বাৰ্তা নালাগে',
'right-apihighlimits' => 'API প্ৰশ্নৰ বাবে উচ্চতৰ সীমা ব্যৱহাৰ কৰক',
'right-writeapi' => 'ৰাইট এ.পি.আই.ৰ ব্যৱহাৰ',
'right-delete' => 'পৃষ্ঠাসমূহ বিলোপ কৰক',
'right-bigdelete' => 'অতিৰিক্ত ইতিহাস থকা পৃষ্ঠাসমূহ বিলোপ কৰক',
'right-deletelogentry' => "নিৰ্দিষ্ট ল'গ ভুক্তি বিলোপ কৰক বা ঘূৰাই অনক।",
'right-deleterevision' => 'পৃষ্ঠাসমূহৰ নিৰ্দিষ্ট সংশোধনী বিলোপ আৰু পুনৰুদ্ধাৰ কৰক',
'right-deletedhistory' => 'বিলোপ কৰা ইতিহাসৰ ভৰ্তি সংশ্লিষ্ট লেখা অবিহনে চাওক',
'right-deletedtext' => 'বিলোপ কৰা লেখা আৰু বিলোপ কৰা সংশোধনসমূহৰ মাজত হোৱা সালসলনি চাওক',
'right-browsearchive' => 'বিলোপ কৰা পৃষ্ঠা অনুসন্ধান কৰক',
'right-undelete' => 'পৃষ্ঠাখন পুনৰুদ্ধাৰ কৰক',
'right-suppressrevision' => 'প্ৰশাসকৰ পৰা লুকুৱাই ৰখা সংশোধনসমূহ পুনৰ্নিৰীক্ষণ কৰি আগৰ ঠাইলৈ পঠিয়াওক',
'right-suppressionlog' => "ব্যক্তিগত ল'গবোৰ চাওক",
'right-block' => 'আন সদস্যক সম্পাদনা কৰাৰ পৰা বাৰণ কৰক',
'right-blockemail' => 'ই-মেইল পঠোৱাৰ পৰা সদস্যক বাৰণ কৰক',
'right-hideuser' => 'ৰাইজৰ পৰা আঁৰ দি সদস্যক বাৰণ কৰক',
'right-ipblock-exempt' => 'আই.পি. প্ৰতিবন্ধক, অট’-প্ৰতিবন্ধক আৰু ৰে’ঞ্জ-প্ৰতিবন্ধক এৰাই চলক',
'right-proxyunbannable' => 'প্ৰক্সীৰ স্বয়ংক্ৰিয় প্ৰতিবন্ধক এৰাই চলক',
'right-unblockself' => 'আপোনা-আপুনি খোলা',
'right-protect' => 'সুৰক্ষাৰ মাত্ৰা পৰিৱৰ্তন কৰক আৰু সুৰক্ষিত পৃষ্ঠাসমূহ সম্পাদনা কৰক',
'right-editprotected' => 'সুৰক্ষিত পৃষ্ঠা (কেশ্বকেডিঙ সুৰক্ষাৰ অবিহনে) সম্পাদনা কৰক',
'right-editinterface' => 'সদস্যৰ ইণ্টাৰফে’চ সম্পাদনা কৰক',
'right-editusercssjs' => 'আন সদস্যৰ CSS আৰু JavaScript  সম্পাদনা কৰক',
'right-editusercss' => 'আন সদস্যৰ CSS ফাইল সম্পাদনা কৰক',
'right-edituserjs' => 'আন সদস্যৰ JavaScript ফাইল  সম্পাদনা কৰক',
'right-rollback' => 'শেষৰজন সদস্যই এখন নিৰ্দিষ্ট পৃষ্টাত কৰা সম্পাদনা পূৰ্বৰ অৱস্থালৈ ঘূৰাই আনক',
'right-markbotedits' => 'ৰ’ল্ড-বেক সম্পাদনাসমূহ বট সম্পাদনা বুলি চিহ্নিত কৰক',
'right-noratelimit' => 'গতি সীমাৰ দ্বাৰা প্ৰভাৱিত নহ’ব',
'right-import' => 'আন ৱিকিৰ পৰা পৃষ্ঠা আমদানী কৰক',
'right-importupload' => 'ফাইল আপল’ডৰ পৰা পৃষ্ঠা আমদানী কৰক',
'right-patrol' => 'আনৰ সম্পাদনা পৰীক্ষিত বুলি চিহ্নিত কৰক',
'right-autopatrol' => 'এজনৰ সম্পাদনা পৰীক্ষিত বুলি স্বয়ংক্ৰিয়ভাৱে চিহ্নিত কৰক',
'right-patrolmarks' => 'শেহতীয়া সালসলনিৰ পৰীক্ষিত চিহ্ন চাওক',
'right-unwatchedpages' => 'নিৰীক্ষণ নকৰা পৃষ্ঠাসমূহৰ তালিকা চাওক',
'right-mergehistory' => 'পৃষ্ঠাসমূহৰ ইতিহাস একত্ৰিত কৰক',
'right-userrights' => 'সকলো সদস্য অধিকাৰ সম্পাদনা কৰক',
'right-userrights-interwiki' => 'আন ৱিকিৰ সদস্যৰ অধিকাৰসমূহ সম্পাদনা কৰক',
'right-siteadmin' => 'তথ্যকোষ বন্ধ কৰক বা খোলক',
'right-override-export-depth' => '৫ম স্তৰ পৰ্যন্ত সংযুক্ত পৃষ্ঠাসহ সকলো পৃষ্ঠা ৰপ্তানী কৰক',
'right-sendemail' => 'আন সদস্যলৈ ই-পত্ৰ ঠিকনা পঠিয়াওক',
'right-passwordreset' => 'পাছৱৰ্ড ৰি-চেটৰ ই-মেইলসমূহ দেখুৱাওক',

# User rights log
'rightslog' => 'সভ্যৰ অধিকাৰৰ লেখ',
'rightslogtext' => 'সদস্য অধিকাৰৰ পৰিৱৰ্তনসমূহৰ ল’গ',
'rightslogentry' => "$1-ৰ গোট সদস্যপদ $2-ৰ পৰা $3-লৈ সলনি কৰা হ'ল",
'rightslogentry-autopromote' => '$2ৰ পৰা $3লৈ স্বয়ংক্ৰিয়ভাৱে পদোন্নীত হ’ল',
'rightsnone' => '(নাই)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'এই পৃষ্ঠা পঢ়ক',
'action-edit' => 'এই পৃষ্ঠা সম্পাদনা কৰক',
'action-createpage' => 'পৃষ্ঠা সৃষ্টি কৰক',
'action-createtalk' => 'কথাবতৰা পৃষ্ঠা সৃষ্টি কৰক',
'action-createaccount' => 'এই সদস্য একাউন্ট  সৃষ্টি কৰক',
'action-minoredit' => 'সম্পাদনা অগুৰুত্বপূৰ্ণ বুলি চিহ্নিত কৰক',
'action-move' => 'এই পৃষ্ঠা স্থানান্তৰ কৰক',
'action-move-subpages' => 'এই পৃষ্ঠা আৰু ইয়াৰ উপপৃষ্ঠাসমূহ আঁতৰাওক',
'action-move-rootuserpages' => 'ৰুট সদস্যৰ পৃষ্ঠাসমূহ স্থানান্তৰ কৰক',
'action-movefile' => 'এই ফাইল স্থানান্তৰ কৰক',
'action-upload' => "এই ফাইল আপল'ড কৰক",
'action-reupload' => 'বৰ্তমান থকা ফাইলৰ ওপৰত লিখক',
'action-reupload-shared' => 'উমৈহতীয়া ভঁৰালত এই ফাইলটো অৱজ্ঞা কৰক',
'action-upload_by_url' => "এই ফাইল ইউ-আৰ-এল-ৰ পৰা আপল'ড কৰক",
'action-writeapi' => 'ৰাইট এ.পি.আই. ব্যৱহাৰ কৰক',
'action-delete' => 'এই পৃষ্ঠা বিলোপ কৰক',
'action-deleterevision' => 'এই সংশোধন বিলোপ কৰক',
'action-deletedhistory' => 'এই পৃষ্ঠাৰ বিলোপ কৰা ইতিহাস চাওক',
'action-browsearchive' => 'বিলোপ কৰা পৃষ্ঠা অনুসন্ধান কৰক',
'action-undelete' => 'এই পৃষ্ঠা পুনৰুদ্ধাৰ কৰক',
'action-suppressrevision' => 'এই গুপুত সংস্কৰণটো পুনৰ্নিৰীক্ষণ কৰি আগৰ ঠাইত থওক',
'action-suppressionlog' => 'এই ব্যক্তিগত ল’গ চাওক',
'action-block' => 'এই সদস্যক সম্পাদনা কৰাৰ পৰা বাৰণ কৰক',
'action-protect' => 'এই পৃষ্ঠাৰ সুৰক্ষাৰ মাত্ৰা পৰিৱৰ্তন কৰক',
'action-rollback' => 'শেষৰজন সদস্যই এখন নিৰ্দিষ্ট পৃষ্টাত কৰা সম্পাদনা পূৰ্বৰ অৱস্থালৈ ঘূৰাই আনক',
'action-import' => 'অন্য ৱিকিৰ পৰা এই পৃষ্ঠাখন আমদানী কৰক',
'action-importupload' => 'ফাইল আপল’ডৰ পৰা এই পৃষ্ঠা আমদানী কৰক',
'action-patrol' => 'আনৰ সম্পাদনা পৰীক্ষিত বুলি চিহ্নিত কৰক',
'action-autopatrol' => 'আপোনাৰ সম্পাদনা পৰীক্ষিত বুলি চিহ্নিত কৰক',
'action-unwatchedpages' => 'নিৰীক্ষণ নকৰা পৃষ্ঠাসমূহৰ তালিকা চাওক',
'action-mergehistory' => 'এই পৃষ্ঠাখনৰ ইতিহাস একত্ৰিত কৰক',
'action-userrights' => 'সকলো সদস্য অধিকাৰ সম্পাদনা কৰক',
'action-userrights-interwiki' => 'আন ৱিকিৰ সদস্যৰ অধিকাৰসমূহ সম্পাদনা কৰক',
'action-siteadmin' => 'তথ্যকোষ বন্ধ কৰক বা খোলক',
'action-sendemail' => 'ই-মেইল পঠিয়াওক',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|সাল-সলনি|সাল-সলনি}}',
'recentchanges' => 'শেহতীয়া সাল-সলনি',
'recentchanges-legend' => 'সাম্প্ৰতিক সালসলনিৰ পছন্দসমূহ',
'recentchanges-summary' => 'ৱিকিত হোৱা শেহতীয়া সাল-সলনি এই পৃষ্ঠাত অনুসৰণ কৰক।',
'recentchanges-feed-description' => 'ৱিকিত হোৱা শেহতীয়া সাল-সলনি এই ফীডত অনুসৰণ কৰক।',
'recentchanges-label-newpage' => 'এই সম্পাদনাই এখন নতুন পৃষ্ঠা তৈয়াৰ কৰিছে',
'recentchanges-label-minor' => 'এইটো অগুৰুত্বপূৰ্ণ সম্পাদনা',
'recentchanges-label-bot' => "এই সম্পাদনা ব'টৰ দ্বাৰা কৰা হৈছে",
'recentchanges-label-unpatrolled' => 'এই সম্পাদনাটো এতিয়াও পৰীক্ষা কৰা হোৱা নাই',
'rcnote' => "যোৱা {{PLURAL:$2|দিনত|'''$2''' দিনত}} সংঘটিত {{PLURAL:$1|'''১'''|'''$1'''}}টা সালসলনি, $5, $4 পৰ্যন্ত ।",
'rcnotefrom' => "তলত '''$2''' ৰ পৰা হোৱা ('''$1''' লৈকে) পৰিৱৰ্তন দেখুৱা হৈছে ।",
'rclistfrom' => '$1ৰ পৰা নতুন সালসলনি দেখুৱাওক',
'rcshowhideminor' => '$1 -সংখ্যক নগণ্য সম্পাদনা',
'rcshowhidebots' => "ব'ট $1",
'rcshowhideliu' => 'প্ৰবিষ্ট সভ্যৰ সাল-সলনি $1',
'rcshowhideanons' => 'বেনামী সদস্য $1',
'rcshowhidepatr' => '$1 নিৰীক্ষিত সম্পাদনা',
'rcshowhidemine' => 'মোৰ সম্পাদনা $1',
'rclinks' => 'যোৱা $2 দিনত হোৱা $1 টা সাল-সলনি চাওক ।<br />$3',
'diff' => 'পাৰ্থক্য',
'hist' => 'ইতিবৃত্ত',
'hide' => 'দেখুৱাব নালাগে',
'show' => 'দেখুৱাওক',
'minoreditletter' => 'অ',
'newpageletter' => 'ন',
'boteditletter' => 'ব',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|জন সদস্যই|জন সদস্যই}} এই পৃষ্ঠা নিৰীক্ষণ কৰিছে]',
'rc_categories' => 'অনুচ্ছেদৰ সীমাবদ্ধতা ("|" দি পৃথক কৰক)',
'rc_categories_any' => 'যিকোনো',
'rc-change-size-new' => 'সালসলনিৰ পিছত $1 {{PLURAL:$1|বাইট|বাইট}}',
'newsectionsummary' => '/* $1 */ নতুন অনুচ্ছেদ',
'rc-enhanced-expand' => 'সবিশেষ দেখুৱাওক (জাভাস্ক্ৰিপ্টৰ প্ৰয়োজন)',
'rc-enhanced-hide' => 'সবিশেষ  লুকুৱাওক',
'rc-old-title' => 'পূৰ্বে "$1" নামেৰে সৃষ্ট',

# Recent changes linked
'recentchangeslinked' => 'প্ৰাসংগিক সালসলনিসমূহ',
'recentchangeslinked-feed' => 'প্ৰাসংগিক সালসলনিসমূহ',
'recentchangeslinked-toolbox' => 'প্ৰাসংগিক সালসলনিসমূহ',
'recentchangeslinked-title' => '"$1"ৰ লগত জড়িত সাল-সলনি',
'recentchangeslinked-noresult' => 'দিয়া সময়ৰ ভিতৰত সংযোজিত পৃষ্ঠা সমূহত সাল-সলনি হোৱা নাই ।',
'recentchangeslinked-summary' => "এখন নিৰ্দিষ্ট পৃষ্ঠাৰ লগত সংযুক্ত পৃষ্ঠাসমূহৰ( বা এটা নিৰ্দিষ্ট শ্ৰেণীৰ সদস্যসমূহৰ) শেহতীয়া সালসলনিৰ তালিকা তলত দিয়া হৈছে ।
[[Special:Watchlist|আপুনি চকু ৰখা পৃষ্ঠাসমূহৰ তালিকা]] ত থকা পৃষ্ঠাসমূহ '''গাঢ়''' দেখা পাব ।",
'recentchangeslinked-page' => 'পৃষ্ঠাৰ নাম:',
'recentchangeslinked-to' => 'অন্যথা নিৰ্দিষ্ট পৃষ্ঠাৰ লগত সংযুক্ত পৃষ্ঠাসমূহৰ সালসলনি দেখোৱাওক',

# Upload
'upload' => 'ফাইল আপল’ড',
'uploadbtn' => 'ফাইল আপল’ড কৰক',
'reuploaddesc' => 'আপল’ড বাতিল কৰি আপল’ড প্ৰপত্ৰলৈ ঘূৰি যাওক',
'upload-tryagain' => 'পৰিৱৰ্তিত ফাইলৰ বিৱৰণ দাখিল কৰক',
'uploadnologin' => 'প্ৰৱেশ কৰা নাই',
'uploadnologintext' => 'ফাইল আপল’ড কৰিবলৈ আপুনি আগতে [[Special:UserLogin|লগ-ইন]] কৰিব লাগিব ।',
'upload_directory_missing' => 'আপলোড ডিৰেক্টৰি ($1)  বিচাৰি পোৱা নগ’ল আৰু ৱেবচাৰ্ভাৰৰ দ্বাৰা তৈয়াৰ কৰিব পৰা নগ’ল ।',
'upload_directory_read_only' => 'আপল’ড ডিৰেক্টৰি ($1) ৱেবচাৰ্ভাৰৰ দ্বাৰা লিখনযোগ্য নহয় ।',
'uploaderror' => 'আপল’ডত সমস্যা হৈছে',
'upload-recreate-warning' => "'''সতৰ্কবাণী: এই নামৰ এটা ফাইল বিলোপ বা স্থানান্তৰ কৰা হৈছে । '''

এই পৃষ্ঠাৰ অৱলুপ্তি ল’গ আৰু স্থানান্তৰ ল’গ আপোনাৰ সুবিধাৰ্থে তলত দিয়া হ’ল:",
'uploadtext' => "ফাইল আপল’ড কৰাৰ বাবে তলৰ প্ৰপত্ৰ ব্যৱহাৰ কৰক। পূৰ্বে আপল’ড কৰা ফাইল চাবলৈ বা অনুসন্ধান কৰিবলৈ [[Special:FileList|আপল’ড কৰা ফাইলৰ তালিকা]] লৈ যাওক । (পুনঃ) আপল’ড কৰা ফাইলৰ নাম [[Special:Log/upload|আপল’ড অভিলেখত]] ভৰ্তি হয়, বিলোপ কৰা ফাইলৰ নাম [[Special:Log/delete|অৱলুপ্তি অভিলেখত]] পাব ।

কোনো পৃষ্ঠাত চিত্ৰ বা ফাইল সন্নিবিষ্ট কৰিবৰ বাবে তলৰ প্ৰপত্ৰসমূহত থকা সংযোগ ব্যৱহাৰ কৰক: 
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''',
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|alt text]]</nowiki></code>''' অথবা
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>'''",
'upload-permitted' => 'অনুমোদিত ফাইল ধৰণ: $1',
'upload-preferred' => 'বাঞ্ছিত ফাইল ধৰণ: $1',
'upload-prohibited' => 'বঞ্চিত ফাইল ধৰণ: $1',
'uploadlog' => 'আপল’ড ল’গ',
'uploadlogpage' => 'আপল’ড ল’গ',
'uploadlogpagetext' => 'সকলোতকৈ শেহতীয়াভাৱে আপল’ড কৰা ফাইলসমূহৰ তালিকা তলত দিয়া হৈছে ।
অধিক দৃশ্যগত পৰ্য্যালোচনাৰ বাবে [[Special:NewFiles|নতুন ফাইলৰ গেলাৰী]] চাওক ।',
'filename' => 'ফাইলনাম',
'filedesc' => 'সাৰাংশ',
'fileuploadsummary' => 'সাৰাংশ:',
'filereuploadsummary' => 'ফাইলত সালসলনিসমূহ',
'filestatus' => 'স্বত্বাধিকাৰ স্থিতি:',
'filesource' => 'উৎস:',
'uploadedfiles' => 'আপলোড কৰা ফাইলসমূহ',
'ignorewarning' => 'সতৰ্কবাণী আওকাণ কৰি ফাইল সংৰক্ষণ কৰক',
'ignorewarnings' => 'সকলো সতৰ্কবাণী আওকাণ কৰক',
'minlength1' => "ফাইলনাম কমেও এটা আখৰৰ হ'ব লাগে ।",
'illegalfilename' => '"$1" ফাইলনামটোত এনে চিহ্ন আছে যিবোৰ পৃষ্ঠাৰ শিৰোনামাত অনুমোদিত নহয় ।
অনুগ্ৰহ কৰি ফাইলটোৰ আন এটা নাম দি আপল’ড কৰিবলৈ পুনৰ চেষ্টা কৰক ।',
'filename-toolong' => "ফাইলৰ নাম ২৪০ বাইটতকৈ দীঘল হ'ব নোৱাৰে।",
'badfilename' => 'ফাইলনাম "$1"-লৈ সলনি কৰা হ\'ল ।',
'filetype-mime-mismatch' => '".$1" ফাইল এক্সটেনচনটোৰ লগত ফাইলটোৰ MIME প্ৰকাৰ ($2) ৰ মিল পোৱা নগ’ল ।',
'filetype-badmime' => '"$1"  MIME ধৰণৰ ফাইল আপল’ড অনুমোদিত নহয় ।',
'filetype-bad-ie-mime' => 'এই ফাইলটো আপল’ড কৰিব পৰা নাযাব কাৰণ ইণ্টাৰনেট এক্সপ্ল’ৰাৰ-এ ইয়াক "$1" বুলি ধৰিব যিটো সম্ভাব্য ক্ষতিকাৰক আৰু অনুমোদিত নহয় ।',
'filetype-unwanted-type' => "'''\".\$1\"''' ফাইল প্ৰকাৰটো গ্ৰহণযোগ্য নহয় ।
মনোনীত {{PLURAL:\$3|ফাইলৰ প্ৰকাৰ|ফাইলৰ প্ৰকাৰসমূহ}} হ’ল \$2 ।",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL:$4|অনুমোদিত ফাইল প্ৰকাৰ নহয়|সমূহ অনুমোদিত ফাইল প্ৰকাৰ নহয়}} ।
{{PLURAL:$3|অনুমোদিত ফাইল প্ৰকাৰ হ’ল|অনুমোদিত ফাইল প্ৰকাৰসমূহ হ’ল}} $2 ।',
'filetype-missing' => 'এই ফাইলৰ কোনো এক্সটেনচন নাই (যেনে ".jpg") ।',
'empty-file' => 'আপুনি দাখিল কৰা ফাইলখন খালী ।',
'file-too-large' => 'আপুনি দাখিল কৰা ফাইলটো বৰ ডাঙৰ ।',
'filename-tooshort' => 'ফাইলৰ নামটো অতি চুটি।',
'filetype-banned' => 'এই ধৰণৰ ফাইল নিষিদ্ধ।',
'verification-error' => 'ফাইলৰ শুদ্ধতা বিচাৰত এই ফাইল ঊত্তীৰ্ণ নহ’ল ।',
'hookaborted' => 'আপুনি কৰিব বিচৰা পৰিৱৰ্তনটো এটা এক্সটেনচন হুকৰ দ্বাৰা বাতিল কৰা হৈছে ।',
'illegal-filename' => 'ফাইলৰ এই নামটো গ্ৰহনযোগ্য নহয় ।',
'overwrite' => 'এতিয়া থকা ফাইলৰ ওপৰত লিখা নিষেধ ।',
'unknown-error' => 'এক অজ্ঞাত সমস্যাই দেখা দিছে ।',
'tmp-create-error' => 'অস্থায়ী ফাইল তৈয়াৰ কৰিব পৰা নহ’ল ।',
'tmp-write-error' => 'অস্থায়ী ফাইল লিখাত সমস্যা হৈছে ।',
'large-file' => 'পৰামৰ্শ অনুযায়ী ফাইলৰ আকাৰ $1 তকৈ ডাঙৰ হ’ব নালাগে ।
এই ফাইলৰ আকাৰ $2 ।',
'largefileserver' => 'চাৰ্ভাৰে অনুমোদন কৰাতকৈ এই ফাইলৰ আকাৰ ডাঙৰ ।',
'emptyfile' => "আপুনি আপল'ড কৰা ফাইলটো সম্ভৱত: খালী ।
ফাইলৰ নাম টাইপিঙত ভুলৰ বাবে এনে হ’ব পাৰে ।
আপুনি সঁচাকৈ এই ফাইল আপল'ড কৰিব বিচাৰিছেনে পৰীক্ষা কৰক ।",
'windows-nonascii-filename' => 'বিশেষ চিহ্ন থকা ফাইলৰ নাম এই ৱিকিয়ে সমৰ্থন নকৰে ।',
'fileexists' => 'এই নামৰ এটা ফাইল ইতিমধ্যেই আছে । আপুনি ইয়াক সলাব বিচৰাটো নিশ্চিত নহ’লে অনুগ্ৰহ কৰি <strong>[[:$1]]</strong> পৰীক্ষা কৰি চাওক ।
[[$1|thumb]]',
'filepageexists' => 'এই ফাইলৰ বিৱৰণী পৃষ্ঠা <strong>[[:$1]]</strong> ত ইতিমধ্যেই তৈয়াৰ কৰা হৈছে, কিন্তু সদ্যহতে এই নামৰ কোনো ফাইল নাই ।
আপুনি দাখিল কৰা সাৰাংশ বিৱৰণী পৃষ্ঠাত দেখা নাযাব ।
আপোনাৰ সাৰাংশ তাত দেখা পোৱা যাবলৈ ইয়াক আপুনি হাতেৰে সম্পাদনা কৰিব লাগিব ।
[[$1|thumb]]',
'fileexists-extension' => 'একে নামৰ ফাইল ইতিমধ্যে আছে: [[$2|thumb]] 
* আপলোড কৰা ফাইলৰ নাম: <strong>[[:$1]]</strong> 
* বৰ্তমানে থকা ফাইলৰ নাম: <strong>[[:$2]]</strong> 
অনুগ্ৰহ কৰি আন এটা নাম বাছি লওক ।',
'fileexists-thumbnail-yes' => "এই ফাইলটো সম্ভৱত: সংক্ষিপ্ত আকাৰৰ ''(থাম্বনেইল)'' চিত্ৰ ।
[[$1|thumb]]
অনুগ্ৰহ কৰি <strong>[[:$1]]</strong> ফাইলটো পৰীক্ষা কৰি চাওক ।
যদি পৰীক্ষা কৰা ফাইলটো একেই চিত্ৰৰ মূল আকাৰ হয় তেন্তে এটা অতিৰিক্ত থাম্বনেইল আপলোড কৰাৰ প্ৰয়োজন নাই ।",
'file-thumbnail-no' => "এই ফাইলনামটো <strong>$1</strong> ৰে আৰম্ভ হৈছে ।
এইখন সম্ভৱত: সংক্ষিপ্ত আকাৰৰ ''(থাম্বনেইল)'' চিত্ৰ ।
আপোনাৰ ওচৰত যদি পূৰ্ণ ৰিজ’লিউচনৰ চিত্ৰখন আছে সেইখন আপল’ড কৰক, নাইবা ফাইলৰ নামটো সলাওক ।",
'fileexists-forbidden' => 'এই নামৰ এটা ফাইল ইতিমধ্যেই আছে আৰু তাৰ ওপৰত লিখা নাযাব ।
তথাপিও যদি আপোনাৰ ফাইলটো আপল’ড কৰিব বিচাৰিছে তেন্তে ঘূৰি গৈ এটা নতুন নাম ব্যৱহাৰ কৰক ।
[[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'এই নামৰ এটা ফাইল ইতিমধ্যেই উমৈহতীয়া ফাইল ভঁৰালত আছে ।
তথাপিও যদি আপোনাৰ ফাইলটো আপল’ড কৰিব বিচাৰিছে তেন্তে ঘূৰি গৈ এটা নতুন নাম ব্যৱহাৰ কৰক ।
[[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'এই ফাইলটো {{PLURAL:$1|ফাইলৰ|ফাইলবোৰৰ}} প্ৰতিলিপি:',
'file-deleted-duplicate' => "এই ফাইল ([[:$1]]) ৰ  লগত মিল থকা আন এটা ফাইল ইতিপূৰ্বে বিলোপ কৰা হৈছে ।
পুনৰ আপল'ড কৰাৰ আগেয়ে আপুনি সেই ফাইলটোৰ অৱলুপ্তি ইতিহাস পৰীক্ষা কৰা উচিত ।",
'uploadwarning' => 'আপল’ড সতৰ্কবাণী',
'uploadwarning-text' => 'অনুগ্ৰহ কৰি তলত ফাইলৰ বিৱৰণী পৰিৱৰ্তন কৰক আৰু পুনৰ চেষ্টা কৰক ।',
'savefile' => 'সংৰক্ষণ',
'uploadedimage' => '"[[$1]]" আপল’ড কৰা হ’ল',
'overwroteimage' => '"[[$1]]" ৰ এটা নতুন সংস্কৰণ আপল’ড কৰা হৈছে',
'uploaddisabled' => 'আপল’ড নিষ্ক্ৰিয় হৈ আছে',
'copyuploaddisabled' => 'ইউ.আৰ.এল.ৰ মাধ্যমেৰে আপল’ড নিষ্ক্ৰিয় হৈ আছে ।',
'uploadfromurl-queued' => 'আপোনাৰ আপল’ড শাৰীত ৰখা হৈছে ।',
'uploaddisabledtext' => 'ফাইল আপল’ড নিষ্ক্ৰিয় হৈ আছে ।',
'php-uploaddisabledtext' => 'পি.এইচ.পি.ত ফাইল আপল’ড নিষ্ক্ৰিয় হৈ আছে ।
অনুগ্ৰহ কৰি file_uploads ছেটিং পৰীক্ষা কৰক ।',
'uploadscripted' => 'এই ফাইলত HTML বা স্ক্ৰিপ্ত ক’ড আছে যিবোৰ ৱেব ব্ৰাউজাৰে ভুলকৈ ব্যাখ্যা কৰিব পাৰে ।',
'uploadvirus' => 'ফাইলটোত ভাইৰাছ আছে! 
সবিশেষ: $1',
'uploadjava' => 'এই ফাইলটো Java .class ফাইল থকা এটা ZIP ফাইল ।
জাভা ফাইল আপল’ড কৰা অনুমোদিত নহয় কিয়নো ই সুৰক্ষা সীমাবদ্ধতা এৰাই চলিব পাৰে ।',
'upload-source' => 'উৎস ফাইল',
'sourcefilename' => 'উৎস ফাইল নাম',
'sourceurl' => 'উৎস ইউ-আৰ-এল',
'destfilename' => 'লক্ষ্য ফাইলৰ নাম:',
'upload-maxfilesize' => 'ফাইলৰ সৰ্বোচ্চ আকাৰ: $1',
'upload-description' => 'ফাইলৰ বৰ্ণনা',
'upload-options' => "আপল'ড বিকল্পসমূহ",
'watchthisupload' => 'এই ফাইল লক্ষ্য কৰক',
'filewasdeleted' => 'এই নামৰ এটা ফাইল পূৰ্বতে আপল’ড কৰি বিলোপ কৰা হৈছে ।
ইয়াক পুনৰ আপল’ড কৰাৰ আগেয়ে আপুনি $1 পৰীক্ষা কৰা উচিত ।',
'filename-bad-prefix' => "আপুনি আপলোড কৰা ফাইলৰ নামটো '''\"\$1\"''' দি আৰম্ভ হৈছে, যিটো ডিজিটেল কেমেৰাই স্বয়ংক্ৰিয়ভাৱে দিয়ে আৰু সি ব্যাখ্যামূলক নহয় ।
অনুগ্ৰহ কৰি আপোনাৰ ফাইলটোৰ বাবে এটা ব্যাখ্যামূলক নাম বাছি লওক ।",
'upload-success-subj' => "আপলোড সফল হ'ল",
'upload-success-msg' => '[$2] ৰ পৰা আপোনাৰ আপলোড সফল হৈছে । এইটো ইয়াত উপলদ্ধ: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'আপল’ডত সমস্যা হৈছে',
'upload-failure-msg' => '[$2] ৰ পৰা আপুনি কৰা আপল’ডত এটা সমস্যাই দেখা দিছে:

$1',
'upload-warning-subj' => 'আপল’ড সতৰ্কীকৰণ',
'upload-warning-msg' => '[$2] ৰ পৰা আপুনি কৰা আপল’ডত এটা সমস্যাই দেখা দিছে । আপুনি ইয়াক সমাধান কৰিবৰ বাবে [[Special:Upload/stash/$1|আপল’ড প্ৰপত্ৰ]] লৈ ঘূৰি যাব পাৰে ।',

'upload-proto-error' => 'ভুল প্ৰ’ট’ক’ল',
'upload-proto-error-text' => 'দূৰৱৰ্তী আপল’ডৰ বাবে <code>http://</code> or <code>ftp://</code> দি আৰম্ভ হোৱা URLসমূহ আৱশ্যক ।',
'upload-file-error' => 'আভ্যন্তৰীণ ত্ৰুটি',
'upload-file-error-text' => 'চাৰ্ভাৰত অস্থায়ী ফাইল সৃষ্টি কৰোঁতে এটা আভ্যন্তৰীণ ত্ৰুটিয়ে দেখা দিছে ।
অনুগ্ৰহ কৰি [[Special:ListUsers/sysop|প্ৰশাসকৰ]] লগত যোগাযোগ কৰক ।',
'upload-misc-error' => 'অজ্ঞাত আপল’ড সমস্যা',
'upload-misc-error-text' => 'আপল’ডৰ সময়ত কোনো অজ্ঞাত সমস্যাই দেখা দিছে ।
URL টোৰ বৈধতা বিচাৰ কৰি পুনৰ চেষ্টা কৰক ।
যদি তাৰ পিছতো সমস্যা হয়, তেন্তে এজন [[Special:ListUsers/sysop|প্ৰশাসকৰ]] লগত যোগাযোগ কৰক ।',
'upload-too-many-redirects' => 'এই URL টোত অতি বেছি পুনৰ্নিৰ্দেশনা আছে',
'upload-unknown-size' => 'অজ্ঞাত আকাৰ',
'upload-http-error' => 'এটা HTTP ত্ৰুটিয়ে দেখা দিছে: $1',
'upload-copy-upload-invalid-domain' => "এই ডমেইনত কপী আপল'ড নাপাব।",

# File backend
'backend-fail-stream' => "$1 ফাইলটো ষ্ট্ৰীম কৰিব পৰা নগ'ল।",
'backend-fail-backup' => "$1 ফাইলটো বেকআপ্‌ কৰিব পৰা নগ'ল।",
'backend-fail-notexists' => '$1 ফাইলটোৰ কোনো অস্তিত্ব নাই।',
'backend-fail-hashes' => "তুলনা কৰিবৰ বাবে ফাইল হেছ্‌সমূহ পাব পৰা নগ'ল।",
'backend-fail-notsame' => '$1ত ইতিমধ্যে বেলেগ এটা ফাইল আছে।',
'backend-fail-invalidpath' => '$1টো বৈধ সঞ্চয় পথ নহয়।',
'backend-fail-delete' => '$1 ফাইলটো বিলোপ কৰিব পৰা নগল।',
'backend-fail-alreadyexists' => '$1 ফাইলটো ইতিমধ্যে আছেই।',
'backend-fail-store' => "$1 ফাইলটো $2ত সাঁচিব পৰা নগ'ল।",
'backend-fail-copy' => '$1 ফাইলটো $2 লৈ প্ৰতিলিপি কৰিব পৰা নগ’ল',
'backend-fail-move' => "$1 ফাইলটো $2লৈ স্থানান্তৰ কৰিব পৰা নগ'ল",
'backend-fail-opentemp' => "অস্থায়ী ফাইল খুলিব পৰা নগ'ল।",
'backend-fail-writetemp' => "অস্থায়ী ফাইলত লিখিব পৰা নগ'ল।",
'backend-fail-closetemp' => "অস্থায়ী ফাইল বন্ধ কৰিব পৰা নগ'ল।",
'backend-fail-read' => "$1 ফাইলটো পঢ়িব পৰা নগ'ল",
'backend-fail-create' => "$1 ফাইলটো সৃষ্টি কৰিব পৰা নগ'ল।",
'backend-fail-maxsize' => "$1 ফাইলটো সৃষ্টি কৰিব পৰা নগ'ল কিয়নো ইয়াৰ আকাৰ {{PLURAL:$2|এক বাইটতকৈ|$2 বাইটতকৈ}} বেছি।",
'backend-fail-readonly' => 'ষ্ট\'ৰেজ বেক্‌এণ্ড "$1"ক কেৱল পঢ়িব পৰা যায়। ইয়াৰ কাৰণ হ\'ল: "$2"',
'backend-fail-synced' => '"$1" ফাইলটো আভ্যন্তৰীণ ষ্ট\'ৰেজ বেক্‌এণ্ডৰ লগত অসঙ্গত অৱস্থাত আছে',
'backend-fail-connect' => '"$1" ষ্ট\'ৰেজ বেক্‌এণ্ডৰ লগত সম্পৰ্ক স্থাপন কৰিব পৰা নগ\'ল।',
'backend-fail-internal' => 'ষ্ট\'ৰেজ বেক্‌এণ্ড "$1"ত এক অজ্ঞাত ত্ৰুটী ঘটিছে।',
'backend-fail-contenttype' => '"$1"ত সাঁচি থ\'বলৈ ফাইলটোৰ সমল প্ৰকাৰ স্থিৰ কৰিব পৰা নগ\'ল।',
'backend-fail-batchsize' => "$1টা ফাইল {{PLURAL:$1|কাৰ্যৰ|কাৰ্যৰ}} ষ্ট'ৰেজ বেকএ'ণ্ড দিয়া হৈছে; সীমা হৈছে $2টা {{PLURAL:$2|কাৰ্য|কাৰ্য}}।",
'backend-fail-usable' => "অপৰ্যাপ্ত অনুমতি বা হেৰোৱা নিৰ্দেশিকা/সমলৰ বাবে $1 ফাইলটো লিখিব পৰা নগ'ল।",

# File journal errors
'filejournal-fail-dbconnect' => 'ষ্ট\'ৰেজ বেকএ\'ণ্ড "$1"ৰ বাবে জাৰ্ণাল তথ্যকোষৰ লগত সংযোগ স্থাপন নহ\'ল।',
'filejournal-fail-dbquery' => 'ষ্ট\'ৰেজ বেকএ\'ণ্ড "$1"ৰ বাবে জাৰ্ণাল তথ্যকোষ আপডেট কৰিব পৰা নগ\'ল।',

# Lock manager
'lockmanager-notlocked' => '"$1" খুলিব পৰা নগ\'ল; ইয়াক বন্ধ কৰা হোৱা নাই।',
'lockmanager-fail-closelock' => '"$1" -ৰ বাবে লক নথিপত্ৰ বন্ধ কৰিব পৰা নগল।',
'lockmanager-fail-deletelock' => '"$1" -ৰ বাবে লক নথিপত্ৰ মচিব পৰা নগ\'ল।',
'lockmanager-fail-acquirelock' => '"$1" -ৰ বাবে প্ৰাপ্ত কৰিব পৰা নগল।',
'lockmanager-fail-openlock' => '"$1" -ৰ বাবে লক নথিপত্ৰ খুলিব পৰা নগল।',
'lockmanager-fail-releaselock' => '"$1" -ৰ বাবে লক মুক্ত কৰিব পৰা নগ\'ল।',
'lockmanager-fail-db-bucket' => "বাকেট $1 -ত পৰ্যাপ্ত লক ডাটাবেইচসমূহ যোগাযোগ কৰিব পৰা নগ'ল।",
'lockmanager-fail-db-release' => "$1 তথ্যকোষত তলা মোকোলাই দিব পৰা নগ'ল",
'lockmanager-fail-svr-acquire' => "$1 চাৰ্ভাৰত তলা মোকোলাই দিব পৰা নগ'ল",
'lockmanager-fail-svr-release' => "$1 চাৰ্ভাৰত তলা মোকোলাই দিব পৰা নগ'ল",

# ZipDirectoryReader
'zip-file-open-error' => 'ফাইলটো ZIP পৰীক্ষাৰ বাবে মুকলি কৰোঁতে এটা সমস্যাই দেখা দিছে ।',
'zip-wrong-format' => 'চিহ্নিত ফাইলটো ZIP ফাইল নহয় ।',
'zip-bad' => 'এই ফাইলটো আসোঁৱাহপূৰ্ণ বা অপঠনযোগ্য ZIP ফাইল ।
সুৰক্ষাজনিত কাৰণত ইয়াক ভালদৰে পৰীক্ষা কৰিব পৰা নাযাব ।',
'zip-unsupported' => 'এই ফাইলটো ZIP সুবিধা ব্যৱহাৰ কৰা এটা ZIP ফাইল যিটো মিডিয়াৱিকিৰ দ্বাৰা সমৰ্থিত নহয় ।
সুৰক্ষাজনিত কাৰণত ইয়াক ভালদৰে পৰীক্ষা কৰিব পৰা নাযাব ।',

# Special:UploadStash
'uploadstash' => 'আপল’ডৰ গুপ্তভঁৰাল',
'uploadstash-summary' => 'আপল’ড কৰা (বা আপল’ড হৈ থকা) কিন্তু ৱিকিত এতিয়াও অপ্ৰকাশিত ফাইলসমূহলৈ এই পৃষ্ঠাৰ জৰিয়তে যাব পাৰিব । কেৱল আপল’ড কৰা সদস্যজনেহে এই ফাইলসমূহ দেখা পাব ।',
'uploadstash-clear' => 'ফাইলৰ গুপ্তভঁৰাল খালী কৰক',
'uploadstash-nofiles' => 'গুপ্তভঁৰালত আপোনাৰ কোনো ফাইল নাই ।',
'uploadstash-badtoken' => 'এই কাৰ্য্য অসফল হৈছে, কাৰণ সম্ভৱতঃ আপোনাৰ সম্পাদনাৰ নিৰ্ভৰযোগ্যতাৰ ম্যাদ উকলিছে । আকৌ চেষ্টা কৰক ।',
'uploadstash-errclear' => 'ফাইলসমূহৰ নিকাকৰণ ব্যৰ্থ হৈছে ।',
'uploadstash-refresh' => 'ফাইলৰ তালিকা ৰিফ্ৰে’চ কৰক',
'invalid-chunk-offset' => 'অবৈধ চাঙ্ক অফছেট্‌',

# img_auth script messages
'img-auth-accessdenied' => 'প্ৰৱেশাধিকাৰ নাই',
'img-auth-nopathinfo' => "সন্ধানহীন PATH_INFO।
আপোনাৰ চাৰ্ভাৰ এই তথ্য প্ৰেৰণ কৰিবলে প্ৰস্তুত নহয়।
ই CGI-ভিত্তিক হ'ব পাৰে img_auth সমৰ্থন কৰিব নোৱাৰে।
https://www.mediawiki.org/wiki/Manual:Image_Authorization চাওক।",
'img-auth-notindir' => 'সজা হোৱা আপল’ড ডিৰেক্টৰিত অনুৰোধ কৰা পথটো নাই ।',
'img-auth-badtitle' => '"$1" ৰ পৰা কোনো বৈধ শিৰোনামা তৈয়াৰ কৰিব পৰা নগ’ল ।',
'img-auth-nologinnWL' => 'আপুনি প্ৰৱেশ কৰা নাই আৰু চকু ৰখা ৰখা পৃষ্ঠাতালিকাত "$1" নাই ।',
'img-auth-nofile' => '"$1" নামৰ ফাইলৰ কোনো অস্তিত্ব নাই ।',
'img-auth-isdir' => 'আপুনি "$1" ডিৰেক্টৰিত প্ৰৱেশ কৰিবলৈ বিচাৰিছে ।
কেৱল ফাইলতহে প্ৰৱেশ কৰিব পাৰিব ।',
'img-auth-streaming' => '"$1" স্ট্ৰিম হৈ আছে ।',
'img-auth-public' => "img_auth.phpৰ কাম হৈছে ব্যক্তিগত ৱিকিৰ পৰা ফাইল বাহিৰলৈ পঠোৱা ।
এই ৱিকিক ৰাজহুৱা ৱিকিৰূপে কনফিগাৰ কৰা হৈছে ।
সুৰক্ষাৰ বাবে img_auth.php নিষ্ক্ৰিয় কৰা হ'ল ।",
'img-auth-noread' => 'সদস্যৰ "$1" ত প্ৰৱেশাধিকাৰ নাই ।',
'img-auth-bad-query-string' => 'এই ইউ.আৰ.এল.-ত অযুক্তিসংগত কুৱেৰী ষ্ট্ৰিং আছে ।',

# HTTP errors
'http-invalid-url' => 'অবৈধ URL: $1',
'http-invalid-scheme' => '"$1" আঁচনি থকা URLসমূহ সমৰ্থিত নহয় ।',
'http-request-error' => 'অজ্ঞাত ত্ৰুটিৰ বাবে HTTP অনুৰোধ ব্যাহত হৈছে ।',
'http-read-error' => 'HTTP পঠন ত্ৰুটি ।',
'http-timed-out' => 'HTTP অনুৰোধৰ সময় পাৰ হৈছে ।',
'http-curl-error' => 'URL অনাত ত্ৰুটি হৈছে: $1',
'http-host-unreachable' => 'URL পাব পৰা নগ’ল ।',
'http-bad-status' => 'HTTP অনুৰোধৰ সময়ত কোনো সমস্যা হৈছে: $1, $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'URL পাব পৰা নগ’ল ।',
'upload-curl-error6-text' => 'আপুনি দিয়া URL পাব পৰা নগ’ল ।
অনুগ্ৰহ কৰি পুনৰ পৰীক্ষা কৰক যে URLটো সঠিক আৰু চাইটটো সক্ৰিয় হৈ আছে ।',
'upload-curl-error28' => 'আপল’ডৰ সময় পাৰ হৈছে',
'upload-curl-error28-text' => 'চাইটটোৱে সঁহাৰি দিয়াত পলম কৰিছে ।
অনুগ্ৰহ কৰি চাইটটো সক্ৰিয় নে পৰীক্ষা কৰক আৰু খন্তেক পিছত চেষ্টা কৰক ।
আপুনি আন কোনো কম ব্যস্ত সময়ত চেষ্টা কৰি চাব পাৰে ।',

'license' => 'অনুজ্ঞাপত্ৰ:',
'license-header' => 'অনুজ্ঞাপত্ৰ',
'nolicense' => 'একো বাছনি কৰা নাই',
'license-nopreview' => '(প্ৰাকদৰ্শন উপলব্ধ নহয়)',
'upload_source_url' => '(এটা বৈধ, ৰাজহুৱাকৈ উন্মুক্ত URL)',
'upload_source_file' => '(আপোনাৰ কম্পিউটাৰৰ এটা ফাইল)',

# Special:ListFiles
'listfiles-summary' => 'এই বিশেষ পৃষ্ঠাত সকলো আপল’ড হোৱা ফাইল দেখা পাব ।
সদস্যৰ দ্বাৰা চেকিলে কেৱল শেহতীয়াকৈ আপল’ড কৰা ফাইলৰ সংস্কৰণ দেখা পোৱা যাব ।',
'listfiles_search_for' => 'মিডিয়াৰ নাম অনুসন্ধান:',
'imgfile' => 'ফাইল',
'listfiles' => 'ফাইলৰ তালিকা',
'listfiles_thumb' => 'ক্ষুদ্ৰ প্ৰতিকৃতি',
'listfiles_date' => 'তাৰিখ',
'listfiles_name' => 'নাম',
'listfiles_user' => 'সদস্য',
'listfiles_size' => 'আকাৰ',
'listfiles_description' => 'বিৱৰণ',
'listfiles_count' => 'সংস্কৰণ',

# File description page
'file-anchor-link' => 'চিত্ৰ',
'filehist' => 'ফাইলৰ ইতিবৃত্ত',
'filehist-help' => 'ফাইলৰ আগৰ অৱ্স্থা চাবলৈ সেই তাৰিখ/সময়ত টিপা মাৰক ।',
'filehist-deleteall' => 'সকলো বিলোপ কৰক',
'filehist-deleteone' => 'বিলোপ কৰক',
'filehist-revert' => 'আগৰ অৱস্থালৈ ঘূৰি যাওক',
'filehist-current' => 'বৰ্তমান',
'filehist-datetime' => 'তাৰিখ/সময়',
'filehist-thumb' => 'ক্ষুদ্ৰ প্ৰতিকৃতি',
'filehist-thumbtext' => '$1ৰ সংস্কৰণৰ ক্ষুদ্ৰ প্ৰতিকৃতি',
'filehist-nothumb' => 'ক্ষুদ্ৰ প্ৰতিকৃতি নাই',
'filehist-user' => 'সদস্য',
'filehist-dimensions' => 'আকাৰ',
'filehist-filesize' => 'ফাইলৰ আকাৰ (বাইট)',
'filehist-comment' => 'মন্তব্য',
'filehist-missing' => 'ফাইল সন্ধানহীন',
'imagelinks' => 'ফাইল ব্যৱহাৰ',
'linkstoimage' => 'তলত দিয়া পৃষ্ঠাবোৰ এই চিত্ৰ খনৰ লগত জৰিত :{{PLURAL:$1|page links|$1 pages link}}',
'linkstoimage-more' => 'এই ফাইলৰ লগত $1ৰো বেছি {{PLURAL:$1|পৃষ্ঠা সংযোগ|পৃষ্ঠা সংযোগ}} হৈ আছে ।
তলৰ তালিকাত {{PLURAL:$1|প্ৰথম পৃষ্ঠা সংযোগ|প্ৰথম $1 পৃষ্ঠা সংযোগ}} দেখুওৱা হৈছে ।
এখন [[Special:WhatLinksHere/$2|সম্পূৰ্ণ তালিকা]]ও পাব ।',
'nolinkstoimage' => 'এই চিত্ৰখনলৈ কোনো পৃষ্ঠা সংযোজিত নহয়',
'morelinkstoimage' => 'এই ফাইলৰ [[Special:WhatLinksHere/$1|অধিক সংযোগ]] চাওক ।',
'linkstoimage-redirect' => '$1 (ফাইল পুনৰ্নিৰ্দেশ) $2',
'duplicatesoffile' => 'এই ফাইলটোৰ {{PLURAL:$1|ফাইলটো প্ৰতিলিপি|$1 ফাইলসমূহ প্ৰতিলিপি}}
([[Special:FileDuplicateSearch/$2|অধিক তথ্য]]):',
'sharedupload' => 'এই ফাইলখন $1-ৰ পৰা লোৱা হৈছে আৰু অন্যান্য প্ৰকল্পতো ব্যৱহাৰ হব পাৰে ।',
'sharedupload-desc-there' => 'এই ফাইলটো $1 ৰ আৰু আন প্ৰকল্পৰ দ্বাৰা ব্যৱহৃত হ’ব পাৰে ।
অনুগ্ৰহ কৰি অধিক তথ্যৰ বাবে [$2 ফাইলৰ বিৱৰণ পৃষ্ঠা] চাওক ।',
'sharedupload-desc-here' => 'এই ফাইলটো $1 ৰ পৰা আহিছে আৰু অন্যান্য প্ৰকল্পতো ব্যৱহাৰ হ’ব পাৰে ।
ইয়াৰ [$2 ফাইল বিৱৰণ পৃষ্ঠা]ৰ সবিশেষ তলত দিয়া হ’ল ।',
'sharedupload-desc-edit' => 'এই ফাইলটো $1ৰ পৰা আহিছে আৰু ইয়াক আন প্ৰকল্পইও ব্যৱহাৰ কৰিব পাৰে।
আপুনি ইচ্ছা কৰিলে তাৰ [$2 ফাইল বিৱৰণী পৃষ্ঠা]ৰ কথাখিনি সম্পাদনা কৰিব পাৰে।',
'sharedupload-desc-create' => 'এই ফাইলটো $1-ৰ পৰা লোৱা হৈছে আৰু অন্যান্য প্ৰকল্পতো ব্যৱহাৰ হব পাৰে।
আপুনি ইচ্ছা কৰিলে তাৰ [$2 ফাইল বিৱৰণী পৃষ্ঠা]ৰ কথাখিনি সম্পাদনা কৰিব পাৰে।',
'filepage-nofile' => 'এই নামৰ কোনো ফাইলৰ অস্তিত্ব নাই ।',
'filepage-nofile-link' => 'এই নামৰ কোনো ফাইলৰ অস্তিত্ব নাই, কিন্তু আপুনি [$1 আপল’ড] কৰিব পাৰে ।',
'uploadnewversion-linktext' => "এই ফাইলতোৰ নতুন সংশোধন এটা আপল'ড কৰক",
'shared-repo-from' => '$1 পৰা',
'shared-repo' => 'এটা উমৈহতীয়া ভঁৰাল',

# File reversion
'filerevert' => '$1 ক আগৰ অৱস্থালৈ ঘূৰাই আনক',
'filerevert-legend' => 'ফাইলটোক আগৰ অৱস্থালৈ ঘূৰাই আনক',
'filerevert-intro' => "আপুনি '''[[Media:$1|$1]]''' ফাইলটোক [$3, $2 সময়ৰ $4 সংস্কৰণ]লৈ ঘূৰাই নিব বিচাৰিছে ।",
'filerevert-comment' => 'কাৰণ:',
'filerevert-defaultcomment' => '$2, $1 তাৰিখৰ সংস্কৰণলৈ ঘূৰাই নিয়া হ’ল',
'filerevert-submit' => 'আগৰ অৱস্থালৈ ঘূৰি যাওক',
'filerevert-success' => "'''[[Media:$1|$1]]''' ক [$3, $2-ৰ $4 সংস্কৰণ]লৈ ঘূৰাই নিয়া হৈছে ।",
'filerevert-badversion' => 'দাখিল কৰা তাৰিখ আৰু সময়যুক্ত এই ফাইলৰ কোনো স্থানীয় সংস্কৰণ নাই ।',

# File deletion
'filedelete' => '"$1" বিলোপ কৰক',
'filedelete-legend' => 'ফাইল বিলোপ কৰক',
'filedelete-intro' => "আপুনি '''[[Media:$1|$1]]''' ফাইলটো আৰু তাৰ সমস্ত ইতিহাস বিলোপ কৰিব বিচাৰিছে ।",
'filedelete-intro-old' => "আপুনি '''[[Media:$1|$1]]''' ফাইলৰ [$4 $3, $2] সময়ৰ সংস্কৰণটো বিলোপ কৰিছে ।",
'filedelete-comment' => 'কাৰণ:',
'filedelete-submit' => 'বিলোপ কৰক',
'filedelete-success' => "'''$1''' ক বিলোপ কৰা হৈছে ।",
'filedelete-success-old' => "'''[[Media:$1|$1]]'''  ফাইলৰ $3, $2 ৰ সংস্কৰণটো বিলোপ কৰা হৈছে ।",
'filedelete-nofile' => "'''$1''' ৰ কোনো অস্তিত্ব নাই ।",
'filedelete-nofile-old' => "নিৰ্দেশিত বৈশিষ্ট থকা '''$1''' ৰ কোনো আৰ্কাইভ সংস্কৰণ নাই ।",
'filedelete-otherreason' => 'অন্য/অতিৰিক্ত কাৰণ:',
'filedelete-reason-otherlist' => 'অন্য কাৰণ',
'filedelete-reason-dropdown' => '*বিলোপৰ সাধাৰণ কাৰণসমূহ
** কপিৰাইট উলঙ্ঘন
** ফাইলৰ প্ৰতিলিপি',
'filedelete-edit-reasonlist' => 'বিলোপৰ কাৰণ সম্পাদনা',
'filedelete-maintenance' => 'চোৱা-চিতাৰ সময়ত ফাইলৰ বিলুপ্তি আৰু পুনৰুদ্ধাৰ সাময়িকভাৱে নিষ্ক্ৰিয় কৰা হৈছে ।',
'filedelete-maintenance-title' => 'ফাইল বিলোপ কৰিব নোৱাৰি',

# MIME search
'mimesearch' => 'MIME অনুসন্ধান',
'mimesearch-summary' => 'এই পৃষ্ঠাৰ জৰিয়তে ফাইলসমূহক MIME প্ৰকাৰ অনুসৰি চেকিব পৰা যায় ।
ইনপুট: contenttype/subtype, যেনে- <code>image/jpeg</code> ।',
'mimetype' => 'MIME প্ৰকাৰ:',
'download' => 'ডাউনল’ড কৰক',

# Unwatched pages
'unwatchedpages' => 'চকু নৰখা পৃষ্ঠাসমূহ',

# List redirects
'listredirects' => 'পুননিৰ্দেশনাৰ তালিকা',

# Unused templates
'unusedtemplates' => 'অব্যৱহৃত সাঁচসমূহ',
'unusedtemplatestext' => 'অন্য কোনো পৃষ্ঠাত নথকা {{ns:template}} নামস্থানৰ সকলো পৃষ্ঠা ইয়াত পাব ।
সাঁচসমূহ বিলোপ কৰাৰ আগতে সেইবোৰলৈ থকা সংযোগ পৰীক্ষা কৰক ।',
'unusedtemplateswlh' => 'অন্য সংযোগসমূহ',

# Random page
'randompage' => 'যিকোনো পৃষ্ঠা',
'randompage-nopages' => 'তলত দিয়া {{PLURAL:$2|নামস্থানত|নামস্থানসমূহত}} কোনো পৃষ্ঠা নাই: $1 ।',

# Random redirect
'randomredirect' => 'অনিৰ্ধাৰিত পুননিৰ্দেশ',
'randomredirect-nopages' => '"$1" নামস্থানত কোনো পুননিৰ্দেশ নাই ।',

# Statistics
'statistics' => 'পৰিসংখ্যা',
'statistics-header-pages' => 'পৃষ্ঠা পৰিসংখ্যা',
'statistics-header-edits' => 'পৰিসংখ্যা সম্পাদনা কৰক',
'statistics-header-views' => 'পৰিসংখ্যা দেখুৱাওক',
'statistics-header-users' => 'ব্যৱহাৰকাৰীৰ পৰিসংখ্যা',
'statistics-header-hooks' => 'অন্য পৰিসংখ্যা',
'statistics-articles' => 'বিষয়বস্তুৰ পৃষ্ঠা',
'statistics-pages' => 'পৃষ্ঠাসমূহ',
'statistics-pages-desc' => 'কথা-বতৰা পৃষ্ঠা, পুন:নিৰ্দেশিত পৃষ্ঠা আদি সহ এই ৱিকিৰ সকলো পৃষ্ঠা',
'statistics-files' => 'আপল’ড কৰা ফাইলসমূহ',
'statistics-edits' => '{{SITENAME}} স্থাপন কৰাৰেপৰা পৃষ্ঠা সম্পাদনাসমূহ',
'statistics-edits-average' => 'প্ৰতি পৃষ্ঠাৰ গড় সম্পাদনা',
'statistics-views-total' => 'সৰ্বমুঠ প্ৰদৰ্শন',
'statistics-views-total-desc' => 'অস্তিত্বহীন পৃষ্ঠা আৰু বিশেষ পৃষ্ঠাসমূহৰ দৰ্শন ইয়াত ভুক্ত নহয়',
'statistics-views-peredit' => 'সম্পাদনা প্ৰতি দৰ্শন',
'statistics-users' => 'পঞ্জীভূত [[Special:ListUsers|সদস্যসমূহ]]',
'statistics-users-active' => 'সক্ৰিয় সদস্য',
'statistics-users-active-desc' => 'শেষ {{PLURAL:$1|দিনত|$1 দিনত}} কোনো কাম কৰা সদস্যসমূহ',
'statistics-mostpopular' => 'সৰ্বোচ্চ দৰ্শন কৰা পৃষ্ঠাসমূহ',

'disambiguations' => 'দ্ব্যৰ্থতা-দূৰীকৰণ পৃষ্ঠাসমূহলৈ সংযোগ থকা পৃষ্ঠাসমূহ',
'disambiguationspage' => 'সাঁচ:দ্ব্যৰ্থতা-দূৰীকৰণ',
'disambiguations-text' => "তলৰ পৃষ্ঠাখনসমূহত '''দ্ব্যৰ্থতা দূৰীকৰণ পৃষ্ঠা'''ৰ লগত সংযোগ আছে ।
ইয়ে উপযুক্ত পৃষ্ঠাৰ লগত সংযোগ কৰিব পাৰে ।
[[MediaWiki:Disambiguationspage]]ৰ পৰা সংযোগ থকা কোনো সাঁচ ব্যৱহাৰ কৰিলে এখন পৃষ্ঠাক দ্ব্যৰ্থতা দূৰীকৰণ পৃষ্ঠা হিছাপে গণ্য কৰা হ’ব ।",

'doubleredirects' => 'দ্বি-পুনঃনিৰ্দেশিত',
'doubleredirectstext' => 'আন পুনৰ্নিদেশনা পৃষ্ঠালৈ পুনৰ্নিৰ্দেশিত পৃষ্ঠাসমূহ এই তালিকাত দিয়া হৈছে ।
প্ৰত্যেক পথালী শাৰীত প্ৰথম আৰু দ্বিতীয় পুনৰ্নিৰ্দেশনাৰ সংযোগৰ লগতে দ্বিতীয় পুনৰ্নিৰ্দেশনাৰ লক্ষ্য সংযোগ দিয়া আছে । এই লক্ষ্য সংযোগটো সাধাৰণতে "প্ৰকৃত" লক্ষ্য পৃষ্ঠা যাক প্ৰথম পুনৰ্নিৰ্দেশনাই আঙুলিয়াই দিয়ে ।
<del>Crossed out</del> ভৰ্তিসমূহ ঠিক কৰা হৈছে ।',
'double-redirect-fixed-move' => '[[$1]] ক স্থানান্তৰ কৰা হৈছে ।
এইটো এতিয়া [[$2]]লৈ পুনৰ্নিৰ্দেশিত হৈছে ।',
'double-redirect-fixed-maintenance' => '[[$1]] ৰ পৰা [[$2]] লৈ দ্বৈত পুনৰ্নিৰ্দেশনা ঠিক কৰি থকা হৈছে ।',
'double-redirect-fixer' => 'পুনঃনিৰ্দেশ মেৰামতকাৰী',

'brokenredirects' => 'ভঙা পুনৰ্নিৰ্দেশনাসমূহ',
'brokenredirectstext' => 'তলৰ পুনৰ্নিৰ্দেশনাসমূহে অস্তিত্বহীন পৃষ্ঠাক সংযোগ কৰিছে:',
'brokenredirects-edit' => 'সম্পাদনা কৰক',
'brokenredirects-delete' => 'বাতিল কৰক',

'withoutinterwiki' => 'ভাষাৰ সংযোগবিহীন পৃষ্ঠাসমূহ',
'withoutinterwiki-summary' => 'তলৰ পৃষ্ঠাসমূহ আন ভাষাৰ সংস্কৰণৰ লগত সংযুক্ত নহয় ।',
'withoutinterwiki-legend' => 'উপসৰ্গ',
'withoutinterwiki-submit' => 'দেখুৱাওক',

'fewestrevisions' => 'কমবাৰ সম্পাদনা কৰা পৃষ্ঠাসমূহ',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|বাইট|বাইট}}',
'ncategories' => '$1টা {{PLURAL:$1|শ্ৰেণী|শ্ৰেণী}}',
'nlinks' => '$1 {{PLURAL:$1|সংযোগ|সংযোগ}}',
'nmembers' => '{{PLURAL:$1|সদস্য|$1 সদস্যবৃন্দ}}',
'nrevisions' => '$1টা {{PLURAL:$1|সংশোধন|সংশোধন}}',
'nviews' => '$1 {{PLURAL:$1|টা দৰ্শন|টা দৰ্শন}}',
'nimagelinks' => '$1 {{PLURAL:$1|খন পৃষ্ঠাত|খন পৃষ্ঠাত}} ব্যৱহৃত',
'ntransclusions' => '$1 {{PLURAL:$1|খন পৃষ্ঠাত|খন পৃষ্ঠাত}} ব্যৱহৃত',
'specialpage-empty' => 'এই বিৱৰণৰ কোনো ফলাফল নাই ।',
'lonelypages' => 'অনাথ পৃষ্ঠা',
'lonelypagestext' => 'তলৰ পৃষ্ঠাসমূহ {{SITENAME}}ৰ কোনো পৃষ্ঠাৰ লগত সংযোগকৃত নহয় ।',
'uncategorizedpages' => 'অশ্ৰেণীকৃত পৃষ্ঠাসমূহ',
'uncategorizedcategories' => 'অশ্ৰেণীকৃত শ্ৰেণীসমূহ',
'uncategorizedimages' => 'অশ্ৰেণীকৃত ফাইলসমূহ',
'uncategorizedtemplates' => 'অশ্ৰেণীকৃত সাঁচসমূহ',
'unusedcategories' => 'অব্যৱহৃত শ্ৰেণীসমূহ',
'unusedimages' => 'অব্যৱহৃত ফাইলসমূহ',
'popularpages' => 'জনপ্ৰিয় পৃষ্ঠাসমূহ',
'wantedcategories' => 'কাম্য শ্ৰেণীসমূহ',
'wantedpages' => 'কাম্য পৃষ্ঠাসমূহ',
'wantedpages-badtitle' => 'ফলাফল তালিকাত অবৈধ শিৰোনামা: $1',
'wantedfiles' => 'কাম্য ফাইলসমূহ',
'wantedfiletext-cat' => "তলৰ ব্যৱহৃত ফাইলসমূহৰ অস্ত্বিত্ব নাই। বাহিৰা ভঁৰালত থকা অস্তিত্ব থকা ফাইলো তালিকাভুক্ত হৈ থাকিব পাৰে। তেনেকুৱা ফাইল <del>আঁতৰ কৰা হ'ব</del>। তাৰ উপৰিও পৃষ্ঠাত সংলগ্ন থকা অস্তিত্বহীন ফাইলৰ তালিকা [[:$1]]ত দিয়া হৈছে।",
'wantedfiletext-nocat' => "তলৰ ব্যৱহৃত ফাইলসমূহৰ অস্ত্বিত্ব নাই। বাহিৰা ভঁৰালত থকা অস্তিত্ব থকা ফাইলো তালিকাভুক্ত হৈ থাকিব পাৰে। তেনেকুৱা ফাইল <del>আঁতৰ কৰা হ'ব</del>।",
'wantedtemplates' => 'বিচৰা সাঁচসমূহ',
'mostlinked' => 'সৰ্বোচ্চ সংযোজিত পৃষ্ঠাসমূহ',
'mostlinkedcategories' => 'সৰ্বোচ্চ সংযোজিত শ্ৰেণীসমূহ',
'mostlinkedtemplates' => 'সৰ্বোচ্চ সংযোজিত সাঁচসমূহ',
'mostcategories' => 'সৰ্বোচ্চ শ্ৰেণীসমৃদ্ধ প্ৰবন্ধসমূহ',
'mostimages' => 'সৰ্বোচ্চ সংযোজিত ফাইলসমূহ',
'mostrevisions' => 'অধিকবাৰ সম্পাদনা কৰা পৃষ্ঠাসমূহ',
'prefixindex' => 'উপসৰ্গসহ সকলো পৃষ্ঠা',
'prefixindex-namespace' => 'উপসৰ্গ ($1 namespace) -ৰ সৈতে সকলো পৃষ্ঠা',
'shortpages' => 'চুটি পৃষ্ঠাসমূহ',
'longpages' => 'দীঘলীয়া পৃষ্ঠাসমূহ',
'deadendpages' => 'সংযোগবিহীন পৃষ্ঠাসমূহ',
'deadendpagestext' => 'তলৰ পৃষ্ঠাসমূহৰ {{SITENAME}}ৰ কোনো পৃষ্ঠাৰ লগত সংযোগ নাই ।',
'protectedpages' => 'সুৰক্ষিত পৃষ্ঠাসমূহ',
'protectedpages-indef' => 'কেৱল অনিৰ্দিষ্ট সুৰক্ষা',
'protectedpages-cascade' => 'কেৱল প্ৰপাতাকাৰ সুৰক্ষা',
'protectedpagestext' => 'তলৰ পৃষ্ঠাসমূহ অৱলুপ্তি বা স্থানান্তৰকৰণৰ পৰা সুৰক্ষিত',
'protectedpagesempty' => 'এই পাৰামিটাৰবোৰেৰে কোনো পৃষ্ঠা এতিয়া সুৰক্ষিত কৰা হোৱা নাই ।',
'protectedtitles' => 'সুৰক্ষিত শিৰোনামাসমূহ',
'protectedtitlestext' => 'তলৰ শিৰোনামাসমূহ দি পৃষ্ঠা সৃষ্টি কৰিব পৰা নাযাব',
'protectedtitlesempty' => 'এই পাৰামিটাৰবোৰেৰে কোনো শিৰোনামা এতিয়া সুৰক্ষিত কৰা হোৱা নাই ।',
'listusers' => 'সদস্য তালিকা',
'listusers-editsonly' => 'কেৱল সম্পাদনা কৰা সদস্যকহে দেখুৱাওক',
'listusers-creationsort' => 'সৃষ্টিৰ তাৰিখমতে সজাওক',
'usereditcount' => '$1 {{PLURAL:$1|টা সম্পাদনা|টা সম্পাদনা}}',
'usercreated' => '$1 তাৰিখে $2 সময়ত {{GENDER:$3|য়ে সৃষ্টি কৰিছে}}',
'newpages' => 'নতুন পৃষ্ঠা',
'newpages-username' => 'সদস্যনাম:',
'ancientpages' => 'আটাইতকৈ পুৰণি পৃষ্ঠাসমূহ',
'move' => 'স্থানান্তৰ কৰক',
'movethispage' => 'এই পৃষ্ঠাটো স্থানান্তৰ কৰক',
'unusedimagestext' => 'তলৰ ফাইলসমূহ আছে কিন্তু কোনো পৃষ্ঠাৰ অন্তৰ্গত নহয় ।
অনুগ্ৰহ কৰি মন কৰিব যে প্ৰত্যক্ষ URL থকা কোনো পৃষ্ঠা আন ৱেবচাইটৰ লগত সংযোগ হৈ থাকিব পাৰে, সেয়ে সক্ৰিয়ভাৱে ব্যৱহাৰ হৈ থকা সত্ত্বেও ইয়াত তালিকাভুক্ত হ’ব পাৰে ।',
'unusedcategoriestext' => 'তলৰ শ্ৰেণী পৃষ্ঠাসমূহৰ অস্তিত্ব আছে, কিন্তু আন কোনো পৃষ্ঠা বা শ্ৰেণীৰদ্বাৰা ব্যৱহৃত নহয় ।',
'notargettitle' => 'কোনো লক্ষ্য নাই',
'notargettext' => 'এই কামটো কৰাৰ বাবে আপুনি কোনো লক্ষ্য পৃষ্ঠা বা সদস্য নিৰ্বাচন কৰা নাই ।',
'nopagetitle' => 'এনে কোনো লক্ষ্য পৃষ্ঠা নাই',
'nopagetext' => 'আপুনি নিৰ্বাচন কৰা লক্ষ্য পৃষ্ঠাৰ কোনো অস্তিত্ব নাই ।',
'pager-newer-n' => '{{PLURAL:$1|নতুনতৰ ১টি|নতুনতৰ $1টি}}',
'pager-older-n' => '{{PLURAL:$1|পুৰণতৰ ১|পুৰণতৰ $1}}',
'suppress' => 'অমনোযোগ',
'querypage-disabled' => 'কাৰ্য্যগত কাৰণত এই বিশেষ পৃষ্ঠাখন নিষ্ক্ৰিয় কৰা হৈছে ।',

# Book sources
'booksources' => 'গ্ৰন্থৰ উৎস সমূহ',
'booksources-search-legend' => 'গ্ৰন্থ উৎস অনুসন্ধান',
'booksources-go' => 'যাওক',
'booksources-text' => 'নতুন আৰু পুৰণি কিতাপ বেচা চাইটসমূহৰ সংযোগ তলত দিয়া হৈছে, তাত আপুনি বিচৰা কিতাপসমূহৰ বিষয়ে অধিক তথ্যও পাব পাৰে:',
'booksources-invalid-isbn' => 'আপুনি দিয়া ISBN সম্ভৱতঃ অবৈধ; মূল উৎসৰ পৰা তুলি লওঁতে হ’ব পৰা ভুলৰ বাবে পৰীক্ষা কৰক ।',

# Special:Log
'specialloguserlabel' => 'প্ৰদৰ্শনকাৰী:',
'speciallogtitlelabel' => 'গন্তব্য (title or user):',
'log' => "অভিলেখ/ল'গ",
'all-logs-page' => 'সকলোবোৰ ৰাজহুৱা সূচী',
'alllogstext' => '{{SITENAME}} সকলো ল’গৰ সন্মিলিত প্ৰদৰ্শন ।
আপুনি ল’গৰ প্ৰকাৰ, সদস্যৰ নাম বা পৃষ্ঠাখনৰ নাম নিৰ্বাচন কৰি প্ৰদৰ্শনটোৰ আকাৰ সৰু কৰিব পাৰে ।',
'logempty' => 'কোনো মিল থকা আইটেম লগত নাই ।',
'log-title-wildcard' => 'এই পাঠেৰে আৰম্ভ হোৱা শিৰোনামাসমূহ অনুসন্ধান কৰক',
'showhideselectedlogentries' => "নিৰ্বাচিত ল'গ ভুক্তি দেখুৱাওক/লুকুৱাওক",

# Special:AllPages
'allpages' => 'সকলোবোৰ পৃষ্ঠা',
'alphaindexline' => '$1 -ৰ পৰা $2 -লৈ',
'nextpage' => 'পৰৱৰ্তী পৃষ্ঠা ($1)',
'prevpage' => 'পিছৰ পৃষ্ঠা($1)',
'allpagesfrom' => 'ইয়াৰে আৰম্ভ হোৱা পৃষ্ঠাবোৰ দেখুৱাওক:',
'allpagesto' => 'সেই পৃষ্ঠা দেখুৱাওক যাৰ শেষ:',
'allarticles' => 'সকলো পৃষ্ঠা',
'allinnamespace' => 'সকলোবোৰ পৃষ্ঠা ($1 নামস্থান)',
'allnotinnamespace' => 'সকলোবোৰ পৃষ্ঠা ($1 নামস্থানত নথকা)',
'allpagesprev' => 'আগৰ',
'allpagesnext' => 'পৰৱৰ্তী',
'allpagessubmit' => 'যাওক',
'allpagesprefix' => 'এই উপশব্দৰে আৰম্ভ হোৱা পৃষ্ঠা দেখুৱাওক:',
'allpagesbadtitle' => 'আপুনি দিয়া পৃষ্ঠাটোৰ শিৰোণামা অবৈধ বা তাত এটা আন্তৰ্ভাষিক বা আন্তৰ্ৱিকি উপসৰ্গ আছে । ইয়াত এক বা ততোধিক বৰ্ণ থাকিব পাৰে যাক শিৰোণামাত ব্যৱহাৰ কৰিব নোৱাৰি ।',
'allpages-bad-ns' => '{{SITENAME}}ত কোনো "$1" নামস্থান নাই ।',
'allpages-hide-redirects' => 'পুনঃনিৰ্দেশ লুকুৱাওক',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => "আপুনি এই পৃষ্ঠাৰ আগেয়ে জমা কৰি থোৱা বা কেশ্ব‌ড সংস্কৰণ এটা চাই আছে যিটো $1 পৰ্যন্ত পুৰণা হ'ব পাৰে।",
'cachedspecial-viewing-cached-ts' => "আপুনি এই পৃষ্ঠাৰ আগেয়ে জমা কৰি থোৱা বা কেশ্ব‌ড সংস্কৰণ এটা চাই আছে যিখন সম্পূৰ্ণভাৱে প্ৰকৃত নহ'বও পাৰে।",
'cachedspecial-refresh-now' => 'শেহতীয়া পাঠ্য',

# Special:Categories
'categories' => 'শ্ৰেণী',
'categoriespagetext' => 'এই {{PLURAL:$1|বিষয়শ্ৰেণীত|বিষয়শ্ৰেণীসমূহত}}  পৃষ্ঠা বা মিডিয়া ফাইল আছে ।
[[Special:UnusedCategories|অব্যৱহৃত শ্ৰেণীসমূহ]]  ইয়াত দেখুওৱা হোৱা নাই ।
অধিক তথ্যৰ বাবে [[Special:WantedCategories|আৱশ্যক শ্ৰেণীসমূহ]] চাওক ।',
'categoriesfrom' => 'ইয়াৰে আৰম্ভ হোৱা শ্ৰেণীসমূহ দেখুৱাওক:',
'special-categories-sort-count' => 'গণনাৰ ভিত্তিত সজাওক',
'special-categories-sort-abc' => 'বৰ্ণানুক্ৰমে সজাওক',

# Special:DeletedContributions
'deletedcontributions' => 'ৰদ কৰা সদস্যৰ বৰঙণিসমূহ',
'deletedcontributions-title' => 'ৰদ কৰা সদস্যৰ বৰঙণিসমূহ',
'sp-deletedcontributions-contribs' => 'বৰঙণিসমূহ',

# Special:LinkSearch
'linksearch' => 'বাহ্যিক সংযোগ অনুসন্ধান',
'linksearch-pat' => 'অনুসন্ধান আৰ্হি:',
'linksearch-ns' => 'নামস্থান:',
'linksearch-ok' => 'অনুসন্ধান',
'linksearch-text' => 'ৱাইল্ডকাৰ্ডসমূহ যেনে "*.wikipedia.org" ব্যৱহাৰ কৰিব পাৰি।
অন্তত এটা উচ্চ-স্তৰৰ ডমেইনৰ প্ৰয়োজন, উদাহৰণস্বৰূপ "*.org"। <br />
সমৰ্থিত প্ৰটোকলসমূহ: <code>$1</code> (ইয়াৰ এটাকো নিজৰ সন্ধান যোগ নকৰিব)।',
'linksearch-line' => '$2 পৰা $1 সংযোগ কৰা হৈছে',
'linksearch-error' => "ৱাইল্ডকাৰ্ড কেৱল হ'ষ্টনামৰ আৰম্ভণিতহে দেখা যাব ।",

# Special:ListUsers
'listusersfrom' => 'ইয়াৰে আৰম্ভ হোৱা ব্যৱহাৰকাৰী সকল দেখুৱাওক:',
'listusers-submit' => 'দেখুৱাওক',
'listusers-noresult' => 'ব্যৱহাৰকাৰী বিচাৰি পোৱা নগ’ল',
'listusers-blocked' => '(বাৰণ কৰা)',

# Special:ActiveUsers
'activeusers' => 'সক্ৰিয় ব্যবহাৰকাৰীৰ তালিকা',
'activeusers-intro' => 'যোৱা  {{PLURAL:$1|দিন|দিন}}ৰ ভিতৰত অৱদান আগবঢ়োৱা ব্যৱহাৰকাৰীৰ তালিকা',
'activeusers-count' => 'যোৱা {{PLURAL:$3|দিনত|$3 দিনত}} সৰ্বমুঠ {{PLURAL:$1|সম্পাদনাৰ|সম্পাদনাৰ}} সংখ্যা $1',
'activeusers-from' => 'ইয়াৰে আৰম্ভ হোৱা ব্যৱহাৰকাৰী সকল দেখুৱাওক:',
'activeusers-hidebots' => 'বট নেদেখুৱাব',
'activeusers-hidesysops' => 'প্ৰশাসক নেদেখুৱাব',
'activeusers-noresult' => "কোনো সদস্য পোৱা নগ'ল।",

# Special:Log/newusers
'newuserlogpage' => 'সদস্যৰ সৃষ্টি অভিলেখ',
'newuserlogpagetext' => 'এইখন এখন সদস্য সৃষ্টিৰ ল’গ।',

# Special:ListGroupRights
'listgrouprights' => 'ব্যৱহাৰকাৰী গোটৰ অধিকাৰ',
'listgrouprights-summary' => 'এই ৱিকিত থকা গোটসমূহৰ তালিকা সেইবোৰৰ প্ৰৱেশাধিকাৰসহ তলত দিয়া হ’ল ।
সুকীয়া অধিকাৰ সম্পৰ্কে [[{{MediaWiki:Listgrouprights-helppage}}|অধিক তথ্য]] থাকিব পাৰে ।',
'listgrouprights-key' => '* <span class="listgrouprights-granted">অনুমোদিত অধিকাৰ</span>
* <span class="listgrouprights-revoked">প্ৰত্যাহাৰ কৰা অধিকাৰ</span>',
'listgrouprights-group' => 'গোট',
'listgrouprights-rights' => 'অধিকাৰসমূহ',
'listgrouprights-helppage' => 'Help: গোটৰ অধিকাৰ',
'listgrouprights-members' => '(সদস্যবৃন্দ তালিকা)',
'listgrouprights-addgroup' => '{{PLURAL:$2|গোট|গোটসমূহ}} যোগ কৰক: $1',
'listgrouprights-removegroup' => '{{PLURAL:$2|গোট|গোটসমূহ}} আঁতৰাওক: $1',
'listgrouprights-addgroup-all' => 'সমস্ত গোট সংযোগ কৰক',
'listgrouprights-removegroup-all' => 'সমস্ত গোট আঁতৰাওক',
'listgrouprights-addgroup-self' => '{{PLURAL:$2|গোট|গোটসমূহ}} নিজৰ একাউণ্টত যোগ কৰক: $1',
'listgrouprights-removegroup-self' => '{{PLURAL:$2|গোট|গোটসমূহ}} নিজৰ একাউণ্টৰপৰা আঁতৰাওক: $1',
'listgrouprights-addgroup-self-all' => 'সকলো গোট নিজৰ একাউণ্টত যোগ কৰক',
'listgrouprights-removegroup-self-all' => 'নিজৰ একাউণ্টৰপৰা সকলো গোট আঁতৰাওক',

# E-mail user
'mailnologin' => 'পাওঁতাৰ ঠিকনা নাই',
'mailnologintext' => 'আন সদস্যক ই-মেইল পঠিয়াবলৈ আপুনি [[Special:UserLogin|লগ্‌ ইন]] কৰিব লাগিব আৰু আপোনাৰ [[Special:Preferences|পছন্দসমূহত]] এটা বৈধ ই-মেইল ঠিকনা থাকিব লাগিব ।',
'emailuser' => 'এই সদস্যজনলৈ ই-মেইল পঠিয়াওক',
'emailpage' => 'ই-পত্ৰ ব্যৱহাৰকাৰী',
'emailpagetext' => 'তলৰ প্ৰপত্ৰখন ব্যৱহাৰ কৰি আপুনি এই সদস্যজনলৈ ই-মেইল পঠাব পাৰে ।
আপুনি [[Special:Preferences|আপোনাৰ সদস্য পছন্দসমূহ]]ত প্ৰৱেশ কৰা ই-মেইল ঠিকনাটো প্ৰেৰকৰ ঠিকনা হিছাপে দেখা যাব, যাতে মেইলৰ প্ৰাপকে আপোনাক উত্তৰ দিব পাৰে ।',
'usermailererror' => 'মেইল বিষয়বস্তুৰ ত্ৰুটি:',
'defemailsubject' => '"$1" সদস্যৰ পৰা {{SITENAME}} ই-মেইল',
'usermaildisabled' => 'ব্যৱহাৰকাৰীৰ ই-মেইল নিষ্ক্ৰিয়',
'usermaildisabledtext' => 'আপুনি এই ৱিকিত আন সদস্যলৈ ই-পত্ৰ পঠিয়াব নোৱাৰে',
'noemailtitle' => 'কোনো ই-পত্ৰ ঠিকনা নাই',
'noemailtext' => 'এই সদস্যজনে কোনো বৈধ ই-পত্ৰ ঠিকনা নিৰ্বাচন কৰা নাই ।',
'nowikiemailtitle' => 'কোনো ই-পত্ৰ অনুমোদিত নহয়',
'nowikiemailtext' => 'এই সদস্যজনে আন সদস্যৰপৰা ই-পত্ৰ পাবলৈ বিচৰা নাই ।',
'emailnotarget' => 'পাওঁতাৰ অস্তিত্বহীন বা অবৈধ সদস্যনাম',
'emailtarget' => 'পাওঁতাৰ সদস্যনাম ভৰ্তি কৰক',
'emailusername' => 'সদস্যনাম:',
'emailusernamesubmit' => 'দাখিল কৰক',
'email-legend' => 'আন এজন {{SITENAME}} সদস্যলৈ ই-পত্ৰ পঠিয়াওক',
'emailfrom' => 'প্ৰেৰক',
'emailto' => 'প্ৰাপক:',
'emailsubject' => 'বিষয়',
'emailmessage' => 'বাৰ্তা',
'emailsend' => 'প্ৰেৰণ কৰক',
'emailccme' => 'মোৰ বাৰ্তাৰ এটা প্ৰতিলিপি মোলৈ ই-মেইল কৰক',
'emailccsubject' => '$1ক পঠিওৱা আপোনাৰ বাৰ্তাৰ প্ৰতিলিপি: $2',
'emailsent' => 'ই-মেইল প্ৰেৰণ কৰা হ’ল',
'emailsenttext' => 'আপোনাৰ ই-মেইল বাৰ্তা প্ৰেৰণ কৰা হৈছে',
'emailuserfooter' => 'এই ই-পত্ৰ {{SITENAME}} চাইটৰ "ই-পত্ৰ সদস্য" সুবিধা ব্যৱহাৰ কৰি $1-এ $2-লৈ পঠিয়াইছিল ।',

# User Messenger
'usermessage-summary' => 'ব্যৱস্থা বাৰ্তা দিয়ক',
'usermessage-editor' => 'ব্যৱস্থাৰ বাতৰি দিওঁতা',

# Watchlist
'watchlist' => 'মোৰ লক্ষ্য-তালিকা',
'mywatchlist' => 'মোৰ লক্ষ্য-তালিকা',
'watchlistfor2' => '$1 ৰ কাৰণে($2)',
'nowatchlist' => 'আপোনাৰ নিৰীক্ষণ তালিকাত একো নাই ।',
'watchlistanontext' => 'আপোনাৰ লক্ষ্য তালিকাত থকা বস্তুবোৰ চাবলৈ বা সম্পাদনা কৰিবলৈ অনুগ্ৰহ কৰি $1 কৰক।',
'watchnologin' => 'প্ৰৱেশ কৰা নাই',
'watchnologintext' => 'নিৰীক্ষণ তালিকা পৰিৱৰ্তন কৰিবলৈ আপুনি আগতে [[Special:UserLogin|প্ৰৱেশ]] কৰিব লাগিব ।',
'addwatch' => 'লক্ষ্য-তালিকাত অন্তৰ্ভুক্ত কৰক',
'addedwatchtext' => "আপোনাৰ [[Special:Watchlist|লক্ষ্য তালিকাত ]] \"[[:\$1]]\" অন্তৰ্ভুক্ত কৰা হ'ল।
ভৱিষ্যতে ইয়াত হোৱা সাল-সলনি আপুনি আপোনাৰ লক্ষ্য তালিকাত দেখিব, লগতে [[Special:RecentChanges|সাম্প্ৰতিক সাল-সলনিৰ তালিকাত]] এই পৃষ্ঠাখন '''গাঢ়''' আখৰত দেখিব যাতে আপুনি সহজে ধৰিব পাৰে।",
'removewatch' => 'লক্ষ্য-তালিকাৰ পৰা আঁতৰাওক',
'removedwatchtext' => '"[[:$1]]" পৃষ্ঠাখন [[Special:Watchlist|আপোনাৰ লক্ষ্য-তালিকা]]ৰ পৰা আতৰোৱা হৈছে ।',
'watch' => 'চকু ৰাখক',
'watchthispage' => 'এই পৃষ্ঠাটো লক্ষ্য কৰক',
'unwatch' => 'চকু দিব নালাগে',
'unwatchthispage' => 'চকু দিয়া বন্ধ কৰক',
'notanarticle' => 'বিষয়বস্তু পৃষ্ঠা নহয়',
'notvisiblerev' => 'অন্য কোনো সদস্যই কৰা সংশোধনী বিলোপ কৰা হৈছে',
'watchnochange' => 'আপুনি চকু ৰখা আইটেমসমূহ প্ৰদৰ্শিত সময়সীমাৰ ভিতৰত সম্পাদনা কৰা হোৱা নাই ।',
'watchlist-details' => 'আলোচনা পৃষ্ঠা সমূহ লেখত নধৰি {{PLURAL:$1|$1 খন পৃষ্ঠা|$1 খন পৃষ্ঠা}} আপোনাৰ লক্ষ্য-তালিকাত আছে ।',
'wlheader-enotif' => '* ই-পত্ৰ জাননী সক্ৰিয় কৰা হৈছে ।',
'wlheader-showupdated' => "* আপোনাৰ শেষ পৰিদৰ্শনৰ পিছত হোৱা পৰিৱৰ্তনসমূহ '''গাঢ়''' আখৰত দেখুওৱা হৈছে",
'watchmethod-recent' => 'লক্ষ্য কৰা পৃষ্ঠাসমূহ শেহতীয়া সম্পাদনাৰ বাবে পৰীক্ষা কৰা হৈছে',
'watchmethod-list' => 'লক্ষ্য কৰা পৃষ্ঠাসমূহ শেহতীয়া সম্পাদনাৰ বাবে পৰীক্ষা কৰা হৈছে',
'watchlistcontains' => 'আপোনাৰ লক্ষ্য-তালিকাত $1 খন {{PLURAL:$1|পৃষ্ঠা|পৃষ্ঠা}} আছে ।',
'iteminvalidname' => "'$1' আইটেমটোৰ লগত সমস্যা হৈছে, অবৈধ নাম...",
'wlnote' => "তলত {{PLURAL:$1| হ'ল সৰ্বশেষ পৰিৱৰ্তন|হ'ল সৰ্বশেষ '''$1''' পৰিৱৰ্তনসমূহ}} সৰ্বশেষ {{PLURAL:$2|ঘন্টা|'''$2''' ঘন্টা}}, $3, $4 -ৰ হিচাপে।",
'wlshowlast' => 'যোৱা $1 ঘণ্টা $2 দিন $3 চাওক',
'watchlist-options' => 'লক্ষ্য-তালিকা পছন্দসমূহ',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'চকু দিয়া হৈছে.....',
'unwatching' => 'আঁতৰোৱা হৈ আছে.....',
'watcherrortext' => '"$1"ৰ বাবে আপোনাৰ নিৰীক্ষণ তালিকাৰ ছেটিং সলনি কৰোঁতে এটা সমস্যাই দেখা দিছে ।',

'enotif_mailer' => '{{SITENAME}} জাননী ই-পত্ৰ প্ৰেৰক',
'enotif_reset' => 'সকলো পৃষ্ঠা পৰিদৰ্শিত বুলি চিহ্নিত কৰক',
'enotif_newpagetext' => 'এইখন এখন নতুন পৃষ্ঠা।',
'enotif_impersonal_salutation' => '{{SITENAME}} সদস্য',
'changed' => 'সলোৱা হৈছে',
'created' => 'সৃষ্টি কৰা হ’ল',
'enotif_subject' => '{{SITENAME}}ৰ $PAGETITLE পৃষ্ঠাখন $PAGEEDITORৰ দ্বাৰা $CHANGEDORCREATED',
'enotif_lastvisited' => 'আপোনাৰ শেষ পৰিদৰ্শনৰ পিছত হোৱা সকলো সালসলনিৰ বাবে $1 চাওক ।',
'enotif_lastdiff' => 'এই পৰিৱৰ্তনটো চাবৰ বাবে $1 চাওক ।',
'enotif_anon_editor' => 'বেনামী সদস্য $1',
'enotif_body' => 'প্ৰিয় $WATCHINGUSERNAME,


{{SITENAME}}ৰ $PAGETITLE শিৰোনামাৰ পৃষ্ঠাখন $PAGEEDITDATE তাৰিখে $PAGEEDITORৰ দ্বাৰা $CHANGEDORCREATED। সাম্প্ৰতিক সংশোধনৰ বাবে $PAGETITLE_URL চাওক।

$NEWPAGE

সম্পাদকৰ সাৰাংশ: $PAGESUMMARY $PAGEMINOREDIT

সম্পাদকজনৰ লগত যোগাযোগ:
মেইল: $PAGEEDITOR_EMAIL
ৱিকি: $PAGEEDITOR_WIKI

আপুনি এই পৃষ্ঠাখন নোচোৱালৈকে আন সালসলনিৰ কোনো জাননী দিয়া নহ’ব ।
আপুনি আপোনাৰ লক্ষ্য-তালিকাৰ পৃষ্ঠাবোৰৰ জাননী ফ্লেগ পূৰ্বৰ অৱস্থালৈও ঘূৰাই নিব পাৰে ।

আপোনাৰ {{SITENAME}}ৰ জাননী ব্যৱস্থা

--
আপোনাৰ ই-মেইল জাননী ছেটিং সলনি কৰিবলৈ এইখন চাওক
{{canonicalurl:{{#special:Preferences}}}}

আপোনাৰ লক্ষ্য-তালিকাৰ ছেটিং সলনি কৰিবলৈ এইখন চাওক
{{canonicalurl:{{#special:EditWatchlist}}}}

আপোনাৰ লক্ষ্য-তালিকাৰ পৰা পৃষ্ঠা বিলোপ কৰিবলৈ এইখন চাওক
$UNWATCHURL

প্ৰতিক্ৰিয়া আৰু অধিক সহযোগিতাৰ বাবে:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'পৃষ্ঠা বিলোপ কৰক',
'confirm' => 'নিশ্চিত কৰক',
'excontent' => 'বিষয়বস্তু আছিল: "$1"',
'excontentauthor' => 'বিষয়বস্তু আছিল: "$1" (আৰু একমাত্ৰ অৱদানকাৰী আছিল "[[Special:Contributions/$2|$2]]")',
'exbeforeblank' => 'খালী কৰাৰ আগেয়ে বিষয়বস্তু আছিল: $1',
'exblank' => 'পৃষ্ঠা খালী আছিল',
'delete-confirm' => '"$1" বিলোপ কৰক',
'delete-legend' => 'বিলোপ কৰক',
'historywarning' => "'''সাৱধান:''' আপুনি বিলোপ কৰিব বিচৰা পৃষ্ঠাখনৰ ইতিহাসত প্ৰায় {{PLURAL:$1|সংস্কৰণ|সংস্কৰণ}} আছে:",
'confirmdeletetext' => 'আপুনি পৃষ্ঠা এটা তাৰ ইতিহাসৰ সৈতে বিলোপ কৰিব ওলাইছে।
অনুগ্ৰহ কৰি নিশ্চিত কৰক যে এয়া [[{{MediaWiki:Policy-url}}|নীতিসম্মত]]। লগতে আপুনি ইয়াৰ পৰিণাম জানে আৰু আপুনি এয়া কৰিব বিচাৰিছে।',
'actioncomplete' => 'কাৰ্য সম্পূৰ্ণ',
'actionfailed' => "কাৰ্য বিফল হ'ল",
'deletedtext' => '"$1" ক বিলোপন কৰা হৈছে।
সাম্প্ৰতিক বিলোপনসমূহৰ তালিকা চাবলৈ $2 চাওক।',
'dellogpage' => 'বাতিল কৰা সূচী',
'dellogpagetext' => "তলত সাম্প্ৰতিক বিলোপনৰ তালিকা দিয়া হ'ল ।",
'deletionlog' => 'বাতিল কৰা সূচী',
'reverted' => "পূৰ্ববৰ্তী সংস্কৰণলৈ উভতি যোৱা হ'ল",
'deletecomment' => 'কাৰণ:',
'deleteotherreason' => 'আন/অতিৰিক্ত কাৰণ:',
'deletereasonotherlist' => 'আন কাৰণ:',
'deletereason-dropdown' => '* অৱলুপ্তিৰ সাধাৰণ কাৰণসমূহ
** লেখকৰ অনুৰোধ
** কপিৰাইট উলঙ্ঘন
** অসভ্যালি',
'delete-edit-reasonlist' => 'অপসাৰণ কৰা কাৰণ সম্পাদনা কৰক',
'delete-toobig' => 'এই পৃষ্ঠাখনৰ সম্পাদনা ইতিহাস অতি দীঘল, $1 {{PLURAL:$1|টা সংশোধনৰো|টা সংশোধনৰো}} বেছি ।
{{SITENAME}}ৰ আকস্মিক ক্ষতি ৰোধ কৰিবলৈ এনে পৃষ্ঠাৰ ইতিহাস বিলোপ কৰাত সীমাবদ্ধতা আৰোপ কৰা হৈছে ।',
'delete-warning-toobig' => 'এই পৃষ্ঠাখনৰ সম্পাদনা ইতিহাস অতি দীঘল, $1 {{PLURAL:$1|টা সংশোধনৰো|টা সংশোধনৰো}} বেছি ।
ইয়াক বিলোপ কৰিলে {{SITENAME}} ৰ তথ্যভঁৰালৰ কাৰ্য্যকাৰীতাত সমস্যা হ’ব পাৰে;
সাৱধানেৰে আগ বাঢ়ক ।',

# Rollback
'rollback' => 'সম্পাদনা পূৰ্ববৎ কৰক',
'rollback_short' => 'পূৰ্ববৎ কৰক',
'rollbacklink' => 'পূৰ্ববৎ কৰক',
'rollbackfailed' => 'পূৰ্ববৎ ব্যৰ্থ',
'cantrollback' => 'পূৰ্বৰ অৱস্থালৈ ঘূৰাই নিব নোৱাৰি;
শেষৰ সম্পাদকজন এই পৃষ্ঠাৰ একমাত্ৰ লেখক ।',
'alreadyrolled' => "[[User:$2|$2]] ([[User talk:$2|আলোচনা]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]])এ কৰা [[:$1]]ৰ শেষ সম্পাদনা পূৰ্বাৱস্থালৈ ঘূৰাই নিব নোৱাৰি; কোনোবাই ইতিমধ্যে পৃষ্ঠাখন সম্পাদনা বা ৰ'লবেক কৰিছে ।

[[User:$3|$3]] ([[User talk:$3|আলোচনা]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]])ই এই পৃষ্ঠাৰ শেষ সম্পাদনা কৰিছিল ।",
'editcomment' => "সম্পাদনাৰ সাৰাংশ আছিল: \"''\$1''\"।",
'revertpage' => '[[Special:Contributions/$2|$2]] ([[User talk:$2|কথা-বতৰা]])ৰ সম্পাদনাসমূহ [[User:$1|$1]]য়ে কৰা শেষ সংশোধনলৈ ঘূৰাই নিয়া হৈছে ।',
'revertpage-nouser' => '(সদস্যনাম বিলোপিত) য়ে কৰা সম্পাদনা [[User:$1|$1]] য়ে কৰা শেষ সংশোধনীলৈ ঘূৰাই নিয়া হৈছে ।',
'rollback-success' => '$1 ৰ সম্পাদনাসমূহ পূৰ্বৰ অৱস্থালৈ ঘূৰাই নিয়া হৈছে;
পৃষ্ঠাখন $2 য়ে কৰা শেষ সংশোধনীলৈ ঘূৰাই নিয়া হৈছে ।',

# Edit tokens
'sessionfailure-title' => 'ছেছন বিফল',
'sessionfailure' => 'আপোনাৰ লগ-ইন ছেছনত সম্ভৱত: কোনো সমস্যা হৈছে;
ছেছন হাইজেকিং প্ৰতিৰোধ কৰিবলৈ এই কামটো বাতিল কৰা হৈছে ।
অনুগ্ৰহ কৰি আগৰ পৃষ্ঠালৈ ঘূৰি গৈ ৰিল’ড কৰি পুনৰ চেষ্টা কৰক ।',

# Protect
'protectlogpage' => 'সুৰক্ষা সূচী',
'protectlogtext' => 'পৃষ্ঠা সুৰক্ষাৰ সালসলনিসমূহৰ তালিকা তলত দিয়া হ’ল ।
বৰ্তমান কাৰ্য্যৰত পৃষ্ঠা সুৰক্ষাসমূহৰ বাবে [[Special:ProtectedPages|সুৰক্ষিত পৃষ্ঠাৰ তালিকা]] চাওক ।',
'protectedarticle' => 'সুৰক্ষিত "[[$1]]"',
'modifiedarticleprotection' => '"[[$1]]"-ৰ সুৰক্ষাৰ স্তৰ সলনি কৰা হৈছে',
'unprotectedarticle' => '"[[$1]]"ৰ সুৰক্ষা আঁতৰ কৰা হৈছে',
'movedarticleprotection' => 'সুৰক্ষা ছেটিং "[[$2]]" ৰ পৰা "[[$1]]" লৈ স্থানান্তৰ কৰা হ’ল',
'protect-title' => '"$1"ৰ সুৰক্ষাৰ স্তৰ সলনি কৰক',
'protect-title-notallowed' => '"$1"ৰ সুৰক্ষাৰ স্তৰ চাওক',
'prot_1movedto2' => '$1 ক $2 লৈ স্থানান্তৰিত কৰা হল',
'protect-badnamespace-title' => 'অসুৰক্ষিত নামস্থান',
'protect-badnamespace-text' => 'এই নামস্থানৰ পৃষ্ঠাসমূহ সুৰক্ষিত কৰিব নোৱাৰি।',
'protect-legend' => 'সুৰক্ষা নিশ্চিত কৰক',
'protectcomment' => 'কাৰণ:',
'protectexpiry' => 'সময় শেষ:',
'protect_expiry_invalid' => 'শেষ সময় ভুল ।',
'protect_expiry_old' => 'শেষ সময় পাৰ হৈ গৈছে।',
'protect-unchain-permissions' => 'অধিক সুৰক্ষা বিকল্প মুকলি কৰক',
'protect-text' => "'''$1''' পৃষ্ঠাটোৰ সুৰক্ষা-স্তৰ আপুনি চাব আৰু সলনি কৰিব পাৰে।",
'protect-locked-blocked' => "বাধাপ্ৰাপ্ত অৱস্থাত আপুনি সুৰক্ষা স্তৰ সলাব নোৱাৰে ।
'''$1''' পৃষ্ঠাৰ বৰ্তমান ছেটিং সমূহ ইয়াত দিয়া হ’ল:",
'protect-locked-dblock' => "এটা সক্ৰিয় অথ্যভঁৰাল প্ৰতিবন্ধকৰ বাবে সুৰক্ষা স্তৰ সলাব নোৱাৰি ।
'''$1''' পৃষ্ঠাৰ বৰ্তমান ছেটিং সমূহ ইয়াত দিয়া হ’ল:",
'protect-locked-access' => "এই পৃষ্ঠাটোৰ সুৰক্ষা-স্তৰ সলনি কৰাৰ অনুমতি আপোনাক দিয়া হোৱা নাই ।
'''$1''' পৃষ্ঠাখনৰ সুৰক্ষা-স্তৰৰ গাঁথনি ইয়াত আছে:",
'protect-cascadeon' => 'এই পৃষ্ঠাখন বৰ্তমান সুৰক্ষিত কাৰণ ই {{PLURAL:$1|খন পৃষ্ঠাৰ|খন পৃষ্ঠাৰ}} অন্তৰ্গত য’ত প্ৰপাতাকাৰ সুৰক্ষা সক্ৰিয় ।
আপুনি এই পৃষ্ঠাৰ সুৰক্ষা স্তৰ সলাব পাৰে কিন্তু সি প্ৰপাতাকাৰ সুৰক্ষাত কোনো প্ৰভাৱ নেপেলায ।',
'protect-default' => 'সকলো ব্যবহাৰকাৰীক অনুমতি দিয়ক',
'protect-fallback' => '"$1" অনুমতি লাগিব',
'protect-level-autoconfirmed' => 'নতুন বা নথিভুক্ত নোহোৱা সদস্যক বাৰণ কৰক',
'protect-level-sysop' => 'কেৱল প্ৰশাসকবৃন্দৰ বাবে',
'protect-summary-cascade' => 'প্ৰপাতাকাৰ/কেচ্‌কেডিং',
'protect-expiring' => ' $1 (UTC) ত সময় শেষ হব',
'protect-expiring-local' => 'ম্যাদ উকলিব $1',
'protect-expiry-indefinite' => 'অনিৰ্দিষ্ট',
'protect-cascade' => 'এই পৃষ্ঠাটোৰ লগত জৰিত সকলো পৃষ্ঠা সুৰক্ষিত কৰক (সুৰক্ষা জখলা)',
'protect-cantedit' => 'আপুনি এই পৃষ্ঠাটোৰ সুৰক্ষা-স্তৰ সলনি কৰিব নোৱৰে, কাৰণ আপোনাক সেই অনুমতি দিয়া হোৱা নাই।',
'protect-othertime' => 'অন্য সময়:',
'protect-othertime-op' => 'অন্য সময়',
'protect-existing-expiry' => 'বৰ্তমানৰ ম্যাদ উকলা সময়: $3, $2',
'protect-otherreason' => 'অন্য/অতিৰিক্ত কাৰণ:',
'protect-otherreason-op' => 'অন্য কাৰণ',
'protect-dropdown' => '*সুৰক্ষাৰ সাধাৰণ কাৰণসমূহ
** অতিমাত্ৰা ধ্বংসপ্ৰৱণতা
** অৰ্থহীন বিষয়বস্তু সুমোৱা
** অনা-গঠনমূলক সম্পাদনা যুঁজ
** অতিমাত্ৰা প্ৰদৰ্শিত পৃষ্ঠা',
'protect-edit-reasonlist' => 'সুৰক্ষাৰ কাৰণসমূহ সম্পাদনা কৰক',
'protect-expiry-options' => '‌১ ঘণ্টা:1 hour,১ দিন:1 day,১ সপ্তাহ:1 week,২ সপ্তাহ:2 weeks,১ মাহ:1 month,৩ মাহ:3 months,৬ মাহ:6 months,১ বছৰ:1 year,অনিৰ্দিষ্ট কাল:infinite',
'restriction-type' => 'অনুমতি:',
'restriction-level' => 'সুৰক্ষা-স্তৰ:',
'minimum-size' => 'সৰ্বনিম্ন আকাৰ',
'maximum-size' => 'সৰ্বোচ্চ আকাৰ',
'pagesize' => '(বাইট)',

# Restrictions (nouns)
'restriction-edit' => 'সম্পাদনা',
'restriction-move' => 'স্থানান্তৰ কৰক',
'restriction-create' => 'সৃষ্টি কৰক',
'restriction-upload' => 'আপল’ড কৰক',

# Restriction levels
'restriction-level-sysop' => 'সম্পূৰ্ণ সুৰক্ষিত',
'restriction-level-autoconfirmed' => 'অৰ্দ্ধ-সুৰক্ষিত',
'restriction-level-all' => 'যিকোনো স্তৰ',

# Undelete
'undelete' => 'বিলোপ কৰা পৃষ্ঠাসমূহ চাওক',
'undeletepage' => 'বিলোপ কৰা পৃষ্ঠাসমূহ চাওক আৰু পুনৰুদ্ধাৰ কৰক',
'undeletepagetitle' => "'''ইয়াত [[:$1|$1]]ৰ বিলোপ কৰা সংশোধনসমূহ পাব''' ।",
'viewdeletedpage' => 'বিলোপ কৰা পৃষ্ঠাসমূহ চাওক',
'undeletepagetext' => 'তলৰ {{PLURAL:$1|পৃষ্ঠাখন বিলোপ কৰা হৈছে কিন্তু সেয়া|$1 পৃষ্ঠাসমূহ বিলোপ কৰা হৈছে কিন্তু সেয়া}} এতিয়াও আৰ্কাইভত আছে আৰু পুনৰুদ্ধাৰ সম্ভৱ ।
আৰ্কাইভটো সময়ে সময়ে পৰিষ্কাৰ কৰা হ’ব পাৰে ।',
'undelete-fieldset-title' => 'সংশোধনসমূহ পুনৰুদ্ধাৰ কৰক',
'undeleteextrahelp' => "পৃষ্ঠাখনৰ সম্পূৰ্ণ ইতিহাস পুনৰুদ্ধাৰ কৰিবলৈ সকলো ঘৰ টিক দিয়ক ৰাখক আৰু '''''{{int:undeletebtn}}'''''ত ক্লিক কৰক ।
নিৰ্বাচিত পুনৰুদ্ধাৰ কৰিবলৈ বাছি লোৱা সংশোধনসমূহৰ কাষত থকা ঘৰবোৰত টিক দিয়ক আৰু '''''{{int:undeletebtn}}'''''ত ক্লিক কৰক ।",
'undeleterevisions' => '$1 {{PLURAL:$1|টা সংশোধন|টা সংশোধন}} আৰ্কাইভত আছে',
'undeletehistory' => 'যদি আপুনি পৃষ্ঠাখন পুনৰুদ্ধাৰ কৰে, তাৰ সকলো সংশোধন ইতিহাসলৈ ঘূৰি যাব ।
যদি বিলোপৰ পিছত একে নামৰ নতুন পৃষ্ঠা সৃষ্টি কৰা হৈছে, তেন্তে পুনৰুদ্ধাৰ হোৱা সংশোধনসমূহ পূৰ্বৰ ইতিহাসত দেখা যাব ।',
'undeleterevdel' => 'শীৰ্ষ পৃষ্ঠা বা ফাইল সংশোধন আংশিকভাৱে বিলোপ হোৱাৰ সম্ভাৱনা থাকিলে বিলোপ বাতিল কৰা নহ’ব ।
তেনে ক্ষেত্ৰত আপুনি নতুনকৈ বিলোপ কৰা সংশোধন অনিৰ্বাচিত আৰু অগোপন কৰক ।',
'undeletehistorynoadmin' => 'এই পৃষ্ঠাখন বিলোপ কৰা হৈছে ।
অৱলুপিৰ কাৰণ তলত দিয়া হ’ল । অৱলুপ্তিৰ আগতে যিজন সদস্যই ইয়াৰ সম্পাদনা কৰিছিল তেওঁৰো সবিশেষ তলত দিয়া হ’ল ।
বিলোপ কৰা সংশোধনসমূহৰ প্ৰকৃত পাঠ কেৱল প্ৰশাসকেহে দেখা পাব ।',
'undelete-revision' => '$3-এ কৰা $1ৰ সংশোধন ($4 তাৰিখ, $5 সময়ৰ) বিলোপ কৰা হৈছে:',
'undeleterevision-missing' => 'অবৈধ বা নিৰুদিষ্ট সংশোধন ।
আপুনি হয়তো অচল সংযোগত ক্লিক কৰিছে নাইবা সংশোধনীটো আৰ্কাইভৰ পৰা পুনৰ্স্থাপিত বা বিলোপ কৰা হৈছে ।',
'undelete-nodiff' => 'কোনো পূৰ্ব সংশোধন পোৱা নগ’ল',
'undeletebtn' => 'পুনঃসংস্থাপন কৰক',
'undeletelink' => 'লক্ষ্য কৰক/ঘূৰাই আনক',
'undeleteviewlink' => 'দেখুৱাওক',
'undeletereset' => 'পূৰ্বৰ অৱস্থালৈ লৈ যাওক',
'undeleteinvert' => 'নিৰ্বাচন ওলোটা কৰক',
'undeletecomment' => 'কাৰণ:',
'undeletedrevisions' => '{{PLURAL:$1|১টা সংশোধন|$1টা সংশোধন}} পুনৰুদ্ধাৰ কৰা হৈছে',
'undeletedrevisions-files' => '{{PLURAL:$1|১টা সংশোধন|$1 টা সংশোধন}} আৰু {{PLURAL:$2|১ খন নথি|$2 খন নথি}} পুনৰুদ্ধাৰ কৰা হ’ল',
'undeletedfiles' => '{{PLURAL:$1|১খন নথি|$1 খন নথি}} পুনৰুদ্ধাৰ কৰা হ’ল',
'cannotundelete' => 'অৱলুপ্তি বিফল হৈছে;
আন কোনোবাই আগতেই ইয়াক বিলোপ কৰিছে ।',
'undeletedpage' => "'''$1ক পুনৰুদ্ধাৰ কৰা হৈছে'''
অনুগ্ৰহ কৰি শেহতীয়া অৱলুপ্তি আৰু পুনৰুদ্ধাৰৰ বাবে [[Special:Log/delete|অৱলুপ্তি অভিলেখ]] চাওক ।",
'undelete-header' => 'শেহতীয়াকৈ বিলোপ কৰা পৃষ্ঠাসমূহৰ বাবে [[Special:Log/delete|অৱলুপ্তি ল’গ]] চাওক ।',
'undelete-search-title' => 'বিলোপ কৰা পৃষ্ঠা অনুসন্ধান কৰক',
'undelete-search-box' => 'বিলোপ কৰা পৃষ্ঠা অনুসন্ধান কৰক',
'undelete-search-prefix' => 'এই আখৰেৰে আৰম্ভ হোৱা পৃষ্ঠাসমূহ দেখুৱাওক:',
'undelete-search-submit' => 'সন্ধান',
'undelete-no-results' => 'অৱলুপ্তি আৰ্কাইভত কোনো মিল থকা পৃষ্ঠা পোৱা নগ’ল ।',
'undelete-filename-mismatch' => '$1 সময়-মোহৰ থকা ফাইল সংশোধনটো বিলোপ কৰিব পৰা নাযাব: ফাইলৰ নাম মিলা নাই',
'undelete-bad-store-key' => '$1 সময়চিহ্নৰ বিলোপ কৰা নথি সংশোধনী ঘূৰাই আনিব নোৱাৰি: বিলোপ কৰাৰ আগেয়েই নথিখন নাছিল ।',
'undelete-cleanup-error' => 'অব্যৱহৃত আৰ্কাইভ নথি "$1" বিলোপ কৰাত সমস্যা হৈছে ।',
'undelete-missing-filearchive' => 'ফাইল আৰ্কাইভ ID $1 পুনৰুদ্ধাৰ কৰিব পৰা নগ’ল কাৰণ এইটো তথ্যভঁৰালত নাই ।
এইটো সম্ভৱত: আগতেই পুনৰুদ্ধাৰ কৰা হৈছে ।',
'undelete-error' => 'পৃষ্ঠা অবিলোপনত ত্ৰুটি হৈছে',
'undelete-error-short' => 'ফাইল অৱলুপ্তি বাতিল কৰাত ত্ৰুটি: $1',
'undelete-error-long' => 'ফাইলটোৰ অৱলুপ্তি বাতিল কৰাত কিছু ত্ৰুটি হৈছে:

$1',
'undelete-show-file-confirm' => 'আপুনি "<nowiki>$1</nowiki>"  নথিখন বিলোপ কৰা কৰা সংশোধন $2 তাৰিখৰ $3 সময়ত চাব বিচাৰিছে নেকি ?',
'undelete-show-file-submit' => 'হয়',

# Namespace form on various pages
'namespace' => 'নামস্থান:',
'invert' => 'নিৰ্বাচন ওলোটা কৰক',
'tooltip-invert' => 'নিৰ্বাচিত সময়স্থানৰ (আৰু সহযোগী সময়স্থানসমূহৰ) ভিতৰত থকা পৃষ্ঠাসমূহৰ সালসলনি গোপন কৰিবলৈ এই ঘৰটো চিহ্নিত কৰক (আৰু সহযোগী পৃষ্ঠাসমূহো)',
'namespace_association' => 'সাংসৰ্গিক নামস্থান',
'tooltip-namespace_association' => 'নিৰ্বাচিত নামস্থানৰ লগত থকা আলোচনা বা বিষয় নামস্থান সন্নিৱিষ্ট কৰিবলৈ এই ঘৰটো চিহ্নিত কৰক',
'blanknamespace' => '(মুখ্য)',

# Contributions
'contributions' => 'সদস্যৰ বৰঙণিসমূহ',
'contributions-title' => '$1ৰ বৰঙণিসমূহ',
'mycontris' => 'মোৰ বৰঙণিসমূহ',
'contribsub2' => '$1 ৰ কাৰণে ($2)',
'nocontribs' => 'এই গুণসমূহৰ লগত মিল থকা কোনো সালসলনি পোৱা নগ’ল ।',
'uctop' => '(ওপৰত)',
'month' => 'এই মাহৰ পৰা (আৰু আগৰ):',
'year' => 'এই বছৰৰ পৰা (আৰু আগৰ):',

'sp-contributions-newbies' => 'কেৱল নতুন একাউন্টৰ বৰঙণিসমূহ দেখুৱাওক',
'sp-contributions-newbies-sub' => 'নতুন একাউন্টৰ কাৰণে',
'sp-contributions-newbies-title' => 'নতুন একাউন্টৰ বাবে সদস্যৰ বৰঙণি',
'sp-contributions-blocklog' => 'বাৰণ সূচী',
'sp-contributions-deleted' => 'বিলোপ কৰা সদস্যৰ বৰঙণিসমূহ',
'sp-contributions-uploads' => "আপল'ডসমূহ",
'sp-contributions-logs' => 'অভিলেখ',
'sp-contributions-talk' => 'আলোচনা',
'sp-contributions-userrights' => 'সদস্যৰ অধিকাৰ ব্যৱস্থাপনা',
'sp-contributions-blocked-notice' => 'এই সদস্যজনক সদ্যহতে বাৰণ কৰা হৈছে ।
আপোনাৰ সুবিধাৰ্থে শেহতীয়া প্ৰতিবন্ধক অভিলেখ ভৰ্তি তলত দিয়া হ’ল:',
'sp-contributions-blocked-notice-anon' => 'এই আই.পি. ঠিকনা সদ্যহতে বাৰণ কৰা হৈছে ।
আপোনাৰ সুবিধাৰ্থে শেহতীয়া প্ৰতিবন্ধক অভিলেখ ভৰ্তি তলত দিয়া হ’ল:',
'sp-contributions-search' => 'বৰঙণিসমূহৰ কাৰণে অনুসন্ধান কৰক',
'sp-contributions-username' => 'আই.পি. ঠিকনা অথবা ব্যৱহাৰকৰ্তাৰ নাম:',
'sp-contributions-toponly' => 'কেৱল সাম্প্ৰতিক সংস্কৰণৰ অন্তৰ্গত সম্পাদনাসমূহ দেখুৱাওক',
'sp-contributions-submit' => 'সন্ধান কৰক',

# What links here
'whatlinkshere' => 'এই পৃষ্ঠা ব্যৱহাৰ কৰিছে...',
'whatlinkshere-title' => '"$1"লৈ সংযোজিত পৃষ্ঠাসমূহ',
'whatlinkshere-page' => 'পৃষ্ঠা:',
'linkshere' => "এই পৃষ্ঠাটো '''[[:$1]]''' ৰ লগত সংযোজিত:",
'nolinkshere' => "'''[[:$1]]''' ৰ লগত কোনো পৃষ্ঠা সংযোজিত নহয়।",
'nolinkshere-ns' => 'নিৰ্বাচিত নামস্থানৰ কোনো পৃষ্ঠাৰ পৰা [[:$1]]লৈ সংযোগ নাই ।',
'isredirect' => 'পুনঃনিৰ্দেশনা পৃষ্ঠা',
'istemplate' => 'অন্তৰ্ভুক্ত কৰক',
'isimage' => 'নথিৰ সংযোগ',
'whatlinkshere-prev' => '{{PLURAL:$1|পিছৰ|পিছৰ $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|আগৰ|আগৰ $1}}',
'whatlinkshere-links' => '← সংযোগকেইটা',
'whatlinkshere-hideredirs' => '$1 পুননিৰ্দেশনাসমূহ',
'whatlinkshere-hidetrans' => '$1 ট্ৰেন্সক্লুস্বনসমূহ',
'whatlinkshere-hidelinks' => '$1 টা সংযোগ',
'whatlinkshere-hideimages' => '$1 চিত্ৰ সংযোগসমূহ',
'whatlinkshere-filters' => 'ছেকনী',

# Block/unblock
'autoblockid' => '#$1-ক স্বয়ংক্ৰিয় বাৰণ কৰক',
'block' => 'সদস্য বাৰণ কৰক',
'unblock' => 'সদস্যৰ বাৰণ উঠাই লওক',
'blockip' => 'সদস্য বাৰণ কৰক',
'blockip-title' => 'সদস্য বাৰণ কৰক',
'blockip-legend' => 'সদস্য বাৰণ কৰক',
'blockiptext' => 'তলৰ প্ৰপত্ৰখন ব্যৱহাৰ কৰি কোনো নিৰ্দিষ্ট আই.পি. ঠিকনা বা সদস্যনামৰ লিখাৰ অধিকাৰ বাৰণ কৰিব পাৰে ।
কেৱল ধ্বংসপ্ৰৱণতা ৰোধ কৰিবলৈ আৰু [[{{MediaWiki:Policy-url}}|নীতি]] মানি চলি এনে কৰক ।
তলত এটা নিৰ্দিষ্ট কাৰণ উল্লেখ কৰক (যেনে, ধ্বংসসাধন কৰা পৃষ্ঠাৰ নাম) ।',
'ipadressorusername' => 'আই-পি ঠিকনা বা সদস্যনাম:',
'ipbexpiry' => 'ম্যাদ উকলিব:',
'ipbreason' => 'কাৰণ:',
'ipbreasonotherlist' => 'অন্য কাৰণ',
'ipbreason-dropdown' => '*প্ৰতিবন্ধকৰ সাধাৰণ কাৰণসমূহ
** ভুল তথ্য দিয়া
** পৃষ্ঠাৰ বিষয়বস্তু আঁতৰাই পেলোৱা
** কোনো বাহিৰা চাইটলৈ স্পাম সংযোগ দিয়া
** পৃষ্ঠাত অৰ্থহীন বিষয়বস্তু প্ৰৱেশ কৰোৱা
** ভীতি উদ্ৰেককাৰী আচৰণ/হাৰাশাস্তি
** একাধিক একাউণ্টৰ অপব্যৱহাৰ
** অগ্ৰহণযোগ্য সদস্যনাম',
'ipb-hardblock' => 'এই আই.পি. ঠিকনাৰ পৰা প্ৰৱেশ কৰা সদস্যসকলক সম্পাদনা কৰাৰ পৰা ৰোধ কৰক',
'ipbcreateaccount' => 'একাউণ্ট সৃষ্টি অবৰোধ কৰক',
'ipbemailban' => 'ই-মেইল পঠোৱাৰ পৰা সদস্যক বাৰণ কৰক',
'ipbenableautoblock' => 'এই সদস্যজনে শেহতীয়াকৈ ব্যৱহাৰ কৰা আৰু ভৱিষ্যতে সম্পাদনাৰ বাবে ব্যৱহাৰ কৰা আই.পি. ঠিকনা স্বয়ংক্ৰিয়ভাৱে বাৰণ কৰক',
'ipbsubmit' => 'এই সদস্যক বাৰণ কৰক',
'ipbother' => 'অন্য সময়:',
'ipboptions' => '২ ঘণ্টা:2 hours,১ দিন:1 day,৩ দিন:3 days,১ সপ্তাহ:1 week,২ সপ্তাহ:2 weeks,১ মাহ:1 month,৩ মাহ:3 months,৬ মাহ:6 months,১ বছৰ:1 year,অনিৰ্দিষ্ট কাল:infinite',
'ipbotheroption' => 'অন্যান্য',
'ipbotherreason' => 'অন্য/অতিৰিক্ত কাৰণ:',
'ipbhidename' => 'সম্পাদনা আৰু তালিকা সমূহৰ পৰা সদস্যনাম আঁৰ দিয়ক',
'ipbwatchuser' => 'এই সদস্যৰ সদস্য আৰু আলোচনা পৃষ্ঠা লক্ষ্য কৰক',
'ipb-disableusertalk' => 'প্ৰতিবন্ধক থকা অৱস্থাত এই সদস্যজনক নিজৰ কথা-বতৰা পৃষ্ঠা সম্পাদনা কৰাৰ পৰা বিৰত কৰক',
'ipb-change-block' => 'এই ছেটিং ব্যৱহাৰ কৰি সদস্যজনক পুনৰ বাৰণ কৰক',
'ipb-confirm' => 'প্ৰতিবন্ধক নিশ্চিত কৰক',
'badipaddress' => 'অগ্ৰহণযোগ্য আই-পি ঠিকনা',
'blockipsuccesssub' => "বাৰণ কৰা সফল হ'ল",
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]]ক বাধা দিয়া হৈছে।<br />
প্ৰতিবন্ধকৰ পুনৰ্বিবেচনাৰ বাবে [[Special:BlockList|প্ৰতিবন্ধক তালিকা]] চাওক।',
'ipb-blockingself' => 'আপুনি নিজকে বাধাপ্ৰদান কৰিব বিচাৰিছে ! আপুনি নিশ্চিতনে আপুনি এনে কৰিব ?',
'ipb-confirmhideuser' => 'আপুনি "সদস্য গোপন কৰক" বৈশিষ্ট সক্ৰিয় থকা এজন সদস্যক বাৰণ কৰিবলৈ ওলাইছে । এই কাৰ্যই সকলো তালিকা আৰু ল\'গ ভৰ্তিৰ পৰা তেওঁৰ নাম আঁতৰাই পেলাব । এই কাম কৰিব বুলি আপুনি নিশ্চিতনে ?',
'ipb-edit-dropdown' => 'প্ৰতিবন্ধকৰ কাৰণসমূহ সম্পাদনা কৰক',
'ipb-unblock-addr' => '$1ৰ পৰা বাৰণ উঠাই লওক',
'ipb-unblock' => 'সদস্যনাম বা আই.পি. ঠিকনাৰ ওপৰত থকা প্ৰতিবন্ধক আঁতৰ কৰক',
'ipb-blocklist' => 'বৰ্তমানৰ প্ৰতিবন্ধক চাওক',
'ipb-blocklist-contribs' => '$1ৰ বৰঙণিসমূহ',
'unblockip' => 'সদস্যৰ প্ৰতিবন্ধক উঠাই লওক',
'unblockiptext' => 'তলৰ প্ৰপত্ৰখন ব্যৱহাৰ কৰি পূৰ্বে প্ৰতিবন্ধক থকা কোনো আই.পি. ঠিকনা বা সদস্যৰ লিখাৰ অধিকাৰ পুনঃপ্ৰতিষ্ঠা কৰক ।',
'ipusubmit' => 'এই বাৰণ উঠাই লওক',
'unblocked' => '[[User:$1|$1]]ৰ প্ৰতিবন্ধক আঁতৰ কৰা হৈছে',
'unblocked-range' => '$1ৰ প্ৰতিবন্ধক আঁতৰ কৰা হৈছে',
'unblocked-id' => '$1 প্ৰতিবন্ধকটো আঁতৰ কৰা হৈছে',
'blocklist' => 'বাৰণ কৰা সদস্য',
'ipblocklist' => 'বাৰণ কৰা সদস্য',
'ipblocklist-legend' => 'বাৰণ কৰা সদস্য অনুসন্ধান কৰক',
'blocklist-userblocks' => 'একাউন্ট বাৰণ গোপন কৰক',
'blocklist-tempblocks' => 'অস্থায়ী প্ৰতিবন্ধক গোপন কৰক',
'blocklist-addressblocks' => 'একক IP অৱৰোধ গোপন কৰক',
'blocklist-rangeblocks' => 'পৰিসীমা প্ৰতিবন্ধক গোপন কৰক',
'blocklist-timestamp' => 'সময়-মোহৰ',
'blocklist-target' => 'লক্ষ্য',
'blocklist-expiry' => 'ম্যাদ উকলিব',
'blocklist-by' => 'প্ৰশাসকক বাধাপ্ৰদান',
'blocklist-params' => 'অৱৰোধ পাৰামিটাৰসমূহ',
'blocklist-reason' => 'কাৰণ:',
'ipblocklist-submit' => 'অনুসন্ধান',
'ipblocklist-localblock' => 'স্থানীয় বাৰণ',
'ipblocklist-otherblocks' => 'অন্যান্য {{PLURAL:$1|বাৰণ|বাৰণসমূহ}}',
'infiniteblock' => 'অসীম',
'expiringblock' => '$1 তাৰিখৰ $2 সময়ত ম্যাদ উকলিব',
'anononlyblock' => 'কেৱল বেনামী',
'noautoblockblock' => 'স্বয়ংক্ৰিয় প্ৰতিবন্ধক নিষ্ক্ৰিয় কৰা হৈছে',
'createaccountblock' => 'একাউণ্ট সৃষ্টিত প্ৰতিবন্ধক দিয়া হৈছে',
'emailblock' => 'ই-মেইল অৱৰোধ কৰা হৈছে',
'blocklist-nousertalk' => 'নিজৰ কথা-বতৰা পৃষ্ঠা সম্পাদনা কৰিব নোৱাৰি',
'ipblocklist-empty' => 'প্ৰতিবন্ধক তালিকাখন খালী ।',
'ipblocklist-no-results' => 'অনুৰোধ কৰা IP ঠিকনা বা সদস্যনামত কোনো বাধা নাই ।',
'blocklink' => 'বাৰণ কৰক',
'unblocklink' => 'প্ৰতিবন্ধক উঠাই লওক',
'change-blocklink' => 'প্ৰতিবন্ধক সলনি কৰক',
'contribslink' => 'বৰঙণি',
'emaillink' => 'ই-মেইল পঠাওক',
'autoblocker' => 'আপোনাক স্বয়ংক্ৰিয়ভাৱে অৱৰোধ কৰা হৈছে কাৰণ আপোনাৰ আই.পি. ঠিকনাটো শেহতীয়াকৈ "[[User:$1|$1]]"য়ে ব্যৱহাৰ কৰিছে ।
$1ৰ অৱৰোধৰ কাৰণ: "$2"',
'blocklogpage' => 'বাৰণ সূচী',
'blocklog-showlog' => 'এই সদস্যজনক পূৰ্বতে অৱৰোধ কৰা হৈছিল ।
প্ৰমাণ স্বৰূপে তলত অৱৰোধৰ অভিলেখ দিয়া হ’ল:',
'blocklog-showsuppresslog' => 'এই সদস্যজনক পূৰ্বতে অৱৰোধ আৰু গোপন কৰা হৈছিল ।
প্ৰ্মাণ স্বৰূপে নিবাৰণৰ অভিলেখ তলত দিয়া হ’ল ।',
'blocklogentry' => '"[[$1]]" ক $2 $3 লৈ সাল-সলনি কৰাৰ পৰা বাৰণ কৰা হৈছে।',
'reblock-logentry' => '[[$1]]ৰ প্ৰতিবন্ধক ছেটিং ম্যাদ উকলা সময় $2 $3ৰ সৈতে সলনি কৰা হ’ল ।',
'blocklogtext' => 'এই অভিলেখ অৱৰোধ কৰা আৰু অৱৰোধ আঁতৰ কৰা সদস্য সম্পৰ্কীয়।
স্বয়ংক্ৰিয়ভাৱে প্ৰতিবন্ধক পোৱা আই.পি. ঠিকনাবোৰ ইয়াত তালিকাভুক্ত কৰা হোৱা নাই।
সাম্প্ৰতিক কাৰ্যৰত নিষেধ আৰু প্ৰতিবন্ধকৰ বাবে [[Special:BlockList|প্ৰতিবন্ধক তালিকা]] চাওক।',
'unblocklogentry' => '$1 বাৰণ উঠাই লোৱা হ’ল',
'block-log-flags-anononly' => 'কেৱল বেনামী সদস্য',
'block-log-flags-nocreate' => 'একাউন্ট সৃষ্টি নিষ্ক্ৰিয় কৰা হৈছে',
'block-log-flags-noautoblock' => 'স্বয়ংক্ৰিয়-প্ৰতিবন্ধক নিষ্ক্ৰিয় কৰা হৈছে',
'block-log-flags-noemail' => 'ই-মেইল অৱৰোধ কৰা হৈছে',
'block-log-flags-nousertalk' => 'নিজৰ কথা-বতৰা পৃষ্ঠা সম্পাদনা কৰিব নোৱাৰি',
'block-log-flags-angry-autoblock' => 'বৰ্ধিত স্বয়ংক্ৰিয়-প্ৰতিবন্ধক সক্ৰিয় কৰা হৈছে',
'block-log-flags-hiddenname' => 'সদস্যনাম গোপন কৰা হ’ল',
'range_block_disabled' => 'প্ৰশাসকৰ পৰিসীমা প্ৰতিবন্ধক সৃষ্টি কৰিব পৰা ক্ষমতা নিষ্ক্ৰিয় কৰা হৈছে ।',
'ipb_expiry_invalid' => 'অবৈধ ম্যাদ উকলা সময়',
'ipb_expiry_temp' => 'গুপ্ত সদস্যনাম অৱৰোধ স্থায়ী হ’ব লাগিব ।',
'ipb_hide_invalid' => 'এই বিষয়বস্তু নিবাৰণ কৰিব পৰা নগ’ল; ইয়াত বহুতো সম্পাদনা আছে ।',
'ipb_already_blocked' => '"$1"ক ইতিমধ্যে অৱৰোধ কৰা হৈছে',
'ipb-needreblock' => '$1ক ইতিমধ্যে অৱৰোধ কৰা হৈছে । আপুনি ছেটিং সলাব বিচাৰিছে নেকি ?',
'ipb-otherblocks-header' => 'আন {{PLURAL:$1|প্ৰতিবন্ধক|প্ৰতিবন্ধকসমূহ}}',
'unblock-hideuser' => 'আপুনি এই সদস্যজনৰ অৱৰোধ আঁতৰাব নোৱাৰে, কাৰণ তেওঁৰ সদস্যনাম গোপন কৰা হৈছে ।',
'ipb_cant_unblock' => 'ত্ৰুটি: প্ৰতিবন্ধক ID $1 পোৱা নগ’ল । হয়তো ইতিমধ্যে প্ৰতিবন্ধক আঁতৰ কৰা হৈছে ।',
'ipb_blocked_as_range' => 'ত্ৰুটি: $1 আই.পি. ঠিকনাটোক প্ৰত্যক্ষভাৱে বাধা দিয়া হোৱা নাই আৰু এই বাধা আঁতৰাব নোৱাৰি ।
কিন্তু এইটো $2 পৰিসীমাৰ অন্তৰ্গত যাৰ বাধা আঁতৰাব পাৰি ।',
'ip_range_invalid' => 'অবৈধ আই.পি. পৰিসৰ ।',
'ip_range_toolarge' => '/$1তকৈ ডাঙৰ প্ৰতিবন্ধক পৰিসৰ অনুমোদিত নহয় ।',
'blockme' => 'মোক বাৰণ কৰক',
'proxyblocker' => 'প্ৰক্সী অৱৰোধকাৰী',
'proxyblocker-disabled' => 'এই ফাংচনটো নিষ্ক্ৰিয়',
'proxyblockreason' => 'আপোনাৰ আই.পি. ঠিকনা অৱৰোধ কৰা হৈছে কাৰণ এইটো এটা মুক্ত প্ৰক্সী ।
অনুগ্ৰহ কৰি আপোনাৰ ইণ্টাৰনেট সেৱা প্ৰদানকাৰী বা কাৰিকৰী সহায়কৰ্তাৰ লগত যোগাযোগ কৰক আৰু এই গুৰুতৰ সুৰক্ষা সমস্যাৰ বিষয়ে জনাওক ।',
'proxyblocksuccess' => 'সম্পন্ন কৰা হ’ল ।',
'sorbsreason' => '{{SITENAME}}ত ব্যৱহাৰ কৰা DNSBLত আপোনাৰ আই.পি. ঠিকনা মুক্ত প্ৰক্সী হিছাপে তালিকাভুক্ত হৈ আছে ।',
'sorbs_create_account_reason' => '{{SITENAME}}ত ব্যৱহাৰ কৰা DNSBLত আপোনাৰ আই.পি. ঠিকনা মুক্ত প্ৰক্সী হিছাপে তালিকাভুক্ত হৈ আছে ।
আপুনি একাউণ্ট সৃষ্টি কৰিব নোৱাৰে',
'cant-block-while-blocked' => 'নিজেই অৱৰোধিত হৈ থকা অৱস্থাত আপুনি আন সদস্যক অৱৰোধ কৰিব নোৱাৰে ।',
'cant-see-hidden-user' => 'আপুনি বাৰণ কৰিব বিচৰা সদস্যজনক ইতিমধ্যেই বাৰণ কৰি গোপন কৰা হৈছে ।
যিহেতু আপোনাৰ সদস্যগোপনতা অধিকাৰ নাই, আপুনি সদস্যজনৰ প্ৰতিবন্ধক চাব বা সম্পাদনা কৰিব নোৱাৰে ।',
'ipbblocked' => 'আপুনি আন সদস্যক অৱৰোধ কৰিব বা আঁতৰাব নোৱাৰে, কাৰণ আপুনি নিজেই বাধাপ্ৰাপ্ত অৱস্থাত আছে',
'ipbnounblockself' => 'আপুনি নিজৰ প্ৰতিবন্ধক আঁতৰাব নোৱাৰে',

# Developer tools
'lockdb' => 'তথ্যকোষ বন্ধ কৰক',
'unlockdb' => 'তথ্যকোষ মুকলি কৰক',
'lockdbtext' => 'তথ্যকোষ বন্ধ কৰিলে সকলো সদস্যই পৃষ্ঠাৰ সম্পাদনা, তেওঁলোকৰ পছন্দ সলোৱা, লক্ষ্য-তালিকা সলোৱা, আৰু তথ্যকোষৰ সালসলনি প্ৰয়োজন হোৱা আন আন কাম কৰিব নোৱাৰিব ।
অনুগ্ৰহ কৰি নিশ্চিত কৰক যে আপুনি এইটো কৰিব বিচাৰিছে, আৰু চোৱা-চিতাৰ কাম সম্পূৰ্ণ হোৱা মাত্ৰকে আপুনি তথ্যকোষ মুকলি কৰিব ।',
'unlockdbtext' => 'তথ্যকোষ মুকলি কৰিলে সকলো সদস্যৰে পৃষ্ঠা সম্পাদনা কৰা, তেওঁলোকৰ পছন্দ সলোৱা, লক্ষ্য-তালিকা সম্পাদনা, আৰু তথ্যকোষৰ সালসলনি প্ৰয়োজন হোৱা ক্ষমতা ঘূৰি আহিব ।
অনুগ্ৰহ কৰি নিশ্চিত কৰক যে আপুনি এইটো কৰিব বিচাৰিছে ।',
'lockconfirm' => 'হয়, ম‍ই সঁচাকৈ তথ্যকোষ বন্ধ কৰিব বিচাৰিছোঁ ।',
'unlockconfirm' => 'হয়, ম‍ই সঁচাকৈ তথ্যকোষ মুকলি কৰিব বিচাৰিছোঁ ।',
'lockbtn' => 'তথ্যকোষ বন্ধ কৰক',
'unlockbtn' => 'তথ্যকোষ খোলক',
'locknoconfirm' => 'আপুনি নিশ্চিতকৰণ ঘৰটোত চিহ্ন দিয়া নাই ।',
'lockdbsuccesssub' => 'তথ্যকোষ সফলতাৰে বন্ধ কৰা হৈছে',
'unlockdbsuccesssub' => 'তথ্যকোষ মুকলি কৰা হৈছে',
'lockdbsuccesstext' => 'তথ্যকোষ বন্ধ কৰা হৈছে ।<br />
চোৱাচিতা সম্পূৰ্ণ হোৱাৰ পিছত [[Special:UnlockDB|তথ্যকোষ খুলি দিবলৈ]] নপাহৰিব ।',
'unlockdbsuccesstext' => 'তথ্যকোষ খোলা হৈছে ।',
'lockfilenotwritable' => 'তথ্যকোষ বন্ধ কৰাৰ ফাইলটো লিখনযোগ্য নহয় ।
তথ্যকোষ বন্ধ কৰিবলৈ বা খুলিবলৈ ফাইলটো ৱেব চাৰ্ভাৰৰ দ্বাৰা লিখনযোগ্য হ’ব লাগিব ।',
'databasenotlocked' => 'তথ্যকোষ বন্ধ নহয় ।',
'lockedbyandtime' => '({{GENDER:$1|$1}}ৰ দ্বাৰা $2 তাৰিখত $3 সময়ত)',

# Move page
'move-page' => '$1 স্থানান্তৰ কৰক',
'move-page-legend' => 'পৃষ্ঠাখন স্থানান্তৰ কৰক',
'movepagetext' => "তলৰ প্ৰপত্ৰ ব্যৱহাৰ কৰিলে এই পৃষ্ঠাৰ শিৰোনামা সলনি হ'ব, লগতে সমগ্ৰ ইতিহাস নতুন শিৰোনামালৈ স্থানান্তৰ কৰা হ'ব।
পুৰণা শিৰোনামাটো নতুন শিৰোনামালৈ এটা পুনৰ্নিৰ্দেশনা হৈ ৰ'ব।
পুৰণা শিৰোনামালৈ পোনাৱা পুনৰ্নিৰ্দেশনাসমূহ আপুনি স্বয়ংক্ৰিয়ভাৱে আপডেট কৰিব পাৰিব।
যদি এইটো কৰিব নিবিচাৰে তেনেহ'লে  [[Special:DoubleRedirects|দ্বি-পুনৰ্নিৰ্দেশনাসমূহ]] বা [[Special:BrokenRedirects|ভঙা পুনৰ্নিৰ্দেশনাসমূহ]] চয়ন কৰে যেন।
সকলো সংযোগ সঠিক দিশলৈ পোনাৱাৰ দায়িত্ব আপোনাৰ।

মন কৰিব যে নতুন শিৰোনামাটো যদি প্ৰচলিত, এই পৃষ্ঠা নতুন শিৰোনামালৈ সলনি কৰা '''নহ'ব''' যদিহে সেই পৃষ্ঠা খালী বা কোনো পুনৰ্নিৰ্দেশনাৰ পূৰ্ব ইতিহাস নাই।
ইয়াৰ অৰ্থ এয়ে যে ভুল হলে পৃষ্ঠাখন আগৰ ঠাইতে থাকিব, আৰু আপুনি প্ৰচলিত পৃষ্ঠা এখনক আন পৃষ্ঠা এখনেৰে সলনি কৰিব নোৱাৰে।

'''সতৰ্কবাণী !'''
জনপ্ৰিয় পৃষ্ঠা এখনৰ বাবে এয়া এক ডাঙৰ আৰু অনাকাংক্ষিত সাল-সলনি হ’ব পাৰে;
এই কাৰ্য পৰিণাম ভালদৰে বিবেচনা কৰি লয় যেন।",
'movepagetext-noredirectfixer' => "তলৰ প্ৰপত্ৰ ব্যৱহাৰ কৰিলে এই পৃষ্ঠাৰ শিৰোনামা সলনি হ'ব, লগতে সমগ্ৰ ইতিহাস নতুন শিৰোনামালৈ স্থানান্তৰ কৰা হ'ব।
পুৰণা শিৰোনামাটো নতুন শিৰোনামালৈ এটা পুনৰ্নিৰ্দেশনা হৈ ৰ'ব।
[[Special:DoubleRedirects|দ্বি পুনৰ্নিৰ্দেশনাসমূহ]] বা [[Special:BrokenRedirects|ভঙা পুনৰ্নিৰ্দেশনসমূহ]] পৰীক্ষা কৰিবলৈ নাপাহৰিব।
সকলো সংযোগে যাতে সঠিক দিশলৈ পোনায়, সেয়া লক্ষ্য কৰা দায়িত্ব আপোনাৰ।

মন কৰিব যে নতুন শিৰোনামাতো যদি প্ৰচলিত, এই পৃষ্ঠা নতুন শিৰোনামালৈ সলনি কৰা '''নহ'ব''' যদিহে সেই পৃষ্ঠা খালী বা কোনো পুনৰ্নিৰ্দেশনৰ পূৰ্ব ইতিহাস নাই।
ইয়াৰ অৰ্থ এয়ে যে ভুল হলে পৃষ্ঠাখন আগৰ ঠাইতে থাকিব, আৰু আপুনি প্ৰচলিত পৃষ্ঠা এখনক আন পৃষ্ঠা এখনেৰে সলনি কৰিব নোৱাৰে।

'''সতৰ্কবাণী !'''
জনপ্ৰিয় পৃষ্ঠা এখনৰ বাবে এয়া এক ডাঙৰ আৰু অকানাংক্ষিত সাল-সলনি হ'ব পাৰে;
এই কাৰ্য্যৰ পৰিণাম ভালদৰে বিবেচনা কৰি লয় যেন।",
'movepagetalktext' => "পৃষ্ঠাখনৰ লগতে সংশ্লিষ্ট আলোচনা পৃষ্ঠাখনো স্বয়ংক্ৰিয়ভাৱে স্থানান্তৰ হ’ব; এনে নহয় '''যদিহে:'''
*নতুন শিৰোনামাৰ অধীনত এখন খালী নোহোৱা আলোচনা পৃষ্ঠা ইতিমধ্যেই থাকে, বা
*আপুনি তলৰ ঘৰটো অচিহ্নিত কৰে ।

তেনে ক্ষেত্ৰত আপুনি আপুনি ইচ্ছা কৰিলে নিজ হাতে পৃষ্ঠাখন স্থানান্তৰ বা একত্ৰীকৰণ কৰিব পাৰে ।",
'movearticle' => 'পৃষ্ঠা স্থানান্তৰ কৰক:',
'moveuserpage-warning' => "'''সতৰ্কবাণী:''' আপুনি এখন সদস্যপৃষ্ঠা স্থানান্তৰ কৰিবলৈ বিছাৰিছে । অনুগ্ৰহ কৰি মন কৰক যে কেৱল সদস্যপৃষ্ঠাখনহে স্থানান্তৰ হ’ব আৰু সদস্যজনৰ পুনঃনামাকৰণ নহ’ব ।",
'movenologin' => 'প্ৰৱেশ কৰা নাই',
'movenologintext' => 'পৃষ্ঠা স্থানান্তৰ কৰিবলৈ আপুনি ভুক্ত সদস্য হৈ [[Special:UserLogin|প্ৰৱেশ]] কৰিব লাগিব ।',
'movenotallowed' => 'পৃষ্ঠা স্থানান্তৰ কৰিবলৈ আপোনাৰ অনুমতি নাই ।',
'movenotallowedfile' => 'নথিখন স্থানান্তৰ কৰিবলৈ আপোনাৰ অনুমতি নাই ।',
'cant-move-user-page' => 'সদস্য পৃষ্ঠা স্থানান্তৰ কৰিবলৈ আপুনাৰ অনুমতি নাই (উপ-পৃষ্ঠাৰ বাহিৰে)।',
'cant-move-to-user-page' => 'সদস্যপৃষ্ঠালৈ কোনো পৃষ্ঠা স্থানান্তৰ কৰাৰ অনুমতি আপোনাৰ নাই (কেৱল সদস্য উপপৃষ্ঠাৰ বাহিৰে ) ।',
'newtitle' => 'নতুন শিৰোনামালৈ:',
'move-watch' => 'এই পৃষ্ঠাখন লক্ষ্য কৰক',
'movepagebtn' => 'পৃষ্ঠাখন স্থানান্তৰ কৰক',
'pagemovedsub' => 'স্থানান্তৰ সফল হ’ল',
'movepage-moved' => "'''“$1”ক “$2”লৈ স্থানান্তৰ কৰা হৈছে'''",
'movepage-moved-redirect' => 'এটি পুনৰ্নিদেশনা সৃষ্টি কৰা হৈছে',
'movepage-moved-noredirect' => 'পুনৰ্নিৰ্দেশনা সৃষ্টি কৰা নিবাৰণ কৰা হৈছে ।',
'articleexists' => 'সেই নামৰ পৃষ্ঠা এটা আগৰ পৰাই আছে, বা সেই নামতো অযোগ্য।
বেলেগ নাম এটা বাছি লওক।',
'cantmove-titleprotected' => 'আপুনি ইয়ালৈ কোনো পৃষ্ঠা স্থানান্তৰ কৰিব নোৱাৰে, কাৰণ এই নতুন শিৰোনামা সৃষ্টিৰ পৰা সুৰক্ষিত ।',
'talkexists' => "'''পৃষ্ঠাখন স্থানান্তৰ কৰা হৈছে, কিন্তু ইয়াৰ লগত জৰিত বাৰ্তা পৃষ্ঠাখন স্থানান্তৰ কৰা নহ'ল, কাৰণ নতুন ঠাইত বাৰ্তা পৃষ্ঠা এখন আগৰ পৰাই আছে।
অনুগ্ৰহ কৰি আপুনি নিজৰ হাতেৰে স্থানান্তৰ কৰক ।'''",
'movedto' => 'লৈ স্থানান্তৰ কৰা হ’ল',
'movetalk' => 'সংলগ্ন বাৰ্তা পৃষ্ঠা স্থানান্তৰ কৰক',
'move-subpages' => 'উপ-পৃষ্ঠাসমূহ স্থানান্তৰ কৰক ($1লৈ)',
'move-talk-subpages' => 'আলোচনা পৃষ্ঠাৰ উপ-পৃষ্ঠাসমূহ স্থানান্তৰ কৰক ($1-লৈ)',
'movepage-page-exists' => '$1 পৃষ্ঠাখন ইতিমধ্যেই আছে আৰু তাৰ ওপৰত স্বয়ংক্ৰিয়ভাৱে লিখিব নোৱাৰি ।',
'movepage-page-moved' => "$1 পৃষ্ঠাখন $2লৈ স্থানান্তৰ কৰা হ'ল।",
'movepage-page-unmoved' => '$1 পৃষ্ঠাখন $2লৈ স্থানান্তৰ কৰা সম্ভৱ নহয়',
'movepage-max-pages' => 'সৰ্বোচ্চ $1 {{PLURAL:$1|পৃষ্ঠা|পৃষ্ঠা}} স্থানান্তৰ কৰা হৈছে আৰু ইয়াতকৈ অধিক স্বয়ংক্ৰিয়ভাৱে স্থানান্তৰ নহ’ব ।',
'movelogpage' => 'স্থানান্তৰন অভিলেখ',
'movelogpagetext' => 'সকলো পৃষ্ঠা স্থানান্তৰৰ এখন তালিকা তলত দিয়া হৈছে ।',
'movesubpage' => '{{PLURAL:$1|খন উপপৃষ্ঠা|খন উপপৃষ্ঠা}}',
'movesubpagetext' => 'এই পৃষ্ঠাখনৰ তলত দিয়া {{PLURAL:$1|খন উপপৃষ্ঠা|খন উপপৃষ্ঠা}} আছে ।',
'movenosubpage' => 'এই পৃষ্ঠাৰ কোনো উপপৃষ্ঠা নাই ।',
'movereason' => 'কাৰণ:',
'revertmove' => 'আগৰ অৱস্থালৈ ঘূৰি যাওক',
'delete_and_move' => 'বিলোপ আৰু স্থানান্তৰ কৰক',
'delete_and_move_text' => '== বিলোপন আৱশ্যক ==
লক্ষ্য পৃষ্ঠা "[[:$1]]" ইতিমেধ্যে আছেই ।
আপুনি স্থানান্তৰ কৰিবলৈ এইখন বিলোপ কৰিব খুজিছে নেকি ?',
'delete_and_move_confirm' => 'হয়, পৃষ্ঠাখন বিলোপ কৰক',
'delete_and_move_reason' => '"[[$1]]"ৰ পৰা স্থানান্তৰৰ স্বাৰ্থত বিলোপ কৰা হৈছে',
'selfmove' => 'উৎস আৰু লক্ষ্য শিৰোনামা একেই;
কোনো পৃষ্ঠাক একেখন পৃষ্ঠালৈ স্থানান্তৰ কৰিব নোৱাৰি ।',
'immobile-source-namespace' => '"$1" নামস্থানত পৃষ্ঠা স্থানান্তৰ কৰিব নোৱাৰি',
'immobile-target-namespace' => '"$1" নামস্থানলৈ পৃষ্ঠা স্থানান্তৰ কৰিব নোৱাৰি',
'immobile-target-namespace-iw' => 'পৃষ্ঠা স্থানান্তৰৰ বাবে আন্তঃৱিকি সংযোগ বৈধ গন্তব্যস্থল নহয় ।',
'immobile-source-page' => 'এই পৃষ্ঠাখন স্থানান্তৰ কৰিব নোৱাৰি ।',
'immobile-target-page' => 'গন্তব্য শিৰোনামালৈ স্থানান্তৰ কৰিব পৰা নাযাব ।',
'imagenocrossnamespace' => 'অনা-ফাইল নামস্থানলৈ ফাইল স্থানান্তৰ কৰিব নোৱাৰি',
'nonfile-cannot-move-to-file' => 'ফাইল নামস্থানলৈ অনা-ফাইল স্থানান্তৰ কৰিব নোৱাৰি',
'imagetypemismatch' => 'নতুন ফাইলৰ এক্সটেনছনটো ইয়াৰ প্ৰকাৰৰ লগত মিলা নাই',
'imageinvalidfilename' => 'লক্ষ্য ফাইল নামটো অবৈধ',
'fix-double-redirects' => 'প্ৰাথমিক প্ৰৱন্ধলৈ আঙুলিয়াই দিয়া যিকোনো পুনৰ্নিৰ্দেশ নবীকৰণ কৰক',
'move-leave-redirect' => 'এটা পুনঃনিৰ্দেশনা এৰি যাওক',
'protectedpagemovewarning' => "'''সতৰ্কবাণী: এই পৃষ্ঠা সুৰক্ষিত কৰা হৈছে; কেৱল প্ৰশাসকৰৰ মৰ্যদাৰ সদস্যইহে ইয়াক স্থানান্তৰ কৰিব পাৰিব ।'''
আপোনাৰ সুবিধাৰ বাবে পৃষ্ঠাৰ সাম্প্ৰতিক অভিলেখ সংৰক্ষণ তলত দিয়া হ’ল:",
'semiprotectedpagemovewarning' => "'''টোকা:''' এই পৃষ্ঠা সুৰক্ষিত কৰা হৈছে; কেৱল পঞ্জীভূত সদস্যইহে ইয়াক স্থানান্তৰ কৰিব পাৰিব ।'''
আপোনাৰ সুবিধাৰ বাবে পৃষ্ঠাৰ সাম্প্ৰতিক অভিলেখ সংৰক্ষণ তলত দিয়া হ’ল:",
'move-over-sharedrepo' => "== ফাইলৰ অস্বিত্ব আছে ==
[[:$1]] এক উমৈহতীয়া ভঁৰালত আছে । এই শিৰোনামালৈ ফাইল স্থানান্তৰ কৰিলে উমৈহতীয়া ফাইলটোৰ লগত ওপৰা-ওপৰি হ'ব ।",
'file-exists-sharedrepo' => 'নিৰ্বাচিত ফাইল নামটো ইতিমধ্যে এটা উমৈহতীয়া ভঁৰালত ব্যৱহৃত ।
অনুগ্ৰহ কৰি আন এটা নাম নিৰ্বাচন কৰক ।',

# Export
'export' => 'পৃষ্ঠা ৰপ্তানি কৰক',
'exporttext' => 'আপুনি কোনো XMLৰে আবৃত পাঠ আৰু বিশেষ পৃষ্ঠা বা পৃষ্ঠাৰ সংহতিৰ সম্পাদনা ইতিহাস ৰপ্তানি কৰিব পাৰে।
মিডিয়াৱিকি ব্যৱহাৰ কৰি [[Special:Import|আমদানি পৃষ্ঠা]]ৰ যোগেদি ইয়াক আন ৱিকিলৈও আমদানি কৰিব পাৰি।

পৃষ্ঠা ৰপ্তানি কৰিবৰ বাবে তলৰ পাঠ্যত এশাৰীত এটাকৈ তলৰ পাঠত শিৰোনামাবোৰ ভৰাওক। লগতে সাম্প্ৰতিক সংশোধন, পুৰণি সংশোধন আৰু পৃষ্ঠা ইতিহাস ৰাখিব লাগেনে শেষ সম্পাদনাৰ তথ্যৰ লগত সাম্প্ৰতিক সংশোধন লাগে বাছনি কৰক।

পিছৰ ক্ষেত্ৰত আপুনি সংযোগ এটাও ব্যৱহাৰ কৰিব পাৰে, যেনে
"[[{{MediaWiki:Mainpage}}]]" পৃষ্ঠাৰ কাৰণে [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]]',
'exportall' => 'সকলো পৃষ্ঠা ৰপ্তানি কৰক',
'exportcuronly' => 'কেৱল সাম্প্ৰতিক সংশোধনটোহে অন্তৰ্ভুক্ত কৰক, সম্পূৰ্ণ ইতিহাস নহয় ।',
'exportnohistory' => "----
'''টোকা:''' কৰ্মদক্ষতা-সম্পৰ্কীয় কাৰণত এই প্ৰপত্ৰৰ মাধ্যমেৰে কোনো পৃষ্ঠাৰ সম্পূৰ্ণ ইতিহাস ৰপ্তানি কৰাটো নিষ্ক্ৰিয় কৰা হৈছে।",
'exportlistauthors' => 'প্ৰত্যেক পৃষ্ঠাৰ বৰঙনিদাতাৰ সম্পূৰ্ণ তালিকা অন্তৰ্ভুক্ত কৰক',
'export-submit' => 'ৰপ্তানি কৰক',
'export-addcattext' => 'এই শ্ৰেণীকেইটাৰ পৰা পৃষ্ঠা যোগ কৰক:',
'export-addcat' => 'যোগ কৰক',
'export-addnstext' => 'এই নামস্থানৰ পৰা পৃষ্ঠা যোগ কৰক',
'export-addns' => 'যোগ কৰক',
'export-download' => 'নথি ৰূপে সংৰক্ষণ কৰক',
'export-templates' => 'সাঁচসমূহ অন্তৰ্ভুক্ত কৰক',
'export-pagelinks' => 'এই স্তৰলৈকে পৃষ্ঠা সংযোগ অন্তৰ্ভুক্ত কৰক:',

# Namespace 8 related
'allmessages' => 'ব্যৱস্থাৰ বতৰা',
'allmessagesname' => 'নাম',
'allmessagesdefault' => 'সাধাৰণ বাৰ্তা পাঠ্য',
'allmessagescurrent' => 'বৰ্তমানৰ বাৰ্তাৰ পাঠ',
'allmessagestext' => 'মিডিয়াৱিকি নামস্থানত থকা প্ৰণালী বাৰ্তাসমূহৰ তালিকা ইয়াত দিয়া হৈছে ।
যদি আপুনি মিডিয়াৱিকিৰ স্থানীয়কৰণত আগ্ৰহী, তেন্তে অনুগ্ৰহ কৰি [//www.mediawiki.org/wiki/Localisation মিডিয়াৱিকি স্থানীয়কৰণ] আৰু [//translatewiki.net translatewiki.net] চাওক ।',
'allmessagesnotsupportedDB' => "এই পৃষ্ঠা ব্যৱহাৰ কৰিব নোৱাৰি কাৰণ '''\$wgUseDatabaseMessages''' নিষ্ক্ৰিয় কৰা হৈছে ।",
'allmessages-filter-legend' => 'ছেকনী',
'allmessages-filter' => 'স্বনিৰ্বাচন অৱস্থাৰে পৰিস্ৰাৱন কৰক:',
'allmessages-filter-unmodified' => 'অপৰিৱৰ্তিত',
'allmessages-filter-all' => 'সকলো',
'allmessages-filter-modified' => 'পৰিৱৰ্তিত',
'allmessages-prefix' => 'উপসৰ্গ দি চেকক',
'allmessages-language' => 'ভাষা:',
'allmessages-filter-submit' => 'যাওক',

# Thumbnails
'thumbnail-more' => 'ডাঙৰকৈ চাওক',
'filemissing' => 'ফাইল বিচাৰি পোৱা নগ’ল',
'thumbnail_error' => 'ক্ষুদ্ৰ প্ৰতিকৃতি সৃষ্টি কৰাত অসুবিধা হৈছে: $1',
'djvu_page_error' => 'DjVu পৃষ্ঠা পৰিসীমাৰ বাহিৰত',
'djvu_no_xml' => "DjVu ফাইলৰ বাবে XML আনিব পৰা নগ'ল",
'thumbnail-temp-create' => 'অস্থায়ী থাম্বনেইল নথিপত্ৰ সৃষ্টি কৰিবলে অক্ষম',
'thumbnail-dest-create' => 'থাম্বনেইলক গন্তব্যত সাঁচিবলে অক্ষম',
'thumbnail_invalid_params' => 'অবৈধ ক্ষুদ্ৰাকৃতি পাৰামিটাৰ',
'thumbnail_dest_directory' => 'গন্তব্য নিৰ্দেশিকা সৃষ্টি কৰিব পৰা নগ’ল',
'thumbnail_image-type' => 'চিত্ৰৰ ধৰণ সমৰ্থিত নহয় ।',
'thumbnail_gd-library' => 'অসম্পূৰ্ণ GD লাইব্ৰেৰী সংৰূপ: সন্ধানহীন ফলন $1',
'thumbnail_image-missing' => 'নথিখন সম্ভৱতঃ নাই: $1',

# Special:Import
'import' => 'পৃষ্ঠা আমদানি কৰক',
'importinterwiki' => 'আন্তঃৱিকি আমদানি',
'import-interwiki-text' => "আমদানি কৰিবলৈ এটা ৱিকি বা পৃষ্ঠাৰ শিৰোনামা নিৰ্বাচন কৰক ।
সংশোধনৰ তাৰিখ আৰু সম্পাদকৰ নাম সংৰক্ষণ কৰা হ'ব ।
সকলো আন্তঃৱিকি আমদানি [[Special:Log/import|আমদানি অভিলেখ]]ত লিপিবদ্ধ আছে ।",
'import-interwiki-source' => 'উৎস ৱিকি/পৃষ্ঠা:',
'import-interwiki-history' => 'এই পৃষ্ঠাৰ সকলো সংশোধনৰ ইতিহাস প্ৰতিলিপি কৰক',
'import-interwiki-templates' => 'সকলো সাঁচ অন্তৰ্ভুক্ত কৰক',
'import-interwiki-submit' => 'আমদানি',
'import-interwiki-namespace' => 'গন্তব্য নামস্থান:',
'import-upload-filename' => 'নথিৰ নাম:',
'import-comment' => 'মন্তব্য:',
'importtext' => "অনুগ্ৰহ কৰি [[Special:Export|ৰপ্তানি সুবিধা]] ব্যৱহাৰ কৰি উৎস ৱিকিৰ পৰা ফাইলটো ৰপ্তানি কৰক।
আপোনাৰ কম্পিউটাৰত সাঁচি ৰাখক আৰু ইয়াত আপল'ড কৰক।",
'importstart' => 'পৃষ্ঠা আমদানি কৰা হৈ হৈছে...',
'import-revision-count' => '$1 {{PLURAL:$1|টা সংশোধন|টা সংশোধন}}',
'importnopages' => 'আমদানি কৰিবলৈ কোনো পৃষ্ঠা নাই ।',
'imported-log-entries' => "$1 {{PLURAL:$1|টা অভিলেখ ভৰ্তি|টা অভিলেখ ভৰ্তি}} আমদানি কৰা হ'ল ।",
'importfailed' => 'আমদানি ব্যৰ্থ হৈছে: <nowiki>$1</nowiki>',
'importunknownsource' => 'অজ্ঞাত আমদানি উৎসৰ প্ৰকাৰ',
'importcantopen' => "আমদানি ফাইল খুলিব পৰা নগ'ল",
'importbadinterwiki' => 'আন্ত:ৱিকি সংযোগ বেয়া',
'importnotext' => 'খালী বা পাঠ বিহীন',
'importsuccess' => 'আমদানি সমাপ্ত !',
'importhistoryconflict' => "পৰস্পৰবিৰোধী ইতিহাস সংশোধনী আছে (এই পৃষ্ঠা আগতেও আমদানি কৰা হ'ব পাৰে)",
'importnosources' => "কোনো আন্তঃৱিকি আমদানি উৎসৰ সংজ্ঞা দিয়া হোৱা নাই আৰু প্ৰত্যক্ষ ইতিহাস আপল'ড নিষ্ক্ৰিয় কৰা হৈছে ।",
'importnofile' => "কোনো আমদানি নথি আপল'ড কৰা হোৱা নাই ।",
'importuploaderrorsize' => "আমদানি নথিৰ আপল'ড অসফল হৈছে ।
অনুমোদিত আপল'ড নথিতকৈ এই নথিৰ আকাৰ ডাঙৰ ।",
'importuploaderrorpartial' => "আমদানি নথিৰ আপল'ড অসফল হৈছে ।
নথিখন কেৱল আংশিকভাৱে আপল'ড কৰা হৈছে ।",
'importuploaderrortemp' => "আমদানি নথিৰ আপল'ড বিফল হৈছে ।
এটা অস্থায়ী ফ'ল্ডাৰ হেৰাইছে ।",
'import-parse-failure' => 'XML আমদানি পাৰ্চ বিফলতা',
'import-noarticle' => 'আমদানি কৰিবলৈ কোনো পৃষ্ঠা নাই !',
'import-nonewrevisions' => 'সকলো সংশোধনী পূৰ্বে আমদানি কৰা হৈছে ।',
'xml-error-string' => '$1 $2 শাৰীত, $3  কলামত (byte $4): $5',
'import-upload' => 'XML তথ্য আপল’ড কৰক',
'import-token-mismatch' => 'ছেছন তথ্য হেৰাই গৈছে ।
অনুগ্ৰহ কৰি পুনৰ চেষ্টা কৰক ।',
'import-invalid-interwiki' => 'নিৰ্ধাৰিত ৱিকিৰ পৰা আমদানি কৰিব নোৱাৰি ।',
'import-error-edit' => '"$1" পৃষ্ঠাখন আমদানি কৰা নহ\'ল কাৰণ ইয়াক সম্পাদনা কৰিবলৈ আপোনাৰ অনুমতি নাই।',
'import-error-create' => '"$1" পৃষ্ঠাখন আমদানি কৰা নহ\'ল কাৰণ ইয়াক সৃষ্টি কৰিবলৈ আপোনাৰ অনুমতি নাই।',
'import-error-interwiki' => '"$1" পৃষ্ঠাখন আমদানি কৰা নহ\'ল কাৰণ ইয়াৰ নামটো বাহিৰা সংযোগৰ (আন্তঃৱিকি) বাবে সংৰক্ষিত।',
'import-error-special' => '"$1" পৃষ্ঠাখন আমদানি কৰা নহ\'ল কাৰণ ই পৃষ্ঠা অনুমোদন নকৰা এটা বিশেষ নামস্থানৰ অন্তৰ্গত।',
'import-error-invalid' => '"$1" পৃষ্ঠাখন আমদানি কৰা নহ\'ল কাৰণ ইয়াৰ নামটো অবৈধ।',

# Import log
'importlogpage' => 'আমদানিৰ অভিলেখ',
'importlogpagetext' => 'আন ৱিকিৰ পৰা সম্পাদনা ইতিহাস সহ প্ৰশাসনীয় পৃষ্ঠা আমদানি ।',
'import-logentry-upload' => "নথি আপল'ডৰ মাধ্যমেৰে [[$1]] আমদানি কৰা হ'ল",
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|টা সংশোধন|টা সংশোধন}}',
'import-logentry-interwiki' => 'আন্তঃৱিকি-স্থানান্তৰিত $1',
'import-logentry-interwiki-detail' => '$2ৱে কৰা $1 {{PLURAL:$1|টা সংশোধন|টা সংশোধন}}',

# JavaScriptTest
'javascripttest' => 'জাভাস্ক্ৰিপ্ট পৰীক্ষা।',
'javascripttest-disabled' => 'এই ৱিকিত এই কাৰ্যটো সক্ৰিয় কৰা হোৱা নাই।',
'javascripttest-title' => '$1 পৰীক্ষাসমূহ চলোৱা হৈছে',
'javascripttest-pagetext-noframework' => 'এই পৃষ্ঠাখন জাভালিপি পৰীক্ষা চলোৱাৰ বাবে সংৰক্ষিত।',
'javascripttest-pagetext-unknownframework' => 'অজ্ঞাত সম্পৰীক্ষা ফ্ৰেমৱৰ্ক "$1"।',
'javascripttest-pagetext-frameworks' => 'অনুগ্ৰহ কৰি তলৰ যিকোনো এটা সম্পৰীক্ষা ফ্ৰেমৱৰ্ক বাছনি কৰক: $1',
'javascripttest-pagetext-skins' => 'পৰীক্ষা কৰিবলৈ আৱৰণ এখন বাছনি কৰক:',
'javascripttest-qunit-intro' => 'mediawiki.org-ত [$1 পৰীক্ষা নথিকৰণ] চাওক।',
'javascripttest-qunit-heading' => 'মিডিয়াৱিকি জাভাস্ক্ৰিপ্ট QUnit পৰীক্ষা চুট',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'আপোনাৰ সদস্য পৃষ্ঠা',
'tooltip-pt-anonuserpage' => 'যি আই.পি. ঠিকনাৰ পৰা আপুনি সম্পাদনা কৰিছে তাৰ সদস্য পৃষ্ঠা',
'tooltip-pt-mytalk' => 'আপোনাৰ আলোচনা পৃষ্ঠা',
'tooltip-pt-anontalk' => 'এই আই.পি. ঠিকনাৰ পৰা কৰা সম্পাদনাসমূহৰ আলোচনা',
'tooltip-pt-preferences' => 'আপোনাৰ পছন্দসমূহ',
'tooltip-pt-watchlist' => 'আপুনি সালসলনিৰ গতিবিধি লক্ষ্য কৰি থকা পৃষ্ঠাসমূহৰ সুচী',
'tooltip-pt-mycontris' => 'আপোনাৰ বৰঙণিৰ তালিকা',
'tooltip-pt-login' => "বাধ্যতামূলক নহ'লেও প্ৰৱেশ কৰাটো বাঞ্চনীয়",
'tooltip-pt-anonlogin' => 'বাধ্যতামূলক নহ’লেও প্ৰৱেশ কৰাটো বাঞ্চনীয়',
'tooltip-pt-logout' => 'প্ৰস্থান',
'tooltip-ca-talk' => 'সংশ্লিষ্ট প্ৰবন্ধ সম্পৰ্কীয় আলোচনা',
'tooltip-ca-edit' => 'আপুনি এই পৃষ্ঠাটো সালসলনি কৰিব পাৰে, অনুগ্ৰহ কৰি সালসলনি সাচী থোৱাৰ আগতে খচৰা চাই লব',
'tooltip-ca-addsection' => 'নতুন অনুচ্ছেদ আৰম্ভ কৰক',
'tooltip-ca-viewsource' => 'এই পৃষ্ঠাখন সুৰক্ষিত কৰা হৈছে, আপুনি ইয়াৰ উৎস চাব পাৰে।',
'tooltip-ca-history' => 'এই পৃষ্ঠাৰ যোৱা সংস্কৰণসমূহ',
'tooltip-ca-protect' => 'এই পৃষ্ঠাখন সুৰক্ষিত কৰক',
'tooltip-ca-unprotect' => 'এই পৃষ্ঠাৰ সুৰক্ষা সলনি কৰক',
'tooltip-ca-delete' => 'এই পৃষ্ঠাখন বিলোপ কৰক',
'tooltip-ca-undelete' => 'বিলোপ কৰাৰ আগেয়ে কৰা পৃষ্ঠাখনৰ সালসলনিসমূহ পুনঃসংস্থাপন কৰক',
'tooltip-ca-move' => 'এই পৃষ্ঠাখন স্থানান্তৰিত কৰক',
'tooltip-ca-watch' => 'এই পৃষ্ঠাখন আপোনাৰ লক্ষ্য-তালিকাত যোগ কৰক',
'tooltip-ca-unwatch' => 'এই পৃষ্ঠাখন আপোনাৰ লক্ষ্য-তালিকাৰ পৰা আঁতৰাওক',
'tooltip-search' => '{{SITENAME}} -ত সন্ধানাৰ্থে',
'tooltip-search-go' => 'যদি আছে, তেহে ঠিক সেই নামৰ পৃষ্ঠালৈ যাওক',
'tooltip-search-fulltext' => 'এই পাঠ পৃষ্ঠাসমূহত বিচাৰক',
'tooltip-p-logo' => 'বেটুপাত খুলিবৰ কাৰণে',
'tooltip-n-mainpage' => 'বেটুপাত খুলিবৰ কাৰণে',
'tooltip-n-mainpage-description' => 'প্ৰথম পৃষ্ঠা পৰিদৰ্শন কৰক',
'tooltip-n-portal' => 'ৱিকিপিডিয়া সংক্ৰান্তীয় গুৰুত্বপূৰ্ণ আলোচনা কক্ষ',
'tooltip-n-currentevents' => 'সাম্প্ৰতিক ঘটনাৱলীৰ পটভূমি',
'tooltip-n-recentchanges' => 'অসমীয়া ৱিকিপিডিয়াত হোৱা শেহতীয়া সালসলনিসমূহ চাওক',
'tooltip-n-randompage' => 'অ-পূৰ্বনিৰ্ধাৰিতভাবে যিকোনো এটা পৃষ্ঠা দেখুৱাবৰ কাৰণে',
'tooltip-n-help' => 'সহায়ৰ বাবে ইয়াত ক্লিক কৰক',
'tooltip-t-whatlinkshere' => 'ইয়ালৈ সংযোজিত সকলো পৃষ্ঠাৰ সুচী',
'tooltip-t-recentchangeslinked' => 'সংযুক্ত পৃষ্ঠাসমূহৰ শেহতীয়া সালসলনিসমূহ',
'tooltip-feed-rss' => 'এই পৃষ্ঠাৰ বাবে আৰ-এচ-এচ ভুক্তি',
'tooltip-feed-atom' => 'এই পৃষ্ঠাৰ বাবে এটম ভুক্তি',
'tooltip-t-contributions' => 'এই সদস্যজনৰ অৰিহনাসমূহৰ সূচী চাওক',
'tooltip-t-emailuser' => 'এই সদস্যজনলৈ ই-মেইল পঠাওক',
'tooltip-t-upload' => "ফাইল আপল'ডৰ বাবে",
'tooltip-t-specialpages' => 'বিশেষ পৃষ্ঠাসমূহৰ সূচী',
'tooltip-t-print' => 'এই পৃষ্ঠাৰ ছপা উপযোগী সংস্কৰণ',
'tooltip-t-permalink' => 'পৃষ্ঠাৰ এই সংস্কৰণৰ স্থায়ী সংযোগ',
'tooltip-ca-nstab-main' => 'এই ৱিকিৰ সূচী চাওক',
'tooltip-ca-nstab-user' => 'সভ্যৰ ব্যক্তিগত পৃষ্ঠালৈ',
'tooltip-ca-nstab-media' => 'মিডিয়া পৃষ্ঠাখন চাওক',
'tooltip-ca-nstab-special' => 'এইখন এখন বিশেষ পৃষ্ঠা, আপুনি সম্পাদনা কৰিব নোৱাৰে',
'tooltip-ca-nstab-project' => 'প্ৰকল্প পৃষ্ঠা চাওক',
'tooltip-ca-nstab-image' => 'নথিৰ পৃষ্ঠা চাওক',
'tooltip-ca-nstab-mediawiki' => 'প্ৰণালী বাৰ্তা চাওক',
'tooltip-ca-nstab-template' => 'সাঁচটো চাওক',
'tooltip-ca-nstab-help' => 'সহায় পৃষ্ঠা চাওক',
'tooltip-ca-nstab-category' => 'শ্ৰেণী পৃষ্ঠা চাওক',
'tooltip-minoredit' => 'ইয়াক অগুৰুত্বপূৰ্ণ সম্পাদনা ৰূপে চিহ্নিত কৰক।',
'tooltip-save' => 'আপুনি কৰা সালসলনি সাঁচি থওক',
'tooltip-preview' => 'আপুনি কৰা সালসলনিবোৰৰ খচৰা চাওক, অনুগ্ৰহ কৰি সালসলনি সাঁচি থোৱাৰ আগতে ব্যৱহাৰ কৰক!',
'tooltip-diff' => 'ইয়াত আপুনি কৰা সালসলনিবোৰ দেখুৱাওক',
'tooltip-compareselectedversions' => 'এই পৃষ্ঠাত নিৰ্বাচিত দুটা সংশোধনৰ মাজত পাৰ্থক্য দেখুৱাওক',
'tooltip-watch' => 'এই পৃষ্ঠাখন আপোনাৰ লক্ষ্য-তালিকাভুক্ত কৰক',
'tooltip-watchlistedit-normal-submit' => 'শিৰোনামা আঁতৰাওক',
'tooltip-watchlistedit-raw-submit' => 'লক্ষ্য-তালিকা আপডেট কৰক',
'tooltip-recreate' => 'বিলোপ কৰা সত্বেও পৃষ্ঠাখন পুনৰ সৃষ্টি কৰক',
'tooltip-upload' => "আপল'ড আৰম্ভ কৰক",
'tooltip-rollback' => '"পূৰ্ববত" কৰিলে এটা ক্লিকত এই পৃষ্ঠাৰ শেষ অৱদানকাৰীৰ সম্পাদনা বাতিল কৰি ইয়াক পূৰ্বাৱস্থালৈ ঘূৰাই নিব।',
'tooltip-undo' => '"বাতিল"এ এই সম্পাদনাক পূৰ্বাৱস্থালৈ ঘূৰাই নিব আৰু প্ৰাক্‌দৰ্শনৰ বাবে সম্পাদনাটো খুলিব। ই সম্পাদনা সাৰাংশত কাৰণ এটা লিখিবলৈ সুযোগ দিব।',
'tooltip-preferences-save' => 'পছন্দসমূহ সাঁচি থওক',
'tooltip-summary' => 'চমু সাৰাংশ লিখক',

# Metadata
'notacceptable' => 'ৱিকি চাৰ্ভাৰে আপোনাৰ ক্লায়েন্টে পঢ়িব পৰা বিন্যাসত তথ্য প্ৰদান কৰিব নোৱাৰে।',

# Attribution
'anonymous' => '{{SITENAME}}ৰ বেনামী {{PLURAL:$1|সদস্য|সদস্যসকল}}',
'siteuser' => '{{SITENAME}} সদস্য $1',
'anonuser' => '{{SITENAME}} বেনামী সদস্য $1',
'lastmodifiedatby' => 'এই পৃষ্ঠাখন শেষবাৰৰ কাৰণে $1 তাৰিখে $2 বজাত $3ৰ দ্বাৰা সলনি কৰা হৈছিল',
'othercontribs' => '$1ৰ কাৰ্যৰ ওপৰত ভিত্তি কৰি',
'others' => 'অন্যান্য',
'siteusers' => '{{SITENAME}} {{PLURAL:$2|সদস্য|সদস্যসমূহ}} $1',
'anonusers' => '{{SITENAME}} বেনামী {{PLURAL:$2|সদস্য|সদস্যসকল}} $1',
'creditspage' => 'পৃষ্ঠাৰ স্বীকৃতি',
'nocredits' => 'এই পৃষ্ঠাৰ বাবে কোনো কৃতিত্ব তথ্য উপলব্ধ নাই।',

# Spam protection
'spamprotectiontitle' => 'স্পাম প্ৰতিৰক্ষা ছেকনী',
'spamprotectiontext' => 'আপুনি সাঁচিব বিচৰা পাঠখিনিক স্পাম ছেকনীৰ দ্বাৰা বাধা প্ৰদান কৰা হৈছে ।
সম্ভৱতঃ কোনো ব্লেকলিষ্টেড হোৱা বাহ্যিক সংযোগৰ কাৰণে এনে ঘটিছে ।',
'spamprotectionmatch' => 'নিম্নলিখিত লিখনীৰ বাবে আমাৰ স্পাম পৰিস্ৰাৱক আৰম্ভ হৈছে: $1',
'spambot_username' => 'মিডিয়াৱিকি স্পাম পৰিষ্কাৰ কাৰ্য',
'spam_reverting' => '$1লৈ সংযোগ নথকা সৰ্বশেষ পুনৰীক্ষনলে উভতাই নিয়া হৈছে',
'spam_blanking' => 'সকলো পুনৰীক্ষনৰ $1লৈ সংযোগ আছিল, ৰিক্ত কৰা হৈছে',
'spam_deleting' => 'সকলো পুনৰীক্ষণৰ $1লৈ সংযোগ আছিল, বিলোপ কৰা হৈছে',

# Info page
'pageinfo-title' => '"$1" ৰ তথ্য',
'pageinfo-header-edits' => 'সম্পাদনাসমূহ',
'pageinfo-views' => 'দৰ্শনৰ সংখ্যা',
'pageinfo-watchers' => 'নিৰীক্ষকৰ সংখ্যা',
'pageinfo-edits' => 'সম্পাদনাৰ সংখ্যা',
'pageinfo-authors' => 'মুখ্য লেখকৰ সংখ্যা',

# Patrolling
'markaspatrolleddiff' => 'নিৰীক্ষিত বুলি চিহ্নিত কৰক',
'markaspatrolledtext' => 'এই পৃষ্ঠাখন নিৰীক্ষিত বুলি চিহ্নিত কৰক',
'markedaspatrolled' => 'নিৰীক্ষিত বুলি চিহ্নিত কৰা হ’ল',
'markedaspatrolledtext' => '[[:$1]] ৰ নিৰ্বাচিত সংশোধনীসমূহ নিৰীক্ষিত বুলি চিহ্নিত কৰা হৈছে ।',
'rcpatroldisabled' => 'শেহতীয়া সালসলনিৰ নিৰীক্ষণ নিষ্ক্ৰিয় কৰা হৈছে',
'rcpatroldisabledtext' => 'শেহতীয়া সালসলনিৰ নিৰীক্ষণ কাৰ্য বৰ্তমান নিষ্ক্ৰিয় হৈ আছে ।',
'markedaspatrollederror' => 'নিৰীক্ষিত বুলি চিহ্নিত কৰিব নোৱাৰি',
'markedaspatrollederrortext' => 'নিৰীক্ষণ কৰা বুলি চিহ্নিত কৰিবলৈ আপুনি এটা পুনৰীক্ষণ ধাৰ্য্য কৰিব লাগিব।',
'markedaspatrollederror-noautopatrol' => 'আপোনাক নিজৰ পৰিৱৰ্তনসমূহ নিৰিক্ষিত বুলি চিহ্নিত কৰাৰ অনুমতি নাই।',

# Patrol log
'patrol-log-page' => 'নিৰীক্ষণ অভিলেখ',
'patrol-log-header' => 'এইখন নিৰীক্ষিত সংশোধনসমূহৰ অভিলেখ ।',
'log-show-hide-patrol' => 'নিৰীক্ষণ অভিলেখ $1',

# Image deletion
'deletedrevision' => 'পুৰণি সংশোধনী $1 বিলোপ কৰা হ’ল',
'filedeleteerror-short' => 'নথি বিলোপ কৰাত ত্ৰুটি: $1',
'filedeleteerror-long' => 'এই নথিখন বিলোপ কৰাত সমস্যা হৈছে :

$1',
'filedelete-missing' => '"$1" নথিখন বিলোপ কৰিব পৰা নাযাব, কিয়নো ইয়াৰ কোনো অস্তিত্ব নাই ।',
'filedelete-old-unregistered' => 'নিৰ্ধাৰিত ফাইল সংশোধন "$1" তথ্যকোষত নাই ।',
'filedelete-current-unregistered' => 'নিৰ্ধাৰিত নথি "$1" তথ্যকোষত নাই ।',
'filedelete-archive-read-only' => 'আৰ্কাইভ নিৰ্দেশিকা "$1"ত ৱেবচাৰ্ভাৰ দ্বাৰা লিখিব নোৱাৰি।',

# Browsing diffs
'previousdiff' => 'প্ৰবীণ সম্পাদনা',
'nextdiff' => 'নতুনতৰ সম্পাদনা →',

# Media information
'mediawarning' => "'''সতৰ্কবাৰ্তা''': এই নথিপত্ৰত ত্ৰুটিপূৰ্ণ ক'ড অন্তৰ্ভুক্ত থাকিব পাৰে।
ইয়াক প্ৰেৰণ কৰিলে আপোনাৰ চিষ্টেমৰ ক্ষতি হব পাৰে।",
'imagemaxsize' => "ছবিৰ আকাৰৰ সীমা: <br />''(নথিপত্ৰ বিৱৰণ পৃষ্ঠাসমূহৰ বাবে)''",
'thumbsize' => 'ক্ষুদ্ৰ প্ৰতিকৃতিৰ আকাৰ:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|পৃষ্ঠা|পৃষ্ঠাসমূহ}}',
'file-info' => 'ফাইল আকাৰ: $1, MIME ধৰণ: $2',
'file-info-size' => '$1 × $2 পিক্সেল, ফাইলৰ মাত্ৰা: $3, MIME প্ৰকাৰ: $4',
'file-info-size-pages' => '$1 × $2 পিক্সেলসমূহ, নথিপত্ৰৰ আকাৰ: $3, MIME ধৰণ: $4, $5 {{PLURAL:$5|page|pages}}',
'file-nohires' => 'ইয়াতকৈ ডাঙৰকৈ দেখুৱাব নোৱাৰি ।',
'svg-long-desc' => 'SVG ফাইল, সাধাৰণতঃ $1 × $2 পিক্সেল, ফাইল মাত্ৰা: $3',
'show-big-image' => "সম্পূৰ্ণ ৰিজ'লিউশ্যন",
'show-big-image-preview' => 'এই খচৰাৰ আকাৰ: $1.',
'show-big-image-other' => "আন {{PLURAL:$2|ৰিজ'লিউশ্যন|ৰিজ'লিউশ্যনসমূহ}}: $1।",
'show-big-image-size' => '$1 × $2 পিক্সেল',
'file-info-gif-looped' => 'লুপকৃত',
'file-info-gif-frames' => '$1 {{PLURAL:$1|ফ্ৰেম|ফ্ৰেম}}',
'file-info-png-looped' => 'লুপকৃত',
'file-info-png-repeat' => "$1 {{PLURAL:$1|বাৰ|বাৰ}} চলোৱা হ'ল",
'file-info-png-frames' => '$1 {{PLURAL:$1|ফ্ৰেম|ফ্ৰেম}}',

# Special:NewFiles
'newimages' => 'নতুন ফাইলৰ বিথীকা',
'imagelisttext' => "তলত '''$1''' {{PLURAL:$1|file|files}} সজোঁৱা $2 -ৰ এটা তালিকা দিয়া আছে।",
'newimages-summary' => "এই বিশেষ পৃষ্ঠাখনত সৰ্বশেষত আপল'ড কৰা ফাইলসমূহ দেখিব ।",
'newimages-legend' => 'ছেকনী',
'newimages-label' => 'নথিৰ নাম (বা তাৰ এটা অংশ)',
'showhidebots' => '(বট $1)',
'noimages' => 'চাবলৈ একো নাই ।',
'ilsubmit' => 'সন্ধান কৰক',
'bydate' => 'তাৰিখ অনুযায়ী',
'sp-newimages-showfrom' => '$2, $1 পৰা নতুন চিত্ৰসমূহ দেখুৱাওক',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1ছেকেণ্ড |$1 ছেকেণ্ড}}',
'minutes' => '{{PLURAL:$1|$1 মিনিট|$1 মিনিট}}',
'hours' => '{{PLURAL:$1|$1 ঘন্টা|$1 ঘন্টা}}',
'days' => '{{PLURAL:$1|$1 দিন|$1 দিন}}',
'ago' => '$1 আগেয়ে',

# Bad image list
'bad_image_list' => 'The format is as follows:

Only list items (lines starting with *) are considered.
The first link on a line must be a link to a bad file.
Any subsequent links on the same line are considered to be exceptions, i.e. pages where the file may occur inline.',

# Metadata
'metadata' => 'মেটাডেটা',
'metadata-help' => 'এই ফাইলত অতিৰিক্ত খবৰ আছে, হয়তো ডিজিটেল কেমেৰা বা স্কেনাৰ ব্যৱহাৰ কৰি সৃষ্টি বা পৰিৱৰ্তন কৰা হৈছে ।
এই ফাইলটো আচলৰ পৰা পৰিৱৰ্তন কৰা হৈছে, সেয়েহে পৰিৱৰ্তিত ফাইলটোৰ সৈতে নিমিলিব পাৰে ।',
'metadata-expand' => 'বহলাই ইয়াৰ বিষয়ে জনাওক',
'metadata-collapse' => 'বিষয় বৰ্ণনা নেদেখুৱাবলৈ',
'metadata-fields' => 'এই সূচীত থকা বিষয়বোৰ চিত্ৰৰ পৃষ্ঠাৰ তলত দেখা যাব ।
বাকী বিষয়বোৰ গুপ্ত থাকিব ।
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
* gpsaltitude',

# EXIF tags
'exif-imagewidth' => 'প্ৰস্থ',
'exif-imagelength' => 'উচ্চতা',
'exif-bitspersample' => 'প্ৰতি অংশৰ বিট',
'exif-compression' => 'সংকোচন আঁচনি',
'exif-photometricinterpretation' => 'পিক্সেল গঠন',
'exif-orientation' => 'দিশবিন্যাস',
'exif-samplesperpixel' => 'উপাদানৰ সংখ্যা',
'exif-planarconfiguration' => 'তথ্য বিন্যাস',
'exif-ycbcrsubsampling' => 'Y to C’ৰ হাৰৰ উপনমুনা',
'exif-ycbcrpositioning' => 'Y আৰু C অৱস্থান',
'exif-xresolution' => "আনুভূমিক ৰিজ'লিউশ্যন",
'exif-yresolution' => "উলম্বিক ৰিজ'লিউশ্যন",
'exif-stripoffsets' => 'ছবিৰ ডেটা অৱস্থান',
'exif-rowsperstrip' => 'প্ৰতি ষ্ট্ৰিপত শাৰীসমূহৰ সংখ্যা',
'exif-stripbytecounts' => 'প্ৰতি সংকোচিত স্ট্ৰিপ বাইটসমূহ',
'exif-jpeginterchangeformat' => 'JPEG SOI’লৈ অফচেট',
'exif-jpeginterchangeformatlength' => 'JPEG তথ্যৰ বাইটসমূহ',
'exif-whitepoint' => 'বগা বিন্দুৰ বৰ্ণ',
'exif-primarychromaticities' => 'প্ৰাথমিকতাৰ বৰ্ণসমূহ',
'exif-ycbcrcoefficients' => 'ৰঙ স্থান পৰিৱৰ্তন সাঁচৰ গুণকসমূহ',
'exif-referenceblackwhite' => 'কলা আৰু বগা প্ৰসংগ মানসমূহৰ যোৰ',
'exif-datetime' => 'নথিৰ সলনিৰ তাৰিখ আৰু সময়',
'exif-imagedescription' => 'চিত্ৰ শিৰোনামা',
'exif-make' => 'কেমেৰা নিৰ্মাতা',
'exif-model' => 'কেমেৰা মডেল',
'exif-software' => 'ব্যৱহৃত ছফ্টৱেৰ',
'exif-artist' => 'স্ৰষ্টা',
'exif-copyright' => 'স্বত্বাধিকাৰী',
'exif-exifversion' => 'Exif সংস্কৰণ',
'exif-flashpixversion' => 'সমৰ্থিত Flashpix সংস্কৰণ',
'exif-colorspace' => 'ৰং স্থান',
'exif-componentsconfiguration' => 'প্ৰতিটো উপাদানৰ অৰ্থ',
'exif-compressedbitsperpixel' => 'ছবি সংকোচন অৱস্থা',
'exif-pixelydimension' => 'ছবিৰ প্ৰস্থতা',
'exif-pixelxdimension' => 'ছবিৰ উচ্চতা',
'exif-usercomment' => 'সদস্যৰ মন্তব্য',
'exif-relatedsoundfile' => 'সংশ্লিষ্ট শ্ৰব্য ফাইল',
'exif-datetimeoriginal' => 'তথ্য সৃজনৰ তাৰিখ আৰু সময়',
'exif-datetimedigitized' => 'ডিজিটেলকৰণৰ তাৰিখ আৰু সময়',
'exif-subsectime' => 'তাৰিখসময় চাবছেকেণ্ড',
'exif-subsectimeoriginal' => 'তাৰিখসময়প্ৰকৃত চাবছেকেণ্ড',
'exif-subsectimedigitized' => 'তাৰিখসময়অঙ্কীয় চাবছেকেণ্ড',
'exif-exposuretime' => "এক্সপ'জাৰ সময়",
'exif-exposuretime-format' => '$1 ছেকেণ্ড ($2)',
'exif-fnumber' => 'F সংখ্যা',
'exif-exposureprogram' => 'উন্মুক্ত প্ৰগ্ৰাম',
'exif-spectralsensitivity' => 'বৰ্ণালীৰ সংবেদ্যতা',
'exif-isospeedratings' => 'ISO গতিৰ হাৰ',
'exif-shutterspeedvalue' => 'APEX চাটাৰ গতি',
'exif-aperturevalue' => 'APEX বিন্ধা',
'exif-brightnessvalue' => 'APEX উজ্জ্বলতা',
'exif-exposurebiasvalue' => 'APEX উন্মুক্ত পক্ষপাত',
'exif-maxaperturevalue' => 'সৰ্বাধিক মাটিৰ বিন্ধা',
'exif-subjectdistance' => 'বিষয়বস্তুৰ দূৰত্ব',
'exif-meteringmode' => 'জোখা অৱস্থা',
'exif-lightsource' => 'পোহৰৰ উৎস',
'exif-flash' => 'ফ্লেছ',
'exif-focallength' => "লেন্‌ছৰ ফ'কেল দৈৰ্ঘ্য",
'exif-subjectarea' => 'বিষয়বস্তুৰ ক্ষেত্ৰফল',
'exif-flashenergy' => 'ফ্লেছ শক্তি',
'exif-focalplanexresolution' => 'X ফোকাচ তলৰ ৰিজলিউশ্যন',
'exif-focalplaneyresolution' => 'Y ফোকাচ তলৰ ৰিজলিউশ্যন',
'exif-focalplaneresolutionunit' => "ফ'কেল তল ৰিজলিউশ্যন একক",
'exif-subjectlocation' => 'বিষয়বস্তুৰ স্থান',
'exif-exposureindex' => 'উন্মুক্ত সূচী',
'exif-sensingmethod' => 'সংবেদ পদ্ধতি',
'exif-filesource' => 'ফাইলৰ উৎস',
'exif-scenetype' => 'দৃশ্যৰ প্ৰকাৰ',
'exif-customrendered' => 'স্বনিৰ্বাচিত ছবি প্ৰক্ৰিয়াকৰণ',
'exif-exposuremode' => 'উন্মুক্ত অৱস্থা',
'exif-whitebalance' => 'বগা ভাৰসাম্য',
'exif-digitalzoomratio' => 'ডিজিটেল জুম অনুপাত',
'exif-focallengthin35mmfilm' => '৩৫ মিমি ফ্লিমত ফোকাচ দৈৰ্ঘ্য',
'exif-scenecapturetype' => 'দৃশ্যগ্ৰহণ ধৰণ',
'exif-gaincontrol' => 'দৃশ্য নিয়ন্ত্ৰণ',
'exif-contrast' => 'কন্‌ট্ৰাষ্ট',
'exif-saturation' => 'সংপৃক্ততা',
'exif-sharpness' => 'স্পষ্টতা',
'exif-devicesettingdescription' => 'ডিভাইচ সংহতিসমূহৰ বিৱৰণ',
'exif-subjectdistancerange' => 'বিষয়বস্তুৰ দূৰত্বৰ পৰিসীমা',
'exif-imageuniqueid' => 'অবিকল্প ছবি ID',
'exif-gpsversionid' => 'GPS টেগ সংস্কৰণ',
'exif-gpslatituderef' => 'উত্তৰ বা দক্ষিণ অক্ষাংশ',
'exif-gpslatitude' => 'অক্ষাংশ',
'exif-gpslongituderef' => 'পূৱ বা পশ্চিম দ্ৰাঘিমাংশ',
'exif-gpslongitude' => 'দ্ৰাঘিমাংশ',
'exif-gpsaltituderef' => 'উচ্চতাৰ প্ৰসংগ',
'exif-gpsaltitude' => 'উচ্চতা',
'exif-gpstimestamp' => 'GPS সময় (পাৰমাণৱিক ঘড়ি)',
'exif-gpssatellites' => 'জোখ মাপত ব্যৱহৃত উপগ্ৰহ সমূহ',
'exif-gpsstatus' => 'গ্ৰাহকৰ অৱস্থা',
'exif-gpsmeasuremode' => 'পৰিমাপ অৱস্থা',
'exif-gpsdop' => 'পৰিমাপ পৰিশুদ্ধতা',
'exif-gpsspeedref' => 'দ্ৰুতি একক',
'exif-gpsspeed' => 'GPS গ্ৰাহকৰ গতি',
'exif-gpstrackref' => 'স্থানান্তৰৰ দিশৰ প্ৰসংগ',
'exif-gpstrack' => 'স্থানান্তৰৰ দিশ',
'exif-gpsimgdirectionref' => 'ছবিৰ দিশৰ প্ৰসংগ',
'exif-gpsimgdirection' => 'ছবিৰ দিশ',
'exif-gpsmapdatum' => 'Geodetic সমীক্ষণ তথ্য ব্যৱহৃত',
'exif-gpsdestlatituderef' => 'গন্তব্যৰ অক্ষাংশৰ বাবে প্ৰসংগ',
'exif-gpsdestlatitude' => 'অক্ষাংশৰ গন্তব্য',
'exif-gpsdestlongituderef' => 'গন্তব্যৰ দ্ৰাঘিমাৰ বাবে প্ৰসংগ',
'exif-gpsdestlongitude' => 'লক্ষ্যস্থানৰ দ্ৰাঘিমা',
'exif-gpsdestbearingref' => 'গন্তব্য ধাৰণৰ বাবে প্ৰসংগ',
'exif-gpsdestbearing' => 'গন্তব্য ধাৰণ',
'exif-gpsdestdistanceref' => 'গন্তব্যলৈ দূৰত্বৰ প্ৰসংগ',
'exif-gpsdestdistance' => 'লক্ষ্যস্থানলৈ দূৰত্ব',
'exif-gpsprocessingmethod' => 'GPS প্ৰক্ৰিয়কৰণ পদ্ধতিৰ নাম',
'exif-gpsareainformation' => 'GPS স্থানৰ নাম',
'exif-gpsdatestamp' => 'GPS তাৰিখ',
'exif-gpsdifferential' => 'GPS অৱকলন শুদ্ধ কৰা',
'exif-jpegfilecomment' => 'JPEG নথিপত্ৰ মন্তব্য',
'exif-keywords' => 'কীৱৰ্ডসমূহ',
'exif-worldregioncreated' => "বিশ্বৰ অঞ্চল য'ত ছবিখন তোলা হৈছিল",
'exif-countrycreated' => 'যি দেশত চিত্ৰখন গ্ৰহণ কৰা হৈছে',
'exif-countrycodecreated' => "দেশৰ ক'ড য'ত ছবিখন তোলা হৈছিল",
'exif-provinceorstatecreated' => "প্ৰদেশ অথবা ৰাজ্য য'ত ছবিখন তোলা হৈছিল",
'exif-citycreated' => 'যি চহৰত চিত্ৰখন গ্ৰহণ কৰা হৈছে',
'exif-sublocationcreated' => "নগৰৰ উপঅৱস্থান য'ত ছবিখন তোলা হৈছিল",
'exif-worldregiondest' => 'বিশ্বৰ অঞ্চল দেখুওৱা হল',
'exif-countrydest' => 'দেশ দেখুওৱা হল',
'exif-countrycodedest' => 'দেশৰ ক’ড প্ৰদৰ্শিত',
'exif-provinceorstatedest' => 'প্ৰদেশ অথবা ৰাজ্য দেখুৱা হল',
'exif-citydest' => 'চহৰ প্ৰদৰ্শিত',
'exif-sublocationdest' => "নগৰৰ উপঅৱস্থান দেখুৱা হ'ল",
'exif-objectname' => 'চমু শীৰ্ষক',
'exif-specialinstructions' => 'বিশেষ নিৰ্দেশনাসমূহ',
'exif-headline' => 'শিৰোনাম',
'exif-credit' => 'কৃতিত্ব/যোগানকাৰী',
'exif-source' => 'উৎস',
'exif-editstatus' => 'ছবিৰ সম্পাদনীয় অৱস্থা',
'exif-urgency' => 'অত্যাৱশ্যকতা',
'exif-fixtureidentifier' => 'ফিকশ্চাৰৰ নাম',
'exif-locationdest' => 'অৱস্থান বৰ্ণিত',
'exif-locationdestcode' => "অৱস্থানৰ ক'ড বৰ্ণিত",
'exif-objectcycle' => 'দিনৰ সময় যেতিয়ালৈ মাধ্যম ধাৰ্য্যত',
'exif-contact' => 'যোগাযোগৰ তথ্য',
'exif-writer' => 'লেখক',
'exif-languagecode' => 'ভাষা',
'exif-iimversion' => 'IIM সংষ্কৰণ',
'exif-iimcategory' => 'শ্ৰেণী',
'exif-iimsupplementalcategory' => 'পৰিপূৰ্ণ বিভাগসমূহ',
'exif-datetimeexpires' => 'পিছত ব্যৱহাৰ নকৰিব',
'exif-datetimereleased' => 'প্ৰকাশ',
'exif-originaltransmissionref' => "মূল ট্ৰেন্সমিছ্ন স্থানৰ ক'ড",
'exif-identifier' => 'পৰিচয়ক',
'exif-lens' => 'ব্যৱহৃত লেন্‌ছ',
'exif-serialnumber' => 'কেমেৰাৰ ক্ৰমিক সংখ্যা',
'exif-cameraownername' => 'কেমেৰাৰ অধিকাৰী',
'exif-label' => 'লেবেল',
'exif-datetimemetadata' => 'মেটাডেটাৰ শেষ পৰিৱৰ্তনৰ তাৰিখ',
'exif-nickname' => 'ছবিৰ খচৰা নাম',
'exif-rating' => 'মানাংক (৫ৰ ভিতৰত)',
'exif-rightscertificate' => 'অধিকাৰিত্ব ব্যৱস্থাপনাৰ প্ৰমাণপত্ৰ',
'exif-copyrighted' => 'স্বত্বাধিকাৰ স্থিতি',
'exif-copyrightowner' => 'স্বত্বাধিকাৰী',
'exif-usageterms' => 'ব্যৱহাৰ কৰাৰ চৰ্ত্ত',
'exif-webstatement' => 'অনলাইন স্বত্বাধিকাৰ বক্তব্য',
'exif-originaldocumentid' => 'মূল ডকুমেণ্টৰ অদ্বিতীয় আই.ডি.',
'exif-licenseurl' => 'কপিৰাইট অনুজ্ঞাপত্ৰৰ বাবে URL',
'exif-morepermissionsurl' => 'অতিৰিক্ত অনুজ্ঞাপত্ৰৰ তথ্য',
'exif-attributionurl' => 'এই কাৰ্যৰ পুনৰ ব্যৱহাৰ কৰিলে অনুগ্ৰহ এই লিংকটো যোগ কৰক',
'exif-preferredattributionname' => 'এই কাম পুনৰ-ব্যৱহাৰ কৰোতে, অনুগ্ৰহ কৰি কৃতিত্ব দিব',
'exif-pngfilecomment' => 'পি.এন.জি. ফাইল মন্তব্য',
'exif-disclaimer' => 'দায়লুপ্তি',
'exif-contentwarning' => 'বিষয়বস্তু সতৰ্কবাণী',
'exif-giffilecomment' => 'জি.আই.এফ. ফাইল মন্তব্য',
'exif-intellectualgenre' => 'আইটেমৰ প্ৰকাৰ',
'exif-subjectnewscode' => 'বিষয় ক’ড',
'exif-scenecode' => "IPTC দৃশ্য ক'ড",
'exif-event' => 'ঘটনা বৰ্ণিত',
'exif-organisationinimage' => 'সংগঠন বৰ্ণিত',
'exif-personinimage' => 'ব্যক্তি বর্ণিত',
'exif-originalimageheight' => "ক্ৰ'প কৰাৰ আগত ছবিৰ উচ্চতা",
'exif-originalimagewidth' => "ক্ৰ'প কৰাৰ আগত ছবিৰ প্ৰস্থতা",

# EXIF attributes
'exif-compression-1' => 'অসংকুচিত',
'exif-compression-2' => "CCITT দল ৩ ১-পৰিসৰ পৰিৱৰ্তীত Huffman চলন দৈৰ্ঘ্য এনক'ডিং",
'exif-compression-3' => "CCITT দল ৩ ফেক্স এনক'ডিং",
'exif-compression-4' => "CCITT দল ৪ ফেক্স এনক'ডিং",

'exif-copyrighted-true' => 'কপিৰাইট আছে',
'exif-copyrighted-false' => "ৰাজহুৱা ড'মেইন",

'exif-unknowndate' => 'অজ্ঞাত তাৰিখ',

'exif-orientation-1' => 'সাধাৰণ',
'exif-orientation-2' => 'আনুভূমিকভাৱে লুটিওৱা হল',
'exif-orientation-3' => '১৮০° ঘুৰিলে',
'exif-orientation-4' => 'উলম্বভাৱে লুটিওৱা হল',
'exif-orientation-5' => '৯০° CCW ঘুৰিলে আৰু উলম্ভভাৱে লুটি খালে',
'exif-orientation-6' => '৯০° CCW ঘুৰিলে',
'exif-orientation-7' => '৯০° CW ঘুৰিলে আৰু উলম্ভভাৱে লুটি খালে',
'exif-orientation-8' => '৯০° CW ঘুৰিলে',

'exif-planarconfiguration-1' => 'খণ্ড বিন্যাস',
'exif-planarconfiguration-2' => 'সমতলীয় বিন্যাস',

'exif-colorspace-65535' => 'মানাংকন নোহোৱা',

'exif-componentsconfiguration-0' => 'অস্তিত্ব নাই',

'exif-exposureprogram-0' => 'অবিৱৰিত',
'exif-exposureprogram-1' => 'হস্তচালিত',
'exif-exposureprogram-2' => 'সাধাৰণ প্ৰ’গ্ৰেম',
'exif-exposureprogram-3' => 'বিন্ধাৰ প্ৰাথমিকতা',
'exif-exposureprogram-4' => 'শ্বাটাৰ প্ৰাথমিকতা',
'exif-exposureprogram-5' => 'সৃষ্টিমূলক প্ৰগ্ৰাম (ক্ষেত্ৰৰ গভীৰতাৰ প্ৰতি পক্ষপাতবিশিষ্ট)',
'exif-exposureprogram-6' => "কাৰ্য্যত প্ৰ'গ্ৰাম (দ্ৰুত শ্বাটাৰ গতিৰ প্ৰতি পক্ষপাতবিশিষ্ট)",
'exif-exposureprogram-7' => 'প্ৰতিকৃতি অৱস্থা (পটভূমি ফকাচৰ বাহিৰ থকাকে ক্লজআপ চিত্ৰসমূহ)',
'exif-exposureprogram-8' => 'লেণ্ডস্কেপ অৱস্থা (পটভূমি ফকাচত থকাকৈ লেণ্ডস্কেপ চিত্ৰসমূহৰ বাবে)',

'exif-subjectdistance-value' => '$1 মিটাৰ',

'exif-meteringmode-0' => 'অজ্ঞাত',
'exif-meteringmode-1' => 'গড়',
'exif-meteringmode-2' => 'কেন্দ্র ওজনকৃত গড়',
'exif-meteringmode-3' => 'স্পট',
'exif-meteringmode-4' => 'মাল্টি-স্পট',
'exif-meteringmode-5' => 'বিন্যাস',
'exif-meteringmode-6' => 'আংশিক',
'exif-meteringmode-255' => 'অন্য',

'exif-lightsource-0' => 'অজ্ঞাত',
'exif-lightsource-1' => 'দিনৰ পোহৰ',
'exif-lightsource-2' => 'প্রতিপ্রভ',
'exif-lightsource-3' => 'টাংষ্টেন (ভাষ্কৰ পোহৰ)',
'exif-lightsource-4' => 'ফ্লাছ',
'exif-lightsource-9' => 'ফটফটীয়া বতৰ',
'exif-lightsource-10' => 'ডাৱৰীয়া বতৰ',
'exif-lightsource-11' => 'ছাঁয়া',
'exif-lightsource-12' => 'দিনপোহৰৰ প্ৰতিপ্ৰভ (D 5700 – 7100K)',
'exif-lightsource-13' => 'দিন বগা প্ৰতিপ্ৰভ (N 4600 – 5400K)',
'exif-lightsource-14' => 'শীতল বগা প্ৰতিপ্ৰভ (W 3900 – 4500K)',
'exif-lightsource-15' => 'বগা প্ৰতিপ্ৰভ (WW 3200 – 3700K)',
'exif-lightsource-17' => 'প্ৰামাণিক পোহৰ A',
'exif-lightsource-18' => 'প্ৰামাণিক পোহৰ B',
'exif-lightsource-19' => 'প্ৰামাণিক পোহৰ C',
'exif-lightsource-24' => "ISO স্টুডিঅ' টাংস্টেন",
'exif-lightsource-255' => 'অন্য পোহৰ উৎস',

# Flash modes
'exif-flash-fired-0' => 'ফ্লেছ নজ্বলিলে',
'exif-flash-fired-1' => 'ফ্লেছ জ্বলিল',
'exif-flash-return-0' => 'কোনো স্ট্ৰৌব ঘুৰা চিনাক্ত কৰা ফলন নাই',
'exif-flash-return-2' => 'স্ট্ৰৌব ঘুৰা পোহৰ চিনাক্ত কৰা নগল',
'exif-flash-return-3' => 'স্ট্ৰৌব ঘুৰা পোহৰ চিনাক্ত কৰা হল',
'exif-flash-mode-1' => 'বাধ্যতামূলক ফ্লেছ জ্বলন',
'exif-flash-mode-2' => 'বাধ্যতামূলক ফ্লেছ সংকোচন',
'exif-flash-mode-3' => 'স্বচালিত অৱস্থা',
'exif-flash-function-1' => 'কোনো ফ্লেশ ফলন নাই',
'exif-flash-redeye-1' => 'ৰঙা-চকু ত্ৰাস অৱস্থা',

'exif-focalplaneresolutionunit-2' => 'ইঞ্চি',

'exif-sensingmethod-1' => 'অবিৱৰিত',
'exif-sensingmethod-2' => 'এটা-চিপ ৰঙ স্থান সংবেদক',
'exif-sensingmethod-3' => 'দুটা-চিপ ৰঙ স্থান সংবেদক',
'exif-sensingmethod-4' => 'তিনিটা-চিপ ৰঙ স্থান সংবেদক',
'exif-sensingmethod-5' => 'ৰঙ ক্ৰমায়িত স্থান সংবেদক',
'exif-sensingmethod-7' => 'ত্রিৰৈখিক সংবেদক',
'exif-sensingmethod-8' => 'ৰঙ ক্রমায়িত ৰৈখিক সংবেদক',

'exif-filesource-3' => 'ডিজিটাল স্টিল ক্যামেৰা',

'exif-scenetype-1' => 'এখন প্ৰত্যক্ষভাৱে তোলা ছবি',

'exif-customrendered-0' => 'স্বাভাবিক প্রক্রিয়া',
'exif-customrendered-1' => 'স্বনিৰ্বাচিত প্ৰক্ৰিয়া',

'exif-exposuremode-0' => 'স্বচালিত উন্মুক্তকৰণ',
'exif-exposuremode-1' => 'হস্তচালিত উন্মুক্তকৰণ',
'exif-exposuremode-2' => 'স্বচালিত বন্ধনী',

'exif-whitebalance-0' => 'স্বচালিত বগা ভাৰসাম্য',
'exif-whitebalance-1' => 'হস্তচালিত বগা ভাৰসাম্য',

'exif-scenecapturetype-0' => 'প্ৰামাণিক',
'exif-scenecapturetype-1' => 'নৈসৰ্গিক',
'exif-scenecapturetype-2' => 'প্ৰতিকৃতি',
'exif-scenecapturetype-3' => 'ৰাতিৰ দৃশ্য',

'exif-gaincontrol-0' => 'একো নাই',
'exif-gaincontrol-1' => 'নিম্ন লাভ',
'exif-gaincontrol-2' => 'উচ্চ লাভ',
'exif-gaincontrol-3' => 'নিম্ন ক্ষতি',
'exif-gaincontrol-4' => 'উচ্চ ক্ষতি',

'exif-contrast-0' => 'সাধাৰণ',
'exif-contrast-1' => 'কোমল',
'exif-contrast-2' => 'কঠিন',

'exif-saturation-0' => 'সাধাৰণ',
'exif-saturation-1' => 'নিম্ন সংপৃক্তি',
'exif-saturation-2' => 'উচ্চ সংপৃক্তি',

'exif-sharpness-0' => 'সাধাৰণ',
'exif-sharpness-1' => 'কোমল',
'exif-sharpness-2' => 'কঠিন',

'exif-subjectdistancerange-0' => 'অজ্ঞাত',
'exif-subjectdistancerange-1' => "মেক্ৰ'",
'exif-subjectdistancerange-2' => 'নিকট দৃষ্টি',
'exif-subjectdistancerange-3' => 'দূৰ দৃষ্টি',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'উত্তৰ অক্ষাংশ',
'exif-gpslatitude-s' => 'দক্ষিণ অক্ষাংশ',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'পূর্ব দ্রাঘিমা',
'exif-gpslongitude-w' => 'পশ্চিম দ্রাঘিমা',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => 'সমুদ্ৰপৃষ্ঠৰ $1 {{PLURAL:$1|মিটাৰ|মিটাৰ}} ওপৰত',
'exif-gpsaltitude-below-sealevel' => 'সমুদ্ৰপৃষ্ঠৰ $1 {{PLURAL:$1|মিটাৰ|মিটাৰ}} তলত',

'exif-gpsstatus-a' => 'পৰিমাপ চলি আছে',
'exif-gpsstatus-v' => 'পৰিমাপৰ আন্তঃকাৰ্যকৰীতা',

'exif-gpsmeasuremode-2' => 'দ্বিমাত্রিক পৰিমাপ',
'exif-gpsmeasuremode-3' => 'ত্রিমাত্রিক পৰিমাপ',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'কিলোমিটাৰ প্ৰতি ঘন্টা',
'exif-gpsspeed-m' => 'মাইল প্ৰতি ঘন্টা',
'exif-gpsspeed-n' => 'নট',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'কিলোমিটাৰ',
'exif-gpsdestdistance-m' => 'মাইল',
'exif-gpsdestdistance-n' => 'নটিকেল মাইল',

'exif-gpsdop-excellent' => 'অতি উত্তম ($1)',
'exif-gpsdop-good' => 'ভাল ($1)',
'exif-gpsdop-moderate' => 'মোটামুটি ($1)',
'exif-gpsdop-fair' => 'ধুনীয়া ($1)',
'exif-gpsdop-poor' => 'বেয়া ($1)',

'exif-objectcycle-a' => 'কেৱল পুৱা',
'exif-objectcycle-p' => 'কেৱল সন্ধ্যা',
'exif-objectcycle-b' => 'দুয়ো ৰাতিপুৱা আৰু সন্ধিয়া',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'প্ৰকৃত দিশ',
'exif-gpsdirection-m' => 'চুম্বকীয় দিশ',

'exif-ycbcrpositioning-1' => 'কেন্দ্ৰিত',
'exif-ycbcrpositioning-2' => 'সমানভাৱে চাইট কৰা',

'exif-dc-contributor' => 'বৰঙণিদাতাসকল',
'exif-dc-coverage' => 'মাধ্যমৰ ব্যৱধানীক অথবা অস্থায়ী অৱকাশ',
'exif-dc-date' => 'তাৰিখ(সমূহ)',
'exif-dc-publisher' => 'প্ৰকাশক',
'exif-dc-relation' => 'প্ৰাসংগিক মিডিয়া',
'exif-dc-rights' => 'অধিকাৰসমূহ',
'exif-dc-source' => 'উৎস মিডিয়া',
'exif-dc-type' => 'মিডিয়াৰ প্ৰকাৰ',

'exif-rating-rejected' => 'বাতিল কৰা হৈছে',

'exif-isospeedratings-overflow' => '৬৫৫৩৫তকৈ বেছি',

'exif-iimcategory-ace' => 'কলা, সংস্কৃতি আৰু মনোৰঞ্জন',
'exif-iimcategory-clj' => 'অপৰাধ আৰু আইন',
'exif-iimcategory-dis' => 'দুৰ্যোগ আৰু দুৰ্ঘটনা',
'exif-iimcategory-fin' => 'অৰ্থনীতি আৰু ব্যৱসায়',
'exif-iimcategory-edu' => 'শিক্ষা',
'exif-iimcategory-evn' => 'পৰিবেশ',
'exif-iimcategory-hth' => 'স্বাস্থ্য',
'exif-iimcategory-hum' => 'মানৱ আগ্ৰহ',
'exif-iimcategory-lab' => 'শ্ৰম',
'exif-iimcategory-lif' => 'জীৱনশৈলী আৰু অৱকাশ',
'exif-iimcategory-pol' => 'ৰাজনীতি',
'exif-iimcategory-rel' => 'ধৰ্ম আৰু বিশ্বাস',
'exif-iimcategory-sci' => 'বিজ্ঞান আৰু প্ৰযুক্তি',
'exif-iimcategory-soi' => 'সামাজিক বিষয়সমূহ',
'exif-iimcategory-spo' => 'ক্ৰীড়া',
'exif-iimcategory-war' => 'যুদ্ধ, সংঘাত আৰু উত্তেজনা',
'exif-iimcategory-wea' => 'বতৰ',

'exif-urgency-normal' => 'সাধাৰণ ($1)',
'exif-urgency-low' => 'নিম্ন ($1)',
'exif-urgency-high' => 'উচ্চ ($1)',
'exif-urgency-other' => 'ব্যৱহাৰকাৰী-বিৱৰিত প্ৰাথমিকতা ($1)',

# External editor support
'edit-externally' => 'বাহিৰা আহিলা ব্যৱহাৰ কৰি এই ফাইলটো সম্পাদনা কৰক ।',
'edit-externally-help' => 'অধিক তথ্যৰ কাৰণে [//www.mediawiki.org/wiki/Manual:External_editors প্ৰস্তুত কৰা নিৰ্দেশনা] চাওক ।',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'সকলো',
'namespacesall' => 'সকলোবোৰ',
'monthsall' => 'সকলো',
'limitall' => 'সকলোবোৰ',

# E-mail address confirmation
'confirmemail' => 'ই-মেইল ঠিকনা নিশ্চিত কৰক',
'confirmemail_noemail' => 'আপোনাৰ [[Special:Preferences|সদস্য পছন্দসমূহ]]ত কোনো বৈধ ই-মেইল ঠিকনা নাই ।',
'confirmemail_text' => '{{SITENAME}}ত ই-মেইল ভিত্তিক সেৱা ব্যৱহাৰ কৰাৰ পূৰ্বে আপুনি আপোনাৰ ই-মেইল ঠিকনা নিশ্চিত কৰিব লাগিব । তলৰ বুটামটো টিপি আপোনাৰ ই-মেইল ঠিকনালৈ এখন নিশ্চিতকৰণ মেইল পঠিয়াওক ।
মেইলখনত সংকেতসহ এটা সংযোগ থাকিব;
আপোনাৰ ব্ৰাউজাৰত সংযোগটো ল’ড কৰি ই-মেইল ঠিকনা নিশ্চিত কৰক ।',
'confirmemail_pending' => 'এটা নিশ্চিতকৰণ সংকেত ইতিমধ্যেই আপোনাই ই-মেইল কৰা হৈছে;
আপুনি যদি খন্তেক সময়ৰ আগতেহে একাউণ্ট সৃষ্টি কৰিছে, তেন্তে নতুন সংকেতৰ বাবে অনুৰোধ কৰাৰ পূৰ্বে কিছু সময় অপেক্ষা কৰক ।',
'confirmemail_send' => 'এটা নিশ্চিতকৰণ সংকেত মেইল কৰক',
'confirmemail_sent' => 'নিশ্চিতকৰণ ই-মেইল পঠোৱা হৈছে ।',
'confirmemail_oncreate' => 'আপোনাৰ ই-মেইল ঠিকনালৈ এটা নিশ্চিতকৰণ সংকেত পঠোৱা হৈছে ।
প্ৰৱেশ কৰিবলৈ এই সংকেতৰ আৱশ্যক নাই, কিন্তু ৱিকিৰ যিকোনো ই-মেইল ভিত্তিক সেৱা সক্ৰিয় কৰিবলৈ ইয়াৰ প্ৰয়োজন হ’ব ।',
'confirmemail_sendfailed' => '{{SITENAME}}এ আপোনালৈ নিশ্চিতকৰণ ই-মেইল পঠাব পৰা নাই ।
অনুগ্ৰহ কৰি আপোনাৰ ই-মেইল ঠিকনা ভুল বৰ্ণ আছে নেকি পৰীক্ষা কৰক ।

মেইলাৰে ঘূৰাই পঠাইছে: $1',
'confirmemail_invalid' => 'নিশ্চিতকৰণ সংকেত অবৈধ ।
সম্ভৱতঃ ইয়াৰ ম্যাদ উকলি গৈছে ।',
'confirmemail_needlogin' => 'আপোনাৰ ই-মেইল ঠিকনা নিশ্চিতকৰণৰ বাবে $1 কৰক ।',
'confirmemail_success' => 'আপোনাৰ ই-মেইল ঠিকনা নিশ্চিতকৰণ কৰা হৈছে ।
আপুনি এতিয়া [[Special:UserLogin|প্ৰৱেশ]] কৰক আৰু ৱিকি উপভোগ কৰক ।',
'confirmemail_loggedin' => 'আপোনাৰ ই-মেইল ঠিকনা নিশ্চিত কৰা হৈছে ।',
'confirmemail_error' => 'আপোনাৰ নিশ্চিতকৰণ সংৰক্ষণ কৰাত কিছু সমস্যা হৈছে ।',
'confirmemail_subject' => '{{SITENAME}} ই-মেইল ঠিকনা নিশ্চিতকৰণ',
'confirmemail_body' => 'কোনোবাই (সম্ভৱতঃ আপুনি) আই.পি. ঠিকনা $1ৰ পৰা এইটো ই-মেইল ঠিকনা ব্যৱহাৰ কৰি {{SITENAME}}ত
এটা একাউণ্ট "$2" পঞ্জীয়ন কৰিছে ।

এই একাউণ্ট আপোনাৰ হয়নে নহয় নিশ্চিত কৰাৰ বাবে আৰু {{SITENAME}}ত ই-মেইল বৈশিষ্টসমূহ সক্ৰিয় কৰাৰ বাবে
আপোনাৰ ব্ৰাউজাৰত এই সংযোগটো খোলক:

$3

যদি আপুনি একাউণ্টটো পঞ্জীয়ন কৰা *নাই*, তেন্তে ই-মেইল ঠিকনা নিশ্চিতকৰণ বাতিলৰ বাবে
এই সংযোগটো চাওক:

$5

এই নিশ্চিতকৰণ সংকেতৰ ম্যাদ $4ত উকলিব ।',
'confirmemail_body_changed' => 'কোনোবাই (সম্ভৱতঃ আপুনি) আই.পি. ঠিকনা $1ৰ পৰা {{SITENAME}}ত
একাউণ্ট "$2"ৰ ই-মেইল ঠিকনা সলনি  কৰিছে ।

এই একাউণ্ট আপোনাৰ হয়নে নহয় নিশ্চিত কৰাৰ বাবে আৰু {{SITENAME}}ত ই-মেইল বৈশিষ্টসমূহ পুনৰ সক্ৰিয় কৰাৰ বাবে
আপোনাৰ ব্ৰাউজাৰত এই সংযোগটো খুলক:

$3

যদি একাউণ্টটো আপোনাৰ *নহয়*, তেন্তে ই-মেইল ঠিকনা নিশ্চিতকৰণ বাতিলৰ বাবে
এই সংযোগটো চাওক:

$5

এই নিশ্চিতকৰণ সংকেতৰ ম্যাদ $4ত উকলিব ।',
'confirmemail_body_set' => 'কোনোবাই (সম্ভৱতঃ আপুনি) আই.পি. ঠিকনা $1ৰ পৰা {{SITENAME}}ত
একাউণ্ট "$2"ৰ ই-মেইল ঠিকনা এইটো প্ৰদান কৰিছে ।

এই একাউণ্ট আপোনাৰ হয়নে নহয় নিশ্চিত কৰাৰ বাবে আৰু {{SITENAME}}ত ই-মেইল বৈশিষ্টসমূহ পুনৰ সক্ৰিয় কৰাৰ বাবে
আপোনাৰ ব্ৰাউজাৰত এই সংযোগটো খুলক:

$3

যদি একাউণ্টটো আপোনাৰ *নহয়*, তেন্তে ই-মেইল ঠিকনা নিশ্চিতকৰণ বাতিলৰ বাবে
এই সংযোগটো চাওক:

$5

এই নিশ্চিতকৰণ সংকেতৰ ম্যাদ $4ত উকলিব ।',
'confirmemail_invalidated' => 'ই-মেইল ঠিকনা নিশ্চিতকৰণ বাতিল কৰা হৈছে',
'invalidateemail' => 'ই-মেইল নিশ্চিতকৰণ বাতিল কৰক',

# Scary transclusion
'scarytranscludedisabled' => '[আন্তঃৱিকি আন্তঃভুক্তি নিষ্ক্ৰিয় কৰা আছে]',
'scarytranscludefailed' => '[$1ৰ বাবে সাঁচ অনা অসফল হৈছে]',
'scarytranscludetoolong' => '[URL অত্যাধিক দীঘল]',

# Delete conflict
'deletedwhileediting' => "'''সতৰ্কবাণী''': আপুনি সম্পাদনা আৰম্ভ কৰাৰ পিছত পৃষ্ঠাখন বিলোপ কৰা হৈছে !",
'confirmrecreate' => "আপুনি সম্পাদনা আৰম্ভ কৰাৰ পিছত সদস্য [[User:$1|$1]] ([[User talk:$1|আলোচনা]])য়ে পৃষ্ঠাখন বিলোপ কৰিছে, তাৰ কাৰণ:
: ''$2''
আপুনি এই পৃষ্ঠাখন আকৌ সৃষ্টি কৰিব খোজাটো নিশ্চিত কৰক ।",
'confirmrecreate-noreason' => 'আপুনি সম্পাদনা আৰম্ভ কৰাৰ পিছত সদস্য [[User:$1|$1]] ([[User talk:$1|আলোচনা]])য়ে পৃষ্ঠাখন বিলোপ কৰিছে । আপুনি এই পৃষ্ঠাখন আকৌ সৃষ্টি কৰিব খোজাটো অনুগ্ৰহ কৰি নিশ্চিত কৰক ।',
'recreate' => 'পুনৰ সৃষ্টি কৰক',

# action=purge
'confirm_purge_button' => 'ঠিক আছে',
'confirm-purge-top' => 'এই পৃষ্ঠাৰ কেচ্‌ খালী কৰা হওক ?',
'confirm-purge-bottom' => "এখন পৃষ্ঠাক শোধিত কৰিলে কেচ্‌ আতৰি যায় আৰু সকলোতকৈ শেহতীয়া সংশোধন প্ৰদৰ্শিত হ'বলৈ বাধ্য কৰে।",

# action=watch/unwatch
'confirm-watch-button' => 'ঠিক আছে',
'confirm-watch-top' => 'এই পৃষ্ঠাখন আপোনাৰ লক্ষ্য-তালিকাত যোগ কৰক',
'confirm-unwatch-button' => 'ঠিক আছে',
'confirm-unwatch-top' => 'এই পৃষ্ঠাখন আপোনাৰ লক্ষ্য-তালিকাৰ পৰা আঁতৰাওক',

# Multipage image navigation
'imgmultipageprev' => '← পূৰ্বৱৰ্তী পৃষ্ঠা',
'imgmultipagenext' => 'পৰৱৰ্তী পৃষ্ঠা →',
'imgmultigo' => 'যাওক',
'imgmultigoto' => '$1 পৃষ্ঠালৈ যাওক',

# Table pager
'ascending_abbrev' => 'আৰোহণ',
'descending_abbrev' => 'অৱতৰণ',
'table_pager_next' => 'পৰৱৰ্তী পৃষ্ঠা',
'table_pager_prev' => 'পূৰ্ববৰ্তী পৃষ্ঠা',
'table_pager_first' => 'প্ৰথম পৃষ্ঠা',
'table_pager_last' => 'শেষ পৃষ্ঠা',
'table_pager_limit' => 'প্ৰতি পৃষ্ঠাত $1 টা বিষয়বস্তু দেখুৱাওক',
'table_pager_limit_label' => 'প্ৰতি পৃষ্ঠাৰ আইটেম:',
'table_pager_limit_submit' => 'যাওক',
'table_pager_empty' => 'ফলাফল নাই',

# Auto-summaries
'autosumm-blank' => "পৃষ্ঠাখন খালী কৰা হ'ল",
'autosumm-replace' => 'পৄষ্ঠাখনক "$1"ৰে সলনি কৰা হ\'ল',
'autoredircomment' => "[[$1]]-ক পুনৰ্নিৰ্দেশ কৰা হ'ল",
'autosumm-new' => '"$1" দি পৃষ্ঠা সৃষ্টি কৰা হ\'ল',

# Live preview
'livepreview-loading' => "ল'ড হৈ আছে…",
'livepreview-ready' => "ল'ড হৈ আছে… প্ৰস্তুত!",
'livepreview-failed' => "জীৱন্ত প্ৰাকদৰ্শন ব্যৰ্থ হ'ল!
সাধাৰণ প্ৰাকদৰ্শন চেষ্টা কৰি চাওক।",
'livepreview-error' => 'সংযোগ কৰিবলে ব্যৰ্থ হল: $1 "$2"।
সাধাৰণ প্ৰাকদৰ্শন চেষ্টা কৰি চাওক।',

# Friendlier slave lag warnings
'lag-warn-normal' => '$1 {{PLURAL:$1|ছেকেণ্ড|ছেকেণ্ড}} তকৈ নতুন পৰিৱৰ্তনসমূহ এই তালিকাত দেখুওৱা নহবও পাৰে।',
'lag-warn-high' => 'উচ্চ ডাটাবেইচ চাৰ্ভাৰ পলমৰ বাবে, $1 {{PLURAL:$1|ছেকেণ্ড|ছেকেণ্ড}} তকৈ নতুন পৰিৱৰ্তনসমূহ এই তালিকাত দেখুওৱা নহবও পাৰে।',

# Watchlist editor
'watchlistedit-numitems' => 'কথাবতৰা পৃষ্ঠাসমূহ বাদ দি আপোনাৰ লক্ষ্য-তালিকাত {{PLURAL:$1|এটা শিৰোনামা|$1 টা শিৰোনামা}} আছে ।',
'watchlistedit-noitems' => 'আপোনাৰ লক্ষ্য-তালিকাত এখনো ঘাই পৃষ্ঠা নাই ।',
'watchlistedit-normal-title' => 'লক্ষ্য-তালিকা সম্পাদন কৰক',
'watchlistedit-normal-legend' => 'লক্ষ্য-তালিকাৰ পৰা শিৰোনামা আঁতৰাওক',
'watchlistedit-normal-explain' => 'আপোনাৰ নজৰ তালিকাত থকা সূচীবদ্ধ পৃষ্ঠা তলত দেখুওৱা হৈছে।
পৃষ্ঠা সূচী আৰৰাবলৈ তাৰ আগত দিয়া বাকচত ক্লিক কৰক, আৰু "{{int:Watchlistedit-normal-submit}}"ত ক্লিক কৰক।
আপুনি [[Special:EditWatchlist/raw|মূল তালিকাখনো]] সম্পাদনা কৰিব পাৰে।',
'watchlistedit-normal-submit' => 'শিৰোনামা আঁতৰাওক',
'watchlistedit-normal-done' => "{{PLURAL:$1|এটা শিৰোনামা|$1 টা শিৰোনামা}} আপোনাৰ লক্ষ্যতালিকাৰ পৰা আঁতৰোৱা হ'ল:",
'watchlistedit-raw-title' => 'অশোধিত অনুসৰণ-তালিকা সম্পাদন কৰক',
'watchlistedit-raw-legend' => 'অশোধিত অনুসৰণ-তালিকা সম্পাদন কৰক',
'watchlistedit-raw-explain' => 'আপোনাৰ দৰ্শন তালিকাত থকা শীৰ্ষকসমূহ তলত দেখুওৱা হৈছে, আৰু তালিকালৈ যোগ কৰি অথবা তালিকাৰ পৰা আতৰাই সম্পাদন কৰিব পাৰি;
প্ৰতি শাৰী এটা শীৰ্ষক হিচাপে।
যেতিয়া সম্পূৰ্ণ হব, "{{int:Watchlistedit-raw-submit}}"ত ক্লিক কৰিব।
আপুনি লগতে [[Special:EditWatchlist|প্ৰামাণিক সম্পাদকক ব্যৱহাৰ কৰিব পাৰে]]।',
'watchlistedit-raw-titles' => 'শিৰোনামা:',
'watchlistedit-raw-submit' => 'লক্ষ্য-তালিকা আপডেট কৰক',
'watchlistedit-raw-done' => "আপোনাৰ লক্ষ্য-তালিকা নবীকৰণ কৰা হ'ল",
'watchlistedit-raw-added' => "{{PLURAL:$1|এটা শিৰোনামা|$1-টা শিৰোনামা}} যোগ কৰা হ'ল:",
'watchlistedit-raw-removed' => "{{PLURAL:$1|এটা শিৰোনামা|$1-টা শিৰোনামা}} আঁতৰোৱা হ'ল:",

# Watchlist editing tools
'watchlisttools-view' => 'সংগতি থকা সাল-সলনিবোৰ চাওক',
'watchlisttools-edit' => 'লক্ষ্য-তালিকা চাওক আৰু সম্পাদনা কৰক',
'watchlisttools-raw' => 'অশোধিত লক্ষ্য-তালিকা সম্পাদনা কৰক',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|talk]])',

# Core parser functions
'unknown_extension_tag' => 'অজ্ঞাত এক্সটেনচন টেগ "$1"',
'duplicate-defaultsort' => '\'\'\'সাৱধান!\'\'\' পূৰ্বনিৰ্ধাৰিত ক্ৰমসূচক "$2"-এ আগৰ ক্ৰমসূচক "$1"ক বিস্থাপিত কৰিছে।',

# Special:Version
'version' => 'সংস্কৰণ',
'version-extensions' => 'ইন্‌ষ্টল কৰা এক্সটেনচনসমূহ',
'version-specialpages' => 'বিশেষ পৃষ্ঠাসমূহ',
'version-parserhooks' => 'পাৰ্চাৰ হুক',
'version-variables' => 'চলকসমূহ',
'version-antispam' => 'স্পাম প্ৰতিৰোধ',
'version-skins' => 'আৱৰণ',
'version-other' => 'অন্য',
'version-mediahandlers' => 'মাধ্যম ব্যৱস্থাপকসমূহ',
'version-hooks' => 'হুকসমূহ',
'version-extension-functions' => 'সম্প্ৰসাৰন ফলনসমূহ',
'version-parser-extensiontags' => 'পাৰ্চাৰ এক্সটেনচন টেগসমূহ',
'version-parser-function-hooks' => 'পাৰ্চাৰ ফাংচন হুকসমূহ',
'version-hook-name' => 'হুক নাম',
'version-hook-subscribedby' => 'চাবস্ক্ৰাইব কৰিছে',
'version-version' => '(সংস্কৰণ $1)',
'version-license' => 'অনুজ্ঞাপত্ৰ',
'version-poweredby-credits' => "এই ৱিকি '''[//www.mediawiki.org/ মিডিয়াৱিকিৰ]''' দ্বাৰা প্ৰচলিত , কপিৰাইট © ২০০১-$1 $2.",
'version-poweredby-others' => 'অন্য',
'version-license-info' => "মিডিয়াৱিকি এটা বিনামূলীয়া চফ্টৱেৰ; আপুনি Free Software Foundation -ৰ দ্বাৰা প্ৰকাশিত GNU General Public License -ৰ চুক্তিসমূহৰ অন্তৰ্গত ইয়াক পুনৰ বিতৰণ কৰিব পাৰিব অথবা সলনি কৰিব পাৰিব; হয়তো অনুজ্ঞাপত্ৰৰ সংস্কৰণ ২ 
অথবা (আপোনাৰ বিকল্পত) যিকোনো পৰৱৰ্তী সংস্কৰণ।

মিডিয়াৱিকি এইটো আশাত বিতৰণ কৰা হৈছে যে ই ব্যৱহাৰযোগ্য হ'ব, কিন্তু কোনো ৱাৰেন্টি নথকাকৈ; ব্যৱসায়ীক অথবা কোনো এটা বিশেষ কাৰণৰ যোগ্যতাৰ বাবে বুজোৱা ৱাৰেন্টি নথকাকৈ। 
অধিক জানিবলৈ GNU General Public License চাওক।

আপুনি এই প্ৰগ্ৰামৰ সৈতে [{{SERVER}}{{SCRIPTPATH}}/COPYING GNU General Public License -ৰ এটা কপি] পাব লাগে; যদি নাই পোৱা, Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA অথবা [//www.gnu.org/licenses/old-licenses/gpl-2.0.html ইয়াক অনলাইন পঢ়ক] -লে লিখক।",
'version-software' => 'ইনষ্টল কৰা ছফ্টৱেৰ',
'version-software-product' => 'সামগ্ৰী',
'version-software-version' => 'সংস্কৰণ',
'version-entrypoints' => 'প্ৰৱেশ পইণ্ট ইউআৰএল',
'version-entrypoints-header-entrypoint' => 'প্ৰৱেশ পইণ্ট',
'version-entrypoints-header-url' => 'ইউআৰএল',

# Special:FilePath
'filepath' => 'নথিৰ পথ',
'filepath-page' => 'নথি:',
'filepath-submit' => 'যাওক',
'filepath-summary' => 'এই বিশেষ পৃষ্ঠায় এটা নথিপত্ৰৰ বাবে সম্পূৰ্ণ পথ ঘুৰাই পঠায়।
ছবিসমূহক সম্পূৰ্ণ বিভেদনত দেখুৱা হয়, অন্য নথিপত্ৰ ধৰণসমূহ সিহতৰ সংলঘ্ন প্ৰগ্ৰামৰ সৈতে প্ৰত্যক্ষভাৱে আৰম্ভ হয়।',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'প্ৰতিলিপি পৃষ্ঠাসমূহ অনুসন্ধান কৰক',
'fileduplicatesearch-summary' => 'হেছ্‌ মানসমূহৰ উপৰত নিৰ্ভৰ কৰি প্ৰতিলিপিত নথিপত্ৰসমূহৰ বাবে সন্ধান কৰক।',
'fileduplicatesearch-legend' => 'প্ৰতিলিপিৰ বাবে অনুসন্ধান কৰক',
'fileduplicatesearch-filename' => 'ফাইলৰ নাম:',
'fileduplicatesearch-submit' => 'সন্ধান কৰক',
'fileduplicatesearch-info' => '$1 × $2 পিক্সেল<br /> ফাইলৰ মাত্ৰা: $3<br /> MIME প্ৰকাৰ: $4',
'fileduplicatesearch-result-1' => '"$1" নথিৰ কোনো প্ৰতিলিপি নাই ।',
'fileduplicatesearch-result-n' => '"$1" ফাইলৰ {{PLURAL:$2|এটা প্ৰতিলিপি|$2টা প্ৰতিলিপি}} আছে ।',
'fileduplicatesearch-noresults' => 'কোনো "$1" নামৰ নথিৰ সন্ধান পোৱা নগ’ল ।',

# Special:SpecialPages
'specialpages' => 'বিশেষ পৃষ্ঠাসমূহ',
'specialpages-note' => '----
* সাধাৰণ বিশেষ পৃষ্ঠাসমূহ।
* <span class="mw-specialpagerestricted">সীমাবদ্ধ বিশেষ পৃষ্ঠাসমূহ।</span>
* <span class="mw-specialpagecached">কেশ্ব কৰা বিশেষ পৃষ্ঠাসমূহ (অপ্ৰচলিতও হ\'ব পাৰে)।</span>',
'specialpages-group-maintenance' => 'তত্বাৱধানৰ কাৰ্যবিৱৰণীসমূহ',
'specialpages-group-other' => 'অন্যান্য বিশেষ পৃষ্ঠাসমূহ',
'specialpages-group-login' => 'প্ৰৱেশ/সদস্যভুক্তি',
'specialpages-group-changes' => 'সাম্প্ৰতিক সালসলনি আৰু অভিলেখসমূহ',
'specialpages-group-media' => "মিডিয়া বিৱৰণী আৰু আপল'ডসমূহ",
'specialpages-group-users' => 'সদস্যবৃন্দ আৰু অধিকাৰসমূহ',
'specialpages-group-highuse' => 'অধিক ব্যবহৃত পৃষ্ঠাসমূহ',
'specialpages-group-pages' => 'পৃষ্ঠাৰ তালিকাসমূহ',
'specialpages-group-pagetools' => 'পৃষ্ঠা সা-সঁজুলি',
'specialpages-group-wiki' => 'ৱিকি তথ্য আৰু সা-সঁজুলি',
'specialpages-group-redirects' => 'পুনৰ্নিৰ্দেশ কৰা বিশেষ পৃষ্ঠাসমূহ',
'specialpages-group-spam' => 'স্পাম সা-সঁজুলি',

# Special:BlankPage
'blankpage' => 'উকা পৃষ্ঠা',
'intentionallyblankpage' => 'এই পৃষ্ঠা ইচ্ছাকৃতভাৱে খালী ৰখা হৈছে ।',

# External image whitelist
'external_image_whitelist' => " #এই শাৰী যেনেকৈ আছে তেনেকৈয়ে ৰাখক<pre>
#স্বাভাৱিক অভিব্যক্তি অংশসমূহ (কেৱল সেই অংশ যি // মাজেৰে যায়) তলত দিয়ক
#ইহঁতক বহিৰ্তম (hotlinked) ছবিসমূহৰ URL সমূহৰ সৈতে মিলাই চোৱা হ'ব
#যিসমূহ মিল খায় সেইসমূহক ছবি হিচাপে প্ৰদৰ্শন কৰা হব, নহলে কেৱল ছবিখনলৈ এটা সংযোগ দেখুওৱা হ'ব
# # -ৰ সৈতে আৰম্ভ হোৱা শাৰীসমূহক মন্তব্য বুলি ধৰা হয়
#ই ফলা-সংবেদ্য

#সকলো regex অংশক এই শাৰীৰ ওপৰত দিব। এই শাৰী যেনেকৈ আছে তেনেকৈয়ে ৰাখক</pre>",

# Special:Tags
'tags' => 'সালসলনি টেগসমূহ চাওক',
'tag-filter' => '[[Special:Tags|টেগ]] ছেকনী:',
'tag-filter-submit' => 'সংশোধন',
'tags-title' => 'টেগসমূহ',
'tags-intro' => 'ছফ্টৱেৰে সম্পাদনা চিহ্নিত কৰিব পৰা টেগসমূহ আৰু সেইবোৰৰ অৰ্থ এই পৃষ্ঠাত তালিকাভুক্ত কৰা হৈছে ।',
'tags-tag' => 'টেগ নাম',
'tags-display-header' => 'পৰিৱৰ্তন তালিকাসমূহত ৰূপ',
'tags-description-header' => 'অৰ্থৰ পূৰ্ণ বৰ্ণনা',
'tags-hitcount-header' => 'টেগকৃত সালসলনি',
'tags-edit' => 'সম্পাদনা',
'tags-hitcount' => '$1 {{PLURAL:$1|সাল-সলনি|সাল-সলনিসমূহ}}',

# Special:ComparePages
'comparepages' => 'পৃষ্ঠা তুলনা কৰক',
'compare-selector' => 'পৃষ্ঠা পুনৰীক্ষন তুলনা কৰক',
'compare-page1' => 'পৃষ্ঠা ১',
'compare-page2' => 'পৃষ্ঠা ২',
'compare-rev1' => 'পুনৰীক্ষণ ১',
'compare-rev2' => 'পুনৰীক্ষণ ২',
'compare-submit' => 'তুলনা কৰক',
'compare-invalid-title' => 'আপুনি নিৰ্ধাৰণ কৰা শিৰোনামাটো অবৈধ ।',
'compare-title-not-exists' => 'আপুনি নিৰ্ধাৰণ কৰা ফাইলটোৰ অস্বিত্ব নাই ।',
'compare-revision-not-exists' => 'আপুনি নিৰ্ধাৰণ কৰা সংশোধনীটোৰ অস্বিত্ব নাই ।',

# Database error messages
'dberr-header' => 'এই ৱিকিত এটা সমস্যা হৈছে',
'dberr-problems' => 'দুঃখিত!
চাইটটোত কিছু কাৰিকৰী সমস্যা হৈছে ।',
'dberr-again' => "অলপ সময় অপেক্ষা কৰি পুনৰ আপল'ডৰ চেষ্টা কৰক ।",
'dberr-info' => '(তথ্যকোষৰ চাৰ্ভাৰৰ লগত যোগাযোগ কৰিব নোৱাৰি: $1)',
'dberr-usegoogle' => 'এই পৰিস্থিতিত আপুনি গুগলৰ মাধ্যমেৰে অনুসন্ধান কৰিব পাৰে ।',
'dberr-outofdate' => "মন কৰক যে, আমাৰ বিষয়বস্তু সম্পৰ্কে তেওঁলোকৰ সূচী পুৰণা হ'ব পাৰে ।",
'dberr-cachederror' => "এইখন অনুৰোধ কৰা পৃষ্ঠাৰ কেচ্‌ড লিপি, যিখন নবীকৰণ নকৰাও হ'ব পাৰে ।",

# HTML forms
'htmlform-invalid-input' => 'আপোনাৰ অন্তৰ্ভুক্তিত কিছুমান সমস্যা হৈছে',
'htmlform-select-badoption' => 'আপুনি ধাৰ্য কৰা মান উপযুক্ত বিকল্প নহয়।',
'htmlform-int-invalid' => 'অপুনি ধাৰ্য কৰা মান অখণ্ড সংখ্যা (integer) নহয়।',
'htmlform-float-invalid' => 'অপুনি ধাৰ্য কৰা মান সংখ্যা নহয়।',
'htmlform-int-toolow' => 'আপুনি ধাৰ্য কৰা মান ন্যূনতম $1 তকৈ তলত',
'htmlform-int-toohigh' => 'আপুনি ধাৰ্য কৰা মান অধিকতম $1 তকৈ ওপৰত',
'htmlform-required' => 'এই মান আৱশ্যক',
'htmlform-submit' => 'দাখিল কৰক',
'htmlform-reset' => 'সাল-সলনি বাতিল কৰক',
'htmlform-selectorother-other' => 'অন্য',

# SQLite database support
'sqlite-has-fts' => '$1 সম্পূৰ্ণ-পাঠ অনুসন্ধান সমৰ্থন সহ',
'sqlite-no-fts' => '$1 সম্পূৰ্ণ-পাঠ অনুসন্ধান সমৰ্থন অবিহনে',

# New logging system
'logentry-delete-delete' => '$1’ৰ দ্বাৰা $3 পৃষ্ঠাখন বিলোপ কৰা হ’ল',
'logentry-delete-restore' => '$1 পুনৰ সংৰক্ষণ কৰা হ’ল পৃষ্ঠা $3',
'logentry-delete-event' => '$3: $4 -ত {{PLURAL:$5|এটা লগ ঘটনা|$5 লগ ঘটনাসমূহ}} -ৰ $1 পৰিৱৰ্তন কৰা দৃশ্যমানতা',
'logentry-delete-revision' => 'পৃষ্ঠা $3: $4ত {{PLURAL:$5|এটা পুনৰীক্ষন|$5 পুনৰীক্ষনসমূহ}}ৰ $1 দৃশ্যমানতা পৰিৱৰ্তন কৰা হ’ল',
'logentry-delete-event-legacy' => '$3ত অভিলেখ ঘটনামসমূহৰ $1 দৃশ্যমানতা পৰিৱৰ্তন কৰা হ’ল',
'logentry-delete-revision-legacy' => 'পৃষ্ঠা $3ত পুনৰীক্ষনসমূহৰ $1 দৃশ্যমানতা পৰিৱৰ্তন কৰা হল',
'logentry-suppress-delete' => '$1 সংকোচিত পৃষ্ঠা $3',
'logentry-suppress-event' => '$3: $4 -ত {{PLURAL:$5|এটা লগ ঘটনা|$5 লগ ঘটনাসমূহ}} -ৰ $1 গোপন পৰিৱৰ্তন কৰা হ’ল দৃশ্যমানতা',
'logentry-suppress-revision' => 'পৃষ্ঠা $3: $4 -ত {{PLURAL:$5|এটা পুনৰীক্ষন|$5 পুনৰীক্ষনসমূহ}} -ৰ $1 গোপন পৰিৱৰ্তনসমূহ দৃশ্যমানতা',
'logentry-suppress-event-legacy' => '$3 -ত লগ ঘটনাসমূহৰ $1 গোপন পৰিৱৰ্তন কৰা হল দৃশ্যমানতা',
'logentry-suppress-revision-legacy' => 'পৃষ্ঠা $3 -ত পুনৰীক্ষনসমূহৰ $1 গোপন পৰিৱৰ্তন কৰা হল',
'revdelete-content-hid' => 'বিষয়বস্তু গোপন কৰা হৈছে',
'revdelete-summary-hid' => 'সম্পাদনা সাৰাংশ গোপন কৰা হৈছে',
'revdelete-uname-hid' => 'নিহিত সদস্যনাম',
'revdelete-content-unhid' => 'বিষয়বস্তু মুকলি কৰা হৈছে',
'revdelete-summary-unhid' => 'সম্পাদনা সাৰাংশ মুকলি কৰা হৈছে',
'revdelete-uname-unhid' => 'সদস্যনাম মুকলি কৰা হৈছে',
'revdelete-restricted' => 'এই সীমাবদ্ধতা প্ৰশাসকৰ ক্ষেত্ৰত প্ৰযোজ্য',
'revdelete-unrestricted' => 'প্ৰশাসকৰ সীমাবদ্ধতা বাতিল কৰা হ’ল',
'logentry-move-move' => 'পৃষ্ঠা $3ৰ পৰা $4লৈ $1য়ে স্থানান্তৰ কৰিলে',
'logentry-move-move-noredirect' => '$1য়ে পুনৰ্নিৰ্দেশ নেৰাকৈ পৃষ্ঠা $3ৰ পৰা $4লৈ স্থানান্তৰ কৰিলে',
'logentry-move-move_redir' => 'পুনৰ্নিৰ্দেশৰে পৃষ্ঠা $3ৰ পৰা $4 $1লৈ স্থানান্তৰ কৰা হ’ল',
'logentry-move-move_redir-noredirect' => 'পুনৰ্নিৰ্দেশ নেৰাকৈ এটা পুনৰ্নিৰ্দেশৰ ওপৰেৰে পৃষ্ঠা $3 -ৰ পৰা $4 $1 স্থানান্তৰ কৰা হল',
'logentry-patrol-patrol' => "পৃষ্ঠা $3 -ৰ $1 চিহ্নিত সংশোধন $4 নিৰীক্ষণ কৰা হ'ল",
'logentry-patrol-patrol-auto' => "পৃষ্ঠা $3 -ৰ $1 চিহ্নিত সংশোধন $4 স্বচালিতভাৱে নিৰীক্ষণ কৰা হ'ল",
'logentry-newusers-newusers' => '$1’য়ে এটা ব্যৱহাৰকাৰী একাউণ্ট সৃষ্টি কৰিলে',
'logentry-newusers-create' => '$1য়ে এটা ব্যৱহাৰকাৰী একাউণ্ট সৃষ্টি কৰিলে',
'logentry-newusers-create2' => '$1’য়ে এটা ব্যৱহাৰকাৰী একাউণ্ট $3 সৃষ্টি কৰিলে',
'logentry-newusers-autocreate' => '$1’ৰ একাউণ্ট স্বয়ংক্ৰিয়ভাৱে সৃষ্টি কৰা হৈছিল',
'newuserlog-byemail' => 'গুপ্তশব্দ ই-মেইল কৰি পঠোৱা হৈছে',

# Feedback
'feedback-bugornote' => 'যদি আপুনি এটা কাৰিকৰী সমস্যাৰ বিৱৰণ দিবলৈ প্ৰস্তুত, অনুগ্ৰহ কৰি [$1 এটা বাগ ৰিপ\'ৰ্ট কৰক]।
নহ\'লে আপুনি তলৰ সহজ ফৰ্ম ব্যৱহাৰ কৰিব পাৰিব। আপোনাৰ মন্তব্য আপোনাৰ সদস্যনাম আৰু আপুনি ব্যৱহাৰ কৰা ব্ৰাউজাৰৰ সৈতে "[$3 $2]" -পৃষ্ঠাত যোগ কৰা হ\'ব।',
'feedback-subject' => 'বিষয়:',
'feedback-message' => 'বাৰ্তা:',
'feedback-cancel' => 'বাতিল কৰক',
'feedback-submit' => 'প্ৰতিক্ৰিয়া জমা কৰক',
'feedback-adding' => 'পৃষ্ঠাত প্ৰতিক্ৰিয়া যোগ কৰা হৈছে...',
'feedback-error1' => 'ত্ৰুটি: এ.পি.আই.ৰ অজ্ঞাত ফলাফল',
'feedback-error2' => 'ত্ৰুটি: সম্পাদনা বিফল হৈছে',
'feedback-error3' => 'ত্ৰুটি: এ.পি.আই.ৰ কোনো সঁহাৰি নাই',
'feedback-thanks' => 'ধন্যবাদ ! আপোনাৰ প্ৰতিক্ৰিয়া "[$2 $1]" পৃষ্ঠাত প্ৰকাশ কৰা হৈছে।',
'feedback-close' => 'কৰা হ’ল',
'feedback-bugcheck' => 'অতি উত্তম! কেৱল পৰীক্ষা কৰক যে ই ইতিমধ্যে [$1 জ্ঞাত বাগসমূহ]ৰ এটা নহয়।',
'feedback-bugnew' => 'মই পৰীক্ষা কৰিলো। এটা নতুন বাগ সংবাদন কৰক',

# Search suggestions
'searchsuggest-search' => 'সন্ধান কৰক',
'searchsuggest-containing' => 'যি আছে...',

# API errors
'api-error-badaccess-groups' => "এই ৱিকিত ফাইল আপল'ড কৰিবলৈ আপোনাৰ অনুমতি নাই।",
'api-error-badtoken' => 'আভ্যন্তৰীণ ত্ৰুটি: ভুল টোকেন।',
'api-error-copyuploaddisabled' => "ইউ আৰ এলৰ মাধ্যমেৰে আপল'ড কৰাটো এই চাৰ্ভাৰত নিষ্ক্ৰিয় কৰা হৈছে।",
'api-error-duplicate' => 'এই চাইটত একে বিষয়বস্তুৰ {{PLURAL:$1|[$2 আন এটা ফাইল]|[$2 আন কিছুমান ফাইল]}} ইতিমধ্যেই আছে।',
'api-error-duplicate-archive' => 'এই চাইটত একে বিষয়বস্তুৰ {{PLURAL:$1|[$2 আন এটা ফাইল]|[$2 আন কিছুমান ফাইল]}} ইতিমধ্যেই আছিল, কিন্তু {{PLURAL:$1|সেইটো|সেইবোৰ}} বিলোপ কৰা হৈছে।',
'api-error-duplicate-archive-popup-title' => 'প্ৰতিলিপি {{PLURAL:$1|ফাইল|ফাইল}} যিসমূহ ইতিমধ্যে বিলোপ কৰা হৈছে।',
'api-error-duplicate-popup-title' => 'প্ৰতিলিপি {{PLURAL:$1|ফাইল|ফাইলসমূহ}}।',
'api-error-empty-file' => 'আপুনি দাখিল কৰা ফাইলটো খালী ।',
'api-error-emptypage' => 'নতুন, খালী পৃষ্ঠা সৃষ্টি কৰিবলৈ অনুমতি নাই।',
'api-error-fetchfileerror' => 'আভ্যন্তৰীণ ত্ৰুটি: ফাইলটো অনাত কিবা সমস্যা হৈছে।',
'api-error-fileexists-forbidden' => '"$1" নামৰ এখন নথি আগৰ পৰাই উপলদ্ধ আৰু ইয়াৰ পুনৰ লিখন অসম্ভৱ ।',
'api-error-fileexists-shared-forbidden' => 'উমৈহতীয়া ফাইল ভঁৰালত "$1" নামৰ ফাইল এটা আছেই, ইয়াৰ ওপৰত লিখিব নোৱাৰি।',
'api-error-file-too-large' => 'আপুনি দাখিল কৰা ফাইলখন বৰ ডাঙৰ ।',
'api-error-filename-tooshort' => 'ফাইলৰ নামটো অতি চুটি।',
'api-error-filetype-banned' => 'এই ধৰণৰ ফাইল নিষিদ্ধ।',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|অনুমোদিত ফাইল প্ৰকাৰ নহয়|সমূহ অনুমোদিত ফাইল প্ৰকাৰ নহয়}} । {{PLURAL:$3|অনুমোদিত ফাইল প্ৰকাৰ হ’ল|অনুমোদিত ফাইল প্ৰকাৰসমূহ হ’ল}} $2 ।',
'api-error-filetype-missing' => 'ফাইল নামটোত এক্সটেন্‌ছন নাই।',
'api-error-hookaborted' => 'আপুনি কৰিব বিচৰা সালসলনি এটা এক্সটেনচনৰ দ্বাৰা বাতিল কৰা হৈছে।',
'api-error-http' => "আভ্যন্তৰীণ ত্ৰুটি: চাৰ্ভাৰৰ লগত সংযোগ স্থাপন নহ'ল।",
'api-error-illegal-filename' => 'ফাইলৰ এই নামটো গ্ৰহণযোগ্য নহয় ।',
'api-error-internal-error' => "আভ্যন্তৰীণ ত্ৰুটি: এই ৱিকিত আপোনাৰ আপল'ড প্ৰক্ৰিয়া সমাপনত কিবা সমস্যা হৈছে।",
'api-error-invalid-file-key' => "আভ্যন্তৰীণ ত্ৰুটি: অস্থায়ী ভঁৰালত ফাইলটো পোৱা নগ'ল।",
'api-error-missingparam' => 'আভ্যন্তৰীণ ত্ৰুটি: অনুৰোধত পেৰামিটাৰৰ কিবা সমস্যা ৰৈছে।',
'api-error-missingresult' => "আভ্যন্তৰীণ ত্ৰুটি: অনুলিপি সফল হৈছেনে নাই তাক নিশ্চিত কৰিব পৰা নগ'ল।",
'api-error-mustbeloggedin' => "ফাইল আপল'ড কৰাৰ আগেয়ে আপুনি প্ৰৱেশ কৰাটো বাধ্যতামূলক ।",
'api-error-mustbeposted' => 'আভ্যন্তৰীণ ত্ৰুটি: এই অনুৰোধত HTTP POST প্ৰয়োজন।',
'api-error-noimageinfo' => "আপল'ড সফল হৈছে, কিন্তু চাৰ্ভাৰে ফাইলটোৰ সম্পৰ্কে কোনো তথ্য প্ৰদান কৰা নাই।",
'api-error-nomodule' => "আভ্যন্তৰীণ ত্ৰুটি: কোনো আপল'ড মডিউল ঠিক কৰা হোৱা নাই।",
'api-error-ok-but-empty' => 'আভ্যন্তৰীণ ত্ৰুটি: চাৰ্ভাৰে কোনো সঁহাৰি জনোৱা নাই।',
'api-error-overwrite' => 'এতিয়া থকা ফাইলৰ ওপৰত লিখা নিষেধ।',
'api-error-stashfailed' => 'আভ্যন্তৰীণ ত্ৰুটি: অস্থায়ী ফাইল সাঁচি ৰখাত চাৰ্ভাৰ অসমৰ্থ হৈছে।',
'api-error-timeout' => 'আশা কৰা সময়ৰ ভিতৰত চাৰ্ভাৰটোৱে সঁহাৰি নজনালে।',
'api-error-unclassified' => 'এক অজ্ঞাত সমস্যাই দেখা দিছে।',
'api-error-unknown-code' => 'অজ্ঞাত সমস্যা: "$1"।',
'api-error-unknown-error' => "আভ্যন্তৰীণ ত্ৰুটি: আপোনাৰ ফাইলটো আপল'ড কৰাত কিবা সমস্যা হৈছে।",
'api-error-unknown-warning' => 'অজ্ঞাত সাৱধানবাণী: "$1"।',
'api-error-unknownerror' => 'অজ্ঞাত সমস্যা: "$1"।',
'api-error-uploaddisabled' => "এই ৱিকিত আপল'ড নিষ্ক্ৰিয় কৰা হৈছে।",
'api-error-verification-error' => 'সম্ভৱতঃ এই ফাইলটো ত্ৰুটিপূৰ্ণ বা তাৰ এক্সটেন্‌ছনটো ভুল।',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|ছেকেণ্ড|ছেকেণ্ড}}',
'duration-minutes' => '$1 {{PLURAL:$1|মিনিট|মিনিট}}',
'duration-hours' => '$1 {{PLURAL:$1|ঘন্টা|ঘন্টা}}',
'duration-days' => '$1 {{PLURAL:$1|দিন|দিন}}',
'duration-weeks' => '{{PLURAL: $1|সপ্তাহ|সপ্তাহ}}',
'duration-years' => '$1 {{PLURAL:$1|বছৰ|বছৰ}}',
'duration-decades' => '$1 {{PLURAL:$1|দশক|দশক}}',
'duration-centuries' => '$1 {{PLURAL:$1|শতাব্দী|শতাব্দী}}',
'duration-millennia' => '$1 {{PLURAL:$1|সহস্ৰাব্দ|সহস্ৰাব্দ}}',

);
