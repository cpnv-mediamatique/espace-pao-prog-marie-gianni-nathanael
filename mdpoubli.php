<?php
require("connexion.php");

$requete = $bdd->prepare('  SELECT * 
                            FROM utilisateurs
                            WHERE id=:id');

$requete->execute(array(
'id'=>$_GET['id'],
));

$id=$requete->execute();

    $retour = mail($_POST['mail'], 'Votre mot de passe','veuillez cliquer sur le lien suivant : localhost/espace-pao/espace-pao-prog-marie-gianni-nathanael/changermdp.php?id='.$id.'', 'From : L\'espace entreprise');
    if ($retour) { //Il faudrait que le fait de demander le changement de mdp mette quelque chose dans la session et qu'on le vérifie
        if($_SESSION['demande']==$id){
            header('Location:index.php?mail=ok');
            
        }
    }
?>