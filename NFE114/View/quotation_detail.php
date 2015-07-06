<?php
session_start();

echo "page de détails des devis" . "</p>";

  try {
    $db = new PDO ('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
  }
  catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
  $req = $db->prepare('SELECT * FROM db_items WHERE nom = ?');
  $req->execute(array($_POST['clt_name']));

  while ($donnee = $req->fetch())
  {
    echo "client : " . $donnee['nom'] . "<br>";
    echo "date : " . $donnee['date_devis'] . "<br>";
    echo "nombre de tours : " . $donnee['tour'] . "<br>";
    echo "nombre d'écran : " . $donnee['ecran'] . "<br>";
    echo "nombre de clavier : " . $donnee['clavier'] . "<br>";
    echo "nombre de souris : " . $donnee['souris'] . "</p>";
  }
?>

  <form action="home.php">
    <input type="submit" value="retour à la page Home">
  </form>
