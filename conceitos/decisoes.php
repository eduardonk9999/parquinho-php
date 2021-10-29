<?php


$idade = 15;
if($idade < 5) {
  echo 'Entrada permitida';
} else {
  echo 'Entrada negada';
}

echo '<br /><br /><br />';
echo '<p>Média do aluno</p>';

// Media User

$nota1 = 10;
$nota2 = 5;
$nota3 = 7;
$nota4 = 6;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo $media;

if($media >= 7){
  echo 'Aluno aprovado';
  echo '<br />';
} else {
  echo 'Aluno reprovado';
}