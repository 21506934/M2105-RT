<?php

require "functions.php";
getHeader(true, "Exercice 1");

?>

<form method="POST" action="ex1validation.php">
    
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