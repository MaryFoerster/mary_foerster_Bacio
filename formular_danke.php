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
<?php include("head.php") ?>
    <title>DANKE</title>
</head>
<body>

    <?php
        $name = $_POST['name'];
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

           // Email body content
           $mail->Body = "<br>Von: " . $name . 
           "<br>Email: " . $email . 
           "<br><i>Das ist eine Kontaktaufnahme</i><br>" . $nachricht . 
           "<br>Der DSGVO wurde zugestimmt!";

            try {
                $mail->send();
                echo '<h1>Danke</h1><h2>Wir melden uns bei ihnen! ' . $name .  '</h2>';
            } catch (Exception $ex) { 
                echo 'es ist ein Fehler aufgetreten' . $mail->ErrorInfo;
            }
        }
    ?>
    
</body>
</html>