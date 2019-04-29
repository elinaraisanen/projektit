<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nettopalkka</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/muoks.css">
        <link rel=stylesheet href="/index.html"
    </head>
    <body>
        <h3>Nettopalkka</h3>
        <?php
        $brutto = filter_input(INPUT_POST,"brutto",FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $ennakko = $brutto /filter_input(INPUT_POST,"ennakko",FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $elake = $brutto / filter_input(INPUT_POST,"elake",FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $tvm = $brutto / filter_input(INPUT_POST,"tvm",FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
       
        
        $netto = $brutto-($ennakko+$elake+$tvm);
        printf("<p>Nettopalkka on %.1f</p>",$netto);
        ?>
        <a href="index.html">Laske uudestaan</a>
    </body>
</html>