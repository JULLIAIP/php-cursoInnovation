<?php
$categorias = [];

$categorias[]='infantil';
$categorias[]='adolescente';
$categorias[]='adulto';

//print_r($categorias);

$nome='Eduardo';
$idade=12;

//informação sobre o tipo da variavel
// var_dump($nome);
// var_dump($idade);

if($idade >=6 && $idade <=12)
{
echo"infatil";
}
else if ($idade >=13 && $idade <18)
{
echo 'adolescente';
}
else if($idade >18){
    echo 'adulto';
}
else{
    echo 'não tem idade pra participar';
}