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

$language_array = array(

/* do not edit above this line */

  'access_denied'=>'Access denied',
  'actions'=>'Actions',
  'activate' => 'Activate Plugin',
  'theme_activate' => 'Assign Plugin',
  'theme_deactivate' => 'Reject Plugin',
  'activated' => 'Activated',
  'activated'=>'activated?',
  'add_modul'=>'add module',
  'add_plugin'=>'Add Plugin',
  'add_widget'=>'Assign Widget area',
  'add'=>'Add Plugin',
  'all_activated'=>'l. / r. activated',
  'all_deactivated'=>'Base activated',
  'back'=>'back',
  'base'=>'Base',
  'content_foot'=>'Content Foot',
  'content_head'=>'Content Head',
  'deactivate' => 'Plugin deaktivieren',
  'deactivated' => 'Deaktiviert',
  'deactivated'=>'deaktiviert',
  'delete' => 'remove setting',
  'description' => 'Description',
  'edit_modul' => 'Edit Module',
  'edit_plugin'=>'Change plugin and widget areas',
  'edit_widget'=>'Change widget area',
  'edit'=>'Change Settings',
  'edit_plugin_widget'=>'Change plugin and widget areas',
  'failed_activated' => '<div class="alert alert-warning" role="alert">Plugin activation failed.</div>',    
  'failed_deactivated' => '<div class="alert alert-warning" role="alert">Failed to disable plugin.</div>',    
  'failed_delete' => '<div class="alert alert-warning" role="alert">Failed to remove plugin.</div>',    
  'failed_edit' => '<div class="alert alert-warning" role="alert">Plugin could not be updated.</div>',
  'failed_save' => '<div class="alert alert-warning" role="alert">Could not save plugin.</div>',    
  'fields_star_required' => ' Required fields',
  'foot_section'=>'Foot Section',
  'head_section'=>'Head Section',
  'id' => 'ID',
  'info'=> '<div class="col-sm-6 alert alert-warning" role="alert"><small>
     <b>Module Page Name:</b> Name of the page for the setting<br>
     <b>Base enabled:</b> The left and right columns will be disabled and not visible<br>
     <b>Links enabled:</b> The left side (column) in the frontend is visible<br>
     <b>Right enabled:</b> The right side (column) in the frontend is visible<br>
     <b>Left and right enabled:</b> The left and right side (column) in the frontend is visible</small>
     </div>

     <div class="col-sm-6 alert alert-warning" role="alert"><small>
     <b>Page Head activated:</b> The head area is visible<br>
     <b>Content head activated:</b> The head is visible in the content (middle head area)<br>
     <b>Content foot activated:</b> The foot in the content (middle foot area) visible<br>
     <b>Head Section activated:</b> The Head Section area visible<br>
     <b>Content foot enabled:</b> The content foot area visible</small></div>',
  'left_is_activated'=>'Links activated',
  'left_page'=>'Page left',
  'left_right_page'=>'Page left right',
  'modul_edit'=>'Module Setting',
  'modul_info'=>'<span class="alert alert-warning" role="alert"><i class="fas fa-exclamation-triangle"></i> You need to add your installed plugins before you can do the module setting.</span >',
  'modulname'=>'Modulname',
  'na'=>'not available',
  'name' => 'Name',
  'new_modul'=>'Add Plugin',
  'new_plugin' => 'New Plugin',
  'no_modul_setup' => '<div class="alert alert-warning" role="alert">Description:<br>No plugin was found.</div>',
  'no'=>'No',
  'option' => 'Option',
  'options'=>'Options',
  'page_head'=>'Page Head',
  'plugin' => 'Plugin',
  'plugin_manager' => 'Plugin Manager',
  'read_more'=>'Read more',
  'really_delete1'=>'Are you sure you want to remove this plugin?<br><br>Only the entries in the Plugin Manager for the currently active template will be removed',
  'really_delete2'=>'removed.',
  'right_is_activated'=>'Activated on the right',
  'right_page'=>'Page right',
  'select' => 'Choose your plugin.',
  'status' => 'Status',
  'styles' => 'Styles',
  'success_activated' => '<div class="alert alert-success" role="alert">Plugin is now enabled.</div>',
  'success_deactivated' => '<div class="alert alert-info" role="alert">Plugin is now disabled.</div>',
  'success_delete' => '<div class="alert alert-danger" role="alert">The entries for the plugin have been removed.</div>',
  'success_edit' => '<div class="alert alert-success" role="alert">Plugin updated successfully.</div>',
  'success_save' => '<div class="alert alert-success" role="alert">Plugin saved successfully.</div>',
  'success_plugin_to_template_activate'=>'<div class="alert alert-success" role="alert">Assigned plugin to current template.</div>',
  'to_sort'=>'sort by',
  'transaction_invalid'=>'Transaction ID not valid',
  'wrote'=>'wrote',
  'yes'=>'Yes',
  'no_modul'=>'<div class="alert alert-warning" role="alert">No plugin found.</div>',
  'plugin_to_template_activate'=>'Assign to current template',
  'settings_are_not_available' => 'Plugin setting not present.',
  'reinstall_plugin' => 'Install settings',

  'tooltip_1' => 'Plugin is activated for all templates',
  'tooltip_2' => 'Plugin will be disabled for all templates',
  'tooltip_3' => 'Plugin settings are installed for the activated template',
  'tooltip_4' => 'Change plugin settings for the activated template',
  'tooltip_5' => 'Plugin settings are added for the current template',
  'tooltip_6' => 'Plugin settings are removed for the current template',

  'info' => 'The requested page could not be found. <i><b>Activate a template in the dashboard!</b></i>',
  'activate_template' => 'Activate Template',

  'really_delete3'=>'Are you sure you want to remove this plugin?<br><br>Only the entries in the Plugin Manager for the currently active template will be deleted',  

);

