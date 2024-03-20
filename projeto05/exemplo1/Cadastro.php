<?php
    include 'conexao.php'; 
?>
<center>

<?php
    $nome=$_GET["nome"];
    $rg=$_GET["rg"];
    $cpf=$_GET["cpf"];
    $salario=$_GET["salario"];
    $funcao=$_GET["funcao"];

    function insere($conecta,$nome,$rg,$cpf,$salario,$funcao){

        $sql="insert into funcionarios(nome,rg,cpf,salario,funcao) 
              values ('$nome', '$rg', '$cpf', $salario, '$funcao')";

        $resultado=mysqli_query($conecta,$sql);
        return $resultado;
    
    }//FIM DA FUNÇÃO INSERE
    
    if(insere($conecta,$nome,$rg,$cpf,$salario,$funcao)){
        echo "Funcionario cadastrado com sucesso";

    }else{
        echo "ERRO";
        echo mysqli_error($conecta);

    }




?>
<br><br><br>

<button type="submit"><a href = 'index.html'>Voltar</button>
</center>