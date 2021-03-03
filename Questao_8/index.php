<?php 
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $pessoas[0] = new Pessoa("Pedro", 22, "M");
    $pessoas[1] = new Pessoa("Maria", 31, "F");

    $livros[0] = new Livro("PHP Basico", "Jose da Silva", 300, $pessoas[0]);
    $livros[1] = new Livro("POO PHP", "Maria de Souza", 500, $pessoas[0]);
    $livros[2] = new Livro("PHP Avançado", "Ana Paula", 800, $pessoas[1]);

    $livros[0]->folhear(300);
    $livros[0]->avancarPag();

    $livros[0]->detalhes();
    $livros[1]->detalhes();
    $livros[2]->detalhes();
?>