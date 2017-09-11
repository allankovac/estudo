<?php
include 'conecta.php';
include 'banco-produto.php';

$id = $_POST['id'];
removeProduto($link,$id);
header("location:produto-lista.php?removido=true");
die();
?>

