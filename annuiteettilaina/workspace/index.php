<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title>Annuiteettilaina</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <h3>Annuiteettilaina</h3>
        <form method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
        <label>Määrä</label>
        <input type="number" name="maara" step="0.01" required/>
         <label>Korko</label>
        <input type="number" name="korko" step="0.01" required/>
         <label>Aika</label>
        <input type="number" name="aika" step="0.01" required/>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $maara = filter_input(INPUT_POST, 'maara', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $korko = filter_input(INPUT_POST, 'korko', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION) / 100;
        $aika = filter_input(INPUT_POST, 'aika', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION) * 12;
        $ylapuoli = $korko / 12 * (pow(1 + $korko / 12, $aika));
        $alapuoli = pow(1 + $korko / 12, $aika) - 1;
        $tulos = ($ylapuoli / $alapuoli) * $maara;
        printf("<p>Annuiteettilaina on %1.0f €</p>",$tulos);
        }
        ?>
        <input type="submit" value="Laske"/>
        </form>
    </body>
</html>