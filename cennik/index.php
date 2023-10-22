<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cennik</title>
    <link rel="stylesheet" href="cennik.css">
    <link rel="icon" href="Maciej_Woloszyn-01-transparent.jpg">
</head>
<body>
<div class="container">
    <header>
        <h1>Cennik</h1>
    </header>
    <div id="cennik" class="minimalistyczny">
        <table>
            <tr>
                <th>Nazwa</th>
                <th>Cena</th>
            </tr>
            <tr>
                <td>Trening wprowadzający</td>
                <td>0zł</td>
            </tr>
            <tr>
                <td>1TP</td>
                <td>140zł</td>
            </tr>
            <tr>
                <td>4TP</td>
                <td>440zł</td>
            </tr>
            <tr>
                <td>8TP</td>
                <td>800zł</td>
            </tr>
            <tr>
                <td>12TP</td>
                <td>1100zł</td>
            </tr>
            <tr>
                <td>20TP</td>
                <td>1800zł</td>
            </tr>
            <tr>
                <td>40TP</td>
                <td>3500zł</td>
            </tr>
            <tr>
                <td>1TP DUET</td>
                <td>200zł</td>
            </tr>
            <tr>
                <td>4TP DUET</td>
                <td>600zł</td>
            </tr>
            <tr>
                <td>8TP DUET</td>
                <td>1100zł</td>
            </tr>
            <tr>
                <td>12TP DUET</td>
                <td>1500zł</td>
            </tr>
            <tr>
                <td>20TP DUET</td>
                <td>2400zł</td>
            </tr>
            <tr>
                <td>40TP DUET</td>
                <td>4000zł</td>
            </tr>
        </table>
    </div>
    <div class="form">
        <h1>Zapisz się na Trening Personalny</h1>
        <form method="POST">
            <label for="imie">Imię:</label>
            <input class="inputy" type="text" id="imie" name="imie" required placeholder="Wprowadź swoje imię">

            <label for="email">Adres e-mail:</label>
            <input class="inputy" type="email" id="email" name="email" required placeholder="Wprowadź swój adres e-mail">

            <label for="trener">Temat:</label>
            <input class="inputy" type="text" id="trener" name="trener" required placeholder="Wprowadź temat">

            <label for="wiadomosc">Dodatkowe informacje:</label><br>
            <textarea class="inputy" id="wiadomosc" name="wiadomosc" rows="4"></textarea><br>
            <input type="submit" value="Zapisz się" class="submit">
        </form>
        <?php
        if(isset($_POST['submit'])) {
            $imie = $_POST["imie"];
            $email = $_POST["email"];
            $telefon = $_POST["telefon"];
            $trener = $_POST["trener"];
            $wiadomosc = $_POST["wiadomosc"];

            $subject = "Nowa wiadomość z formularza";
            $to = "maciejwoloszyn04@gmail.com";

            $message = "Imię: $imie\n <br>";
            $message .= "Email: $email\n <br>";
            $message .= "Telefon: $telefon\n <br>";
            $message .= "Temat: $trener\n <br>";
            $message .= "Wiadomość:\n$wiadomosc <br>";

            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";

            mail($to, $subject, $message, $headers);
        }
        ?>
    </div>
<footer>
    <div class="stopka">
        <div class="logo">
            <img src="Maciej_Woloszyn-01-transparent.png" alt="Logo" style="width: 100%;min-width: 50%">
        </div>
        <div class="media-społecznościowe">
            <a href="https://www.facebook.com/profile.php?id=100087113545970" target="_blank"><img src="FB.png" alt="Facebook" style="width: 75%"></a>
            <a href="https://www.instagram.com/maciejwoloszyn/" target="_blank"><img src="IG.png" alt="Instagram" style="width: 75%"></a>
            <a href="tel:+48608867730"><img src="phone.png" alt="phone" style="width: 75%"></a>
        </div>
    </div>
</footer>
</div>
</body>
</html>