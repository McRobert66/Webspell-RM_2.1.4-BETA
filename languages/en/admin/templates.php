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

  'access_denied'=>'Access denied',
  'title' => 'Template setting',
  'styles' => 'Styles',
  'id' => 'ID',
  'template_name' => 'Template Name',
  'template_name_info' => '(Folder name in which the template is located / note upper and lower case)',
  'template_address' => 'Template Address',
  'new_template' => 'New Template',
  'edit_template'=>'Change Template / Style',
  'edit_template_back'=>'Change Template / Style and back',
  'template'=>'Template',
  'active' => 'Activated',
  'delete'=>'delete',
  'edit'=>'edit',
  'template_edit'=>'change Layout',
  'actions'=>'Actions',
  'active_on' => 'Activates &nbsp;&nbsp;&nbsp;',
  'active_off' => 'Disabled',
  'express_setting' => 'Express Setting',
  'add_template'=>'Add Template',
  'banner'=>'Banner',
  'banner_to_big'=>'Banner is too big',
  'image_too_big'=>'Logo is too big',
  'current_banner'=>'Current Logo in the Navigation',
  'login_banner'=>'Current background image of the login page',
  'format_incorrect'=>'The format of the banner was wrong. Please only upload banners in *.gif, *.jpg or *.png format.',
  'stylesheet'=>'Stylesheet',
  'stylesheet_info'=>'Don`t delete classes unless you`re 100 percent sure what you`re doing with them!',
  'yes'=>'Yes',
  'no'=>'No',
  'really_delete'=>'Really delete this template?',
  'transaction_invalid'=>'Transaction ID not valid',
  'options'=>'Options',
  'modulname' => 'Modulname',
  'modulname_info' => '(Used to uninstall)',
  'version' => 'Version',
  'template_design' => 'change Style',
  'template_design_info' => ' (Here you can adjust the design / style and have access to the global structure and formatting of your website. The design wizard gives you access to the corresponding areas or navigation, body, typography, footer and button.)',
  'template_active'=>'Activate Template',


  'tooltip_1'=>'Navigation background color',
  'tooltip_2'=>'Font size of the navigation',
  'tooltip_3'=>'Border height above navigation',
  'tooltip_4'=>'Border color above the navigation',
  'tooltip_5'=>'Color a:link - a normal unvisited link of the navigation',
  'tooltip_6'=>'Color a:hover - a link when the user moves the mouse over the navigation',
  'tooltip_7'=>'Color bg a:hover - the background on a link when the user hovers the mouse over the navigation',

  'tooltip_8'=>'Color Sub a:link - a normal unvisited sub-navigation link',
  'tooltip_9'=>'Color Sub a:hover - a link when the user moves the mouse over the sub-navigation',
  'tooltip_10'=>'Background color of the sub-navigation',
  'tooltip_11'=>'Color Sub bg a:hover - the background on a link when the user mouses over the sub-navigation',

  'tooltip_12'=>'Your website name (or leave blank to hide)',
  'tooltip_13'=>'Website tagline (or leave blank to show nothing)',
  'tooltip_14'=>'Color to overlay the login background image',
  'tooltip_15'=>'Font color on the left side of the login page',

  'tooltip_16'=>'Template with all folders and data will be deleted',

  'really_delete_background_pic'=>'Really delete this background picture?',
  'background_pic'=>'Background Picture',
  'delete_background_pic'=>'Delete Background Picture',
  'pfad'=>'Path',
  'pfad_info'=>'(Required for installation)'
);
