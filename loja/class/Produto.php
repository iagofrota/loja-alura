<?php
/**
 * Created by PhpStorm.
 * User: iagof
 * Date: 31/10/2017
 * Time: 20:57
 */
class Produto
{
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    private $nome;
    private $preco;
    private $descricao;
    private $categoria;
    private $usado;

    /**
     * @return mixed
     */
    public function isUsado()
    {
        return $this->usado;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $usado
     */
    public function setUsado($usado)
    {
        $this->usado = $usado;
    }

    public function __construct($nome, $descricao, $preco, $categoria, $usado)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->usado = $usado;
    }

    public function precoComDesconto($valor = 0.1)
    {
        if ($valor > 0 && $valor <= 0.5) {
            $this->preco -= $this->preco * $valor;
        }
        return $this->preco;
    }

    public function __destruct()
    {
        echo "Objeto produto destruído";
    }
}
