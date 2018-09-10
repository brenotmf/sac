<?php
  require("../model/lista_produtos.php");

 if (count($_POST) > 0)
 {
   $produto = $_POST["nome"];
   
   $resultado = cadastrarProduto($produto);
   
   if ($resultado == true)
   {
     header("Location: ../lista_produtos.php");
   }
 }

?>