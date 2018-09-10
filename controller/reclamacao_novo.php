<?php

require("../model/lista_reclamacoes.php");

 if (count($_POST) > 0)
 {
   
   $titulo = $_POST['titulo'];
   $produto = $_POST['produto'];
   $descricao = $_POST['descricao'];
  
   
   novaReclamacao($titulo, $descricao, $produto);
   
   $resultado = novaReclamacao($titulo, $descricao, $produto);
     
   if ($resultado == true)
   {
     header("Location: ../index.php");
   }
 }

?>

?>
