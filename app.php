<?php
// Initialize session
session_start();
?>
<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MissionProcess - Gestion de la qualité</title>
    <meta name="description" content="MissionTrack est une application pour la gestion de la qualité d’entreprise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">

    <!-- Include AOS CSS for animations -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/index.css">



</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="Preloader Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <?php include 'header.php'; ?>
    <!-- Header End -->

    <!-- Main content -->
    <main>
          <!-- app Section -->
    <section id="call-to-action" class="call-to-action section ">

<img class="pos" src="assets/img/app/mission-process1.png" alt="">

<div class="container">
  <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-xl-10">
      <div class="text-center">
      <h2 class="section-title" style="color:white" data-aos="fade-down">MissionProcess - Gestion de la qualité d'entreprise</h2>
      <p data-aos="fade-up" data-aos-delay="200" >MISSION PROCESS a été conçue pour être simple à utiliser, offrant une interface claire qui permet une prise en main rapide par vos équipes. Vous aurez une visibilité complète sur vos opérations qualité, ce qui vous permettra de prendre des décisions éclairées et d’optimiser vos processus.</p>
      </div>
    </div>
  </div>
</div>

</section><!-- /app Section -->


<!-- Functionalities Section -->
<div class="section features">
    <div class="container">
        <h2 class="section-title" data-aos="fade-down">Fonctionnalités clés</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <a href="module1.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/gestion.png" class="card-img-top" alt="Gestion documentaire">
                        <div class="card-body">
                            <h3 class="card-title">Gestion documentaire</h3>
                            <p class="card-text">Créez, organisez et contrôlez vos documents qualité, avec des fonctionnalités de versioning et de validation, assurant une traçabilité efficace.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <a href="module2.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/rh.jpg" class="card-img-top" alt="Gestion des ressources humaines">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des ressources humaines</h3>
                            <p class="card-text">Planifiez et suivez les compétences, les formations et les ressources humaines en lien avec vos besoins qualité, avec organigramme et fiches de fonction.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <a href="module3.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/pi.png" class="card-img-top" alt="Gestion des parties intéressées">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des parties intéressées</h3>
                            <p class="card-text">Identifiez et suivez les parties prenantes et leurs attentes dans le cadre de votre système qualité.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
                <a href="module4.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/modif.webp" class="card-img-top" alt="Gestion des modifications">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des modifications</h3>
                            <p class="card-text">Documentez et contrôlez les changements ayant un impact sur votre système de management qualité.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="1000">
                <a href="module5.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/conforme.png" class="card-img-top" alt="Gestion des non-conformités">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des non-conformités</h3>
                            <p class="card-text">Suivez et traitez les non-conformités avec des mesures correctives et préventives adaptées.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="1200">
                <a href="module6.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/risk.jpg" class="card-img-top" alt="Gestion des risques">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des risques</h3>
                            <p class="card-text">Identifiez, évaluez et gérez les risques qualité à l’aide de plans d’action ciblés.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Centered Last Two Cards -->
        <div class="row justify-content-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="1400">
                <a href="module7.php" class="card-link">
                    <div class="card mx-auto">
                        <img src="assets/img/app/indic.jpg" class="card-img-top" alt="Gestion des indicateurs">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des indicateurs</h3>
                            <p class="card-text">Analysez les performances de vos processus grâce au suivi des indicateurs, facilitant la prise de décisions basées sur des données précises.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="1600">
                <a href="module8.php" class="card-link">
                    <div class="card mx-auto">
                        <img src="assets/img/app/audit.webp" class="card-img-top" alt="Gestion des audits">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des audits</h3>
                            <p class="card-text">Planifiez et suivez les audits internes et externes, et gérez les rapports et actions correctives.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



        <!-- Advantages Section -->
        <div class="section advantages">
            <div class="container">
                <h2 class="section-title" data-aos="fade-down">Les avantages de MissionProcess</h2>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="assets/img/app/productivity.png" class="card-img-top" alt="Augmentation de productivité">
                            <div class="card-body">
                                <h3 class="card-title">Augmentation de la productivité</h3>
                                <p class="card-text">Réduisez les tâches manuelles et gagnez du temps précieux.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <img src="assets/img/app/compliance.jpg" class="card-img-top" alt="Amélioration de la conformité">
                            <div class="card-body">
                                <h3 class="card-title">Amélioration de la conformité</h3>
                                <p class="card-text">Garantissez que tous vos processus respectent les normes de qualité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <img src="assets/img/app/reporting.jpg" class="card-img-top" alt="Rapports détaillés">
                            <div class="card-body">
                                <h3 class="card-title">Rapports détaillés</h3>
                                <p class="card-text">Accédez à des rapports personnalisés pour mieux gérer votre qualité.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
<div class="section cta" style="background: linear-gradient(135deg, #FF7F50, #E67E22, #D35400); color: #fff; text-align: center;">
    <div class="container">
        <h2 class="section-title" data-aos="fade-down" style="font-size: 2.8em; font-weight: 800;">Prêt à améliorer votre gestion de la qualité ?</h2>
        <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.2em; max-width: 700px; margin: 0 auto;">Contactez-nous dès aujourd'hui pour en savoir plus sur MissionProcess et comment il peut aider votre entreprise.</p>
        <a href="index.php#contact" class="btn btn-lg cta-btn" data-aos="zoom-in" data-aos-delay="400">Contactez-nous</a>
    </div>
</div>


    </main>

    <footer>
   <?php include 'footer.php'; ?>
      </div>
  </footer>





    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Include AOS JS for animations -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/main.js"></script>
    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>

</body>
</html>
