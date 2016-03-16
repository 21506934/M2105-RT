<?php

require "functions.php";
getHeader(true, "Exercice 6");

/*
setcookie("user", "", time()-1);
unset($_COOKIE);
*/

foreach($_COOKIE as $k => $v) {
?>
    <p><?php echo $v; ?></p>
<?php } ?>

<form method="get" action="resetCookie">
    <button type="button" class="btn btn-primary">Supprimer les cookies</button>
</form>

<?php
    
getFooter();