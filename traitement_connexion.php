<?php

        // On démarre la session AVANT d'écrire du code HTML
        include 'connexion.php';


        //  Récupération de l'utilisateur et de son pass hashé
        $req = $bdd->prepare('SELECT id, pass FROM membres WHERE name = :name');
        $req->execute(array(
            'name' => $_POST["name"]));
        $resultat = $req->fetch();

        

        if (!$resultat)
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else
        {
            
            // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);
            
            //echo $_POST['pass'] ."|";
           //echo $resultat['pass'];
            
            
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['name'] = $_POST["name"];
                echo 'Vous êtes connecté !';
                header("Location: supersite.php");   
            }
            else {
                echo 'Mauvais identifiant ou mot de passe!';
            }
        }
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Connex fail</h2>
    <a href="connexion.html">Re-connexion ici !</a>
    
    <a href="trait_inscription.php">Ou peut-être inscription ?</a>
</body>
</html>
