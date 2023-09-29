<?php

# Widget Bereich Auswahl funktioniert nicht

        #$ds = mysqli_fetch_array(safe_query("SELECT * FROM " . PREFIX . "settings_plugins"));

####################  widget_link1 ############################## 

        if($ds[ 'widget_link1' ] == 'widget_discord_sidebar'
                
                || $ds[ 'widget_link1' ] == 'widget_about_us_sidebar') {

        $widget1 = '<option value="">Widget Bereich auswählen ...</option>
                    <option value="left_side_widget">Page Left</option>
                    <option value="right_side_widget">Page Right</option>'; 

       


        }else if($ds[ 'widget_link1' ] == 'widget_navigation_default'
                || $ds[ 'widget_link1' ] == 'navigation_2one'
                || $ds[ 'widget_link1' ] == 'navigation_agency'
                || $ds[ 'widget_link1' ] == 'navigation_nor_navbar'
                || $ds[ 'widget_link1' ] == 'navigation_partner'
                || $ds[ 'widget_link1' ] == 'navigation_sticky_navbar' ) {           

        $widget1 = '<option value="">Widget Bereich auswählen ...</option>
                <option value="page_navigation_widget">Navigation</option>';  
        

        }else if($ds[ 'widget_link1' ] == 'widget_breaking_news_content'               
                || $ds[ 'widget_link1' ] == 'widget_joinus_content') {

        $widget1 = '<option value="">Widget Bereich auswählen ...</option>
                    <option value="head_section_widget">Head Section</option>
                    <option value="center_head_widget">Content Head</option>                    
                    <option value="center_footer_widget">Content Foot</option>
                    <option value="foot_section_widget">Foot Section</option>';

        }else if($ds[ 'widget_link1' ] == 'widget_default_footer_content' ) {
            
        $widget1 = '<option value="">Widget Bereich auswählen ...</option>
                   <option value="page_footer_widget">Page Footer</option>';

        }else if($ds[ 'widget_link1' ] == 'widget_carousel_content') {

        $widget1 = '<option value="">Widget Bereich auswählen ...</option>
                    <option value="page_head_widget">Page Head</option>';
                                

        }else{    

        $widget1 = '<option value="">Widget Bereich auswählen ...</option>
                    <option value="page_navigation_widget">Navigation</option>
                    <option value="page_head_widget">Page Head</option>
                    <option value="head_section_widget">Head Section</option>
                    <option value="center_head_widget">Content Head</option>
                    <option value="left_side_widget">Page Left</option>
                    <option value="right_side_widget">Page Right</option>
                    <option value="center_footer_widget">Content Foot</option>
                    <option value="foot_section_widget">Foot Section</option>';        
        } 
        
        print_r($ds[ 'modulname' ]);

####################  widget_link2 ##############################     

       if($ds[ 'widget_link2' ] == 'widget_about_us_content' ) { 

        $widget2 = '<option value="">Widget Bereich auswählen ...</option>
                    <option value="head_section_widget">Head Section</option>
                    <option value="center_head_widget">Content Head</option>
                    
                    <option value="center_footer_widget">Content Foot</option>
                    <option value="foot_section_widget">Foot Section</option>'; 

       


        }else if(@$ds[ 'modulname' ] == 'navigation_default'
                || $ds[ 'modulname' ] == 'navigation_2one'
                || $ds[ 'modulname' ] == 'navigation_agency'
                || $ds[ 'modulname' ] == 'navigation_nor_navbar'
                || $ds[ 'modulname' ] == 'navigation_partner'
                || $ds[ 'modulname' ] == 'navigation_sticky_navbar' ) {           

        $widget2 = '<option value="">Widget Bereich auswählen ...</option>
                <option value="page_navigation_widget">Navigation</option>';

        }else if($ds[ 'widget_link2' ] == 'widget_easyfooter_content') {
            
        $widget2 = '<option value="">Widget Bereich auswählen ...</option>
                   <option value="page_footer_widget">Page Footer</option>';          
        
        }else{    

        $widget2 = '<option value="">Widget Bereich auswählen ...</option>
                    <option value="page_navigation_widget">Navigation</option>
                    <option value="page_head_widget">Page Head</option>
                    <option value="head_section_widget">Head Section</option>
                    <option value="center_head_widget">Content Head</option>
                    <option value="left_side_widget">Page Left</option>
                    <option value="right_side_widget">Page Right</option>
                    <option value="center_footer_widget">Content Foot</option>
                    <option value="foot_section_widget">Foot Section</option>';        
        } 


####################  widget_link3 ############################## 

        if($ds[ 'widget_link3' ] == 'widget_about_us_sidebar_verdux') {

        $widget3 = '<option value="">Widget Bereich auswählen ...</option>
                    <option value="left_side_widget">Page Left</option>
                    <option value="right_side_widget">Page Right</option>';

        }else if($ds[ 'widget_link3' ] == 'widget_plugin_footer_content') {
            
        $widget3 = '<option value="">Widget Bereich auswählen ...</option>
                   <option value="page_footer_widget">Page Footer</option>';               

        }else{    

        $widget3 = '<option value="">Widget Bereich auswählen ...</option>
                    <option value="page_navigation_widget">Navigation</option>
                    <option value="page_head_widget">Page Head</option>
                    <option value="head_section_widget">Head Section</option>
                    <option value="center_head_widget">Content Head</option>
                    <option value="left_side_widget">Page Left</option>
                    <option value="right_side_widget">Page Right</option>
                    <option value="center_footer_widget">Content Foot</option>
                    <option value="foot_section_widget">Foot Section</option>';        
        } 







