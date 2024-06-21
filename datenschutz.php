<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
  <title>Datenschutz</title>
</head>
<body>

<header>
<?php include("nav.php") ?>

</header>


<main>

<section>
        <div class="container mt-5 mb-5">
          <div class="row p-4">
            <div class="col-lg-6">
            <h2>Beschreibung</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehenderit dolorum quam unde. Fuga ex, adipisci architecto, laudantium deleniti nobis accusantium iure animi laboriosam minus praesentium eaque labore eligendi dolorem eum dolores porro blanditiis nam, totam autem delectus perspiciatis. Placeat quas repellendus odio iusto autem quia deserunt totam voluptatem.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehenderit dolorum quam unde. Fuga ex, adipisci architecto, laudantium deleniti nobis accusantium iure animi laboriosam minus praesentium eaque labore eligendi dolorem eum dolores porro blanditiis nam, totam autem delectus perspiciatis. Placeat quas repellendus odio iusto autem quia deserunt totam voluptatem.</p>
            </div>
          </div>
          <div class="row p-4">
            <div class="col-lg-6">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehenderit dolorum quam unde. Fuga ex, adipisci architecto, laudantium deleniti nobis accusantium iure animi laboriosam minus praesentium eaque labore eligendi dolorem eum dolores porro blanditiis nam, totam autem delectus perspiciatis. Placeat quas repellendus odio iusto autem quia deserunt totam voluptatem.</p>
            </div>
            <div class="col-lg-6">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium libero impedit enim asperiores sunt maxime tenetur eius fuga corrupti odit dolor quas delectus ut molestias ex, est rerum incidunt consequatur earum dignissimos reprehenderit dolorum quam unde. Fuga ex, adipisci architecto, laudantium deleniti nobis accusantium iure animi laboriosam minus praesentium eaque labore eligendi dolorem eum dolores porro blanditiis nam, totam autem delectus perspiciatis. Placeat quas repellendus odio iusto autem quia deserunt totam voluptatem.</p>
            </div>
          </div>
        </div>
</section>

</main>

<?php include("footer.php") ?>

<button onclick="scrollToTop()" id="scrollToTopBtn" title="Nach oben scrollen">Top</button>

<script src="js/bootstrap.min.js"></script>
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