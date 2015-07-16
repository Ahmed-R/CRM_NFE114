<?php
session_start();
include_once '../model/db_pw_modif.php';

$newpw = $_POST['newmdp'];

//we send the newmdp to db_modif_mdp.php in order to change the pw
$modification = modif_mdp($newpw);

header('location:../view/modification_ok.php');
?>
