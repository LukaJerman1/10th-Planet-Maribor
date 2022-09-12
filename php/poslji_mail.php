<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once("phpmailer/phpmailer/src/PHPMailer.php");
    require_once("phpmailer/phpmailer/src/SMTP.php");

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';

    $mail->Username = 'test.php2224@gmail.com';
    $mail->Password = '235a9zml147d';
    $mail->SetFrom('no-reply@howcode.org');
    $mail->isHTML(true);
    $mail->Subject = "10t Planet Registracija Uspesna";

    

    /* KOMU POSLAT */ 
    //$sessionMail = $_SESSION['email'];
    //$mail->addAddress($sessionMail);
    $mail->addAddress('test.php2224@gmail.com');

    $mail->AddEmbeddedImage('logo.png', 'my-photo', 'logo.png');

    $mail->Body = "<img alt='PHPMailer' src='cid:my-photo'>
                    <p> Pozdravljeni, <br />
                    želimo vas obvestiti, da je bila vaša registracija v 10th Planet Maribor uspešna.<br />
                    Se vidimo na blazinah !<br />
                    <br />
                    To sporocilo je avtomatizirano, nanj ne odgovarjajte.<br />
                    Kontakt: <br /> 
                    +386 40 511 571<br />
                    info@10thPlanetMaribor.com
                    </p>";



    $mail->AltBody = "Dobrodosli na 10th Planet Maribor!";

    try{
        $mail->send();
        echo'Pa tako je!';

    }catch (Exception $e){
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

?>