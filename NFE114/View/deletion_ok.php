<?php
session_start();

echo "the entry has been deleted";
?>
<html>
<head>
  <title>Deletion OK</title>
</head>
<body>
  <form action="../View/Home.php">
    <input type="submit" value="Retour à la home">
  </form>
</body>
</html>
