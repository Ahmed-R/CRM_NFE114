<?php
session_start();
echo "Veuillez renseigner le formulaire ci dessous pour ajouter un nouveau client";
?>
<html>
<head>
  <title> Formulaire de saisie d'un nouveau client</title>
</head>
<body>
  <form action="../Controler/ctrl_new_clt.php" method="POST">
            <p>
              <label for="name"> nom : </label><br />
              <input type="text" name="name" id="name">
            </p>
            <p>
              <label for="address"> adresse : </label><br />
              <input type="text" name="address" id="address">
            </p>
            <p>
              <label for="email"> email : </label><br />
              <input type="text" name="email" id="email">
            </p>
            <p>
              <label for="tel"> tel : </label><br />
              <input type="text" name="tel" id="tel">
            </p>
            <p>
              <label for="account_man"> responsable du compte : </label><br />
              <input type="text" name="account_man" id="account_man">
            </p>
            <p>
              <label for="team_leader"> responsable d'equipe : </label><br />
              <input type="text" name="team_leader" id="team_leader">
            </p>
            <p>
              <!-- lc = last contact-->
              <label for="lc"> date du dernier contact (au format AAAA-MM-JJ): </label><br />
              <input type="text" name="lc" id="lc">
            </p>
            <p>
              <label for="premium"> premium : </label><br />
              <input type="text" name="premium" id="premium">
            </p>
            <p>
              <input type="submit" value="valider"/>
            </p>
  </form>
  <form action="home.php">
    <input type="submit" value="retour à la page Home">
  </form>
</body>
</html>
