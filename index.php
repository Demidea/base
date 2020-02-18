<?php

session_start();

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

echo '<!DOCTYPE html><html lang="'.$lang.'">';
	
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienvenidos</title>
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

            $_SESSION["table"] = 'text'.$x;

            $login = Controller::ctrBase();

                foreach ($login as $key => $value) {

                    if ($value["page"]=="menu") {
                        $id = $value["id"];
                        $go = $value["link"];
                        $menuitem = $value["text"];
                        echo '<li><input type="button" class="button" id="'.$go.'" onclick="pagelink()" value='.$menuitem.'></li>';
                    }
                }
                echo '</ul>
                
                    <div id="container">';

                    $page = 'login';
                    $_POST["user_name"] = null;

                    foreach ($login as $key => $value) {
                        if ($value["page"]==$page){
                            echo '<div class='.$value["class"].'>'.$value["text"].'</div>';
                        }
                    }
                    if ($page === 'login') {
                        require_once 'views/login.php';
                    }

?>

</div>

</body>

</html>