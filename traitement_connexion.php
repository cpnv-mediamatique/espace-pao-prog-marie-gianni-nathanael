<?php

        // On démarre la session AVANT d'écrire du code HTML
        include 'connexion.php';


        //  Récupération de l'utilisateur et de son pass hashé
        $req = $bdd->prepare('SELECT id, pass FROM utilisateurs WHERE mail = :mail');
        $req->execute(array(
            'mail' => $_POST["mail"]));
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
                //header("Location: indexconnect.php");   
            }
            else {
                echo 'Mauvais identifiant ou mot de passe!';
            }
        }
    

    
?>
