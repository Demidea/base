<?php

require_once "../controllers/controller.php";

require_once "../models/model.php";

$_SESSION["table"] = 'users';


$login = Controller::ctrBase();

foreach ($login as $key => $value) {
    if ($value["user_name"] === $_POST["user_name"]) {
        if($value["user_pass"] === $_POST["user_pass"]) {
            echo 'Welcome, <div>'.$value["user_name"].'!</div>';
            exit;

        } else {
            echo '<a href="../">Wrong password, try again</a>';
            exit;
        }
    }
}

    $user_name = $_POST["user_name"];
    $user_pass = $_POST["user_pass"];

    require_once "register.php";

?>