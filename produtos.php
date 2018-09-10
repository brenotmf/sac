<?php
    require_once("model/lista_produtos.php");

    require("menu.php");    

    $editar = false;
    $nome_produto = '';
    $action = "controller/produto_cadastro.php";
    
    if(count($_GET) > 0 && isset($_GET['id']))
    {
      $editar = true;  
      $id = $_GET['id'];
      $action = "controller/produto_editar.php";
      
      $produto = exibeProduto($id);
      
      $nome_produto = $produto['nome'];
      
    }
?>

    <main role="main" class="container">

      <div class="row">
        
        <div class="col-8 offset-2">
          
            <?php
              if ($editar == true)
              {
                echo '<h1>Editar Produto</h1>';    
              } else 
              {                
                echo '<h1>Cadastro de Produtos</h1>';
              }
            ?>
            

            <form class="form-horizontal" action="<?php echo $action; ?>" method="POST">
                <fieldset>

                 <?php
                  
                  if ($editar == true)
                  {
                    echo '<input name="id" type="hidden" value="'. $produto['id'] .'" />';
                  }
                                      
                    
                 ?>
              

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome do Produto</label>  
                <div class="col-md-4">
                <input id="nome" name="nome" value="<?php echo $nome_produto; ?>" type="text" placeholder="" class="form-control input-md" required="">
                    
                </div>
                </div>

                <!-- File Button --> 
                <div class="form-group">
                <label class="col-md-4 control-label" for="imagem">Foto do Produto</label>
                <div class="col-md-4">
                    <input id="imagem" name="imagem" class="input-file" type="file">
                </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="enviar"></label>
                <div class="col-md-4">
                  <?php
                    if ($editar == true)
                    {
                      echo '<button id="enviar" name="enviar" class="btn btn-success">Editar</button>';
                    } else 
                    {
                      echo '<button id="enviar" name="enviar" class="btn btn-primary">Cadastrar</button>';
                    }
                  ?>
                    
                </div>
                </div>

                </fieldset>
                </form>

        </div>


      </div>
     
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
