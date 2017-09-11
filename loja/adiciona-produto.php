<?php
include "cabecalho.php";
include "conecta.php";
include "banco-produto.php";

$nome = $_POST['nome']; 
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];


if(insereProduto($link,$nome,$preco,$descricao)){
    echo "<p class='alert-success'>O produto {$nome}, {$preco} foi adicionado.</p>";
}
else{
    $msg = mysqli_error($link);
    echo"<p class='alert-danger'>O produto {$nome} não foi adicionado:{$msg}</p>";
}
echo "<h2>Produto adicionado com sucesso!</h2>";
include "rodape.php";

