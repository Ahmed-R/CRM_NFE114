<?php
session_start();
include_once '../Modele/db_connection.php';
?>
<html>
<head> <title>Home - Page d'accueil</title></head>
<style> body {margin: 5%;}</style>
<style> table{border: 1px solid black;}</style>
<style> td{text-align: center;}</style>
<style> #intro, #affichage, #acces_bo, #new_clt{display: inline-block; float: left; width: 30%;}</style>
<style> #deconnexion{display: inline-block; float: right; width: 10%;}</style>
<body>
  <div id="intro">
    <p> Bonjour <?php echo $_SESSION['login'] ;?> </p>
    <p>Ci-contre, votre portefeuille de clients : </p>
  </div>

  <?php
    //Connection to the db
    $db = db_connect();

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

    //For each client, we display a menu in a table
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
    <!-- Here we display the options the user has access to-->
    </div>
    <div id="acces_bo">
      <form action="backoffice.php" method="POST">
        <input type="submit" value="Accéder à votre back office">
      </form>
    </div>

    <div id="deconnexion">
      <form action="deconnexion.php" method="POST">
        <input type="submit" value="Deconnexion">
      </form>
    </div>

    <div id="new_clt">
      <form action="nouveau_client.php" method="POST">
          <input type="submit" value="Formulaire de nouveau client">
      </form>
    </div>
</body></html>
