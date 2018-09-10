<?php
require_once('../model/login.php');

$logado = logar($_POST['usuario'], $_POST['senha']);

if($logado == null)
{
  
  echo "Usuário ou senha INCORRETOS.";
}else{
  
  header("Location: ../index.php");
}

?>