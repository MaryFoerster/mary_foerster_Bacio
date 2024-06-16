<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
  <title>Artikel</title>
</head>
<body>

<header class="header-artikel">
<?php include("nav.php") ?>

</header>

<section id="artikel__h1">
                <div class="container mt-5 mb-5">
                      <h1>Artikel</h1>
                </div>
        </section>

        <section id="artikel__beschreibung">
                <div class="container mt-5 mb-5">
                  <div class="row">
                    <div class="col-lg-6">
                    <p>Willkommen auf unserer exklusiven Artikel-Seite! Hier findest du eine sorgfältig kuratierte Auswahl an einzigartigen Produkten, die die Leidenschaft und den Charme von Bacio widerspiegeln. Jedes Stück ist mit Liebe zum Detail gestaltet, bietet beste Qualität und besticht durch ein cooles Design.</p>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                    <img class="artikel-img custom-radius" src="img/tomato-big.png" alt="">
                    </div>
                  </div>
                </div>
        </section>

        <section id="artikel__sortiment">
            <div class="container mt-5">
                <div class="row">
                <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-start">
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
                                <h5 class="card-title d-flex justify-content-center">Bacio Pizza Teller</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="salame" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog3">
                            <img class="card-img-top custom-radius" src="img/apron.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Kochschürze</h5>
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
                        <h2>Tote Bag</h2>
                        <p>Trage ein Stück "Bacio" immer bei dir! Unsere Tote Bag mit exklusivem, künstlerischem Design ist nicht nur praktisch, sondern auch ein echter Hingucker. Gefertigt aus strapazierfähiger Baumwolle, ist sie perfekt für den täglichen Gebrauch.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Pflegehinweis: Waschbar bei 30°C, nicht bleichen, bügeln bei niedriger Temperatur<br>
                        Hergestellt mit umweltfreundlichen Druckfarben</p>
                        <h3 class="d-flex justify-content-end">10 euro</h3>
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
                        <h2>Bacio Pizza Teller</h2>
                        <p>Genieße deine Lieblingspizza stilvoll auf unserem exklusiven Bacio Pizza Teller! Mit einem kreativen, handgezeichneten Design, das die Liebe und Leidenschaft für Pizza widerspiegelt, wird jede Mahlzeit zu einem besonderen Erlebnis.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <p>Hergestellt aus hochwertiger Keramik, ist der Teller robust, langlebig sowie spülmaschinen- und mikrowellengeeignet.</p>
                        <h3 class="d-flex justify-content-end">15 euro</h3>
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
                        <img class="img-dialog custom-radius" src="img/apron.jpg" alt="">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Kochschürze</h2>
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

<section>
  <div class="container custom-radius mt-3">
    <div class="row">
      <div class="col-12">
        <img class="img-fluid custom-radius" src="img/header-artikel.jpg" alt="">
      </div>
    </div>
  </div>
</section>


  </main>

 <?php include("footer.php") ?>

 <button onclick="scrollToTop()" id="scrollToTopBtn" title="Nach oben scrollen">Top</button>


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

<script>
  // Hole den Button
let scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Zeige den Button, wenn der Nutzer bis zur Hälfte der Seite scrollt
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > window.innerHeight / 2 || document.documentElement.scrollTop > window.innerHeight / 2) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

// Scrollt die Seite nach oben, wenn der Button geklickt wird
function scrollToTop() {
    document.body.scrollTop = 0; // Für Safari
    document.documentElement.scrollTop = 0; // Für Chrome, Firefox, IE und Opera
}
</script>
</body>
</html>