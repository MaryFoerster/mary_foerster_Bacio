<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer/Exception.php';
require 'src/PHPMailer/PHPMailer.php';
require 'src/PHPMailer/SMTP.php';

        $images = ["img/pizza.jpg" , "img/pizza.jpg", "img/pizza.jpg", "img/pizza.jpg", "img/pizza.jpg", "img/pizza.jpg", "img/pizza.jpg", "img/pizza.jpg", "img/pizza.jpg", "img/apron.jpg", "img/apron.jpg", "img/apron.jpg"];
        $artikel = ["Margherita", "PROSCIUTTO E FUNGHI", "SALAME", "TONNO E CIPOLLA", "SPINACI E RICOTTA", "SALAME PICCANTE","PROSCIUTTO E ANANAS", "QUATTRO FORMAGGI", "SOLO", "Umhängetasche", "Pizza Teller", "Kochschürze"];
        $preis = [08.00, 08.00, 08.00, 08.00, 08.00, 08.00, 08.00, 08.00, 08.00, 08.00, 10.00, 15.00, 16.00];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {


    foreach ($_POST['artikelanzahl'] as $index => $anzahl) {
        if ($anzahl > 0) {
            $artikelName = $artikel[$index];
            $artikelimages = $images[$index];
            $artikelpreis = $preis[$index];
           $ausgewaehlteArtikelHtml .= $artikelimages . $artikelName . " - Menge: " . $anzahl . " - Preis Einzeln: " . $artikelpreis . " " . "€" . "<br>" . "<br>";
            $vorname = htmlspecialchars($_POST['vorname']);
            $nachname = htmlspecialchars($_POST['nachname']);
            $email = htmlspecialchars($_POST['email']);
            $strasse = htmlspecialchars($_POST['strasse']);
            $hausnummer = htmlspecialchars($_POST['hausnummer']);
            $ort = htmlspecialchars($_POST['ort']);
            $plz = htmlspecialchars($_POST['plz']);
            $nachricht = htmlspecialchars($_POST['nachricht']);
            $gesamtsumme = htmlspecialchars($_POST['gesamtsumme']);
            $versandoption = htmlspecialchars($_POST['versandoption']);
            $versandtext = $versandoption === 'liefern' ? 'Lieferung' : 'Im Geschäft abholen';

        }
    }

    try {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->setLanguage('de');
        $mail->isSMTP();
        $mail->Host = "securemail-wda-innsbruck-at.prossl.de";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Username = "wiastud-newsletter";
        $mail->Password = "45YerkaidaAsaef5Kiap";
        $mail->setFrom("stud-newsletter@wda-innsbruck.at", "Eco Style");
        $mail->addAddress('lizm4572@gmail.com', "Mary Förster");
        $mail->addCC('lisamari9500@gmail.com', "Mary Förster");
        $mail->isHTML(true);
        $mail->Subject = "Bestellbestätigung";
        $mail->Body    = "<h2>Bestellung von:</h2>" . $vorname . " " . $nachname . "<br>"
                        . "Der DSGVO wurde zugestimmt!" . "<br>"
                        . "<h4>Adresse:</h4>"
                        . "Straße: " . $strasse
                        . "<br>" 
                        . "Nr: " . $hausnummer
                        . "<br>" 
                        . "PLZ: " . $plz . " "
                        . "Ort: " . $ort
                        . "<br>"
                        . "E-Mail: " . $email . "<br><br>"
                        . "Nachricht: " . $nachricht . "<br><br>"
                        . "<h4>Ausgewählte Artikel:</h4>" . $ausgewaehlteArtikelHtml // Hier fügen Sie die ausgewählten Artikel ein
                        . "<h3>Versandoption:</h3> " . $versandtext . "<br><br>"
                        . "<h3>Gesamtsumme:</h3> " . $gesamtsumme . " " . "€";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danke!</title>
    <link rel="stylesheet" href="css/danke.css">
</head>
<body>

    <div class="container_danke">
        <?php
        $mail->send();
        
        ?>

        



        <?php
            echo "<h1>Danke, $vorname!</h1><h3>Wir haben Ihre Bestellung erhalten und werden uns bald bei Ihnen melden.</h3>";
        } catch (Exception $e) {
            echo "Ihre Nachricht konnte leider nicht versendet werden. Fehler: {$mail->ErrorInfo}";
        }
        } else {
            header('Location: index.php');
            exit;
        }?>
    </div>
    <img src="img/logoBlack.png" alt="">
    
</body>
</html>