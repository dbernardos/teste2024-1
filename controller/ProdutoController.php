<?php

function tem_post(){
    if(count($_POST) > 0){
        return true;
    }
    return false;
}

$produto = new Produto();

if(tem_post()){
    if(array_key_exists('descricao', $_POST)){
        $produto->setDescricao($_POST['descricao']);
    } else {
        $produto->setDescricao("");
    }

    if(array_key_exists('quantidade', $_POST)){
        $produto->setQuantidade($_POST['quantidade']);
    } else {
        $produto->setQuantidade(0);
    }

    if(array_key_exists('valor', $_POST)){
        $produto->setValor($_POST['valor']);
    } else {
        $produto->setValor(0.0);
    }

    $bdproduto->salvar($produto);
    header('location: index.php?rota=ProdutoController');
    die();
}

$produtos = $bdproduto->buscar_produtos();