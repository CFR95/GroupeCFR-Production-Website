<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=" robots" content=" follow">
  <meta name="author" content="CHATER Zhora">
  <meta name=" copyright" content=" CFR">
  <link rel=”canonical” href=”http://groupecfr.com/accueil.html”>
  <!-- global links  -->
  <link rel="icon" href="./asset/logos/CFR_Logo_Bleu_Short.png">
  <link rel="stylesheet" href="./css/global.css">
  <link rel="stylesheet" href="./css/global_navbar.css">
  <link rel="stylesheet" href="./css/global_footer.css">
  <link rel="stylesheet" href="./css/global_social.css">

  <!-- page related links  -->
  <link rel="stylesheet" href="./css/blog.css">

  <title>Groupe CFR - Blog</title>
</head>

<body id="main">

  <!-- navbar -->
  <?php include("navbar.php"); ?>
  <!-- fin navbar -->

  <!-- Début contenu -->

  <!-- Début blog -->
  <?php
  $monFichier = fopen('../cfr_db_reader/user.txt', 'r');
  $login = trim(fgets($monFichier));
  $mdp = trim(fgets($monFichier));


  try {
    $bdd = new PDO('mysql:host=localhost:3306;dbname=ojtb5163_GroupeCFR_DB;charset=utf8', $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
  ?>

  <div class="blog">


    <?php
    $req = $bdd->query('SELECT id_blog, DATE_FORMAT(date_blog, "%d/%m/%Y") AS date, titre, lien_source, texte_source, description_blog, lien_article, photo_blog, alt_value FROM blog');

    while ($donnees = $req->fetch()) {
    ?>


      <div class="all_items">
        <div class="card">
          <div class="card-image">
            <div 
              class="background-image background-image1" 
              style="background: url('./asset/blog_page/<?php echo htmlspecialchars($donnees['photo_blog']); ?>')  center  no-repeat; background-size: contain;"
              alt="<?php echo htmlspecialchars($donnees['alt_value']); ?>"
              >
            </div>
            <div class="publication-details">
              <a href="https://www.groupecfr.com/accueil.html" class="author">
                <i class="far fa-user"></i>
                Groupe CFR</a>
              <span class="date"><i class="fas fa-calendar-alt"></i><?php echo htmlspecialchars($donnees['date']); ?></span>
            </div>
          </div>

          <div class="card-content">
            <h1 class="title"><?php echo htmlspecialchars($donnees['titre']); ?></h1>
            <h2 class="subtitle"><a href="<?php echo htmlspecialchars($donnees['lien_source']); ?>" target="_blank">Depuis
                <?php echo htmlspecialchars($donnees['texte_source']); ?></a></h2>
            <p class="description">
              <?php echo htmlspecialchars($donnees['description_blog']); ?>
            </p>
            <div class="cta">
              <a href="<?php echo htmlspecialchars($donnees['lien_article']); ?>" target="_blank">En savoir plus
                &rarr;</a>
            </div>
          </div>
        </div>
      </div>

    <?php
    }

    $req->closeCursor(); // Fin de requète SQL
    fclose($monFichier);

    ?>
  </div>
  <!-- fin blog -->

  <!-- Fin contenu -->

  <!-- footer -->
  <?php include("footer.php"); ?>
  <!-- fin footer -->

  <script src="./js/scrollreveal.min.js"></script>
  <script src="./js/scrolling_page.js"></script>

</body>

</html>