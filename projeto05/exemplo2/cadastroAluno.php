<?php
    include 'conexao.php'; 
?>

<?php
    include 'Aluno.php'; 
?>

<?php
    include 'banco-aluno.php'; 
?>
 

<?php
    
    $aluno1= new Aluno();
    $aluno->nome =$_GET['nome'];
    $aluno->matricula =$_GET['matricula'];
    $aluno->disciplina =$_GET['disciplina'];

    if(insere($conecta,$aluno)){
        echo "Aluno cadastrado com sucesso";

    }else{
        echo "ERRO";
        echo mysqli_error($conecta);

    }


?>
