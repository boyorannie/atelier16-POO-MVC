<?php


class BaseDonnee
{
   private $conn;
   private $host="localhost"; 
   private $dbname; 
   private $username="root";
   private $password="";


public  function __construct($data) 
{
$this->dbname=$data;
   
}



public function Connexion()
{
    try {
    
    
      
 $this->conn = new PDO("mysql:localhost=$this->host;dbname=$this->dbname", $this->username, $this->password);
   
return $this->conn;
} catch (PDOException $e) {
    echo "oupsss connexion echouée".$e->getMessage();
}
}
public function getConnexion()
{
    return $this->conn;
}


}

$connexion= new BaseDonnee('gestion-contact');

$db=$connexion->Connexion();


?>