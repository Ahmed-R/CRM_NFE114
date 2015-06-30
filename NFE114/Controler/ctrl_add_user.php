<?php
session_start();

try {
    $db = new PDO ('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
  }
  catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

//insertion into the bdd_clt_devis table
$req1 = $db->prepare('INSERT INTO bdd_login(login, mdp, blocked)
  VALUES (?, ?, ?)');
$req1->execute(array(
  $_POST['login'],
  $_POST['mdp'],
  $_POST['blocked']));
echo "Ajout dans la base de données bdd_login = OK" . "<br>";
?>
  <form action="../View/Home.php">
    <input type="submit" value="retour à la page Home">
  </form>
