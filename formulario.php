<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box_login">
        <div class="box_int">
            <h1>Preencha Este Formulário</h1>
            <form action="cadastro_usuario.php" method="POST">
                <label for="">Nome: </label>
                <input type="text" name="nome_usuario" required>
                <br><br>
                <label for="">E-mail: </label>
                <input type="email" name="email" required>
                <br><br>
                <label for="">Senha: </label>
                <input type="password" name="password" required>
                <br><br>
                <input class="submit" type="submit" value="Enviar">
        </div>
    </div>
    </form>
</body>

</html>