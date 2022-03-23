<?php

class Database {

    private $db_name;
    private $db_user;
    private $db_pass; 
    private $db_host; 
    private $pdo;

    public function __construct($db_name='bdmedecins', $db_user='root', $db_pass='', $db_host='localhost' ){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;

    }
  //conexion a la basse de donnée  && verification des errore 
    private function getPDO(){
        if ($this->pdo === null) { 
        
            $pdo = new PDO('mysql:host=localhost;dbname=bdmedecins;charset=utf8','root','',); // connexion basse de donnée
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // pour detecter les errores
            $this->pdo = $pdo;
            
        
        }
        return $pdo;
    }
    
    // Prépare  requette SQL 
    
    public function query($statement){
        $req = $this->getpdo()->query($statement);
        // $datas = $req->fetch();
        return $req;
    }

    public function prepar($statement){
        $req = $this->getpdo()->prepare($statement);
        return $req;
    }

}

