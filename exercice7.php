<?php

    if (isset($_GET['method']) && isset($_GET['content'])) {
        $res = $_GET['method']($_GET['content']);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <style>
        .form-item {
            width: 100%;
        }
        select {
            height: 170px;
        }

    </style>
</head>

<body>

<h1>Chaines</h1>
<div>
    <form method="get" action="exercice7.php">
        <divclass="form-item">
            <label>Frapper votre texte : </label><br />
            <textarea name="content" class="form-item"><?php echo (isset($_GET['content']) ? $_GET['content'] : ''); ?></textarea>
        </div>
        <div>
            <select name="method" multiple class="form-item">
                <option value="ucfirst">1ère lettre en MAJ</option>
                <option value="strtoupper">Majuscule</option>
                <option value="strtolower">Miniscule</option>
                <option value="charCount">ligne->BR</option>
                <option value="sha1">sha1</option>
                <option value="md5">md5</option>
                <option value="ucwords">1ère lettre mot en MAJ</option>
                <option value="urlencode">URL encode</option>
                <option value="htmlentities">Entités HTML</option>
                <option value="wordwrap">Césure chaine</option>
            </select>
        </div>
        <input value="Appeler la fonction" type="submit" class="form-item"/>
    </form>
</div>
<hr />
<?php if(isset($res)) { ?>
    <p>Resultat : <?php echo $res; ?></p>
<?php } ?>

</body>

</html>