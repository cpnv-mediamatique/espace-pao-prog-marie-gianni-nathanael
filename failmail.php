<?php

$req = $bdd->prepare ('SELECT COUNT(*) AS numbermail FROM `mail` WHERE mail = > 0:');
$req->execute(array(':mail' => $_POST["mail"]));
$ligne = $req->fetch();
var_dump ($ligne);
if($ligne["number_user"] > 0){
 echo "pseudo déjà utilisé !";



?>;