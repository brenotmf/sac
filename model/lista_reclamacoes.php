<?php

  require_once("conect.php");
  require_once("libs.php");

function listaReclamacoes()
{

    $con = dbcon();

    $sql = "SELECT reclamacoes. * , produtos.nome
FROM reclamacoes, produtos
WHERE reclamacoes.produtos_id = produtos.id
ORDER BY reclamacoes.data DESC ";

    $res = mysqli_query($con, $sql);

    return fetch_all($res);
}

function exibeReclamacao($id)
{
   $con = dbcon();
  
  $sql = "SELECT r.id AS id_reclamacao, r.titulo, r.descricao, 
          r.data, r.status, p.id AS id_produto, p.nome, r.por
          FROM reclamacoes r, produtos p
          WHERE r.produtos_id = p.id
          AND r.id = $id";
  
  $res = mysqli_query($con, $sql);
  
  return mysqli_fetch_assoc($res);
  
}

function respondeReclamacao($id, $status, $resposta)
{
  $con = dbcon();
  
  $reclamacao = exibeReclamacao($id);
  
  $novo = "<br><br>----------<br>";
  $novo .= date("Y-m-d H:i:s");
  $novo .= "<br><br>";
  $novo .= $resposta;
  
  $descricao = $reclamacao['descricao']. $novo;
  
  $sql = "UPDATE reclamacoes SET descricao = 'descricao',
          status = 'status'
          WHERE id = $id";
  
  $res = mysqli_query($con, $sql);
  
  return true;
  
}

function novaReclamacao($titulo, $descricao, $produto)
{
  $con = dbcon();
  
  $sql = "INSERT INTO  reclamacoes (
        `id` ,
        `titulo` ,
        `descricao` ,
        `data` ,
        `por` ,
        `produtos_id` ,
        `status`
        )
        VALUES (
        NULL ,
        '$titulo',
        '$descricao',
        NOW( ) ,  
        '',  
        '$produto', 
        'NOVO'
        )";

  $res = mysqli_query($con, $sql);
  
    if ($res == false)
  {
     echo "Ocorreu um problema ao add um produto";
  } else {
    return true;  
  }
  
}

?>