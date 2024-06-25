<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
 <title>Error <?= $_GET['code']; ?></title>
</head>
<body>

<header class="header-pizza">
  <?php include("nav.php") ?>
</header>

<main>

<div class="container danke mt-5 mb-5">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-md-6 d-flex align-items-center flex-column text-center text-md-left">
            <h1>ERROR <?= $_GET['code']; ?></h1>
            <p>Entschuldige etwas ist schiffgelaufen!</p>
            <div><a class="btn-error" href="index.php">Zurück</a></div>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <img class="img-fluid" src="img/tomate.jpg" alt="">
        </div>
    </div>
</div>


</main>

<?php include("footer.php") ?>

<?php include("socialmedia.php") ?>

<button onclick="scrollToTop()" id="scrollToTopBtn" title="Nach oben scrollen">Top</button>

<script src="js/bootstrap.min.js"></script>
<script src="js/bacio.js"></script>

</body>
</html>