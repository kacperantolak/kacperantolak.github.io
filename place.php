<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miejscowość</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <img src="bg.jpg" alt="Baner" id='bg'>
    </div>

    <nav>
        <a href="home.php">Główna</a>
        <a href="place.php">Miejscowość</a>
        <a href="contact.php">Kontakt</a>
    </nav>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.3266756540906!2d20.051699147507705!3d49.47833591967635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715e4edca05e0b1%3A0xa40a7d42164aa23f!2zWmVzcMOzxYIgU3prw7PFgiBuciAxIGltLiBXxYJhZHlzxYJhd2EgT3JrYW5h!5e0!3m2!1spl!2spl!4v1705346027188!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <footer>
        <?php
        date_default_timezone_set('Europe/Warsaw');
        echo 'Aktualna data i godzina: ' . date('Y-m-d H:i:s') . ' ';
        ?>
        kantolak22@zs1.nowotarski.edu.pl
    </footer>
</body>
</html>