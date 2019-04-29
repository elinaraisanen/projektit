<!DOCTYPE html>
<html>
    <head>
        <title>Laina</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
       
    </head>
    
    <body>
        <form action="laske.php" method="post">
        <h3>Tasalyhenteinen laina</h3>
        <form method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
        <div>
            <label class="col-2">Laina</label>
            <input value="100000.00" type="number" name="laina" step="0.01" required/>
        </div>
         <div>
             <label class="col-2">Korko</label>
             <select name="korko">
                 <?php
                 $i = 2;
                 while ($i <= 5) {
                     printf("<option value='%.1f'>%.1f &#37;</option>",$i,$i);
                     $i = $i + 0.1;
                 }
                 ?>
             </select>
        </div>
         <div>
             <label class="col-2">Aika</label>
             <select name="aika">
                 <?php
                 for ($i = 1; $i <= 25; $i++) {
                     print "<option value = '$i'> $i vuotta</option>";
                 }
                 ?>
             </select>
        </div>
        
       

        
         <button>Laske</button>
        </form>
    </body>
</html>