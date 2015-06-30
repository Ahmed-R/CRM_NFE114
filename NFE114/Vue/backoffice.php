<?php
session_start();
?>
<html>
<head>
  <title>back office</title>
  <style>body {margin: 5%;}</style>
</head>
<body>
  <?php
  if ($_SESSION['login']=="administrateur")
    { ?>
      <div id="add_user">
        <form action="ajout_user.php" method="POST">
          <input type="submit" value="Accéder au formulaire d'ajout d'utilisateur">
        </form>
      </div>
    <?php } ?>

      <div id="new_mdp">
        <form action="modification_mdp.php" method="POST">
          <input type="submit" value="Modification mdp">
        </form>
      </div>

      <div id="home">
        <form action="home.php">
          <input type="submit" value="Retour à la Home">
        </form>
      </div>
</body>
</html>
