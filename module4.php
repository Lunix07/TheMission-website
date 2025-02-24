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
        <h1>Module N°4: Gestion des Modifications avec MISSION PROCESS</h1>
        <p>La gestion des modifications est essentielle pour garantir la stabilité et l'efficacité de votre organisme. MISSION PROCESS fournit des outils adaptés pour faciliter l'analyse, la documentation et le suivi des changements, tout en minimisant les impacts négatifs sur vos opérations. Avec MISSION PROCESS, la gestion des modifications devient un processus fluide et maîtrisé, assurant la continuité de vos opérations tout en répondant aux exigences évolutives de votre environnement. Transformez chaque changement en une opportunité d'amélioration pour votre organisme.</p>
    </section>

    <section class="cards-section">
        <div class="card" onclick="showContent('content1', this)">
            <div class="card-icon">📝</div>
            <h3>Identification et Documentation des Modifications</h3>
            <p>Capturez et documentez efficacement chaque modification pour une traçabilité optimale.</p>
        </div>
        <div class="card" onclick="showContent('content2', this)">
            <div class="card-icon">✅</div>
            <h3>Processus de Validation et d'Approbation</h3>
            <p>Établissez un processus de validation clair et efficace pour chaque modification.</p>
        </div>
        <div class="card" onclick="showContent('content3', this)">
            <div class="card-icon">📊</div>
            <h3>Suivi et Mise en Œuvre</h3>
            <p>Assurez un suivi rigoureux des modifications mises en œuvre et évaluez leur impact.</p>
        </div>
    </section>

    <section class="content-container">
        <!-- Content for Identification et Documentation des Modifications -->
        <div id="content1" class="content-section">
            <h2>Enregistrement des changements</h2>
            <p>Capturez toutes les modifications proposées, en fournissant des détails complets sur leur nature, leur portée et leurs implications.</p>
        </div>
        <div id="content1" class="content-section">
            <h2>Évaluation des impacts</h2>
            <p>Analysez l'impact potentiel des modifications sur vos processus, vos ressources et vos parties prenantes, garantissant ainsi une prise de décision éclairée.</p>
        </div>

        <!-- Content for Processus de Validation et d'Approbation -->
        <div id="content2" class="content-section">
            <h2>Flux de travail structuré</h2>
            <p>Établissez un processus de validation clair et efficace pour chaque modification, permettant un suivi des étapes et des approbations nécessaires.</p>
        </div>
        <div id="content2" class="content-section">
            <h2>Contrôle des versions</h2>
            <p>Gérez les différentes versions des documents et des processus associés, en garantissant que seule la version validée soit utilisée.</p>
        </div>

        <!-- Content for Suivi et Mise en Œuvre -->
        <div id="content3" class="content-section">
            <h2>Suivi des modifications</h2>
            <p>Assurez un suivi rigoureux des modifications mises en œuvre, en vérifiant leur conformité avec les attentes initiales et en ajustant si nécessaire.</p>
        </div>
        <div id="content3" class="content-section">
            <h2>Reporting des résultats</h2>
            <p>Produisez des rapports détaillés sur l’impact des modifications sur les opérations, permettant une visibilité et une transparence pour toutes les parties concernées.</p>
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
