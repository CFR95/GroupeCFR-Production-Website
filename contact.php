<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page contact CFR">

    <!-- global links  -->
    <link rel="icon" href="./asset/logos/CFR_Logo_Bleu_Short.png">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/global_navbar.css">
    <link rel="stylesheet" href="./css/global_footer.css">
    <link rel="stylesheet" href="./css/global_social.css">

    <!-- page relative links  -->
    <link rel="stylesheet" href="./css/contact_form.css">
    <link rel="stylesheet" href="./css/contact_banner.css">
    <link rel="stylesheet" href="./css/contact_coords.css">
    <link rel="stylesheet" href="./css/contact_map_n_form.css">

    <title>Groupe CFR - Contactez-nous</title>
</head>

<body id="main">

    <!-- navbar -->
    <?php include("navbar.php"); ?>
    <!-- fin navbar -->

    <!-- Début contenu -->

    <!-- Début bannière -->
    <section class="contact_us_banner">
        <div class="banner_text">
            <h2>Suivez-nous</h2>
            <p>
                Toujours à vos côtés
                <br>
                Où que vous soyez
            </p>
        </div>
        <div class="socials">
            <a href="https://www.facebook.com/CFRformation/">
                <img src="./asset/contact_page/facebook_white.png" alt="Social Media Facebook Icon">
            </a>
            <a href="https://www.instagram.com/cfrformationrecrutement/?utm_medium=copy_link">
                <img src="./asset/contact_page/instagram_white.png" alt="Social Media Instagram Icon">
            </a>
            <a href="https://www.linkedin.com/company/centre-formation-recrutement/">
                <img src="./asset/contact_page/linkedin_white.png" alt="Social Media LinkedIn Icon">
            </a>
        </div>
    </section>
    <hr class="banner_end_bar">
    <!-- Fin bannière -->

    <!-- Début coordonées -->
    <section class="coords">
        <h1 class="coords_title">Prenons contact !</h1>
        <div class="coords_detail">
            <div class="coords_text">
                <img src="./asset/contact_page/pin_blue.svg" alt="Blue location icon">
                <h2>Localisations</h2>
                <p>
                    154 TER avenue Victor Hugo
                    <br>
                    75016 PARIS
                </p>
                <p>
                    94 rue Servient
                    <br>
                    69003 LYON
                </p>
                <p>
                    2 rue Le Corbusier
                    <br>
                    95190 GOUSSAINVILLE
                </p>
            </div>
            <div class="coords_text">
                <img src="./asset/contact_page/phone_blue.svg" alt="Blue phone icon">
                <h2>Téléphone</h2>
                <p>
                    +(33) 6 37 18 97 95
                </p>
            </div>
            <div class="coords_text">
                <img src="./asset/contact_page/mail_blue.svg" alt="Blue mail icon">
                <h2>E-MAIL</h2>
                <p>contact@groupecfr.fr</p>
            </div>
        </div>
    </section>
    <!-- Fin coordonées -->


    <section class="map_n_form">

        <!-- Début formulaire de contact -->
        <!-- doc technique -->
        <!-- https://formsubmit.co/ -->
        <div class="form_container">
            <form action="https://formsubmit.co/cfr.gestion@gmail.com" method="POST" class="contact_form">
                <input type="hidden" name="_subject" value="Nouvelle demande de contact Groupe CFR">
                <input type="hidden" name="_template" value="table">
                <fieldset>
                    <legend>Toujours à vos côtés !</legend>
                    <hr class="section_break">
                    <label for="prenom" class="text_input_label">Votre prénom*
                        <input type="text" name="prenom" class="text_input" id="prenom" placeholder="Prénom" required>
                    </label>
                    <br>
                    <label for="nom" class="text_input_label">Votre nom*
                        <input type="text" name="nom" class="text_input" id="nom" placeholder="Nom" required>
                    </label>
                    <br>
                    <label for="entreprise" class="text_input_label">Votre entreprise
                        <input type="text" name="entreprise" class="text_input" id="entreprise"
                            placeholder="Entreprise">
                    </label>
                    <br>
                    <label for="mail" class="text_input_label">Votre adresse de messagerie*
                        <input type="email" name="mail" class="text_input" id="mail"
                            placeholder="Entrez une adresse mail valide" required>
                    </label>
                    <br>
                    <label for="tel" class="text_input_label">Votre numéro de téléphone
                        <input type="text" name="tel" class="text_input" id="tel" placeholder="Numéro de téléphone">
                    </label>
                    <br>
                    <span>Vous êtes : </span>
                    <div class="statut_client">
                        <label for="employeur" class="statut">
                            <input type="radio" name="statut" class="radio_input" id="employeur" value="employeur"
                                checked>
                            Employeur
                        </label>
                        <label for="salarie" class="statut">
                            <input type="radio" name="statut" class="radio_input" id="salarie" value="salarie">
                            Salarié
                        </label>
                        <label for="etudiant" class="statut">
                            <input type="radio" name="statut" class="radio_input" id="etudiant" value="etudiant">
                            Etudiant
                        </label>
                        <label for="recherche_emploi" class="statut">
                            <input type="radio" name="statut" class="radio_input" id="recherche_emploi"
                                value="recherche_emploi">
                            En recherche d'emploi
                        </label>
                        <label for="independant" class="statut">
                            <input type="radio" name="statut" class="radio_input" id="independant" value="independant">
                            Indépendant
                        </label>
                        <label for="retraite" class="statut">
                            <input type="radio" name="statut" class="radio_input" id="retraite" value="retraite">
                            Retraité
                        </label>
                    </div>
                    <br>
                    <br>
                    <span>En tout, combien de temps avez-vous travaillé en France* ?</span>

                    <div class="duree">
                        <label for="moins_2" class="statut">
                            <input type="radio" name="duree" class="radio_input" id="moins_2" value="moins_2">
                            Moins de 2 ans
                        </label>
                        <label for="2_5ans" class="statut">
                            <input type="radio" name="duree" class="radio_input" id="2_5ans" value="2_5ans">
                            Entre 2 et 5 ans
                        </label>
                        <label for="plus_5" class="statut">
                            <input type="radio" name="duree" class="radio_input" id="plus_5" value="plus_5">
                            Plus de 5 ans
                        </label>
                    </div>
                    <br>
                    <span>Choisissez le thème de la formation souhaitée* :</span>
                    <br>
                    <div class="formation">
                        <label for="langues" class="statut">
                            <input type="checkbox" name="formation_langues" class="checkbox_input" id="langues"
                                value="oui">
                            Langues
                        </label>
                        <label for="numerique" class="statut">
                            <input type="checkbox" name="formation_numerique" class="checkbox_input" id="numerique"
                                value="oui">
                            Numérique
                        </label>
                        <label for="dev_numerique" class="statut">
                            <input type="checkbox" name="formation_dev_numerique" class="checkbox_input"
                                id="dev_numerique" value="oui">
                            Dév. Numérique
                        </label><label for="design_numerique" class="statut">
                            <input type="checkbox" name="formation_design_numerique" class="checkbox_input"
                                id="design_numerique" value="oui">
                            Design Numérique
                        </label>
                        <label for="finance" class="statut">
                            <input type="checkbox" name="formation_finance" class="checkbox_input" id="finance"
                                value="oui">
                            Finance
                        </label>
                        <label for="management" class="statut">
                            <input type="checkbox" name="formation_management" class="checkbox_input" id="management"
                                value="oui">
                            Management
                        </label>
                    </div>
                    <br>
                    <br>
                    <label for="objet" class="text_input_label">Objet de votre message*
                        <input type="text" name="objet" class="text_input" id="objet" placeholder="Objet" required>
                    </label>
                    <br>
                    <label for="message" class="text_input_label">Votre message*
                        <textarea name="message" id="message" cols="50" rows="10"
                            placeholder="Tapez votre message ici..." required></textarea>
                    </label>
                    <p class="form_comment">*Champs obligatoires</p>
                    <br>
                    <input type="hidden" name="_next" value="http://groupecfr.com/thankyou.php">
                    <input type="submit" class="submit_btn" value="Envoyer">
                </fieldset>
            </form>
        </div>
        <!-- Fin formulaire de contact -->

        <div class="map_container">
            <h1>Nous sommes ouvert</h1>
            <h2>Du lundi au vendredi</h2>
            <p>Matin : de 9h à 12h</p>
            <p>Après-midi : de 14h à 17h</p>
            <iframe class="map"
                src="https://www.google.com/maps/d/embed?mid=1VFeXTPUAdGx058orFNTnMNsUO7FFyZMn"></iframe>
        </div>

    </section>

    <!-- Fin contenu -->

    <!-- footer -->
    <?php include("footer.php"); ?>
    <!-- fin footer -->



</body>

</html>