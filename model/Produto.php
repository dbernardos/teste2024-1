<?php
class Produto{
    private $codigo;
    private $descricao;
    private $quantidade;
    private $valor;

    public function _contruct($codigo, $descricao, $quantidade, $valor){
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }

    public function toString(){
        $txt = "Codigo: " . $this->codigo . "<br>";
        $txt += "Descrição: " . $this->descricao . "<br>";
        $txt += "Quantidade: " . $this->quantidade . "<br>";
        $txt += "Valor: " . $this->valor . "<br>";
        return $txt;
    }

    public function save() {
    // logica para salvar cliente no banco
    }
    
    public function update() {
    // logica para atualizar cliente no banco
    }
    
    public function remove() {
    // logica para remover cliente do banco
    }
    
    public function listAll() {
    		// Conexão com o banco de dados
            $conn = new mysqli("localhost", "root", "", "aps20241");

            // Verifica se houve algum erro na conexão
            if ($conn->connect_error) {
                die("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }
    
            // Query para selecionar todos os produtos
            $sql = "SELECT * FROM produtos";
    
            // Executa a query
            $result = $conn->query($sql);
    
            // Verifica se há resultados
            if ($result->num_rows > 0) {
                // Inicializa um array para armazenar os produtos
                $produtos = array();
    
                // Loop através dos resultados e armazena cada produto no array
                while ($row = $result->fetch_assoc()) {
                    $produtos[] = $row;
                }
    
                // Fecha a conexão com o banco de dados
                $conn->close();
    
                // Retorna o array de produtos
                return $produtos;
            } else {
                // Se não houver produtos, retorna um array vazio
                return array();
            }
    }

    
}
?>