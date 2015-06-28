<?php
session_start();
$nomrecu = $_POST['clt_name'];
include 'clt_construction.php';
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

  class Coorclt
  {
    private $_id;
    private $_nom;
    private $_adress;
    private $_email;
    private $_tel;

    //Name
    function SetNom($nom) {
      $this->_nom=$nom;
    }
    function GetNom() {
      echo "<p> Raison sociale : " . $this->_nom . "</p>";
    }

    //Adress
    function SetAdress($addr) {
      $this->_adress=$addr;
    }
    function GetAdress() {
      echo "<p> Adresse : " . $this->_adress . "</p>";
    }

    //Email
    function SetEmail($email) {
      $this->_email=$email;
    }
    function GetEmail() {
      echo "<p> Email de contact : " . $this->_email . "</p>";
    }

    //Tel
    function SetTel($tel) {
      $this->_tel=$tel;
    }
    function GetTel() {
      echo "<p> Numero de téléphone du contact : " . $this->_tel . "</p>";
    }

  }

  try {
      $db = new PDO ('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
    }
  catch(Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  $req = $db->prepare('SELECT * FROM bdd_clt_coor WHERE nom = ?');
  $req->execute(array($nomrecu));
  $donnee = $req->fetch();
  $addr = $donnee['adresse'];
  $email = $donnee['email'];
  $tel = $donnee['tel'];

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









