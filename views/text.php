<?php

$page = $_POST['name'];

session_start();

require_once "../controllers/controller.php";

require_once "../models/model.php";

$login = Controller::ctrBase();

foreach ($login as $key => $value) {
    if ($value["page"]==$page){
        echo '<div class='.$value["class"].'>'.$value["text"].'</div>';
    }
}
if ($page == 'login') {
    require_once 'login.php';
} elseif ($page == 'contact') {
    require_once 'contact.php';
}
?>