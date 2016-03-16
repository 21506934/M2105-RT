<?php

require "functions.php";

getHeader(true, "Exercice 1");

if ($_COOKIE['user']) {
    echo "connecté";
} else {
    header("Location: ex1.php");   
}