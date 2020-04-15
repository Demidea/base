<?php

//Load Header
include_once 'header.php';

//Create page
echo '<div id="container">';

    foreach ($login as $key => $value) {
        if ($value["page"]==$page){
            echo '<div class='.$value["class"].'>'.$value["text"].'</div>';
        }
    }
    if ($page === 'login') {
        include_once 'views/login.php';
    }

?>

</div>

</body>

</html>