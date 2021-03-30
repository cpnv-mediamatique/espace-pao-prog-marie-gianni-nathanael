<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation mot de passe</title>
</head>
<body>
<form action="ok.php" method="get">
    <p>Votre id : <?=$_GET['id']?></p>
    <p>Votre nouveau mot de passe :</p>
        <input type="password" name="mdp"><br><br>
        <input name="id" value="<?=$_GET['id']?>"style='display:none'>
        <input name="hash" value="<?=$_GET['hash']?>"style='display:none'>
        <input type="submit">
</form>
</body>
</html>