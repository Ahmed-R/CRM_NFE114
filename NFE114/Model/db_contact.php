<?php
session_start();

function contact_requisition($db, $namereceived)
{
  $req = $db->prepare('SELECT * FROM bdd_clt_coor WHERE nom = ?');
  $req->execute(array($namereceived));

  return ($req);


}
?>
