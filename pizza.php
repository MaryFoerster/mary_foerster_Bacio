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
                            <img class="card-img-top custom-radius" src="img/margherita.jpg" alt="pizza-margherita" title="pizza-margherita">
                            <div class="card-body">
                                <h4 class="h5-card d-flex justify-content-center ">Margherita</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="ProsciuttoFunghi" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog2">
                            <img class="card-img-top custom-radius" src="img/prosciutto-funghi.jpg" alt="pizza-prosciutto-funghi" title="pizza-prosciutto-funghi">
                            <div class="card-body">
                                <h4 class="h5-card d-flex justify-content-center">Prosciutto e Funghi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="salame" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog3">
                            <img class="card-img-top custom-radius" src="img/salame.jpg" alt="pizza-salame" title="pizza-salame">
                            <div class="card-body">
                                <h5 class="h5-card d-flex justify-content-center">Salame</h5>
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
                                <h5 class="h5-card d-flex justify-content-center">Tonno e Cipolla</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="spinaciRicotta" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog5">
                            <img class="card-img-top custom-radius" src="img/spinaci-ricotta.jpg" alt="pizza-spinaci-ricotta" title="pizza-spinaci-ricotta">
                            <div class="card-body">
                                <h5 class="h5-card d-flex justify-content-center">Spinaci e Ricotta</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="salamePiccante" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog6">
                            <img class="card-img-top custom-radius" src="img/salame-piccante.jpg" alt="pizza-salame-piccante" title="pizza-salame-piccante">
                            <div class="card-body">
                                <h5 class="h5-card d-flex justify-content-center">Salame Piccante</h5>
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
                                <h5 class="h5-card d-flex justify-content-center">Prosciutto e Ananas</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div id="quattroFormaggi" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog8">
                            <img class="card-img-top custom-radius" src="img/quattro-formaggi.jpg" alt="pizza-quattro-formaggi" title="pizza-quattro-formaggi">
                            <div class="card-body">
                                <h5 class="h5-card d-flex justify-content-center">Quattro Formaggi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center justify-content-md-center justify-content-lg-end">
                        <div id="solo" class="card custom-radius mt-5 mt-md-1" data-dialog="dialog9">
                            <img class="card-img-top custom-radius" src="img/margherita.jpg" alt="pizza-solo" title="pizza-solo">
                            <div class="card-body">
                                <h5 class="h5-card d-flex justify-content-center">Solo</h5>
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
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
                        <button>in den Einkaufswagen</button>
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
                        <img class="img-dialog custom-radius" src="img/prosciutto-funghi.jpg" alt="pizza-prosciutto-funghi" title="pizza-prosciutto-funghi">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Prosciutto e Funghi</h2>
                        <p>Die Mutter aller Pizzen. Knusprig dünner Teig, sonnengereifte Tomaten und feinster Mozzarella. Kein anderer Käse zerläuft so gleichmäßig, kein anderer bringt die leckeren Pizza-Aromen so gut zur Geltung.</p>
                        <img class="dialog-icon img-fluid custom-radius " src="img/icon-tomate.png" alt="">
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
                        <img class="img-dialog custom-radius" src="img/salame.jpg" alt="pizza-salame" title="pizza-salame">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Salame</h2>
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
                        <img class="img-dialog custom-radius" src="img/tonno-cipolla.jpg" alt="pizza-tonno-cipolla" title="pizza-tonno-cipolla">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Tonno e Cipolla</h2>
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
                        <img class="img-dialog custom-radius" src="img/spinaci-ricotta.jpg" alt="pizza-spinaci-ricotta" title="pizza-spinaci-ricotta">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Spinaci e Ricotta</h2>
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
                        <img class="img-dialog custom-radius" src="img/salame-piccante.jpg" alt="pizza-salame-piccante" title="pizza-salame-piccante">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Salame Piccante</h2>
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
                        <img class="img-dialog custom-radius" src="img/prosciutto-ananas.jpg" alt="pizza-prosciutto-ananas" title="pizza-prosciutto-ananas">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Prosciutto e Ananas</h2>
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
                        <img class="img-dialog custom-radius" src="img/quattro-formaggi.jpg" alt="pizza-quattro-formaggi" title="pizza-quattro-formaggi">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Quattro Formaggi</h2>
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
                        <img class="img-dialog custom-radius" src="img/margherita.jpg" alt="pizza-solo" title="pizza-solo">
                    </div>
                    <div class="col-xxl-6 col-lg-5 d-flex flex-column justify-content-center align-content-center">
                        <span class="close">&times;</span>
                        <h2>Solo</h2>
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

 <div class="social-media-icons">
        <a href="https://www.facebook.com" target="_blank" class="icon facebook"><img class="img-footer" src="img/Facebook.png" alt=""></a>
        <a href="https://www.instagram.com" target="_blank" class="icon instagram"><img class="img-footer" src="img/Instagram.png" alt=""></a>
</div>

 <button onclick="scrollToTop()" id="scrollToTopBtn" title="Nach oben scrollen">Top</button>

 
<script src="js/bootstrap.min.js"></script>
<script src="js/bacio.js"></script>

</body>
</html>