<?php


function getHeader($startSession, $title) {
    if($startSession)
        session_start();
    
    if (file_exists("../views/header.php"))
        include("../views/header.php");
    else
        die();
    
}

function getFooter() {
    include("views/footer.php");   
}
