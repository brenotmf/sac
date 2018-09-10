<?php

    require_once("model/lista_produtos.php");

    require("menu.php");
?>

    <main role="main" class="container">

      <div class="row">
        
        <div class="col-8 offset-2">
            <h1>Nova Reclamação</h1>

            <form class="form-horizontal" action="controller/reclamacao_novo.php" method="POST">
                <fieldset>

            

                <!-- Select Basic -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="produto">Produto</label>
                <div class="col-md-4">
                  
           <select id="produto" name="produto" class="form-control">
                      
           <?php
               $produtos = listaProdutos();
               
                foreach($produtos as $item)
                {
                  echo '<option value="'. $item['id']. '">' .$item['nome'] . "</option>";
                }
            ?>
                      
           </select>
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="titulo">Título</label>  
                <div class="col-md-4">
                <input id="titulo" name="titulo" type="text" placeholder="" class="form-control input-md" required="">
                    
                </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="descricao">Descrição do Problema</label>
                <div class="col-md-4">                     
                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                </div>
                </div>

              

                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="enviar"></label>
                <div class="col-md-4">
                    <button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
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
