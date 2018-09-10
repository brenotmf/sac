<?php

  function fetch_all($res)
  {
    $vetor = [];
  
    while ($linha = mysqli_fetch_assoc($res)) 
    {
      $vetor[] = $linha;
    }
  
   return $vetor;
  }

?>