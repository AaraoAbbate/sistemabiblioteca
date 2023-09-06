<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/models/Usuario.php";

class UsuarioController{

    private $livroModel;

    public function __construct()
    {
        $this->livroModel = new Livro();
    }

    public function listarUsuario(){
        return $this->usuarioModel->listar();
    }
}