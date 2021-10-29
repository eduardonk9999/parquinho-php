<?php

$num1 = 9;
$num2 = 10;

$resultado = 0;

for($i = 0; $i < $num2; $i++) {
  $resultado += $num1;

  echo '<br>' . $resultado;
}

echo '<br>';echo '<br>';
//
$k = 0;
do {
  $k++;
} while($k < 10);

echo $k;


//
echo '<br>';

$l = 1;
while($l < 10) {
  $l++;
} 

echo $l;

echo '<br>';echo '<br>';echo '<br>';
// For with array

$nomes = array("pedro", "joao", "maria", "ze");

for($k = 0; $k < 4; $k++){
  echo "<p>" . $nomes[$k] . "</p>";
}
echo '<br>';echo '<br>';echo '<br>';

// foreach
echo "<p>FOREACH</p>" ;
foreach($nomes as $nome){
  echo "<p>" . $nome . "</p>";
}