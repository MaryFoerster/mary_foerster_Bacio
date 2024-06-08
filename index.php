<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>pizzabacio</title>
</head>
<body>

<header>
<?php include("nav.php") ?>




</header>


<main>






<section id="video" class="d-flex justify-content-center">
        <div class="container">
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
           <img class="img-fluid custom-radius" src="img/platzhalter.jpg" alt="">
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


<br>
<br>
<br>
<br>
<br>
<br>
<section id="index__pizza">
        <div class="pb-5 pt-5">
          <div class="container">
          <div class="row">
            <h2 class="text-grey pb-5 d-flex justify-content-center">Unsere Zutaten
            </h2>
            <div class="col-md-4 text-center bg-primary d-flex justify-content-center">
            <div class="card custom-radius bg-red m-2">
                <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Margerita</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div class="card card__hover custom-radius bg-red m-2">
              <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Margerita</h5>
              </div>
            </div>
            </div>
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div class="card custom-radius bg-red m-2">
              <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Margerita</h5>
              </div>
            </div>
            </div>
          </div>
          </div>
        </div>
</section>

<br>
<br>

</main>

<?php include("footer.php") ?>

<script src="js/bootstrap.min.js"></script>
</body>
</html>