<?php
session_start();
include_once '../Model/db_connection.php';
?>
<html>
<head> <title>Home - Page d'accueil</title></head>
<style> body {margin: 5%;}</style>
<style> table{border: 1px solid black;}</style>
<style> td{text-align: center;}</style>
<style> #intro, #displ, #bo_access, #new_clt{display: inline-block; float: left; width: 30%;}</style>
<style> #disconnection{display: inline-block; float: right; width: 10%;}</style>
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
    echo "<div id=\"displ\">" ;

    //For each client, we display a menu in a table
    while ($data = $req->fetch()) { ?>
      <table>
        <tr>
          <td>
            <?php echo $data['nom']; ?><br>
            <form action="contact_sheet.php" method="POST">
              <input type="hidden" name="clt_name" value="<?php echo $data['nom'];?>">
              <input type="submit" value="Acceder à la fiche de Coordonnées de ce client">
            </form>
            <form action="management_sheet.php" method="POST">
              <input type="hidden" name="clt_name" value="<?php echo $data['nom'];?>">
              <input type="submit" value="Acceder à la fiche de Gestion de ce client">
            </form>
            <form action="see_quotation.php" method="POST">
              <input type="hidden" name="clt_name" value="<?php echo $data['nom'];?>">
              <input type="submit" value="voir les devis de ce client">
            </form> </td> </tr> </table>
  <?php
    }
?>
    <!-- Here we display the options the user has access to-->
    </div>
    <div id="bo_access">
      <form action="backoffice.php" method="POST">
        <input type="submit" value="Accéder à votre back office">
      </form>
    </div>

    <div id="disconnection">
      <form action="disconnection.php" method="POST">
        <input type="submit" value="Disconnection">
      </form>
    </div>

    <div id="new_clt">
      <form action="nouveau_client.php" method="POST">
          <input type="submit" value="Formulaire de nouveau client">
      </form>
    </div>
</body></html>
