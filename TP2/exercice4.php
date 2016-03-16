<?php

require "functions.php";

getHeader(true, "Exercice 1");

if(isset($_POST["options"])) {   
    var_dump($_POST["options"]); 
    die();
}
    
?>

<form method="POST" action="exercice4.php" class="form-inline">
    
    <fieldset>
        <legend>Question 1</legend>
        
        <p>Quels réseaux sociaux utilisez vous régulièrement ?</p>
        
        <div>
            <?php foreach(['Facebook', 'Twitter', 'Badoo', 'Google+'] as $k => $v ) { ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="options[]" id="options<?php echo $v; ?>" value="<?php echo $v; ?>">
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