<?php

require "config.php";
require 'model/Produto.php';
require "models/RepositorioProdutos.php";

$repositorio_produtos = new RepositorioProdutos($pdo);

// Rota padrão
$rota = "produto";

if(array_key_exists("rota", $_GET)){
    $rota = (string) $_GET["rota"];
}

if(is_file("controller/{$rota}.php")){
    require "controller/{$rota}.php";
}else{
    echo "Rota não encontrada";
}
?>