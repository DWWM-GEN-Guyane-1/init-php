<?php
session_start();
$errorMsg = "";
$validUser = $_SESSION["login"] === true;
if(isset($_POST["sub"])) {
  $validUser = $_POST["username"] == "admin" && $_POST["password"] == "password";
  if(!$validUser) $errorMsg = "Utilisateur ou mot de passe incorrect";
  else $_SESSION["login"] = true;
}
if($validUser) {
   header("Location: /login-success.php"); die();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[e-commerce] php</title>
    <link rel="stylesheet" href="style.css" media="screen" type="text/css">
</head>
<body>
    <div id="container">

        <!-- zone de connexion -->
        <form action="verification.php" method="POST">
            <h1>Connexion</h1>
            
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN'>

        </form>
    </div>
</body>
</html>