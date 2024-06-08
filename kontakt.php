<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Kontakt</title>
</head>
<body>

<header>
<?php include("nav.php") ?>

</header>


<main>

<section id="kontakt__beschreibung">
        <div class="container mt-5 mb-5">
          <div class="row p-4">
            <div class="col-lg-6">
            <h1>Kontakt</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehenderit dolorum quam unde. Fuga ex, adipisci architecto, laudantium deleniti nobis accusantium iure animi laboriosam minus praesentium eaque labore eligendi dolorem eum dolores porro blanditiis nam, totam autem delectus perspiciatis. Placeat quas repellendus odio iusto autem quia deserunt totam voluptatem.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
           <img class="img-fluid custom-radius" src="img/platzhalter.jpg" alt="">
            </div>
          </div>
        </div>
</section>

<section id="kontaktformular">
        <div class="container custom-radius bg-red mt-5 mb-5">
        <form>
          <div class="row p-4">
            <div class="col-lg-6">
            <div class="form-custom">
            <label class="form-label" for="textAreaExample"><p class="text-white">Name</p></label>
                  <input type="text" class="form-custom" id="name" name="name"/>
                </div>
                <div class="form-custom">
                <label class="form-label" for="textAreaExample"><p class="text-white">e-mail</p></label>
                  <input type="email" class="form-custom" id="email1" name="email"/>
                </div>
            </div>
            <div class="col-lg-6">
            <div data-mdb-input-init class="form-outline">
            <label class="form-label" for="textAreaExample"><p class="text-white">Nachricht</p></label>
              <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
              <div class="form-custom pt-2">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                  <label class="form-check-label text-red" for="exampleCheck1"><p class="text-white">Ich akzeptiere die Nutzungsbedingungen</p></label>
                </div>
            </div>
          </div>
          <div class="row p-4">
            <div class="col-lg-12">
            <div class="form-custom d-flex justify-content-end">
                  <button type="submit" class="btn-form">Senden</button>
                </div>
            </div>
          </div>
        </form>
        </div>
</section>








<section id="google__maps">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
            <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.3455663838236!2d11.391373676373934!3d47.268498971160845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479d6bfbbf0942dd%3A0x77d4de38076e6d24!2sAltstadt%20Innsbruck!5e0!3m2!1sde!2sat!4v1717872586145!5m2!1sde!2sat" width="95%" height="200" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
</section>

</main>

<?php include("footer.php") ?>

<script src="js/bootstrap.min.js"></script>
</body>
</html>