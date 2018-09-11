<?php


   if (isset($_SESSION['logado']))
   {
   $logado = $_SESSION['logado'];
   } else {
   $logado = null;
   }
    

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Sistema de SAC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>


  <body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark static-top">
  <a class="navbar-brand" href="#">SAC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
<?php
      
      if($logado != null)  
      {
        if ($logado ['tipo'] != 'admin')
        {
?>        
      <li class="nav-item">
        <a class="nav-link" href="novo.php">Novo</a>
      </li>
      
      <?php
        }else
       {
             ?>
      <li class="nav-item">
        <a class="nav-link" href="reclamacoes.php">Lista de reclamações</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produtos.php">Cadastrar Produto</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="lista_produtos.php">Listar Produto</a>
      </li>
  <?php    
       }     
      }
   ?>
    </ul>
  <?php
    if ($logado ==null)
    {
   ?>
     <a href="login.php" class="btn btn-outline-primary">Login</a> 
   <?php 
    } else
    {
    ?>
    
    <a href="logout.php" class="btn btn-outline-primary">  
   <?php
      echo $logado['usuario'] ." (logout)";
    ?>  
    </a>
    <?php
    }
   ?>


  </div>
</nav>