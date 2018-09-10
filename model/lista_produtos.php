<?php

  require_once("conect.php");
  require_once("libs.php");

/**
* Retorna todos os produtos cadastrados
* @return array
*/
function listaProdutos()
{

    $con = dbcon();

    $sql = "SELECT * FROM produtos ORDER BY nome ASC";

    // usa
    $res = mysqli_query($con, $sql);

   return fetch_all($res);
}

/**
* Cadastra um novo produto
*/
function cadastrarProduto($produto)
{
   $con = dbcon();
  
   $sql = "INSERT INTO  produtos (
        `id` ,
        `nome`
        )
        VALUES (
        NULL ,  
        '".$produto."'
        )";
  
  $res = mysqli_query($con, $sql);
  
  if ($res == false)
  {
     echo "Ocorreu um problema ao add um produto";
  } else {
    return true;  
  }
    
}


function deletarProduto($id)
{
  $con = dbcon();
  
  $sql = "DELETE FROM produtos WHERE produtos.id = $id";
  
  $res = mysqli_query($con, $sql);
  
  return true;
  
}

function exibeProduto($id)
{
  $con = dbcon();
  
  $sql = "SELECT * 
        FROM  produtos 
        WHERE id = $id";
  
   $res = mysqli_query($con, $sql);
  
   return mysqli_fetch_assoc($res);
  
}

function alteraProduto($id, $produto)
{
   $con = dbcon();
   
   $sql = "UPDATE  produtos SET  nome =  '$produto' WHERE  id = $id";
  
   $res = mysqli_query($con, $sql);
  
  return true;
}


?>
  