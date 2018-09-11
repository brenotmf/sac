<?php
session_start();



require_once('../model/login.php');

$logado = logar($_POST['usuario'], $_POST['senha']);

$_SESSION ['logado'] = $logado;

if($_POST['lembrar'] == 'sim')
{
  $semana = 7 * 4 * 60 * 60;
  
  $tempo = time() + $semana;
  
   setcookie('PHPSESSID', $_COOKIE['PHPSESSID'], $tempo, "/");
}

  


if($logado == null)
{
  
  echo "Usuário ou senha INCORRETOS.";
}else{
  
  header("Location: ../index.php");
}

?>