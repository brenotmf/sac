<?php

    require_once("model/lista_produtos.php");

    require("menu.php");
?>

    <main role="main" class="container">

      <div class="row">
        
        <div class="col-12">
            <h1>Lista de Produtos</h1>

            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                    <th>#id</th>
                    <th>Nome do Produto</th>
                    <th>Ações</th>
                </tr>
               </thead>

               <tbody>
                    
                 
             <?php
               $produtos = listaProdutos();
               
                foreach($produtos as $item)
                {
                  
                  echo "<tr>";
                  echo "<td>". $item['id'] ."</td>";
                  echo "<td>". $item['nome'] ."</td>";                        
                  echo '<td>';
                  echo '<a class="btn btn-info" href="produtos.php?id='. $item['id'] .'" > Editar</a> ';
                  echo '<a class="btn btn-danger" href="controller/produto_delete.php?id='. $item['id'] .'">Deletar</a>';
                  echo '</td>';
                  echo "</tr>";
                }
            ?>
                   
                </tbody>

            </table>
            

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
