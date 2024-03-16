<?php include 'index.php'?>
<?php
  class Matematica{
	public $n1,$n2,$maior,$mult;
    function maior($n1,$n2){
	  if($n1>$n2){
		  return $n1;
	  }else{
		  return $n2; 
	  }
	}//fim do método maior
	 function mult($n1,$n2){
		$mult=$n1*$n2;
		 return $mult;
	}//fim do método mult
	 function imprimir($resultMaior,$resultMult,$operacao){
		if($operacao=='maior')
			echo "Maior: $resultMaior <br>";
		else if($operacao=='mult')
		    echo "Multiplicação: $resultMult";
	}//fim do método imprimir
  }//fim da classe  
 $calc=new Matematica;
 $resultMaior=$calc->maior($_POST["n1"],$_POST["n2"]);
 $resultMult=$calc->mult($_POST["n1"],$_POST["n2"]);
 $calc->imprimir($resultMaior,$resultMult,$_POST['operacao']);
?>