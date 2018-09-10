<?php

    require("../model/lista_produtos.php");

  if(count($_GET) > 0 && isset($_GET["id"]))
  {
    $id = $_GET["id"];
    
    deletarProduto($id);
    
     header("Location: ../lista_produtos.php");
    
  }

?>