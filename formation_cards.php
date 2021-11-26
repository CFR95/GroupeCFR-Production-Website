<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Mon menu web">
  <link rel="icon" type="image" sizes="32x32" href="asset/">

  <!-- global links  -->
  <link rel="icon" href="./asset/logos/CFR_Logo_Bleu_Short.png">
  <link rel="stylesheet" href="./css/global.css">
  <link rel="stylesheet" href="./css/global_navbar.css">
  <link rel="stylesheet" href="./css/global_footer.css">
  <link rel="stylesheet" href="./css/global_social.css">

  <link rel="stylesheet" href="css/formation_cards.css">

  <title>Menu contextuel</title>
</head>

<body id="main">

  <!-- navbar -->
  <?php include("navbar.php"); ?>
  <!-- fin navbar -->
  <?php
  $monFichier = fopen('../cfr_db_reader/user.txt', 'r');
  $login = trim(fgets($monFichier));
  $mdp = trim(fgets($monFichier));


  try {
    $bdd = new PDO('mysql:host=localhost:3306;dbname=ojtb5163_GroupeCFR_DB;charset=utf8', $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  $categorie = htmlspecialchars($_GET['categorie']);

  $req_formations = $bdd->prepare('SELECT id_formation, intitule, pre_requis, objectifs, presentiel, distanciel, e_learning, nom_photo, alt_value FROM liste_formations WHERE categorie = ?');
  $req_formations->execute(array($categorie));

  $req_entete = $bdd->prepare('SELECT id_en_tete, categorie, titre, texte_description FROM en_tete_liste_formation WHERE categorie = ?');
  $req_entete->execute(array($categorie));


  if ($categorie == "langues" || $categorie == "bureautique" || $categorie == "finance" || $categorie == "management" || $categorie == "devweb" || $categorie == "desnum") {
  ?>

    <div class="page_cards_container">
      <div class="intro_cards">
        <div class="btn_titre">
          <a href="formation.php"><img src="./asset/icons/long-arrow-left.svg" class="icofont-long-arrow-left"></img><span>Nos formations</span></a>
          <h1 id="titre_cards_formations">
            <?php
            while ($en_tete = $req_entete->fetch()) {
              echo htmlspecialchars($en_tete['titre']);
            ?>
          </h1>
        </div>
        <p id="intro_text"><?php echo htmlspecialchars($en_tete['texte_description']);
                          } ?></p>
      </div>
    </div>
    <div class="container_cards">
      <ul class="cards">

        <?php

        while ($donnees = $req_formations->fetch()) {
        ?>
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="./asset/photo_cards/<?php echo htmlspecialchars($donnees['nom_photo']); ?>" alt="<?php echo htmlspecialchars($donnees['alt_value']); ?>">
              </div>
              <div class="card_content">
                <h2 class="card_title"><?php echo htmlspecialchars($donnees['intitule']); ?></h2>
                <p class="card_text"> Prérequis : <?php echo htmlspecialchars($donnees['pre_requis']); ?></p>
                <p class="card_text">Méthode pédagogique :
                  <?php
                  if ($donnees['presentiel'] != 0) {
                    echo "<br> Présentiel - ";
                  }
                  if ($donnees['distanciel'] != 0) {
                    echo "Distanciel ";
                  }
                  if ($donnees['e_learning'] != 0 && $donnees['presentiel'] != 0 && $donnees['distanciel'] != 0) {
                    echo "- E-Learning";
                  } elseif ($donnees['e_learning'] != 0 && $donnees['presentiel'] == 0 && $donnees['distanciel'] == 0) {
                    echo "E-Learning";
                  }
                  ?>
                </p>
                <form action="formation_contact.php" method="post">
                  <button class="btn card_btn" type="submit" name="formation" value="<?php echo $donnees['id_formation'] ?>">En savoir plus</button>
                </form>
              </div>
            </div>
          </li>
      <?php
        }
      } else {
        header('Location: accueil_formation.php');
      }

      $req_formations->closeCursor(); // Fin de requète SQL
      $req_entete->closeCursor();
      fclose($monFichier);
      ?>

      </ul>
    </div>




    <!-- footer -->
    <?php include("footer.php"); ?>
    <!-- fin footer -->

</body>

</html>