<?php
$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

//print_r($categorias);

$nome = $_POST['name'];
$idade = $_POST['age'];

//verificar se ta vazio
if (empty($nome)) {
    echo 'o nome não pode ser vazio';
    return;
}
//verificar se tamanho
if (strlen($nome) > 50) {
    echo 'o nome é muito extenso';
    return;
}
if (strlen($nome) < 3) {
    echo 'o nome deve ter pelo menos 3 caractere';
    return;
}
//verificar tipo
if (!is_numeric($idade)) {
    echo "Digite a idade erm números";
    return;
}

//informação sobre o tipo da variavel
var_dump($nome);
var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    echo "infatil";
} else if ($idade >= 13 && $idade < 18) {
    echo 'adolescente';
} else if ($idade > 18) {
    echo 'adulto';
} else {
    echo 'não tem idade pra participar';
}
