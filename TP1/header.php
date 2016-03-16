<?php
    $nav = [
        "Operation" => "exercice2.php",
        "Generateur de tableau" => "exercice4.php",
        "Factorielle" => "exercice5.php",
        "Chaine de cara" => "exercice6.php",
        "Fonctions PHP" => "exercice7.php"
    ]
?>
<html>
<head>
    <meta charset="utf-8">

    <style>
        html, body {
            padding: 0;
            margin: 0;
        }
        .form-item {
            width: 100%;
        }
        select[multiple] {
            height: 170px;
        }
        
        #nav {
            background-color: #4183D7;
            color: #FFF;
            padding: 5px;
        }

        #nav ul {
            list-style-type: none;
        }

        #nav ul li {
            display: inline-block;
        }

        #nav ul li a {
            border-radius: 3px;
            text-decoration: none;
            padding: 7px;
            color: #FFFFFF;
        }

        #nav ul li a:hover {
            color: #4183D7;
            background-color: #FFFFFF;
        }

        #container {
            width: 95%;
            margin: 0 auto;
        }
        td, table {
            border: 1px solid black;
        }
    </style>
</head>

<body>

<nav id="nav">
    <ul>
        <?php foreach($nav as $k => $v) { ?>
            <li><a href="<?php echo $v ?>"><?php echo $k ?></a></li>
        <?php } ?>

    </ul>
</nav>

<div id="container">