<?php

//Start Session if is not started already
if(session_id()=="")
{
   session_start();
}

$_SESSION["logged"] = null;

header('Location: ../index.php');

?>