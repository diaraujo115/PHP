
<?php include 'index.php'?>

<?php
     class Conversao {

            public $dolar, $cotacao, $resultado;

            function converter($dolar,$cotacao,$resultado){
                if ($dolar > 0 && $cotacao > 0) {
                    $resultado = $dolar * $cotacao;
                    return $resultado;

                  } else {
                    echo "<h2>Por favor, insira valores válidos.</h2>";
                  }


            } //FIM DO MÉTODO CONVERTER


            function imprimir($resultConv,$operacao){
              if($operacao=='resultado')
              echo "Valor em Reais: R$ $resultConv";
                

            } //FIM DO MÉTODO IMPRIMIR

     }// FIM DA CLASSE
    
     $calc = new Conversao;
     
     $resultConv=$calc->converter($_POST["dolar"],$_POST["cotacao"],$_POST["resultado"]);

     $calc->imprimir($resultConv,$_POST['operacao']);

     
    


?>  
