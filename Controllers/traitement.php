<?php

include '../Models/class-contact.php';




        if ($_SERVER["REQUEST_METHOD"] === "POST") 
        {
    
            if (isset($_POST["ajouter"])) 

            {
               
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $numero_telephone = $_POST['telephone'];
            $favori = isset($_POST["favori"]) ? 1 : 0; 

            $contact = new Contact($nom, $prenom, $numero_telephone, $favori);

            $contact->Ajoutcontact($db);

            echo "Le contact a été ajouté avec succès.";
  
          }
        }
    
    
    if(isset($_POST['modifier'])){
      
        if (empty($_POST['nom']) ||empty($_POST['prenom']) || empty($_POST['telephone'])){
            echo "tous les champs sont obligatoires";
        
        } else{

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $numero_telephone = $_POST['telephone'];
       

            $modifier = new Contact($nom, $prenom, $numero_telephone);

            $modifier->Modifiercontact($db, $_GET['id']);
        }
       



    }
    
    if(isset($_POST['supprimer'])){
        $id=intval($_POST['idContact']);
        Contact::Supprimercontact($db,$id);
       
       
    }
    if(isset($_POST['favori'])){
        $id=intval($_POST['idContact']);
        Contact::ContactFavori($db,$id);
       
       
    }
    
    
       
       

 
?>
