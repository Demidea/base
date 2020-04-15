<?php

 if(session_id()=="")
 {
    session_start();
 }

require_once "../controllers/controller.php";

require_once "../models/model.php";

$_SESSION["table"] = 'users';
$_SESSION["user"] = $_POST["user_name"];

$login = Controller::ctrBase();

foreach ($login as $key => $value) {
    if ($value["user_name"] === $_POST["user_name"]) {
        if($value["user_pass"] === $_POST["user_pass"]) {
            $_SESSION["logged"] = "ok";
            header('Location: ../index.php');
            exit;

        } else {
            echo '<a href="../">Wrong password, try again</a>';
            exit;
        }
    }
}

    $user_name = $_POST["user_name"];
    $user_pass = $_POST["user_pass"];
    $_SESSION["logged"] = "ok";

    require_once "register.php";

?>