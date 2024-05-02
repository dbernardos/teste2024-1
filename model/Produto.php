<?php

class Produto{
    private $codigo;
    private $descricao;
    private $quantidade;
    private $valor;

    public function _construct($codigo, $descricao, $quantidade, $valor){
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
        $txt += "Descrição: " . $this->descricao . "<br>"
        $txt += "Quantidade: " . $this->quantidade . "<br>"
        $txt += "Valor: " . $this->valor . "<br>"
    }
}