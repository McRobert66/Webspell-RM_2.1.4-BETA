<?php
/*¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯\
| _    _  ___  ___  ___  ___  ___  __    __      ___   __  __       |
|( \/\/ )(  _)(  ,)/ __)(  ,\(  _)(  )  (  )    (  ,) (  \/  )      |
| \    /  ) _) ) ,\\__ \ ) _/ ) _) )(__  )(__    )  \  )    (       |
|  \/\/  (___)(___/(___/(_)  (___)(____)(____)  (_)\_)(_/\/\_)      |
|                       ___          ___                            |
|                      |__ \        / _ \                           |
|                         ) |      | | | |                          |
|                        / /       | | | |                          |
|                       / /_   _   | |_| |                          |
|                      |____| (_)   \___/                           |
\___________________________________________________________________/
/                                                                   \
|        Copyright 2005-2018 by webspell.org / webspell.info        |
|        Copyright 2018-2019 by webspell-rm.de                      |
|                                                                   |
|        - Script runs under the GNU GENERAL PUBLIC LICENCE         |
|        - It's NOT allowed to remove this copyright-tag            |
|        - http://www.fsf.org/licensing/licenses/gpl.html           |
|                                                                   |
|               Code based on WebSPELL Clanpackage                  |
|                 (Michael Gruber - webspell.at)                    |
\___________________________________________________________________/
/                                                                   \
|                     WEBSPELL RM Version 2.0                       |
|           For Support, Mods and the Full Script visit             |
|                       webspell-rm.de                              |
\__________________________________________________________________*/
$pm = new plugin_manager(); 
$plugin_language = $pm->plugin_language("footer", $plugin_path);

$title = $plugin_language[ 'title' ]; #sc_datei Info

$ergebnis = safe_query("SELECT * FROM ".PREFIX."navigation_dashboard_links WHERE modulname='footer'");
    while ($db=mysqli_fetch_array($ergebnis)) {
      $accesslevel = 'is'.$db['accesslevel'].'admin';

if (!$accesslevel($userID) || mb_substr(basename($_SERVER[ 'REQUEST_URI' ]), 0, 15) != "admincenter.php") {
    die($plugin_language[ 'access_denied' ]);
}
}


if (isset($_GET[ 'action' ])) {
    $action = $_GET[ 'action' ];
} else {
    $action = '';
}

if ($action == "add") {
    $CAPCLASS = new \webspell\Captcha;
    $CAPCLASS->createTransaction();
    $hash = $CAPCLASS->getHash();
   
} 

elseif ($action == "edit") {
        

        $db = mysqli_fetch_array(safe_query(
            "SELECT * FROM " . PREFIX . "plugins_footer_target WHERE targetID='" . $_GET[ "footID" ] . "'"));

    $CAPCLASS = new \webspell\Captcha;
    $CAPCLASS->createTransaction();
    $hash = $CAPCLASS->getHash();

 

            if ($db['windows1'] == "1") {
                $windows_1 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_1 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows2'] == "1") {
                $windows_2 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_2 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows3'] == "1") {
                $windows_3 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_3 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows4'] == "1") {
                $windows_4 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_4 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows5'] == "1") {
                $windows_5 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_5 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows6'] == "1") {
                $windows_6 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_6 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows7'] == "1") {
                $windows_7 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_7 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows8'] == "1") {
                $windows_8 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_8 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows9'] == "1") {
                $windows_9 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_9 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows10'] == "1") {
                $windows_10 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_10 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows11'] == "1") {
                $windows_11 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_11 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows12'] == "1") {
                $windows_12 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_12 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows13'] == "1") {
                $windows_13 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_13 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows14'] == "1") {
                $windows_14 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_14 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows15'] == "1") {
                $windows_15 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_15 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows16'] == "1") {
                $windows_16 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_16 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows17'] == "1") {
                $windows_17 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_17 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

            if ($db['windows18'] == "1") {
                $windows_18 = '<option value="1" selected="selected">' . $plugin_language['_self'] .
                    '</option><option value="0">' . $plugin_language['_blank'] . '</option>';
            } else {
                $windows_18 = '<option value="1">' . $plugin_language['_self'] .
                    '</option><option value="0" selected="selected">' . $plugin_language['_blank'] . '</option>';
            }

$ds = mysqli_fetch_array(safe_query(
            "SELECT * FROM " . PREFIX . "plugins_footer WHERE footID='" . $_GET[ "footID" ] . "'"));   
      
echo '<div class="card">
    <div class="card-header"> <i class="fa fa-info-circle"></i> ' . $plugin_language[ 'title' ] . '
    </div>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="admincenter.php?site=admin_footer" class="white">' . $plugin_language[ 'title' ] . '</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
    <div class="card-body">';

    echo '<h3>Info <small>(Default Footer)</small></h3>


    <form action="admincenter.php?site=admin_footer" method="post" name="post" role="form"
            class="form-horizontal">


<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-1 control-label">About Us:</label>

                <div class="col-xs-12 col-md-11">
                    <textarea class="ckeditor" id="ckeditor" type="text" name="about" size="160" maxlength="255" style="height:200px;" value="'.getinput($ds['about']).'">'.$ds['about'].'</textarea>
                </div>
            </div>


<div class="row">
<div class="col-md-6">
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name:</label>

                <div class="col-xs-12 col-md-10">
                    
                    <input type="text" name="name" class="form-control" value="'.getinput($ds['name']).'">
                </div>
            </div>

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Straße:</label>

                <div class="col-xs-12 col-md-10">
                    
                    <input type="text" name="strasse" class="form-control" value="'.getinput($ds['strasse']).'">
                </div>
            </div>

</div>
<div class="col-md-6">

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Email:</label>

                <div class="col-xs-12 col-md-10">
                    
                    <input type="text" name="email" class="form-control" value="'.getinput($ds['email']).'">
                </div>
            </div>            

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Telefon:</label>

                <div class="col-xs-12 col-md-10">
                    
                    <input type="text" name="telefon" class="form-control" value="'.getinput($ds['telefon']).'">
                </div>
            </div>

</div></div>            
<hr>


<div class="row">
<div class="col-md-6">
<h3>Community <small>(Default & RM Footer)</small></h3>
</div><div class="col-md-6">
<h3>Quick Links <small>(Default & RM Footer)</small></h3>
</div>

<div class="col-md-6">

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 1:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname1" class="form-control" cols="35" rows="8"  value="'.getinput($ds['linkname1']).'">
                </div>
            </div>

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 1:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink1" class="form-control" value="'.getinput($ds['navilink1']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_1" name="windows_1" class="form-select">'.$windows_1.'</select>
                </div>
            </div>            
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 2:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname2" class="form-control" value="'.getinput($ds['linkname2']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 2:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink2" class="form-control" value="'.getinput($ds['navilink2']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_2" name="windows_2" class="form-select">'.$windows_2.'</select>
                </div>
            </div>
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 3:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname3" class="form-control" value="'.getinput($ds['linkname3']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 3:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink3" class="form-control" value="'.getinput($ds['navilink3']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_3" name="windows_3" class="form-select">'.$windows_3.'</select>
                </div>
            </div>
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 4:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname4" class="form-control" value="'.getinput($ds['linkname4']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 4:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink4" class="form-control" value="'.getinput($ds['navilink4']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_4" name="windows_4" class="form-select">'.$windows_4.'</select>
                </div>
            </div>            
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 5:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname5" class="form-control" value="'.getinput($ds['linkname5']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label"> Link 5:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink5" class="form-control" value="'.getinput($ds['navilink5']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_5" name="windows_5" class="form-select">'.$windows_5.'</select>
                </div>
            </div>




</div>
<div class="col-md-6">





<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 1:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname6" class="form-control" value="'.getinput($ds['linkname6']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 1:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink6" class="form-control" value="'.getinput($ds['navilink6']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_6" name="windows_6" class="form-select">'.$windows_6.'</select>
                </div>
            </div>            
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 2:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname7" class="form-control" value="'.getinput($ds['linkname7']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 2:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink7" class="form-control" value="'.getinput($ds['navilink7']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_7" name="windows_7" class="form-select">'.$windows_7.'</select>
                </div>
            </div>            
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 3:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname8" class="form-control" value="'.getinput($ds['linkname8']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 3:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink8" class="form-control" value="'.getinput($ds['navilink8']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_8" name="windows_8" class="form-select">'.$windows_8.'</select>
                </div>
            </div>            
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 4:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname9" class="form-control" value="'.getinput($ds['linkname9']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 4:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink9" class="form-control" value="'.getinput($ds['navilink9']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_9" name="windows_9" class="form-select">'.$windows_9.'</select>
                </div>
            </div>            
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 5:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="linkname10" class="form-control" value="'.getinput($ds['linkname10']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 5:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="navilink10" class="form-control" value="'.getinput($ds['navilink10']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_10" name="windows_10" class="form-select">'.$windows_10.'</select>
                </div>
            </div>

</div></div>            
<hr>


<div class="row">
<div class="col-md-6">
<h3>Social <small>(RM Footer)</small></h3>
</div><div class="col-md-6">
<h3>Copyright <small>(ALL Footer)</small></h3>
</div>

<div class="col-md-6">
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Text:</label>

                <div class="col-xs-12 col-md-10">
                    <textarea class="form-control" type="text" name="social_text" size="160" maxlength="255" style="height:200px;" value="'.getinput($ds['social_text']).'">'.$ds['social_text'].'</textarea>
                </div>
            </div>
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 1:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="social_link_name1" class="form-control" value="'.getinput($ds['social_link_name1']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 1:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="social_link1" class="form-control" value="'.getinput($ds['social_link1']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_11" name="windows_11" class="form-select">'.$windows_11.'</select>
                </div>
            </div>
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 2:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="social_link_name2" class="form-control" value="'.getinput($ds['social_link_name2']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 2:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="social_link2" class="form-control" value="'.getinput($ds['social_link2']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_12" name="windows_12" class="form-select">'.$windows_12.'</select>
                </div>
            </div>
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 3:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="social_link_name3" class="form-control" value="'.getinput($ds['social_link_name3']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 3:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="social_link3" class="form-control" value="'.getinput($ds['social_link3']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_13" name="windows_13" class="form-select">'.$windows_13.'</select>
                </div>
            </div>




</div>

<div class="col-md-6">

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 1:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link_name1" class="form-control" value="'.getinput($ds['copyright_link_name1']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 1:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link1" class="form-control" value="'.getinput($ds['copyright_link1']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_14" name="windows_14" class="form-select">'.$windows_14.'</select>
                </div>
            </div>
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 2:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link_name2" class="form-control" value="'.getinput($ds['copyright_link_name2']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 2:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link2" class="form-control" value="'.getinput($ds['copyright_link2']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_15" name="windows_15" class="form-select">'.$windows_15.'</select>
                </div>
            </div>
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 3:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link_name3" class="form-control" value="'.getinput($ds['copyright_link_name3']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 3:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link3" class="form-control" value="'.getinput($ds['copyright_link3']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_16" name="windows_16" class="form-select">'.$windows_16.'</select>
                </div>
            </div>
<hr>

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 4:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link_name4" class="form-control" value="'.getinput($ds['copyright_link_name4']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 4:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link4" class="form-control" value="'.getinput($ds['copyright_link4']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_17" name="windows_17" class="form-select">'.$windows_17.'</select>
                </div>
            </div>
<hr>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Name 5:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link_name5" class="form-control" value="'.getinput($ds['copyright_link_name5']).'">
                </div>
            </div>
<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">Link 5:</label>

                <div class="col-xs-12 col-md-7">
                    <input type="text" name="copyright_link5" class="form-control" value="'.getinput($ds['copyright_link5']).'">
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <select id="windows_18" name="windows_18" class="form-select">'.$windows_18.'</select>
                </div>
            </div>


</div>

<div class="col-md-12">
<h3>Plugin Footer <small>(Plugin Footer)</small></h3>

';


$widget_alle = '<option value="">Kein Plugin</option>
<option value="facebook">Facebook</option>
<option value="blog">Blog</option>
<option value="about_us">About Us</option>
<option value="newsletter">Newsletter</option>
<option value="clanwars">Clanwars</option>
<option value="useronline">User online</option>
<option value="tags">Tags</option>
<option value="servers">Server</option>';

$widget_left = str_replace('value="' . $ds['widget_left'] . '"', 'value="' . $ds['widget_left'] . '" selected="selected"', $widget_alle);
$widget_center = str_replace('value="' . $ds['widget_center'] . '"', 'value="' . $ds['widget_center'] . '" selected="selected"', $widget_alle);
$widget_right = str_replace('value="' . $ds['widget_right'] . '"', 'value="' . $ds['widget_right'] . '" selected="selected"', $widget_alle);

/*$widget_center = '<option value="">Kein Plugin</option>
<option value="facebook">facebook</option>
<option value="blog">Blog</option>
<option value="about_us">about_us</option>';

$widget_center = str_replace('value="' . $ds['widget_center'] . '"', 'value="' . $ds['widget_center'] . '" selected="selected"', $widget_center);

$widget_right = '<option value="">Kein Plugin</option>
<option value="facebook">facebook</option>
<option value="blog">Blog</option>
<option value="about_us">about_us</option>';*/

$dm = mysqli_fetch_array(safe_query("SELECT * FROM " . PREFIX . "settings_plugins WHERE modulname = 'about_us'"));



#$dn = mysqli_fetch_array(safe_query("SELECT * FROM " . PREFIX . "settings_plugins WHERE widgetname1 = '".$widget_center."'"));
#$do = mysqli_fetch_array(safe_query("SELECT * FROM " . PREFIX . "settings_plugins WHERE widgetname1 = '".$widget_right."'"));

echo'
<hr>

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">' . $plugin_language[ 'lang_widget_left' ] .':</label>

                <div class="col-xs-12 col-md-4">
                    
                    
                    <select id="widget_left" name="widget_left" class="form-select">'.$widget_left.'</select>

                </div>
            </div>  

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">' . $plugin_language[ 'lang_widget_center' ] .':</label>

                <div class="col-xs-12 col-md-4">
                    
                    
                    <select id="widget_center" name="widget_center" class="form-select">'.$widget_center.'</select>
                </div>
            </div> 

<div class="mb-3 row">
                <label for="select-squad" class="col-xs-12 col-md-2 control-label">' . $plugin_language[ 'lang_widget_right' ] .':</label>

                <div class="col-xs-12 col-md-4">
                    
                    
                    <select id="widget_right" name="widget_right" class="form-select">'.$widget_right.'</select>
                </div>
            </div> 

















</div>
</div>


<input type="hidden" name="captcha_hash" value="' . $hash . '" />
                <input type="hidden" name="footID" value="' . $ds[ 'footID' ] . '" />
                <input type="hidden" name="targetID" value="' . $ds[ 'footID' ] . '" />

<input class="btn btn-warning" type="submit" name="saveedit" value="speichern" />

</form></div>
  </div>';
}
elseif (isset($_POST[ "saveedit" ])) {
    $about = $_POST[ "about" ];
    $name = $_POST[ "name" ];
    $strasse = $_POST[ "strasse" ];
    $email = $_POST[ "email" ];
    $telefon = $_POST[ "telefon" ];
    $linkname1 = $_POST[ "linkname1" ];
    $navilink1 = $_POST[ "navilink1" ];
    $windows_1 = $_POST[ "windows_1" ];
    $linkname2 = $_POST[ "linkname2" ];
    $navilink2 = $_POST[ "navilink2" ];
    $windows_2 = $_POST[ "windows_2" ];
    $linkname3 = $_POST[ "linkname3" ];
    $navilink3 = $_POST[ "navilink3" ];
    $windows_3 = $_POST[ "windows_3" ];
    $linkname4 = $_POST[ "linkname4" ];
    $navilink4 = $_POST[ "navilink4" ];
    $windows_4 = $_POST[ "windows_4" ];
    $linkname5 = $_POST[ "linkname5" ];
    $navilink5 = $_POST[ "navilink5" ];
    $windows_5 = $_POST[ "windows_5" ];
    $linkname6 = $_POST[ "linkname6" ];
    $navilink6 = $_POST[ "navilink6" ];
    $windows_6 = $_POST[ "windows_6" ];
    $linkname7 = $_POST[ "linkname7" ];
    $navilink7 = $_POST[ "navilink7" ];
    $windows_7 = $_POST[ "windows_7" ];
    $linkname8 = $_POST[ "linkname8" ];
    $navilink8 = $_POST[ "navilink8" ];
    $windows_8 = $_POST[ "windows_8" ];
    $linkname9 = $_POST[ "linkname9" ];
    $navilink9 = $_POST[ "navilink9" ];
    $windows_9 = $_POST[ "windows_9" ];
    $linkname10 = $_POST[ "linkname10" ];
    $navilink10 = $_POST[ "navilink10" ];
    $windows_10 = $_POST[ "windows_10" ];
    $social_text = $_POST[ "social_text" ];
    $social_link_name1 = $_POST[ "social_link_name1" ];
    $social_link1 = $_POST[ "social_link1" ];
    $windows_11 = $_POST[ "windows_11" ];
    $social_link_name2 = $_POST[ "social_link_name2" ];
    $social_link2 = $_POST[ "social_link2" ];
    $windows_12 = $_POST[ "windows_12" ];
    $social_link_name3 = $_POST[ "social_link_name3" ];
    $social_link3 = $_POST[ "social_link3" ];
    $windows_13 = $_POST[ "windows_13" ];
    $copyright_link_name1 = $_POST[ "copyright_link_name1" ];
    $copyright_link1 = $_POST[ "copyright_link1" ];
    $windows_14 = $_POST[ "windows_14" ];
    $copyright_link_name2 = $_POST[ "copyright_link_name2" ];
    $copyright_link2 = $_POST[ "copyright_link2" ];
    $windows_15 = $_POST[ "windows_15" ];
    $copyright_link_name3 = $_POST[ "copyright_link_name3" ];
    $copyright_link3 = $_POST[ "copyright_link3" ];
    $windows_16 = $_POST[ "windows_16" ];
    $copyright_link_name4 = $_POST[ "copyright_link_name4" ];
    $copyright_link4 = $_POST[ "copyright_link4" ];
    $windows_17 = $_POST[ "windows_17" ];
    $copyright_link_name5 = $_POST[ "copyright_link_name5" ];
    $copyright_link5 = $_POST[ "copyright_link5" ];
    $windows_18 = $_POST[ "windows_18" ];
    $widget_left = $_POST[ "widget_left" ];
    $widget_center = $_POST[ "widget_center" ];
    $widget_right = $_POST[ "widget_right" ];
    $widgetname_left = $_POST[ "widget_left" ];
    $widgetname_center = $_POST[ "widget_center" ];
    $widgetname_right = $_POST[ "widget_right" ];
    $footID = $_POST[ "footID" ];
    
    $CAPCLASS = new \webspell\Captcha;
    if ($CAPCLASS->checkCaptcha(0, $_POST[ 'captcha_hash' ])) {
        
            safe_query(
                "UPDATE
                    `" . PREFIX . "plugins_footer`
                SET
                    `about` = '" . $about . "',
                    `name` = '" . $name . "',
                    `strasse` = '" . $strasse . "',
                    `email` = '" . $email . "',
                    `telefon` = '" . $telefon . "',
                    `linkname1` = '" . $linkname1 . "',
                    `navilink1` = '" . $navilink1 . "',
                    `linkname2` = '" . $linkname2 . "',
                    `navilink2` = '" . $navilink2 . "',
                    `linkname3` = '" . $linkname3 . "',
                    `navilink3` = '" . $navilink3 . "',
                    `linkname4` = '" . $linkname4 . "',
                    `navilink4` = '" . $navilink4 . "',
                    `linkname5` = '" . $linkname5 . "',
                    `navilink5` = '" . $navilink5 . "',
                    `linkname6` = '" . $linkname6 . "',
                    `navilink6` = '" . $navilink6 . "',
                    `linkname7` = '" . $linkname7 . "',
                    `navilink7` = '" . $navilink7 . "',
                    `linkname8` = '" . $linkname8 . "',
                    `navilink8` = '" . $navilink8 . "',
                    `linkname9` = '" . $linkname9 . "',
                    `navilink9` = '" . $navilink9 . "',
                    `linkname10` = '" . $linkname10 . "',
                    `navilink10` = '" . $navilink10 . "',
                    `social_text` = '" . $social_text . "',
                    `social_link_name1` = '" . $social_link_name1 . "',
                    `social_link1` = '" . $social_link1 . "',
                    `social_link_name2` = '" . $social_link_name2 . "',
                    `social_link2` = '" . $social_link2 . "',
                    `social_link_name3` = '" . $social_link_name3 . "',
                    `social_link3` = '" . $social_link3 . "',
                    `copyright_link_name1` = '" . $copyright_link_name1 . "',
                    `copyright_link1` = '" . $copyright_link1 . "',
                    `copyright_link_name2` = '" . $copyright_link_name2 . "',
                    `copyright_link2` = '" . $copyright_link2 . "',
                    `copyright_link_name3` = '" . $copyright_link_name3 . "',
                    `copyright_link3` = '" . $copyright_link3 . "',
                    `copyright_link_name4` = '" . $copyright_link_name4 . "',
                    `copyright_link4` = '" . $copyright_link4 . "',
                    `copyright_link_name5` = '" . $copyright_link_name5 . "',
                    `copyright_link5` = '" . $copyright_link5 . "',
                    `widget_left` = '" . $widget_left . "',
                    `widget_center` = '" . $widget_center . "',
                    `widget_right` = '" . $widget_right . "',
                    `widgetname_left` = '" . $widget_left . "',
                    `widgetname_center` = '" . $widget_center . "',
                    `widgetname_right` = '" . $widget_right . "'
                WHERE `footID` = '".$footID."'"
            );


                safe_query(
                "UPDATE
                    `" . PREFIX . "plugins_footer_target`
                SET
                   
                    `windows1` = '" . $windows_1 . "',
                    `windows2` = '" . $windows_2 . "',
                    `windows3` = '" . $windows_3 . "',
                    `windows4` = '" . $windows_4 . "',
                    `windows5` = '" . $windows_5 . "',
                    `windows6` = '" . $windows_6 . "',
                    `windows7` = '" . $windows_7 . "',
                    `windows8` = '" . $windows_8 . "',
                    `windows9` = '" . $windows_9 . "',
                    `windows10` = '" . $windows_10 . "',
                    `windows11` = '" . $windows_11 . "',
                    `windows12` = '" . $windows_12 . "',
                    `windows13` = '" . $windows_13 . "',
                    `windows14` = '" . $windows_14 . "',
                    `windows15` = '" . $windows_15 . "',
                    `windows16` = '" . $windows_16 . "',
                    `windows17` = '" . $windows_17 . "',
                    `windows18` = '" . $windows_18 . "'
                WHERE `targetID` = '".$footID."'"
            );

            $errors = array();
            $_language->readModule('formvalidation', true);

            if (count($errors)) {
                $errors = array_unique($errors);
                echo generateErrorBoxFromArray($plugin_language['errors_there'], $errors);
            }

        } else {
            echo $plugin_language['information_incomplete'];
        }
   redirect("admincenter.php?site=admin_footer", "", 0);    
}
else {
    
    echo '<div class="card">
    <div class="card-header"> <i class="fa fa-info-circle"></i> ' . $plugin_language[ 'title' ] . '
    </div>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="admincenter.php?site=admin_footer" class="white">' . $plugin_language[ 'title' ] . '</a></li>
    <li class="breadcrumb-item active" aria-current="page">New / Edit</li>
  </ol>
</nav>
    <div class="card-body">';

    $qry = safe_query("SELECT * FROM `" . PREFIX . "plugins_footer` ORDER BY `footID`");
    $anz = mysqli_num_rows($qry);
    if ($anz) {
        $CAPCLASS = new \webspell\Captcha;
        $CAPCLASS->createTransaction();
        $hash = $CAPCLASS->getHash();

        $i = 1;
        while ($ds = mysqli_fetch_array($qry)) {
            
           

echo '
<div class="row">

<div class="col-md-12">

<table class="table table-striped">
    <thead>
      <th style="width: 25%"><h3>Info</h3></th>
      <th></th>
     
    </thead>
<tbody>
       <tr>
        <td>About Us:</td>
        <td>'.$ds['about'].'</td>
      </tr>
      <tr>
        <td>Name:</td>
        <td>'.$ds['name'].'</td>
      </tr>
      <tr>
        <td>Straße:</td>
        <td>'.$ds['strasse'].'</td>
      </tr>
      <tr>
        <td>Email:</td>
        <td>'.$ds['email'].'</td>
      </tr>
      
    <tr>
        <td>Telefon:</td>
        <td>'.$ds['telefon'].'</td>
      </tr>
      
      </tbody>
      </table>



    </div>

<div class="col-md-12"><hr></div>

<div class="col-md-6">

<table class="table table-striped">
    <thead>
      <th style="width: 15%"><b>Community</b></th>
      <th style="width: 20%"></th>
     <th style="width: 10%"></th>
      <th></th>
    </thead>
<tbody>
       <tr>
        <td>Name 1:</td>
        <td>'.$ds['linkname1'].'</td>
      
        <td>Link 1:</td>
        <td>'.$ds['navilink1'].'</td>
      </tr>
      <tr>
        <td>Name 2:</td>
        <td>'.$ds['linkname2'].'</td>
      
        <td>Link 2:</td>
        <td>'.$ds['navilink2'].'</td>
      </tr>
      <tr>
        <td>Name 3:</td>
        <td>'.$ds['linkname3'].'</td>
      
        <td>Link 3:</td>
        <td>'.$ds['navilink3'].'</td>
      </tr>
      <tr>
        <td>Name 4:</td>
        <td>'.$ds['linkname4'].'</td>
      
        <td>Link 4:</td>
        <td>'.$ds['navilink4'].'</td>
      </tr>
      <tr>
        <td>Name 5:</td>
        <td>'.$ds['linkname5'].'</td>
      
        <td>Link 5:</td>
        <td>'.$ds['navilink5'].'</td>
      </tr>
      </tbody>
     </table>



    </div>

<div class="col-md-6">

<table class="table table-striped">
    <thead>
      <th style="width: 15%"><b>Quick Links</b></th>
      <th style="width: 20%"></th>
     <th style="width: 10%"></th>
      <th></th>
    </thead>
<tbody>
    <tr>
        <td>Name 1:</td>
        <td>'.$ds['linkname6'].'</td>
      
        <td>Link 1:</td>
        <td>'.$ds['navilink6'].'</td>
      </tr>
      <tr>
        <td>Name 2:</td>
        <td>'.$ds['linkname7'].'</td>
      
        <td>Link 2:</td>
        <td>'.$ds['navilink7'].'</td>
      </tr>
      <tr>
         <td>Name 3:</td>
        <td>'.$ds['linkname8'].'</td>
      
        <td>Link 3:</td>
        <td>'.$ds['navilink8'].'</td>
      </tr>
      <tr>
        <td>Name 4:</td>
        <td>'.$ds['linkname9'].'</td>
      
        <td>Link 4:</td>
        <td>'.$ds['navilink9'].'</td>
      </tr>
       <tr>
        <td>Name 5:</td>
        <td>'.$ds['linkname10'].'</td>
      
        <td>Link 5:</td>
        <td>'.$ds['navilink10'].'</td>
      </tr>
      </tbody>
      </table>

</div>
<div class="col-md-12"><hr></div>
    <div class="col-md-6">

<table class="table table-striped">
    <thead>
      <th style="width: 15%"><b>Social</b></th>
      <th style="width: 20%"></th>
     <th style="width: 10%"></th>
      <th></th>
    </thead>
<tbody>
      <tr>
        <td>Text:</td>
        <td></td>
      
        <td></td>
        <td>'.$ds['social_text'].'</td>
      </tr>

      <tr>
        <td>Name 1:</td>
        <td>'.$ds['social_link_name1'].'</td>
      
        <td>Link 1:</td>
        <td>'.$ds['social_link1'].'</td>
      </tr>
      <tr>
        <td>Name 2:</td>
        <td>'.$ds['social_link_name2'].'</td>
      
        <td>Link 1:</td>
        <td>'.$ds['social_link2'].'</td>
      </tr>
      <tr>
        <td>Name 1:</td>
        <td>'.$ds['social_link_name3'].'</td>
      
        <td>Link 1:</td>
        <td>'.$ds['social_link3'].'</td>
      </tr>
      </tbody>
      </table>


    </div>

        <div class="col-md-6">

<table class="table table-striped">
    <thead>
      <th style="width: 15%"><b>Copyright</b></th>
      <th style="width: 20%"></th>
     <th style="width: 10%"></th>
      <th></th>
    </thead>
<tbody>
      <tr>
        <td>Name 1:</td>
        <td>'.$ds['copyright_link_name1'].'</td>
      
        <td>Link 1:</td>
        <td>'.$ds['copyright_link1'].'</td>
      </tr>
      <tr>
        <td>Name 2:</td>
        <td>'.$ds['copyright_link_name2'].'</td>
      
        <td>Link 2:</td>
        <td>'.$ds['copyright_link2'].'</td>
      </tr>
      <tr>
        <td>Name 3:</td>
        <td>'.$ds['copyright_link_name3'].'</td>
      
        <td>Link 3:</td>
        <td>'.$ds['copyright_link3'].'</td>
      </tr>
      <tr>
        <td>Name 4:</td>
        <td>'.$ds['copyright_link_name4'].'</td>
      
        <td>Link 4:</td>
        <td>'.$ds['copyright_link4'].'</td>
      </tr>
      <tr>
        <td>Name 5:</td>
        <td>'.$ds['copyright_link_name5'].'</td>
      
        <td>Link 5:</td>
        <td>'.$ds['copyright_link5'].'</td>
      </tr>
      </tbody>
      </table>


    </div>
    </div>
            <a href="admincenter.php?site=admin_footer&amp;action=edit&amp;footID='. $ds[ 'footID' ]
                    . '" class="btn btn-warning input">Text bearbeiten</a>
                   ';

            $i++;
        }
    } else {
        echo 'keine Einträge vorhanden';
    }
    echo '
            </div>';    
}
?>