<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tasalyhenteinen laina</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        </style>
    </head>
    
    <body>
       
        <h3>Tasalyhenteinen laina</h3>
        
        <?php
            $laina = filter_input(INPUT_POST,'laina', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $korko = filter_input(INPUT_POST,'korko', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $aika = filter_input(INPUT_POST,'aika', FILTER_SANITIZE_NUMBER_INT);
            
            $korkokk = $korko / 12;
            $aikakk = $aika * 12;
            $lyhennys = $laina / $aikakk;
            $koko_summa = 0;
            
            print "<p>";
            for ($i = 1; $i <= $aikakk; $i++) {
                $korko = $laina / 100 * $korkokk;
                $maksu = $lyhennys + $korko;
                $koko_summa += $maksu;
                printf("Kuukausilyhennys on %.2f<br>", $maksu);
                $laina -= $lyhennys;
            }
            print "</p>";
            printf("<p>Maksat lainaa %.2f koko laina-ajalta</p>", $koko_summa);
            //print "summa on $laina, korko on $korko ja aika on $aika";
        ?>
        <a href="laina.php">Laske uudestaan</a>
    </body>
</html>