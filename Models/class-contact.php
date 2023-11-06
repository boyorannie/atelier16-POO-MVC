<?php
include '../Models/class-bd.php';

class Contact{
   
    private $nom;
    private $prenom;
    private $numero_telephone;
    private $favori;
    
public function __construct($nom, $prenom, $telephone) {
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->numero_telephone=$telephone;
    
}

public function setNom($nom){

  
}


public function Ajoutcontact($db)
  {
    
    
    $sql="INSERT INTO contact (nom,prenom,numero_telephone) VALUES('$this->nom','$this->prenom','$this->numero_telephone')";
    $db->query($sql);
    
        echo 'ajout contact reussi';
  
}

public static function ListeContact($db){
$recup="SELECT * FROM contact";
$select=$db->query($recup);
if ($select) {
  $tab=$select->fetchALL(PDO::FETCH_ASSOC);
  return $tab;
}else {
  return $tab=[];
}
}

public static function getContact($db,$id){
  $getcontact="SELECT * FROM contact WHERE id=$id";
  $result=$db->query($getcontact)->fetch();
  return $result;

}
public static function getContactFavori($db){
  $getcontactFav="SELECT * FROM contact WHERE favori = 1";
  $result2=$db->query($getcontactFav)->fetchAll();
  return $result2;

}

public function Modifiercontact($db, $id){
$modifier="UPDATE contact SET nom='$this->nom', prenom='$this->prenom', numero_telephone='$this->numero_telephone', favori='$this->favori' WHERE id=$id";
$modifiercontact= $db->query($modifier);

if($modifiercontact){
  echo"modification validée";
}else {
  echo"modification invalide";
}


}


public static function Supprimercontact($db,$id){

  $supprimer="DELETE FROM contact WHERE id=$id";
  $supprimercontact=$db->query($supprimer);

  if($supprimercontact){
      echo"contact supprimé avec succès";
  }else{
      echo"contact non supprimé";
  }
}

public static function ContactFavori($db, $id){

  $favoricontact="UPDATE contact SET favori = 1 WHERE id = $id";
  $contactfavori=$db->query($favoricontact);

  if($contactfavori){
      echo"contact supprimé avec succés";
  }else{
      echo"contact non supprimé";
  }
}


// public static function Supprimerfavori($db,$id){

//   $supp="DELETE FROM contact WHERE favori = $id";
//   $supprimerfavori=$db->query($supp);

//   if($supprimerfavori){
//       echo"contact supprimé des contact favoris";
//   }else{
//       echo"contact non supprimé";
//   }
// }



}
?>