<?php



function gerarNumeros($inicio, $fim){
  $lista = [];
  for($k = $inicio; $k <= $fim; $k++){
    $lista[] = $k;
  }
  
  var_dump($lista);
}

gerarNumeros(1, 5);
gerarNumeros(10, 15);
gerarNumeros(12, 13);
