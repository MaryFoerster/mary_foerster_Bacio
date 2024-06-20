<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
  <title>Unsere Pizzas</title>
</head>
<body>
<header class="header-pizza">
<?php include("nav.php") ?>
</header>
  <main>

        <section id="pizza__h1">
                <div class="container mt-5">
                      <h1>Pizza !</h1>
                </div>
        </section>

        <section id="pizza__beschreibung">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6">
                    <h2> Tiefkühlpizza-Pizza in Handarbeit</h2>
                    <p>
                        Mag verrückt klingen, aber bei Pizza BACIO breitet man jeden einzelnen Teig tatsächlich schonend von Hand aus. Eben das macht diese Pizza so authentisch und knusprig. Keine Maschinen also, die den Teig ausrollen und belegen, es stehen Menschen dahinter.</p>
                    <img class="img-fluid custom-radius" src="img/icon-tomate.png" alt="">
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                    <img class="img-fluid" src="img/pizza-macher.jpg" alt="">
                    </div>
                  </div>
                </div>
        </section>

        <section id="pizza__h2">
          <div>
                <div class="container mt-4">
                      <h2>Unser Menu</h2>
                </div>
          </div>
        </section>

        <section id="pizza__sortiment" class="bg-sortiment pt-1 pb-5">
            <div class="container">
                <div class="row">
                <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-start">
                        <div id="pizzaMargherita" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog1">
                            <img class="card-img-top custom-radius" src="img/pizza1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Margherita</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="ProsciuttoFunghi" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog2">
                            <img class="card-img-top custom-radius" src="img/pizza2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">PROSCIUTTO E FUNGHI</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="salame" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog3">
                            <img class="card-img-top custom-radius" src="img/pizza3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">SALAME</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-start">
                        <div id="tonnoCipolla" class="card custom-radius mt-1 mt-md-1" data-dialog="dialog4">
                            <img class="card-img-top custom-radius" src="img/pizza4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">TONNO E CIPOLLA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="spinaciRicotta" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog5">
                            <img class="card-img-top custom-radius" src="img/pizza5.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">SPINACI E RICOTTA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="salamePiccante" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog6">
                            <img class="card-img-top custom-radius" src="img/pizza6.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">SALAME PICCANTE</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-start">
                        <div id="ananas" class="card custom-radius mt-1 mt-md-1" data-dialog="dialog7">
                            <img class="card-img-top custom-radius" src="img/pizza7.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">PROSCIUTTO E ANANAS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="quattroFormaggi" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog8">
                            <img class="card-img-top custom-radius" src="img/pizza8.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">QUATTRO FORMAGGI</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="solo" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog9">
                            <img class="card-img-top custom-radius" src="img/pizza2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">SOLO</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <dialog id="dialog1">
            <div class="container mt-5 mb-5">
                <div class="row p-3 d-flex justify-content-center">
                    <div class="col-xxl-5 col-lg-6 d-flex justify-content-center">
                        <img class="img-dialog custom-radius" src="img/pizza.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Unsere Tiefkühlpizza</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                        <h3 class="d-flex justify-content-end">8 euro</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>

        <dialog id="dialog2">
            <div class="container mt-5 mb-5">
                <div class="row p-3 d-flex justify-content-center">
                    <div class="col-xxl-5 col-lg-6 d-flex justify-content-center">
                        <img class="img-dialog custom-radius" src="img/pizza.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Unsere Tiefkühlpizza</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                        <h3 class="d-flex justify-content-end">8 euro</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>

        <dialog id="dialog3">
            <div class="container mt-5 mb-5">
                <div class="row p-3 d-flex justify-content-center">
                    <div class="col-xxl-5 col-lg-6 d-flex justify-content-center">
                        <img class="img-dialog custom-radius" src="img/pizza.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Unsere Tiefkühlpizza</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                        <h3 class="d-flex justify-content-end">8 euro</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>

        <dialog id="dialog4">
            <div class="container mt-5 mb-5">
                <div class="row p-3 d-flex justify-content-center">
                    <div class="col-xxl-5 col-lg-6 d-flex justify-content-center">
                        <img class="img-dialog custom-radius" src="img/pizza.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Unsere Tiefkühlpizza</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                        <h3 class="d-flex justify-content-end">8 euro</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>

        <dialog id="dialog5">
            <div class="container mt-5 mb-5">
                <div class="row p-3 d-flex justify-content-center">
                    <div class="col-xxl-5 col-lg-6 d-flex justify-content-center">
                        <img class="img-dialog custom-radius" src="img/pizza.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Unsere Tiefkühlpizza</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                        <h3 class="d-flex justify-content-end">8 euro</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>

        <dialog id="dialog6">
            <div class="container mt-5 mb-5">
                <div class="row p-3 d-flex justify-content-center">
                    <div class="col-xxl-5 col-lg-6 d-flex justify-content-center">
                        <img class="img-dialog custom-radius" src="img/pizza.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Unsere Tiefkühlpizza</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                        <h3 class="d-flex justify-content-end">8 euro</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>

        <dialog id="dialog7">
            <div class="container mt-5 mb-5">
                <div class="row p-3 d-flex justify-content-center">
                    <div class="col-xxl-5 col-lg-6 d-flex justify-content-center">
                        <img class="img-dialog custom-radius" src="img/pizza.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Unsere Tiefkühlpizza</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                        <h3 class="d-flex justify-content-end">8 euro</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>

        <dialog id="dialog8">
            <div class="container mt-5 mb-5">
                <div class="row p-3 d-flex justify-content-center">
                    <div class="col-xxl-5 col-lg-6 d-flex justify-content-center">
                        <img class="img-dialog custom-radius" src="img/pizza.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Unsere Tiefkühlpizza</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                        <h3 class="d-flex justify-content-end">8 euro</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>

        <dialog id="dialog9">
            <div class="container mt-5 mb-5">
                <div class="row p-3 d-flex justify-content-center">
                    <div class="col-xxl-5 col-lg-6 d-flex justify-content-center">
                        <img class="img-dialog custom-radius" src="img/pizza.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Unsere Tiefkühlpizza</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim</p>
                        <h3 class="d-flex justify-content-end">8 euro</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>






  </main>

 <?php include("footer.php") ?>

<script src="js/bootstrap.min.js"></script>

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