<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
 <title>Error <?= $_GET['code']; ?></title>
</head>
<body>

<header class="index-header">
  <?php include("nav.php") ?>
  <div class="container">
    <div class="row">
    <div class="col-12 d-flex justify-content-center align-content-center">
      <img class="gif" src="img/ddd.gif" alt="tomaten-animation" title="tomaten-animation">
    </div>
    </div>
  </div>
</header>

<main>

<h1>ERROR <?= $_GET['code']; ?></h1>
<p>bdbgewqiguieguifg</p>

</main>

<?php include("footer.php") ?>

<?php include("socialmedia.php") ?>

<button onclick="scrollToTop()" id="scrollToTopBtn" title="Nach oben scrollen">Top</button>

<script src="js/bootstrap.min.js"></script>
<script src="js/bacio.js"></script>

</body>
</html>