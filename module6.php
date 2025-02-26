<?php 
// Initialize session
session_start();
?>
<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TheMission - Modules</title>
    <meta name="description" content="MissionTrack est une application pour la gestion de la qualité d’entreprise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/module2.css">
</head>
<body>
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

    <?php include 'header.php'; ?>

    <section class="intro-section">
        <h1>Module N°6: Gestion des Risques avec MISSION PROCESS</h1>
        <p>La gestion des risques est essentielle pour anticiper les incertitudes qui peuvent affecter votre organisme. MISSION PROCESS vous fournit des outils performants pour identifier, évaluer et atténuer les risques, garantissant ainsi la pérennité et la sécurité de vos opérations.</p>
    </section>

    <section class="cards-section">
        <div class="card" onclick="showContent('content1', this)">
            <div class="card-icon">🔍</div>
            <h3>Identification et Évaluation des Risques</h3>
            <p>Détectez et évaluez les risques pour prioriser les efforts de gestion.</p>
        </div>
        <div class="card" onclick="showContent('content2', this)">
            <div class="card-icon">🛠️</div>
            <h3>Élaboration de Plans d'Atténuation</h3>
            <p>Développez des stratégies efficaces pour minimiser l'impact des risques.</p>
        </div>
        <div class="card" onclick="showContent('content3', this)">
            <div class="card-icon">📊</div>
            <h3>Surveillance et Révision des Risques</h3>
            <p>Assurez un suivi continu et des mises à jour régulières des mesures prises.</p>
        </div>
        <div class="card" onclick="showContent('content4', this)">
            <div class="card-icon">📢</div>
            <h3>Reporting et Communication</h3>
            <p>Communiquez efficacement les risques et les stratégies mises en place.</p>
        </div>
    </section>

    <section class="content-container">
        <!-- Identification et Évaluation des Risques -->
        <div id="content1" class="content-section">
            <h2>Détection précoce</h2>
            <p>Identifiez de manière proactive les risques potentiels à travers une évaluation systématique des processus et des activités de votre organisme.</p>
        </div>
        <div id="content1" class="content-section">
            <h2>Évaluation des impacts</h2>
            <p>Analysez la probabilité et la gravité de chaque risque pour prioriser vos efforts de gestion et allouer les ressources de manière efficace.</p>
        </div>

        <!-- Élaboration de Plans d'Atténuation -->
        <div id="content2" class="content-section">
            <h2>Stratégies d'atténuation</h2>
            <p>Développez des plans d’action spécifiques pour atténuer les risques identifiés, en définissant des mesures concrètes à mettre en œuvre et des responsables désignés.</p>
        </div>
        <div id="content2" class="content-section">
            <h2>Suivi des mesures</h2>
            <p>Assurez le suivi régulier des actions mises en place pour garantir leur efficacité et apporter des ajustements en fonction de l’évolution des situations.</p>
        </div>

        <!-- Surveillance et Révision des Risques -->
        <div id="content3" class="content-section">
            <h2>Surveillance continue</h2>
            <p>Mettez en place des indicateurs de performance pour surveiller l’évolution des risques et des actions d’atténuation, vous permettant d’agir rapidement en cas de besoin.</p>
        </div>
        <div id="content3" class="content-section">
            <h2>Révisions périodiques</h2>
            <p>Réévaluez régulièrement le paysage des risques et l’efficacité de vos mesures, intégrant les retours d’expérience pour améliorer continuellement votre approche.</p>
        </div>

        <!-- Reporting et Communication -->
        <div id="content4" class="content-section">
            <h2>Rapports sur les risques</h2>
            <p>Produisez des rapports détaillés sur l’état des risques et les actions entreprises, offrant une transparence essentielle pour la prise de décision.</p>
        </div>
        <div id="content4" class="content-section">
            <h2>Sensibilisation des parties prenantes</h2>
            <p>Communiquez de manière proactive avec toutes les parties prenantes sur les risques identifiés et les mesures d’atténuation mises en place, renforçant ainsi la confiance et l’engagement.</p>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        function showContent(contentId, cardElement) {
            const contents = document.querySelectorAll('.content-section');
            contents.forEach(content => content.classList.remove('active'));
            const matchingContents = document.querySelectorAll(`#${contentId}`);
            matchingContents.forEach(content => content.classList.add('active'));
            
            // Remove active class from all cards
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => card.classList.remove('active'));
            
            // Add active class to the clicked card
            cardElement.classList.add('active');
        }
    </script>
</body>
</html>
