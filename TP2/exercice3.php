<?php

require "functions.php";

getHeader(true, "Exercice 1");

if(isset($_POST["options"])) {   
    echo $_POST["options"]; 
    die();
}
    
?>

<form method="POST" action="exercice3.php" class="form-inline">
    
    <fieldset>
        <legend>Question 1</legend>
        
        <p>Quel est votre navigateur favori ?</p>
        
        <div>
            <?php foreach(['Chrome', 'Firefox', 'IE', 'Opera', 'Autre'] as $k => $v ) { ?>
                <div class="radio">
                    <label>
                        <input type="radio" name="options" id="options<?php echo $v; ?>" value="<?php echo $v; ?>">
                        <?php echo $v; ?>
                    </label>
                </div>
            <?php } ?>
        </div>

        <button type="submit" class="btn btn-default">Envoyer</button>
    </fieldset>

</form>

<?php

getFooter();

?>