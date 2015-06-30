<?php
session_start();
try  {
    $db = new PDO('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
  }
catch(Exception $e)  {
    die('Erreur : '.$e->getMessage());
  }

//insertion into the bdd_clt_devis table
$req1 = $db->prepare('INSERT INTO bdd_clt_devis(nom, responsable_compte, date_devis, description)
  VALUES (?, ?, ?, ?)');
$req1->execute(array(
  $_POST['clt_name'],
  $_POST['resp_compte'],
  $_POST['date_devis'],
  $_POST['description']));
echo "Ajout dans la base de données bdd_clt_devis = OK" . "<br>";

//insertion into the bdd_items
$req2 = $db->prepare('INSERT INTO bdd_items(nom, date_devis, tour, ecran, clavier, souris)
  VALUES (?, ?, ?, ?, ?, ?)');
$req2->execute(array(
  $_POST['clt_name'],
  $_POST['date_devis'],
  $_POST['tour'],
  $_POST['ecran'],
  $_POST['clavier'],
  $_POST['souris']));
echo "Ajout dans la base de données bdd_items = OK" . "<br>";
?>
  <form action="../View/Home.php">
    <input type="submit" value="retour à la page Home">
  </form>
