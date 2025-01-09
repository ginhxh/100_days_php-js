<?php


class Database{
    private $dbhost ="localhost";
    private $dbname ="use_pro";
    private $dbuser ="root";
    private $dbpwd = "" ;
    private $pdo ;

try{

    $this->pdo=new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->dbuser,$this->dbpwd);
    $this->pdo->



}



}