<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
  <title>Artikel</title>
</head>
<body>

<header>
<?php include("nav.php") ?>

</header>


<section id="artikel__h1">
                <div class="container mt-5 mb-5">
                      <h1>Artikel</h1>
                </div>
        </section>

        <section id="pizza__beschreibung">
                <div class="container mt-5 mb-5">
                  <div class="row">
                    <div class="col-lg-12 custom-beschreibung">
                    <h2>Unsere Artikel</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehend.</p>
                    <img class="img-fluid custom-radius" src="img/icon-tomate.png" alt="">
                    </div>
                  </div>
                </div>
        </section>

        <section id="artikel__sortiment">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4 text-center d-flex justify-content-start justify-content-md-start justify-content-center">
                        <div id="pizzaMargherita" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog1">
                            <img class="card-img-top custom-radius" src="img/tote-bag.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Tote Bag</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="ProsciuttoFunghi" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog2">
                            <img class="card-img-top custom-radius" src="img/tote-bag.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Tote Bag</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-end justify-content-md-end justify-content-center">
                        <div id="salame" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog3">
                            <img class="card-img-top custom-radius" src="img/tote-bag.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Tote Bag</h5>
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
                        <img class="img-dialog custom-radius" src="img/tote-bag.jpg" alt="">
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
                        <img class="img-dialog custom-radius" src="img/tote-bag.jpg" alt="">
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
                        <img class="img-dialog custom-radius" src="img/tote-bag.jpg" alt="">
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