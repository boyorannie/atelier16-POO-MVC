<?php 
include '../Controllers/traitement.php';
$tableau= Contact::ListeContact($db);
$tableau2= Contact::getContactFavori($db);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header> 
    <h1> LISTE CONTACTS AJOUTES</h1>
</header>
<body>
    <form action="" method="post">
        <?php if(is_array($tableau) && count($tableau)>0) {?>
            <table style=" border:1px solid black;">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Numero-telephone</th>
            <th>bouton</th>
            
        </tr>
     <?php foreach($tableau as $tab){?>
        <tr>
            <td style="border:1px solid black;"><?=$tab['nom']?> </td>
            <td style="border:1px solid black;"><?=$tab['prenom']?></td>
            <td style="border:1px solid black;"><?=$tab['numero_telephone']?></td>
            <td>
            <form action="" method="post"> 
      
            <input type="hidden" name="idContact" value="<?= $tab['id']?>">
            <button type="submit" name="supprimer" class="btn btn-danger">Supprimer contact</button>
            <input type="hidden" name="idContact" value="<?= $tab['id']?>">
            <button type="submit" name="favori" class="btn btn-danger">Favori contact</button>
            <a href="../Views/form-modif.php?id=<?= $tab['id']   ?>">Modifier</a>

                </form>
                </td>
            <?php } ?>
            </td>
        </tr>
       
        <?php }?>
        </table>
    </form>

    <header> 
    <h1> LISTE CONTACTS FAVORIS</h1>
</header>
<body>
    <form action="" method="post">
        <?php if(is_array($tableau) && count($tableau)>0) {?>
            <table style=" border:1px solid black;">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Numero-telephone</th>
            <th>bouton</th>
            
        </tr>
     <?php foreach($tableau2 as $tab){?>
        <tr>
            <td style="border:1px solid black;"><?=$tab['nom']?> </td>
            <td style="border:1px solid black;"><?=$tab['prenom']?></td>
            <td style="border:1px solid black;"><?=$tab['numero_telephone']?></td>

            <td>
            <form action="" method="post"> 
      
            <input type="hidden" name="idContact" value="<?= $tab['id']?>">
            <button type="submit" name="supprimer" class="btn btn-danger">Supprimer contact</button>
            <a href="../Views/form-modif.php?id=<?= $tab['id']   ?>">Modifier</a>

                </form>
                </td>
            <?php } ?>
            </td>
        </tr>
       
        <?php }?>
        </table>
    </form>
</body>
</html>