<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations - THE MISSION</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/formation.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>




<!-- Preloader Start -->
<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>




<body>
<?php include 'header.php'; ?>


    <!-- Top Section -->
    <!-- Hero Section -->
<section class="hero-section text-center text-white d-flex align-items-center justify-content-center position-relative" 
         style="background: url('assets/img/formation/formation.jpg') center/cover no-repeat; height: 60vh;"
         data-aos="fade-up" data-aos-duration="1000">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
    <div class="container position-relative">
        <h1 class="display-4 fw-bold text-white text-shadow">NOS FORMATIONS</h1>
        <p class="lead text-white text-shadow">THE MISSION vous accompagne à la réalisation de vos grands projets, au développement de compétences ciblées, à l’intégration de nouvelles pratiques ou méthodes selon les modalités les plus adaptées à vos enjeux, à vos contraintes.</p>
    </div>
</section>


    <!-- Nos Solutions -->
    <section class="section_our_solution">
        <div class="container">
            <h2 class="mb-4">Nos Solutions</h2>
            <p class="mb-5">Pour assurer nos formations, nous nous basons sur l’ingénierie de formation à savoir :</p>

            <div class="solution_cards_box">
                <div class="solution_card">
                    <div class="so_top_icon"><i class="fas fa-book-open"></i></div>
                    <div class="solu_title"><h3>Identification et Analyse des Besoins</h3></div>
                    <div class="solu_description"><p>Compréhension approfondie des exigences de votre organisation pour définir des objectifs clairs.</p></div>
                </div>

                <div class="solution_card">
                    <div class="so_top_icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <div class="solu_title"><h3>Conception de Plans de Formation</h3></div>
                    <div class="solu_description"><p>Élaboration de programmes sur mesure alignés sur vos objectifs stratégiques.</p></div>
                </div>

                <div class="solution_card">
                    <div class="so_top_icon"><i class="fas fa-users"></i></div>
                    <div class="solu_title"><h3>Organisation et Animation de Cycles de Formation</h3></div>
                    <div class="solu_description"><p>Gestion complète des sessions de formation, garantissant un environnement d'apprentissage interactif et engageant.</p></div>
                </div>

                <div class="solution_card">
                    <div class="so_top_icon"><i class="fas fa-laptop"></i></div>
                    <div class="solu_title"><h3>Approche Pédagogique Personnalisée</h3></div>
                    <div class="solu_description"><p>Création de méthodes d'enseignement adaptées aux divers styles d'apprentissage de vos collaborateurs.</p></div>
                </div>

                <div class="solution_card">
                    <div class="so_top_icon"><i class="fas fa-sync-alt"></i></div>
                    <div class="solu_title"><h3>Bilan de Formation</h3></div>
                    <div class="solu_description"><p>Évaluation des acquis post-formation à l'aide de grilles de compétences pour assurer le suivi et le développement continu.</p></div>
                </div>

                <div class="solution_card">
                    <div class="so_top_icon"><i class="fas fa-medal"></i></div>
                    <div class="solu_title"><h3>Évaluation des Formations</h3></div>
                    <div class="solu_description"><p>Mise en place d'indicateurs pour mesurer l'impact des formations sur la performance des équipes.</p></div>
                </div>
            </div>
        </div>
    </section>


    <section class="certif-section">
    <div class="container">
        <h2>Nos prestations en formation sont axées sur :</h2>
        <div class="certif-options">
            <div class="certif-card" id="managementBtn">
                <i class="fas fa-cogs"></i>
                <h4>Système de management normalisé ISO</h4>
            </div>
            <div class="certif-card" id="performanceBtn">
                <i class="fas fa-chart-line"></i>
                <h4>Gestion des performances organisationnelles</h4>
            </div>
        </div>

        <!-- Choix Certifiante/Qualifiante -->
        <div id="certifChoice" class="hidden mt-4">
            <h4>Choisissez le type de formation :</h4>
            <div class="certif-options">
                <div class="certif-card" data-type="certifiante">
                    <i class="fas fa-certificate"></i>
                    <h5>Formations Certifiantes</h5>
                </div>
                <div class="certif-card" data-type="qualifiante">
                    <i class="fas fa-user-graduate"></i>
                    <h5>Formations Qualifiantes</h5>
                </div>
            </div>

        </div>

                            <!-- Gestion RH / Finance Choice -->
<div id="gestionChoice" class="hidden mt-4">
    <h4>Choisissez votre domaine :</h4>
    <div class="certif-options">
        <div class="certif-card gestion-card" data-type="gestion_rh">
            <i class="fas fa-users"></i>
            <h5>Formation en gestion des ressources humaines</h5>
        </div>
        <div class="certif-card gestion-card" data-type="finance">
            <i class="fas fa-chart-line"></i>
            <h5>Formation en finance</h5>
        </div>
    </div>
</div>



        <!-- Liste des Formations -->
        <div id="formationList" class="hidden formation-list">
            <h4>Liste des formations disponibles :</h4>
            <ul id="formations"></ul>
        </div>
    </div>
</section>

        <!-- Call to Action Section -->
        <div class="section cta" style="background: linear-gradient(135deg, #FF7F50, #E67E22, #D35400); color: #fff; text-align: center;">
    <div class="container">
        <h2 class="section-title" data-aos="fade-down" style="font-size: 2.8em; font-weight: 800;">Envie de perfectionner vos compétences ?</h2>
        <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.2em; max-width: 700px; margin: 0 auto;">Contactez-nous dès aujourd’hui pour découvrir comment THE MISSION peut vous accompagner vers l’excellence !</p>
        <a href="index.php#contact" class="btn btn-lg cta-btn" data-aos="zoom-in" data-aos-delay="400">Contactez-nous</a>
    </div>
        </div>



<footer>
   <?php include 'footer.php'; ?>
      </div>
  </footer>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="assets/js/formation.js"></script>


<script src="assets/js/jquery.slicknav.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
