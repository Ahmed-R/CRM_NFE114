<?php
session_start();
include_once 'db_connection.php';


function login_verif($login)
{
  //Connection to the database
  $db = db_connect();

  //We look for a match between the login sent by the user and a login
  //saved in the database
  $req = $db->prepare('SELECT * FROM db_login WHERE login = ?');
  $req->execute(array($login));

  //All this result is put into $data. We then look for the pw stored
  //inside $data and we put it into $reponse
  $data = $req->fetch();
  $reponse = $data['mdp'];
  return ($reponse);
}

?>
