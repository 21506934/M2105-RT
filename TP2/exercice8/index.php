<?php

require "../functions.php";
getHeader(true, "Exercice 7");

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

afficheQuestionsForm(getQuestions()[(int)$_GET['num']]);

?>

<?php

getFooter();