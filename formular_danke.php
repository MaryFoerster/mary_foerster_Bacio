<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'src/PHPMailer/Exception.php';
require 'src/PHPMailer/PHPMailer.php';
require 'src/PHPMailer/SMTP.php';
?><!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
  <title>Kontakt</title>
</head>
<body>

<header class="danke-header">
<?php include("nav.php") ?>
</header>

<main>
<div class="container danke mt-5 mb-5">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-md-6 d-flex justify-content-center align-items-center text-center text-md-left">
            <?php
            if (isset($_POST['submit'])) {
                $vorname = $_POST['vorname'];
                $nachname = $_POST['nachname'];
                $nachricht = $_POST['nachricht'];
                $email = $_POST['email'];

                $mail = new PHPMailer(true);

                $mail->CharSet = 'utf-8';
                $mail->setLanguage('de');
                $mail->isSMTP();
                $mail->Host = "securemail-wda-innsbruck-at.prossl.de";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Port = 587;
                $mail->Username = "wiastud-newsletter";
                $mail->Password = "45YerkaidaAsaef5Kiap";
                $mail->From = "stud-newsletter@wda-innsbruck.at";
                $mail->FromName = "Mary-Fo";
                $mail->addAddress('lizm4572@gmail.com', "Mary Förster");
                $mail->isHTML(true);
                $mail->Subject = "Pizza Bacio";
                $mail->addCC('lisamari9500@gmail.com', "Mary Förster");
                $mail->addEmbeddedImage('img/tomate-email.png', 'tomate');
                $mail->addEmbeddedImage('img/bacio-logo-email.png', 'logo');
                $mail->Body = "
                <div>
                    <img style='width: 8rem;' src='cid:logo' alt='logo'>
                    <p style='color: #E81B00;'><strong>Nachricht von:</strong> <span style='color: #E81B00;'><strong>" . $vorname . "</strong> <strong>" . $nachname . "</strong></span></p>
                    <p style='color: #E81B00;'><strong>E-Mail:</strong> <span style='color: #E81B00;'>" . $email . "</span></p>
                    <p style='color: #E81B00;'><strong>Der DSGVO wurde zugestimmt!</strong></p>
                    <p style='color: #E81B00;'><strong>Nachricht:</strong></p>
                    <p>" . $nachricht . "</p>
                    <br>
                    <p>Vielen Dank <span style='font-weight: bold; color: #E81B00;'>" . $vorname . "</span> für deine Nachricht,</p>
                    <p>wir melden uns bei dir!</p>
                    <p style='color: #E81B00;'><strong>LG, das Bacio Team</strong></p>
                    <img style='width: 6rem;' src='cid:tomate' alt='tomate'>
                </div>";

                try {
                    $mail->send();
                    echo '<div role="alert"><h1>Danke ' . $vorname . '</h1><br>
                    <h2>Wir melden uns bei dir!</h2></div>';
                } catch (Exception $ex) {
                    echo '<div role="alert"><h1>Entschuldige! Es ist ein Fehler aufgetreten:</h1> ' . $mail->ErrorInfo . ' <button><a class="text-red" href="kontakt.php">Zurück</a></button></div>';
                }
            }
            ?>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img class="img-danke" src="img/location.png" alt="">
        </div>
    </div>
</div>


<?php include("footer.php") ?>

<?php include("socialmedia.php") ?>

<button onclick="scrollToTop()" id="scrollToTopBtn" title="Nach oben scrollen">Top</button>

<script src="js/bootstrap.min.js"></script>
<script src="js/bacio.js"></script>
</body>
</html>