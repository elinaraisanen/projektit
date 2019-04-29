<?php require_once 'inc/top.php'?>

<div class="m-3 col-4">
        <h3>Haettavat paikat</h3>
        <div>
          
                
        <?php
        if (isset($_GET['poista'])) {
            unset($_SESSION['kori']);
        }
        if (is_array($_SESSION['kori'])) {
            foreach ($_SESSION['kori'] as $tuote) {
                print "$tuote<br>";
            }
        }
        
        ?>
        
 
            <a href="?poista=true<?php print $_SERVER['PHP_SELF'];?>">Tyhjennä</a>
            
        </div>
 </div>
<?php


if (!isset($_SESSION['kori'])) {
    $_SESSION['kori'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tuote = filter_input(INPUT_POST, 'tuote', FILTER_SANITIZE_STRING);
    array_push($_SESSION['kori'], $tuote);
}

?>

    
    
    <?php require_once 'inc/footer.php'?>
<?php require_once 'inc/bot.php'?>