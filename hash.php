<?php

require("connexion.php");

$requete = $bdd->prepare('  SELECT * 
                            FROM utilisateurs
                            WHERE mail=:mail');

$requete->execute(array(
'mail'=>$_GET['mail'],
));

$bdd->query('               UPDATE utilisateurs
                            SET hash = RAND()*(25-10)+10
                            WHERE mail=:mail');

header('Location:mdpoubli.php'); 
?>