<?php
session_start();

require_once('../model/login.php');

$logado = logar($_POST['usuario'], $_POST['senha']);

$_SESSION ['logado'] = $logado;

if($logado == null)
{
  
  echo "Usuário ou senha INCORRETOS.";
}else{
  
  header("Location: ../index.php");
}

?>