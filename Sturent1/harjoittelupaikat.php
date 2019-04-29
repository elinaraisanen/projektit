<?php require_once 'inc/top.php'?>


<h3 class="m-3">Vapaat harjoittelupaikat</h3>
        

    
       
<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post">
    <div class="card">
      <div class="card-header">
    Oys
  </div>
  <div class="card-body">
    <h5 class="card-title">Sairaanhoitajaharjoittelija</h5>
    <p class="card-text">Aika: 1.3.-30.5.2019</p>
     <input type="hidden" name="tuote" value="OYS/sairaanhoitaja">
    <button class="button button5">Ostoskoriin</button>
  </div>
</div>
</form>


<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post">
    <div class="card">
      <div class="card-header">
   Koodia Oy
  </div>
  <div class="card-body">
    <h5 class="card-title">Koodari</h5>
    <p class="card-text">Aika: 1.9.2019-31.1.2020 </p>
     <input type="hidden" name="tuote" value="Koodia/koodari">
    <button class="button button5">Ostoskoriin</button>
  </div>
</div>
</form>


<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post">
    <div class="card">
      <div class="card-header">
   Pankki Oy
  </div>
  <div class="card-body">
    <h5 class="card-title">Tradenomiopiskelija asiakaspalveluun</h5>
    <p class="card-text"> Aika: 1.4.-30.9.2019 </p>
    <input type="hidden" name="tuote" value="Pankki Oy/asiakaspalvelija">
    <button class="button button5">Ostoskoriin</button>
  </div>
</div>
</form>
       


        
<?php

session_start();

if (isset($_GET['poista'])) {
    unset($_SESSION['kori']);
}

if (!isset($_SESSION['kori'])) {
    $_SESSION['kori'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tuote = filter_input(INPUT_POST, 'tuote', FILTER_SANITIZE_STRING);
    array_push($_SESSION['kori'], $tuote);
}

?>
</div>  

<br>
<br>

 
    <?php require_once 'inc/footer.php'?>
<?php require_once 'inc/bot.php'?>