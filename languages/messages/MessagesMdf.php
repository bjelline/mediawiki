<?php
/** Moksha (мокшень кяль)
 *
 * @addtogroup Language
 *
 * @author Numulunj pilgae
 * @author Kranch
 */

$fallbak = 'ru';

$messages = array(
# User preference toggles
'tog-underline'               => 'Сюлмафкснень алга китькстамс:',
'tog-highlightbroken'         => 'Петемс синьтьф сюлмафкснень <a href="" class="new">вага ста</a> (илякс: вага ста<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Тиемс фкакс сёрматфть ушедоматнень лопать кувалмова',
'tog-hideminor'               => 'Од полафтоматнень эса кяшемс йомланя видептематнень',
'tog-extendwatchlist'         => 'Келептемс ваномань сёрмалувомать сембе полафтоматнень няфтемга',
'tog-usenewrc'                => 'Цебярьгофтф од илякстоптомат (JavaScript)',
'tog-numberheadings'          => 'Сёрмадома ингольксс лувомтяшксне эслек путовихть',
'tog-showtoolbar'             => 'Кядьйонкс седяфксть няфтемс сёрмадомбачк (JavaScript)',
'tog-editondblclick'          => 'Кафксть люпштазь сувамс сёрматфть петнема (JavaScript)',
'tog-editsection'             => 'Няфтемс сюлмафксть [петемс] эрь пяльксонди',
'tog-editsectiononrightclick' => 'Петнемс пялькстне: люпштамс сёрмадомбяльксть лемонц лангс видешире пуняса (JavaScript)',
'tog-showtoc'                 => 'Няфтемс сёрматфть потмакс (лопатнень, конатнень эса 3-да лама сёрмадома инголькст)',
'tog-rememberpassword'        => 'Ванфтомс монь сувама валозе тя содама машинаса',
'tog-editwidth'               => 'Петнема паксясь сембе вальмать келес',
'tog-watchcreations'          => 'Сувафтомс монь тефть лопатне монь ванома сёрмалувомазон',
'tog-watchdefault'            => 'Сувафтомс монь петема лопатне монь ванома сёрмалувомазон',
'tog-watchmoves'              => 'Лопать илякстоптомста сувафтомс сонь монь ванома сёрмалувомазон',
'tog-watchdeletion'           => 'Лопать нардамста сувафтомс сонь монь ванома сёрмалувомазон',
'tog-minordefault'            => 'Тяшксемс сембе петема анцяйнятне мъзярс илякс изь мярьгов',
'tog-previewontop'            => 'Няфтемс сёрматфть васень няфтемать петемань седяфксть инголе',
'tog-previewonfirst'          => 'Васень няфтема васенце петемста',
'tog-nocache'                 => 'Аф мярьгома лопатнень инголе ванфови файлснон тиемс',
'tog-enotifwatchlistpages'    => 'Кучемс электрононь сёрма монь ванома лопать илякстоптомада меле',
'tog-enotifusertalkpages'     => 'Кучемс электрононь сёрма монь тиить корхтама лопанц илякстоптомада меле',
'tog-enotifminoredits'        => 'Кучемс электрононь сёрма нъльне петема анцяйняда меле',
'tog-enotifrevealaddr'        => 'Штафтомс монь электрононь адресозе пачфтема сёрмаса',
'tog-shownumberswatching'     => 'Няфтемс мъзяра сувайда конат арафтозь лопать эсь ванома сёрмалувомазост',
'tog-fancysig'                => 'Казяма кядьтяшкст (эслек тиеви сюлмафксфтома)',
'tog-externaleditor'          => 'Нолдамс тевс ушоширень петнить мъзярс илякс изь мярьгов',
'tog-externaldiff'            => 'Нолдамс тевс ушоширень diff мъзярс илякс изь мярьгов',
'tog-showjumplinks'           => 'Мярьгомс "юпадемс" сатовома сюлмафкстненди',
'tog-uselivepreview'          => 'Максомс эряй васень няфтемась (JavaScript) (Варжамань)',
'tog-forceeditsummary'        => 'Няфтемс мондине мезе сёрмадомс шава петнема вальмас сувамста',

# Dates
'sunday'        => 'Таргжи (Недляши)',
'monday'        => 'Видеши (Панедельник)',
'tuesday'       => 'Шавши',
'wednesday'     => 'Вержи',
'thursday'      => 'Шуваланя',
'friday'        => 'Шумордамши (Пяденця)',
'saturday'      => 'Йоткши',
'sun'           => 'Тр',
'mon'           => 'Вд',
'tue'           => 'Шв',
'wed'           => 'Вр',
'thu'           => 'Швл',
'fri'           => 'Шм',
'sat'           => 'Йот',
'january'       => 'Йандварь',
'february'      => 'Февральков',
'march'         => 'Марков',
'april'         => 'Апрельков',
'may_long'      => 'Майгов',
'june'          => 'Июньков',
'july'          => 'Июльков',
'august'        => 'Августков',
'september'     => 'Сентябрьков',
'october'       => 'Октябрьков',
'november'      => 'Ноябрьков',
'december'      => 'Декабрьков',
'january-gen'   => 'Йандварень',
'february-gen'  => 'Февральковонь',
'march-gen'     => 'Марковонь',
'april-gen'     => 'Апрельковонь',
'may-gen'       => 'Майговонь',
'june-gen'      => 'Июньковонь',
'july-gen'      => 'Июльковонь',
'august-gen'    => 'Августковонь',
'september-gen' => 'Сентябрьковонь',
'october-gen'   => 'Октябрьковонь',
'november-gen'  => 'Ноябрьковонь',
'december-gen'  => 'Декабрьковонь',
'jan'           => 'Йанд',
'feb'           => 'Февк',
'mar'           => 'Марк',
'apr'           => 'Апрк',
'may'           => 'Майг',
'jun'           => 'Июнк',
'jul'           => 'Июлк',
'aug'           => 'Авгк',
'sep'           => 'Сенк',
'oct'           => 'Октк',
'nov'           => 'Новк',
'dec'           => 'Декк',

# Bits of text used by many pages
'categories'            => 'Категориет',
'category_header'       => '"$1" категориеса лопатне',
'subcategories'         => 'Субкатегориет',
'category-media-header' => '"$1" категориеса медиясь',
'category-empty'        => "''Медиа лопат тя категориеса ашет.''",

'mainpagetext' => "<оцю>'''МедиаВикить арафтозь лац.'''</оцю>",

'about'          => 'Колганза',
'article'        => 'Потмакслопа',
'newwindow'      => '(панчсеви од вальмаса)',
'cancel'         => 'Мърдамс меки',
'qbfind'         => 'Мук',
'qbbrowse'       => 'Ванондома',
'qbedit'         => 'Петнема',
'qbpageoptions'  => 'Тя лопась',
'qbpageinfo'     => 'Контекстсь',
'qbmyoptions'    => 'Монь лопане',
'qbspecialpages' => 'Башка тевонь лопат',
'moredotdotdot'  => 'Сяда лама...',
'mypage'         => 'Монь лопазе',
'mytalk'         => 'Монь корхтамазе',
'anontalk'       => 'Корхтамс тя IP-ть мархта',
'navigation'     => 'Навигацие',

# Metadata in edit box
'metadata_help' => 'Метадата:',

'errorpagetitle'    => 'Эльбятькс',
'returnto'          => 'Мърдамс $1-с.',
'tagline'           => '{{SITENAME}} -ста',
'help'              => 'Лезкс',
'search'            => 'Вешендемс',
'searchbutton'      => 'Вешентьк',
'go'                => 'Аре',
'searcharticle'     => 'Аре',
'history'           => 'Лопань полафнемат',
'history_short'     => 'Йотай полафнемат',
'updatedmarker'     => 'мекольце сашендомазень меле полафтовсь',
'info_short'        => 'Информацие',
'printableversion'  => 'Лихтеви верзие',
'permalink'         => 'Васу сюлмафкс',
'print'             => 'Нолдамс',
'edit'              => 'Петнеме',
'editthispage'      => 'Петнемс тя лопать',
'delete'            => 'Нардамс',
'deletethispage'    => 'Нардамс тя лопать',
'undelete_short'    => 'Мърдафтомс {{PLURAL:$1|one edit|$1 петнемат}}',
'protect'           => 'Араламс',
'protect_change'    => 'полафтомс араламать',
'protectthispage'   => 'Араламс тя лопать',
'unprotect'         => 'Валхтомс араламать',
'unprotectthispage' => 'Валхтомс тя лопать араламац',
'newpage'           => 'Од лопа',
'talkpage'          => 'Корхтамс тя лопать колга',
'talkpagelinktext'  => 'Корхтама',
'specialpage'       => 'Башка тевонь лопа',
'personaltools'     => 'Эсь кядьйонкст',
'postcomment'       => 'Кучемс арьсемат',
'articlepage'       => 'Ваномс потмакслопать',
'talk'              => 'Корхнема',
'views'             => 'Ванфт',
'toolbox'           => 'Кядьйонкс парга',
'userpage'          => 'Ваномс тиить лопанц',
'projectpage'       => 'Ваномс проектть лопанц',
'imagepage'         => 'Ваномс архтофкс лопать',
'mediawikipage'     => 'Ваномс сёрма лопать',
'templatepage'      => 'Ваномс кепотькс лопать',
'viewhelppage'      => 'Ваномс лезкс лопать',
'categorypage'      => 'Ваномс категориень лопать',
'viewtalkpage'      => 'Ваномс корхнемат',
'otherlanguages'    => 'Иля кяльса',
'redirectedfrom'    => '(Йотафтф $1-ста)',
'redirectpagesub'   => 'Иля вастс йотафтф лопа',
'lastmodifiedat'    => 'Тя лопать мекольцеда петнезь $2, $1.', # $1 date, $2 time
'viewcount'         => 'Тя лопас сувасть {{PLURAL:$1|весть|$1-ксть}}.',
'protectedpage'     => 'Тя лопать аралаф',
'jumpto'            => 'Юпадемс тязк:',
'jumptonavigation'  => 'навигацие',
'jumptosearch'      => 'вешендема',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => '{{SITENAME}} колга',
'aboutpage'         => 'Project:Колга',
'bugreports'        => 'Эльбятькс колга пачфтемат',
'bugreportspage'    => 'Project:Эльбятькс колга пачфтемат',
'copyright'         => 'Сёрматфсь ули кода мумс $1-са.',
'copyrightpagename' => '{{SITENAME}} копияма видекс',
'copyrightpage'     => '{{ns:project}}:Копияма видекст',
'currentevents'     => 'Мезе тяса моли',

);
