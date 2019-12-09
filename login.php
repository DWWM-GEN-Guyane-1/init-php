<?php session_start(); /* Démarre la session */
/* Vérifier le formulaire de connexion soumis */if(isset($_POST['Submit'])){
/* Définir le nom d'utilisateur et le tableau de mots de passe associé */$logins = array('Tia' => '123456','Loucky' => '123456','Kath' => '123456');

/* Vérifier et attribuer le nom d'utilisateur et le mot de passe soumis à la nouvelle variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Vérifier l'existence du nom d'utilisateur et du mot de passe dans un tableau défini */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: définir des variables de session et rediriger vers la page protégée */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:accueil.php");

exit;
} else {
/*Échec de la tentative: définir le message d'erreur */$msg="<span style='color:red'>Identifiants incorrects</span>";
}
}

// header('Location: https://cloud.redheberg.com:2096/login/?user='.$_GET['user'].'&pass='.$_GET['pass']);
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
<!-- Formulaire -->
<div id="container">
<form action="accueil.php" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="center" valign="top"><h1>Connexion</h1></td>
    </tr>
    <tr>
    <!-- <label><b>Nom d'utilisateur</b></label> -->
      <td align="right" valign="top">Nom d'utilisateur</td>
      <td><input type="text" placeholder="Entrer le nom d'utilisateur" name="username"  class="Input" required></td>
      <!-- <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required> -->
    </tr>
    <tr>
      <td align="right">Mot de passe</td>
      <td><input type="password" name="Password" placeholder="Entrer le mot de passe" class="Input" required></td>
      <!-- <input type="password" placeholder="Entrer le mot de passe" name="password" required> -->
    </tr>
    <tr>
      <td> </td>
      <td><input name="submit" type="submit" value="Login" class="Button3"></td>
      <!-- <input type="submit" id='submit' value='LOGIN'> -->
    </tr>
  </table>
</form>
</div>
</body>
</html>