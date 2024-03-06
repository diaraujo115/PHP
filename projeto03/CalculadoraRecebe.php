<?php
    // nome da classe sempre maíusculo
    class CalculadoraRecebe{

        //atributos(variaveis)
        public $numero1;
        public $numero2;
        public $acao;
        public $resultado;

        //métodos
        function calcular($numero1, $numero2, $acao){


        if(is_numeric($numero1) && is_numeric($numero2)){
        
            if($acao=="somar"){
                $resultado=$numero1+$numero2;
                echo "<center><h1>  RESULTADO DA SOMA =  $resultado</h1></center>";

            }else if($acao=="subtrair"){
                $resultado=$numero1-$numero2;
                echo "<center><h1>  RESULTADO DA SUBTRAÇÃO =  $resultado</h1></center>";

            }else if($acao=="multiplicar"){
                $resultado=$numero1*$numero2;
                echo "<center><h1>  RESULTADO DA MULTIPLICAÇÃO =  $resultado</h1></center>";

            }else if($acao=="dividir"){
                $resultado=$numero1/$numero2;
                echo "<center><h1>  RESULTADO DA MULTIPLICAÇÃO =  $resultado</h1></center>";}

            } else {
                echo " Digite somentes números";
            }

        }// fim do método
    

    }// fim da classe

    // criando objetos
    $matematica=new CalculadoraRecebe;
    $matematica ->calcular($_POST["numero1"],    
                           $_POST["numero2"],
                           $_POST["acao"]);


?>