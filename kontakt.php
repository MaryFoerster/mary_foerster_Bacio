<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
  <title>Kontakt</title>
</head>
<body>

<header>
<?php include("nav.php") ?>

</header>

<main>

<section id="kontakt__beschreibung">
        <div class="container mt-5 mb-5">
          <div class="row p-4">
            <div class="col-lg-6">
            <h1 class="mb-4">Kontakt</h1>
              <div class="box d-flex mb-4">
              <img class="kontakt-icon" src="img/location.png" alt="">
              <p>Hofgasse 4, 6020 Innsbruck</p></div>
              <div class="box d-flex mb-4">
              <img class="kontakt-icon" src="img/phone.png" alt="">
              <p>+43 664 4132694</p></div>
              <div class="box d-flex mb-4">
              <img class="kontakt-icon" src="img/email.png" alt="">
              <p>www.pizzabacio.com</p></div>
           
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
            <iframe class="maps custom-radius" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.3455663838236!2d11.391373676373934!3d47.268498971160845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479d6bfbbf0942dd%3A0x77d4de38076e6d24!2sAltstadt%20Innsbruck!5e0!3m2!1sde!2sat!4v1717872586145!5m2!1sde!2sat" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
</section>

<?php include("formular.php") ?>

</main>

<?php include("footer.php") ?>

<script src="js/bootstrap.min.js"></script>
</body>
</html>