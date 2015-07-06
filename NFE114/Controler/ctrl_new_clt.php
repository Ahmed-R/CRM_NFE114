<?php
session_start();

try {
    $db = new PDO('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
  }
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
  }
//insertion into the db_client table
$req1 = $db->prepare('INSERT INTO db_clt(nom) VALUES (?)');
$req1->execute(array($_POST['name']));
echo "Ajout dans la base de données bdd_clt = OK" . "<br>";

//insertion into the db_clt_contact
$req2 = $db->prepare('INSERT INTO db_clt_contact(nom, adresse, email, tel)
  VALUES (?, ?, ?, ?)');
$req2->execute(array(
  $_POST['name'],
  $_POST['address'],
  $_POST['email'],
  $_POST['tel']));
echo "Ajout dans la base de données db_clt_contact = OK" . "<br>";

//insertion into the db_clt_manag
$req3 = $db->prepare('INSERT INTO db_clt_manag(nom, resp_compte, resp_equipe, date_dern_contact, premium)
  VALUES (?, ?, ?, ?, ?)');
$req3->execute(array(
  $_POST['name'],
  $_POST['account_man'],
  $_POST['team_leader'],
  $_POST['lc'],
  $_POST['premium']));
echo "Ajout dans la base de données db_clt_manag = OK" . "<br>";
?>
<html>
<head>
  <title>enregistrement en bdd</title>
</head>
<body>
  <form action="../View/home.php">
    <input type="submit" value="retour à la page Home">
  </form>
</body>
</html>
