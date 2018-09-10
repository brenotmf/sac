<?php

    require_once("model/lista_produtos.php");
    require_once("model/lista_reclamacoes.php");

    require("menu.php");

 if(count($_GET) > 0 && isset($_GET['id']))
 {
   $id = $_GET['id'];
   $reclamacao = exibeReclamacao($id);
   
  
 }
?>

    <main role="main" class="container">

      <div class="row">
        
        <div class="col-8 offset-2">
            <h1>Responder Reclamação</h1>

            <form class="form-horizontal" action="controller/reclamacao_responder.php" method="POST">
                <fieldset>

            <input type="hidden" name="id" value="<?php echo $reclamacao["id_reclamacao"] ?>" />

              <div>
                  <h4>Título da reclamação</h4> 
                  <p><?php echo $reclamacao["titulo"] ?></p>
              </div>
                  
              <div>
                  <h4>Produto</h4> 
                  <p><?php echo $reclamacao["nome"] ?></p>
              </div>    
                  
              <div>
                  <h4>Descrição do problema</h4> 
                  <p><?php echo $reclamacao["descricao"] ?></p>
              </div>
              
              <div>
                  <h4>Feito Por</h4> 
                  <p><?php echo $reclamacao["por"] ?></p>
              </div>
                  
                <!-- Select Basic -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="produto">Status do Atendimento</label>
                <div class="col-md-4">
                  
           <select id="status" name="status" class="form-control">
             
             <?php 
                $status = array("NOVO", "RESPONDIDO", "FECHADO", "RESOLVIDO");
                    
                foreach($status as $valor)
                {
                   if ($valor == $reclamacao["status"] )
                   {
                      echo '<option value="'. $valor. '" selected>'. $valor. '</option>';
                   } else {
                      echo '<option value="'. $valor. '">'. $valor. '</option>';   
                   }
                  
                }
             ?>
              
                                    
           </select>
                  
                </div>
                </div>

               

                <!-- Textarea -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="descricao">Resposta do Problema</label>
                <div class="col-md-4">                     
                    <textarea class="form-control" id="resposta" name="resposta"></textarea>
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
