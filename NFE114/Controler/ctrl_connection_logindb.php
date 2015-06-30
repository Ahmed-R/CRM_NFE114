<?php
session_start();
include '../Model/db_intel.php';

//we recover the login and the pw sent by the user
$login = $_POST['login'];
$mdp = $_POST['mdp'];

//we look for the saved pw associated with the login the user used
$db_mdp = login_verif($login);

//we compare the pw sent with the stored one
if ($mdp == $db_mdp)
 {
  //if everything is ok, we set the session with those login/pw
  $_SESSION['login']=$login;
  $_SESSION['mdp']=$mdp;
  header('location:../View/Home.php');
 }
else
 {
  echo "Erreur avec vos identifiants.";?>
  <form action="../index.php">
    <input type="submit" value="retour à la page d'accueil">
  </form>
<?php
 }
?>

