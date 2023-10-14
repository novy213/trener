<?php
if(isset($_POST['submit'])) {
    $imie = $_POST["imie"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $trener = $_POST["trener"];
    $wiadomosc = $_POST["wiadomosc"];

    $from = "From $email";

    $subject = "Nowa wiadomość z formularza";
    $to = "maciejwoloszyn04@gmail.com";

    $message = "Imię: $imie\n";
    $message .= "Email: $email\n";
    $message .= "Telefon: $telefon\n";
    $message .= "Temat: $trener\n";
    $message .= "Wiadomość:\n$wiadomosc";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: ' . $from . "\r\n";

    mail($to, $subject, $message, $headers);
}
?>