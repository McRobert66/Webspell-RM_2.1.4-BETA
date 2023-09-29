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
global $myclanname;
$ergebnis = safe_query("SELECT * FROM `".PREFIX."settings_social_media`");
if(mysqli_num_rows($ergebnis)){
    while ($ds = mysqli_fetch_array($ergebnis)) {
        $since=$ds['since'];

        if ($ds[ 'twitch' ] != '') {
            if (stristr($ds[ 'twitch' ], "https://")) {
                $twitch = '<a class="twitch" href="' . htmlspecialchars($ds[ 'twitch' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-twitch fa-2x"></i></a>';//https
            } else {
                $twitch = '<a class="twitch" href="http://' . htmlspecialchars($ds[ 'twitch' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-twitch fa-2x"></i></a>';//http
            }
        } else {
            $twitch = '';
        }

        if ($ds[ 'facebook' ] != '') {
            if (stristr($ds[ 'facebook' ], "https://")) {
                $facebook = '<a class="facebook" href="' . htmlspecialchars($ds[ 'facebook' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-facebook fa-2x"></i></a>';//https
            } else {
                $facebook = '<a class="facebook" href="http://' . htmlspecialchars($ds[ 'facebook' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-facebook fa-2x"></i></a>';//http
            }
        } else {
            $facebook = '';
        }

        if ($ds[ 'twitter' ] != '') {
            if (stristr($ds[ 'twitter' ], "https://")) {
                $twitter = '<a class="twitter" href="' . htmlspecialchars($ds[ 'twitter' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-twitter fa-2x"></i></a>';//https
            } else {
                $twitter = '<a class="twitter" href="http://' . htmlspecialchars($ds[ 'twitter' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-twitter fa-2x"></i></a>';//http
            }
        } else {
            $twitter = '';
        }

        if ($ds[ 'youtube' ] != '') {
            if (stristr($ds[ 'youtube' ], "https://")) {
                $youtube = '<a class="youtube" href="' . htmlspecialchars($ds[ 'youtube' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-youtube fa-2x"></i></a>';//https
            } else {
                $youtube = '<a class="youtube" href="http://' . htmlspecialchars($ds[ 'youtube' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-youtube fa-2x"></i></a>';//http
            }
        } else {
            $youtube = '';
        }

        if ($ds[ 'rss' ] != '') {
            if (stristr($ds[ 'rss' ], "https://")) {
                $rss = '<a class="rss" href="' . htmlspecialchars($ds[ 'rss' ]) . '" target="_blank" rel="nofollow"><i class="fas fa-rss fa-2x"></i></a>';//https
            } else {
                $rss = '<a class="rss" href="http://' . htmlspecialchars($ds[ 'rss' ]) . '" target="_blank" rel="nofollow"><i class="fas fa-rss fa-2x"></i></a>';//http
            }
        } else {
            $rss = '';
        }

        if ($ds[ 'vine' ] != '') {
            if (stristr($ds[ 'vine' ], "https://")) {
                $vine = '<a class="vine" href="' . htmlspecialchars($ds[ 'vine' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-vine fa-2x"></i></a>';//https
            } else {
                $vine = '<a class="vine" href="http://' . htmlspecialchars($ds[ 'vine' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-vine fa-2x"></i></a>';//http
            }
        } else {
            $vine = '';
        }

        if ($ds[ 'flickr' ] != '') {
            if (stristr($ds[ 'flickr' ], "https://")) {
                $flickr = '<a class="flickr" href="' . htmlspecialchars($ds[ 'flickr' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-flickr fa-2x"></i></a>';//https
            } else {
                $flickr = '<a class="flickr" href="http://' . htmlspecialchars($ds[ 'flickr' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-flickr fa-2x"></i></a>';//http
            }
        } else {
            $flickr = '';
        }

        if ($ds[ 'linkedin' ] != '') {
            if (stristr($ds[ 'linkedin' ], "https://")) {
                $linkedin = '<a class="linkedin" href="' . htmlspecialchars($ds[ 'linkedin' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in fa-2x"></i></a>';//https
            } else {
                $linkedin = '<a class="linkedin" href="http://' . htmlspecialchars($ds[ 'linkedin' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in fa-2x"></i></a>';//http
            }
        } else {
            $linkedin = '';
        }

        if ($ds[ 'instagram' ] != '') {
            if (stristr($ds[ 'instagram' ], "https://")) {
                $instagram = '<a class="instagram" class="url-link" href="' . htmlspecialchars($ds[ 'instagram' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-instagram fa-2x"></i></a>';//https
            } else {
                $instagram = '<a class="instagram" class="url-link" href="http://' . htmlspecialchars($ds[ 'instagram' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-instagram fa-2x"></i></a>';//http
            }
        } else {
            $instagram = '';
        }

        if ($ds[ 'steam' ] != '') {
            if (stristr($ds[ 'steam' ], "https://")) {
                $steam = '<a class="steam" href="' . htmlspecialchars($ds[ 'steam' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-steam fa-2x"></i></a>';//https
        } else {
                $steam = '<a class="steam" href="http://' . htmlspecialchars($ds[ 'steam' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-steam fa-2x"></i></a>';//http
            }
        } else {
            $steam = '';
        }

        if ($ds[ 'discord' ] != '') {
            if (stristr($ds[ 'discord' ], "https://")) {
                $discord = '<a class="discord" href="' . htmlspecialchars($ds[ 'discord' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-discord fa-2x"></i></a>';//https
            } else {
                $discord = '<a class="discord" href="http://' . htmlspecialchars($ds[ 'discord' ]) . '" target="_blank" rel="nofollow"><i class="fab fa-discord fa-2x"></i></a>';//http
            }
        } else {
            $discord = '';
        }
    }

    // Prüfen ob Social gesetzt ist
    if($twitch == "") { $data_array['social1'] = "invisible"; } else { $data_array['social1'] = "visible"; }
    if($facebook == "") { $data_array['social2'] = "invisible"; } else { $data_array['social2'] = "visible"; }
    if($twitter == "") { $data_array['social3'] = "invisible"; } else { $data_array['social3'] = "visible"; }
    if($youtube == "") { $data_array['social4'] = "invisible"; } else { $data_array['social4'] = "visible"; }
    if($rss == "") { $data_array['social5'] = "invisible"; } else { $data_array['social5'] = "visible"; }
    if($vine == "") { $data_array['social6'] = "invisible"; } else { $data_array['social6'] = "visible"; }
    if($flickr == "") { $data_array['social7'] = "invisible"; } else { $data_array['social7'] = "visible"; }
    if($linkedin == "") { $data_array['social8'] = "invisible"; } else { $data_array['social8'] = "visible"; }
    if($instagram == "") { $data_array['social9'] = "invisible"; } else { $data_array['social9'] = "visible"; }
    if($steam == "") { $data_array['social10'] = "invisible"; } else { $data_array['social10'] = "visible"; }
    if($discord == "") { $data_array['social11'] = "invisible"; } else { $data_array['social11'] = "visible"; }
}

echo'<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="Website using webSPELL-RM CMS">
	<meta name="keywords" content="Clandesign, Webspell, Webspell | RM, Wespellanpassungen, Webdesign, Tutorials, Downloads, Webspell-rm, rm, addon, plugin, Templates Webspell Addons, Webspell-rm, rm, plungin, mods, Wespellanpassungen, Modifikationen und Anpassungen und mehr!">
    <meta name="robots" content="all">
    <meta name="abstract" content="Anpasser an Webspell | RM">
    <meta name="copyright" content="Copyright &copy; 2017-2019 by webspell-rm.de">
    <meta name="author" content="webspell-rm.de">
    <meta name="revisit-After" content="1days">
    <meta name="distribution" content="global">
    <link rel="SHORTCUT ICON" href="/includes/themes/default/templates/favicon.ico">

    <title>'.$pagetitle.'</title>
    <base href="$rewriteBase">
    <link href="../components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../components/css/lockpage.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="../components/fontawesome/css/all.css" />
    
</head>

<body>

<header id="header" class="text-center">

<img src="images/webspell-logo-lock.png" alt="" style="height: 150px"/>

</header>

<main id="main" class="container text-center">
<div class="row justify-content-center">
    <h2>
We’re Launching Our Website Soon
</h2></div>
</main>

<section id="about" class="about">

<div class="container login_card text-center">

<!--<h3>'.$pagetitle.'</h3>-->
                    <h5>Information</h5>
  <div class="row justify-content-center">
    <div class="col-4" style="background: #fff;color: #000">
      <p>'.$reason.'</p>
    </div>
    
  </div>

</div>


</section>



<section id="contact" class="contact text-center">
<div class="card container login_card text-center">
                    <div class="card-body">
<h3>Admin Login</h3>

<form class="row g-3 form-inlin justify-content-center" method="post" name="login" action="/includes/modules/checklogin.php">
                      <div class="col-auto">
                        <label for="staticEmail2" class="visually-hidden">Email</label>
                        <input name="ws_user" type="text"  class="form-control" placeholder="Enter email">
                      </div>
                      <div class="col-auto">
                        <label for="inputPassword2" class="visually-hidden">Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                      </div>
                      <div class="col-auto">
                        <button type="submit" name="Submit" class="btn btn-success ">Login</button>
                      </div>
                    </form>
                    </div></div>
</section>

<section id="social" class="social">
                    <div class="social-links text-center">
                    <h4>Follow us<small> on Social Media</small></h4>
        
                        <span class="social1 social-media-circle twitch">'.$twitch.'</span>
                        <span class="social2 social-media-circle facebook">'.$facebook.'</span>
                        <span class="social3 social-media-circle twitter">'.$twitter.'</span>
                        <span class="social4 social-media-circle youtube">'.$youtube.'</span>
                        <span class="social5 social-media-circle rss">'.$rss.'</span>
                        <span class="social6 social-media-circle vine">'.$vine.'</span>
                        <span class="social7 social-media-circle flickr">'.$flickr.'</span>
                        <span class="social8 social-media-circle linkedin">'.$linkedin.'</span>
                        <span class="social9 social-media-circle instagram">'.$instagram.'</span>
                        <span class="social10 social-media-circle steam">'.$steam.'</span>
                        <span class="social11 social-media-circle discord">'.$discord.'</span>
      </div>

                   


</section>

<section id="foot">

<footer class="footer">
  <div class="container text-center"><small>
        All content copyright '.$myclanname.'  &copy; Date | '.$since.' | All rights reserved.</small>
      
  </div>
</footer>

</section>
</body>
</html>';