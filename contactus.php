<?php
// Initialize session
session_start();
?>
<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TheMission - Contact</title>
    <meta name="description" content="THE MISSION is the best consulting firm you can wish for.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">

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

<body >

<?php include 'header.php'; ?>

   
   
   <!-- Contact Section -->
    <section id="contact" class="contact section">
  <div class="container" data-aos="fade-up">
    <div class="row align-items-center">

      <!-- Message à gauche -->
      <div class="col-lg-6 contact-text">
        <h1 class="message">Vous avez besoin de nos services ou d’un accompagnement spécifique pour votre entreprise ? Nos équipes sont à votre écoute pour répondre à vos enjeux.</h1>
        <h3 class="highlight">Écrivez-nous !</h3>
      </div>

      <!-- Formulaire à droite -->
      <div class="col-lg-6">
        <form action="contact.php" method="post" class="php-email-form">
          <div class="form-group">
            <input type="text" name="prenom" class="form" placeholder="Prénom" required>
          </div>
          <div class="form-group">
            <input type="text" name="name" class="form" placeholder="Nom" required>
          </div>


          <div class="form-group">
            <input type="email" class="form" name="email" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="telephone" class="form" placeholder="Téléphone">
          </div>
          <div class="form-group">
            <textarea class="form" name="message" placeholder="Message" rows="4" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn-submit">Envoyer</button>
          </div>

          <div class="sent-message">Votre message a été envoyé. Merci!</div>
          <div class="error-message">An error occurred. Please try again.</div>

        </form>
      </div>

    </div>
  </div>
</section>


<footer>        
        <?php include 'footer.php'; ?>
</footer>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<script src="assets/js/slick.min.js"></script>

<script src="assets/js/index.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>
<script src="assets/js/main.js"></script>



</body>

</html>