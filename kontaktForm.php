<?php
include "./lang/config.php";

if(isset($_POST['submit'])) {

  $firstName = htmlspecialchars($_POST['firstName']);
  $lastName = htmlspecialchars($_POST['lastName']);
  $email = htmlspecialchars($_POST['mail']);
  $msg = htmlspecialchars($_POST['msg']);

  require './PHPMailer/PHPMailerAutoload.php';
  
  //we need to create an instance of PHPMailer
    $mail = new PHPMailer();

    //set where we are sending email
    $mail->addAddress('Bosniadailylife@gmail.com');

    //set who is sending an email
    $mail->setFrom('Bosniadailylife@gmail.com', $firstName);

    //set subject
    $mail->Subject = "Poruka sa stranice!";

    //type of email
    $mail->isHTML(true);

    //write email
    $mail->Body = "<p>Poruka od: ".$firstName." ".$lastName."<br><br>Mail: ".$email."<br><br>Poruka:<br><br>$msg</p>";

    //send an email
    if (!$mail->send())
        echo "Error!";
    else
        echo $lang['poslano'];
} else {
  header('location: ./index.php');
  die();
}