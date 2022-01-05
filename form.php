<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>FORMULÁRIO PATA INSCRIÇÃO DE COMPETIDORES</p>
    <form action='script.php' method='post'>
        <?php
        $mensagemDeErro = isset($_SESSION["mensagem-de-erro"]) ? $_SESSION["mensagem-de-erro"] : "";
        if (!empty($mensagemDeErro)) {
            echo $mensagemDeErro;
        }
        $mensagemDeSucesso = isset($_SESSION["mensagem-de-sucesso"]) ? $_SESSION["mensagem-de-sucesso"]:"";
        if(!empty($mensagemDeSucesso)){
            echo($mensagemDeSucesso);
        }
        ?>
        <p> Your Name: <input type="text" name="name" /></p>
        <p>Your Age: <input type="text" name="age" /></p>
        <p><input type="submit" name="" /></p>

    </form>
</body>

</html>