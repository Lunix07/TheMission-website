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
        <h1>Module N°7: Gestion des Indicateurs avec MISSION PROCESS</h1>
        <p>La gestion des indicateurs est un élément clé pour mesurer la performance et assurer l'amélioration continue de votre organisme. Avec MISSION PROCESS, vous disposez d'outils puissants pour suivre, analyser et optimiser vos indicateurs de performance, facilitant ainsi une prise de décision éclairée.</p>
    </section>

    <section class="cards-section">
        <div class="card" onclick="showContent('content1', this)">
            <div class="card-icon">📊</div>
            <h3>Suivi et Mesure des Indicateurs</h3>
            <p>Établissez des indicateurs pertinents et assurez une collecte de données fiable.</p>
        </div>
        <div class="card" onclick="showContent('content2', this)">
            <div class="card-icon">📈</div>
            <h3>Analyse et Interprétation des Données</h3>
            <p>Utilisez des outils d'analyse avancés pour identifier les tendances et optimiser les performances.</p>
        </div>
        <div class="card" onclick="showContent('content3', this)">
            <div class="card-icon">🔄</div>
            <h3>Actions Correctives et Amélioration Continue</h3>
            <p>Développez et suivez des plans d'action pour corriger les écarts et améliorer continuellement vos processus.</p>
        </div>
        <div class="card" onclick="showContent('content4', this)">
            <div class="card-icon">📑</div>
            <h3>Reporting et Communication</h3>
            <p>Produisez des rapports détaillés et partagez les résultats avec les parties prenantes.</p>
        </div>
    </section>

    <section class="content-container">
        <!-- Content for Suivi et Mesure des Indicateurs -->
        <div id="content1" class="content-section">
            <h2>Définition des indicateurs clés</h2>
            <p>Établissez des indicateurs pertinents et alignés sur vos objectifs stratégiques, permettant une évaluation précise de la performance de vos processus.</p>
        </div>
        <div id="content1" class="content-section">
            <h2>Collecte de données automatisée</h2>
            <p>Centralisez la collecte de données pour vos indicateurs, garantissant une information à jour et fiable pour toutes vos analyses.</p>
        </div>

        <!-- Content for Analyse et Interprétation des Données -->
        <div id="content2" class="content-section">
            <h2>Analyse approfondie</h2>
            <p>Utilisez des outils d'analyse avancés pour interpréter les données recueillies, identifiant les tendances, les écarts et les opportunités d'amélioration.</p>
        </div>
        <div id="content2" class="content-section">
            <h2>Visualisation claire</h2>
            <p>Présentez les résultats de manière claire et concise à l'aide de tableaux de bord et de rapports graphiques, facilitant la compréhension et la communication des performances.</p>
        </div>

        <!-- Content for Actions Correctives et Amélioration Continue -->
        <div id="content3" class="content-section">
            <h2>Mise en place de plans d'action</h2>
            <p>Identifiez les domaines nécessitant des améliorations et développez des plans d'action ciblés pour corriger les écarts par rapport aux objectifs fixés.</p>
        </div>
        <div id="content3" class="content-section">
            <h2>Suivi de l'impact des actions</h2>
            <p>Évaluez l'efficacité des actions mises en œuvre en mesurant leur impact sur vos indicateurs, garantissant ainsi une amélioration continue.</p>
        </div>

        <!-- Content for Reporting et Communication -->
        <div id="content4" class="content-section">
            <h2>Rapports réguliers</h2>
            <p>Produisez des rapports détaillés sur la performance de vos indicateurs, permettant un suivi régulier des progrès réalisés et facilitant la transparence au sein de votre organisme.</p>
        </div>
        <div id="content4" class="content-section">
            <h2>Implication des parties prenantes</h2>
            <p>Partagez les résultats avec les parties prenantes pour renforcer leur engagement et favoriser une culture d'amélioration continue au sein de l'organisation.</p>
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
