<?php

class BDProduto{
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function salvar(Produto $produto){
        $sql = "INSERT INTO produto (dscricao, quantidade, valor)
                VALUES (:descricao, :quantidade, :valor)";
        
        $query = $this->pdo->prepare($sql);
        $query->execute([
            'descricao' => $produto->getDescicao(),
            'quantidade' => $produto->getQuantidade(),
            'valor' => $produto->getValor();
        ]);
    }

    public function buscar_produto($id){
        $sql = 'SELECT * FROM produto WHERE codigo = :id';
        $query = $this->pdo->prepare($sql);
        $query->execute([
            'codigo' => $id,
        ]);
    }

    public function buscar_produtos(){
        $sql = 'SELECT * FROM produto';
        $resultado = $this->pdo->query($sql, PDO::FECTH_CLASS, 'Produto');
        $produtos = [];

        foreach($resultado as $prod){
            $produtos[] = $prod;
        }
        return $produtos;
    }
}