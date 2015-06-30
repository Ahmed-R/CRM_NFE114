<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Index - Home - NFE114</title>
    </head>
        <style> body {text-align: center;} </style>
    <body>
        <form action="Controler/ctrl_connection_logindb.php" method="POST">
            <!-- first step : the user sends his ID/PW -->
            <p>
              <label for="login"> login : </label><br />
              <input type="text" name="login" id="login">
            </p>
            <p>
              <label for="mdp"> mot de passe : </label><br />
              <input type="password" name="mdp" id="mdp">
            </p>
            <p>
              <input type="submit" value="Se connecter"/>
            </p>
        </form>
    </body>
</html>

