<?php

class Pessoa
{

    private $_nome;

    private $_idade;

    private $_sexo;

    public function __construct($nome, $idade, $sexo)
    {
        $this->_nome = $nome;
        $this->_idade = $idade;
        $this->_sexo = $sexo;
    }

    public function getNome()
    {
        return $this->_nome;
    }
    public function setNome($nome)
    {
        $this->_nome = $nome;
    }

    public function getidade()
    {
        return $this->_idade;
    }
    public function setidade($idade)
    {
        $this->_idade = $idade;
    }

    public function getSexo()
    {
        return $this->_sexo;
    }
    public function setSexo($sexo)
    {
        $this->_sexo = $sexo;
    }

    public function fazerAniver()
    {
        return $this->idade ++;
    }
}