
<?php include 'index.php'?>

<?php
     class Poupanca {

            public $poupanca, $resultado;

            function poupanca($poupanca,$resultado){
                if ($poupanca > 0) {
                    $resultado = $poupanca+($poupanca * 0.070) ;
                    return $resultado;

                  } else {
                    echo "<h2>Por favor, insira valores válidos.</h2>";
                  }


            } //FIM DO MÉTODO CONVERTER


            function imprimir($resultConv,$operacao){
              if($operacao=='resultado')
              
              echo "Valor do deposito após um mês de rendimento (0,70% a.m): R$ $resultConv";
                

            } //FIM DO MÉTODO IMPRIMIR

     }// FIM DA CLASSE
    
     $calc = new Poupanca;
     
     $resultConv=$calc->poupanca($_POST["poupanca"],$_POST["resultado"]);

     $calc->imprimir($resultConv,$_POST['operacao']);

     
    


?>  
