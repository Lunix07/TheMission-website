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
        <h1>Module N°8: Gestion des Audits avec MISSION PROCESS</h1>
        <p>La gestion des audits est essentielle pour garantir la conformité et l'amélioration continue de votre organisme. Grâce à MISSION PROCESS, vous pouvez gérer efficacement vos audits internes et externes, assurant ainsi une évaluation rigoureuse de vos processus et une identification proactive des opportunités d'amélioration.</p>
    </section>

    <section class="cards-section">
        <div class="card" onclick="showContent('content1', this)">
            <div class="card-icon">📅</div>
            <h3>Planification et Organisation des Audits</h3>
            <p>Établissez une planification et une préparation rigoureuse pour assurer des audits efficaces.</p>
        </div>
        <div class="card" onclick="showContent('content2', this)">
            <div class="card-icon">🔍</div>
            <h3>Exécution et Suivi des Audits</h3>
            <p>Effectuez les audits avec transparence et suivez les non-conformités identifiées.</p>
        </div>
        <div class="card" onclick="showContent('content3', this)">
            <div class="card-icon">⚙️</div>
            <h3>Actions Correctives et Amélioration Continue</h3>
            <p>Élaborez des mesures correctives et évaluez leur efficacité pour une amélioration continue.</p>
        </div>
        <div class="card" onclick="showContent('content4', this)">
            <div class="card-icon">📄</div>
            <h3>Reporting et Communication</h3>
            <p>Générez des rapports détaillés et partagez des recommandations basées sur les résultats.</p>
        </div>
    </section>

    <section class="content-container">
        <!-- Planification et Organisation des Audits -->
        <div id="content1" class="content-section">
            <h2>Planification des audits</h2>
            <p>Établissez un calendrier d'audits clair et structuré, garantissant que tous les processus critiques sont évalués régulièrement pour assurer leur conformité.</p>
        </div>   
        <div id="content1" class="content-section">
            <h2>Préparation des audits</h2>
            <p>Centralisez toutes les informations et documents nécessaires pour une préparation optimale, permettant aux auditeurs d'effectuer leur mission dans les meilleures conditions.</p>
        </div>

        <!-- Exécution et Suivi des Audits -->
        <div id="content2" class="content-section">
            <h2>Réalisation des audits</h2>
            <p>Effectuez des audits en toute transparence, en utilisant des check-lists standardisées et des outils d'évaluation pour assurer une approche systématique.</p>
        </div>
        <div id="content2" class="content-section">
            <h2>Suivi des non-conformités</h2>
            <p>Identifiez et documentez les non-conformités détectées durant l'audit, garantissant un enregistrement précis et un traitement approprié.</p>
        </div>

        <!-- Actions Correctives et Amélioration Continue -->
        <div id="content3" class="content-section">
            <h2>Élaboration de mesures correctives</h2>
            <p>Développez des plans d'action concrets pour traiter les non-conformités identifiées, en assurant leur mise en œuvre efficace dans les délais impartis.</p>
</div>
        <div id="content3" class="content-section">
            <h2>Évaluation de l'efficacité des actions</h2>
            <p>Suivez les actions correctives mises en place et évaluez leur impact sur l'amélioration des processus pour garantir une culture d'amélioration continue.</p>
        </div>

        <!-- Reporting et Communication -->
        <div id="content4" class="content-section">
            <h2>Rapports d'audit détaillés</h2>
            <p>Générez des rapports clairs et complets sur les résultats des audits, facilitant ainsi la compréhension des enjeux et la communication des résultats aux parties prenantes.</p>
        </div>
        <div id="content4" class="content-section">    
            <h2>Feedback et recommandations</h2>
            <p>Partagez des recommandations concrètes basées sur les résultats des audits pour renforcer les bonnes pratiques et améliorer les performances.</p>
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
            
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => card.classList.remove('active'));
            cardElement.classList.add('active');
        }
    </script>
</body>
</html>
