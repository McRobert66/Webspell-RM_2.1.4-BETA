<?php

# Widget Bereich Auswahl / feste bereiche in dem ein Widget dargestellt werden kann und soll

####################  widget_link1 ############################## 

        if($ds[ 'widget_link1' ] == 'widget_discord_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_counter_sidebar'                
                || $ds[ 'widget_link1' ] == 'widget_about_us_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_calendar_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_forum_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_newsletter_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_partners_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_shoutbox_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_sponsors_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_blog_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_facebook_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_search_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_files_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_servers_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_videos_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_gallery_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_twitter_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_polls_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_gametracker_server_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_gametracker_ts_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_planning_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_mc_status_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_useronline_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_todo_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_tsviewer_sidebar'            
                || $ds[ 'widget_link1' ] == 'widget_clanwars_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_tags_sidebar'
                || $ds[ 'widget_link1' ] == 'widget_lastregistered'
                || $ds[ 'widget_link1' ] == 'widget_articles_sidebar') {

        $widget1 = '<option value="1">'.$_language->module[ 'select_widget_area' ].' ...</option>
                    <option value="left_side_widget">'.$_language->module[ 'left_sidebar_activated' ].'</option>
                    <option value="right_side_widget">'.$_language->module[ 'right_sidebar_activated' ].'</option>';

        }else if($ds[ 'widget_link1' ] == 'widget_'.$_language->module[ 'select_widget_navigation' ].'_default'
                || $ds[ 'widget_link1' ] == 'widget_'.$_language->module[ 'select_widget_navigation' ].'_2one'
                || $ds[ 'widget_link1' ] == 'widget_'.$_language->module[ 'select_widget_navigation' ].'_agency'
                || $ds[ 'widget_link1' ] == ''.$_language->module[ 'select_widget_navigation' ].'_nor_navbar'
                || $ds[ 'widget_link1' ] == ''.$_language->module[ 'select_widget_navigation' ].'_partner'
                || $ds[ 'widget_link1' ] == 'widget_'.$_language->module[ 'select_widget_navigation' ].'_sticky'
                || $ds[ 'widget_link1' ] == 'widget_'.$_language->module[ 'select_widget_navigation' ].'_vargul'
                || $ds[ 'widget_link1' ] == 'widget_'.$_language->module[ 'select_widget_navigation' ].'_skewed'
                || $ds[ 'widget_link1' ] == 'widget_'.$_language->module[ 'select_widget_navigation' ].'_2one') {           

        $widget1 = '<option value="1">'.$_language->module[ 'select_widget_area' ].'</option>
                <option value="page_'.$_language->module[ 'select_widget_navigation' ].'_widget">'.$_language->module[ 'select_widget_'.$_language->module[ 'select_widget_navigation' ].'' ].'</option>';  
        

        }else if($ds[ 'widget_link1' ] == 'widget_breaking_news_content'               
                || $ds[ 'widget_link1' ] == 'widget_joinus_content'
                || $ds[ 'widget_link1' ] == 'widget_news_content'
                || $ds[ 'widget_link1' ] == 'widget_squads_roster'
                || $ds[ 'widget_link1' ] == 'widget_bannerrotation_content'
                || $ds[ 'widget_link1' ] == 'widget_follow_us_content'
                || $ds[ 'widget_link1' ] == 'widget_portfolio_content'
                || $ds[ 'widget_link1' ] == 'widget_awards_content'
                || $ds[ 'widget_link1' ] == 'widget_cup_nextmatches_content'
                || $ds[ 'widget_link1' ] == 'widget_one_box_content'
                || $ds[ 'widget_link1' ] == 'widget_facts_content'
                || $ds[ 'widget_link1' ] == 'widget_media_content'
                || $ds[ 'widget_link1' ] == 'widget_streams_content'
                || $ds[ 'widget_link1' ] == 'widget_ts3viewer_content'
                || $ds[ 'widget_link1' ] == 'widget_textslider_content'
                || $ds[ 'widget_link1' ] == 'widget_features_one_box_content'
                || $ds[ 'widget_link1' ] == 'widget_about_us_box'
                || $ds[ 'widget_link1' ] == 'widget_summary_news'
                || $ds[ 'widget_link1' ] == 'widget_projectslider_content') {

        $widget1 = '<option value="1">'.$_language->module[ 'select_widget_area' ].'</option>
                    <option value="head_section_widget">'.$_language->module[ 'headsection' ].'</option>
                    <option value="center_head_widget">'.$_language->module[ 'headcontent' ].'</option>                    
                    <option value="center_footer_widget">'.$_language->module[ 'footcontent' ].'</option>
                    <option value="foot_section_widget">'.$_language->module[ 'footselection' ].'</option>';

        }else if($ds[ 'widget_link1' ] == 'widget_default_footer_content' ) {
            
        $widget1 = '<option value="1">'.$_language->module[ 'select_widget_area' ].'</option>
                   <option value="page_footer_widget">'.$_language->module[ 'footpage' ].'</option>';

        }else if($ds[ 'widget_link1' ] == 'widget_parallax_header') {

        $widget1 = '<option value="1">'.$_language->module[ 'select_widget_area' ].'</option>
                    <option value="page_head_widget">'.$_language->module[ 'pagehead' ].'</option>';

        }else if($ds[ 'widget_link1' ] == 'widget_carousel_only') {

        $widget1 = '<option value="1">'.$_language->module[ 'select_widget_area' ].'</option>
                    <option value="page_head_widget">'.$_language->module[ 'pagehead' ].'</option>
                    <option value="head_section_widget">'.$_language->module[ 'headsection' ].'</option>
                    <option value="center_head_widget">'.$_language->module[ 'headcontent' ].'</option>                    
                    <option value="center_footer_widget">'.$_language->module[ 'footcontent' ].'</option>
                    <option value="foot_section_widget">'.$_language->module[ 'footselection' ].'</option>';
                                

        }else{    

        $widget1 = '<option value="1">'.$_language->module[ 'select_widget_area' ].' ...</option>
                    <option value="page_'.$_language->module[ 'select_widget_navigation' ].'_widget">'.$_language->module[ 'select_widget_navigation' ].'</option>
                    <option value="page_head_widget">'.$_language->module[ 'pagehead' ].'</option>
                    <option value="head_section_widget">'.$_language->module[ 'headsection' ].'</option>
                    <option value="center_head_widget">'.$_language->module[ 'headcontent' ].'</option>
                    <option value="left_side_widget">'.$_language->module[ 'left_sidebar_activated' ].'</option>
                    <option value="right_side_widget">'.$_language->module[ 'right_sidebar_activated' ].'</option>
                    <option value="center_footer_widget">'.$_language->module[ 'footcontent' ].'</option>
                    <option value="foot_section_widget">'.$_language->module[ 'footselection' ].'</option>';        
        } 
        
        

####################  widget_link2 ##############################     

       
        if($ds[ 'widget_link2' ] == 'widget_upcoming_sidebar') {

        $widget2 = '<option value="1">'.$_language->module[ 'select_widget_area' ].' ...</option>
                    <option value="left_side_widget">'.$_language->module[ 'left_sidebar_activated' ].'</option>
                    <option value="right_side_widget">'.$_language->module[ 'right_sidebar_activated' ].'</option>';

        }else if($ds[ 'widget_link2' ] == 'widget_socialmedia_vergul') {           

        $widget2 = '<option value="1">'.$_language->module[ 'select_widget_area' ].' ...</option>
                <option value="page_'.$_language->module[ 'select_widget_navigation' ].'_widget">'.$_language->module[ 'select_widget_navigation' ].'</option>';            

       }else if($ds[ 'widget_link2' ] == 'widget_about_us_content'
                || $ds[ 'widget_link2' ] == 'widget_newsletter_content'
                || $ds[ 'widget_link2' ] == 'widget_partners_content'
                || $ds[ 'widget_link2' ] == 'widget_squads_content'
                || $ds[ 'widget_link2' ] == 'widget_sponsors_content_one'
                || $ds[ 'widget_link2' ] == 'widget_socialmedia_content'
                || $ds[ 'widget_link2' ] == 'widget_videos_content'
                || $ds[ 'widget_link2' ] == 'widget_two_box_content'
                || $ds[ 'widget_link2' ] == 'widget_clanwars_content'
                || $ds[ 'widget_link2' ] == 'widget_news_headlines'
                || $ds[ 'widget_link2' ] == 'widget_features_two_box_content'
                || $ds[ 'widget_link2' ] == 'widget_about_sponsor_content'
                || $ds[ 'widget_link2' ] == 'widget_carousel_crossfade'
                || $ds[ 'widget_link2' ] == 'widget_summary_article') {

        $widget2 = '<option value="1">'.$_language->module[ 'select_widget_area' ].' ...</option>
                    <option value="page_head_widget">'.$_language->module[ 'pagehead' ].'</option>
                    <option value="head_section_widget">'.$_language->module[ 'headsection' ].'</option>
                    <option value="center_head_widget">'.$_language->module[ 'headcontent' ].'</option>                    
                    <option value="center_footer_widget">'.$_language->module[ 'footcontent' ].'</option>
                    <option value="foot_section_widget">'.$_language->module[ 'footselection' ].'</option>';

        }else if($ds[ 'widget_link2' ] == 'widget_easyfooter_content') {
            
        $widget2 = '<option value="1">'.$_language->module[ 'select_widget_area' ].' ...</option>
                   <option value="page_footer_widget">'.$_language->module[ 'footpage' ].'</option>';          
        
        }else{    

        $widget2 = '<option value="1">'.$_language->module[ 'select_widget_area' ].' ...</option>
                    <option value="page_'.$_language->module[ 'select_widget_navigation' ].'_widget">'.$_language->module[ 'select_widget_navigation' ].'</option>
                    <option value="page_head_widget">'.$_language->module[ 'pagehead' ].'</option>
                    <option value="head_section_widget">'.$_language->module[ 'headsection' ].'</option>
                    <option value="center_head_widget">'.$_language->module[ 'headcontent' ].'</option>
                    <option value="left_side_widget">'.$_language->module[ 'left_sidebar_activated' ].'</option>
                    <option value="right_side_widget">'.$_language->module[ 'right_sidebar_activated' ].'</option>
                    <option value="center_footer_widget">'.$_language->module[ 'footcontent' ].'</option>
                    <option value="foot_section_widget">'.$_language->module[ 'footselection' ].'</option>';        
        } 


####################  widget_link3 ############################## 

        if($ds[ 'widget_link3' ] == 'widget_about_us_sidebar_verdux'
                || $ds[ 'widget_link3' ] == 'widget_squads_sidebar'
                || $ds[ 'widget_link3' ] == 'widget_facebook_sidebar_verdux'
                || $ds[ 'widget_link3' ] == 'widget_videos_sidebar_coincidence') {

        $widget3 = '<option value="1">'.$_language->module[ 'select_widget_area' ].'</option>
                    <option value="left_side_widget">'.$_language->module[ 'left_sidebar_activated' ].'</option>
                    <option value="right_side_widget">'.$_language->module[ 'right_sidebar_activated' ].'</option>';

        }else if($ds[ 'widget_link3' ] == 'widget_social-sidebar_content'
                || $ds[ 'widget_link3' ] == 'widget_footer_box_content'
                || $ds[ 'widget_link3' ] == 'widget_features_three_box_content'            
                || $ds[ 'widget_link3' ] == 'widget_sponsors_content_two'
                || $ds[ 'widget_link3' ] == 'widget_news_headlines_2') {

        $widget3 = '<option value="1">'.$_language->module[ 'select_widget_area' ].'</option>
                    <option value="page_head_widget">'.$_language->module[ 'pagehead' ].'</option>
                    <option value="head_section_widget">'.$_language->module[ 'headsection' ].'</option>
                    <option value="center_head_widget">'.$_language->module[ 'headcontent' ].'</option>                    
                    <option value="center_footer_widget">'.$_language->module[ 'footcontent' ].'</option>
                    <option value="foot_section_widget">'.$_language->module[ 'footselection' ].'</option>';

        }else if($ds[ 'widget_link3' ] == 'widget_plugin_footer_content'
                || $ds[ 'widget_link3' ] == 'widget_footer_vargul') {
            
        $widget3 = '<option value="1">'.$_language->module[ 'select_widget_area' ].'</option>
                   <option value="page_footer_widget">'.$_language->module[ 'footpage' ].'</option>';               

        }else{    

        $widget3 = '<option value="1">'.$_language->module[ 'select_widget_area' ].'</option>
                    <option value="page_'.$_language->module[ 'select_widget_navigation' ].'_widget">'.$_language->module[ 'select_widget_navigation' ].'</option>
                    <option value="page_head_widget">'.$_language->module[ 'pagehead' ].'</option>
                    <option value="head_section_widget">'.$_language->module[ 'headsection' ].'</option>
                    <option value="center_head_widget">'.$_language->module[ 'headcontent' ].'</option>
                    <option value="left_side_widget">'.$_language->module[ 'left_sidebar_activated' ].'</option>
                    <option value="right_side_widget">'.$_language->module[ 'right_sidebar_activated' ].'</option>
                    <option value="center_footer_widget">'.$_language->module[ 'footcontent' ].'</option>
                    <option value="foot_section_widget">'.$_language->module[ 'footselection' ].'</option>';        
        } 







