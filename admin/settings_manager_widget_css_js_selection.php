<?php
#Widgets werden nicht aktiviert.
$widget_akti = @$modulname == 'footer'
                || @$modulname == 'navigation_default'
                || @$modulname == 'navigation_agency'
                || @$modulname == 'navigation_nor_navbar'
                || @$modulname == 'navigation_sticky'
                || @$modulname == 'navigation_verdux_navbar'
                || @$modulname == 'navigation_skewed'
                || @$modulname == 'navigation_2one'
                || @$modulname == 'nor_box'
                || @$modulname == 'socialmedia'
                || @$modulname == 'messenger' /*prüfen*/
                || @$modulname == 'parallax_header'
                || @$modulname == 'carousel'
                || @$modulname == 'facebook'
                || @$modulname == 'tags'
                || @$modulname == 'ts3viewer'
                || @$modulname == 'tsviewer'
                || @$modulname == 'userrights' /*prüfen adminbereich*/
                || @$modulname == 'facts'
                || @$modulname == 'gametracker_ts'
                || @$modulname == 'gametracker_server'
                || @$modulname == 'useronline'
                || @$modulname == 'bannerrotation'
                || @$modulname == 'breaking_news'
                || @$modulname == 'cashbox'
                || @$modulname == 'media'
                || @$modulname == 'projectslider'
                || @$modulname == 'summary'
                || @$modulname == 'textslider'
                || @$modulname == 'picupdate'
                || @$modulname == 'lastlogin'
                || @$modulname == 'about_box'
                || @$modulname == 'features'
                || @$modulname == 'features_box';

# Bei diesen Plugins werden die css und js bei der Widget-Zuweisung extra geladen!

$widget_css = @$modulname == 'footer'
                || @$modulname == 'navigation_default'
                || @$modulname == 'navigation_agency'
                || @$modulname == 'navigation_nor_navbar'
                || @$modulname == 'navigation_sticky'
                || @$modulname == 'navigation_verdux_navbar'
                || @$modulname == 'navigation_skewed'
                || @$modulname == 'navigation_2one'
                || @$modulname == 'nor_box'
                || @$modulname == 'socialmedia'
                || @$modulname == 'messenger' /*prüfen*/
                || @$modulname == 'parallax_header'
                || @$modulname == 'carousel'
                || @$modulname == 'facebook'
                || @$modulname == 'tags'
                || @$modulname == 'ts3viewer'
                || @$modulname == 'tsviewer'
                || @$modulname == 'userrights' /*prüfen adminbereich*/
                || @$modulname == 'facts'
                || @$modulname == 'gametracker_ts'
                || @$modulname == 'gametracker_server'
                || @$modulname == 'useronline'
                || @$modulname == 'bannerrotation'
                || @$modulname == 'breaking_news'
                || @$modulname == 'cashbox'
                || @$modulname == 'media'
                || @$modulname == 'projectslider'
                || @$modulname == 'summary'
                || @$modulname == 'textslider'
                || @$modulname == 'picupdate'
                || @$modulname == 'lastlogin'
                || @$modulname == 'about_box'
                || @$modulname == 'features'
                || @$modulname == 'features_box';
# Bei diesen Plugins werden die css und js bei der Widget-Zuweisung geladen ja / nein! END


                
#Widgets bekommen keinen Navigationseintrag
$widget_nav = @$modulname == 'footer'
                || @$modulname == 'navigation_default'
                || @$modulname == 'navigation_agency'
                || @$modulname == 'navigation_nor_navbar'
                || @$modulname == 'navigation_sticky'
                || @$modulname == 'navigation_skewed'
                || @$modulname == 'navigation_2one'
                || @$modulname == 'nor_box'
                || @$modulname == 'socialmedia'
                || @$modulname == 'messenger' /*prüfen*/
                || @$modulname == 'parallax_header'
                || @$modulname == 'carousel'
                || @$modulname == 'facebook'
                || @$modulname == 'tags'
                || @$modulname == 'ts3viewer'
                || @$modulname == 'tsviewer'
                || @$modulname == 'userrights' /*prüfen adminbereich*/
                || @$modulname == 'facts'
                || @$modulname == 'gametracker_ts'
                || @$modulname == 'gametracker_server'
                || @$modulname == 'useronline'
                || @$modulname == 'bannerrotation'
                || @$modulname == 'breaking_news'
                || @$modulname == 'cashbox'
                || @$modulname == 'media'
                || @$modulname == 'projectslider'
                || @$modulname == 'summary'
                || @$modulname == 'textslider'
                || @$modulname == 'picupdate'
                || @$modulname == 'lastlogin'
                || @$modulname == 'about_box'
                || @$modulname == 'news_manager' /*prüfen*/
                || @$modulname == 'clanwars' /*prüfen*/
                || @$modulname == 'features'
                || @$modulname == 'features_box'
                || @$modulname == 'useraward';                

?>        