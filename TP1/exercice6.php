<?php

function wordCount($s) {
    $s = explode(' ', $s);
    $res = 0;
    foreach ($s as $k)
        $res += 1;
    return $res;
}

function charCount($s, $c=NULL) {
    $res = 0;
    foreach (str_split($s) as $k) {
        if ($c == NULL)
            $res += 1;
        else
            $res += (($c[0] == $k) ? 1 : 0);            
    }
    return $res;    
}

if (isset($_GET['method']) && isset($_GET['content'])) {
    if ($_GET['method'] == "wordCount" ) {
        $res = wordCount($_GET['content']);    
    } 
    else if ($_GET['method'] == "charCount" && isset($_GET['cara'])) {
        $res = charCount($_GET['content'], (($_GET['cara']=='') ? null : $_GET['cara']));
    }
}
?>

<?php include("header.php"); ?>

        <h1>Chaines</h1>
        <div>
            <form method="get" action="exercice6.php">
                <div>
                    <label>Frapper votre texte : </label>
                    <textarea name="content"><?php echo (isset($_GET['content']) ? $_GET['content'] : ''); ?></textarea>
                </div>
                <div>
                    <select name="method">
                        <option value="wordCount">Nombre de mots</option>
                        <option value="charCount">Nombre de caractères</option>
                    </select>
                    <input name="cara" id="cara" type="text" value="<?php echo (isset($_GET['cara']) ? $_GET['cara'] : ''); ?>"/>
                </div>
                <input value="Compter" type="submit"/>
            </form>
        </div>
        <hr />
            <?php if(isset($res)) { ?>
            <p>Resultat : <?php echo $res; ?></p>
            <?php } ?>


<?php include "footer.php"; ?>