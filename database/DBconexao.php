<?php

class DBconexao{
    private $host = "localhost";
    private $dbname = "biblioteca";
    private $username = "root";
    private $password = "senac2023";

    private $conx;
    private static $instance = null;

    public function __construct()
    {
        try{
            //Iniciar a conexao
            $this->conx = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8",$this->username,$this->password);
            $this->conx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            //capturar o erro da conexão
            echo "Erro na conexão com o banco de dados: ".$e->getMessage();
        }
    }
    
    /**
    *Metodo estatico para obter a instancia inica conexao (Implementação do singleton)
    */
    public static function getConexao(){
        if(!self::$instance){
            self::$instance = new DBconexao();
        }
        return self::$instance->conx;
    }
}