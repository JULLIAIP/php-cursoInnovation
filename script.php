<?php
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

//print_r($categorias);

$nome = $_POST['name'];
$idade = $_POST['age'];

//verificar se ta vazio
if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = 'o nome não pode ser vazio';
    header('location: form.php');
}
//verificar se tamanho
else if (strlen($nome) > 50) {
    $_SESSION['mensagem-de-erro'] = 'o nome é muito extenso';
    header('location: form.php');
} else if (strlen($nome) < 3) {
    $_SESSION['mensagem-de-erro'] = 'o nome deve ter pelo menos 3 caractere';
    //redirecionando com location :
    header('location: form.php');
}
//verificar tipo
else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'Digite a idade erm números';
    header('location: form.php');
}

//informação sobre o tipo da variavel
var_dump($nome);
var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    $_SESSION['mensagem-de-sucesso'] = 'Parabéns , Você foi adcionado na categoria infantil';
    header('location: form.php');
    return;
} else if ($idade >= 13 && $idade < 18) {
    $_SESSION['mensagem-de-sucesso'] = 'Parabéns , Você foi adcionado na categoria adolescente';
    header('location: form.php');
    return;
} else if ($idade > 18) {
    $_SESSION['mensagem-de-sucesso'] = 'Parabéns , Você foi adcionado na categoria adulto';
    header('location: form.php');
    return;
} else {
    $_SESSION['mensagem-de-sucesso'] = 'Você não tem idade pra participar';
    header('location: form.php');
    return;
}
