<?php

   session_start();

    $logado = $_SESSION['logado'];
    if ($logado == null)
    {
      echo "Você não tem permissão de acesso a essa página! Favor se logar.";
      exit();
    }

    require_once("model/lista_reclamacoes.php");
    require("menu.php");
?>

    <main role="main" class="container">

      <div class="row">
        
        <div class="col-12">
            <h1>Lista de reclamações feitas</h1>

            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                    <th>#id</th>
                    <th>Produto</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Feito por</th>
                    <th>Data</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
               </thead>

               <tbody>
                 
                 <?php
                 
                  $rec = listaReclamacoes();
                 
                  foreach($rec as $item)
                  {

                    $data_ori = explode(" ", $item["data"]);
                    $data = explode("-", $data_ori[0]);
                    $nova_data = $data[2]. "/". $data[1]. "/". $data[0];
                    $nova_data .= " ". $data_ori[1];
                    
                    echo "<tr>";
                    echo "<td>". $item["id"] ."</td>";
                    echo "<td>". $item["nome"] ."</td>";
                    echo "<td>". $item["titulo"] ."</td>";
                    echo "<td>". $item["descricao"] ."</td>";
                    echo "<td>". $item["por"] ."</td>";
                    echo "<td>". $nova_data ."</td>";                    
                    echo "<td>". $item["status"] ."</td>";
                    echo '<td><a href="responder.php?id='. $item["id"] .'">Editar</a></td>';
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
