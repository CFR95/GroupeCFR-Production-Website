<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formation categories CFR">
    <link rel="icon" type="image" sizes="32*32" href="asset/">

    <!-- global links  -->
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/global_footer.css">
    <link rel="stylesheet" href="./css/global_navbar.css">
    <link rel="stylesheet" href="./css/global_social.css">

    <!-- page relative links  -->
    <link rel="stylesheet" href="./css/categorie_title.css">
    <link rel="stylesheet" href="./css/categorie_header.css">
    <link rel="stylesheet" href="./css/categorie_filterBox.css">
    <link rel="stylesheet" href="./css/categorie_formationsBox.css">

    <title>Catégorie</title>
</head>

<body id="main">
    <!-- navbar -->
    <?php include("navbar.php"); ?>
    <!-- fin navbar -->


    <main class="content">

        <!-- titre -->
        <div class="cat_title">
            <img src="./asset/icons/design_num_bleu.svg" alt="Design icon" class="cat_title_icone">
            <p class="cat_title_text">Design Numérique</p>
        </div>
        <!-- fin titre -->

        <!-- header -->
        <div class="cat_header">

            <!-- header intro -->
            <div class="cat_intro">
                <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="cat_intro_pic">
                <div class="cat_intro_text">
                    <h1>title</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ut modi in quo aperiam molestias
                        enim, facilis explicabo omnis quos neque dicta incidunt pariatur ullam iste, est natus excepturi
                        optio id nesciunt beatae. Eius possimus porro itaque aspernatur et rerum laborum similique,
                        dolores iure animi aliquid hic, asperiores vero illum.</p>
                </div>
            </div>
            <!-- fin header intro -->

            <!-- formation featured -->
            <div class="cat_featured">
                <div class="featured">
                    <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="cat_feature_pic">
                    <h1>title</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, at.</p>
                </div>
                <div class="featured">
                    <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="cat_feature_pic">
                    <h1>title</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, at.</p>
                </div>
                <div class="featured">
                    <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="cat_feature_pic">
                    <h1>title</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, at.</p>
                </div>
            </div>
            <!-- fin formation featured -->

        </div>
        <!-- fin header -->

        <!-- filter box -->
        <div class="filter_bar">
            <div class="checkbox_category">
                <div class="checkbox">
                    <input type="checkbox" id="scales" name=">4">
                    <label for="scales"> &#60;4h </label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="scales" name="<8">
                    <label for="scales">&#60;8h</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="scales" name=">8">
                    <label for="scales">&#62;8h</label>
                </div>
            </div>
            <div class="checkbox_category">
                <div class="checkbox">
                    <input type="checkbox" id="scales" name="dist">
                    <label for="scales">Distanciel</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="scales" name="present">
                    <label for="scales">Présentiel</label>
                </div>
            </div>
            <div class="checkbox_category">
                <div class="checkbox">
                    <input type="checkbox" id="scales" name="cpfok">
                    <label for="scales">CPF</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="scales" name="opcook">
                    <label for="scales">OPCO</label>
                </div>
            </div>
        </div>
        <!-- fin filter box -->

        <!-- formation box -->
        <div class="formations">
            <div class="formablock">
                <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="formablock_pic">
                <h1>title</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, at.</p>
            </div>
            <div class="formablock">
                <a href="./formation_contact.html">
                    <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="formablock_pic">
                    <h1>Formation CFR-XXX</h1>
                    <p>Description, durée, CPF...</p>
                </a>
            </div>
            <div class="formablock">
                <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="formablock_pic">
                <h1>title</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, at.</p>
            </div>
            <div class="formablock">
                <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="formablock_pic">
                <h1>title</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, at.</p>
            </div>
            <div class="formablock">
                <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="formablock_pic">
                <h1>title</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, at.</p>
            </div>
            <div class="formablock">
                <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="formablock_pic">
                <h1>title</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, at.</p>
            </div>
            <div class="formablock">
                <img src="./asset/img/cfr_mc.webp" alt="placeholder" class="formablock_pic">
                <h1>title</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, at.</p>
            </div>
        </div>
        <!-- fin formation box -->

    </main>

    <!-- footer -->
    <?php include("footer.php"); ?>
    <!-- fin footer -->

</body>

</html>