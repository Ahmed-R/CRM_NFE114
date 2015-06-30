<?php
session_start();
$_SESSION = array();
session_destroy();

echo "vous vous êtes déconnecté.";
?>
<html>
<head>
  <title>deconnexion</title>
</head>
<body>
    <form action="../index.php">
    <input type="submit" value="Retour à l'index">
  </form>
</body>
</html>
