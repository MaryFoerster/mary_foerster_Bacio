<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>BACIO</title>
</head>
<body>

<header>





</header>


<main>


<section id="pizza__h1">
        <div class="container mt-5 mb-5">
              <h1>Pizza !</h1>
        </div>
</section>


<section id="pizza__beschreibung">
        <div class="container mt-5 mb-5">
          <div class="row">
            <div class="col-lg-6">
            <h2>Unsere Tiefkühlpizza</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehend.</p>
            <img class="img-fluid custom-radius" src="img/icon-tomate.png" alt="">
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
           <img class="img-fluid custom-radius" src="img/platzhalter.jpg" alt="">
            </div>
          </div>
        </div>
</section>


<section id="pizza__h2">
  <div class="bg-red">
        <div class="container p-4">
              <h2 class="text-white">Unser Sortiment</h2>
        </div>
  </div>
</section>

<section id="pizza__sortiment">
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div id="pizzaMargherita" class="card custom-radius bg-red mt-5 mt-md-1">
                <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title d-flex justify-content-start">Margherita</h5>
                </div>
              </div>
            </div>
       
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div id="ProsciuttoFunghi" class="card custom-radius bg-red mt-5 mt-md-1">
              <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title d-flex justify-content-start">PROSCIUTTO E FUNGHI</h5>
              </div>
            </div>
            </div>
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div id="salame" class="card custom-radius bg-red mt-5 mt-md-1">
              <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title d-flex justify-content-start">SALAME</h5>
              </div>
            </div>
            </div>
          </div>
        </div>
  <div class="container mt-5">
          <div class="row">
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div id="tonnoCipolla" class="card custom-radius bg-red mt-1 mt-md-1">
                <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title d-flex justify-content-start">TONNO E CIPOLLA</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div id="spinaciRicotta" class="card custom-radius bg-red mt-5 mt-md-1">
              <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title d-flex justify-content-start">SPINACI E RICOTTA</h5>
              </div>
            </div>
            </div>
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div id="salamePiccante" class="card custom-radius bg-red mt-5 mt-md-1">
              <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title d-flex justify-content-start">SALAME PICCANTE</h5>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div id="ananas" class="card custom-radius bg-red mt-1 mt-md-1">
                <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title d-flex justify-content-start">PROSCIUTTO E ANANAS</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div id="quattroFormaggi" class="card custom-radius bg-red mt-5 mt-md-1">
              <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title d-flex justify-content-start">QUATTRO FORMAGGI</h5>
              </div>
            </div>
            </div>
            <div class="col-md-4 text-center d-flex justify-content-center">
            <div id="solo" class="card custom-radius bg-red mt-5 mt-md-1">
              <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title d-flex justify-content-start">SOLO</h5>
              </div>
            </div>
            </div>
          </div>
        </div>
</section>


       <!-- Modal -->
       <div class="modal fade" id="pizzaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Pizza Margherita</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- Hier kommen die Details zur Pizza Margherita rein -->
                      <p>Leckere Pizza Margherita mit frischen Tomaten, Mozzarella und Basilikum.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
                    </div>
                  </div>
                </div>
              </div>




</main>
  
<footer>




</footer>

<script>
  document.getElementById('pizzaMargherita').addEventListener('click', function () {
    $('#pizzaModal').modal('show');
  });
</script>
</body>
</html>