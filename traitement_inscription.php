<?php 



        include 'connexion.php';
    

        // Vérification de la validité des informations

        // Hachage du mot de passe
        $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        // Insertion
        $req = $bdd->prepare('INSERT INTO utilisateurs(nomprenom, mdp, mail) VALUES(:nomprenom, :mdp, :mail)');
        $req->execute(array(
            
            'nomprenom' => $_POST["nomprenom"],
            'mdp' => $pass_hache,
            'mail' => $_POST["mail"]));

        //header("Location: index.php");
        



/*

session_start();

include 'loginbdd.php';

$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

$req = $bdd->prepare ('SELECT COUNT(*) AS number_user FROM `membre` WHERE pseudo = :pseudo');
$req->execute(array(':pseudo' => $_POST["pseudo"]));
$ligne = $req->fetch();
var_dump ($ligne);
$req->debugDumpParams();
if($ligne["number_user"] > 0){
 echo "pseudo déjà utilisé !";

}else{
    
$req = $bdd->prepare ('SELECT COUNT(*) AS number_user FROM `membre` WHERE email = :email');
$req->execute(array(':email' => $_POST["email"]));
$ligne = $req->fetch();
if($ligne["number_user"] > 0){
    
    echo "Email déjà utilisé !";
    
}else{


$req = $bdd->prepare ('SELECT COUNT(*) AS == FROM `membre` WHERE pass = :pass');
$req->execute(array(':confirm_pass' => $_POST["pass"]));
$ligne = $req->fetch();
if($ligne["number_user"] > 0){
    
    echo " Les 2 mots de passe sont différents!";
    
}else{

    if ( $_POST['confirm_pass'] == $_POST['pass'] )




fffff   QAWXECNN



          
$req = $bdd->prepare ('INSERT INTO membre(pseudo, pass, email, date_inscription) VALUES(:email, :pass, :email, CURDATE())');
$req->execute(array(
    ':pseudo' => $_POST["pseudo"],
    ':pass' => $pass_hache,
    ':confirm_pass' => $_POST["pass"],
    ':email' => $_POST["email"]));
    
    }


*/?>