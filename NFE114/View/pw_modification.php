<?php
session_start();

?>

<html>
<head>
  <title>Modification mdp</title>
</head>
<body>
      <div id="newmdp">
        <form action="../Controler/ctrl_intel_modif.php" method="POST">
          <label for="newmdp">Nouveau mot de passe :</label><br>
          <input type="text" id="newmdp" name="newmdp">
          <input type="submit" value="Valider">
        </form>
      </div>

      <div id="home">
        <form action="home.php">
          <input type="submit" value="Retour à la Home">
        </form>
      </div>
</body>
</html>
