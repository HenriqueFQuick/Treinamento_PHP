<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao
{

    private $_titulo;

    private $_autor;

    private $_totPaginas;

    private $_pagAtual;

    private $_aberto;

    private $_leitor;


    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->_titulo = $titulo;
        $this->_autor = $autor;
        $this->_totPaginas = $totPaginas;
        $this->_pagAtual = 0;
        $this->_aberto = false;
        $this->_leitor = $leitor;
    }

    public function detalhes()
    {
        echo "<hr>Livro ". $this->_titulo . " escrito por " . $this->autor;
        echo "<br> Paginas: " . $this->_totPaginas . ", atual: ".$this->_pagAtual;
        echo "<br> Sendo lido por: " . $this->_leitor->getNome();
    }

    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear($pagina)
    {
        if($pagina >= $this->_totPaginas) {
            $this->_pagAtual = $this->_totPaginas-1;
        } else {
            $this->_pagAtual = $pagina;
        }
    }

    public function avancarPag()
    {
        if ($this->_pagAtual < $this->_totPaginas-1) {
            $this->_pagAtual ++;
        } else {
            $this->_pagAtual = $this->_totPaginas-1;
        }
    }

    public function voltarPag()
    {
        if ($this->_pagAtual-1 >= 0) {
            $this->_pagAtual --;
        } else {
            $this->_pagAtual = 0;
        }
    }



    public function getTitulo()
    {
        return $this->_titulo;
    }
    public function setTitulo($titulo)
    {
        $this->_titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->_autor;
    }
    public function setAutor($autor)
    {
        $this->_autor = $autor;
    }

    public function getTotPaginas()
    {
        return $this->_totPaginas;
    }
    public function setTotPaginas($totPaginas)
    {
        $this->_totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->_pagAtual;
    }
    public function setPagAtual($pagAtual)
    {
        $this->_pagAtual = $pagAtual;
    }

    public function getAberto()
    {
        return $this->_aberto;
    }
    public function setAberto($aberto)
    {
        $this->_aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->_leitor;
    }
    public function setLeitor($leitor)
    {
        $this->_leitor = $leitor;
    }
}