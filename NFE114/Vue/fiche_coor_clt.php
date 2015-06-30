<?php
session_start();
$nomrecu = $_POST['clt_name'];
include 'clt_construction.php';
include_once '../Modele/db_connection.php';
include '../Controleur/ctrl_fiche_coor_clt.php';
include '../Modele/db_contact.php';
?>

<html>
<head>
  <title>Coordonnées de <?php echo $nomrecu;?></title>
</head>
<body>
  <p>
  Vous êtes arrivé sur la fiche Coordonnées du client <?php echo $_POST['clt_name'];?>.
  </p>

<!--Here we will find the information on the client we clicked on earlier-->
<?php
  //connection to the DB
  $db = db_connect();

  //fetching the intel from the DB
  $req = contact_requisition($db, $nomrecu);

  $donnee = $req->fetch();
  $addr = $donnee['adresse'];
  $email = $donnee['email'];
  $tel = $donnee['tel'];

  //The Coorclt object is located in Controleur/ctrl_fiche_coor_clt.php
  $client = new Coorclt;

  $client->SetNom($nomrecu);
  $client->GetNom();

  $client->SetAdress($addr);
  $client->GetAdress();

  $client->SetEmail($email);
  $client->GetEmail();

  $client->SetTel($tel);
  $client->GetTel();
  ?>
  <form action="home.php">
    <input type="submit" value="retour à la page Home">
  </form>
</body>
</html>
