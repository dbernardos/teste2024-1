<?php
require_once 'model/Produto.php';
 
class ProdutoController {

    public function listar() {
        $produto = new Produto();
        $produtos = $produto->listAll();

        $_REQUEST['produtos'] = $produtos;
        
        require_once 'view/produtoView.php';
    }
}
?>