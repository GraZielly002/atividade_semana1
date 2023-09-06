<?php
    $nome = $_POST["campoNome"];
    $social = $_POST["campoSocial"];
    $email = $_POST["campoEmail"];
    $assunto = $_POST["campoAssunto"];
    $genero = $_POST["genero"];
    $felicidade = $_POST["feliz?"];
    $voce = $_POST["campoAbout"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <h1>Formulário preenchido (Respostas)</h1>
    <p><b>Nome:</b><?php echo $nome; ?></p>
    <p><b>Nome social:</b><?php echo $social; ?></p>
    <p><b>E-mail:</b><?php echo $email; ?></p>
    <p><b>Assunto:</b><?php echo $assunto; ?></p>
    <p><b>Gênero:</b><?php echo $genero; ?></p>
    <p><b>satisfação:</b><?php echo $felicidade; ?></p>
    <p><b>Sobre (Usuário):</b><?php echo $voce; ?></p>
</body>
</html>