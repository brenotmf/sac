<?php
require_once("../model/lista_reclamacoes.php");

if (count($_POST) > 0)
 {
  $id = $_POST['id'];
  $status = $_POST['status'];
  $resposta = $_POST['resposta'];
  
  respondeReclamacao($id, $status, $resposta);
  
  header("Location: ../reclamacoes.php");

 }


?>