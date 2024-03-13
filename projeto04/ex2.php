<?php include 'index.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


</head>

<body>
<center>

           <form method="POST" action="Conversao.php" >
                         <p >Valor em dólar: </p>
                         <input type="text"  name="dolar" > <br> <br>
			             <p >Valor da cotação do dólar: </p>
 			             <input type="text"  name="cotacao">  <br>

                    <br>
	       	    <button type="submit" name="operacao" value="resultado">
                             Resultado 
                        </button>
  			    

	       		                    
                </form>
       
</center>

</body>

</html>