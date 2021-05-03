<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    
</body>
</html>

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

$remplacement = $bdd->prepare(' UPDATE utilisateurs
                                SET hash = RAND()*(25-10)+10
                                WHERE mail=:mail');
$remplacement->execute(array(
    'mail'=>$_GET['mail'],
));

$requete = $bdd->prepare('  SELECT * 
                            FROM utilisateurs
                            WHERE mail=:mail');

$requete->execute(array(
'mail'=>$_GET['mail'],
));

$mail=$requete->fetch();
$id=$mail['id'];
$hash=$mail['hash'];

mail($_GET['mail'], 'Votre mot de passe','veuillez cliquer sur le lien suivant : localhost/espace-pao/espace-pao-prog-marie-gianni-nathanael/mdpoubli2.php?id='.$id.'&hash='.$hash.'', 'From : L\'espace entreprise');

header('Location: index.php');

?>