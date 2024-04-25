<?php

$exibir_tabela = true;

$tem_erros = false;
$erros_validacao = [];

$produto = new Produto();

if (tem_post()) {

    if (array_key_exists('descricao', $_POST) && strlen($_POST['descricao']) > 0) {
        $produto->setDescricao($_POST['descricao']);
    } else {
       // $produto['descricao'] = '';
        $tem_erros = true;
        $erros_validacao['nome'] = 'A descrição do produto é obrigatório!';
    }

    if (array_key_exists('quantidade', $_POST)) {
        $produto->setQuantidade($_POST['quantidade']);
    } else {
       $produto['quantidade'] = 0;
    }

    if (array_key_exists('valor', $_POST)) {
        $produto->setValor($_POST['valor']);
    } else {
        $produto['valor'] = 0.0;
    }

    if (! $tem_erros) {
        $repositorio_produtos->salvar($produto);

        header('Location: index.php?rota=produto');
        die();
    }
}

$produtos = $repositorio_produtos->buscar();

require __DIR__ . "/../views/template.php";
