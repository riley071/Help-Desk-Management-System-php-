<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'emzomatewere@gmail.com';   
    $mail->Password = 'hddvnksjhmevuamn';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('emzomatewere@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
    $mail->Subject ='Youre compliant has been fixed';
    $mail->Body = $_POST["message"];
    $mail->send();

    echo
    "
    <script>
    alert('Sent Succesfully');
    document.location=href = 'closed-complaint.php';
    </script>
    ";
}




?>