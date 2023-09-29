<?php
/**
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*  
 *                                    Webspell-RM      /                        /   /                                                 *
 *                                    -----------__---/__---__------__----__---/---/-----__---- _  _ -                                *
 *                                     | /| /  /___) /   ) (_ `   /   ) /___) /   / __  /     /  /  /                                 *
 *                                    _|/_|/__(___ _(___/_(__)___/___/_(___ _/___/_____/_____/__/__/_                                 *
 *                                                 Free Content / Management System                                                   *
 *                                                             /                                                                      *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @version         Webspell-RM                                                                                                       *
 *                                                                                                                                    *
 * @copyright       2018-2022 by webspell-rm.de <https://www.webspell-rm.de>                                                          *
 * @support         For Support, Plugins, Templates and the Full Script visit webspell-rm.de <https://www.webspell-rm.de/forum.html>  *
 * @WIKI            webspell-rm.de <https://www.webspell-rm.de/wiki.html>                                                             *
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @license         Script runs under the GNU GENERAL PUBLIC LICENCE                                                                  *
 *                  It's NOT allowed to remove this copyright-tag <http://www.fsf.org/licensing/licenses/gpl.html>                    *
 *                                                                                                                                    *
 * @author          Code based on WebSPELL Clanpackage (Michael Gruber - webspell.at)                                                 *
 * @copyright       2005-2018 by webspell.org / webspell.info                                                                         *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 */

$language_array = Array(

/* do not edit above this line */

	'access_denied'=>'Zugriff verweigert',
  'title' => 'Templates Einstellung',
	'styles' => 'Stile',
	'id' => 'ID',
  'template_name' => 'Template Name',
  'template_name_info' => '(Ordnername in dem sich das Template befindet / Groß/Kleinschreibung beachten)',
	'template_address' => 'Template Adresse',
	'new_template' => 'Neues Template',
	'edit_template'=>'Template / Style ändern',
  'edit_template_back'=>'Template / Style ändern und zurück',
	'template'=>'Template',
  'active' => 'Aktiviert',
	'delete'=>'löschen',
  'edit'=>'ändern',
  'template_edit'=>'Layout ändern',
  'actions'=>'Aktionen',
  'active_on' => 'Aktiviert&nbsp;&nbsp;&nbsp;',
  'active_off' => 'Deaktiviert',
  'express_setting' => 'Express Setting',
  'add_template'=>'Template hinzufügen',
  'banner'=>'Banner',
  'banner_to_big'=>'Banner ist zu groß',
   'image_too_big'=>'Logo ist zu groß',
  'current_banner'=>'Aktuelles Logo in der Navigation',
  'login_banner'=>'Aktuelles Hintergrungbild der Loginseite',
  'format_incorrect'=>'Das Format des Banner war falsch. Bitte lade nur Banner im *.gif, *.jpg oder *.png Format hoch.',
  'stylesheet'=>'Stylesheet',
  'stylesheet_info'=>'Lösche keine Klassen, wenn du nicht 100%ig sicher bist, was du damit tust!',
  'yes'=>'Ja',
  'no'=>'no',
  'really_delete'=>'Dieses Template wirklich löschen?',
  'transaction_invalid'=>'Transaktions ID ungültig',
  'options'=>'Optionen',
  'modulname' => 'Modulname',
  'modulname_info' => '(Wird zum Deinstallieren verwendet)',
  'version' => 'Version',
  'template_design' => 'Style ändern',
  'template_design_info' => ' (Hier könnt ihr das Design / Style anpassen und habt Zugriff auf die globale Struktur und Formatierung Eurer Webseite. Der Designwizard gibt Euch den Zugriff auf die entsprechenden Bereiche bzw. Navigation, Body, Typography, Footer und Button.)',
  'template_active'=>'Template aktivieren',


  'tooltip_1'=>'Navigation Hintergrundfarbe',
  'tooltip_2'=>'Schriftgröße der Navigation',
  'tooltip_3'=>'Border-Höhe über der Navigation',
  'tooltip_4'=>'Border-Farbe über der Navigation',
  'tooltip_5'=>'Farbe a:link - ein normaler, unbesuchter Link der Navigation',
  'tooltip_6'=>'Farbe a:hover - ein Link, wenn der Benutzer die Maus darüber bewegt der Navigation',
  'tooltip_7'=>'Farbe bg a:hover - der Hintergrund bei einem Link, wenn der Benutzer die Maus darüber bewegt der Navigation',

  'tooltip_8'=>'Farbe Sub a:link - ein normaler, unbesuchter Link der Sub-Navigation',
  'tooltip_9'=>'Farbe Sub a:hover - ein Link, wenn der Benutzer die Maus darüber bewegt der Sub-Navigation',
  'tooltip_10'=>'Hintergrundfarbe der Sub-Navigation',
  'tooltip_11'=>'Farbe Sub bg a:hover - der Hintergrund bei einem Link, wenn der Benutzer die Maus darüber bewegt der Sub-Navigation',

  'tooltip_12'=>'Name deiner Webseite (oder leer lassen für nichts anzeigen)',
  'tooltip_13'=>'Slogan der Webseite (oder leer lassen für nichts anzeigen)',
  'tooltip_14'=>'Farbe die über das Login-Hintergrungbild gelegt wird',
  'tooltip_15'=>'Schriftfarbe auf der linken Seite der Loginpage',

  'tooltip_16'=>'Template mit allen Ordnern und Daten werden gelöscht',

  'really_delete_background_pic'=>'Dieses Background Picture wirklich löschen?',
  'background_pic'=>'Background Picture',
  'delete_background_pic'=>'Background Picture löschen'
);
