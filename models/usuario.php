<?php

class Usuario{

    protected $db;
    protected $table = "usuarios";

    public function __construct()
    {
        $this->db = DBconexao::getConexao();
    }
    /**
     *  buscar registro unico
     * @param int $id
     * @return Usuario
     * 
     */
    public function buscar($id){

    }
    /**
     * listar todos os registros da tabela
     */
    public function listar(){

    }
    /**
     * Cadastrar Usuario
     * @param array $dados
     * @return bool
     */
    public function cadastrar($dados){

    }
    /**
     * editar usuario
     * @param int $id
     * @param array $dados
     * @return bool 
     */
    public function editar($id,$dados){

    }
    //excluir usuario
    public function excluir($id){

    }

}