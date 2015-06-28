<?php
session_start();

function db_connection() {
  try {
      $db = new PDO ('mysql:host=localhost;dbname=nfe114;charset=utf8',
        'root', 'root');
    }
  catch(Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
return ($db);
}

function modif_mdp($newmdp) {
$login = $_SESSION['login'];
$db = db_connection();

$req = $db->prepare('UPDATE bdd_login
  SET mdp = ?
  WHERE login = ?');
$req->execute(array($newmdp, $login));

}

?>
