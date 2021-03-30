<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation mot de passe</title>
</head>
<body>
<?php
require("connexion.php");
$id = $_GET['id'];
$mdp = $_GET['mdp'];
$hash = $_GET['hash'];

    $bdd->query('       UPDATE utilisateurs
                        SET mdp = "'.$mdp.'"
                        WHERE id ='.$id.'
                        AND hash = '.$hash.'
                        ');
    $bdd->query('       UPDATE utilisateurs
                        SET hash = ""
                        WHERE id='.$id.'
                        ');

    echo '<p>Votre mot de passe a été changé</p>';
?>


</body>
</html>