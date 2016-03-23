<?php

if (!isset($_GET['num']))
    header('Location: index.php');

include '../functions.php';
include 'QCM.php';

getHeader(true, "Questionnaires");

$index = ((int)$_GET['num']-1);

$qcm = new QCM();
$qcm->afficheQuestion($qcm->questions[$index]);
$qcm->getButtons($index);

getFooter();