<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
  <title>pizzabacio</title>
</head>
<body>

<header class="index-header">
<?php include("nav.php") ?>

</header>

<main>

<section id="video" class="d-flex justify-content-center mt-5">
        <div class="container mt-3">
          <div class="row">
            <div class="col-xl-12">
              <h2>Video</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <video class="w-100 custom-radius" controls autoplay muted loop>
                <source src="viedeo/viedeo.mp4" type="video/mp4" />
              </video>
            </div>
          </div>
        </div>
</section>

<section id="index__zutaten">
        <div class="pb-5 pt-5">
          <div class="container">
          <div class="row">
            <h2 class="text-grey pb-5 d-flex justify-content-center">Unsere Zutaten
            </h2>
            <div class="col-md-4 text-center">
            <img class="img-fluid custom-radius" src="img/basilikum.png" alt="">
              <p class="text-grey"><strong>Basilikum</strong></p>
            </div>
            <div class="col-md-4 text-center">
            <img class="img-fluid custom-radius" src="img/mozzarella.png" alt="">
              <p class="text-grey"><strong>Mozzarella</strong></p>
            </div>
            <div class="col-md-4 text-center">
            <img class="img-fluid custom-radius" src="img/tomate.png" alt="">
              <p class="text-grey"><strong>Tomate</strong></p>
            </div>
          </div>
          </div>
        </div>
</section>

<section id="index__beschreibung">
        <div class="container mt-5 mb-5">
          <div class="row p-4">
            <div class="col-lg-6">
            <h2>Beschreibung</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehenderit dolorum quam unde. Fuga ex, adipisci architecto, laudantium deleniti nobis accusantium iure animi laboriosam minus praesentium eaque labore eligendi dolorem eum dolores porro blanditiis nam, totam autem delectus perspiciatis. Placeat quas repellendus odio iusto autem quia deserunt totam voluptatem.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
           <img class="img-fluid custom-radius" src="img/platzhalter.png" alt="">
            </div>
          </div>
          <div class="row p-4">
            <div class="col-lg-6">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehenderit dolorum quam unde. Fuga ex, adipisci architecto, laudantium deleniti nobis accusantium iure animi laboriosam minus praesentium eaque labore eligendi dolorem eum dolores porro blanditiis nam, totam autem delectus perspiciatis. Placeat quas repellendus odio iusto autem quia deserunt totam voluptatem.</p>
            </div>
            <div class="col-lg-6">
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehenderit dolorum quam unde. Fuga ex, adipisci architecto.</p>
             <img class="img-fluid custom-radius" src="img/icon-tomate.png" alt="">
            </div>
          </div>
        </div>
</section>



   <!-- SVG Definitionsfile -->
   <svg width="0" height="0" style="position: absolute; visibility: hidden;">
        <defs>
            <clipPath id="clipPathId">
                <path d="M216.37,120.17c.41-3.83.63-7.72.63-11.67C217,48.58,168.42,0,108.5,0S0,48.58,0,108.5c0,49.56,33.23,91.36,78.63,104.33-.41,3.83-.63,7.72-.63,11.67,0,59.92,48.58,108.5,108.5,108.5s108.5-48.58,108.5-108.5c0-49.56-33.23-91.36-78.63-104.33Z" />
            </clipPath>
        </defs>
    </svg>
    <div class="clip-container"></div>



<div class="clip-container"></div>

</main>

<?php include("footer.php") ?>

<script src="js/bootstrap.min.js"></script>
</body>
</html>