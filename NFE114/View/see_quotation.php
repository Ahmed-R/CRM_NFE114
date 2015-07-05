<?php
session_start();
echo "vous êtes sur la page des devis" . "</p>";
  try {
    $db = new PDO ('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
  }
  catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  $req = $db->prepare('SELECT * FROM bdd_clt_devis WHERE nom = ?');
  $req->execute(array($_POST['clt_name']));

  while ($donnee = $req->fetch())
  {
    echo "client : " . $donnee['nom'] . "<br>";
    echo "description : " . $donnee['description'] . "<br>";
?>
    <form action="quotation_detail.php" method="POST">
      <input type="hidden" name="clt_name" value="<?php echo $_POST['clt_name'];?>">
      <input type="submit" value="Voir le détail de ce devis">
    </form>
    <?php
  }
?>
    <form action="add_quotation.php" method="POST">
      <input type="hidden" name="clt_name" value="<?php echo $_POST['clt_name'];?>">
      <input type="submit" value="Ajouter un devis à ce client">
    </form>
    <form action="home.php">
      <input type="submit" value="retour à la page Home">
    </form>
<?php
?>
