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

'   '        try{
            $query = "INSERT INTO {$this->table} (nome, email,senha,perfil) VALUES (:nome,:email,:senha,:perfil)";
            $stmt = $this->db->prepare($query);
        }catch(PDOException $e){
            echo "Erro na preparação da consulta".$e->getMessage();
        }
        
        $stmt->blindParam(':nome',$dados['nome']);
        $stmt->blindParam(':email',$dados['email']);
        $stmt->blindParam(':senha',$dados['senha']);
        $stmt->blindParam(':perfil',$dados['perfil']);

        try{
            $stmt->execute();
            echo "Inserção dem sucedida!";

        }catch(PDOException $e){
            echo"Erro na inscrição: ".$e->getMessage();
        }

        }

    
    /**
     * editar usuario
     * @param int $id
     * @param array $dados
     * @return bool 
     */
    public function editar($id,$dados){

        try{
            $query = "UPDATE {$this->table} SET nome = :nome, email = :email, senha = :senha WHERE id_usuario = :$id";
            $stmt = $this->db->prepare($query);
        }catch(PDOException $e){
            echo "erro na preparação da consulta :". $e->getMessage();
        }

        $stmt->blindParam(':nome', $dados['nome']);
        $stmt->blindParam(':email', $dados['email']);
        $stmt->blindParam(':senha', $dados['senha']);
        $stmt->blindParam(':perfil', $dados['perfil']);

        try{
            $stmt->execute();
            echo "Seus dados foram atualzados com sucesso!";
        }catch(PDOException $e){
            echo "Erro na inserção: ". $e->getMessage();
        }
    }
    //excluir usuario
    public function excluir($id){

    }

}