<?php

setlocale(LC_ALL, 'es_ES.UTF-8');
date_default_timezone_set('Europe/Madrid');

require_once "controllers/controller.php";

require_once "models/model.php";

include "views/header.php";

echo '<h1>HOLA AMIGOS</h1>';

include "views/footer.php";

?>