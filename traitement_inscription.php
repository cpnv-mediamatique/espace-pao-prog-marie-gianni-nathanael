<?php 


    
        // ON SE CONNECTE ET ON SELECTIONNE LA BASE
          include 'connexion.php';
           
        // UNE BOUCLE POUR INFORMER L'UTLISATEUR
          if(isset($_POST['mail'])){
      
              // ON VERIFIE SI LE MAIL EST DANS LA TABLE
              $req  = $bdd->prepare ("SELECT COUNT(*) AS nbr FROM utilisateurs WHERE mail = :mail");
              $req->execute(array('mail' => $_POST["mail"]));
              $ligne = $req->fetch();

            if($ligne['nbr'] == 0){
        // Vérification de la validité des informations

        // Hachage du mot de passe
        $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        // Insertion
        $req = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, mdp, mail) VALUES(:nom, :prenom, :mdp, :mail)');
        $req->execute(array(
            
            'nom' => $_POST["nom"],
            'prenom' => $_POST["prenom"],
            'mdp' => $pass_hache,
            'mail' => $_POST["mail"]));

        header("Location: index.php");
        
        }
        else{
            header("Location: failmail.php");
        }
}    
?>