<?php

class RepositorioProdutos
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function salvar(Produto $produto)
    {

        $sqlGravar = "
            INSERT INTO protudo
            (descricao, quantidade, valor)
            VALUES
            (:descricao, :quantidade, :valor)
        ";
        $query = $this->pdo->prepare($sqlGravar);
        $query->execute([
            'descricao' => strip_tags($produto->getDescricao()),
            'quantidade' => $produto->getQuantidade(),
            'valor' => $produto->getValor(),
        ]);
    }

    public function atualizar(Produto $produto)
    {
        $sqlEditar = "
            UPDATE produto SET
                descricao = :descricao,
                quantidade = :quantidade,
                valor = :valor
            WHERE codigo = :id
        ";

        $query = $this->pdo->prepare($sqlEditar);

        $query->execute([
            'descricao' => strip_tags($produto->getDescricao()),
            'quantidade' => $produto->getQuantidade(),
            'valor' => $produto->getValor(),
            'codigo' => $produto->getCodigo(),
        ]);
    }

    public function buscar($produto_id = 0)
    {
        if ($produto_id > 0) {
            return $this->buscar_produto($produto_id);
        } else {
            return $this->buscar_produtos();
        }
    }

    private function buscar_produtos()
    {
        $sqlBusca = 'SELECT * FROM produto';
        $resultado = $this->pdo->query(
            $sqlBusca,
            PDO::FETCH_CLASS,
            'Produto'
        );

        $produtos = [];

        foreach ($resultado as $produto) {
            $produto[] = $produto;
        }

        return $produtos;
    }

    private function buscar_produto($id)
    {
        $sqlBusca = "SELECT * FROM produtos WHERE codigo = :id";
        $query = $this->pdo->prepare($sqlBusca);
        $query->execute([
            'codigo' => $id,
        ]);

        $produto = $query->fetchObject('Produto');

        return $produto;
    }

    public function remover($id)
    {
        $sqlRemover = "DELETE FROM produto WHERE codigo = :id";

        $query = $this->pdo->prepare($sqlRemover);

        $query->execute([
            'codigo' => $id,
        ]);
    }
}
