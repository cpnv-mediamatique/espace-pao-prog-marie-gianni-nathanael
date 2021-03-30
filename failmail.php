<?php
    include 'connexion.php';

$req = $bdd->prepare ('SELECT COUNT(*) AS numbermail FROM utilisateurs WHERE mail = <0');
$req->execute(array('mail' => $_POST["mail"]));
$ligne = $req->fetch();
var_dump ($ligne);
$req->debugDumpParams();

if($ligne["numbermail"] > 0){
 echo "email déjà utilisé !";}

 ?>

