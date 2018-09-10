<?php
  require("../model/lista_produtos.php");

 if (count($_POST) > 0)
 {
   $produto = $_POST["nome"];
   $id = $_POST["id"];
   
   $resultado = alteraProduto($id, $produto);

   
   if ($resultado == true)
   {
     header("Location: ../lista_produtos.php");
   }
   
 }

?>