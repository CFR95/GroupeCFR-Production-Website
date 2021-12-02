<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page contact formation CFR">

    <!-- global links  -->
    <link rel="icon" href="./asset/logos/CFR_Logo_Bleu_Short.png">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/global_navbar.css">
    <link rel="stylesheet" href="./css/global_footer.css">
    <link rel="stylesheet" href="./css/global_social.css">

    <!-- page relative links  -->
    <link rel="stylesheet" href="./css/formation_contact.css">

    <title>Groupe CFR - Contactez-nous</title>
</head>

<body id="main">

    <!-- navbar -->
    <?php include("navbar.php"); ?>
    <!-- fin navbar -->

    <!-- Début contenu -->

    <!-- Début formation contact -->
    <?php
            $monFichier = fopen('../cfr_db_reader/user.txt', 'r');
            $login = trim(fgets($monFichier));
            $mdp = trim(fgets($monFichier));        
            

          try {
            $bdd = new PDO('mysql:host=localhost:3306;dbname=ojtb5163_GroupeCFR_DB;charset=utf8', $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
          } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
          }

        $id = $_POST['formation'];

        $req=$bdd->prepare('SELECT id_formation, code_cfr, categorie, intitule, pre_requis, objectifs, presentiel, distanciel, e_learning, financement FROM liste_formations 
                                        WHERE id_formation = ?');
        $req->execute(array($id));

        while ($donnees = $req->fetch()) {
    ?>

    <div class="wrapper">
        <div class="company-info">
            <h3><?php echo htmlspecialchars($donnees['intitule']); ?></h3>
            <ul>
                <li><i class="fas fa-euro-sign"></i><?php echo htmlspecialchars($donnees['objectifs']); ?></li><br>
                <li><i class="fas fa-calendar-alt"></i>Méthode pédagogique :
                <?php 
                    if ($donnees['presentiel'] != 0) {
                      echo "<br> Présentiel - ";
                    } 
                    if ($donnees['distanciel'] != 0) {
                      echo "Distanciel ";
                    }
                    if ($donnees['e_learning'] != 0 && $donnees['presentiel'] != 0 && $donnees['distanciel'] != 0) {
                      echo "- E-Learning";
                    }
                    elseif ($donnees['e_learning'] != 0 && $donnees['presentiel'] == 0 && $donnees['distanciel'] == 0) {
                      echo "E-Learning";
                    }            
                ?> </li><br>
                <li><i class="fas fa-poll"></i>Prérequis : <?php echo htmlspecialchars($donnees['pre_requis']); ?> </li><br>
                <li><i class="fas fa-poll"></i>Mode de financement : <?php echo htmlspecialchars($donnees['financement']); ?> </li><br>
                <li><i class="fa fa-road"></i> 154 avenue Victor Hugo</li>
                <li><i class="fa fa-road"></i> 75016 PARIS</li>
                <li><i class="fa fa-phone"></i> (+33) 06 37 18 97 85</li>
                <li><i class="fa fa-envelope"></i> contact@groupecfr.fr</li>
            </ul>
        </div>



        <div class="contact">
            <h3>S'inscrire à la formation</h3>
            <!-- doc technique -->
            <!-- https://formsubmit.co/ -->
            <!-- groupecfr3@gmail.com -->
            <form action="https://formsubmit.co/cfr.gestion@gmail.com" method="POST" id="contact-form">
                <input type="hidden" name="_subject" value="Nouveau contact Groupe CFR (Formation)">
                <input type="hidden" name="_next" value="http://groupecfr.com/thankyou.html">
                <input type="hidden" name="code_cfr" value="<?php echo htmlspecialchars($donnees['code_cfr']); ?>">
                <input type="hidden" name="categorie" value="<?php echo htmlspecialchars($donnees['categorie']); ?>">
                <input type="hidden" name="nom_formation" value="<?php echo htmlspecialchars($donnees['intitule']); ?>">

                <p>
                    <label>Nom Prénom</label>
                    <input type="text" name="name" id="name" required>
                </p>

                <p>
                    <label>Entreprise</label>
                    <input type="text" name="company" id="company">
                </p>

                <p>
                    <label>Adresse mail</label>
                    <input type="email" name="email" id="email" required>
                </p>

                <p>
                    <label>Numéro de téléphone</label>
                    <input type="text" name="phone" id="phone">
                </p>

                <p class="full">
                    <label>Message</label>
                    <textarea name="message" rows="5" id="message"></textarea>
                </p>

                <p class="full">
                    <button type="submit">Envoyer</button>
                </p>

            </form>
        </div>

        <?php 
        } 
            $req->closeCursor(); // Fin de requète SQL
            fclose($monFichier);             
        ?>

    </div>
    </div>
    <!-- Fin formation contact -->

    <!-- Fin contenu -->

    <!-- footer -->
    <?php include("footer.php"); ?>
    <!-- fin footer -->



</body>

</html>