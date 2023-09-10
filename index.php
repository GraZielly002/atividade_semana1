<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-transparent text-bod">
    <div class="container p-3 mb-2 bg-light text-dark rounded-4">
         <h1 class="container text-center">Formulário de contato</h1>
        <form action="answer.php" method="post">
            <div>
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" name="campoNome" placeholder="Digite seu nome" id="idNome" class="form-control">
            </div>
            <br>
            <div>
                <label for="idSocial" class="form-label">Nome social:</label>
                <input type="text" name="campoSocial" placeholder="Digite seu nome" id="idSocial" class="form-control">
            </div>
            <br>
            <div>
                <label for="idEmail" class="form-label">E-mail:</label>
                <input type="email" name="campoEmail" placeholder="Brunagatinha<3@gmail.com" id="idEmail" class="form-control">
            </div>
            <br>
            <div>
                <label for="idAssunto" class="form-label">Assunto:</label>
                <input type="text" name="campoAssunto" id="idAssunto" class="form-control">
            </div>
            <br>
            <div class="form-check">
                <label><h2>Qual seu gênero?</h2></label>
                <br>
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="genero" value="Feminino"> Feminino
                </label>
                    <br>
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="genero" value="Masculino"> Masculino
                </label>
                    <br>
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="genero" value="Outro"> Outro
                </label>
            </div>
                <br>
            <div>
                <label for="feliz?">Qual seu nivel de satisfação:</label>
                    <select class="form-select" name="feliz?" id="feliz?">
                        <option value="Feliz">Feliz</option>
                        <option value="Bom">Bom</option>
                        <option value="Mediano">Mediano</option>
                        <option value="Insatisfeito">Insatisfeito</option>
                    </select>
            </div>
                <br>
            <div class="mb-3">
                <label for="idAbout">Nos conte um pouco sobre você:</label>
                    <br>
                    <br>
                <textarea name="campoAbout" id="idAbout" class="form-control" rows="6"></textarea>
            </div>
                <br>
            <button type="submit" class="btn btn-outline-info container text-center">Enviar</button>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </form>
    </div>
</body>
</html>