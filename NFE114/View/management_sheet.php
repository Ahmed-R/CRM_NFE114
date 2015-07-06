<?php
  session_start();
  $nomrecu = $_POST['clt_name'];
  include 'clt_construction.php';
?>
<html>
<head>
  <title>Fiche Gestion <?php echo $nomrecu;?></title>
</head>
<body>
  <p> Vous êtes arrivé sur la fiche Gestion du client <?php echo $_POST['clt_name'];?>. </p>

  <?php
class Gestclt {
  private $_nom;
  private $_respcompte;
  private $_respequipe;
  private $_datederncont;
  private $_premium;

  //Name
  function SetNom($nom){
    $this->_nom=$nom;
  }
  function GetNom(){
    echo "<p> Raison Sociale : " . $this->_nom . "</p>";
  }
  //Salesperson
  function SetRespcompte($respc){
    $this->_respcompte=$respc;
  }
  function GetRespcompte(){
    echo "<p> le Responsable de ce compte est " . $this->_respcompte . "</p>";
  }
  //Team Leader
  function SetRespequipe($respe){
    $this->_respequipe=$respe;
  }
  function GetRespequipe(){
    echo "<p> le manager est " . $this->_respequipe . "</p>";
  }

  //Last contact
  function SetDatederncont($ddc){
    $this->_datederncont=$ddc;
  }
  function GetDatederncont(){
    echo "<p> le dernier contact a eu lieu le : " . $this->_datederncont . "</p>";
  }

  //Is premium ?
  function SetPremium($prem){
    $this->_premium=$prem;
  }
  function GetPremium(){
    if ($this->_premium == "non")
    {
      echo "ce client n'est pas premium";
    }
    else {
      echo "ce client est premium";
    }
  }
}
  try {
      $db = new PDO ('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
    }
  catch(Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  $req = $db->prepare('SELECT * FROM db_clt_manag WHERE nom = ?');
  $req->execute(array($nomrecu));
  $donnee = $req->fetch();
  $respc = $donnee['resp_compte'];
  $respe = $donnee['resp_equipe'];
  $ddc = $donnee['date_dern_contact'];
  $premium = $donnee['premium'];

  $client = new Gestclt;

  $client->SetNom($nomrecu);
  $client->GetNom();

  $client->SetRespcompte($respc);
  $client->GetRespcompte();

  $client->SetRespequipe($respe);
  $client->GetRespequipe();

  $client->SetDatederncont($ddc);
  $client->GetDatederncont();

  $client->SetPremium($premium);
  $client->GetPremium();
  ?>
    <form action="home.php">
    <input type="submit" value="retour à la page Home">
  </form>
</body>
</html>
