<?php
session_start();

//connection to the Database
function db_connect()
{
  try {
    $db = new PDO ('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
  }
  catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
  return ($db);
}
?>
