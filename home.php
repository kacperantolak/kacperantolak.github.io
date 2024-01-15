<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
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

    <footer>
        <?php
        date_default_timezone_set('Europe/Warsaw');
        echo 'Aktualna data i godzina: ' . date('Y-m-d H:i:s') . ' ';
        ?>
        kantolak22@zs1.nowotarski.edu.pl
    </footer>
</body>
</html>