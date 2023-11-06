<?php 
include '../Controllers/traitement.php';
// include '../Models/class-contact.php';
$modifcontact=Contact::getContact($db,$_GET['id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
  </head>
<header class="header">

<h1>Plateforme de gestion de contacts personnels</h1> </header>
<body>
    

<form action="" method="post">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" value="<?php echo $modifcontact['nom']?>"><br><br>
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" name="prenom" class="form-control" value="<?php echo $modifcontact['prenom']?>"><br><br>
  </div>
  </div>
  <div class="mb-3">
  <label for="" class="form-label">Numéro de Téléphone</label><br>
  <input type="number"  name="telephone" value="<?php echo $modifcontact['numero_telephone']?>"><br><br>
  </div><br>

</div>
<button type="submit" name="modifier" class="btn btn-success">Modifier Contact</button>

</form>



</body>
</html>