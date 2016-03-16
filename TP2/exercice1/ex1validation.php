<?php

require "../functions.php";
getHeader(true, "Exercice 1");

$_SESSION['aname'] = htmlentities($_POST['aname']);

if (isset($_POST['remember']) && (isset($_POST['aname'])))
    setcookie("user", $_POST['aname'], time()+5*60);

?>

<h1>Votre nom : <?php echo $_POST['aname']; ?></h1>
                
<?php

getFooter();

?>
