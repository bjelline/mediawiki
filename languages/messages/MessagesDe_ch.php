<?php
/** Swiss High German (Schweizer Hochdeutsch)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author MichaelFrey
 * @author SVG
 * @author The Evil IP address
 */

$fallback = 'de';
$separatorTransformTable = array( ',' => "'", '.' => ',' );

$messages = array(
# General errors
'actionthrottledtext' => 'Im Rahmen einer Anti-Spam-Massnahme kann diese Aktion in einem kurzen Zeitabstand nur begrenzt oft ausgeführt werden. Diese Grenze hast du überschritten.
Bitte versuche es in ein paar Minuten erneut.',

# Login and logout pages
'nosuchuser' => 'Der Benutzername „$1“ existiert nicht.
Überprüfe die Schreibweise (Gross-/Kleinschreibung beachten) oder [[Special:UserLogin/signup|melde dich als neuer Benutzer an]].',

# Password reset dialog
'resetpass_announce' => 'Anmeldung mit dem per E-Mail zugesandten Code. Um die Anmeldung abzuschliessen, musst du jetzt ein neues Passwort wählen.',

# Edit pages
'longpagewarning' => "'''Warnung:''' Diese Seite ist $1 KB gross; einige Browser könnten Probleme haben, Seiten zu bearbeiten, die grösser als 32 KB sind.
Überlege bitte, ob eine Aufteilung der Seite in kleinere Abschnitte möglich ist.",
'longpageerror'   => "'''Fehler: Der Text, den du zu speichern versuchst, ist $1 KB gross. Dies ist grösser als das erlaubte Maximum von $2 KB.'''
Er kann nicht gespeichert werden.",

# Parser/template warnings
'post-expand-template-inclusion-warning'  => 'Warnung: Die Grösse eingebundener Vorlagen ist zu gross, einige Vorlagen können nicht eingebunden werden.',
'post-expand-template-inclusion-category' => 'Seiten, in denen die maximale Grösse eingebundener Vorlagen überschritten ist',
'post-expand-template-argument-warning'   => "'''Warnung:''' Diese Seite enthält mindestens ein Argument in einer Vorlage, das expandiert zu gross ist. Diese Argumente werden ignoriert.",

# History merging
'mergehistory-merge' => 'Die folgenden Versionen von „[[:$1]]“ können nach „[[:$2]]“ übertragen werden. Markiere die Version, bis zu der (einschliesslich) die Versionen übertragen werden sollen. Bitte beachte, dass die Nutzung der Navigationslinks die Auswahl zurücksetzt.',

# Diffs
'diff-big' => "'''gross'''",

# Search results
'toomanymatches' => 'Die Anzahl der Suchergebnisse ist zu gross, bitte versuche eine andere Abfrage.',
'nonefound'      => "'''Hinweis:''' Es werden standardmässig nur einige Namensräume durchsucht. Setze ''all:'' vor deinen Suchbegriff, um alle Seiten (inkl. Diskussionsseiten, Vorlagen usw.) zu durchsuchen oder gezielt den Namen des zu durchsuchenden Namensraumes.",

# Preferences page
'prefs-watchlist-days' => 'Anzahl der Tage, die die Beobachtungsliste standardmässig umfassen soll:',
'prefs-edit-boxsize'   => 'Grösse des Bearbeitungsfensters:',
'recentchangesdays'    => 'Anzahl der Tage, die die Liste der „Letzten Änderungen“ standardmässig umfassen soll:',
'defaultns'            => 'In diesen Namensräumen soll standardmässig gesucht werden:',

# Rights
'right-createpage'            => 'Seiten erstellen (ausser Diskussionsseiten)',
'right-bigdelete'             => 'Seiten mit grosser Versionsgeschichte löschen',
'right-override-export-depth' => 'Exportiere Seiten einschliesslich verlinkter Seiten bis zu einer Tiefe von 5',

# Upload
'large-file'               => 'Die Dateigrösse sollte nach Möglichkeit $1 nicht überschreiten. Diese Datei ist $2 gross.',
'largefileserver'          => 'Die Datei ist grösser als die vom Server eingestellte Maximalgrösse.',
'fileexists-extension'     => "Eine Datei mit ähnlichem Namen existiert bereits: [[$2|thumb]]
* Name der hochzuladenden Datei: '''<tt>[[:$1]]</tt>'''
* Name der vorhandenen Datei: '''<tt>[[:$2]]</tt>'''
Nur die Dateiendung unterscheidet sich in Gross-/Kleinschreibung. Bitte prüfe, ob die Dateien inhaltlich identisch sind.",
'fileexists-thumbnail-yes' => "Bei der Datei scheint es sich um ein Bild verringerter Grösse ''(thumbnail)'' zu handeln. [[$1|thumb]]
Bitte prüfe die Datei '''<tt>[[:$1]]</tt>'''.
Wenn es sich um das Bild in Originalgrösse handelt, so braucht kein separates Vorschaubild hochgeladen zu werden.",
'file-thumbnail-no'        => "Der Dateiname beginnt mit '''<tt>$1</tt>'''. Dies deutet auf ein Bild verringerter Grösse ''(thumbnail)'' hin.
Bitte prüfe, ob du das Bild in voller Auflösung vorliegen hast und lade dieses unter dem Originalnamen hoch.",
'upload-maxfilesize'       => 'Maximale Dateigrösse: $1',

# Special:ListFiles
'listfiles-summary' => 'Diese Spezialseite listet alle hochgeladenen Dateien auf. Standardmässig werden die zuletzt hochgeladenen Dateien zuerst angezeigt. Durch einen Klick auf die Spaltenüberschriften kann die Sortierung umgedreht werden oder es kann nach einer anderen Spalte sortiert werden.',
'listfiles_size'    => 'Grösse',

# File description page
'filehist-dimensions' => 'Masse',
'filehist-filesize'   => 'Dateigrösse',

# Special:Log
'alllogstext' => 'Dies ist die kombinierte Anzeige aller in {{SITENAME}} geführten Logbücher.
Die Ausgabe kann durch die Auswahl des Logbuchtyps, des Benutzers oder des Seitentitels eingeschränkt werden (Gross-/Kleinschreibung muss beachtet werden).',

# Protect
'minimum-size' => 'Mindestgrösse',
'maximum-size' => 'Maximalgrösse:',

# Block/unblock
'ipbreason-dropdown' => '* Allgemeine Sperrgründe
** Löschen von Seiten
** Einstellen unsinniger Seiten
** Fortgesetzte Verstösse gegen die Richtlinien für Weblinks
** Verstoss gegen den Grundsatz „Keine persönlichen Angriffe“
* Benutzerspezifische Sperrgründe
** Ungeeigneter Benutzername
** Neuanmeldung eines unbeschränkt gesperrten Benutzers
* IP-spezifische Sperrgründe
** Proxy, wegen Vandalismus einzelner Benutzer längerfristig gesperrt',

# Thumbnails
'thumbnail-more'  => 'vergrössern',
'djvu_page_error' => 'DjVu-Seite ausserhalb des Seitenbereichs',

# Special:Import
'import-interwiki-templates' => 'Alle Vorlagen einschliessen',
'importuploaderrorsize'      => 'Das Hochladen der Importdatei ist fehlgeschlagen. Die Datei ist grösser als die maximal erlaubte Dateigrösse.',

# Media information
'imagemaxsize'         => 'Maximale Bildgrösse auf Bildbeschreibungsseiten:',
'thumbsize'            => 'Standardgrösse der Vorschaubilder (Thumbnails):',
'file-info'            => '(Dateigrösse: $1, MIME-Typ: $2)',
'file-info-size'       => '($1 × $2 Pixel, Dateigrösse: $3, MIME-Typ: $4)',
'show-big-image-thumb' => '<small>Grösse der Voransicht: $1 × $2 Pixel</small>',

# Metadata
'metadata-fields' => 'Die folgenden Felder der EXIF-Metadaten in diesem MediaWiki-Systemtext werden auf Bildbeschreibungsseiten angezeigt; weitere standardmässig „eingeklappte“ Details können angezeigt werden.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength', # Do not translate list items

# EXIF tags
'exif-resolutionunit'              => 'Masseinheit der Auflösung',
'exif-jpeginterchangeformatlength' => 'Grösse der JPEG-Daten in Bytes',
'exif-referenceblackwhite'         => 'Schwarz/Weiss-Referenzpunkte',
'exif-maxaperturevalue'            => 'Grösste Blende',
'exif-whitebalance'                => 'Weissabgleich',
'exif-gpsdop'                      => 'Masspräzision',

'exif-lightsource-13' => 'Tagesweiss fluoreszierend (N 4600–5400 K)',
'exif-lightsource-14' => 'Kaltweiss fluoreszierend (W 3900–4500 K)',
'exif-lightsource-15' => 'Weiss fluoreszierend (WW 3200–3700 K)',

# Special:FileDuplicateSearch
'fileduplicatesearch-info' => '$1 × $2 Pixel<br />Dateigrösse: $3<br />MIME-Typ: $4',

# External image whitelist
'external_image_whitelist' => ' #Diese Zeile nicht verändern<pre>
#Untenstehend können Fragmente regulärer Ausdrücke (der Teil zwischen den //) eingegeben werden.
#Diese werden mit den URLs von Bildern aus externen Quellen verglichen
#Ein positiver Vergleich führt zur Anzeige des Bildes, andernfalls wird das Bild nur als Link angezeigt
#Zeilen, die mit einem # beginnen, werden als Kommentar behandelt
#Es wird nicht zwischen Gross- und Kleinschreibung unterschieden

#Fragmente regulärer Ausdrücke nach dieser Zeile eintragen. Diese Zeile nicht verändern</pre>',

);
