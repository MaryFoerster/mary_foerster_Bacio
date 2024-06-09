<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'src/PHPMailer/Exception.php';
    require 'src/PHPMailer/PHPMailer.php';
    require 'src/PHPMailer/SMTP.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANKE</title>
</head>
<body>

    <?php
        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];
        $nachricht = $_POST['nachricht'];
        $email = $_POST['email'];

        // echo "Vielen Dank! Wir melden uns bei ihnen - ". $vorname . " " . $nachname;

        if (isset($_POST['submit'])) {

            $mail = new PHPMailer(true);

            $mail->CharSet = 'utf-8';      
            // Variable Eigenschaft die so definiert ist in der klasse

            $mail->setLanguage ('de');
            // eigenschaft Methode Paramether 

            $mail->isSMTP();
            // brauchen wir zum versenden

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

            $mail->Subject = "Kontakanfrage ueber die Homepage";

            $mail->addCC('lisamari9500@gmail.com', "Mary Förster");

            $mail->Body = "<br>Von: " . $vorname . " " . $nachname 
            . "<br>Email:" . $email 
            . "<i>Das ist eine Kontaktaufnahme</i>" . $nachricht .
            "Der DSGVO wurde zugestimmt!";

            try {
                $mail->send();
                echo '<h1>Danke</h1><h2>Wir melden uns bei ihnen! ' . $vorname .  '</h2>';
            } catch (Exception $ex) { 
                echo 'es ist ein Fehler aufgetreten' . $mail->ErrorInfo;
            }
        }
    ?>
    
</body>
</html>