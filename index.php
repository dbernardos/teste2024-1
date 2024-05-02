<?php
    require "config.php";
    require "model/Produto.php";
    require "model/BDProduto.php";

    $bdproduto = new BDProduto($pdo);

    //rota padrão
    $rota = "ProdutoController";

    if(array_key_exists("rota", $_GET)){
        $rota = (string) $_GET['rota'];
    }

    if(is_file("controller/{$rota}.php")){
        require "controller/{$rota}.php";
    } else {
        echo "Rota não encontrada";
    }
?>