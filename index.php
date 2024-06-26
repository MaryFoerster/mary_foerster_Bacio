<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
  <title>pizzabacio</title>
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

<section id="index__beschreibung">
        <div class="container mt-3 mb-5">
          <div class="row p-4">
            <div class="col-lg-6">
            <h1>Pizza Bacio</h1>
            <p>
            Willkommen bei BACIO – Die Beste Tiefkühlpizza <br>
            BACIO bringt Ihnen das authentische Geschmackserlebnis einer italienischen Pizzeria direkt nach Hause. Jede Pizza wird nach original italienischem Rezept mit handgemachtem Teig und hochwertigen Zutaten hergestellt und im Steinofen vorgebacken. 
            <br><br>Genießen Sie die erste Tiefkühlpizza, die schmeckt wie frisch beim Italiener – knusprig, lecker und von höchster Qualität. Erleben Sie den Unterschied mit Pizza BACIO!</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
           <img class="img-fluid custom-radius" src="img/pizzaIMG.jpg" alt="Pizza-Belegt-mit-Tomaten-und-Bailikum" title="Pizza-Belegt-mit-Tomaten-und-Bailikum">
            </div>
          </div>
        </div>
</section>

<section id="video" class="d-flex justify-content-center mt-5">
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-12 d-flex justify-content-center">
                <video class="img-fluid custom-radius" controls muted loop poster="img/poster.jpg">
                    <source src="video/bacio-video.mp4" type="video/mp4" alt="Pizza-Bacio-Werbe-Video" title="Pizza-Bacio-Werbe-Video"/>
                </video>
            </div>
        </div>
    </div>
</section>

<section id="index__Werte Bacio">
        <div class="pb-5 pt-5">
          <div class="container">
          <div class="row">
            <h2 class="text-grey pb-5 d-flex justify-content-center">Unsere Werte
            </h2>
            <div class="col-md-4 text-center">
            <img class="img-fluid custom-radius" src="img/pizza-belegen.jpg" lt="Pizza-Belegen" title="Pizza-Belegen">
            <h4 class="mt-4 pb-2"><strong>Nachhaltigkeit</strong></h4>
            </div>
            <div class="col-md-4 text-center">
            <img class="img-fluid custom-radius" src="img/pizzamacher2.jpg" alt="Ein-Pizzabaecker-der-Teig-knetet" title="Ein-Pizzabaecker-der-Teig-knetet">
            <h4 class="mt-4 pb-2"><strong>Handgemacht</strong></h4>
            </div>
            <div class="col-md-4 text-center">
    
              <img class="img-fluid custom-radius" src="img/pizzahand.jpg" alt="Pizza-Belegen" title="Pizza-Belegen">
              <h4 class="mt-4 pb-2"><strong>Beste Qualität</strong></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 text-center">
            <img class="img-icon custom-radius hover" src="img/nachhaltigkeit.jpg" alt="Illustration-Vegan" title="Illustration-Vegan">
            </div>
            <div class="col-md-4 text-center">
            <img class="img-icon custom-radius hover" src="img/handgemacht.jpg" alt="Illustration-Hand" title="Illustration-Hand">
            </div>
            <div class="col-md-4 text-center">
            <img class="img-icon custom-radius hover" src="img/qualitaet.jpg" alt="Illustration-Tomate" title="Illustration-Tomate">
            </div>
          </div>
          </div>
        </div>
</section>

<section id="audio" class="audio pt-3 pb-3">
  <div class="container pt-5 pb-5">
    <div class="row pt-5 pb-5">
      <div class="col-12 d-flex justify-content-center flex-column align-items-center">
        <h2 class="text-white d-flex justify-content-center p-4 audio-text">Play Me!</h2>
        <img class="img-radio mb-5" src="img/footer-img.png" alt="">
        
        <!-- Hidden audio element -->
        <audio id="custom-audio" src="audio/Bacio-Spot.mp3"></audio>
        
        <!-- Custom play button -->
        <button id="play-button" class="btn btn-primary">Play</button>
      </div>
    </div>
  </div>
</section>

<section id="index__zutaten">
        <div class="pb-5 pt-5">
          <div class="container">
          <div class="row">
            <h2 class="text-grey pb-5 d-flex justify-content-center">Nur beste Zutaten
            </h2>
            <div class="col-md-4 text-center">
            <img class="img-fluid custom-radius" src="img/basilikum.jpg" alt="Basilikum-Pflanze" title="Basilikum-Pflanze">
              <h4 class="mt-4"><strong>Basilikum</strong></h4>
            </div>
            <div class="col-md-4 text-center">
            <img class="img-fluid custom-radius" src="img/mozzarella-img.jpg" alt="Mini-Mozzarella" title="Mini-Mozzarella">
              <h4 class="mt-4"><strong>Mozzarella</strong></h4>
            </div>
            <div class="col-md-4 text-center">
            <img class="img-fluid custom-radius" src="img/tomaten.jpg" alt="Cocktail-Tomaten" title="Cocktail-Tomaten">
              <h4 class="mt-4"><strong>Tomate</strong></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 text-center">
            <img class="img-icon custom-radius hover" src="img/basilikum.png" alt="Illustration-Basilikum" title="Illustration-Basilikum">
            </div>
            <div class="col-md-4 text-center">
            <img class="img-icon custom-radius hover" src="img/mozzarella.jpg" alt="Illustration-Mozzarella" title="Illustration-Mozzarella">
            </div>
            <div class="col-md-4 text-center">
            <img class="img-icon custom-radius hover" src="img/tomate.jpg" alt="Illustration-Tomate" title="Illustration-Tomate">
            </div>
          </div>
          </div>
        </div>
</section>

<section id="zitate" class="text-center carousel-container mt-5 mb-1">
  <div class="container pt-4 pb-1">
    <div class="row justify-content-center">
      <div class="col-12">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Zitat-Armando.jpg" class="img-carousel custom-radius mb-3" alt="Armando-Ammirati" title="Armando-Ammirati">
              <h3 class="mb-3">Armando Ammirati</h3>
              <h5 class="mb-3">- einer der beiden Inhaber</h5>
              <p>„Ganz egal, welche Sorte du gerade isst: Du wirst sie lieben.<br> Denn die wichtigste Zutat haben sie alle gemein: <strong>allerhöchsten Anspruch an die Qualität.</strong>“</p>
            </div>
            <div class="carousel-item">
              <img src="img/Zitat-andreas.jpg" class="img-carousel custom-radius mb-3" alt="Andreas Schmid" title="Andreas Schmid">
              <h3 class="mb-3">Andreas Schmid</h3>
              <h5 class="mb-3">- einer der beiden Inhaber</h5>
              <p>„Wir haben nicht geschaut, wie man eine weitere Tiefkühlpizza hinbekommt.<br> Sondern wie man als Erster eine hochwertige <strong>Restaurant-Pizza ohne Qualitätsverlust</strong> <br> zu den Menschen nach Hause bringt.“</p>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span aria-hidden="true"> <img class="img-pfeil" src="img/pfeil-prev.png" alt=""> </span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span aria-hidden="true"><img class="img-pfeil" src="img/pfeil-next.png" alt=""></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container cta d-flex justify-content-center align-items-center mb-5 custom-radius">
    <div class="row">
      <div class="col-12 d-flex justify-content-center align-items-center flex-column">
        <h3 class="text-white mb-5">Hol dir jetzt deine Pizza</h3>
        <button><a class="p-5" href="pizza.php">Click Me!</a></button>
      </div>
    </div>
  </div>
</section>


</main>

<?php include("footer.php") ?>

<?php include("socialmedia.php") ?>

<button onclick="scrollToTop()" id="scrollToTopBtn" title="Nach oben scrollen">Top</button>

<script src="js/bootstrap.min.js"></script>
<script src="js/bacio.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const audioElement = document.getElementById('custom-audio');
    const playButton = document.getElementById('play-button');
    
    playButton.addEventListener('click', function() {
      if (audioElement.paused) {
        audioElement.play();
        playButton.textContent = 'Pause';
      } else {
        audioElement.pause();
        playButton.textContent = 'Play';
      }
    });
  });
</script>

</body>
</html>