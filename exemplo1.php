<?php
class Produto{
    private $descricao;
    private $preco;



    public function getDetalhes(){
        return "O produto {$this->descricao} custa {$this->preco} reais";

    }
    public function setDescricao($valor){
        $this->descricao = $valor;
    }
    public function setPreco($valor){
        $this->preco = $valor;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function getPreco(){
        return $this->preco;
    }
}

$sp1 = new Produto;


$sp1->setDescricao = 'Livro';
$sp1->setPreco (50);


//var_dump($sp1);

echo $sp1->getDetalhes();