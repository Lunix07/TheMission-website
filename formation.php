<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations - THE MISSION</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
     .hero {
    position: relative;
    background: url('/assets/img/formation/formation.jpg') no-repeat center center/cover;
    text-align: center;
    padding: 120px 20px;

}

.hero::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    z-index: 1;

}

.hero .content {
    position: relative;
    z-index: 2;
    color: #fff;
    text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8); /* Stronger text shadow */
}

.hero h1 {
    font-size: 3.5rem;
    font-weight: 800;
    color:rgb(255, 255, 255);
    text-transform: uppercase;
    text-shadow: 5px 5px 15px rgba(0, 0, 0, 1); /* Stronger shadow for more visibility */
}

.hero p {
    font-size: 1.4rem;
    max-width: 900px;
    margin: 20px auto;
    line-height: 1.8;
    font-weight: 600; /* Increase font weight */
    color:rgb(255, 255, 255);
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.9); /* More contrast */
    padding: 10px;
    border-radius: 8px;
    display: inline-block;
}


        /* Certif Section */
        .certif-section {
            padding: 80px 20px;
            text-align: center;
            background: #f8f9fa;
        }
        .certif-options {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }
        .certif-card {
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 15px;
            transition: 0.3s;
            cursor: pointer;
            width: 300px;
            text-align: center;
        }
        .certif-card:hover {
            transform: translateY(-5px);
            background: #007bff;
            color: white;
        }
        .certif-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #007bff;
            transition: 0.3s;
        }
        .certif-card:hover i {
            color: white;
        }
        .hidden {
            display: none;
        }
        .formation-list {
            margin-top: 30px;
            text-align: left;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .formation-list ul {
            list-style-type: none;
            padding: 0;
        }
        .formation-list li {
            background: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        /* Solutions Section */
        .section_our_solution {
            padding: 60px 0;
            text-align: center;
        }
        .solution_cards_box {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .solution_card {
            flex: 0 1 30%;
            background: white;
            box-shadow: 0 2px 4px rgba(136, 144, 195, 0.2), 0 5px 15px rgba(37, 44, 97, 0.15);
            border-radius: 15px;
            margin: 15px;
            padding: 20px;
            transition: 0.5s;
            min-height: 200px;
            position: relative;
        }
        .solution_card:hover {
            background: #309df0;
            color: white;
            transform: scale(1.05);
        }
        .solution_card:hover .solu_title h3,
        .solution_card:hover .solu_description p {
            color: white;
        }
        .solution_card:before {
            content: "";
            position: absolute;
            background: rgba(85, 108, 214, 0.1);
            width: 150px;
            height: 300px;
            transform: rotate(42deg);
            right: -50px;
            top: -20px;
            border-radius: 35px;
        }
        .solu_title h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        .solu_description p {
            font-size: 1rem;
            color: #555;
        }
        .so_top_icon {
            font-size: 2.5rem;
            color: #309df0;
            margin-bottom: 15px;
        }
        .solution_card:hover .so_top_icon {
            color: white;
        }
    </style>
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
    <section class="hero">
        <h1>Nos Formations</h1>
        <p> THE MISSION vous accompagne à la réalisation de vos grands projets, au développement de compétences ciblées, à l’intégration de nouvelles pratiques ou méthodes selon les modalités les plus adaptées à vos enjeux, à vos contraintes.</p>
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




<footer>
   <?php include 'footer.php'; ?>
      </div>
  </footer>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    const formations = {
        "management_certifiante": [
            "Consultant certifié : Lead Implementer ISO 9001",
            "Auditeur certifié : Lead Implementer ISO 9001",
            "Consultant certifié : Lead Implementer ISO 21001",
            "Auditeur certifié : Lead Implementer ISO 21001",
            "Consultant certifié : Lead Implementer ISO 14001",
            "Auditeur certifié : Lead Auditor ISO 14001",
            "Consultant certifié : Lead Implementer ISO 45001",
            "Auditeur certifié : Auditor Lead ISO 45001"
        ],
        "management_qualifiante": [
            "Exigences de la norme ISO 9001:2015",
            "Exigences de la norme ISO 21001:2018",
            "Exigences de la norme ISO 45001:2018",
            "Exigences de la norme ISO 14001:2015",
            "Audit interne selon la norme ISO 19011:2018",
            "La satisfaction client et traitements des réclamations selon la norme ISO 10002:2018",
            "Management des risques selon la norme ISO 31000:2018",
            "Indicateurs et tableaux de bord",
            "Management par approche processus",
            "Management par l'innovation",
            "Concevoir et mettre en œuvre un Système de Management Intégré Qualité – Sécurité – Environnement"
        ],
        "gestion_rh": [
            "Élaboration d'un plan de formation",
            "Gestion des carrières et des compétences",
            "Gestion des compétences et de la polyvalence",
            "Gestion des ressources et management d'équipe",
            "La communication RH au service de la fonction GRH",
            "Définition et mise en place d'un plan de carrière"
        ],
        "finance": [
            "Initiation à la finance d'entreprise",
            "Les fondamentaux de l'analyse financière",
            "Les outils d'analyse financière",
            "Analyse financière et diagnostic financier",
            "Gestion de la trésorerie et du cash-flow",
            "Stratégies de financement des entreprises"
        ]
    };

    // Click on Management Button
    $("#managementBtn").click(function () {
        $("#certifChoice").removeClass("hidden");  // Show Certifiante/Qualifiante choices
        $("#gestionChoice").addClass("hidden");    // Hide Gestion RH/Finance choices
        $("#formationList").addClass("hidden");    // Hide previous formations
    });

    // Click on Certifiante/Qualifiante
    $("#certifChoice .certif-card").click(function () {
        const type = $(this).data("type");
        const key = `management_${type}`;
        displayFormations(formations[key]);
    });

    // Click on Gestion des performances organisationnelles Button
    $("#performanceBtn").click(function () { 
        $("#certifChoice").addClass("hidden");     // Hide Certifiante/Qualifiante options
        $("#formationList").addClass("hidden");    // Hide previous formations
        $("#gestionChoice").removeClass("hidden"); // ✅ Show Gestion RH/Finance options
    });

    // Click on Gestion RH/Finance
    $(".gestion-card").click(function () {
        const type = $(this).data("type");
        displayFormations(formations[type]);
    });

    // Display Formations List
    function displayFormations(list) {
        $("#formations").empty();
        list.forEach(formation => {
            $("#formations").append(`<li>${formation}</li>`);
        });
        $("#formationList").removeClass("hidden");
    }
});


</script>
  <script src="assets/js/main.js"></script>
</body>
</html>
