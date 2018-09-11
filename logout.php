<?php
  $semana = 7 * 4 * 60 * 60;
  
  $tempo = time() - $semana;
  
  setcookie('PHPSESSID', $_COOKIE['PHPSESSID'], $tempo, "/");
    
  header("Location: index.php");

?>