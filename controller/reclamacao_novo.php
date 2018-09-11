<?php

session_start();

require("../model/lista_reclamacoes.php");

 if (count($_POST) > 0)
 {
   
   $titulo = $_POST['titulo'];
   $produto = $_POST['produto'];
   $descricao = $_POST['descricao'];
   $usuario = $_SESSION["logado"]["usuario"];
  
   
   //novaReclamacao($titulo, $descricao, $produto);
   
   $resultado = novaReclamacao($titulo, $descricao, $produto, $usuario);
     
   if ($resultado == true)
   {
     header("Location: ../index.php");
   }
 }

?>

?>
