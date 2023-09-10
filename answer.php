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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-transparent text-bod ">
    <div class="container p-3 mb-2 bg-light text-dark rounded-4 card">
    <div class="card-header container text-center p-3 mb-2 bg-light text-dark"><h1>Formulário preenchido (Respostas)</h1></div>
    <p><b>Nome:</b><?php echo $nome; ?></p>
    <p><b>Nome social:</b><?php echo $social; ?></p>
    <p><b>E-mail:</b><?php echo $email; ?></p>
    <p><b>Assunto:</b><?php echo $assunto; ?></p>
    <p><b>Gênero:</b><?php echo $genero; ?></p>
    <p><b>satisfação:</b><?php echo $felicidade; ?></p>
    <p><b>Sobre (Usuário):</b><?php echo $voce; ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>