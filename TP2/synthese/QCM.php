<?php

class QCM {

    public $questions;

    public function __construct() {
        $this->generateQuestion();

    }

    public function generateQuestion() {
        $this->questions=array();

        $this->questions[]=["Quel est votre navigateur favori ?",
            ["multiple"=>false,
                "reponses"=>["Chrome"=>1,"Firefox"=>2,"IE"=>3,"Opera"=>4,"Autre"=>10]
            ]
        ];

        $this->questions[]=["Quels réseaux sociaux utilisez vous fréquemment ?",
            ["multiple"=>true,
                "reponses"=>["Facebook"=>1,"Twitter"=>2,"Badoo"=>3,"Google+"=>4,"Autre"=>10]
            ]
        ];

        $this->questions[]=["Quels moteurs de recherche utilisez-vous ?",
            ["multiple"=>true,
                "reponses"=>["Google"=>1,"DuckDuck Go"=>2,"Qwant"=>3,"Autre"=>10]
            ]
        ];
    }

    public function afficheResultat($question) {
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

    public function afficheQuestion($question) {
        echo "<form action='reponses.php?num=".$_GET['num']."' method='post'>";
        echo "<fieldset>";
        echo "<legend>".$question[0]."</legend>";
        echo "<ul>";
        foreach ($question[1]["reponses"] as $k => $v) {
            echo "<li><div id='checkbox'><label><input type=".(($question[1]["multiple"])?"'checkbox'":"'radio'")." name='question' id=''>".$k."</label></div></li>";
        }
        echo "</ul>";
        echo "</fieldset>";
        echo "</form>";
    }


    public function getButtons($index) {
        $nbQuestions = count($this->questions);
        if($index>0) {
            echo "<a class='btn btn-primary' href='questions.php?num=".((int)$index)."'>Question précedente</a>";
        }
        if($index<($nbQuestions-1)) {
            echo "<a class='btn btn-primary' href='questions.php?num=".((int)$index+2)."'>Question suivante</a>";
        }
        if(($index+1)==$nbQuestions) {
            echo "<a class='btn btn-primary' href='end.php'>Terminer le formulaire</a>";
        }
    }

}