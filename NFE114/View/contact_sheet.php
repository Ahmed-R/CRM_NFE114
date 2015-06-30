<?php
session_start();
$namereceived = $_POST['clt_name'];
include 'clt_construction.php';
include_once '../Model/db_connection.php';
include '../Controler/ctrl_contact_sheet.php';
include '../Model/db_contact.php';
?>

<html>
<head>
  <title>Coordonnées de <?php echo $Namerecu;?></title>
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
  $req = contact_requisition($db, $namereceived);

  $data = $req->fetch();
  $addr = $data['adresse'];
  $email = $data['email'];
  $tel = $data['tel'];

  //The Coorclt object is located in Controleur/ctrl_fiche_coor_clt.php
  $client = new Coorclt;

  $client->SetName($namereceived);
  $client->GetName();

  $client->SetAddress($addr);
  $client->GetAddress();

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
