<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
         <h1>Formulário de contato</h1>
        <form action="answer.php" method="post">
            <div>
                <label for="idNome" class="">Nome:</label>
                <input type="text" name="campoNome" placeholder="Digite seu nome" id="idNome" class="">
            </div>
            <div>
                <label for="idSocial" class="">Nome social:</label>
                <input type="text" name="campoSocial" placeholder="Digite seu nome" id="idSocial" class="">
            </div>
            <div>
                <label for="idEmail" class="">E-mail:</label>
                <input type="email" name="campoEmail" placeholder="Brunagatinha<3@gmail.com" id="idEmail" class="">
            </div>
            <div>
                <label for="idAssunto" class="">Assunto:</label>
                <input type="text" name="campoAssunto" id="idAssunto" class="">
            </div>
            <div>
                <label><h2>Qual seu gênero?</h2></label>
                <label>
                    <input type="radio" name="genero" value="Feminino"> Feminino
                </label>
                    <br>
                <label>
                    <input type="radio" name="genero" value="Masculino"> Masculino
                </label>
                    <br>
                <label>
                    <input type="radio" name="genero" value="Outro"> Outro
                </label>
            </div>
                <br>
            <div>
                <label for="feliz?">Qual seu nivel de satisfação:</label>
                    <select name="feliz?" id="feliz?">
                        <option value="Feliz">Feliz</option>
                        <option value="Bom">Bom</option>
                        <option value="Mediano">Mediano</option>
                        <option value="Insatisfeito">Insatisfeito</option>
                    </select>
            </div>
                <br>
            <div class="">
                <label for="idAbout">Nos conte um pouco sobre você:</label>
                    <br>
                    <br>
                <textarea name="campoAbout" id="idAbout" class="" rows="6"></textarea>
            </div>
                <br>
            <button type="submit" class="">Enviar</button>
        </form>
    </div>
</body>
</html>