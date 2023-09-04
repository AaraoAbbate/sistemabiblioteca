<?php

class alunos{
    protected $db;
    protected $table = "alunos";

    public function __construct()
    {
        $this->db= DBConexao::getConexao();
    }
    /**
     * @param int
     * @return aluno
     */

    public function buscar($id){
       
        try{
        $query = ("SELECT * FROM {$this->table} WHERE id_aluno = :id");
        $stmt = $this->db->prepare($query);
        $stmt->blindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

        if($aluno){
            echo "ID" .$aluno['id_aluno'] . "<br>";
            echo "nome" .$aluno['nome'] . "<br>";
            echo "cpf" .$aluno['cpf'] . "<br>";
            echo "email" .$aluno['email'] . "<br>";
            echo "telefone" .$aluno['telefone'] . "<br>";
            echo "celular" .$aluno['celular'] . "<br>";
            echo "data nascimento" .$aluno['data_nascimento'] . "<br>";
        }
        }catch(PDOException $e){
            echo "Erro na inserção: ".$e->getMessage();        
        }

        

    }

    public function listar(){

    }
    /**
     * cadastrar aluno
     * @param array
     * @return
     */

     
}

