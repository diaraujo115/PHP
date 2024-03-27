<?php require_once 'conexao.php'; ?>

<?php require_once 'Produto.php';?>

<?php require_once 'banco-produto.php';?>


<?php
$prod=new Produto();
$prod->nome= $_POST["nome"];
$prod->quantidade= $_POST["quantidade"];
$prod->preco= $_POST["preco"];
$prod->fornecedor= $_POST["fornecedor"];

if (insereProduto($conecta,$prod)){
    echo "Sucesso";
}else{$erro=mysqli_error($conecta);
    echo $erro;
}




?>
