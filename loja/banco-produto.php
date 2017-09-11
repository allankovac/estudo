<?php
function listaProdutos($link){
    $produtos = array();
    $resultado = mysqli_query($link,'SELECT*FROM produtos');    
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos,$produto);
    }
    return $produtos;
}

function insereProduto($link,$nome,$preco,$descricao){
    $query = "INSERT INTO produtos(nome,preco,descricao) VALUES (
        '{$nome}',
        '{$preco}',
        '{$descricao}'   
    )";
    return mysqli_query($link,$query);
}

function removeProduto($link,$id){
    $query = "DELETE FROM produtos WHERE id={$id}";
    return mysqli_query($link,$query);
}