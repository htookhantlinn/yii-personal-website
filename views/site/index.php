<?php

use yii\helpers\Html;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body id="page-top" class="bg-dark">

<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <?= Html::tag('div', Html::encode("Hello I'm Htoo Khant Linn"), ['class' => 'masthead-subheading']) ?>
        <?= Html::tag('div', Html::encode("Nice To Meet You"), ['class' => 'masthead-heading text-uppercase']) ?>
    </div>
</header>

<section class="page-section bg-dark" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"></h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="/theme/assets/img/pro_pic.jpg" alt=""/>
                    <?= Html::tag('h3', Html::encode("Htoo Khant Linn"), ['style' => 'color: yellow']) ?>
                    <?= Html::tag('p', Html::encode("Software Developer"), ['class' => 'text-muted', 'style' => 'font-size: medium']) ?>

                    <a class="btn btn-light btn-social mx-2" href="https://twitter.com/HtooKha52472124"><i
                                class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mx-2" href="https://www.facebook.com/htookhntlin/"><i
                                class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mx-2" href="https://www.linkedin.com/in/htoo-khant-4871a317a/"><i
                                class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="team-member">
                    <?= Html::tag('h3', Html::encode("Biography"), ['style' => 'color: yellow']) ?>
                    <div align="left">

                        <?= Html::tag('p', Html::encode("I’m software developer and currently living in Yangon, Myanmar. I’m trying to get Bachelor
                            of  Computer Science degree from  ") . Html::a('University of Computer Studies, Yangon.', ['https://www.ucsy.edu.mm'], ['style' => 'color: white'])
                            . " I am very passionate about Web Development,Mobile Development,Software Engineering and strive to better myself as a <br/>full-stack developer, and
                            the
                            development community as a whole.", ['style' => 'font-size: medium; color: white']) ?>

                    </div>
                    <div align="center">
                        <button type="button" class="btn btn-outline-light btn-lg">
                            <?= Html::a('View CV', '../docs/Htoo_Khant_Linn_CV.pdf', ['target' => '_blank', 'class' => 'box_button fl download_link']) ?>
                        </button>
                        <button type="button" class="btn btn-outline-success btn-lg">
                            <a href="../docs/Htoo_Khant_Linn_CV.pdf" download="Htoo_Khant_Linn_CV">Download CV</a>
                        </button>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
