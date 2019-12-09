<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

Félicitations! Vous vous êtes connecté sur une page protégée par un mot de passe. <a href="logout.php">Cliquez ici</a> pour vous déconnecter.