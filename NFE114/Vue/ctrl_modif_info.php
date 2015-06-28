<?php
session_start();
include_once '../Modele/db_modif_mdp.php';

$newmdp = $_POST['newmdp'];

//we send the newmdp to db_modif_mdp.php in order to change the pw
$modification = modif_mdp($newmdp);

header('location:../Vue/modification_ok.php');
?>
