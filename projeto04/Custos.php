
<?php include 'index.php'?>

<?php
     class Custos {

            public $fabrica, $resultado;

            function custo($fabrica,$imposto,$resultado){
                if ($fabrica > 0) {
                    $imposto = $fabrica+($fabrica * 0.45) ;
                    $resultado = $imposto+($imposto* 0.28);
                    return $resultado;

                  } else {
                    echo "<h2>Por favor, insira valores válidos.</h2>";
                  }


            } //FIM DO MÉTODO CONVERTER


            function imprimir($resultConv,$operacao){
              if($operacao=='resultado')
              
              echo "Valor do veículo após as taxas: R$ $resultConv";
                

            } //FIM DO MÉTODO IMPRIMIR

     }// FIM DA CLASSE
    
     $calc = new Custos;
     
     $resultConv=$calc->custo($_POST["fabrica"],$_POST["imposto"],$_POST["resultado"]);

     $calc->imprimir($resultConv,$_POST['operacao']);

     
    


?>  
