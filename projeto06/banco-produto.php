<?php require_once 'Produto.php';?>

<?php

function insereProduto($conecta,$prod){
    $sql="insert into estoque(nome,quantidade,preco,fornecedor) 
    values ('$prod->nome', 
            $prod->quantidade,
            $prod->preco,
            '$prod->fornecedor')";
    $resultado=mysqli_query($conecta,$sql);
    return $resultado;
}

?>