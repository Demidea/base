<?php

//Start Session if is not started already
if(session_id()=="")
{
   session_start();
}

$_SESSION["profile"] = 1;

header('Location: index.php');

?>