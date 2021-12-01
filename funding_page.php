<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Mon menu web">

  <!-- global links  -->
  <link rel="icon" href="./asset/logos/CFR_Logo_Bleu_Short.png">
  <link rel="stylesheet" href="./css/global.css">
  <link rel="stylesheet" href="./css/global_navbar.css">
  <link rel="stylesheet" href="./css/global_footer.css">
  <link rel="stylesheet" href="./css/global_social.css">

  <!-- page related links  -->
  <link rel="stylesheet" href="./css/funding_page.css">

  <title>Groupe CFR - Financement</title>
</head>

<body id="main">

  <!-- navbar -->
  <?php include("navbar.php"); ?>
  <!-- fin navbar -->

  <!-- Début contenu -->
  <script src="./js/funding_page.js"></script>
  <h1 id="funding_page_title">Comment financer votre formation ?</h1>
  <div class="funding_page_wrapper">

    <section class="section_wrapper">
      <div class="section_title">
        <img class="cpf" src="./asset/funding_page/cpf.png" alt="Logo Mon Compte Formation">
        <h2><em>C</em>ompte <em>P</em>ersonnel de <em>F</em>ormation</h2>
      </div>
      <div class="content_wrapper">
        <div class="content_box">
          <h3>Qu'est-ce que c'est ?</h3>
          <p>Chaque individu exerçant une activité professionnelle cotise pour son Compte Personnel de Formation (CPF).
          </p>
        </div>
        <div class="content_box">
          <h3>Ce qu'il faut retenir</h3>
          <p>Cumulable d’année en année</p>
          <p>Démarche individuelle et personnelle</p>
          <p>Choisissez librement une formation certifiante</p>
        </div>
        <div class="content_box">
          <h3>4 étapes</h3>
          <p>Testez votre éligibilité</p>
          <p>Consulter vos droits</p>
          <p>Choix de votre formation</p>
          <p>Paiement</p>
        </div>
        <div class="content_box">
          <h3>Pré-requis</h3>
          <p>Numéro de Sécurité Sociale</p>
          <p>Adresse e-mail</p>
          <p>Salarié public ou privé, et travailleurs non salariés</p>
        </div>
      </div>
    </section>

    <section class="section_wrapper">
      <div class="section_title">
        <img src="./asset/funding_page/opco.png" alt="Logo OPCO">
        <h2>Les OPCO</h2>
      </div>
      <div class="content_wrapper">
        <div class="content_box">
          <h3>Qu'est-ce que c'est ?</h3>
          <p>Opérateur de compétences appelés OPCO</p>
          <p>Budget alloué par année civile, s’il n’est pas utilisé au 31 décembre il est perdu</p>
        </div>
        <div class="content_box">
          <h3>Ce qu'il faut retenir</h3>
          <p>Accompagner et favoriser l’évolution professionnelle des salariés</p>
          <p>Votre entreprise ou l’OPCO peuvent vous aider à financer une formation</p>
          <p>Budget alloué par année civile</p>
        </div>
        <div class="content_box">
          <h3>5 étapes</h3>
          <p>Convention</p>
          <p>Accord OPCO</p>
          <p>Formation</p>
          <p>Remboursement sous 15 jours</p>
          <p>Certification</p>
        </div>
        <div class="content_box">
          <h3>Pré-requis</h3>
          <p>Organisme de formation référencé par l’Etat</p>
          <p>IDCC : Identifiant Convention Collective</p>
          <p>RIB</p>
        </div>
        <div class="logo_section">
          <h3>Liste des 11 OPCO</h3>
          <div class="opco_logo_wrapper">
            <img src="./asset/funding_page/opco_afdas.png" alt="Logo OPCO Afdas">
            <img src="./asset/funding_page/opco_atlas.png" alt="Logo OPCO Atlas">
            <img src="./asset/funding_page/opco_opcoep.png" alt="Logo OPCO EP">
            <img src="./asset/funding_page/opco_akto.png" alt="Logo OPCO Akto">
            <img src="./asset/funding_page/opco_ocapiat.png" alt="Logo OPCO Ocapiat">
            <img src="./asset/funding_page/opco_21.png" alt="Logo OPCO 21">
          </div>
          <div class="opco_logo_wrapper">
            <img src="./asset/funding_page/opco_mmerce.png" alt="Logo OPCO mmerce">
            <img src="./asset/funding_page/opco_constructys.png" alt="Logo OPCO Constructys">
            <img src="./asset/funding_page/opco_mobilites.png" alt="Logo OPCO Mobilités">
            <img src="./asset/funding_page/opco_sante.png" alt="Logo OPCO Santé">
            <img src="./asset/funding_page/opco_uniformation.png" alt="Logo OPCO Uniformation">
          </div>
        </div>
      </div>
    </section>

    <section class="section_wrapper">
      <div class="section_title">
        <img class="pole_emploi_logo" src="./asset/funding_page/pole_emploi_transparent.png" alt="Logo Pôle Emploi">
        <h2>Pôle Emploi</h2>
      </div>
      <div class="content_wrapper">
        <div class="content_box">
          <h3>Qu'est-ce que c'est ?</h3>
          <p>Pôle emploi finance les formations des demandeurs d’emploi</p>
        </div>
        <div class="content_box">
          <h3>Ce qu'il faut retenir</h3>
          <p>Prise en charge du coût pédagogique</p>
          <p>Moyen de financement pour votre projet de formation</p>
        </div>
        <div class="content_box">
          <h3>3 étapes</h3>
          <p>Validation de votre projet auprès de votre conseiller</p>
          <p>Demande de devis</p>
          <p>Financement</p>
        </div>
        <div class="content_box">
          <h3>Pré-requis</h3>
          <p>Etre demandeur d'emploi</p>
        </div>
      </div>
    </section>

  </div>
  <!-- Fin contenu -->

  <!-- footer -->
  <?php include("footer.php"); ?>
  <!-- fin footer -->

  <script src="./js/scrollreveal.min.js"></script>
  <script src="./js/scrolling_page.js"></script>

</body>

</html>