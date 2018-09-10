<?php

  function dbcon()
  {
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sac";

    $con = mysqli_connect($host, $usuario, $senha, $banco);
    mysqli_set_charset($con, 'utf8');
    
    return $con;
  }

?>