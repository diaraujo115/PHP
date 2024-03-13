<?php include 'index.php'?>

<?php
     class Matematica {

            public $n1, $n2, $maior, $mult;

            function maior($n1, $n2){
            if($n1>$n2){
                echo $n1;
            }else{
                echo $n2;
            }

            }

            } //FIM DO MÉTODO MAIOR

            function mult(){


            } //FIM DO MÉTODO MULT

            function imprimir(){


            } //FIM DO MÉTODO IMPRIMIR

     }// FIM DA CLASSE

     $calc = new Matematica;
     $calc ->maior ($_POST["n1"],$_POST["n2"]);


?>