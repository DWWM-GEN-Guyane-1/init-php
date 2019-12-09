<?php session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */$logins = array('Tia' => '123456','Loucky' => '123456','Kath' => '123456');

/* Check and assign submitted Username and Password to new variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php".$_GET['user'].'&pass='.$_GET['pass']);
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
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
<div id="container">
<form action="" method="post" name="Login_Form">
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