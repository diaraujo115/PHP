<?php include 'index.php'?>

<?php
     class Conversao {

            public $dolar, $cotacao, $resultado;

            function converter($dolar,$cotacao){

                $converter=$dolar*$cotacao;
                return $converter;


            } //FIM DO MÉTODO CONVERTER


            function imprimir($resultConv){
                echo "Resultado:$resultConv";
                

            } //FIM DO MÉTODO IMPRIMIR

     }// FIM DA CLASSE
    
     $calc = new Conversao;
     $resultConv=$calc->converter($_POST["dolar"],$_POST["cotacao"]);

     
    


?>  