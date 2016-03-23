<?php

require "../functions.php";
getHeader(true, "Exercice 9");

function getQuestions() {
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

    $questions[]=["Quels moteurs de recherche utilisez-vous ?",
        ["multiple"=>true,
            "reponses"=>["Google"=>1,"DuckDuck Go"=>2,"Qwant"=>3,"Autre"=>10]
        ]
    ];
    return $questions;
}

function afficheQuestionsForm($question) {
    echo "<fieldset>";
    echo "<legend>".$question[0]."</legend>";
    echo "<ul>";
    foreach ($question[1]["reponses"] as $k => $v) {
        echo "<li><div id='checkbox'><label><input type=".(($question[1]["multiple"])?"'checkbox'":"'radio'")." name='question' id=''>".$k."</label></div></li>";
    }
    echo "</ul>";
    echo "</fieldset>";
}

function getButtons($index) {
    $nbQuestions = count(getQuestions());
    if($index>0) {
        echo "<a class='btn btn-primary' href='index.php?num=".((int)$index-1)."'>Question précedente</a>";
    }
    if($index<($nbQuestions-1)) {
        echo "<a class='btn btn-primary' href='index.php?num=".((int)$index+1)."'>Question suivante</a>";
    }
    if(($index+1)==$nbQuestions) {
        echo "<a class='btn btn-primary' href='index.php'>Terminer le formulaire</a>";
    }
}

afficheQuestionsForm(getQuestions()[(int)$_GET['num']]);

getButtons((int)$_GET['num']);

?>

<?php

getFooter();