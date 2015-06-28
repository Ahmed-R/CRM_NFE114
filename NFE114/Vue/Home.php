<?php
session_start();
?>
<html>
<head> <title>Home - Page d'accueil</title></head>
<style> body {margin: 5%;}</style>
<style> table{border: 1px solid black;}</style>
<style> td{text-align: center;}</style>
<style> #intro{display: inline-block; float: left; width: 30%;}</style>
<style> #affichage{display: inline-block; float: left; width: 30%;}</style>
<style> #acces_bo{display: inline-block; float: right; width: 30%;}</style>
<body>
  <div id="intro">
    <p> Bonjour <?php echo $_SESSION['login'] ;?> </p>
    <p>Ci-contre, votre portefeuille de clients : </p>
  </div>
  <?php
    //Connection to the db
    try {
        $db = new PDO ('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
      }
    catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
      //if the user is not the administrator, we display only his clients.
      if ($_SESSION['login'] != "administrateur") {
        $req = $db->prepare('SELECT nom FROM bdd_clt_gestion WHERE resp_compte = ?');
        $req->execute(array($_SESSION['login']));
      }
      //if the request is sent by the admin, we display all the clients.
      else {
        $req = $db->query('SELECT nom FROM bdd_clt_gestion');
      }
    echo "<div id=\"affichage\">" ;
    while ($donnee = $req->fetch()) { ?>
      <table>
        <tr>
          <td>
            <?php echo $donnee['nom']; ?><br>
            <form action="fiche_coor_clt.php" method="POST">
              <input type="hidden" name="clt_name" value="<?php echo $donnee['nom'];?>">
              <input type="submit" value="Acceder à la fiche de Coordonnées de ce client">
            </form>
            <form action="fiche_gestion_clt.php" method="POST">
              <input type="hidden" name="clt_name" value="<?php echo $donnee['nom'];?>">
              <input type="submit" value="Acceder à la fiche de Gestion de ce client">
            </form>
            <form action="voir_devis.php" method="POST">
              <input type="hidden" name="clt_name" value="<?php echo $donnee['nom'];?>">
              <input type="submit" value="voir les devis de ce client">
            </form> </td> </tr> </table>
  <?php
    }
?>
    </div>
    <div id="acces_bo">
      <form action="backoffice.php" method="POST">
        <input type="submit" value="Accéder à votre back office">
      </form>
    </div>


<!-- echo "</div>";
    if ($_SESSION['login']=="administrateur"){ ?>
    <div id="add_user">
      <form action="ajout_user.php" method="POST">
        <input type="submit" value="Accéder au formulaire d'ajout d'utilisateur">
      </form>
      <form action="nouveau_client.php" metho="POST">
        <input type="submit" value="Formulaire de nouveau client">
      </form>
    </div>
 -->
</body></html>
