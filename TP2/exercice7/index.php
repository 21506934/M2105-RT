<?php

require "../functions.php";
getHeader(true, "Exercice 7");

function getQuestions(){
    $questions=array();

    $questions[]=["Quel est votre navigateur favori ?",
        ["multiple"=>false,
            "reponses"=>["Chrome"=>1,"Firefox"=>2,"IE"=>3,"Opera"=>4,"Autre"=>10]
        ]
    ];

    $questions[]=["Quels réseaux sociaux utilisez vous fréquemment ?",
        ["multiple"=>true,
            "reponses"=>["Facebook"=>1,"Twitter"=>2,"Badoo"=>3,"Google+"=>4,"Autre"=>10]
        ]
    ];
    return $questions;
}

function afficheQuestions($question) {
    echo "<fieldset>";
    echo "<legend>".$question[0]."</legend>";
    echo "<input type='checkbox' ".(($question[1]["multiple"])?"checked":"")." disabled> Questions à choix multiples";
    echo "<ul>";
        foreach ($question[1]["reponses"] as $k => $v) {
            echo "<li>".$k."</li>";
        }
    echo "</ul>";
    echo "</fieldset>";
}

foreach (getQuestions() as $k => $v) {
    afficheQuestions($v);
}
?>

<?php
    
getFooter();