<?php
session_start();
Include_once '../model/db_connection.php';
$name = $_POST['clt_name'];

$db = db_connect();

$req1 = $db->prepare('DELETE FROM db_clt WHERE nom = ?');
$req1->execute(array($name));
$req2 = $db->prepare('DELETE FROM db_clt_contact WHERE nom = ?');
$req2->execute(array($name));
$req3 = $db->prepare('DELETE FROM db_clt_manag WHERE nom = ?');
$req3->execute(array($name));

header('location:../view/deletion_ok.php');
?>
