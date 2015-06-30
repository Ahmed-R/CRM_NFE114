<?php
session_start();

function contact_requisition($db, $nomrecu)
{
  $req = $db->prepare('SELECT * FROM bdd_clt_coor WHERE nom = ?');
  $req->execute(array($nomrecu));

  return ($req);
}
?>
