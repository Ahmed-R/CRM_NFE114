<?php
session_start();

function contact_requisition($db, $namereceived)
{
  $req = $db->prepare('SELECT * FROM db_clt_contact WHERE nom = ?');
  $req->execute(array($namereceived));

  return ($req);
}
?>
