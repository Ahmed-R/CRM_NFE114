<?php
session_start();
echo "bienvenue sur la page d'ajout de devis" . "<br>";
echo "veuillez renseigner les champs suivants" . "</p>";
  try {
    $db = new PDO ('mysql:host=localhost;dbname=nfe114;charset=utf8', 'root', 'root');
  }
  catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
?>
<html> <head>
    <title>Ajout devis : <?php echo $_POST['clt_name'];?></title>
  </head>
  <body>
<form action="../Controler/ctrl_add_quotation.php" method="POST">
            <p>
              <label for="clt_name"> Nom : </label><br />
              <input type="text" name="clt_name" id="clt_name" value="<?php echo $_POST['clt_name'];?>">
            </p>
            <p>
              <label for="resp_compte"> responsable du compte : </label><br />
              <input type="text" name="resp_compte" id="resp_compte" value="<?php echo $_SESSION['login'] ;?>">
            </p>
            <p>
              <label for="date_devis"> date du devis (au format AAAA-MM-JJ): </label><br />
              <input type="text" name="date_devis" id="date_devis">
            </p>
            <p>
              <label for="description"> description : </label><br />
              <input type="text" name="description" id="description">
            </p>
            <p>
              <label for="tour"> nombre de tour : </label><br />
              <input type="text" name="tour" id="tour">
            </p>
            <p>
              <label for="ecran"> nombre d'ecran : </label><br />
              <input type="text" name="ecran" id="ecran">
            </p>
            <p>
              <label for="clavier"> nombre de clavier : </label><br />
              <input type="text" name="clavier" id="clavier">
            </p>
            <p>
              <label for="souris"> nombre de souris : </label><br />
              <input type="text" name="souris" id="souris">
            </p>
            <p>
              <input type="submit" value="valider"/>
            </p>
  </form>
  <form action="home.php">
    <input type="submit" value="retour à la page Home">
  </form> </body> </html>
