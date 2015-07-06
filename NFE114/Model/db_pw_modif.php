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

function modif_mdp($newpw) {
$login = $_SESSION['login'];
$db = db_connection();

$req = $db->prepare('UPDATE db_login
  SET mdp = ?
  WHERE login = ?');
$req->execute(array($newpw, $login));

}

?>
