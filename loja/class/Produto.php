<?php
/**
 * Created by PhpStorm.
 * User: iagof
 * Date: 31/10/2017
 * Time: 20:57
 */
class Produto
{
    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
    public $usado;

    public function precoComDesconto($valor = 0.1)
    {
        $this->preco -= $this->preco * $valor;
        return $this->preco;
    }
}
