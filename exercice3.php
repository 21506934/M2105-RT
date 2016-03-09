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

        <?php
        
        function createHTMLTable($numRows, $nbCols) {
            if ($numRows >= 0 && $nbCols >= 0) {
                echo "<table>";
                for ($i=0; $i<$numRows; $i++) {
                    echo "<tr>";
                    for ($j=0; $j<$nbCols; $j++) {
                        echo "<td ".(($j%2 == 1) ? "style='color:red;'": "").">".(($i%2 == 1) ? "<strong>": "").$i." - ".$j."</strong></td>";                         
                    }
                    echo "</tr>";
                }
                echo "</table>";    
            } else {
                echo "<a href='exercice3.php?numRows=9&nbCols=13'>exercice3.php?numRows=9&nbCols=13</a>";
            }
        }

        createHTMLTable($_GET['numRows'], $_GET['nbCols']);

        ?>
        
    </body>

</html>