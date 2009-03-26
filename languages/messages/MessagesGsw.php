<?php
/** Swiss German (Alemannisch)
 *
 * @ingroup Language
 * @file
 *
 * @author Als-Chlämens
 * @author Als-Holder
 * @author Helix84
 * @author Hendergassler
 * @author J. 'mach' wust
 * @author Melancholie
 * @author MichaelFrey
 * @author Remember the dot
 * @author Spacebirdy
 * @author Strommops
 * @author Urhixidur
 * @author לערי ריינהארט
 * @author 80686
 */

$fallback = 'de';
$linkTrail = '/^([äöüßa-z]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline'               => 'Links unterstryche',
'tog-highlightbroken'         => 'Links uf lääri Themene durestryche',
'tog-justify'                 => 'Tekscht als Blocksatz',
'tog-hideminor'               => 'Keini «chlyni Änderige» aazeige',
'tog-extendwatchlist'         => 'Beobachtungslischte erwytere go alli Änderige aazeige, nit numme di letschte',
'tog-usenewrc'                => 'Erwytereti «letschti Änderige» (geit nid uf allne Browser)',
'tog-numberheadings'          => 'Überschrifte outomatisch numeriere',
'tog-showtoolbar'             => 'Editier-Wärchzüüg aazeige',
'tog-editondblclick'          => 'Syte ändere mit Doppelklick i d Syte (JavaScript)',
'tog-editsection'             => 'Gleicher aazeige für ds Bearbeite vo einzelnen Absätz',
'tog-editsectiononrightclick' => 'Einzelni Absätz ändere mit Rächtsclick (Javascript)',
'tog-showtoc'                 => 'Inhaltsverzeichnis aazeige bi Artikle mit meh als drei Überschrifte',
'tog-rememberpassword'        => 'Passwort spychere (Cookie)',
'tog-editwidth'               => 'Fäld zum Täkscht yygee het di voll Breiti',
'tog-watchcreations'          => 'Sälber gmachti Sytene beobachte',
'tog-watchdefault'            => 'Vo dir nöi gmachti oder verändereti Syte beobachte',
'tog-watchmoves'              => 'Sälber verschobeni Sytene beobachte',
'tog-watchdeletion'           => 'Sälber glöschti Sytene beobachte',
'tog-minordefault'            => 'Alli dyni Änderigen als «chlyni Änderige» markiere',
'tog-previewontop'            => 'Vorschou vor em Editierfänschter aazeige',
'tog-previewonfirst'          => 'Vorschou aazeige bim erschten Editiere',
'tog-nocache'                 => 'Syte-Cache deaktiviere',
'tog-enotifwatchlistpages'    => 'Benachrichtigungsmails by Änderigen a Wiki-Syte',
'tog-enotifusertalkpages'     => 'Benachrichtigungsmails bi Änderigen a dyne Benutzersyte',
'tog-enotifminoredits'        => 'Benachrichtigungsmail ou bi chlyne Sytenänderige',
'tog-enotifrevealaddr'        => 'Dyni E-Mail-Adrässe wird i Benachrichtigungsmails zeigt',
'tog-shownumberswatching'     => 'Aazahl Benutzer aazeige, wo ne Syten am Aaluege sy (i den Artikelsyte, i de «letschten Änderigen» und i der Beobachtigslischte)',
'tog-fancysig'                => 'Kei outomatischi Verlinkig vor Signatur uf d Benutzersyte',
'tog-externaleditor'          => 'Externe Editor als Standard bruche (nume fir Experte, doderzue brucht s speziälli Yystellige uf em Computer)',
'tog-externaldiff'            => 'Externi diff als default',
'tog-showjumplinks'           => '«Wächsle-zu»-Links ermügleche',
'tog-uselivepreview'          => 'Live-Vorschau bruche (JavaScript) (experimentell)',
'tog-forceeditsummary'        => 'Sag mer s, wänn i s Zämmefassigsfeld läär loss',
'tog-watchlisthideown'        => 'Eigeni Änderige uf d Beobachtigslischt usblände',
'tog-watchlisthidebots'       => 'Bot-Änderige in d Beobachtigslischt usblende',
'tog-watchlisthideminor'      => 'Chlyni Änderige nit in de Beobachtigslischte aazeige',
'tog-nolangconversion'        => 'Konvertierig vu Sprachvariante abschalte',
'tog-ccmeonemails'            => 'Schick mr Kopie vo de E-Mails, won i andere schick.',
'tog-diffonly'                => 'Numme Versionsunterschiid aazeige, ohni d Syte',

'underline-always'  => 'immer',
'underline-never'   => 'nie',
'underline-default' => 'Browser-Vorystellig',

'skinpreview' => '(Vorschou)',

# Dates
'sunday'        => 'Sunntig',
'monday'        => 'Mäntig',
'tuesday'       => 'Zischtig',
'wednesday'     => 'Mittwuche',
'thursday'      => 'Dunschtig',
'friday'        => 'Fritig',
'saturday'      => 'Samschtig',
'sun'           => 'Sun',
'mon'           => 'Män',
'tue'           => 'Zys',
'wed'           => 'Mit',
'thu'           => 'Dun',
'fri'           => 'Fri',
'sat'           => 'Sam',
'january'       => 'Jänner',
'february'      => 'Februar',
'march'         => 'März',
'april'         => 'April',
'may_long'      => 'Mai',
'june'          => 'Juni',
'july'          => 'Juli',
'august'        => 'Ougschte',
'september'     => 'Septämber',
'october'       => 'Oktober',
'november'      => 'Novämber',
'december'      => 'Dezämber',
'january-gen'   => 'Jänner',
'february-gen'  => 'Februar',
'march-gen'     => 'März',
'april-gen'     => 'April',
'may-gen'       => 'Mai',
'june-gen'      => 'Juni',
'july-gen'      => 'Juli',
'august-gen'    => 'Augschte',
'september-gen' => 'Septämber',
'october-gen'   => 'Oktober',
'november-gen'  => 'Novämber',
'december-gen'  => 'Dezämber',
'jan'           => 'Jan.',
'feb'           => 'Feb.',
'mar'           => 'Mär.',
'apr'           => 'Apr.',
'may'           => 'Mei',
'jun'           => 'Jun.',
'jul'           => 'Jul.',
'aug'           => 'Aug.',
'sep'           => 'Sep.',
'oct'           => 'Okt.',
'nov'           => 'Nov.',
'dec'           => 'Dez.',

# Bits of text used by many pages
'categories'            => 'Kategorie',
'pagecategories'        => '{{PLURAL:$1|Kategori|Kategorie}}',
'category_header'       => 'Artikel in de Kategori "$1"',
'subcategories'         => 'Unterkategorie',
'category-media-header' => 'Medie in dr Kategori „$1“',
'category-empty'        => "''Die Kategori het im Momänt kaini Syte oder Medie.''",

'mainpagetext'      => "<big>'''MediaWiki isch erfolgrich inschtalliert worre.'''</big>",
'mainpagedocfooter' => 'Lueg uf d [http://meta.wikimedia.org/wiki/MediaWiki_localisation Dokumentation fir d Aapassig vu dr Benutzeroberflächi] un s [http://meta.wikimedia.org/wiki/Help:Contents Benutzerhandbuech] fir d Hilf iber d Benutzig un s Yystelle.',

'about'          => 'Über',
'article'        => 'Inhaltssyte',
'newwindow'      => '(imene nöie Fänschter)',
'cancel'         => 'Abbräche',
'qbfind'         => 'Finde',
'qbbrowse'       => 'Blättre',
'qbedit'         => 'Ändere',
'qbpageoptions'  => 'Sytenoptione',
'qbpageinfo'     => 'Sytedate',
'qbmyoptions'    => 'Ystellige',
'qbspecialpages' => 'Spezialsytene',
'moredotdotdot'  => 'Meh …',
'mypage'         => 'Myyni Syte',
'mytalk'         => 'Myyni Diskussionsyte',
'anontalk'       => 'Diskussionssyste vo sellere IP',
'navigation'     => 'Navigation',
'and'            => 'un',

# Metadata in edit box
'metadata_help' => 'Metadate:',

'errorpagetitle'    => 'Fähler',
'returnto'          => 'Zruck zur Syte $1.',
'tagline'           => 'Us {{SITENAME}}',
'help'              => 'Hilf',
'search'            => 'Suech',
'searchbutton'      => 'Suech',
'go'                => 'Site',
'searcharticle'     => 'Sueche',
'history'           => 'Versione',
'history_short'     => 'Versione/Autore',
'updatedmarker'     => '(gändret syt mym letschte Bsuech)',
'info_short'        => 'Information',
'printableversion'  => 'Druck-Aasicht',
'permalink'         => 'Bschtändigi URL',
'print'             => 'Drucke',
'edit'              => 'Ändere',
'editthispage'      => 'Syte bearbeite',
'delete'            => 'Lösche',
'deletethispage'    => 'Syte lösche',
'undelete_short'    => '{{PLURAL:$1|1 Version|$1 Versione}} widerherstelle',
'protect'           => 'Schütze',
'protect_change'    => 'ändere',
'protectthispage'   => 'Artikel schütze',
'unprotect'         => 'nümm schütze',
'unprotectthispage' => 'Schutz ufhebe',
'newpage'           => 'Nöji Syte',
'talkpage'          => 'Iber die Syte dischputiere',
'talkpagelinktext'  => 'Diskussion',
'specialpage'       => 'Spezialsyte',
'personaltools'     => 'Persönlichi Wärkzüg',
'postcomment'       => 'Neje Abschnitt',
'articlepage'       => 'Syte',
'talk'              => 'Diskussion',
'views'             => 'Wievylmol agluegt',
'toolbox'           => 'Wärkzügkäschtli',
'userpage'          => 'Benutzersyte',
'projectpage'       => 'Projektsyte azeige',
'imagepage'         => 'Dateisyte',
'mediawikipage'     => 'Inhaltssyte aazeige',
'templatepage'      => 'Vorlagesyte aazeige',
'viewhelppage'      => 'D Hilf aazeige',
'categorypage'      => 'Kategoriesyte aazeige',
'viewtalkpage'      => 'Diskussion',
'otherlanguages'    => 'Anderi Sproche',
'redirectedfrom'    => '(Witergleitet vun $1)',
'redirectpagesub'   => 'Umgleiteti Syte',
'lastmodifiedat'    => 'Letschti Änderig vo dere Syte: $2, $1<br />', # $1 date, $2 time
'viewcount'         => 'Die Syte isch {{PLURAL:$1|eimol|$1 Mol}} bsuecht wore.',
'protectedpage'     => 'Gschützti Syte',
'jumpto'            => 'Gump zue:',
'jumptonavigation'  => 'Navigation',
'jumptosearch'      => 'Suech',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Über {{GRAMMAR:akkusativ|{{SITENAME}}}}',
'aboutpage'         => 'Project:Über {{UCFIRST:{{GRAMMAR:akkusativ|{{SITENAME}}}}}}',
'bugreports'        => 'Fählermäldig',
'bugreportspage'    => 'Project:Kontakt',
'copyright'         => 'Der Inhalt vo dere Syte stoht unter der $1.',
'copyrightpagename' => '{{SITENAME}} Urheberrächt',
'copyrightpage'     => '{{ns:project}}:Copyright',
'currentevents'     => 'Aktuelli Mäldige',
'currentevents-url' => 'Project:Aktuelli Termin',
'disclaimers'       => 'Impressum',
'disclaimerpage'    => 'Project:Impressum',
'edithelp'          => 'Rotschläg fir s Bearbeite',
'edithelppage'      => 'Help:Ändere',
'faq'               => 'Froge, wo vilmol gstellt wäre',
'faqpage'           => 'Project:FAQ',
'helppage'          => 'Help:Hilf',
'mainpage'          => 'Houptsyte',
'policy-url'        => 'Project:Leitlinie',
'portal'            => 'Gmeinschaftsportal',
'portal-url'        => 'Project:Gmeinschafts-Portal',
'privacy'           => 'Dateschutz',
'privacypage'       => 'Project:Dateschutz',
'sitesupport'       => 'Finanzielli Hilf',
'sitesupport-url'   => 'Project:Spenden',

'badaccess'        => 'Dyyni Rächt länge nid.',
'badaccess-group0' => 'Du hesch d Berächtigung nid, wo s brucht fir die Aktion.',
'badaccess-group1' => 'Die Aktion isch bschränkt uf Benutzer, wu zue dr Grupp „$1“ ghere.',
'badaccess-group2' => 'Die Aktion isch bschränkt uf Benutzer, wu zue einere vu dr Gruppe „$1“ ghere.',
'badaccess-groups' => 'Die Aktion isch bschränkt uf Benutzer, wu dr Gruppe „$1“ aaghere.',

'versionrequired'     => 'Version $1 vun MediaWiki wird brucht',
'versionrequiredtext' => 'Version $1 vu MediaWiki wird brucht zum die Syte nutze. Lueg [[Special:Version]]',

'ok'                      => 'OK',
'retrievedfrom'           => 'Vun "$1"',
'youhavenewmessages'      => 'Du hesch $1 ($2).',
'newmessageslink'         => 'nöji Nachrichte',
'newmessagesdifflink'     => 'Unterschid',
'youhavenewmessagesmulti' => 'Si hen neui Nochrichte: $1',
'editsection'             => 'ändere',
'editold'                 => 'Ändre',
'editsectionhint'         => 'Abschnitt ändere: $1',
'toc'                     => 'Inhaltsverzeichnis',
'showtoc'                 => 'ufklappe',
'hidetoc'                 => 'zueklappe',
'thisisdeleted'           => 'Aaluege oder widerherstelle vu $1?',
'viewdeleted'             => '$1 aaluege?',
'restorelink'             => '{{PLURAL:$1|glöschti Änderig|$1 glöschti Ändrige}}',
'feedlinks'               => 'Feed:',
'feed-invalid'            => 'Nid giltige Abonnement-Typ.',
'feed-unavailable'        => 'S stehn keini Feeds z Verfiegig.',
'site-rss-feed'           => 'RSS-Feed fir $1',
'site-atom-feed'          => 'Atom-Feed für $1',
'page-rss-feed'           => 'RSS-Feed für „$1“',
'page-atom-feed'          => 'Atom-Feed fir „$1“',
'red-link-title'          => '$1 (Syte git s nit)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Syte',
'nstab-user'      => 'Benutzersyte',
'nstab-media'     => 'Mediesyte',
'nstab-special'   => 'Spezialsyte',
'nstab-project'   => 'Projektsyte',
'nstab-image'     => 'Bildli',
'nstab-mediawiki' => 'Nochricht',
'nstab-template'  => 'Vorlag',
'nstab-help'      => 'Hilf',
'nstab-category'  => 'Kategorie',

# Main script and global functions
'nosuchaction'      => 'Die Aktion git s nit',
'nosuchactiontext'  => 'Di Aktion, wu in dr URL aagee isch, isch nit giltig.
Villicht hesch d URL falsch yygee oder bisch eme falsche Gleich noogange.
Des chennt au ne Fähler aazeige in {{SITENAME}}.',
'nosuchspecialpage' => 'Die Spezialsyte git s nit',
'nospecialpagetext' => "<big>'''Die Spezialsyte git s nid.'''</big>

Alli verfiegbare Spezialsyte sin in dr [[Special:SpecialPages|Lisch vu Spezialsyte]] z finde.",

# General errors
'error'                => 'Fähler',
'databaseerror'        => 'Fähler in dr Datebank',
'dberrortext'          => 'S het e Syntaxfähler in dr Datebankabfreg gee.

D letscht Datebankabfrog het gheisse: "$1" us dr Funktion "<tt>$2</tt>".

MySQL het dr Fähler "<tt>$3: $4</tt>" gmeldet.',
'dberrortextcl'        => 'S het e Syntaxfähler gee in dr Abfrog vu dr Datebank.
Di letscht Datebankabfrog isch gsi: „$1“ us dr Funktion „<tt>$2</tt>“.
MySQL het dr Fähler „<tt>$3: $4</tt>“ gmäldet.',
'noconnect'            => 'Äxkisi! Im Wiki git s tächnischi Schwirigkeite, s git kei Verbindig zue dr Datebank.<br />
$1',
'nodb'                 => 'Ha d Datebank $1 nit chenne uswähle',
'cachederror'          => 'Des isch e Kopie us em Cache un megligerwys nit aktuäll.',
'laggedslavemode'      => 'Warnig: di letschte Änderige wäre u. U. nonig aazeigt!',
'readonly'             => 'Datebank isch gsperrt',
'enterlockreason'      => 'Bitte gib e Grund y, worum d Datebank soll gsperrt wäre un e Yschätzig wie lang si soll gsperrt blybe',
'readonlytext'         => 'D {{SITENAME}}-Datebank isch e Zyd lang gsperrt fir Nejytreg un Änderige. Bitte versuech s speter no mol.

Grund vu dr Sperrig: $1',
'missingarticle'       => 'De Tekscht vum Artikel "$1" isch in de Datebonk nit gfunde. Des isch wahrschinlich ä Fähler in de Software. Sin so guet, un melde des m Adminischtrator, un gib de Artikelnome on.',
'readonly_lag'         => 'D Datebank isch automatisch gperrt wore, wil di verteilte Datebankserver (Sklave) mien mit em Hauptdatebankserver (Meischter) abgliche wäre.',
'internalerror'        => 'Interner Fähler',
'internalerror_info'   => 'Interne Fähler: $1',
'filecopyerror'        => 'Datei "$1" het nit noch "$2" kopiert werre kinne.',
'filerenameerror'      => 'D Datei "$1" het nit in "$2" umgnennt werre kinne.',
'filedeleteerror'      => 'Datei "$1" het nit glöscht werre kinne.',
'directorycreateerror' => 'S Verzeichnis „$1“ het nid chenne aaglait wäre.',
'filenotfound'         => 'Datei "$1" isch nit gfunde worre.',
'fileexistserror'      => 'In d Datei „$1“ het nit chenne gschribe wäre, wel s die Datei scho git.',
'unexpected'           => 'Wärt, wu nit erwartet woren isch: „$1“=„$2“.',
'formerror'            => 'Fähler: Ds Formular het nid chönne verarbeitet wärde',
'badarticleerror'      => 'D Aktion konn uf denne Artikel nit ongwendet werre.',
'cannotdelete'         => 'Konn d Syte oder dr Artikel nit lesche. (Isch meglicherwis schu vun eber ondrem glescht worre.)',
'badtitle'             => 'Ugültiger Titel',
'badtitletext'         => 'Dr Titel vu dr agforderte Syte isch nit giltig gsi, leer, oder e nit giltig Sprochgleich vun eme andre Wiki.',
'perfdisabled'         => "Leider isch die Funktion momentan usgschalte, wil's d Datebank eso starch würd belaschte, dass mer s Wiki nümm chönnti benütze.",
'perfcached'           => 'Die Informatione chömme us em Zwüschespeicher un sin derwiil villicht nid aktuell.
----',
'perfcachedts'         => 'Die Date stamme us em Cache un sin am $1 s letscht Mol aktualisiert wore.',
'querypage-no-updates' => "'''D Aktualisierigsfunktion fir die Syte isch im Momänt deaktiviert. D Date wäre vorerscht nid ernejert.'''",
'wrong_wfQuery_params' => 'Falschi Parameter fir wfQuery()<br />
Funktion: $1<br />
Abfrog: $2',
'viewsource'           => 'Quelltext aaluege',
'viewsourcefor'        => 'fir $1',
'actionthrottled'      => 'Aktionsaazahl limitiert',
'actionthrottledtext'  => 'As Schutz vor Spam cha die Aktion im e churze Zytabstand nume begränzt durgfiert wäre. Du bisch ebe an die Gränz cho. Bitte versuech s in e paar Minute non emol.',
'protectedpagetext'    => 'Die Syte isch fir s Bearbeite gsperrt.',
'viewsourcetext'       => 'Quelltext vo dere Syte:',
'protectedinterface'   => 'In däre Syte het s Text fir s Sproch-Interface vu dr Software un isch gsperrt, zum Missbruch z verhindre.',
'editinginterface'     => "'''Obacht:''' Du bisch e Syten am Verändere, wu zum User.Interface ghert. Wänn Du die Syte veränderesch, no änderet sich s User-Interface au fir di andere Benutzer. Fir Ibersetzige lueg bitte, eb Du doodefir s [http://translatewiki.net/wiki/Main_Page?setlang=gsw Translatewiki] witt bruuche, s MediaWiki-Lokalisierigsprojäkt.",
'sqlhidden'            => '(SQL-Abfrog verschteckt)',
'cascadeprotected'     => 'Die Syte isch fir s Bearbeite gsperrt. Si isch yybunde in {{PLURAL:$1|die Syte, wu do chunnt|die Syte, wu do chemme}} , wu mit ere Kaskadesperroption gschitzt {{PLURAL:$1|isch|sin}}:
$2',
'namespaceprotected'   => "Du hesch kei Berächtigung, die Syte im '''$1'''-Namensruum z bearbeite.",
'customcssjsprotected' => 'Du bisch nid berächtigt, die Syte  bearbeite, wel si zue dr persenlige Yystellige vun eme andere Benutzer ghert.',
'ns-specialprotected'  => 'Spezialsyte chenne nid bearbeitet wäre.',
'titleprotected'       => "E Syte mit däm Name cha nid aaglait wäre. 
Die Sperri isch dur [[User:$1|$1]] yygrichtet wore mit dr Begrindig ''„$2“''.",

# Login and logout pages
'logouttitle'                => 'Benutzer-Abmäldig',
'logouttext'                 => '<div align="center" style="background-color:white;">
<b>Du bisch jitz abgmäldet!</b>
</div><br />
We du jitz öppis uf der {{SITENAME}} änderisch, de wird dyni IP-Adrässen als Urhäber regischtriert u nid dy Benutzername. Du chasch di mit em glychen oder emnen andere Benutzername nöi aamälde.',
'welcomecreation'            => '==Willcho, $1!==
Dyy Benutzerkonto isch aaglait wore.
Vergiss nid, dyni Yystellige aazpasse.',
'loginpagetitle'             => 'Benutzer-Aamelde',
'yourname'                   => 'Dyy Benutzername',
'yourpassword'               => 'Passwort:',
'yourpasswordagain'          => 'Passwort no mol yygee:',
'remembermypassword'         => 'Passwort spychere',
'yourdomainname'             => 'Dyyni Domäne',
'externaldberror'            => 'Entwäder s lit e Fähler bi dr externe Authentifizierung vor, oder Du derfsch Dyy extern Benutzerkonto nid aktualisiere.',
'loginproblem'               => "'''S het ä Problem mit dinre Onmeldung gäbe.'''<br />Bitte vosuechs grad nomal!",
'login'                      => 'Aamälde',
'loginprompt'                => '<small>Für di bir {{SITENAME}} aazmälde, muesch Cookies erloube!</small>',
'userlogin'                  => 'Aamälde',
'logout'                     => 'Abmälde',
'userlogout'                 => 'Abmälde',
'notloggedin'                => 'Nit aagmäldet',
'nologin'                    => 'No kei Benutzerkonto? $1.',
'nologinlink'                => '»Konto aaleege«',
'createaccount'              => 'Nöis Benutzerkonto aalege',
'gotaccount'                 => 'Du häsch scho a Konto? $1',
'gotaccountlink'             => '»Login fir Benutzer, wu scho aagmäldet sin«',
'createaccountmail'          => 'iber E-Mail',
'badretype'                  => 'Di beidi Passwörter stimme nid zämme.',
'userexists'                 => 'Dä Benutzername git s scho.
Bitte nimm e andere.',
'youremail'                  => 'E-Mail-Adräss:',
'username'                   => 'Benutzername:',
'uid'                        => 'Benutzer-ID:',
'yourrealname'               => 'Echte Name:',
'yourlanguage'               => 'Sproch:',
'yourvariant'                => 'Variante:',
'yournick'                   => 'Unterschrift:',
'badsig'                     => 'Dr Syntax vu dr Signatur isch nid giltig; bitte d HTML iberpriefe.',
'badsiglength'               => 'Die Unterschrift derf hegschtens $1 Zeiche lang syy.',
'email'                      => 'E-Mail',
'prefs-help-realname'        => '* <strong>Dyy ächte Name</strong> (optional): Wänn du wetsch, ass Dyyni Änderige uf Dii chenne zruckgfierd wäre.',
'loginerror'                 => 'Fähler bir Aamäldig',
'prefs-help-email'           => '* <strong>E-Mail-Adrässe</strong> (optional): We du en E-Mail-Adrässen aagisch, überchömen anderi Benutzer d Müglechkeit, di über dyni Benutzer- oder Benutzer_Diskussionsyte z kontaktiere. Im Fall das du mal ds Passwort sötsch vergässe ha, cha dir es nöis Zuefalls-Passwort gmailet wärde.<br />
** <strong>Signatur</strong> (optional): D Signatur wird ygsetzt, we du e Diskussionsbytrag mit «<nowiki>~~~~</nowiki>» unterschrybsch; we du ke spezielli Signatur aagisch, de wird eifach di Benutzername mit emne Link uf dyni Benutzersyten ygfüegt.',
'prefs-help-email-required'  => 'S brucht e giltigi E-Mail-Adräss.',
'nocookiesnew'               => 'Dr Benutzerzuegang isch aaglait wore, aber Du bisch nid yygloggt. {{SITENAME}} brucht fir die Funktion Cookies, bitte tue die aktiviere un logg Di derno mit Dyynem neje Benutzername un em Passwort, wu drzue ghert, yy.',
'nocookieslogin'             => '{{SITENAME}} brucht Cookies fir e Aamäldig. Du hesch d Cookies deaktiviert. Aktivier si bitte un versuech s no mol.',
'noname'                     => 'Du muesch e Benutzername aagee.',
'loginsuccesstitle'          => 'Aamäldig erfolgrych',
'loginsuccess'               => "'''Du bisch jetz als \"\$1\" bi {{SITENAME}} aagmäldet.'''",
'nosuchuser'                 => 'Dr Benutzername "$1" git s nit.

Iberprief d Schrybwys, oder mäld Di as [[Special:UserLogin/signup|neje Benutzer aa]].',
'nosuchusershort'            => 'S git kei Benutzername „<nowiki>$1</nowiki>“. Bitte iberprief d Schrybwys.',
'nouserspecified'            => 'Bitte gib e Benutzername yy.',
'wrongpassword'              => 'Des Passwort isch falsch (oder fählt). Bitte versuech s nomol.',
'wrongpasswordempty'         => 'Du hesch vergässe dyy Passwort yyzgee. Bitte versuech s nomol.',
'passwordtooshort'           => 'Fähler bi dr Passwort-Wahl: S muess zmindescht $1 Zeiche lang syy un derf nit mit em Benutzername identisch syy.',
'mailmypassword'             => 'Es nöis Passwort schicke',
'passwordremindertitle'      => 'Nei Passwort fir {{SITENAME}}',
'passwordremindertext'       => 'Ebber mit dr IP-Adress $1 het e nej Passwort fir d Aamäldig bi {{SITENAME}} ($4) aagfordert, wahrschyyns Du sälber.

S automatisch generiert Passwort fir dr Benutzer $2 heisst jetz: $3

Du sottsch dich jetzt aamälde un s Passwort ändere: {{fullurl:Special:UserLogin}}

Bitte ignorier die E-Mail, wänn Du s nid sälber aagforderet hesch. S alt Passwort blybt wyter giltig.',
'noemail'                    => 'Dr Benutzer "$1" het kei E-Mail-Adräss aagee.',
'passwordsent'               => 'E temporär Passwort isch an d E-Mail-Adräss vum Benutzer "$1" gschickt wore.
Bitte mäld Di dodemit aa, wänn s iberchu hesch.',
'blocked-mailpassword'       => 'Die IP-Adräss, wu vu Dir verwändet wird, isch fir s Ändre vu Syte gsperrt
Zum Missbruuch z verhindere, isch au d Megligkeit gsperrt wore, e nej Passwort aazfordere.',
'eauthentsent'               => 'E Bstätigungs-Mail isch an die Adräss gschickt wore, wu Du aagee hesch. 

Voreb ass no mee Mails iber d {{SITENAME}}-Mailfunktion an die Adräss gschickt wäre, muesch d Inschtruktione in däm Mail befolge, zum bstätige, ass es wirkli Dyys isch.',
'throttled-mailpassword'     => 'In dr letschte $1 Stunde isch scho mol e neij Passwort aagforderet wore. Zum e Missbruuch vu däre Funktion z verhindere, cha nume alli $1 Stunde ne neij Passwort aagforderet wäre.',
'mailerror'                  => 'Fähler bim Sende vun de Mail: $1',
'acct_creation_throttle_hit' => 'Si hand bereits {{PLURAL:$1|1 Benutzerkonto|$1 Benutzerkontos}} agleit.
Si chönne cheini meh aalege.',
'emailauthenticated'         => 'Dyy E-Mail-Adräss isch am $1 bstätigt wore.',
'emailnotauthenticated'      => 'Dyni E-Mail-Adräss isch nonig bstätigt. Wäg däm gehn di erwyterete E-Mail-Funktione nonig.
Fir d Bstätigung muesch em Gleich nogoh, wu Dir gschickt woren isch. Du chasch au e neie sonig Gleich aafordere:',
'noemailprefs'               => 'Du hesch kei E-Mail-Adrässen aaggä, drum sy di folgende Funktione nid müglech.',
'emailconfirmlink'           => 'E-Poscht-Adräss bstätige',
'invalidemailaddress'        => 'Diä E-Mail-Adress isch nit akzeptiert worre, wil s ä ugültigs Format ghet het.
Bitte gib ä neiji Adress in nem gültige Format ii, odr tue s Feld leere.',
'accountcreated'             => 'S Benutzerkonto isch aagleit wore.',
'accountcreatedtext'         => 'S Benutzerkonto $1 isch aagleit wore.',
'createaccount-title'        => 'Aalege vum e Benutzerkonto fir {{SITENAME}}',
'createaccount-text'         => 'Fir Dii isch e Benutzerkonto "$2" uf {{SITENAME}} ($4) aaglait wore. S Passwort fir "$2" , wu automatisch generiert woren isch, isch "$3". Du sottsch Di jetz aamälde un s Passwort ändere.

Wänn s Benutzerkonto us Versäh aaglait woren isch, chasch die Nochricht ignoriere.',
'loginlanguagelabel'         => 'Sproch: $1',

# Password reset dialog
'resetpass'               => 'Passwort fir Benutzerkonto zrucksetze',
'resetpass_announce'      => 'Aamäldig mit em Code, wu per Mail zuegschickt woren isch. Zum d Aamäldig abzschliesse, muesch jetz e nej Passwort wehle.',
'resetpass_text'          => '<!-- Tue do dr Text ergänze -->',
'resetpass_header'        => 'Passwort zrucksetze',
'resetpass_submit'        => 'Passwort ibermittle un aamälde',
'resetpass_success'       => 'Dyy Passwort isch erfolgryych gänderet wore. Jetz chunnt d Aamäldig …',
'resetpass_bad_temporary' => 'Vorlaifig Passwort, wu nimi giltig isch. Du hesch Dyy Passwort scho gänderet oder e nej vorlaifig Passwort aagforderet.',
'resetpass_forbidden'     => 'S Passwort cha nid gänderet wäre.',
'resetpass_missing'       => 'Läär Formular',

# Edit page toolbar
'bold_sample'     => 'fetti Schrift',
'bold_tip'        => 'Fetti Schrift',
'italic_sample'   => 'kursiv gschribe',
'italic_tip'      => 'Kursiv gschribe',
'link_sample'     => 'Stichwort',
'link_tip'        => 'Interne Link',
'extlink_sample'  => 'http://www.example.com Linktekscht',
'extlink_tip'     => 'Externer Link (http:// beachte)',
'headline_sample' => 'Abschnitts-Überschrift',
'headline_tip'    => 'Überschrift Äbeni 2',
'math_sample'     => 'Formel do yfüge',
'math_tip'        => 'Mathematisch Formel (LaTeX)',
'nowiki_sample'   => 'Was da inne staht wird nid formatiert',
'nowiki_tip'      => 'Wiki-Formatierige ignoriere',
'image_sample'    => 'Byschpil.jpg',
'image_tip'       => 'Bildverwys',
'media_sample'    => 'Byschpil.ogg',
'media_tip'       => 'Dateie-Link',
'sig_tip'         => 'Dyni Signatur mit Zytagab',
'hr_tip'          => 'Horizontali Linie (sparsam verwende)',

# Edit pages
'summary'                   => 'Zämefassig',
'subject'                   => 'Beträff',
'minoredit'                 => 'Numen es birebitzeli gänderet',
'watchthis'                 => 'Dä Artikel beobachte',
'savearticle'               => 'Syte spychere',
'preview'                   => 'Vorschou',
'showpreview'               => 'Vorschau aaluege',
'showlivepreview'           => 'Live-Vorschau',
'showdiff'                  => 'Zeig Änderige',
'anoneditwarning'           => "'''Warnig:''' Si sin nit aagmäldet. Ihri IP-Adrässe wird in de Gschicht vo däm Artikel gspeicheret.",
'missingsummary'            => "'''Obacht:''' Du hesch kei Zämefassig aagee. Wenn du nomol uf Spychere drucksch, wird d Änderung ohni gspychert.",
'missingcommenttext'        => 'Bitte gib Dyy Kommentar unte yy.',
'missingcommentheader'      => "'''ACHTIG:''' Du hesch kei Iberschrift im Fäld „Betreff:“ yygee. Wänn nomol uf „Syte spichere“ drucksch, wird Dyyni Bearbeitig ohni Iberschrift gspicheret.",
'summary-preview'           => 'Vorschou vor Zämefassig',
'subject-preview'           => 'Vorschau vum Betreff',
'blockedtitle'              => 'Benutzer isch gsperrt.',
'blockedtext'               => "<big>'''Dy Benutzernamen oder dyni IP-Adrässen isch gsperrt worde.'''</big>

Du chasch $1 oder en anderen [[{{MediaWiki:Grouppage-sysop}}|Administrator]] kontaktiere, für die Sperrig z diskutiere. Vergis i däm Fall bitte keni vo de folgenden Agabe:

*Administrator, wo het gsperrt: $1
*Grund für d Sperrig: $2
*Afang vor Sperrig: $8
*Ändi vor Sperrig: $6
*IP-Adrässe: $3
*Sperrig betrifft: $7
*ID vor Sperrig: #$5",
'autoblockedtext'           => 'Dyyni IP-Adräss isch automatisch gsperrt wore, wel si vu me andere Benutzer brucht woren isch, wu dur $1 gsperrt woren isch.
As Grund isch aagee wore:

:\'\'$2\'\' (<span class="plainlinks">[{{fullurl:Special:IPBlockList|&action=search&limit=&ip=%23}}$5 Logbucheintrag]</span>)

<p style="border-style: solid; border-color: red; border-width: 1px; padding:5px;"><b>E Zuegriff zum Läse isch alno megli,</b>
nume d Bearbeitig un s Aalege vu Syte in {{SITENAME}} isch gsperrt wore.
Wänn die Nochricht aazeigt wird, au wänn Du nume zum Läse zuegriffe hesch, bisch eme (rote) Gleich uf e Syte noogange, wu s nonig git.</p>

Du chasch $1 oder ein vu dr andre [[{{MediaWiki:Grouppage-sysop}}|Ammanne]] kontaktiere, zum iber die Sperri z diskutiere.

<div style="border-style: solid; border-color: red; border-width: 1px; padding:5px;">
\'\'\'Bitte gib in jedere Aafrog die Date aa:\'\'\'
*Ammann, wu gsperrt het: $1
*Sperrgrund: $2
*Aafang vu dr Sperri: $8
*Sperr-Änd: $6
*IP-Adräss: $3
*Sperri betrifft: $7
*Sperr-ID: #$5
</div>',
'blockednoreason'           => 'kei Begrindig aagee',
'blockedoriginalsource'     => "Dr Quälltäxt vu '''$1''' wird do aazeigt:",
'blockededitsource'         => "Dr Quälltäxt vu '''Dyyne Änderige''' an '''$1''':",
'whitelistedittitle'        => 'Zum Bearbeite muess mer aagmäldet syy.',
'whitelistedittext'         => 'Du muesch Di $1 zum Artikel bearbeite.',
'whitelistreadtitle'        => 'Zum Läse muesch aagmäldet syy',
'whitelistreadtext'         => 'Du muesch di [[Special:Userlogin|amälde]], für die Syte chönne z läse.',
'whitelistacctitle'         => 'Du bisch nit berächtigt, e Benutzerkonto aazlege.',
'whitelistacctext'          => 'Für by {{SITENAME}} es Benutzerkonto azlege, muesch di [[Special:Userlogin|amälde]] und über di nötige Rächt verfüege.',
'confirmedittitle'          => 'Zum Ändere isch e bstätigti E-Mail-Adräss notwändig.',
'confirmedittext'           => 'Si mien Ihri E-Mail-Adräss zerscht bstätige, voreb Si Syte chenne ändere. Bitte setze Si in [[Special:Preferences|Ihre Iistellige]] Ihri E-Mail-Adräss yy un len Si si priefe.',
'nosuchsectiontitle'        => 'Abschnitt git s nid.',
'nosuchsectiontext'         => 'Du versuechsch dr Abschnitt $1, wu s nid git, z bearbeite. Mer cha aber nume Abschnitt bearbeiter, wu s scho git.',
'loginreqtitle'             => 'S brucht d Aamäldig.',
'loginreqlink'              => 'aamälde',
'loginreqpagetext'          => 'Du muesch Di $1, zum Syte chenne läse.',
'accmailtitle'              => 'S Passwort isch verschickt worre.',
'accmailtext'               => 'S Passwort für "$1" isch uf $2 gschickt worde.',
'newarticle'                => '(Nej)',
'newarticletext'            => "Du bisch eme Gleich nogange zuen ere Syte, wu s nid git. 
Zum die Syte aalege, chasch do in däm Chaschte unte aafange schrybe (lueg [[{{MediaWiki:Helppage}}|Hilfe]] fir meh Informatione).
Wänn do nid hesch welle aane goh, no druck in Dyynem Browser uf '''Zruck'''.",
'anontalkpagetext'          => "''Des isch e Diskussionssyte vo me anonyme Benutzer, wo kei Zuegang aaglait het oder wo ne nit bruucht. Sälleweg muen mir di numerischi IP-Adräss bruuche zum ihn oder si z identifiziere. Sone IP-Adräss cha au vo mehrere Benutzer deilt werde. Wenn Si en anonyme Benutzer sin un s Gfiehl hen, dass do irrelevanti Kommentar an Si grichtet wärde, derno [[Special:UserLogin|lege Si sich bitte en Zuegang aa odr mälde sich aa]] zum in Zuekunft Verwirrige mit andere anonyme Benutzer z vermide.''",
'noarticletext'             => 'Uf däre Syte het s no kei Täxt. Du chasch uf andere Syte [[Special:Search/{{PAGENAME}}|dä Yytrag sueche]], <span class="plainlinks">[{{fullurl:Special:Log|page={{urlencode:{{FULLPAGENAME}}}}}} dr Logbuechyytrag sueche, wo dezue ghert],
oder [{{fullurl:{{FULLPAGENAME}}|action=edit}} die Syte bearbeite]</span>.',
'userpage-userdoesnotexist' => 'S Benutzerkonto „$1“ git s nit. Bitte prief, eb Du die Syte wirkli wit aalege/bearbeite.',
'clearyourcache'            => "'''Hywys:''' Noch dynere Änderig muess no der Browser-Cache gläärt wäre!<br />'''Mozilla/Safari/Konqueror:''' ''Strg-Umschalttaschte-R'' (oder ''Umschalttasche'' druckt halte und uf s ''Nei-Lade''-Symbol klicke), '''IE:''' ''Strg-F5'', '''Opera/Firefox:''' ''F5''",
'usercssjsyoucanpreview'    => "'''Tipp:''' Nimm dr Vorschau-Chnopf, zum Dyy nej CSS/JS vor em Spichere z teschte.",
'usercsspreview'            => "== Vorschau vu Dyynem Benutzer-CSS. ==
'''Wichtig:''' Noch em Spichere muesch Dyynem Browser sage, ass er die nej Version ladet:

'''Mozilla:''' ''Strg-Shift-R'', '''IE:''' ''Strg-F5'', '''Safari:''' ''Cmd-Shift-R'', '''Konqueror:''' ''F5''.",
'userjspreview'             => "== Vorschau vu Dyynem Benutzer-Javascript. ==
'''Gib acht:''' Noch em Spychere muesch Dyy Browser aawyse di nej Version z lade: '''Mozilla:''' ''Strg-Shift-R'', '''IE:''' ''Strg-F5'', '''Safari:''' ''Cmd-Shift-R'', '''Konqueror:''' ''F5''.",
'userinvalidcssjstitle'     => "'''Achtig:''' D Skin „$1“ git s nid. Dänk dra, ass benutzerspezifischi .css- und .js-Syte mit eme Chleibuechstabe mien aafange, also z B. ''{{ns:user}}:Mustermann/monobook.css'' statt ''{{ns:user}}:Mustermann/Monobook.css''.",
'updated'                   => '(Gänderet)',
'note'                      => "'''Obacht: '''",
'previewnote'               => "'''Das isch numen e Vorschau und nonig gspycheret!'''",
'previewconflict'           => 'Die Vorschau zeigt dr Inhalt vum obere Täxtfäld. Eso siht dr Artikel us, wän Du jetz uf Spychere drucksch.',
'session_fail_preview'      => "'''Dyyni Bearbeitig het nid chenne gspycheret wäre, wel Sitzigsdate verlore gange sin.
Bitte versuech s nomol. Derzue drucksch unter däre Täxtvorschau nomol uf „Syte spychere“.
Wänn s Problem blybt, [[Special:UserLogout|mäld Di ab]] un derno wider aa.'''",
'session_fail_preview_html' => "'''Dyyni Bearbeitig het nid chenne gspycheret wäre, wel Sitzigsdate verlore gange sin.'''

''Wel in {{SITENAME}} s Spychere vun ere reine HTML aktiviert isch, isch d Vorschau usbländet wore, zum JavaScript-Attacke z verhindere.''

'''
Bitte versuech s nomol. Derzue drucksch unter däre Täxtvorschau nomol uf „Syte spicherne“.
Wänn s Problem blybt, [[Special:UserLogout|mäld Di ab]] un derno wider aa.'''",
'token_suffix_mismatch'     => "'''Dyyni Bearbeitig isch zruckgwise wore, wel Dyy Browser Zeiche im Bearbeite-Token verstimmlet het.
S Spichere cha dr Inhalt vu dr Syte hii mache. Des git s e mänkmol, wänn eber e anonyme Proxy-Dienscht brucht, wu Fähler macht.'''",
'editing'                   => 'Bearbeite vo «$1»',
'editinguser'               => "Benutzerrächt ändere vu '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]] | [[Special:Contributions/$1|{{int:contribslink}}]])",
'editingsection'            => 'Bearbeite vo «$1» (Absatz)',
'editingcomment'            => 'Bearbeite vu $1 (Neje Abschnitt)',
'editconflict'              => 'Bearbeitigs-Konflikt: «$1»',
'explainconflict'           => "Öpper anders het dä Artikel gänderet, wo du ne sälber am Ändere bisch gsy.
Im obere Tekschtfäld steit der jitzig Artikel.
Im untere Tekschtfält stöh dyni Änderige.
Bitte überträg dyni Änderigen i ds obere Tekschtfäld.
We du «Syte spychere» drücksch, de wird '''nume''' der Inhalt vom obere Tekschtfäld gspycheret.",
'yourtext'                  => 'Dyy Täxt',
'storedversion'             => 'Gspychereti Version',
'nonunicodebrowser'         => "'''Obacht:''' Dyy Browser cha Unicode-Zeiche nid richtig verschaffe. Bitte verwänd e andere Browser zum Syte bearbeite.",
'editingold'                => "'''Obacht: Du bisch en alti Version vo däm Artikel am Bearbeite.
Alli nöiere Versione wärden überschribe, we du uf «Syte spychere» drücksch.'''",
'yourdiff'                  => 'Unterschid',
'copyrightwarning'          => "'''Bitte <big>kopier kener Internetsyte</big>, wo nid dyner eigete sy, bruuch <big>kener urhäberrächtlech gschützte Wärch</big> ohni Erloubnis vor Copyright-Inhaberschaft!'''<br />
Hiemit gisch du zue, das du dä Tekscht '''sälber gschribe''' hesch, das der Tekscht Allgmeinguet ('''public domain''') isch, oder das der '''Copyright-Inhaberschaft''' iri '''Zuestimmig''' het 'gä. Falls dä Tekscht scho nöumen anders isch veröffentlecht worde, de schryb das bitte uf d Diskussionssyte.
<i>Bis dir bewusst, dass alli {{SITENAME}}-Byträg outomatisch under der „$2“ stöh (für Details vgl. $1). We du nid wosch, das anderi dy Bytrag chöu veränderen u wyterverbreite, de drück nid uf „Syte spychere“.</i>",
'copyrightwarning2'         => "Dängge Si dra, dass alli Änderige {{GRAMMAR:dativ {{SITENAME}}}} vo andere Benutzer wider gänderet oder glöscht chönne wärde. Wenn Si nit wänn, dass ander Lüt an Ihrem Tekscht ummedoktere denn schicke Si ihn jetz nit ab.<br />
Si verspräche uns usserdäm, dass Si des alles selber gschribe oder vo nere Quälle kopiert hen, wo Public Domain odr sunscht frei isch (lueg $1 für Details).
'''SETZE SI DO OHNI ERLAUBNIS KEINI URHEBERRÄCHTLICH GSCHÜTZTI WÄRK INE!'''",
'longpagewarning'           => '<span style="color:#ff0000">WARNIG:</span> Die Syten isch $1 kB gross; elteri Browser chönnte Problem ha, Sytene z bearbeite wo grösser sy als 32 kB. Überleg bitte, öb du Abschnitt vo dere Syte zu eigete Sytene chönntsch usboue.',
'longpageerror'             => "'''FÄHLER: Dä Täxt, wu Du spichere wit, isch $1 KB gross. Des isch gresser wie s erlaubt Maximum vu $2 KB – s Spichere isch nid megli.'''",
'readonlywarning'           => '<strong>OBACHT: D Datebank isch gsperrt wore fir Wartigsarbete. Dyyni Änderige chenne wäge däm im Momänt nit gspycheret wäre.
Sicher dr Täxt bitte lokal uf Dyynem Computer un versuech s nomol zuen eme spetere Zytpunkt.</strong>',
'protectedpagewarning'      => "'''WARNIG: Die Syten isch gsperrt worde, so das se nume Benutzer mit Sysop-Rechten chöi verändere.'''",
'semiprotectedpagewarning'  => "'''''Halbsperrig''': Die Syte cha vu aagmäldete Benutzern bearbeitet wäre. Fir Benutzer, wu nid oder grad erscht aagmäldet sin, isch dr Schrybzuegang gsperrt.''",
'cascadeprotectedwarning'   => "'''ACHTIG: Die Syte isch gsperrt. Wäg däm cha si nume vu Benutzer mit Ammannerächt bearbeitet wäre. Si isch in die {{PLURAL:$1|Syte|Syte}} yybunde, wu mit ere Kaskadesperroption gschitzt {{PLURAL:$1|isch|sin}}:'''",
'titleprotectedwarning'     => "'''ACHTIG: S Aalege vu däre Syte isch gsperrt. Wäg däm cha si nume vu bstimmte Benutzer aaglait wäre.'''",
'templatesused'             => 'Selli Vorlage wärde in sellem Artikel bruucht:',
'templatesusedpreview'      => 'Vorlage wo i dere Vorschou vorchöme:',
'templatesusedsection'      => 'Vorlage, wu in däm Abschnitt brucht wäre:',
'template-protected'        => '(schrybgschützt)',
'template-semiprotected'    => '(schrybgschitzt fir Benutzer, wo nit aagmäldet oder nei sin)',
'edittools'                 => '<!-- Dää Text wird unter em "Ändere"-Formular un bim "Uffelade"-Formular aagzeigt. -->',
'nocreatetitle'             => 'S Aalege vu neje Syte isch yygschränkt.',
'nocreatetext'              => "Uf {{SITENAME}} isch d Erstellig vo nöue Syten ygschränkt.
Du chasch nur Syten ändere, wo's scho git, oder muesch di [[Special:UserLogin|amälde]].",
'nocreate-loggedin'         => 'Du bisch nid berächtigt, neji Syte aazlege.',
'permissionserrors'         => 'Berächtigungsfähler',
'permissionserrorstext'     => 'Du bisch nid berächtigt, die Aktion uszfiere. {{PLURAL:$1|Grund|Grind}}:',
'recreate-deleted-warn'     => "'''Obacht: Du bisch e Syten am kreiere, wo scho einisch isch glösche worde.'''

Bitte überprüeff, öb s sinnvoll isch, mit em Bearbeite wyter z mache.
Hie gsehsch ds Lösch-Logbuech vo dere Syte:",

# "Undo" feature
'undo-success' => 'Zum die Änderig ruckgängig z mache, kontrollier bitte d Bearbeitig in dr Verglichsaasicht un druck derno uf „Syte spichere“.',
'undo-failure' => 'D Änderig het nid chenne ruckgängig gmacht wäre, wel dää Abschnitt mittlerwyli gänderet woren isch.',
'undo-summary' => 'D Änderig $1 vu [[Special:Contributions/$2|$2]] ([[User talk:$2|Diskussion]]) isch ruckgängig gmacht wore.',

# Account creation failure
'cantcreateaccounttitle' => 'Benutzerkonto cha nid aagleit wäre.',
'cantcreateaccount-text' => "S Aalege vu me Benutzerkonto vu dr IP-Adräss '''($1)''' isch dur [[User:$3|$3]] gsperrt wore.

Grund vu dr Sperri: ''$2''",

# History pages
'viewpagelogs'        => 'Logbüecher für die Syten azeige',
'nohistory'           => 'S git kei Versionsgschicht fir die Syte.',
'revnotfound'         => 'Die Version het nüt chönne gfunde werde.',
'revnotfoundtext'     => 'Die Version vo dr Syte wo du nooch gsuecht hesch, het nüt chönne gfunde werde. Bitte überprüef d URL vo dere Syte.',
'loadhist'            => 'Am Lade vu dr Lischt mit dr friejere Versione',
'currentrev'          => 'Itzigi Version',
'revisionasof'        => 'Version vo $1',
'revision-info'       => 'Alti Bearbeitig vom $1 dür $2',
'previousrevision'    => '← Vorderi Version',
'nextrevision'        => 'Nächschti Version →',
'currentrevisionlink' => 'Itzigi Version',
'cur'                 => 'Jetz',
'next'                => 'Nächschti',
'last'                => 'vorane',
'orig'                => 'Original',
'page_first'          => 'Afang',
'page_last'           => 'Ändi',
'histlegend'          => 'Du chasch zwei Versionen uswähle und verglyche.<br />
Erklärig: (aktuell) = Underschid zu jetz,
(vorane) = Underschid zur alte Version, <strong>K</strong> = chlyni Änderig',
'deletedrev'          => '[glescht]',
'histfirst'           => 'Eltischti',
'histlast'            => 'Nöischti',
'historysize'         => '({{PLURAL:$1|1 Byte|$1 Bytes}})',
'historyempty'        => '(läär)',

# Revision feed
'history-feed-title'          => 'Versionsgschicht',
'history-feed-description'    => 'Versionsgschicht fir die Syte in {{SITENAME}}',
'history-feed-item-nocomment' => '$1 um $2', # user at time
'history-feed-empty'          => 'Di aagforderet Syte git s nid. Villicht isch si glescht oder verschobe wore. [[Special:Search|Suech]] {{SITENAME}} fir neji Syte, wu passe.',

# Revision deletion
'rev-deleted-comment'         => '(Bearbeitigskommentar uusegnuh)',
'rev-deleted-user'            => '(Benutzername uusegnuh)',
'rev-deleted-event'           => '(Logbuechaktion uusegnuh)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks"> Die Version isch glescht wore un chaa nimi aagluegt wäre.
Information zue dr Leschig un e Begrindig het s im [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} Lesch-Logbuech].</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">Die Version isch glescht wore un cha nimi aagluegt wäre. As Amman chasch si aber alno aaluege uf {{SITENAME}}.
Informatione zue dr Leschig un e Begrindig het s im [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} Lesch-Logbuech].</div>',
'rev-delundel'                => 'zeig/versteck',
'revisiondelete'              => 'Versione lesche/widerherstelle',
'revdelete-nooldid-title'     => 'Kei Version aagee',
'revdelete-nooldid-text'      => 'Du hesch kei Version aagee, wu die Aktion mit soll usgfiert wäre.',
'revdelete-selected'          => "'''{{PLURAL:$2|Usgwehlti Version|Usgwehlti Versione}} vu [[:$1]]:'''",
'logdelete-selected'          => "{{PLURAL:$2|Usgwählte Logbuechyytrag|Usgwählti Logbuechyyträg}} fir '''$1:'''",
'revdelete-text'              => "'''Dr Inhalt oder anderi Bstandteil vu gleschte Versione chenne nimi aagluegt wäre, si erschyyne aber alno as Yytreg in dr Versiongschicht.'''

{{SITENAME}}-Ammanne chenne dr Inhalt, wu glescht isch, oder di andre gleschte Bstandteil alno aaluege un au widerherstelle, user s isch feschtgleit, ass d Zuegangsbschränkige au fir Ammanne gälte.

'''Gleschti Versionen un Aktione blyben in dr Versionsgschicht un in dr Logbiecher. Teil dervu sin aber fir d Efffentligkeit nimmi zuegänglig.'''

Anderi Ammanne uf {{SITENAME}} hän alno Zuegriff uf dr versteckt Inhalt un chenne ne mit dr glyche Syte widerhärstelle, wänn s keini zuesätzlige Yyschränkige git.
Bitte bstätig, ass Du des witt mache, ass Du d Konsequänze verstohsch un ass des mit dr [[{{MediaWiki:Policy-url}}|Richtlinie]] ibereinstimmt.",
'revdelete-legend'            => 'Setze vu dr Sichtbarkeits-Yyschränkige',
'revdelete-hide-text'         => 'Täxt vu dr Version versteckle',
'revdelete-hide-name'         => 'Logbuech-Aktion versteckle',
'revdelete-hide-comment'      => 'Bearbeitigskommentar versteckle',
'revdelete-hide-user'         => 'Benutzername/d IP vum Bearbeiter versteckle',
'revdelete-hide-restricted'   => 'Die Yyschränkige gälte au fir Ammanne',
'revdelete-suppress'          => 'Grund vu dr Leschig au vor dr Ammanne versteckle',
'revdelete-hide-image'        => 'Bildinhalt versteckle',
'revdelete-unsuppress'        => 'Yyhscränkige fir di widerhergstellte Versione ufhebe',
'revdelete-log'               => 'Kommentar/Begrindig (erschyynt im Logbuech):',
'revdelete-submit'            => 'Uf usgwehlti Version aawände',
'revdelete-logentry'          => 'het d Versionsaasicht fir „[[$1]]“ gänderet',
'logdelete-logentry'          => 'het d Sichtbarkeit fir „[[$1]]“ gänderet',
'revdelete-logaction'         => '$1 {{PLURAL:$1|Version|Versione}} uf Modus $2 gsetzt',
'logdelete-logaction'         => '$1 {{plural:$1|Yytrag|Yyträg}} fir [[$3]] uf Modus $2 gsetzt',
'revdelete-success'           => "'''Versionsaasicht erfolgryych gänderet.'''",
'logdelete-success'           => "'''Logbuechaasicht erfolgryych gänderet.'''",

# Oversight log
'oversightlog'    => 'Oversight-Logbuech',
'overlogpagetext' => 'Des isch s Logbuech vu dr Leschige un Sperrine, wu vor Ammanne versteckt sin.',

# History merging
'mergehistory'                     => 'Versionsgschichte zämmefiere',
'mergehistory-header'              => 'Mit däre Spezialsyte chasch d Versionsgschicht vun ere Ursprungssyte mit dr Versionsgschichte vun ere Ziilsyte zämefiere.
Stell sicher, ass d Versionsgschicht vun eme Artikel historisch korrekt isch.',
'mergehistory-box'                 => 'Versionsgschichte vu zwoo Syte zämefiere',
'mergehistory-from'                => 'Ursprungssyte:',
'mergehistory-into'                => 'Ziilsyte:',
'mergehistory-list'                => 'Versione, wu zämegfierd chenne wäre',
'mergehistory-merge'               => 'Die Versione vu „[[:$1]]“ chenne no „[[:$2]]“ ibertrait wäre. Markier d Version, wu d Versione bis zuen ere solle yyschliessli ibertrage wäre. Bitte gib Acht, ass d Nutzig vu dr Navigationsgleicher d Uuswahl zrucksetzt.',
'mergehistory-go'                  => 'Zeig d Versione, wu zämegfierd chenne wäre',
'mergehistory-submit'              => 'Fier Versione zäme',
'mergehistory-empty'               => 'S chenne kei Versione zämegfierd wäre.',
'mergehistory-success'             => '{{PLURAL:$3|1 Version|$3 Versione}} vu „[[:$1]]“ isch no „[[:$2]]“ zämegfierd.',
'mergehistory-fail'                => 'Zämefierig vu dr Versione nid megli, bitte prief d Syte un d Zytaagobe.',
'mergehistory-no-source'           => 'Ursprungssyte „$1“ isch nit vorhande.',
'mergehistory-no-destination'      => 'Ziilsyte „$1“ isch nit vorhande.',
'mergehistory-invalid-source'      => 'Ursprungssyte muess e giltige Sytename syy.',
'mergehistory-invalid-destination' => 'Ziilsyte muess e giltige Sytename syy.',

# Merge log
'mergelog'           => 'Zämefierigs-Logbuech',
'pagemerge-logentry' => 'het [[$1]] in [[$2]] zämegfierd (Versione bis $3)',
'revertmerge'        => 'Zämefierig ruckgängig mache',
'mergelogpagetext'   => 'Des isch e Lischt vu dr letschte Zämefierige vu Versionsgschichte.',

# Diffs
'history-title'           => 'Versionsgschicht vo „$1“',
'difference'              => '(Unterschide zwüsche Versione)',
'lineno'                  => 'Zyle $1:',
'compareselectedversions' => 'Usgwählti Versione verglyche',
'editundo'                => 'rückgängig',
'diff-multi'              => '(Der Versioneverglych zeigt ou d Änderige vo {{PLURAL:$1|1 Version|$1 Versione}} derzwüsche.)',

# Search results
'searchresults'         => 'Suech-Ergäbnis',
'searchresulttext'      => 'Für wiiteri Informatione zuem Sueche uff {{SITENAME}} chönne Si mol uff [[{{MediaWiki:Helppage}}|{{int:help}}]] luege.',
'searchsubtitle'        => 'Für d Suechaafrag «[[:$1]]»',
'searchsubtitleinvalid' => 'Für d Suechaafrag «$1»',
'noexactmatch'          => "'''Es git kei Syte mit em Tiel „$1“.'''
Du chasch die [[:$1|Syte nöu schrybe]].",
'noexactmatch-nocreate' => "'''S git kei Syte mit em Titel „$1“.'''",
'toomanymatches'        => 'D Aazahl vu dr Suechergebniss isch z gross, bitte versuech e anderi Abfrog.',
'titlematches'          => 'Iberyystimmige mit Sytentitel',
'notitlematches'        => 'Kei Iberyystimmige mit Sytetitel',
'textmatches'           => 'Iberyystimmige mit Inhalte',
'notextmatches'         => 'Kei Iberyystimmige mit Inhalte',
'prevn'                 => 'vorderi $1',
'nextn'                 => 'nächschti $1',
'viewprevnext'          => '($1) ($2) aazeige; ($3) uf ds Mal',
'showingresults'        => "Do {{PLURAL:$1|isch '''1''' Ergebnis|sin '''$1''' Ergebniss}}, s fangt aa mit dr Nummerer '''$2.'''",
'showingresultsnum'     => "Do {{PLURAL:$3|isch '''1''' Ergebnis|sin '''$3''' Ergebniss}}, s fangt aa mit dr Nummere '''$2.'''",
'nonefound'             => "'''Hiiwyys:''' S wäre standardmässig nume e Teil Namensryym dursuecht. Setz ''all:'' vor Dyy Suechbegriff go alli Syte (mit Diskussionssyte, Vorlage usw.) dursueche oder diräkt dr Name vum Namensruum, wu sett dursuecht wäre.",
'powersearch'           => 'Erwytereti Suechi',
'powersearchtext'       => '
Suche in Namensräumen :<br />
$1<br />
$2 Zeige auch REDIRECTs   Suche nach $3 $9',
'searchdisabled'        => 'D {{SITENAME}}-Suech isch deaktiviert. Du chasch mit Google sueche, s cha aber syy ass dr Suechindex vu Google fir {{SITENAME}} veraltet isch.',

# Preferences page
'preferences'              => 'Yystellige',
'mypreferences'            => 'Ystellige',
'prefs-edits'              => 'Aazahl vu dr Bearbeitige:',
'prefsnologin'             => 'Nid aagmäldet',
'prefsnologintext'         => 'Du muesch <span class="plainlinks">[{{fullurl:Special:UserLogin|returnto=$1}} aagmäldet]</span> sy, für Benutzerystellige chönne z ändere',
'prefsreset'               => 'Du hesch itz wider Standardystellige',
'qbsettings'               => 'Syteleischte',
'qbsettings-none'          => 'Keini',
'qbsettings-fixedleft'     => 'Links, fescht',
'qbsettings-fixedright'    => 'Rächts, fescht',
'qbsettings-floatingleft'  => 'Links, in dr Schwebi',
'qbsettings-floatingright' => 'Rächts, in dr Schwebi',
'changepassword'           => 'Passwort ändere',
'skin'                     => 'Skin',
'math'                     => 'TeX',
'dateformat'               => 'Datumsformat',
'datedefault'              => 'kei Aagab',
'datetime'                 => 'Datum un Zyt',
'math_failure'             => 'Parser-Fähler',
'math_unknown_error'       => 'Nit bekannte Fähler',
'math_unknown_function'    => 'Nit bekannti Funktion',
'math_lexing_error'        => "'Lexing'-Fähler",
'math_syntax_error'        => 'Syntaxfähler',
'math_image_error'         => 'd PNG-Konvertierig het nit funktioniert;
prief di korrekt Installation vu latex, dvips, gs un convert',
'math_bad_tmpdir'          => 'S temporär Verzeichnis fir mathematischi Formle cha nit aagleit oder bschribe wäre.',
'math_bad_output'          => 'S Ziilverzeichnis fir mathematischi Formle cha nit aagleit oder bschribe wäre.',
'math_notexvc'             => 'S texvc-Programm isch nit gfunde wore. Bitte acht gee uf math/README.',
'prefs-personal'           => 'Benutzerdate',
'prefs-rc'                 => 'Letschti Änderige',
'prefs-watchlist'          => 'Beobachtigslischte',
'prefs-watchlist-days'     => 'Aazahl vu dr Täg, wu d Beobchtigslischt standardmässig soll umfasse:',
'prefs-watchlist-edits'    => 'Maximali Zahl vu dr Yyträg:',
'prefs-misc'               => 'Verschidnigs',
'saveprefs'                => 'Änderige spychere',
'resetprefs'               => 'Änderige doch nid spychere',
'oldpassword'              => 'Alts Passwort',
'newpassword'              => 'Nöis Passwort',
'retypenew'                => 'Nöis Passwort (es zwöits Mal)',
'textboxsize'              => 'Tekscht-Ygab',
'rows'                     => 'Zylene',
'columns'                  => 'Spaltene',
'searchresultshead'        => 'Suech-Ergäbnis',
'resultsperpage'           => 'Träffer pro Syte',
'contextlines'             => 'Zyle pro Träffer',
'contextchars'             => 'Zeiche pro Zyle',
'stub-threshold'           => 'Gleichformatierig <a href="#" class="stub">vu chleine Syte</a> (in Byte):',
'recentchangesdays'        => 'Aazahl vu dr Täg, wu d Lischt vu dr  „Letschte Änderige“ standardmässig soll umfasse:',
'recentchangescount'       => 'Aazahl vu dr Yyträg in dr «letschte Änderige», in dr Versionsgschicht un in dr Logbiecher:',
'savedprefs'               => 'Dyni Ystellige sy gspycheret worde.',
'timezonelegend'           => 'Zytzone',
'timezonetext'             => 'Zytdifferänz i Stunden aagä zwüsche der Serverzyt u dyre Lokalzyt',
'localtime'                => 'Ortszyt',
'timezoneoffset'           => 'Unterschid¹',
'servertime'               => 'Aktuelli Serverzyt',
'guesstimezone'            => 'Vom Browser la ysetze',
'allowemail'               => 'andere Benutzer erlaube, dass si Ihne E-Mails chenne schicke',
'defaultns'                => 'Namensrüüm wo standardmäässig söll gsuecht wärde:',
'default'                  => 'Voryystellig',
'files'                    => 'Bilder',

# User rights
'userrights-lookup-user'           => 'Verwalt d Gruppezuegherigkeit',
'userrights-user-editname'         => 'Benutzername:',
'editusergroup'                    => 'Ändere vo Benutzerrächt',
'userrights-editusergroup'         => 'Bearbeit d Gruppezuegherigkeit vum Benutzers',
'saveusergroups'                   => 'Spychere d Gruppezuegherigkeit',
'userrights-groupsmember'          => 'Mitgliid vu:',
'userrights-groupsremovable'       => 'Gruppe wu usegnuh chenne wäre:',
'userrights-groupsavailable'       => 'Verfiegbari Gruppe:',
'userrights-groupshelp'            => 'Wähle die Gruppen, aus denen der Benutzer entfernt oder zu denen er hinzugefügt werden soll.
Nicht selektierte Gruppen werden nicht geändert. Eine Selektion kann mit Strg + Linksklick (bzw. Ctrl + Linksklick) entfernt werden.',
'userrights-reason'                => 'Grund:',
'userrights-available-none'        => 'Du derfsch kei Benutzerrächt verändere.',
'userrights-available-add'         => 'Du chasch Benutzer {{PLURAL:$2|vo däre Gruppe|vu däne $2 Gruppe}} zuefiege: $1.',
'userrights-available-remove'      => 'Du chasch Benutzer us {{PLURAL:$2|däre Gruppe|däne $2 Gruppe}} useneh: $1.',
'userrights-available-add-self'    => 'Du chasch Di sälber zue {{PLURAL:$2|däre Gruppe|däne Gruppe}} zuefiege: $1.',
'userrights-available-remove-self' => 'Du chasch Di sälber us {{PLURAL:$2|däre Gruppe|däne Gruppe}} useneh: $1.',
'userrights-no-interwiki'          => 'Du hesch nit d Berächtigung, Benutzerrächt in andere Wiki z ändere.',
'userrights-nodatabase'            => 'D Datebank $1 git s nit oder si isch nit lokal.',
'userrights-nologin'               => 'Du muesch Di mit eme Ammanne-Benutzerkonto [[Special:UserLogin|aamälde]], zum Benutzerrächt z ändere.',
'userrights-notallowed'            => 'Du hesch nit d Berächtigung zum Benutzerrächt vergee.',

# Groups
'group'               => 'Grupp:',
'group-autoconfirmed' => 'Bstetigti Benutzer',
'group-bot'           => 'Bötli',
'group-sysop'         => 'Ammanne',
'group-bureaucrat'    => 'Bürokrate',
'group-all'           => '(alli)',

'group-autoconfirmed-member' => 'Bstätigte Benutzer',
'group-bot-member'           => 'Bötli',
'group-sysop-member'         => 'Ammann',
'group-bureaucrat-member'    => 'Bürokrat',

'grouppage-autoconfirmed' => '{{ns:project}}:Bstetigti Benutzer',
'grouppage-bot'           => '{{ns:project}}:Bötli',
'grouppage-sysop'         => '{{ns:project}}:Ammanne',
'grouppage-bureaucrat'    => '{{ns:project}}:Bürokrate',

# User rights log
'rightslog'      => 'Benutzerrächt-Logbuech',
'rightslogtext'  => 'Des ischs Logbuech vun de Änderunge on Bnutzerrechte.',
'rightslogentry' => 'het d Benutzerrächt fir „[[$1]]“ vu „$2“ uf „$3“ gänderet',
'rightsnone'     => '(keini)',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|Änderig|Änderige}}',
'recentchanges'                     => 'Letschti Änderige',
'recentchangestext'                 => 'Uff däre Syte chönne Si die letschte Änderige in däm Wiki aaluege.',
'recentchanges-feed-description'    => 'Di letschten Änderige vo {{SITENAME}} i däm Feed abonniere.',
'rcnote'                            => "<div id=\"rc-legend\" style=\"float:right;font-size:84%;margin-left:5px;\">
<b>Legände</b><br />
<b><tt><font color=\"red\">!</font></tt></b>&nbsp;– unprüeffti Änderig<br /> 
<b><tt>N</tt></b>&nbsp;– nöuen Ytrag<br />
<b><tt>C</tt></b>&nbsp;– chlyni Änderig<br />
<b><tt>B</tt></b>&nbsp;– Bot-Änderig<br /> 
''(± Zahl)''&nbsp;– Größenänderig i Byte
</div>Azeigt {{PLURAL:\$1|wird '''1''' Änderig|wärde di letschte '''\$1''' Änderige}} {{PLURAL:\$2|vom letschte Tag|i de letschte '''\$2''' Täg}} (Stand: \$3)",
'rcnotefrom'                        => 'Des sin d Ändrige syter <b>$2</b> (bis zem <b>$1</b> zeigt).',
'rclistfrom'                        => '<small>Nöji Änderige ab $1 aazeige (UTC)</small>',
'rcshowhideminor'                   => 'Chlynigkeite $1',
'rcshowhidebots'                    => 'Bots $1',
'rcshowhideliu'                     => 'Aagmoldene Benützer $1',
'rcshowhideanons'                   => 'Nid aagmäldete Benutzer $1',
'rcshowhidepatr'                    => 'Vum Fäldhieter aagluegti Änderige $1',
'rcshowhidemine'                    => 'Eigeni Änderige $1',
'rclinks'                           => 'Zeig di letschte $1 Änderige vo de vergangene $2 Täg.<br />$3',
'diff'                              => 'Unterschid',
'hist'                              => 'Versione',
'hide'                              => 'usblände',
'show'                              => 'yblände',
'minoreditletter'                   => 'C',
'newpageletter'                     => 'N',
'boteditletter'                     => 'B',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|Benutzer, wu beobachtet|Benutzer, wu beobachte}}]',
'rc_categories'                     => 'Nume Syten us dr Kategorie (trennt mit „|“):',
'rc_categories_any'                 => 'Alli',
'newsectionsummary'                 => 'Neje Abschnitt /* $1 */',

# Recent changes linked
'recentchangeslinked'          => 'Verlinktes prüefe',
'recentchangeslinked-title'    => 'Änderigen a Sytene, wo „$1“ druf verlinkt',
'recentchangeslinked-noresult' => 'Kener Änderigen a verlinkte Sytenen im usgwählte Zytruum.',
'recentchangeslinked-summary'  => "Die Spezialsyte lischtet di letschte Änderige vu dr vergleichte Syten uf. Syten uf Dyynere Beobachtigslichst sin '''fett''' gschribe.",

# Upload
'upload'                      => 'Datei uffelade',
'uploadbtn'                   => 'Bild lokal ufelade',
'reupload'                    => 'Abbräche',
'reuploaddesc'                => 'Abbrächen un zrugg zue dr Syte "Uffelade"',
'uploadnologin'               => 'Nit aagmäldet',
'uploadnologintext'           => 'Si mien [[Special:UserLogin|aagmäldet syy]], zum Dateie uffelade z chenne.',
'upload_directory_read_only'  => 'Dr Netzserver het kei Schryybrächt fir s Upload-Verzeichnis ($1).',
'uploaderror'                 => 'Fähler bim Uffelade',
'uploadtext'                  => "Bruuch des Formular unte go Dateie uffelade. Zum aaluege oder frijer uffegladeni Bilder go sueche lueg uf dr [[Special:ImageList|Lischt vu uffegladene Dateie]], Uffeladige un Leschige sin au protokolliert uff [[Special:Log/upload|Uffeladigs-Logbuech]].

Go ne Datei oder e Bild in e Syte yyzbaue schryyb eifach ane:
* '''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:file.jpg]]</nowiki>'''
* '''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:file.png|alt text]]</nowiki>''' oder
* '''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:file.ogg]]</nowiki>'''
go diräkt e Gleich uf d Datei z mache.",
'upload-permitted'            => 'Dateitype, wu erlaubt sin: $1.',
'upload-preferred'            => 'Dateitype, wu bevorzugt sin: $1.',
'upload-prohibited'           => 'Dateitype, wu nit erlaubt sin: $1.',
'uploadlog'                   => 'Datei-Logbuech',
'uploadlogpage'               => 'Dateie-Logbuech',
'uploadlogpagetext'           => 'Des isch s Logbuech vu dr letschte Dateie, wu uffeglade wore sin.',
'filename'                    => 'Dateiname',
'filedesc'                    => 'Bschryybig',
'fileuploadsummary'           => 'Bschryybig/Quälle:',
'filestatus'                  => 'Urheberrächts-Status:',
'filesource'                  => 'Quälle:',
'uploadedfiles'               => 'Uffegladeni Dateie',
'ignorewarning'               => 'Warnig ignoriere un d Datei spychere',
'ignorewarnings'              => 'Warnige ignoriere',
'minlength1'                  => 'Dateinäme mien zmindescht e Buechstab lang syy.',
'illegalfilename'             => 'Im Dateiname „$1“ het s zmindescht ei Zeiche, wu nit erlaubt isch. Bitte gib dr Datei e andere Name un versuech nomol si uffezlade.',
'badfilename'                 => 'Dr Dateiname isch in „$1“ gänderet wore.',
'filetype-badmime'            => 'Dateie mit em MIME-Typ „$1“ derfe nit uffeglade wäre.',
'filetype-bad-ie-mime'        => 'Die Datei cha nit uffeglade wäre, wel dr Internet Explorer si as „$1“ kennt, wu e nit erlaubte, villicht gferlige Dateityp isch.',
'filetype-unwanted-type'      => "'''„.$1“''' isch as Dateiformat nit gwinscht. Erlaubt sin: $2.",
'filetype-banned-type'        => "'''„.$1“''' isch as Dateiformat nit erlaubt. Erlaubt sin: $2.",
'filetype-missing'            => 'D Datei, wu soll uffeglade wäre, het kei Erwyterig (z. B. „.jpg“).',
'large-file'                  => 'D Dateigressi sott, wänn s goht, nit gresser syy wie $1. Die Datei isch $2 gross.',
'largefileserver'             => 'Die Datei isch gresser wie die vum Server yygstellti Maximalgressi.',
'emptyfile'                   => 'Di uffeglade Datei isch schyyns läär. Dr Grund cha ne Tippfähler im Dateiname syy. Bitte iberprief, eb du die Datei wirkli wit uffelade.',
'fileexists'                  => "S git scho ne Datei mit däm Name. Wänn Du uf \"Datei spichere\" drucksch, no wird die Datei iberschribe. Bitte prief '''<tt>\$1</tt>''', wänn Der nit sicher bisch.",
'filepageexists'              => 'E Bschryybigssyte isch scho as <strong><tt>$1</tt></strong> aagleit wore, s git aber kei Datei mit däm Name. D Bschryybig, wu Du yygee hesch, wird nit uf die Bschryybigssyte ibernuh, doderzue muesch Du die Syte noch em Uffelade vu dr Datei no vu Hand bearbeite.',
'fileexists-extension'        => "S git scho ne Datei mit eme ähnlige Name:<br />
Name vu Datei, wu soll uffeglade were: '''<tt>$1</tt>'''<br />
Name vu dr Datei, wu s scho git: '''<tt>$2</tt>'''<br />
Nume d Dateiändig unterscheidet si in dr Gross-/Chleinschryybig. Bitte prief, eb die Datei vum Inhalt her identisch sin.",
'fileexists-thumb'            => "<center>'''Vorhandeni Datei'''</center>",
'fileexists-thumbnail-yes'    => "Die Datei isch schyyns e Bild mit ere verringerte Gressi ''(thumbnail)''. Bitte prief d Datei '''<tt>$1</tt>'''.<br />
Wänn s Bild in dr Originalgressi isch, no isch s nit netig, ass e extra Vorschaubild uffeglade wird.",
'file-thumbnail-no'           => "Dr Dateiname fangt mit '''<tt>$1</tt>''' aa. Des wyyst uf e Bild mit ere verringerte Gressi ''(thumbnail)'' hi.
Bitte prief, eb D s Bild in voller Uflesig vorlige hesch un lad derno des unter em Originalname uffe.",
'fileexists-forbidden'        => 'Unter däm Name git s scho ne Datei. Bitte gang zruck un lad die Datei unter eme andere Name uffe. [[Image:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Unter däm Name git s scho ne Datei im Zentrale Mediearchiv. Wänn Du die Datei einewäg wit uffelade, no gang bitte zruck un lad si unter eme andere Name uffe. [[Image:$1|thumb|center|$1]]',
'successfulupload'            => 'Erfolgryych uffegelade',
'uploadwarning'               => 'Warnig',
'savefile'                    => 'Datei spychere',
'uploadedimage'               => 'het „[[$1]]“ ufeglade',
'overwroteimage'              => 'het e neiji Version vu „[[$1]]“ uffeglade',
'uploaddisabled'              => 'Uffelade deaktiviert',
'uploaddisabledtext'          => 'S Uffelade vu Dateie isch deaktiviert.',
'uploadscripted'              => 'In däre Datei git s HTML- oder Scriptcode, wu fälschligerwyys vun eme Webbrowser usgfiert chennt were.',
'uploadcorrupt'               => 'Die Datei isch bschädigt oder het e falschi Datei-Erwyterig. Bitte iberprief d Datei un lad si no mol uffe.',
'uploadvirus'                 => 'In däre Datei het s e Virus! Detail: $1',
'sourcefilename'              => 'Quälldatei:',
'destfilename'                => 'Ziilname:',
'watchthisupload'             => 'Die Syte beobachte',
'filewasdeleted'              => 'E Datei mit däm Name isch scho mol uffeglade wore un isch in dr Zwischezyt wider glescht wore. Bitte prief zerscht dr Yytrag im $1, voreb Du die Datei wirkli spycheresch.',
'upload-wasdeleted'           => "'''Obacht: Du ladsch e Datei uffe, wu scho mol glescht woren isch.'''

Bitte prief, eb s dr Richtlinie entspricht, wänn Du die Datei no mol uffeladesch..
Zue Dyynere Information chunnt do s Lesch-Logbuech mit dr Begrindig fir di friejer Leschig:",
'filename-bad-prefix'         => "Dr Dateiname fangt mit '''„$1“''' aa. Des isch isch normalerwyys dr Dateiname, wu vun ere Digitalkamera vorgee wird un d Datei nit bschryybt.
Bitte gib dr Datei e Name, wu dr Inhalt besser bschryybt.",

'upload-proto-error'      => 'Falschs Protokoll',
'upload-proto-error-text' => 'D URL muess mit <code>http://</code> oder <code>ftp://</code> aafange.',
'upload-file-error'       => 'Interne Fähler',
'upload-file-error-text'  => 'Bim Aalege vun ere temporäre Datei uf em Server isch e interne Fähler uftrette.
Bitte informier e [[Special:ListUsers/sysop|Ammann]].',
'upload-misc-error'       => 'Nit bekannte Fähler bim Uffelade',
'upload-misc-error-text'  => 'Bim Uffelade isch e nit bekannte Fähler uftrette.
Prief d URL uf Fähler un dr Online-Status vu dr Syte un versuech s no mol.
Wänn s Problem alno uftritt, informier e [[Special:ListUsers/sysop|Ammann]].',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'URL isch nit z verwitsche',
'upload-curl-error6-text'  => 'D URL, wu aagee woren isch, isch nit z verwitsche. Prief d URL uf Fähler un dr Online-Status vu dr Syte.',
'upload-curl-error28'      => 'Zyt iberschritte bim Uffelade',
'upload-curl-error28-text' => 'D Syte brucht z lang fir e Antwort. Prief, eb d Syte online isch, wart e Rung un versuech s derno nomol. S cha au sinnvoll syy, s speter nomol z versueche.',

'license'            => 'Lizänz:',
'nolicense'          => 'kei Voruswahl',
'license-nopreview'  => '(s isch kei Vorschau verfiegbar)',
'upload_source_url'  => ' (giltige, effentli zuegänglig URL)',
'upload_source_file' => ' (e Datei uf Dyynem Computer)',

# Image list
'imagelist'                 => 'Lischte vo Bilder',
'imagelist-summary'         => 'Die Spezialsyte lischtet alli uffegladene Dateie uf. Standardmässig were di zletscht uffegladene Dateie zerscht aazeigt. Dur e Klick uf d Spalte-Iberschrifte cha d Sortierig umdrillt were oder s cha noch ere andere Spalte sortiert were.',
'imagelisttext'             => "Hie isch e Lischte vo '''$1''' {{PLURAL:$1|Datei|Dateie}}, sortiert $2.",
'getimagelist'              => 'Lade Bilderliste',
'ilsubmit'                  => 'Suech',
'showlast'                  => 'Zeige die letzten $1 Bilder, sortiert nach $2.',
'byname'                    => 'noch em Name',
'bydate'                    => 'noch Datum',
'bysize'                    => 'noch dr Greßi',
'imgdelete'                 => 'Lesche',
'imgdesc'                   => 'Bschryybig',
'imgfile'                   => 'Datei',
'filehist'                  => 'Dateiversione',
'filehist-help'             => 'Klick uf e Zytpunkt zu aazeige, wie s dert usgsäh het.',
'filehist-deleteall'        => 'Alli Versione lesche',
'filehist-deleteone'        => 'Die Version lesche',
'filehist-revert'           => 'zrucksetze',
'filehist-current'          => 'aktuell',
'filehist-datetime'         => 'Version vom',
'filehist-user'             => 'Benutzer',
'filehist-dimensions'       => 'Mäß',
'filehist-filesize'         => 'Dateigrößi',
'filehist-comment'          => 'Kommentar',
'imagelinks'                => 'Dateigleicher',
'linkstoimage'              => 'Di folgende Sytene händ en Link zu dem Bildli:',
'nolinkstoimage'            => 'Kei Artikel verwändet des Bild.',
'sharedupload'              => 'Die Datei wird vu verschidene Projekt brucht.',
'shareduploadwiki'          => 'Fir wyteri Informatione lueg d $1.',
'shareduploadwiki-desc'     => 'Do chunnt dr Bschryybig vum $1.',
'shareduploadwiki-linktext' => 'Datei-Bschryybigssyte',
'noimage'                   => 'Es git kei Datei mit däm Name, aber du chasch se $1.',
'noimage-linktext'          => 'ufelade',
'uploadnewversion-linktext' => 'E nöui Version vo dere Datei ufelade',
'imagelist_date'            => 'Datum',
'imagelist_name'            => 'Name',
'imagelist_user'            => 'Benutzer',
'imagelist_size'            => 'Gressi',
'imagelist_description'     => 'Bschryybig',
'imagelist_search_for'      => 'Suech noch Datei:',

# File reversion
'filerevert'                => 'Zrucksetze vu „$1“',
'filerevert-legend'         => 'Datei zrucksetze',
'filerevert-intro'          => "Du setzesch d Datei '''[[Media:$1|$1]]''' uf d [$4 Version vum $2, $3 Uhr] zruck.",
'filerevert-comment'        => 'Grund:',
'filerevert-defaultcomment' => 'Zruckgsetzt uf d Version vum $1, $2 Uhr',
'filerevert-submit'         => 'Zrucksetze',
'filerevert-success'        => "'''[[Media:$1|$1]]''' isch uf d [$4 Version vum $2, $3 Uhr] zruckgsetzt wore.",
'filerevert-badversion'     => 'S git kei Version vu dr Datei zum Zytpunkt, wu aagee woren isch.',

# File deletion
'filedelete'                  => 'Lesch „$1“',
'filedelete-legend'           => 'Lesch d Datei',
'filedelete-intro'            => "Du leschesch d Datei '''„[[Media:$1|$1]]“''' mit dr Versionsgschicht.",
'filedelete-intro-old'        => "Du leschesch vu dr Datei '''„[[Media:$1|$1]]“''' d [$4 Version vum $2, $3 Uhr].",
'filedelete-comment'          => 'Grund:',
'filedelete-submit'           => 'Lesche',
'filedelete-success'          => "'''„$1“''' isch glescht wore.",
'filedelete-success-old'      => "Vu dr Datei '''„[[Media:$1|$1]]“''' isch d Version vum $2, $3 Uhr glescht wore.",
'filedelete-nofile'           => "'''„$1“''' isch nit vorhande.",
'filedelete-nofile-old'       => "S git vu '''„$1“''' kei archivierti Version mit Attribut, wu aagee sin.",
'filedelete-iscurrent'        => 'Du versuechsch d nöischti Version vo dere Syte z lösche. Bitte setz d Syte zerscht uf e ältri Version zrugg.',
'filedelete-otherreason'      => 'Andere/zuesätzlige Grund:',
'filedelete-reason-otherlist' => 'Andere Grund',
'filedelete-reason-dropdown'  => '* Allgmeini Leschgrind
** Urheberrächtsverletzig
** Duplikat',

# MIME search
'mimesearch'         => 'MIME-Suechi',
'mimesearch-summary' => 'Uf däre Spezialsyte chenne d Dateie noch em MIME-Typ gfilteret wäre. In dr Yygob muess es alliwyl dr Medie- un Subtyp din haa: <tt>image/jpeg</tt> (lueg Bildbschryybigssyte).',
'mimetype'           => 'MIME-Typ:',
'download'           => 'Abelade',

# Unwatched pages
'unwatchedpages' => 'Unbeobachteti Sytene',

# List redirects
'listredirects' => 'Lischte vo Wyterleitige (Redirects)',

# Unused templates
'unusedtemplates'     => 'Nid bruuchti Vorlage',
'unusedtemplatestext' => 'Die Syte lischtet alli Syten im {{ns:template}}-Namensruum uf, wu nit in andere Syte yybunden sin.
Iberprief anderi Gleicher zue dr Vorlage, voreb Du die leschesch.',
'unusedtemplateswlh'  => 'Anderi Gleicher',

# Random page
'randompage'         => 'Zuefalls-Artikel',
'randompage-nopages' => 'In däm Namensruum sin kei Syte vorhande.',

# Random redirect
'randomredirect'         => 'Zuefälligi Wyterleitig',
'randomredirect-nopages' => 'In däm Namensruum sin kei Wyterleitige vorhande.',

# Statistics
'statistics'             => 'Statistik',
'sitestats'              => 'Statistik',
'userstats'              => 'Benützer-Statistik',
'sitestatstext'          => "Zuer Ziit git's '''$2''' Artikel in {{SITENAME}}.

Insgsamt sin '''$1''' Syte in de Datebank. Des sin au alli Sytene, wo usserhalb vom Hauptnamensruum exischtiere, (z.B. Diskussionssyte) oder wo keini interne Gleicher hen oder wo au numme Witerleitige sin.

Insgesamt sin '''$8''' Dateieuffeglade wore.

Insgsamt het s '''$3''' {{PLURAL:$3|Syteabruef|Syteabruef}} gää, '''$4''' mol isch öbbis gänderet worde un drmit jedi Syte im Durchschnitt '''$5''' mol und '''$6''' Syteabruef pro Bearbeitig.

Es het '''$8''' Dateie, wo uffeglade wore sin.

Längi vo de [http://www.mediawiki.org/wiki/Manual:Job_queue „Job queue“]: '''$7'''",
'userstatstext'          => "S git {{PLURAL:$1|'''1''' regischtrierte [[Special:Listusers|Benutzer]]|'''$1''' regischtrierti [[Special:Listusers|Benutzer]]}}. Dodervu {{PLURAL:$2|het|hän}} '''$2''' ('''$4%''') $5-Rächt.",
'statistics-mostpopular' => 'Am meischte aagluegti Syte',

'disambiguations'      => 'Begriffsklärigssytene',
'disambiguationspage'  => 'Template:Begriffsklärig',
'disambiguations-text' => 'Die Syte vergleiche uf e Begriffsklärigs-Syte. Sie sotte aber besser uf d Syte vergleiche, wu eigetli gmeint sin.<br />E Syte wird as Begriffsklärigs-Syte behandlet, wänn [[MediaWiki:Disambiguationspage]] uf si vergleicht.<br />Gleicher us Namensryym wäre do nit ufglischtet.',

'doubleredirects'     => 'Doppleti Wyterleitige (Redirects)',
'doubleredirectstext' => 'Die Lischt zeigt Wyterleitige, wu uf anderi Wyterleitige vergleiche.
In jedere Zyylete het s Gleicher zue dr erschte un dr zwote Wyterleitig un s Ziil vu dr zwote Wyterleitig, wu normalerwys di gwinscht Ziilsyten isch. Do sott eigetli scho di erscht Wyterleitig druf zeige.',

'brokenredirects'        => 'Kaputti Wyterleitige',
'brokenredirectstext'    => 'Die Spezialsyte lischtet Wyterleitige uf, wu zue Artikel fiere, wu s gar nid git:',
'brokenredirects-edit'   => '(bearbeite)',
'brokenredirects-delete' => '(lesche)',

'withoutinterwiki'         => 'Sytenen ohni Links zu andere Sprache',
'withoutinterwiki-header'  => 'Die Syte vergleiche nit uf anderi Sprochversione.',
'withoutinterwiki-summary' => 'Die Syte vergleiche nit uf anderi Sprochversione.',
'withoutinterwiki-submit'  => 'Zeig',

'fewestrevisions' => 'Syte mit de wenigschte Bearbeitige',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|Byte|Bytes}}',
'ncategories'             => '$1 {{PLURAL:$1|Kategori|Kategorie}}',
'nlinks'                  => '$1 {{PLURAL:$1|Gleich|Gleicher}}',
'nmembers'                => '$1 {{PLURAL:$1|Syte|Sytene}}',
'nrevisions'              => '$1 {{PLURAL:$1|Revision|Revisione}}',
'nviews'                  => '$1 {{PLURAL:$1|Betrachtig|Betrachtige}}',
'specialpage-empty'       => 'In dr Syte het s no kei aktuälli Yytreg.',
'lonelypages'             => 'Verwaisti Sytene',
'lonelypagestext'         => 'Die Syte wäre nit yybunde oder s wird nit uf si verwiise in {{SITENAME}}.',
'uncategorizedpages'      => 'Nit kategorisierte Sytene',
'uncategorizedcategories' => 'Nit kategorisierte Kategorie',
'uncategorizedimages'     => 'Nid kategorisierti Dateie',
'uncategorizedtemplates'  => 'Nid kategorisierti Vorlage',
'unusedcategories'        => 'Nid bruuchti Kategorië',
'unusedimages'            => 'Verwaiste Bilder',
'popularpages'            => 'Beliebti Artikel',
'wantedcategories'        => 'Bruuchti Kategorie, wo s no nid git',
'wantedpages'             => 'Artikel, wo fähle',
'mostlinked'              => 'Syte, wo am meischte vergleicht sin',
'mostlinkedcategories'    => 'Am meischte verlinkti Kategorië',
'mostlinkedtemplates'     => 'Am meischten yybouti Vorlage',
'mostcategories'          => 'Sytene mit de meischte Kategorië',
'mostimages'              => 'Am meischte verlinkti Dateie',
'mostrevisions'           => 'Syte mit de meischte Bearbeitige',
'allpages'                => 'alli Sytene',
'prefixindex'             => 'Alli Syte (mit Präfix)',
'shortpages'              => 'Churzi Artikel',
'longpages'               => 'Langi Artikel',
'deadendpages'            => 'Artikel ohni Links («Sackgasse»)',
'deadendpagestext'        => 'Die Syte sin nit zue anderi Syte in {{SITENAME}} vergleicht.',
'protectedpages'          => 'Gschützti Sytene',
'protectedpagestext'      => 'Die Spezialsyte zeigt alli vor em Verschiebe oder Bearbeite gschitzti Syte.',
'protectedpagesempty'     => 'Aktuäll sin kei Syte mit däne Parameter gschitzt.',
'protectedtitles'         => 'Gsperrti Titel',
'protectedtitlestext'     => 'Die Titel sin gsperrt fir s Neijaalege',
'protectedtitlesempty'    => 'Im Momänt sin kei Syte fir s Nejaalege gsperrt mit däne Parameter.',
'listusers'               => 'Lischte vo Benutzer',
'specialpages'            => 'Spezialsytene',
'spheading'               => 'Spezial-Sytene für alli Benützer',
'restrictedpheading'      => 'Spezialsyte fir Benutzer mit erwyterete Rächt',
'newpages'                => 'Nöji Artikel',
'newpages-username'       => 'Benutzername:',
'ancientpages'            => 'alti Sytene',
'intl'                    => 'Gleicher zue andere Sproche',
'move'                    => 'Verschiebe',
'movethispage'            => 'Artikel verschiebe',
'unusedimagestext'        => 'Bitte gib Acht, ass anderi Netzsyte die Datei mit ere diräkte URL chenne vergleiche. Des wird nit as Verwändig erkannt. Wäge däm wird d Datei do ufgfiert.',
'unusedcategoriestext'    => 'Die Spezialsyte zeigt alli lääre Kategorie, d. h. si wäre nit brucht vu andre Syte oder Kategorie.',
'notargettitle'           => 'Kei Syte aagee',
'notargettext'            => 'Du hesch nit aagee, uf weli Syte die Funktion soll druf aagwändet wäre.',
'pager-newer-n'           => '{{PLURAL:$1|nächschte|nächschte $1}}',
'pager-older-n'           => '{{PLURAL:$1|vorige|vorige $1}}',

# Book sources
'booksources'               => 'ISBN-Suech',
'booksources-search-legend' => 'Suech no Bezugsquälle fir Biecher',
'booksources-go'            => 'Sueche',
'booksources-text'          => 'Des isch e Lischt mit Gleicher zue Netzsyte, wu neiji un bruchti Biecher verchaufe. S cha syy, ass es dert au meh Informatione zue dr Biecher git. {{SITENAME}} isch mit keinem vu däne Aabieter gschäftli verbunde.',

'categoriespagetext' => 'In däne Kategorie het s Syte oder Dateie.
[[Special:UnusedCategories|Nit benutzte Kategorie]] wäre do nit ufgfiert.
Lueg au d Lischt vu dr [[Special:WantedCategories|gwinschte Kategorie]].',
'data'               => 'Date',
'userrights'         => 'Benutzerrächtsverwaltig',
'groups'             => 'Benutzergruppe',
'alphaindexline'     => 'vo $1 bis $2',
'version'            => 'Version',

# Special:Log
'specialloguserlabel'  => 'Benutzer:',
'speciallogtitlelabel' => 'Titel:',
'log'                  => 'Logbüecher',
'all-logs-page'        => 'Alli Logbüecher',
'log-search-legend'    => 'Logbüecher durchsueche',
'log-search-submit'    => 'Sueche',
'alllogstext'          => 'Kombinierti Aasicht vu alle in {{SITENAME}} gfierte Protokoll.
D Aazeig cha dur d Uuswahl vun eme Protokoll, eme Benutzername oder eme Sytename yygschränkt wäre (Acht gee uf d Gross- un Chleischrybig).',
'logempty'             => 'Kei Yyträg gfunde, wu passe.',
'log-title-wildcard'   => 'Titel fangt aa mit',

# Special:Allpages
'nextpage'          => 'Nächscht Syte ($1)',
'prevpage'          => 'Vorderi Syte ($1)',
'allpagesfrom'      => 'Syte aazeige vo:',
'allarticles'       => 'alli Artikel',
'allinnamespace'    => 'alli Sytene im Namensruum $1',
'allnotinnamespace' => 'alli Sytene, wo nit im $1 Namensruum sin',
'allpagesprev'      => 'Füehrigs',
'allpagesnext'      => 'nächschts',
'allpagessubmit'    => 'gang',
'allpagesprefix'    => 'Alli Sytene mit em Präfix:',
'allpagesbadtitle'  => 'Dr Sytename, wu yygee hesch, isch nit giltig: Er het entwäder e vorgstellt Sproch-, e Interwiki-Chirzel oder s het ei oder meh Zeiche din, wu in eme Sytename nit derfe brucht wäre.',
'allpages-bad-ns'   => 'Dr Namensruum „$1“ isch in {{SITENAME}} nit vorhande.',

# Special:Listusers
'listusersfrom'      => 'Zeig Benutzer ab:',
'listusers-submit'   => 'Zeig',
'listusers-noresult' => 'Kei Benutzer gfunde.',

# E-mail user
'mailnologin'     => 'Du bisch nid aagmäldet oder hesch keis Mail aaggä',
'mailnologintext' => 'Du muesch [[Special:UserLogin|aagmäldet syy]] un e bstätigti E-Mail-Adräss in Dyyne [[Special:Preferences|Yystellige]] aagee ha, fir dass epper anderem es E-Mail chasch schicke.',
'emailuser'       => 'Es Mail schrybe',
'emailpage'       => 'E-Mail an Benutzer',
'emailpagetext'   => 'Du chasch im Benutzer mit däm Formular e E-Mail schicke.
As Absender wird d E-Mail-Adräss us Dyyne [[Special:Preferences|Yystellige]] yytrait, ass dr Benutzer Dir cha Antwort gee.',
'usermailererror' => 'S Mail-Objekt het e Fähler zruckgee:',
'defemailsubject' => '{{SITENAME}}-E-Mail',
'noemailtitle'    => 'Kei e-Mail-Adrässe',
'noemailtext'     => 'Dää Benutzer het kei bstätigti E-Mail-Adräss aagee oder wet kei E-Mail vo andere Benutzer.',
'emailfrom'       => 'Vu:',
'emailto'         => 'An:',
'emailsubject'    => 'Betreff:',
'emailmessage'    => 'Nochricht:',
'emailsend'       => 'Abschicke',
'emailccme'       => 'Schick e Kopii vu dr E-Mail a mii',
'emailccsubject'  => 'Kopii vu Dyynere Nochricht an $1: $2',
'emailsent'       => 'E-Mail furtgschickt',
'emailsenttext'   => 'Dys E-Mail isch verschickt worde.',

# Watchlist
'watchlist'            => 'Beobachtigslischte',
'mywatchlist'          => 'Beobachtigslischte',
'watchlistfor'         => "(für '''$1''')",
'nowatchlist'          => 'Du hesch ke Yträg uf dyre Beobachtigslischte.',
'watchlistanontext'    => 'Du muesch Di $1 go Dyyni Beobachtungslischt z säh oder go Yytreg uf ere bearbeite.',
'watchnologin'         => 'Du bisch nit aagmäldet',
'watchnologintext'     => 'Du muesch [[Special:UserLogin|aagmäldet]] syy, zum Dyyni Beobachtigssyte z bearbeite.',
'addedwatch'           => 'zue de Beobachtigslischte drzue do',
'addedwatchtext'       => 'D Syte "[[:$1]]" stoht jetz uf Ihre [[Special:Watchlist|Beobachtigslischte]].
Neui Änderige an de Syte odr de Diskussionssyte drvo chasch jetz dört seh. Usserdem sin selli Änderige uf de [[Special:RecentChanges|letschte Änderige]] fett gschriibe, dass Si s schneller finde.

Wenn Si d Syte spöter wiedr vo de Lischte striiche wenn, denn drucke Si eifach uf "nümm beobachte".',
'removedwatch'         => 'Us der Beobachtigsliste glösche',
'removedwatchtext'     => 'D Syte «[[:$1]]» isch us dyre [[Special:Watchlist|Beobachtigsliste]] glösche worde.',
'watch'                => 'Beobachte',
'watchthispage'        => 'Die Syte beobachte',
'unwatch'              => 'nümm beobachte',
'unwatchthispage'      => 'Nimmi beobachte',
'notanarticle'         => 'Kei Syte',
'watchnochange'        => 'Vo den Artikle, wo du beobachtisch, isch im aazeigte Zytruum kene veränderet worde.',
'watchlist-details'    => '{{PLURAL:$1|1 Syte wird|$1 Sytene wärde}} beobachtet (Diskussionssyte nid zelt, aber ou beobachtet).',
'wlheader-enotif'      => '* Dr E-Mail-Benochrichtigungsdienscht isch aktiviert.',
'wlheader-showupdated' => "* Syte mit Anderige, wu no nit aagluegt sin, sin '''fett''' dargstellt.",
'watchmethod-recent'   => 'Iberpriefe vu dr letschte Bearbeitige fir d Beobachtigslischt',
'watchmethod-list'     => 'Iberpriefe vu dr Beobachtigslischt no letschte Bearbeitige',
'watchlistcontains'    => 'In Dyynere Beobachtigslischt het s $1 {{PLURAL:$1|Syte|Syte}}.',
'iteminvalidname'      => 'Probläm mit em Yytrag „$1“, uugiltige Name.',
'wlnote'               => "Do {{PLURAL:$1|chunnt di letscht Änderig|chemme di letschte '''$1''' Änderige}} vu dr letschte {{PLURAL:$2|Stund|'''$2''' Stunde}}.",
'wlshowlast'           => 'Zeig di letschte $1 Stunde $2 Tage $3',
'watchlist-show-bots'  => 'Ändrige vo Bots yblände',
'watchlist-hide-bots'  => 'Bot-Änderige verstecke',
'watchlist-show-own'   => 'Myni eigni Ändrige yblände',
'watchlist-hide-own'   => 'Eigeti Änderige verstecke',
'watchlist-show-minor' => 'Chlyni Ändrige yblände',
'watchlist-hide-minor' => 'Chlyni Änderige verstecke',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Am beobachte …',
'unwatching' => 'Nümm am beobachten …',

'enotif_mailer'                => '{{SITENAME}} E-Mail-Benochrichtigungsdienscht',
'enotif_reset'                 => 'Alli Syte as aagluegt markiere',
'enotif_newpagetext'           => 'Des isch e neiji Syte.',
'enotif_impersonal_salutation' => '{{SITENAME}}-Benutzer',
'changed'                      => 'gänderet',
'created'                      => 'aagleit',
'enotif_subject'               => 'D {{SITENAME}} Syte $PAGETITLE isch vum $PAGEEDITOR $CHANGEDORCREATED wore.',
'enotif_lastvisited'           => '$1 zeigt alli Änderige uf s Mol.',
'enotif_lastdiff'              => 'Lueg $1 no däre Änderig.',
'enotif_anon_editor'           => 'Anonyme Benutzer $1',
'enotif_body'                  => 'Liebe/r $WATCHINGUSERNAME,

d {{SITENAME}} Syte $PAGETITLE isch vom $PAGEEDITOR am $PAGEEDITDATE $CHANGEDORCREATED,
di aktuelli Version isch: $PAGETITLE_URL

$NEWPAGE

Zämmenfassig vom Autor: $PAGESUMMARY $PAGEMINOREDIT
Kontakt zuem Autor:
Mail $PAGEEDITOR_EMAIL
Wiki $PAGEEDITOR_WIKI

Es wird kei wiiteri Benochrichtigungsposcht gschickt bis Si selli Syte wider bsueche. Uf de Beobachtigssyte chönne Si d Beobachtigsmarker zrucksetze.

             Ihr fründlichs {{SITENAME}} Benochrichtigssyschtem

---
Ihri Beobachtigslischte {{fullurl:Special:Watchlist/edit}}
Hilf zue de Benutzig gits uff {{fullurl:{{MediaWiki:Helppage}}}}',

# Delete/protect/revert
'deletepage'                  => 'Syte lösche',
'confirm'                     => 'Bstätige',
'excontent'                   => "Alter Inhalt: '$1'",
'excontentauthor'             => "einzige Inhalt: '$1' (bearbeitet worde nume dür '$2')",
'exbeforeblank'               => "Inhalt voreb d Syte gläärt woren isch: '$1'",
'exblank'                     => 'Syte isch läär gsi',
'delete-confirm'              => '„$1“ lesche',
'delete-legend'               => 'Lesche',
'historywarning'              => '<span style="color:#ff0000">OBACHT:</span> Die Syte, wu Du wit lesche, het e Versionsgschicht:',
'confirmdeletetext'           => 'Du bisch dra, e Artikel oder e Bild mitsamt dr Versionsgschicht fir immer us der Datebank z lesche.
Bitte bi Dir iber d Konsequänze bewusst, un bi sicher, dass Du Di an unsri [[{{MediaWiki:Policy-url}}|Leitlinie]] haltsch.',
'actioncomplete'              => 'Uftrag usgfiert.',
'deletedtext'                 => '«<nowiki>$1</nowiki>» isch glescht wore.
Im $2 het s e Lischt vu dr letschte Leschige.',
'deletedarticle'              => 'het „[[$1]]“ glescht',
'dellogpage'                  => 'Lösch-Logbuech',
'dellogpagetext'              => 'Des isch s Logbuech vu dr gleschte Syte un Dateie.',
'deletionlog'                 => 'Lösch-Logbuech',
'reverted'                    => 'Uf e alti Version zruckgsetzt',
'deletecomment'               => 'Löschigsgrund',
'deleteotherreason'           => 'Andere/zuesätzleche Grund:',
'deletereasonotherlist'       => 'Andere Grund',
'deletereason-dropdown'       => '* Allgmeini Leschgrind
** Wunsch vum Autor
** Urheberrächtsverletzig
** Vandalismus',
'delete-toobig'               => 'Die Syte het mit meh as $1 Versione  e arg langi Versionsgschicht. S Lesche vu sonige Syte isch yygschränkt wore go verhindere, ass dr {{SITENAME}}-Server us Versäh iberlaschtet wird.',
'delete-warning-toobig'       => 'Die Syte het mit meh as $1 Versione  e arg langi Versionsgschicht. S Lesche cha dr Betriib vu dr {{SITENAME}}-Datenbank stere.',
'rollback'                    => 'Zrucksetze vu dr Änderige',
'rollback_short'              => 'Zrucksetze',
'rollbacklink'                => 'Zrüggsetze',
'rollbackfailed'              => 'S Zrucksetze het nit funktioniert',
'cantrollback'                => 'D Änderig cha nit zruckgsetzt wäre, wel s keini friejere Autore git.',
'alreadyrolled'               => 'Cha d Änderig uf [[:$1]] wo [[User:$2|$2]] ([[User talk:$2|Talk]]) gmacht het nit zruckneh will des öbber anderscht scho gmacht het.

Di letschti Änderig het [[User:$3|$3]] ([[User talk:$3|Talk]]) gmacht.',
'editcomment'                 => "D Änderigszämmefassig isch: „''$1''“.", # only shown if there is an edit comment
'revertpage'                  => 'Ruckgängig gmacht zue dr letschte Änderig vo [[Special:Contributions/$2|$2]] ([[User talk:$2|Diskussion]]) mit de letzte Version vo [[User:$1|$1]] widerhergstellt', # Additional available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success'            => 'D Änderige vu $1 sin ruckgängig gmacht wore un di letscht Version vu $2 isch widerhärgstellt wore.',
'sessionfailure'              => 'S het e Probläm mit em Ibertrage vu Dyyne Benutzerdate gee.
Die Aktion isch wäge däm us Sicherheitsgrind abbroche wore go ne falschi Zueornig vu Dyyne Änderige zuen eme andere Benutzer verhindere.
Bitte gang zruck, tue d Syte nej lade un versuech s nomol.',
'protectlogpage'              => 'Syteschutz-Logbuech',
'protectlogtext'              => 'Des isch e Lischt vu dr blockierte Syte. Lueg [[Special:ProtectedPages|Gschitzti Syte]] fir meh Informatione.',
'protectedarticle'            => 'het „[[$1]]“ gschitzt',
'modifiedarticleprotection'   => 'het dr Schutz vu „[[$1]]“ gänderet',
'unprotectedarticle'          => 'het dr Schutz vu „[[$1]]“ ufghebt',
'protectsub'                  => '(Schutz vu „$1“ ändere)',
'confirmprotect'              => 'Syteschutzstatus ändere',
'protectcomment'              => 'Grund vu dr Sperrig',
'protectexpiry'               => 'Gsperrt bis:',
'protect_expiry_invalid'      => 'Di gwählti Duur isch nid gültig.',
'protect_expiry_old'          => 'Di gwählti Duur isch scho vergange.',
'unprotectsub'                => '(Sperri vu „$1“ ufhebe)',
'protect-unchain'             => 'Verschiebschutz ändere',
'protect-text'                => "Hie chasch der Schutzstatus vor Syte '''<nowiki>$1</nowiki>''' azeigen und ändere.",
'protect-locked-blocked'      => "Du chasch dr Syteschutz nit ändere, wel Dyy Benutzerkonto gsperrt isch. Do sin di aktuälle Syteschutz-Yystellige fir d Syte '''„$1“:'''",
'protect-locked-dblock'       => "D Datebank isch gsperrt, dr Syteschutz cha wäge däm nit gänderet wäre. Doo sin di aktuälle Syteschutz-Yystellige fir d Syte '''„$1“:'''",
'protect-locked-access'       => "Dys Konto het nid di nötige Rächt, für der Schutzstatus z ändere.
Hie sy di aktuelle Schutzystellige vor Syte '''$1''':",
'protect-cascadeon'           => 'Die Syten isch gschützt, wil si {{PLURAL:$1|zur folgende Syte|zu de folgende Syte}} ghört, wo derfür e Kaskadesperrig gilt.
Der Schutzstatus vo dere Syte lat sech la ändere, aber das het kei Yfluss uf d Kaskadesperrig.',
'protect-default'             => 'Alle Benutzer',
'protect-fallback'            => '«$1»-Berächtigung nötig',
'protect-level-autoconfirmed' => 'Neji un nit regischtrierti Benutzer sperre',
'protect-level-sysop'         => 'Nur Adminischtratore',
'protect-summary-cascade'     => 'Kaskade',
'protect-expiring'            => 'bis $1 (UTC)',
'protect-cascade'             => 'Kaskadesperrig – alli yybundnige Vorlage sy mitgsperrt.',
'protect-cantedit'            => 'Du chasch der Schutzstatus vo dere Syte nid ändere, wil du kener Berächtigunge hesch, für se z bearbeite.',
'restriction-type'            => 'Schutzstatus',
'restriction-level'           => 'Schutzhöchi:',
'minimum-size'                => 'Mindeschtgressi',
'maximum-size'                => 'Maximalgressi:',
'pagesize'                    => '(Bytes)',

# Restrictions (nouns)
'restriction-edit'   => 'Bearbeite',
'restriction-move'   => 'Verschiebe',
'restriction-create' => 'Aalege',

# Restriction levels
'restriction-level-sysop'         => 'gschitzt (nume Ammanne)',
'restriction-level-autoconfirmed' => 'gschitzt (nume aagmäldeti Benutzer, wu nit nej sin)',
'restriction-level-all'           => 'alli',

# Undelete
'undelete'                     => 'Gleschti Syte widerhärstelle',
'undeletepage'                 => 'Gleschti Syte widerhärstelle',
'viewdeletedpage'              => 'Gleschti Syte aazeige',
'undeletepagetext'             => 'Die Syte sin glescht wore. Si sin aber no im Archiv vorgande un chenne vu Ammanne widerhärgstellt wäre. S cha syy, ass dr Inhalt vum Archiv als glescht wird.',
'undeleteextrahelp'            => '* Go d Syte ganz mit allene Versione widerhärzstelle, wehl kei Version us, gib e Begrindig aa un druck uf „Widerhärstelle“.
* Mechtsch nume bstimmti Versione widerhärstelle, no wehl die bitte einzeln no dr Markierige us, gib e Begrindig aa un druck derno uf „Widerhärstelle“..
* „Abbräche“ läärt s Kommentarfäld un nimmt alli Markierige bi dr Versione use.',
'undeleterevisions'            => '{{PLURAL:$1|1 Version|$1 Versione}} archiviert',
'undeletehistory'              => 'Wänn Du die Syte widerhärstellsch, wäre au alli alte Versione widerhärgstellt.
Wänn syt dr Leschig e neiji Syte mit em glyche Name aagleit woren isch, no wäre di widerhärgstellte Versione chronologisch in d Versionsgschicht yygordnet.',
'undeleterevdel'               => 'D Widerhärstellig wird nit usgfiert, wänn di neijscht Version versteckt isch oder s versteckti Teil din het.
In däm Fall derf di neijscht Version nit markiert wäre oder dr Status vun ere muess uf "normal" gänderet wäre.
Versione vu Dateie, wu Du kei Zuegriff druf hesch, wäre nit widerhärgstellt.',
'undeletehistorynoadmin'       => 'Dä Artikel isch glescht wore. Dr Grund fir d Leschig isch in dr Zämmefassig aagee, derzue au Aagaabe zum letschte Benutzer, wu dä Artikel bearbeitet het vor dr Leschig. Dr aktuäll Täxt vum gleschte Artikel isch nume zuegängli fir Ammanne.',
'undelete-revision'            => 'Gleschti Version vu $1 (vum $2), dur $3:',
'undeleterevision-missing'     => 'Version isch nit giltig oder fählt. Entwäder isch s Gleich falsch oder d Version isch us em Archiv widerhärgstellt oder usegnuh wore.',
'undelete-nodiff'              => 'Kei vorigi Version vorhande.',
'undeletebtn'                  => 'Widerhärstelle',
'undeletelink'                 => 'aaluege/widerhärstelle',
'undeletereset'                => 'Abbräche',
'undeletecomment'              => 'Begrindig:',
'undeletedarticle'             => 'hät d Site „[[$1]]“ widderhergstellt',
'undeletedrevisions'           => '{{PLURAL:$1|ei Revision|$1 Revisione}} wider zruckgholt.',
'undeletedrevisions-files'     => '{{PLURAL:$1|1 Version|$1 Versione}} un {{PLURAL:$2|1 Datei|$2 Dateie}} sin widerhärgstellt wore',
'undeletedfiles'               => '{{PLURAL:$1|1 Datei isch|$1 Dateie sin}} widerhärgstellt wore',
'cannotundelete'               => 'Widerhärstellig isch nit gange; eber ander het villicht d Syte scho widerhärgstellt.',
'undeletedpage'                => "'''„$1“''' isch widerhärgstellt wore.

Im [[Special:Log/delete|Lesch-Logbuech]] findsch e Ibersicht vu dr gleschte un widerhärgstellte Syte.",
'undelete-header'              => 'Lueg im [[Special:Log/delete|Lesch-Logbuech]] no Syte, wu in dr letschte Zyt glescht wore sin.',
'undelete-search-box'          => 'Suech no gleschte Syte',
'undelete-search-prefix'       => 'Zeig d Syte aa, wu aafange mit:',
'undelete-search-submit'       => 'Sueche',
'undelete-no-results'          => 'Im Archiv isch kei Syte gfunde wore, wu zum Suechbegriff passt.',
'undelete-filename-mismatch'   => 'D Dateiversion mit em Zytstämpfel $1 het nit chenne widerhärgstellt wäre: D Dateinäme passe nit zuenand.',
'undelete-bad-store-key'       => 'D Dateiversion mit em Zytstämpfel $1 het nit chenne widerhärgstellt wäre: D Datei isch scho vor em Lesche nimmi vorhande gsi.',
'undelete-cleanup-error'       => 'Fähler bim Lesche vu dr nit benutzte Archiv-Version $1.',
'undelete-missing-filearchive' => 'D Datei mit dr Archiv-ID $1 cha nit widerhärgstellt wäre, wel si nit in dr Datebank vorhanden isch. Villicht isch si scho widerhärgstellt wore.',
'undelete-error-short'         => 'Fähler bim Widerhärstelle vu dr Datei $1',
'undelete-error-long'          => 'S sin Fähler bim Widerhärstelle vun ere Datei feschtgstellt wore:

$1',
'undelete-show-file-confirm'   => 'Bisch sicher, ass Du e gleschti Version vu dr Datei „<nowiki>$1</nowiki>“ vum $2, $3 Uhr wit aaluege?',
'undelete-show-file-submit'    => 'Jo',

# Namespace form on various pages
'namespace'      => 'Namensruum:',
'invert'         => 'Uswahl umkehre',
'blanknamespace' => '(Haupt-)',

# Contributions
'contributions' => 'Benutzer-Byträg',
'mycontris'     => 'Myyni Byyträg',
'contribsub2'   => 'Für $1 ($2)',
'nocontribs'    => 'S sin keini Benutzerbyytreg mit däne Kriterie gfunde wore.',
'ucnote'        => 'Des sin di letschte <b>$1</b> Byyträg vum Benutzer in dr letschte <b>$2</b> Täg.',
'uclinks'       => 'Zeig di letschte $1 Byyträg; zeig di letschte $2 Täg.',
'uctop'         => '(aktuell)',
'month'         => 'u Monet:',
'year'          => 'bis Jahr:',

'sp-contributions-newbies'     => 'Zeig nume Biträg vo neie Benutzer',
'sp-contributions-newbies-sub' => 'vo nöji Benützer',
'sp-contributions-blocklog'    => 'Sperrlogbuech',
'sp-contributions-search'      => 'Suech no Benutzerbiträg',
'sp-contributions-username'    => 'IP-Adress oder Benutzername:',
'sp-contributions-submit'      => 'Sueche',

'sp-newimages-showfrom' => 'Zeig neiji Dateie ab $1, $2 Uhr',

# What links here
'whatlinkshere'       => 'Was verwyst do druff?',
'whatlinkshere-title' => 'Sytene, wo uf „$1“ verlinke',
'whatlinkshere-page'  => 'Syte:',
'linklistsub'         => 'Lischt vo Gleicher (Links)',
'linkshere'           => "Die Sytene hän e Gleich, wu zu '''„[[:$1]]“''' fiere:",
'nolinkshere'         => "Kei Artikel vergleicht uf '''„[[:$1]]“'''.",
'nolinkshere-ns'      => "Kei Syte vergleicht uf '''„[[:$1]]“''' im gwehlte Namensruum.",
'isredirect'          => 'Wyterleitigssyte',
'istemplate'          => 'Vorlageybindig',
'whatlinkshere-prev'  => '{{PLURAL:$1|vorder|vorderi $1}}',
'whatlinkshere-next'  => '{{PLURAL:$1|nächscht|nächschti $1}}',
'whatlinkshere-links' => '← Links',

# Block/unblock
'blockip'                     => 'Benutzer bzw. IP blockyre',
'blockiptext'                 => 'Nimm des Formular go ne Benutzer oder e IP-Adräss sperre.
Des sott numme erfolge go Vandalismus verhindere un in Ibereinstimmig mit in dr [[{{MediaWiki:Policy-url}}|Leitlinie]]. Bitte gib au ne Grund fi d Sperri aa (z. B. indäm du einzel ni Syte zitiersch, wu vandaliert wore sin).',
'ipaddress'                   => 'IP-Adräss oder Benutzername:',
'ipadressorusername'          => 'IP-Adräss oder Benutzername:',
'ipbexpiry'                   => 'Sperrduur:',
'ipbreason'                   => 'Begrindig:',
'ipbreasonotherlist'          => 'Anderi Begrindig',
'ipbreason-dropdown'          => '* Allgmeini Sperrgrind
** Lesche vu Syte
** Aalege vu bledsinnige Syte
** Vylfachi Verstess gege d Richtlinie fir Netzgleicher
** Verstoss gege dr Grundsatz „Kei persenligi Aagriff“
* Benutzerspezifischi Sperrgrind
** Uugeignete Benutzername
** Neijaamäldig vun eme uubschränkt gsperrte Benutzer
* IP-spezifischi Sperrgrind
** Proxy, wäge Vandalismus vu einzelne Benutzer lengerfrischtig gsperrt',
'ipbanononly'                 => 'Nume anonymi Benutzer sperre',
'ipbcreateaccount'            => 'Aalege vu Benutzerchonte verhindere',
'ipbemailban'                 => 'E-Mail-Versand sperre',
'ipbenableautoblock'          => 'Sperr di aktuäll vu däm Benutzer brucht IP-Adräss un automatisch alli wytere, wun er nimmt go Syte bearbeite oder Benutzerchonte aalege',
'ipbsubmit'                   => 'Adräss blockiere',
'ipbother'                    => 'Anderi Duur (englisch):',
'ipboptions'                  => '2 Stunde:2 hours,1 Tag:1 day,3 Täg:3 days,1 Wuche:1 week,2 Wuche:2 weeks,1 Monet:1 month,3 Monet:3 months,6 Monet:6 months,1 Johr:1 year,Fir immer:infinite', # display1:time1,display2:time2,...
'ipbotheroption'              => 'Anderi Duur',
'ipbotherreason'              => 'Anderi/zuesätzligi Begrindig:',
'ipbhidename'                 => 'Benutzername in dr Lischt vu aktive Sperrine un im Benutzerverzeichnis verstecke.',
'badipaddress'                => 'D IP-Adräss het e falsch Format.',
'blockipsuccesssub'           => 'Mit Erfolg gsperrt',
'blockipsuccesstext'          => 'Dr Benutzer/d IP-Adräss [[Special:Contributions/$1|$1]] isch gsperrt wore.<br />
Go d Sperri ufhebe lueg d [[Special:IPBlockList|Lisch vu allene aktive Sperrine]].',
'ipb-edit-dropdown'           => 'Sperrgrind bearbeite',
'ipb-unblock-addr'            => '„$1“ frejgee',
'ipb-unblock'                 => 'IP-Adräss/Benutzer frejgee',
'ipb-blocklist-addr'          => 'Aktuälli Sperri fir „$1“ aazeige',
'ipb-blocklist'               => 'Alli aktuälle Sperrine aazeige',
'unblockip'                   => 'IP-Adräss frejgee',
'unblockiptext'               => 'Mit däm Formular chasch e IP-Adräss oder e Benutzer frejgee.',
'ipusubmit'                   => 'Die Sperri useneh',
'unblocked'                   => '[[User:$1|$1]] isch frejgee wore',
'unblocked-id'                => 'Sperr-ID $1 isch freijgee wore',
'ipblocklist'                 => 'Liste vo blockierten IP-Adrässen u Benutzernäme',
'ipblocklist-legend'          => 'Suech no eme gsperrte Benutzer',
'ipblocklist-username'        => 'Benutzername oder IP-Adräss:',
'ipblocklist-submit'          => 'Sueche',
'blocklistline'               => '$1, $2 het $3 ($4) gsperrt',
'infiniteblock'               => 'uubegränzt',
'expiringblock'               => '$1',
'anononlyblock'               => 'nume Anonymi',
'noautoblockblock'            => 'Autoblock deaktiviert',
'createaccountblock'          => 'Aalege vu Benutzerchonte gsperrt',
'emailblock'                  => 'E-Mail-Versand gsperrt',
'ipblocklist-empty'           => 'In dr Lischt het s kei Yytreg.',
'ipblocklist-no-results'      => 'Di gsuecht IP-Adräss/dr Benutzername isch nit gsperrt.',
'blocklink'                   => 'sperre',
'unblocklink'                 => 'freigä',
'contribslink'                => 'Byträg',
'autoblocker'                 => 'Automatischi Sperri, wel Du e gmeinsami IP-Adräss mit [[User:$1|Benutzer:$1]] bruchsch. Grund: „$2“.',
'blocklogpage'                => 'Sperrigs-Protokoll',
'blocklogentry'               => 'sperrt [[$1]] für d Ziit vo: $2 $3',
'blocklogtext'                => 'Des isch s Logbuech iber Sperrige un Entsperrige vu Benutzer. Automatisch blockierti IP-Adrässe wäre nit erfasst. Lueg au [[Special:IPBlockList|IP-Block Lischt]] fir e Lischt vu gsperrte Benutzer.',
'unblocklogentry'             => 'Blockad vu $1 ufghobe',
'block-log-flags-anononly'    => 'nume Anonymi',
'block-log-flags-nocreate'    => 'Aalege vu Benutzerchonte gsperrt',
'block-log-flags-noautoblock' => 'Autoblock deaktiviert',
'block-log-flags-noemail'     => 'E-Mail-Versand gsperrt',
'range_block_disabled'        => 'D Megligkeit, ganzi Adrässryym z sperre, isch nit aktiviert.',
'ipb_expiry_invalid'          => 'D Duur, wu yygee woren isch, isch nit giltig.',
'ipb_already_blocked'         => '„$1“ isch scho gsperrt wore.',
'ipb_cant_unblock'            => 'Fähler: Sperr-ID $1 nit gfunde. S cha syy, ass d Sperri scho ufghoben isch .',
'ipb_blocked_as_range'        => 'Fähler: D IP-Adräss $1 isch as Teil vu dr Beryychssperri $2 indirekt gsperrt. S isch nit megli, nume $1 z entsperre.',
'ip_range_invalid'            => 'Uugiltige IP-Adrässberyych.',
'blockme'                     => 'Sperr mi',
'proxyblocker'                => 'Proxy blocker',
'proxyblocker-disabled'       => 'Die Funktion isch deaktiviert.',
'proxyblockreason'            => 'Dyni IP-Adrässe isch gsperrt wore, wel si ne ufige Proxy isch. Bitte kontaktier Dyyn Internet-Provider oder Dyni Systemadministratore un informier si iber des Sicherheitsproblem.',
'proxyblocksuccess'           => 'Fertig.',
'sorbsreason'                 => 'D IP-Adräss isch in dr DNSBL vu {{SITENAME}} as uffige PROXY glischtet.',
'sorbs_create_account_reason' => 'D IP-Adräss isch in dr DNSBL vu {{SITENAME}} as uffige PROXY glischtet. S Aalege vu neije Benutzer isch nit megli.',

# Developer tools
'lockdb'              => 'D Datebank sperre',
'unlockdb'            => 'D Datebank freigää',
'lockdbtext'          => 'Durch s Sperre vo dere Datebank werde alli Benutzer devo abghalte Syte z bearbeite, ihri Ystellige z ändre usw. Bitte bstätig dass du des würkli wottsch mache, un dass du d Datebank nooch dynrer Wartig wider freigisch.',
'unlockdbtext'        => 'Durch s Entsperre vo dr Datebank chönne alli Benutzer wider Syte bearbeite, ihri Ystellige ändre usw. Bitte bstätig dass du des würkli wottsch mache.',
'lockconfirm'         => 'Joo, ich wott d Datebank ächt sperre.',
'unlockconfirm'       => 'Joo, ich wott d Datebank freigää.',
'lockbtn'             => 'D Datebank sperre',
'unlockbtn'           => 'D Datebank freigää',
'locknoconfirm'       => 'Du hesch s Bstätigungsfäld nüt markiert.',
'lockdbsuccesssub'    => 'D Datebank isch erfolgrych gsperrt worde',
'unlockdbsuccesssub'  => 'D Datebank isch erfolgrych freigää worde',
'lockdbsuccesstext'   => 'D {{SITENAME}}-Datebank isch gsperrt worde.<br />Bitte vergiss nüt d Datebank [[Special:UnlockDB|wider freizgää]], sobald d Wartung abgschlosse isch.',
'unlockdbsuccesstext' => 'D {{SITENAME}}-Datebank isch freigää worde.',
'lockfilenotwritable' => 'Die Datebank-Sperrdatei cha nüt beschrybe werde. Zume die Datebank chönne Sperre oder Freigää, muess si vum Webserver chönne bschrybe werde.',
'databasenotlocked'   => 'D Datebank isch nüt gsperrt.',

# Move page
'movepage'                => 'Artikel verschiebe',
'movepagetext'            => 'Mit däm Formular chasch du en Artikel verschiebe, u zwar mit syre komplette Versionsgschicht. Der alt Titel leitet zum nöie wyter, aber Links ufen alt Titel blyben unveränderet.',
'movepagetalktext'        => "D Diskussionssyte wird mitverschobe, '''ussert:'''
*Du verschiebsch d Syten i nen andere Namensruum, oder
*es git scho ne Diskussionssyte mit däm Namen oder
*du wählsch unte d Option, se nid z verschiebe.

I söttigne Fäll müessti d Diskussionssyten allefalls vo Hand kopiert wärde.",
'movearticle'             => 'Artikel verschiebe',
'movenologin'             => 'Du bisch nid aagmäldet',
'movenologintext'         => 'Du muesch e regischtrierte Benutzer syy un Di [[Special:UserLogin|aamälde]] go die Syte verschiebe.',
'movenotallowed'          => 'Du derfsch kei Syte verschiebe.',
'newtitle'                => 'Zum nöie Titel',
'move-watch'              => 'Die Syte beobachte',
'movepagebtn'             => 'Artikel verschiebe',
'pagemovedsub'            => 'Verschiebig erfolgrych',
'movepage-moved'          => '<big>\'\'\'"$1" isch verschobe wore uf "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'E Syte mit däm Name git s scho oder de Name isch nid giltig. Bitte nimm en andere.',
'cantmove-titleprotected' => 'Die Syte het nüt chönne verschobe werde, wyl de nöie Titel gsperrt isch.',
'talkexists'              => 'D Syte sälber isch erfolgrych verschobe worde, nid aber d Diskussionssyte, wil s under em nöue Titel scho eini het gä. Bitte setz se vo Hand zäme.',
'movedto'                 => 'verschoben uf',
'movetalk'                => 'Diskussionssyte nach Müglechkeit mitverschiebe',
'talkpagemoved'           => 'D Diskussionssyten isch mitverschobe worde.',
'talkpagenotmoved'        => 'D Diskussionssyte isch <strong>nit</strong> verschobe wore.',
'1movedto2'               => '[[$1]] isch uf [[$2]] verschobe worde.',
'1movedto2_redir'         => '[[$1]] isch uf [[$2]] verschobe wore un het drbyy e Wyterleitig iberschribe.',
'movelogpage'             => 'Verschiebigs-Logbuech',
'movelogpagetext'         => 'Des isch e Lischte mit allene Syte wo verschobe worde sin.',
'movereason'              => 'Grund',
'revertmove'              => 'Zrugg verschiebe',
'delete_and_move'         => 'Lösche un Verschiebe',
'delete_and_move_text'    => '== D Ziilsyte isch scho vorhande, lösche?==

D Syte „[[:$1]]“ gits scho. Wottsch du si lösche, zume Platz zum verschiebe mache?',
'delete_and_move_confirm' => 'D Ziilsyte für d Verschiebig lösche',
'delete_and_move_reason'  => 'glöscht, zume Platz für zum verschiebe mache',
'selfmove'                => 'Der nöi Artikelname mues en andere sy als der alt!',
'immobile_namespace'      => 'Dr Quell- oder Ziilnamensruum isch bsunders; du chasch kei Syte us däm Namensruum use- oder ine verschiebe.',

# Export
'export'            => 'Sytenen exportiere',
'exporttext'        => 'Du chasch dr Text un d Versionsgschicht vu einzelne Syte in ere XML-Datei exportiere. Die Datei cha derno in e ander MediaWiki-Wiki importiert wäre iber [[Special:Import|Importiere]].
Zum Exportiere trag dr Sytetitel in dr Täxtchaschte unter yy, ei Titel pro Zyyle, un wehl us, eb Du di aktuäll Version mitsamt dr eltere Versione (mit dr Versionsgschicht-Zyyle) oder nume di aktuäll Version mit dr Information iber di letscht Bearbeitig. In däm Fall chasch au e Gleich fir dr Export verwände, z. B. [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] fir d Syte "[[{{MediaWiki:Mainpage}}]]".',
'exportcuronly'     => 'Numme d aktuelli Version vo dr Syte exportiere, statt dr ganze Versionsgschicht',
'exportnohistory'   => "----
'''Hywys:''' S Exportiere vo ganzi Versionsgschichte durch des Formular isch us Gründ vo dr Leischtig vum Syschtem abgschaltet worde",
'export-submit'     => 'Sytene exportiere',
'export-addcattext' => 'Syte us dere Kategori dezuefüege',
'export-addcat'     => 'Dezuefüege',
'export-download'   => 'Als XML-Datei spychere',
'export-templates'  => 'Vorlage mit ybinde',

# Namespace 8 related
'allmessages'               => 'Systemnochrichte',
'allmessagesname'           => 'Name',
'allmessagesdefault'        => 'Standard-Tekscht',
'allmessagescurrent'        => 'jetzige Tekscht',
'allmessagestext'           => 'Des isch e Lischt vu allene meglige Syschtemnochrichte us em MediaWiki Namensruum.
Lueg au uf [http://www.mediawiki.org/wiki/Localisation MediaWiki Lokalisierig] un [http://translatewiki.net translatewiki.net], wänn Du zue dr MediaWiki-Lokalisierig wit byytrage.',
'allmessagesnotsupportedDB' => "'''{{ns:special}}:Allmessages''' cha nit bruucht wärde will '''\$wgUseDatabaseMessages''' abgschalte isch.",
'allmessagesfilter'         => 'Nochrichte nochem Name filtere:',
'allmessagesmodified'       => 'numme gänderti aazeige',

# Thumbnails
'thumbnail-more'           => 'vergrösere',
'filemissing'              => 'D Datei fäält',
'thumbnail_error'          => 'Fähler bir Härstellig vo re Vorschou: $1',
'djvu_page_error'          => 'DjVu-Syte isch uusserhalb vum Sytebereich',
'djvu_no_xml'              => 'XML-Date chönne für d DjVu-Datei nüt abgruefe werde',
'thumbnail_invalid_params' => 'Ungültigs Thumbnail-Parameter',
'thumbnail_dest_directory' => 'S Ziilverzeichnis cha nüt erstellt werde',

# Special:Import
'import'                     => 'Sytene importiere',
'importinterwiki'            => 'Transwiki-Import',
'import-interwiki-text'      => 'Wääl e Wiki un e Syte zum Importiere us.
S Datum vo dr Bearbeitig un dr Benutzername blybe erhalte.
Alli Transwiki-Import-Aktione werde im [[Special:Log/import|Import-Logbuech]] protokolliert.',
'import-interwiki-history'   => 'Alli früeneri Versione vo dere Syte importiere',
'import-interwiki-submit'    => 'Import',
'import-interwiki-namespace' => 'Ziilnamensruum:',
'importtext'                 => 'Bitte speicher d’Syte vum Quellwiki met em Spezial:Export-Wärkzüg ab, un lad denn di XML-Datei do uffe. („Bild lokal“ sot im Folgénde eigentle „XML-Datei“ hoiße ;-)',
'importstart'                => 'Importiere Syte …',
'import-revision-count'      => '– {{PLURAL:$1|1 Vérsion|$1 Vérsiona}}',
'importnopages'              => 'Es isch kei Syte doo wo mer importiere chönnt.',
'importfailed'               => 'Dr Import isch misslunge: $1',
'importunknownsource'        => 'Importquell isch unbekannt',
'importcantopen'             => 'D Importdatei het nüt chönne geöffnet werde',
'importbadinterwiki'         => 'Falscher Interwiki-Link',
'importnotext'               => 'Leer oder kei Teggscht',
'importsuccess'              => 'Dr Import isch abgschlosse.',
'importhistoryconflict'      => 'Es het scho ältri Versione wo mit dere kollidiere. Es isch mögli dass die Syte scho emool importiert worde isch.',
'importnosources'            => 'Für de Transwiki-Import sin kei Quelle definiert worde. Wege dem isch s direkte Ufelade vo Gschichtsversione gsperrt.',
'importnofile'               => 'Es isch kei Importdatei ufeglade worde.',
'importuploaderrorsize'      => 'S Ufelade vo dr Importdatei isch misslunge. D Datei isch grösser als erlaubt isch.',
'importuploaderrorpartial'   => 'S Ufelade vo dr Importdatei isch misslunge. D Datei het numme zum Deil chönne ufeglade werde.',
'importuploaderrortemp'      => 'S Ufelade vo dr Importdatei isch misslunge. E temporärs Verzeichnis fäält.',
'import-parse-failure'       => 'Fääler bim XML-Import:',
'import-noarticle'           => 'Du hesch kei Syte zum importiere aagää!',
'import-nonewrevisions'      => 'Es sin scho alli früeneri Versione importiert worde.',
'xml-error-string'           => '$1 Zeile $2, Spalte $3, (Byte $4): $5',
'import-token-mismatch'      => 'D Sitzigsdate sin verlore gange. Bitte versuech es noo emool.',
'import-invalid-interwiki'   => 'Us däm Wiki wo du aagää hesch isch kei Import mögli.',

# Import log
'importlogpage'                    => 'Import-Logbuech',
'importlogpagetext'                => 'Adminischtrativer Import vo Sytene mit Versionsgschichte us anderi Wikis.',
'import-logentry-upload'           => '„[[$1]]“ isch vunere Datei importiert worde',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|Vérsion|Vérsiona}}',
'import-logentry-interwiki'        => '„[[$1]]“ isch importiert worde (Transwiki)',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|Version|Versione}} vo $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Dyyni Benutzersyte',
'tooltip-pt-anonuserpage'         => 'D Benutzersyte vo der IP-Adress wo du mit schaffsch',
'tooltip-pt-mytalk'               => 'Dyyni Diskussionssyte',
'tooltip-pt-anontalk'             => 'Diskussione über Änderige vo dere IP-Adress',
'tooltip-pt-preferences'          => 'Myni Ystellige',
'tooltip-pt-watchlist'            => 'Lischte vo de beobachtete Syte.',
'tooltip-pt-mycontris'            => 'Lischt vu Dyyne Byyträg',
'tooltip-pt-login'                => 'Aamälde',
'tooltip-pt-anonlogin'            => 'Mir ermuntre dich zwar dass du dich miteme Benutzerkonto aamääldsch, es isch aber kei Pflicht!',
'tooltip-pt-logout'               => 'Abmälde',
'tooltip-ca-talk'                 => 'Diskussion zum Artikelinhalt',
'tooltip-ca-edit'                 => 'Syte bearbeite. Bitte vor em Spychere d Vorschou aaluege.',
'tooltip-ca-addsection'           => 'Neje Abschnitt aafange',
'tooltip-ca-viewsource'           => 'Die Syte isch geschützt. Du chasch der Quelltext aaluege.',
'tooltip-ca-history'              => 'Früecheri Versione vo dere Syte.',
'tooltip-ca-protect'              => 'Seite beschütze',
'tooltip-ca-delete'               => 'Syten entsorge',
'tooltip-ca-undelete'             => 'Sodeli, da isch es wider.',
'tooltip-ca-move'                 => 'Dür ds Verschiebe gits e nöie Name.',
'tooltip-ca-watch'                => 'Tue die Syten uf dyni Beobachtigslischte.',
'tooltip-ca-unwatch'              => 'Nim die Syte us dyre Beobachtungslischte furt.',
'tooltip-search'                  => 'Dürchsuech {{SITENAME}}',
'tooltip-search-go'               => 'Gang zunere Syte mit gnau däm Name, falls es eini git.',
'tooltip-search-fulltext'         => 'Suech nooch Syte wo de Teggscht dinne hen',
'tooltip-p-logo'                  => 'Houptsyte',
'tooltip-n-mainpage'              => 'Gang uf d Houptsyte',
'tooltip-n-portal'                => 'Über ds Projekt, was du chasch mache, wo du was findsch',
'tooltip-n-currentevents'         => 'Hindergrundinformatione zu aktuellen Ereignis finde',
'tooltip-n-recentchanges'         => 'Lischte vo de letschten Änderige i däm Wiki.',
'tooltip-n-randompage'            => 'E zuefälligi Syte',
'tooltip-n-help'                  => 'Ds Ort zum Usefinde.',
'tooltip-n-sitesupport'           => 'Unterstitz is',
'tooltip-t-whatlinkshere'         => 'Lischte vo allne Sytene, wo do ane linke',
'tooltip-t-recentchangeslinked'   => 'Letschti Änderige vo de Syte, wo vo do verlinkt sin',
'tooltip-feed-rss'                => 'RSS-Feed für selli Syte',
'tooltip-feed-atom'               => 'Atom-Feed für selli Syte',
'tooltip-t-contributions'         => 'Lischte vo de Byträg vo däm Benutzer',
'tooltip-t-emailuser'             => 'Schick däm Benutzer e E-Bost',
'tooltip-t-upload'                => 'Dateien ufelade',
'tooltip-t-specialpages'          => 'Lischte vo allne Spezialsyte',
'tooltip-t-print'                 => 'E Version vo dere Syte zum Usdrugge.',
'tooltip-t-permalink'             => 'E bständigs Gleich (Link) uf die Version vo dr Syte',
'tooltip-ca-nstab-main'           => 'Artikelinhalt aaluege',
'tooltip-ca-nstab-user'           => 'Benutzersyte aaluege',
'tooltip-ca-nstab-media'          => 'Mediasyte aaluege',
'tooltip-ca-nstab-special'        => 'Sell isch e Spezialsyte, du chasch se nid bearbeite.',
'tooltip-ca-nstab-project'        => 'D Projektsyte aaluege',
'tooltip-ca-nstab-image'          => 'Die Bildsyten aaluege',
'tooltip-ca-nstab-mediawiki'      => 'D Systemmäldige aaluege',
'tooltip-ca-nstab-template'       => 'D Vorlag aaluege',
'tooltip-ca-nstab-help'           => 'D Hilfssyten aaluege',
'tooltip-ca-nstab-category'       => 'D Kategoryesyten aaluege',
'tooltip-minoredit'               => 'Die Änderig als chly markiere.',
'tooltip-save'                    => 'Änderige spychere',
'tooltip-preview'                 => 'Vorschou vo dynen Änderige. Bitte vor em Spycheren aluege!',
'tooltip-diff'                    => 'Zeigt a, was du am Tekscht hesch veränderet.',
'tooltip-compareselectedversions' => 'Underschide zwüsche zwo usgwählte Versione vo dere Syten azeige.',
'tooltip-watch'                   => 'Tue die Syten uf dyni Beobachtigslischte.',
'tooltip-recreate'                => 'Die Syte nöi erstelle, trotz dass si emool glöscht worren isch.',
'tooltip-upload'                  => 'Aafange mit ufelade',

# Metadata
'nodublincore'      => 'Dublin-Core-RDF-Metadate sin fir dää Server deaktiviert.',
'nocreativecommons' => 'Creative-Commons-RDF-Metadate sin fir dää Server deaktiviert.',
'notacceptable'     => 'Dr Wiki-Server cha d Date nit im e Format z Verfiegig stelle, wu Dyy Grät cha läse.',

# Attribution
'anonymous'        => 'Anonymi Benutzer uf {{SITENAME}}',
'siteuser'         => '{{SITENAME}}-Benutzer $1',
'lastmodifiedatby' => 'Diese Seite wurde zuletzt geändert um $2, $1 von $3.', # $1 date, $2 time, $3 user
'othercontribs'    => 'Basiert auf der Arbeit von $1.',
'others'           => 'anderi',
'siteusers'        => '{{SITENAME}}-Benutzer $1',
'creditspage'      => 'Syteinformatione',
'nocredits'        => 'Fir die Syte sin kein Informatione vorhande.',

# Spam protection
'spamprotectiontitle'    => 'Spamschutz-Filter',
'spamprotectiontext'     => 'D Syte, wu du wit spychere, isch vum Spamschutzfilter blockiert wore. Des lyt wahrschyyns am e Gleich uf e externi Syte.',
'spamprotectionmatch'    => "'''Dää Text isch vum Spamfilter gfunde wore: ''$1'''''",
'subcategorycount'       => 'In sellere Kategori {{PLURAL:$1|isch no ei Unterkategori|sin no $1 Unterkategorie}}.',
'categoryarticlecount'   => 'In sellere Kategorie {{PLURAL:$1|isch ei Artikel|sin $1 Artikel}}.',
'category-media-count'   => '<small>S {{PLURAL:$1|wird $1 Datei|wäre $1 Dateie}} us däre Kategorii aazeigt.</small>',
'listingcontinuesabbrev' => '(Forts.)',
'spambot_username'       => 'MediaWiki Spam-Syyferig',
'spam_reverting'         => 'Letschti Version ohni Gleicher zue $1 widerhärgstellt.',
'spam_blanking'          => 'In allene Versione het s Gleicher zue $1 gha, sufer gmacht.',

# Info page
'infosubtitle'   => 'Syteinformation',
'numedits'       => 'Aazaal vo Ändrige aa dr Syte: $1',
'numtalkedits'   => 'Aazaal vo Ändrige aa de Diskussionssyte: $1',
'numwatchers'    => 'Die Syte wird vo $1 Lüt beobachtet',
'numauthors'     => 'Aazaal vo Autore: $1',
'numtalkauthors' => 'Aazaal vo Diskussionsteilnäämer: $1',

# Math options
'mw_math_png'    => 'Immer als PNG aazeige',
'mw_math_simple' => 'Eifachs TeX als HTML aazeige, süsch als PNG',
'mw_math_html'   => 'Falls müglech als HTML aazeige, süsch als PNG',
'mw_math_source' => 'Als TeX la sy (für Tekschtbrowser)',
'mw_math_modern' => 'Empfolnigi Ystellig für modärni Browser',
'mw_math_mathml' => 'MathML (experimentäll)',

# Patrolling
'markaspatrolleddiff'                 => 'Als patrulyrt markyre',
'markaspatrolledtext'                 => 'Erschtversion patrulyre',
'markedaspatrolled'                   => 'As kontrolliert markiert',
'markedaspatrolledtext'               => 'D’Änderig isch als patrulyrt markyrt.',
'rcpatroldisabled'                    => 'Kontroll vu dr letschte Änderige gsperrt',
'rcpatroldisabledtext'                => 'D Kontroll vu dr letschte Änderige isch im Momänt gsperrt.',
'markedaspatrollederror'              => 'Markierig as „kontrolliert“ nit megli.',
'markedaspatrollederrortext'          => 'Du muesch e Syteänderig uswehle.',
'markedaspatrollederror-noautopatrol' => 'S isch nit erlaubt, eigeni Bearbeitige as kontrolliert z markiere.',

# Patrol log
'patrol-log-page' => 'Kontroll-Logbuech',
'patrol-log-line' => 'het d’$1 vo $2 als patrulyrt markyrt $3',
'patrol-log-auto' => '(automatisch)',
'patrol-log-diff' => 'Version $1',

# Image deletion
'deletedrevision'                 => 'alti Version: $1',
'filedeleteerror-short'           => 'Fähler bi dr Datei-Leschig: $1',
'filedeleteerror-long'            => 'Bi dr Datei-Leschig sin Fähler feschtgstellt wore:

$1',
'filedelete-missing'              => 'D Datei „$1“ cha nit glescht wäre, wel si nit vorhande isch.',
'filedelete-old-unregistered'     => 'D Datei-Version „$1“, wu aagee woren isch, isch nit in dr Datebank vorhande.',
'filedelete-current-unregistered' => 'D Datei „$1“, wu aagee woren isch, isch nit in dr Datebank vorhande.',
'filedelete-archive-read-only'    => 'S Archiv-Verzeichnis „$1“ cha nit dur dr Webserver bschribe wäre.',

# Browsing diffs
'previousdiff' => '← Vorderi Änderig',
'nextdiff'     => 'Nächschti Änderig →',

# Media information
'mediawarning'         => "'''Obacht:''' In däre Art Datei chend s e beswillige Programmcode din ha. Wänn du die Datei abeladsch oder effnesch, cha dr Computer bschädigt wäre.<hr />",
'imagemaxsize'         => 'Maximali Gröössi vo de Bilder uf de Bildbeschrybigs-Sytene:',
'thumbsize'            => 'Bildvorschou-Gröössi:',
'widthheightpage'      => '$1×$2, $3 Syte',
'file-info'            => '(Dateigressi: $1, MIME-Typ: $2)',
'file-info-size'       => '($1 × $2 Pixel, Dateigrößi: $3, MIME-Typ: $4)',
'file-nohires'         => '<small>Kei höcheri Uflösig verfüegbar.</small>',
'svg-long-desc'        => '(SVG-Datei, Basisgrößi: $1 × $2 Pixel, Dateigrößi: $3)',
'show-big-image'       => 'Originalgrößi',
'show-big-image-thumb' => '<small>Größi vo dere Vorschou: $1 × $2 Pixel</small>',

# Special:Newimages
'newimages'    => 'Gallery vo noie Bilder',
'showhidebots' => '(Bötli $1)',
'noimages'     => 'Kei Dateie gfunde.',

# Bad image list
'bad_image_list' => 'Format:

Nume Zylene, wo mit emne * afö, wärde berücksichtigt.
Nach em * mues zersch e Link zuren Unerwünschte Datei cho.
Wyteri Links uf der glyche Zyle wärden als Usnahme behandlet, wo die Datei trotzdäm darff vorcho.',

# Metadata
'metadata'          => 'Metadate',
'metadata-help'     => "Die Datei het wyteri Informatione, allwäg vor Digitalkamera oder vom Scanner wo se het gschaffe.
We die Datei isch veränderet worde, de cha's sy, das die zuesätzlechi Information für di verändereti Datei nümm richtig zuetrifft.",
'metadata-expand'   => 'Erwytereti Details azeige',
'metadata-collapse' => 'Erwytereti Details verstecke',
'metadata-fields'   => 'Die EXIF-Metadate wärden ir Bildbeschrybig ou denn azeigt, we d Metadate-Tabälle versteckt isch.
Anderi Metadate sy standardmäßig versteckt.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength', # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Breiti',
'exif-imagelength'                 => 'Längi',
'exif-bitspersample'               => 'Bit pro Farbkomponente',
'exif-compression'                 => 'Art vu dr Kompression',
'exif-photometricinterpretation'   => 'Pixelzämmesetzig',
'exif-orientation'                 => 'Orientierung',
'exif-samplesperpixel'             => 'Aazahl vu dr Komponente',
'exif-planarconfiguration'         => 'Dateusrichtig',
'exif-ycbcrsubsampling'            => 'Subsampling Rate vu Y bis C',
'exif-ycbcrpositioning'            => 'Y un C Positionierig',
'exif-xresolution'                 => 'Horizontali Uflesig',
'exif-yresolution'                 => 'Vertikali Uflesig',
'exif-resolutionunit'              => 'Masseinheit vu dr Uflesig',
'exif-stripoffsets'                => 'Bilddate-Versatz',
'exif-rowsperstrip'                => 'Aazahl vu dr Zyylete pro Streife',
'exif-stripbytecounts'             => 'Bytes pro komprimiertem Streife',
'exif-jpeginterchangeformat'       => 'Offset zue JPEG SOI',
'exif-jpeginterchangeformatlength' => 'JPEG-Date in Bytes',
'exif-transferfunction'            => 'Ibertragigsfunktion',
'exif-whitepoint'                  => 'Manuäll mit Mässig',
'exif-primarychromaticities'       => 'Primäri Farbart',
'exif-ycbcrcoefficients'           => 'YCbCr-Koeffiziente',
'exif-referenceblackwhite'         => 'Schwarz/Wyss-Referenzpinkt',
'exif-datetime'                    => 'Spycherzytpunkt',
'exif-imagedescription'            => 'Bildtitel',
'exif-make'                        => 'Hersteller',
'exif-model'                       => 'Modell',
'exif-software'                    => 'Software',
'exif-artist'                      => 'Fotograf',
'exif-copyright'                   => 'Urheberrächt',
'exif-exifversion'                 => 'Exif-Version',
'exif-flashpixversion'             => 'unterstitzti Flashpix-Version',
'exif-colorspace'                  => 'Farbruum',
'exif-componentsconfiguration'     => 'Bedytig vu einzelne Komponente',
'exif-compressedbitsperpixel'      => 'Komprimierti Bit pro Pixel',
'exif-pixelydimension'             => 'Giltigi Bildbreiti',
'exif-pixelxdimension'             => 'Valind image height',
'exif-makernote'                   => 'Herstellernotiz',
'exif-usercomment'                 => 'Benutzerkommentar',
'exif-relatedsoundfile'            => 'Zuegherigi Tondatei',
'exif-datetimeoriginal'            => 'Erfassigszytpunkt',
'exif-datetimedigitized'           => 'Digitalisierigszytpunkt',
'exif-subsectime'                  => 'Spycherzytpunkt (1/100 s)',
'exif-subsectimeoriginal'          => 'Erfassigszytpunkt (1/100 s)',
'exif-subsectimedigitized'         => 'Digitalisierigszytpunkt (1/100 s)',
'exif-exposuretime'                => 'Beliechtigsduur',
'exif-exposuretime-format'         => '$1 Sekunde ($2)',
'exif-fnumber'                     => 'F-Wert',
'exif-exposureprogram'             => 'Beliechtigsprogramm',
'exif-spectralsensitivity'         => 'Spektrali Empfindligkeit',
'exif-isospeedratings'             => 'Filmempfindlichkeit (ISO)',
'exif-oecf'                        => 'Optoelektronische Umrächnigsfaktor',
'exif-shutterspeedvalue'           => 'Beliechtigszytwärt',
'exif-aperturevalue'               => 'Bländewärt',
'exif-brightnessvalue'             => 'Hälligkeitswärt',
'exif-exposurebiasvalue'           => 'Beliechtigsvorgab',
'exif-maxaperturevalue'            => 'Greschti Bländi',
'exif-subjectdistance'             => 'Entfärnig',
'exif-meteringmode'                => 'Mässverfahre',
'exif-lightsource'                 => 'Liechtquäll',
'exif-flash'                       => 'Blitz',
'exif-focallength'                 => 'Brännwyti',
'exif-subjectarea'                 => 'Beryych',
'exif-flashenergy'                 => 'Blitzstärchi',
'exif-spatialfrequencyresponse'    => 'Spatial-Frequenz',
'exif-focalplanexresolution'       => 'Sensor-Uflesig horizontal',
'exif-focalplaneyresolution'       => 'Sensor-Uflesig vertikal',
'exif-focalplaneresolutionunit'    => 'Einheit vu dr Sensor-Uflesig',
'exif-subjectlocation'             => 'Motivstandort',
'exif-exposureindex'               => 'Beliechtigsindex',
'exif-sensingmethod'               => 'Mässmethod',
'exif-filesource'                  => 'Quäll vu dr Datei',
'exif-scenetype'                   => 'Szenetyp',
'exif-cfapattern'                  => 'CFA-Muschter',
'exif-customrendered'              => 'Benutzerdefinierti Bildverarbeitig',
'exif-exposuremode'                => 'Beliechtigsmodus',
'exif-whitebalance'                => 'Wyssabglyych',
'exif-digitalzoomratio'            => 'Digitalzoom',
'exif-focallengthin35mmfilm'       => 'Brännwyti (Chleibildäquivalent)',
'exif-scenecapturetype'            => 'Art vu dr Ufnahm',
'exif-gaincontrol'                 => 'Verstärchig',
'exif-contrast'                    => 'Kontrascht',
'exif-saturation'                  => 'Sättigung',
'exif-sharpness'                   => 'Schärfi',
'exif-devicesettingdescription'    => 'Grät-Yystellig',
'exif-subjectdistancerange'        => 'Motiventfärnig',
'exif-imageuniqueid'               => 'Bild-ID',
'exif-gpsversionid'                => 'GPS-Tag-Version',
'exif-gpslatituderef'              => 'nerdl. oder sidl. Breiti',
'exif-gpslatitude'                 => 'Geografischi Breiti',
'exif-gpslongituderef'             => 'eschtl. oder weschtl. Längi',
'exif-gpslongitude'                => 'Geografischi Längi',
'exif-gpsaltituderef'              => 'Bezugshechi',
'exif-gpsaltitude'                 => 'Hechi',
'exif-gpstimestamp'                => 'GPS-Zyt',
'exif-gpssatellites'               => 'Satellite, wu fir d Mässig brucht wore sin',
'exif-gpsstatus'                   => 'Empfängerstatus',
'exif-gpsmeasuremode'              => 'Mässverfahre',
'exif-gpsdop'                      => 'Masspräzision',
'exif-gpsspeedref'                 => 'Gschwindigkeitseinheit',
'exif-gpsspeed'                    => 'Gschwindigkeit vum GPS-Empfänger',
'exif-gpstrackref'                 => 'Referänz fir d Bewegigsrichtig',
'exif-gpstrack'                    => 'Bewegigsrichtig',
'exif-gpsimgdirectionref'          => 'Referänz fir d Usrichtig vum Bild',
'exif-gpsimgdirection'             => 'Bildrichtig',
'exif-gpsmapdatum'                 => 'Geodätisch Datum brucht',
'exif-gpsdestlatituderef'          => 'Referänz fir d Breiti',
'exif-gpsdestlatitude'             => 'Breiti',
'exif-gpsdestlongituderef'         => 'Referänz fir d Längi',
'exif-gpsdestlongitude'            => 'Längi',
'exif-gpsdestbearingref'           => 'Referänz fir d Motivrichtig',
'exif-gpsdestbearing'              => 'Motivrichtig',
'exif-gpsdestdistanceref'          => 'Referänz fir d Motiventfärnig',
'exif-gpsdestdistance'             => 'Motiventfärnig',
'exif-gpsprocessingmethod'         => 'Name vum GPS-Verfahre',
'exif-gpsareainformation'          => 'Name vum GPS-Biet',
'exif-gpsdatestamp'                => 'GPS-Datum',
'exif-gpsdifferential'             => 'GPS-Differentialkorrektur',

# EXIF attributes
'exif-compression-1' => 'Uukomprimiert',

'exif-unknowndate' => 'Nit bekannt Datum',

'exif-orientation-1' => 'Normal', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Horizontal gspieglet', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Um 180° drillt', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Vertikal gspieglet', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Gege dr Uhrzeigersinn um 90° drillt un derno vertikal gspieglet', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Um 90° im Uhrzeigersinn drillt', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Um 90° im Uhrzeigersinn drillt un derno vertikal gspieglet', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Um 90° gege dr Uhrzeigersinn drillt', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'Grobformat',
'exif-planarconfiguration-2' => 'Planarformat',

'exif-componentsconfiguration-0' => 'Git s nit',

'exif-exposureprogram-0' => 'Nit bekannt',
'exif-exposureprogram-1' => 'Manuell',
'exif-exposureprogram-2' => 'Standardprogramm',
'exif-exposureprogram-3' => 'Zytautomatik',
'exif-exposureprogram-4' => 'Bländeautomatik',
'exif-exposureprogram-5' => 'Kreativprogramm (hochi Schärfetiefi bevorzugt)',
'exif-exposureprogram-6' => 'Aktions-Programm (churzi Beliechtigszyt bevorzugt)',
'exif-exposureprogram-7' => 'Porträ-Programm',
'exif-exposureprogram-8' => 'Landschaftsufnahme',

'exif-subjectdistance-value' => '$1 Meter',

'exif-meteringmode-0'   => 'Nit bekannt',
'exif-meteringmode-1'   => 'Durchschnittlig',
'exif-meteringmode-2'   => 'Mittizentriert',
'exif-meteringmode-3'   => 'Spot-Mässig',
'exif-meteringmode-4'   => 'Mehfach-Spot-Mässig',
'exif-meteringmode-5'   => 'Muschter',
'exif-meteringmode-6'   => 'Bildteil',
'exif-meteringmode-255' => 'Anderi',

'exif-lightsource-0'   => 'Nit bekannt',
'exif-lightsource-1'   => 'Tagliecht',
'exif-lightsource-2'   => 'Fluoreszierig',
'exif-lightsource-3'   => 'Glieilampe',
'exif-lightsource-4'   => 'Blitz',
'exif-lightsource-9'   => 'Schen Wätter',
'exif-lightsource-10'  => 'Wulchig',
'exif-lightsource-11'  => 'Schatte',
'exif-lightsource-12'  => 'Tagliecht fluoreszierig (D 5700–7100 K)',
'exif-lightsource-13'  => 'Tagwyss fluoreszierig (N 4600–5400 K)',
'exif-lightsource-14'  => 'Chaltwyss fluoreszierig (W 3900–4500 K)',
'exif-lightsource-15'  => 'Wyss fluoreszierig (WW 3200–3700 K)',
'exif-lightsource-17'  => 'Standardliecht A',
'exif-lightsource-18'  => 'Standardliecht B',
'exif-lightsource-19'  => 'Standardliecht C',
'exif-lightsource-24'  => 'ISO Studio Chunschtliecht',
'exif-lightsource-255' => 'Anderi Liechtquäll',

'exif-focalplaneresolutionunit-2' => 'Zoll',

'exif-sensingmethod-1' => 'Nit definiert',
'exif-sensingmethod-2' => 'Ei-Chip-Farbsensor',
'exif-sensingmethod-3' => 'Zwee-Chip-Farbsensor',
'exif-sensingmethod-4' => 'Drej-Chip-Farbsensor',
'exif-sensingmethod-5' => 'Farbruum sequenziäll Sensor',
'exif-sensingmethod-7' => 'Trilineare Sensor',
'exif-sensingmethod-8' => 'Farbruum linear sequenziälle Sensor',

'exif-scenetype-1' => 'E diräkt fotografiert Bild',

'exif-customrendered-0' => 'Normal',
'exif-customrendered-1' => 'Benutzerdefiniert',

'exif-exposuremode-0' => 'Automatischi Beliechtig',
'exif-exposuremode-1' => 'Manuälli Beliechtig',
'exif-exposuremode-2' => 'Beliechtigzyylete',

'exif-whitebalance-0' => 'Automatisch',
'exif-whitebalance-1' => 'Manuäll',

'exif-scenecapturetype-0' => 'Standard',
'exif-scenecapturetype-1' => 'Landschaft',
'exif-scenecapturetype-2' => 'Porträt',
'exif-scenecapturetype-3' => 'Nachtszene',

'exif-gaincontrol-0' => 'Keini',
'exif-gaincontrol-1' => 'Low gain up',
'exif-gaincontrol-2' => 'High gain up',
'exif-gaincontrol-3' => 'Low gain down',
'exif-gaincontrol-4' => 'High gain down',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Schwach',
'exif-contrast-2' => 'Starch',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Niideri Sättigung',
'exif-saturation-2' => 'Hochi Sättigung',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Schwach',
'exif-sharpness-2' => 'Starch',

'exif-subjectdistancerange-0' => 'Nit bekannt',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Noch',
'exif-subjectdistancerange-3' => 'Wyt ewäg',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'nerdl. Breiti',
'exif-gpslatitude-s' => 'sidl. Breiti',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'eschtl. Längi',
'exif-gpslongitude-w' => 'weschtl. Längi',

'exif-gpsstatus-a' => 'Mässig lauft',
'exif-gpsstatus-v' => 'Interoperabilität vu Mässige',

'exif-gpsmeasuremode-2' => '2-dimensionali Mässig',
'exif-gpsmeasuremode-3' => '3-dimensionali Mässig',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'km/h',
'exif-gpsspeed-m' => 'mph',
'exif-gpsspeed-n' => 'Chnote',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Tatsächligi Richtig',
'exif-gpsdirection-m' => 'Magnetischi Richtig',

# External editor support
'edit-externally'      => 'Die Datei mit emnen externe Programm bearbeite',
'edit-externally-help' => '(Lueg d [http://www.mediawiki.org/wiki/Manual:External_editors Installationsaawisige] fir witeri Informatione)',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'alli',
'imagelistall'     => 'alli',
'watchlistall2'    => 'alli',
'namespacesall'    => 'alli',
'monthsall'        => 'alli',

# E-mail address confirmation
'confirmemail'            => 'Bstätigung vo Ihre E-Poscht-Adräss',
'confirmemail_noemail'    => 'Du hesch in dyne [[Special:Preferences|persönliche Ystellige]] e kei E-Mail-Adress ygää.',
'confirmemail_text'       => 'Dermit du di erwyterete Mailfunktione chasch bruuche, muesch du die e-Mail-Adrässe, wo du hesch aaggä, la bestätige. Klick ufe Chnopf unte; das schickt dir es Mail. I däm Mail isch e Link; we du däm Link folgsch, de tuesch dadermit bestätige, das die e-Mail-Adrässe dyni isch.',
'confirmemail_pending'    => '<div class="error">Dir isch scho ne Bstätigungs-Code per E-Mail zuegschickt wore. Wänn Du Dyy Benutzerkonto erscht vor churzem aagleit hesch, wart bitte no ne paar Minute uf d E-Mail, voreb Du ne neje Code aaforderesch.</div>',
'confirmemail_send'       => 'Bestätigungs-Mail verschicke',
'confirmemail_sent'       => 'Es isch dir es Mail zur Adrässbestätigung gschickt worde.',
'confirmemail_oncreate'   => 'En Code isch aa dyni E-Mail-Adress zum bestätige gschiggt worde. Du bruuch de Code zwar nüt zum dich aamälde, er wird aber zum aktiviere vo de E-Mail-Funktione in däm Wiki bruucht.',
'confirmemail_sendfailed' => '{{SITENAME}} het d E-Mail zum bestätige nüt chönne verschigge.
Bitte überprüef d E-Mail-Adress uf ungültigi Zeiche.

Ruggmäldig vum Mailserver: $1',
'confirmemail_invalid'    => 'De Bestätigscode isch ungültig. Es isch mögli das er abgloffe isch. In däm Fall chasch probiere d Bestätigung z widerhole.',
'confirmemail_needlogin'  => 'Du muesch dich $1, zume dyni E-Mail-Adress bstätige.',
'confirmemail_success'    => 'Dyni E-Mail-Adräss isch bstätiget worde. Du chasch di jitz aamälde.',
'confirmemail_loggedin'   => 'Dyni E-Mail-Adräss isch jitz bstätigt.',
'confirmemail_error'      => 'Öbis isch bim Bestätige vo dynrer E-Mail-Adress schief gloffe.',
'confirmemail_subject'    => '{{SITENAME}} E-Mail-Adrässbstätigung',
'confirmemail_body'       => 'Hallo

{{SITENAME}}-BenutzerIn «$2» — das bisch allwäg du — het sech vor IP-Adrässen $1 uus mit deren e-Mail-Adrässe bi {{SITENAME}} aagmäldet.

Für z bestätige, das die Adrässe würklech dir isch, u für dyni erwytereten e-Mail-Funktionen uf {{SITENAME}} yzschalte, tue bitte der folgend Link i dym Browser uuf:

$3

Falls du *nid* $2 sötsch sy, de tue dä Link bitte nid uuf.

Die Bestätigung isch nume müglech bis $4.

Fründtlechi Grüess',

# Scary transclusion
'scarytranscludedisabled' => '[Interwiki-Yybindig isch deaktiviert]',
'scarytranscludefailed'   => '[Vorlage-Yybindig fir $1 isch gescheitert]',
'scarytranscludetoolong'  => '[URL isch z lang]',

# Trackbacks
'trackbackbox'      => '<div id="mw_trackbacks">
Trackback fir die Syte:<br />
$1
</div>',
'trackbackremove'   => '([$1 lesche])',
'trackbacklink'     => 'Trackback',
'trackbackdeleteok' => 'Trackback isch mit Erfolg glescht wore.',

# Delete conflict
'deletedwhileediting' => "'''Obacht''': Die Syte isch glescht wore, nochdäm Du aagfange hesch si z bearbeite!",
'confirmrecreate'     => "Benutzer [[User:$1|$1]] ([[User talk:$1|Diskussion]]) het die Syte glescht, nochdäm Du aagfange hesch si z bearbeite.
D Begrindig isch gsi:
:''$2''
Bitte bstätig, ass Du die Syte wirkli wit nej aalege.",
'recreate'            => 'Nomol aalege',

# HTML dump
'redirectingto' => 'Du wirsch uf [[$1]] wytergleitet...',

# action=purge
'confirm_purge'        => "Die Zwischeschpoicherung vo der Syte „{{FULLPAGENAME}}“ lösche?

\$1

<div style=\"font-size: 95%; margin-top: 2em;\">
'''''Erklärig:'''''

''Zwüschespycherige (Cache) sy temporäri Kopye vore Websyten uf dym Computer. We ne Syte us em Zwüschespycher abgrüefft wird, de bruucht das weniger Rächeleischtig füre {{SITENAME}}-Server als en Abrueff vor Originalsyte.''

''Falls du e Syte scho nes Wyli am Aaluege bisch, de het dy Computer sone Zwüschespycherig gmacht. Derby chönnt die Syten unter Umständ scho i dere Zyt liecht veraltere.''

''Ds Lösche vor Zwüschespycherig zwingt der Server, dir di aktuellschti Version vor Syte z gä!''
</div>",
'confirm_purge_button' => 'In Ornig',

# AJAX search
'searchcontaining' => "Suech nooch Syte, wo ''$1'' dinne vorchunt.",
'searchnamed'      => "Suech nooch Syte, wo im Name ''$1'' enthalte.",
'articletitles'    => "Syte wo mit ''$1'' aafange",
'hideresults'      => 'Ergebnis usblände',
'useajaxsearch'    => 'Benutz d AJAX Sueche',

# Multipage image navigation
'imgmultipageprev' => '← vorderi Syte',
'imgmultipagenext' => 'nächschti Syte →',
'imgmultigo'       => 'Gang!',
'imgmultigotopre'  => 'Gang uf d Syte',

# Table pager
'ascending_abbrev'         => 'uf',
'descending_abbrev'        => 'ab',
'table_pager_next'         => 'Näggschti Syte',
'table_pager_prev'         => 'Vorderi Syte',
'table_pager_first'        => 'Erschti Syte',
'table_pager_last'         => 'Letschti Syte',
'table_pager_limit'        => 'Zeig $1 Yträg pro Syte aa',
'table_pager_limit_submit' => 'Gang',
'table_pager_empty'        => 'Kei Ergebniss',

# Auto-summaries
'autosumm-blank'   => 'Die Syte isch gleert worde.',
'autosumm-replace' => "Dr Inhalt vo dr Syte isch ersetzt worde: '$1'",
'autoredircomment' => 'E Wyterleitig uf [[$1]] isch erstellt worde',
'autosumm-new'     => "Het Syte aagleit mit '$1'",

# Live preview
'livepreview-loading' => 'Am Lade …',
'livepreview-ready'   => 'Am Lade… Fertig!',
'livepreview-failed'  => 'Live-Vorschau nit megli! Bitte di normal Vorschau verwände.',
'livepreview-error'   => 'Verbindig nit megli: $1 „$2“. Bitte di normal Vorschau verwände.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Bearbeitige vu dr letschte $1 Sekunde wäre in däre Lischt nonig aazeigt.',
'lag-warn-high'   => 'D Bearbeitige vu dr letschte $1 Sekunde wäre in däre Lischt nonig aazeigt, wel d Datebank zimli usglaschtet isch.',

# Watchlist editor
'watchlistedit-numitems'       => 'Uf dynrer Beobachtigslischt sin {{PLURAL:$1|ei Ytrag|$1 Yträg}}, Diskussionssyte werde nüt zäält.',
'watchlistedit-noitems'        => 'Du hesch kei Syte uf dynrer Beobachtigslischt.',
'watchlistedit-normal-title'   => 'D Beobachtigslischt bearbeite',
'watchlistedit-normal-legend'  => 'Yträg vo dynrer Beobachtigslischt entferne',
'watchlistedit-normal-explain' => 'Doo unte sihsch d Yträg uf dynrer Beobachtigslischt. Zume en Ytrag useznää muesch s Chäschtli dernäbe markiere un denoo ganz unte uf „Yträg usenää“ drugge. Du chasch syni Beobachtigslischt au als [[Special:Watchlist/raw|Lischte bearbeite]].',
'watchlistedit-normal-submit'  => 'Yträg usenää',
'watchlistedit-normal-done'    => '{{PLURAL:$1|ei Ytrag isch|$1 Yträg sin}} vo dynrer Beobachtigslischt entfernt worde:',
'watchlistedit-raw-title'      => 'D Beobachtigslischt als Lischte bearbeite',
'watchlistedit-raw-legend'     => 'D Beobachtigslischt als Lischte bearbeite',
'watchlistedit-raw-explain'    => 'Doo unte sihsch d Yträg uf dynrer Beobachtigslischt. Du chasch die Yträg jetz usenää oder hinzuefüge.
Pro Zyle isch ei Ytrag erlaubt. Wenn fertig bisch, drugg uf „Beobachtigslischt aktualisiere“.
Du chasch au d [[Special:Watchlist/edit|Standard-Bearbeitigssyte]] bruuche.',
'watchlistedit-raw-titles'     => 'Yträg:',
'watchlistedit-raw-submit'     => 'D Beobachtigslischt aktualisiere',
'watchlistedit-raw-done'       => 'Dyni Beobachtigslischt isch aktualisiert worde.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|ei Ytrag isch|$1 Yträg sin}} dezuedüü worde:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|ei Ytrag isch|$1 Yträg sin}} usegnoo worde:',

# Watchlist editing tools
'watchlisttools-view' => 'Beobachtigsliste: Änderige',
'watchlisttools-edit' => 'normal bearbeite',
'watchlisttools-raw'  => 'imene große Textfäld bearbeite',

# Core parser functions
'unknown_extension_tag' => 'Nit bekannte Extension-Tag „$1“',

# Special:Version
'version-extensions'               => 'Installierti Erwyterige',
'version-specialpages'             => 'Spezialsyte',
'version-parserhooks'              => 'Parser-Schnittstelle',
'version-variables'                => 'Variable',
'version-other'                    => 'Anders',
'version-mediahandlers'            => 'Medie-Handler',
'version-hooks'                    => "Schnittstelle ''(Hook)''",
'version-extension-functions'      => 'Funktionsufruef',
'version-parser-extensiontags'     => "Parser-Erwyterige ''(tags)''",
'version-parser-function-hooks'    => 'Parser-Funktione',
'version-skin-extension-functions' => 'Skin-Erwyterigs-Funktione',
'version-hook-name'                => 'Schnittstellename',
'version-hook-subscribedby'        => 'Ufruef vu',
'version-version'                  => 'Version',
'version-license'                  => 'Lizänz',
'version-software'                 => 'Installierti Software',
'version-software-product'         => 'Produkt',
'version-software-version'         => 'Version',

# Special:Filepath
'filepath'         => 'Dateipfad',
'filepath-page'    => 'Datei:',
'filepath-submit'  => 'Pfad sueche',
'filepath-summary' => 'Mit däre Spezialsyte cha mer ohni Umwäg dr vollständig Pfad vu dr aktuälle Version vun ere Datei abfroge. Di aagfrogt Datei wird diräkt dargstellt bzw. mit dr verchnipfte Aawändig gstartet.

Dr Dateiname muess ohni dr Zuesatz „{{ns:image}}:“ yygee wäre.',

);
