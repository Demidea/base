<?php

//Start Session if is not started already
if(session_id()=="")
{
   session_start();
}

//Home will be login if user is not active, else it will be home
if(!isset($_SESSION["logged"])){
    $_SESSION["profile"] = null;
    $page = 'login';
}

else {
    echo '<div class="user">Welcome <a href="profile.php">'.$_SESSION["user"].'</a>!</div>';
    $page = 'home';
    if (isset($_SESSION["profile"])){
        $page = 'userdata';
    }
}

//Load texts according to navigator language
require_once "controllers/controller.php";

require_once "models/model.php";

$lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);

setlocale(LC_ALL, $lang.'.UTF-8');
date_default_timezone_set('Europe/Madrid');

$_SESSION["table"] = "lang";

$x = '1';
	
$login = Controller::ctrBase();

foreach ($login as $key => $value) {

    $id = $value["id"];	
    $language = $value["lang"];
		
    if ($language == $lang){
        $x = $id;  
    } 
}

//HTML Head
echo '<!DOCTYPE html><html lang="'.$lang.'">';
	
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Bienvenidos</title>
    <?php
    if(!isset($_SESSION["logged"])){
        echo '<style>.close {display:none;}</style>';
    } else {
        echo '<style>.signup {display:none;}</style>';
    }
    ?>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700|Sunflower:300,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="icon" href="img/favicon.ico" type="image/ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/functions.js"></script>
</head>

<body>
    <ul>
        <?php

        //Menu
        $_SESSION["table"] = 'text'.$x;

        $login = Controller::ctrBase();

            foreach ($login as $key => $value) {

                if ($value["page"]=="menu") {
                    $id = $value["id"];
                    $go = $value["link"];
                    $class = $value["class"];
                    $menuitem = $value["text"];

                    echo '<li><input type="button" class="'.$class.'" id="'.$go.'" onclick="pagelink()" value='.$menuitem.'></li>';
                    }
                }

        ?>

    </ul>