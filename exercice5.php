<?php


function fact($n) {
    $res = 1;
    for($i=1; $i<=$n; $i++) {
        $res *= $i;
    }    
    return $res;
}


function factR($n) {
    if ($n <= 0)
        return 1;
    return $n*factR($n-1);
}

?>

<?php include("header.php"); ?>
        
        <h1>Creation d'un tableau</h1>
        <div>
            <form method="get" action="exercice5.php">
                <label>Choix de la méthode : </label>
                <select name="method">
                    <option value="fact">Boucle for</option>
                    <option value="factR">Recursive</option>
                </select>
                <input name="n" id="n" type="number" value="<?php echo $_GET['n']; ?>"/>
                <input value="Calculer" type="submit"/>
            </form>
        </div>
        <hr />
        <?php
            if (isset($_GET['method']) && isset($_GET['n'])) {
        ?>
        <p>Le resultat est : <?php echo $_GET['method']($_GET['n']); ?></p>
        <?php 
            }
        ?>
        
<?php include "footer.php"; ?>