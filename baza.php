<?php
class baza{
    private $pdo;
    function __construct(){
        $host = 'localhost';
        $db = 'picerija';
        $user ='root';
        $pass='';
        $charset='utf8';
        $dsn="mysql:host=$host; port=3306; dbname=$db; charset=$charset";
        $options=array(
            PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"
        );
        try{
            $this->pdo=new PDO($dsn,$user,$pass,$options);
        }catch(PDOException $e){
            echo "Kon JOK: ".$e->getMessage();
        }
    }
    function selectQuery($sql, $tip=PDO::FETCH_ASSOC){
        $podaci=$this->pdo->query($sql);
        if($podaci === false)
            die("Los SQL");
        return $podaci->fetchAll($tip);
    }
    function prepState($sql, $tip=PDO::FETCH_ASSOC){
        $podaci=$this->pdo->prepare($sql);
        if($podaci==false)
            die("Los upit: ".$conn->error);
        $podaci->execute();
    }
    function dajRanu(){
        return $this->selectQuery("SELECT * FROM hrana where Tip='brusketi'");
    }
    function podaciSajta(){
        return $this->selectQuery("SELECT Naziv,Kraci_text,Duzi FROM sajt",PDO::FETCH_UNIQUE);
    }
    function innerHtml(){
        return $this->selectQuery("SELECT Kraci_text,Naziv,Duzi FROM sajt",PDO::FETCH_UNIQUE);
    }
    function meni(){
        return $this->selectQuery("SELECT Naziv,Slika FROM meni");
    }
    function slider(){
        return $this->selectQuery("SELECT * FROM slajder_onama ORDER BY Redosled ASC");
    }
    function hrana(){
        return $this->prepState("SELECT * FROM hrana WHERE ID_hrane=?",PDO::FETCH_UNIQUE);
    }
}
$db=new baza();


?>