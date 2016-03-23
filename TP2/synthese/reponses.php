<?php

if (!isset($_GET['num']))
    header('Location: index.php');

include '../functions.php';
include 'QCM.php';

getHeader(true, "Questionnaires");

var_dump($_POST); die();

$index = ((int)$_GET['num']-1);

$qcm = new QCM();
$qcm->afficheResultat($qcm->questions[$index]);
$qcm->getButtons($index);

getFooter();