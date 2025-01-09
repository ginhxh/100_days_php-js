<?php

Class Db{
private $dbname ='uer_pro';
private $dbhost='localhost';
private $dbpwd='';
private $dbuser='root';
private $pdo;

public function __construct()
{
   try{
    $this->pdo=new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->dbuser,$this->dbpwd);
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo 'connection done';
   } 
catch(PDOException $e){
    echo 'connection failed ' . $e->getMessage();
}
}

public function connect(){
return $this->pdo;

}


}

