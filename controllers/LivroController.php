<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/models/Livro.php";

class LivroController{

    private $livroModel;

    public function __construct()
    {
        $this->livroModel = new Livro();
    }

    public function listarLivro(){
        return $this->livroModel->listar();
    }

    
    public function cadastrarLivro(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $dados = [
                'titulo' => $_POST['titulo'],
                'autor' => $_POST['autor'], 
                'numero_pagina' => $_POST['numero_pagina'],
                'preco' => $_POST['preco'],
                'ano_publicacao' => $_POST['ano_publicacao'],
                'isbn' => $_POST['isbn']
            ];

            $this->livroModel->cadastrar($dados);
            header('location: index.php');
            exit;
            //var_dump($dados);
        }
    }

    public function editarLivro(){

        $id_livro=$_GET['id_livro'];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        
            $dados = [
                'titulo' => $_POST['titulo'],
                'autor' => $_POST['autor'],
                 //password_hash Password_default são formatos de criptografias de senhas altamente seguras
                'perfil' => $_POST['perfil']
            ];

            $this->livroModel->editar($id_livro, $dados);

            header('location: index.php');
            exit;
    }
    return $this->livroModel->buscar($id_livro);
}

public function excluirLivro(){
    $this->livroModel->excluir($_GET['id_livro']);
    
    header('location: index.php');
            exit;
}
}
