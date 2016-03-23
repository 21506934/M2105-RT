<?php

include '../functions.php';

getHeader(true, "Questionnaires");

if (isset($_POST['remember']) && (isset($_POST['aname']))) {
    setcookie("user", $_POST['aname'], time() + 5 * 60);
    header("Location: index.php");
}



?>

<form method="POST" action="login.php">

    <fieldset>
        <legend>Connexion</legend>
        <div class="form-group">
            <label for="aname">Votre nom</label>
            <input type="text" class="form-control" id="aname" name="aname" placeholder="Nom">
        </div>

        <hr />

        <div class="checkbox">
            <label>
                <input name="remember" type="checkbox"> Remember me
            </label>
        </div>

        <button type="submit" class="btn btn-default">Envoyer</button>
    </fieldset>

</form>


<?php

getFooter();

?>