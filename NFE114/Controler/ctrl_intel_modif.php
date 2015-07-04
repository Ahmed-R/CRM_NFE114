<?php
session_start();
include_once '../Model/db_pw_modif.php';

$newpw = $_POST['newmdp'];

//we send the newmdp to db_modif_mdp.php in order to change the pw
$modification = modif_mdp($newpw);

header('location:../View/modification_ok.php');
?>
