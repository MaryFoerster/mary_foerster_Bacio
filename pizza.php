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
                    <img class="img-fluid custom-radius" src="img/icon-tomate.jpg" alt="icon-tomate" title="icon-tomate">
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                    <img class="img-fluid" src="img/pizza-macher.jpg" alt="pizza-macher" title="pizza-macher">
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
                            <img class="card-img-top custom-radius" src="img/margherita.jpg" alt="pizza-margherita" title="pizza-margherita">
                            <div class="card-body">
                                <h3 class="h5-card d-flex justify-content-center ">Margherita</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="ProsciuttoFunghi" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog2">
                            <img class="card-img-top custom-radius" src="img/prosciutto-funghi.jpg" alt="pizza-prosciutto-funghi" title="pizza-prosciutto-funghi">
                            <div class="card-body">
                                <h3 class="h5-card d-flex justify-content-center">Prosciutto e Funghi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="salame" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog3">
                            <img class="card-img-top custom-radius" src="img/salame.jpg" alt="pizza-salame" title="pizza-salame">
                            <div class="card-body">
                                <h3 class="h5-card d-flex justify-content-center">Salame</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-start">
                        <div id="tonnoCipolla" class="card custom-radius mt-1 mt-md-1" data-dialog="dialog4">
                            <img class="card-img-top custom-radius" src="img/tonno-cipolla.jpg" alt="pizza-tonno-cipolla" title="pizza-tonno-cipolla">
                            <div class="card-body">
                                <h3 class="h5-card d-flex justify-content-center">Tonno e Cipolla</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="spinaciRicotta" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog5">
                            <img class="card-img-top custom-radius" src="img/spinaci-ricotta.jpg" alt="pizza-spinaci-ricotta" title="pizza-spinaci-ricotta">
                            <div class="card-body">
                                <h3 class="h5-card d-flex justify-content-center">Spinaci e Ricotta</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="salamePiccante" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog6">
                            <img class="card-img-top custom-radius" src="img/salame-piccante.jpg" alt="pizza-salame-piccante" title="pizza-salame-piccante">
                            <div class="card-body">
                                <h3 class="h5-card d-flex justify-content-center">Salame Piccante</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-start">
                        <div id="ananas" class="card custom-radius mt-1 mt-md-1" data-dialog="dialog7">
                            <img class="card-img-top custom-radius" src="img/prosciutto-ananas.jpg" alt="pizza-prosciutto-ananas" title="pizza-prosciutto-ananas">
                            <div class="card-body">
                                <h3 class="h5-card d-flex justify-content-center">Prosciutto e Ananas</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="quattroFormaggi" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog8">
                            <img class="card-img-top custom-radius" src="img/quattro-formaggi.jpg" alt="pizza-quattro-formaggi" title="pizza-quattro-formaggi">
                            <div class="card-body">
                                <h3 class="h5-card d-flex justify-content-center">Quattro Formaggi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="solo" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog9">
                            <img class="card-img-top custom-radius" src="img/margherita.jpg" alt="pizza-solo" title="pizza-solo">
                            <div class="card-body">
                                <h3 class="h5-card d-flex justify-content-center">Solo</h3>
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
                    <img class="img-dialog custom-radius" src="img/margherita.jpg" alt="pizza-margherita" title="pizza-margherita">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Margherita</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.jpg" alt="">
                        <div class="warenkorb" data-product-id="1">
                            <p>+ Warenkorb</p>
                        </div>
                        <div id="notification" class="notification">
                            Artikel wurde zum Warenkorb hinzugefügt!
                        </div>
                        <h3 class="d-flex justify-content-end">€ 6,-</h3>
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
                        <img class="img-dialog custom-radius" src="img/prosciutto-funghi.jpg" alt="pizza-prosciutto-funghi" title="pizza-prosciutto-funghi">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Prosciutto e Funghi</h2>
                        <p>Pilze aus der Dose kommen uns nicht in die Tüte. Wir verwenden für unsere Pizza nur frische Champignons. Und auch unser Hinterschinken spielt in Sachen Geschmack ganz vorne mit.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.jpg" alt="">
                        <div class="warenkorb" id="warenkorb">
                            <p>+ Warenkorb</p>
                        </div>
                        <div id="notification" class="notification">
                            Artikel wurde zum Warenkorb hinzugefügt!
                        </div>
                        <h3 class="d-flex justify-content-end">€ 6,-</h3>
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
                        <img class="img-dialog custom-radius" src="img/salame.jpg" alt="pizza-salame" title="pizza-salame">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Salame</h2>
                        <p>Hier geht’s um die Wurst. Denn was diese TK-Pizza so köstlich macht, ist unsere edle, 100% reine Rindersalami. Schmeckt unglaublich intensiv und auch ganz besonders denjenigen, die keine Salami vom Schwein essen mögen.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.jpg" alt="">
                        <div class="warenkorb" id="warenkorb">
                            <p>+ Warenkorb</p>
                        </div>
                        <div id="notification" class="notification">
                            Artikel wurde zum Warenkorb hinzugefügt!
                        </div>
                        <h3 class="d-flex justify-content-end">€ 6,-</h3>
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
                        <img class="img-dialog custom-radius" src="img/tonno-cipolla.jpg" alt="pizza-tonno-cipolla" title="pizza-tonno-cipolla">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Tonno e Cipolla</h2>
                        <p>Diese Sorte schmeckt auch dem Gewissen. Denn unser Thunfisch wird auf den Malediven einzeln von Hand geangelt. Ganz ohne Beifang und Überfischung. Nachhaltiger kann Genuss nicht sein.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.jpg" alt="">
                        <div class="warenkorb" id="warenkorb">
                            <p>+ Warenkorb</p>
                        </div>
                        <div id="notification" class="notification">
                            Artikel wurde zum Warenkorb hinzugefügt!
                        </div>
                        <h3 class="d-flex justify-content-end">€ 6,-</h3>
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
                        <img class="img-dialog custom-radius" src="img/spinaci-ricotta.jpg" alt="pizza-spinaci-ricotta" title="pizza-spinaci-ricotta">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Spinaci e Ricotta</h2>
                        <p>Du willst vegetarisch? Probier mal vegetastisch! Diese Pizza kommt mit frischem Ricotta und Babyspinat in ganzen Blättern. Noch ganz neu – und jetzt schon unser Evergreen.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.jpg" alt="">
                        <div class="warenkorb" id="warenkorb">
                            <p>+ Warenkorb</p>
                        </div>
                        <div id="notification" class="notification">
                            Artikel wurde zum Warenkorb hinzugefügt!
                        </div>
                        <h3 class="d-flex justify-content-end">€ 6,-</h3>
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
                        <img class="img-dialog custom-radius" src="img/salame-piccante.jpg" alt="pizza-salame-piccante" title="pizza-salame-piccante">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Salame Piccante</h2>
                        <p>Spice to meet you! Unsere Sorte mit würziger Rindersalami und milder Peperoni freut sich auf deine Pikantschaft. Ein feuriger Genuss mit ordentlich Geschmackes!</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.jpg" alt="">
                        <div class="warenkorb" id="warenkorb">
                            <p>+ Warenkorb</p>
                        </div>
                        <div id="notification" class="notification">
                            Artikel wurde zum Warenkorb hinzugefügt!
                        </div>
                        <h3 class="d-flex justify-content-end">€ 6,-</h3>
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
                        <img class="img-dialog custom-radius" src="img/prosciutto-ananas.jpg" alt="pizza-prosciutto-ananas" title="pizza-prosciutto-ananas">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Prosciutto e Ananas</h2>
                        <p>Unsere Arbeit trägt Früchte, wie man an dieser sensationellen Pizza gut sehen kann. Und wenn du jetzt sagst: Obst auf einer Pizza?! Dann sagen wir: Musst du nicht mögen. Wirst du aber lieben!</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.jpg" alt="">
                        <div class="warenkorb" id="warenkorb">
                            <p>+ Warenkorb</p>
                        </div>
                        <div id="notification" class="notification">
                            Artikel wurde zum Warenkorb hinzugefügt!
                        </div>
                        <h3 class="d-flex justify-content-end">€ 6,-</h3>
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
                        <img class="img-dialog custom-radius" src="img/quattro-formaggi.jpg" alt="pizza-quattro-formaggi" title="pizza-quattro-formaggi">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Quattro Formaggi</h2>
                        <p>Jetzt gibt’s was auf die Kauleiste. Denn diese dampfhammermäßige Mischung aus Mozzarella, Bergkäse, Cheddar und Blauschimmelkäse wird dich einfach umhauen. Faust drauf!</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.jpg" alt="">
                        <div class="warenkorb" id="warenkorb">
                            <p>+ Warenkorb</p>
                        </div>
                        <div id="notification" class="notification">
                            Artikel wurde zum Warenkorb hinzugefügt!
                        </div>
                        <h3 class="d-flex justify-content-end">€ 6,-</h3>
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
                        <img class="img-dialog custom-radius" src="img/margherita.jpg" alt="pizza-solo" title="pizza-solo">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Solo</h2>
                        <p>Wir können nicht belegen, dass unsere Pizza die beste der Welt ist. Aber du kannst sie belegen. Mit was immer du willst: mit Gemüse, Fisch, Fleisch,... und mit allem was die sonst noch so in den Geschmackssinn kommt. Unsere Basis mit „nur“ Tomatensauce schmeckt absolut pizzenmäßig, aber mit deiner Unterstützung wird sie sicher noch viel besser. Mach die Beste draus!</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.jpg" alt="">
                        <div class="warenkorb" id="warenkorb">
                            <p>+ Warenkorb</p>
                        </div>
                        <div id="notification" class="notification">
                            Artikel wurde zum Warenkorb hinzugefügt!
                        </div>
                        <h3 class="d-flex justify-content-end">€ 6,-</h3>
                    </div>
                    <div class="col-xxl-1 col-lg-1 d-flex flex-column justify-content-center align-content-center">
                    </div>
                </div>
            </div>
        </dialog>

<section class="bg-packaging-2 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center align-items-center flex-column">
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
    document.addEventListener('DOMContentLoaded', () => {
    const warenkorbButtons = document.querySelectorAll(".warenkorb");
    warenkorbButtons.forEach(button => {
        button.addEventListener("click", () => {
            const notification = button.nextElementSibling;
            notification.classList.add("show");
            setTimeout(() => {
                notification.classList.remove("show");
            }, 3000);
        });
    });
});

</script>

</body>
</html>