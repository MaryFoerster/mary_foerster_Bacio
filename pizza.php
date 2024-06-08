<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Unsere Pizzas</title>
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
                        <div id="pizzaMargherita" class="card custom-radius bg-red mt-5 mt-md-1" data-dialog="dialog1">
                            <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-start">Margherita</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="ProsciuttoFunghi" class="card custom-radius bg-red mt-5 mt-md-1" data-dialog="dialog2">
                            <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-start">PROSCIUTTO E FUNGHI</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="salame" class="card custom-radius bg-red mt-5 mt-md-1" data-dialog="dialog3">
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
                        <div id="tonnoCipolla" class="card custom-radius bg-red mt-1 mt-md-1" data-dialog="dialog4">
                            <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-start">TONNO E CIPOLLA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="spinaciRicotta" class="card custom-radius bg-red mt-5 mt-md-1" data-dialog="dialog5">
                            <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-start">SPINACI E RICOTTA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="salamePiccante" class="card custom-radius bg-red mt-5 mt-md-1" data-dialog="dialog6">
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
                        <div id="ananas" class="card custom-radius bg-red mt-1 mt-md-1" data-dialog="dialog7">
                            <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-start">PROSCIUTTO E ANANAS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="quattroFormaggi" class="card custom-radius bg-red mt-5 mt-md-1" data-dialog="dialog8">
                            <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-start">QUATTRO FORMAGGI</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="solo" class="card custom-radius bg-red mt-5 mt-md-1" data-dialog="dialog9">
                            <img class="card-img-top custom-radius" src="img/p-pizzas.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-start">SOLO</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <dialog id="dialog1">
            <div class="dialog-content">
                <span class="close">&times;</span>
                <img src="img/p-pizzas.jpg" style="width: 100%; height: auto;">
                <p>Details zur Pizza Margherita.</p>
            </div>
        </dialog>

        <dialog id="dialog2">
            <div class="container bg-red mt-5 mb-5">
                  <div class="row">
                  <div class="col-lg-6 d-flex justify-content-center">
                  <img class="img-fluid custom-radius" src="img/platzhalter.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                    <span class="close">&times;</span>
                    <h2 class="text-white">Unsere Tiefkühlpizza</h2>
                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                    <h3 class="text-white">8 euro</h3>
                    </div>
                  </div>
                </div>
        </dialog>

        <dialog id="dialog3">
            <div class="dialog-content">
                <span class="close">&times;</span>
                <img src="img/p-pizzas.jpg" style="width: 100%; height: auto;">
                <p>Details zur Pizza SALAME.</p>
            </div>
        </dialog>

        <dialog id="dialog4">
            <div class="dialog-content">
                <span class="close">&times;</span>
                <img src="img/p-pizzas.jpg" style="width: 100%; height: auto;">
                <p>Details zur Pizza TONNO E CIPOLLA.</p>
            </div>
        </dialog>

        <dialog id="dialog5">
            <div class="dialog-content">
                <span class="close">&times;</span>
                <img src="img/p-pizzas.jpg" style="width: 100%; height: auto;">
                <p>Details zur Pizza SPINACI E RICOTTA.</p>
            </div>
        </dialog>

        <dialog id="dialog6">
            <div class="dialog-content">
                <span class="close">&times;</span>
                <img src="img/p-pizzas.jpg" style="width: 100%; height: auto;">
                <p>Details zur Pizza SALAME PICCANTE.</p>
            </div>
        </dialog>

        <dialog id="dialog7">
            <div class="dialog-content">
                <span class="close">&times;</span>
                <img src="img/p-pizzas.jpg" style="width: 100%; height: auto;">
                <p>Details zur Pizza PROSCIUTTO E ANANAS.</p>
            </div>
        </dialog>

        <dialog id="dialog8">
            <div class="dialog-content">
                <span class="close">&times;</span>
                <img src="img/p-pizzas.jpg" style="width: 100%; height: auto;">
                <p>Details zur Pizza QUATTRO FORMAGGI.</p>
            </div>
        </dialog>

        <dialog id="dialog9">
            <div class="dialog-content">
                <span class="close">&times;</span>
                <img src="img/p-pizzas.jpg" style="width: 100%; height: auto;">
                <p>Details zur Pizza SOLO.</p>
            </div>
        </dialog>

  </main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var cards = document.querySelectorAll('.card');
        cards.forEach(function(card) {
            card.addEventListener('click', function() {
                var dialogId = this.getAttribute('data-dialog');
                var dialog = document.getElementById(dialogId);
                dialog.showModal();
            });
        });

        var closeButtons = document.querySelectorAll('.close');
        closeButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var dialog = this.closest('dialog');
                dialog.close();
            });
        });

        var dialogs = document.querySelectorAll('dialog');
        dialogs.forEach(function(dialog) {
            dialog.addEventListener('click', function(event) {
                if (event.target === dialog) {
                    dialog.close();
                }
            });
        });
    });
</script>
</body>
</html>