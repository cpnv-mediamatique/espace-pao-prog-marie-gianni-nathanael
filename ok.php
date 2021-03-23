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

$code = $_GET['code'];
$mdp = $_GET['mdp'];

$requete = $bdd->prepare('  SELECT * 
                            FROM utilisateurs
                            WHERE mail=:mail');

$requete->execute(array(
'mail'=>$_GET['mail'],
'hash'=>$_GET['hash']
));

if($requete['hash'] == $code){
    $bdd->prepare('     UPDATE utilisateurs
                        SET mdp = 
                        WHERE id =')

    echo '<p>Votre mot de passe a été changé</p>';
}
else{
    echo 'bug';
}
?>


</body>
</html>