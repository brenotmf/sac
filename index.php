<?php

    require_once("model/lista_produtos.php");
    require_once("model/lista_reclamacoes.php");

    require_once("menu.php");

    
?>

    <main role="main" class="container">

      <div class="row">
        <div class="col-8 offset-2">
          <h1>Listagem de Reclamações</h1>

          <select class="form-control" >
            
            <?php
               $produtos = listaProdutos();
               
                foreach($produtos as $item)
                {
                  echo '<option value="'. $item['id']. '">' .$item['nome'] . "</option>";
                }
            ?>
            
                       
          </select>


        </div>

        <div class="col-8 offset-2">
            
          
         <?php

          $rec = listaReclamacoes();

          foreach($rec as $item)
          {

            $data_ori = explode(" ", $item["data"]);
            $data = explode("-", $data_ori[0]);
            $nova_data = $data[2]. "/". $data[1]. "/". $data[0];
            $nova_data .= " ". $data_ori[1];

        
            echo '<div class="card">';
            echo '<div class="card-header">';
            echo $item["nome"];
            echo '</div>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'. $item["titulo"]. '</h5>';
            echo '<p class="card-text">'. $item["descricao"] .'</p>';
            echo '<p><small class="text-muted">Por: '. $item["por"] .'  - '. $nova_data .'</small></p>';
            echo '</div>';
            echo '</div>';
          }

         ?>

          

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
