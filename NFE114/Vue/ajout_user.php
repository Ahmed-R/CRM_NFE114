<?php
session_start();
?>
<html>
<head>
  <title>page d'ajout user</title>
  <style>body{margin: 3%;}</style>
</head>
<body>
  <div id="form_ajout_user">
    <form action="../Controleur/ctrl_ajout_user.php" method="POST">
      <p><label for="login">renseignez ici le login donnée au nouvel user :</label><br>
        <input type="text" id="login" name="login"></p>
      <p><label for="mdp"> Renseignez ici le mdp de base :</label><br>
        <input type="text" id="mdp" name="mdp"></p>
      <p><label for="blocked">0 pour non bloqué ou 1 pour bloqué :</label><br>
        <input type="text" id="blocked" name="blocked"></p>
        <input type="submit" value="Valider">
    </form>
  </div>

  <div id="retour_home">
    <form action="home.php">
      <input type="submit" value="Retour à la Home">
    </form>
  </div>
</body>
</html>
