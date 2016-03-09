<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <style>
            td, table {
                border: 1px solid black;
            }
        </style>
    </head>
    
    <body>
        
        <h1>Creation d'un tableau</h1>
        <div>
            <form method="get" action="exercice4.php">
                <input name="numRows" id="numRows" type="number" value="<?php echo $_GET['numRows']; ?>"/>
                <input name="nbCols" id="nbCols" type="number" value="<?php echo $_GET['nbCols']; ?>"/>
                <input value="Créer le tableau" type="submit"/>
            </form>
        </div>
        <hr />
        
        <?php 
            
            function createHTMLTable($numRows, $nbCols) {
                if ($numRows >= 0 && $nbCols >= 0) {
                    echo "<table>";
                    for ($i=0; $i<$numRows; $i++) {
                        echo "<tr>";
                        for ($j=0; $j<$nbCols; $j++) {
                            echo "<td>".$i." - ".$j."</strong></td>";                         
                        }
                        echo "</tr>";
                    }
                    echo "</table>";    
                } else {
                    echo "<a href='exercice3.php?numRows=9&nbCols=13'>exercice3.php?numRows=9&nbCols=13</a>";
                }
            }

            if (isset($_GET['numRows']) && isset($_GET['nbCols'])) {    
                createHTMLTable($_GET['numRows'], $_GET['nbCols']);
            }

        ?>
        
    </body>

</html>