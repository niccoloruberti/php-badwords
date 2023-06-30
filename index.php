<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <div>
        <form action="stampa.php" method="GET">
            <textarea name="paragrafo" cols="30" rows="10" placeholder="Inserisci il testo qui"></textarea>
            <input type="text" name="censura" placeholder="parola da censurare">
            <input type="submit">
        </form>
    </div>
</body>
</html>