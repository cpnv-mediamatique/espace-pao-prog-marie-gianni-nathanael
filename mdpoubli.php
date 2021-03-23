<?php
require("connexion.php");

$requete = $bdd->prepare('  SELECT * 
                            FROM utilisateurs
                            WHERE mail=:mail');

$requete->execute(array(
'mail'=>$_GET['mail'],
));

$mail=$requete->fetch();
$id=$mail['id'];
$hash=$mail['hash'];
mail($_GET['mail'], 'Votre mot de passe','veuillez cliquer sur le lien suivant : localhost/espace-pao/espace-pao-prog-marie-gianni-nathanael/mdpoubli2.php?id='.$id.' et entrer le code suivant : '.$hash.'', 'From : L\'espace entreprise');


?>