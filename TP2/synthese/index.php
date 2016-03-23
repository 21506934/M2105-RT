<?php

include '../functions.php';
include 'QCM.php';

getHeader(true, "Questionnaires");

if(isset($_COOKIE['user'])) {
    echo "<h1>Bienvenue ".htmlentities($_COOKIE['user'])."</h1>";
    echo"<div><a href='questions.php?num=1' class='btn btn-primary'>Démarrer le questionnaire</a></div>";
} else {
    header("Location: login.php");
}

getFooter();