<?php


require_once("conect.php");

function logar($usuario, $senha)
{
  $con = dbcon();
  
  $sql = "SELECT * 
          FROM  usuarios 
          WHERE usuario =  '$usuario'
          AND senha =  '$senha'";
  
  $res = mysqli_query($con, $sql);
  
  return mysqli_fetch_assoc($res);
  
}




?>