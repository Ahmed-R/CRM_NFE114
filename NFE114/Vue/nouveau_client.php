<?php
session_start();
echo "Veuillez renseigner le formulaire ci dessous pour ajouter un nouveau client";
?>
<html>
<head>
  <title> Formulaire de saisie d'un nouveau client</title>
</head>
<body>
  <form action="../Controleur/ctrl_nouveau_client.php" method="POST">
            <p>
              <label for="nom"> nom : </label><br />
              <input type="text" name="nom" id="nom">
            </p>
            <p>
              <label for="adresse"> adresse : </label><br />
              <input type="text" name="adresse" id="adresse">
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
              <label for="resp_compte"> responsable du compte : </label><br />
              <input type="text" name="resp_compte" id="resp_compte">
            </p>
            <p>
              <label for="resp_equipe"> responsable d'equipe : </label><br />
              <input type="text" name="resp_equipe" id="resp_equipe">
            </p>
            <p>
              <label for="ddc"> date du dernier contact (au format AAAA-MM-JJ): </label><br />
              <input type="text" name="ddc" id="ddc">
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
