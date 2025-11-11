<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Lista To Do</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-secondary text-white">

    <div>
        <div class="container text-center">
            <h1>Lista de Tarefas</h1>
            <form action="cadastro.php" method="POST">
                <div class="d-flex justify-content-between">
                    <input type="text" name="entrada" id="" placeholder="Adicione sua tarefa" class="form-control" required>
                    <input type="submit" value="Cadastrar" class="btn btn-primary" onclick="mostrarMensagem()">
                </div>
            </form>
        </div>
        <div>
            <?php
            /* Neste trcho de código a seguir, foi feita a iserção de conexão com o mysql, depois foi feita a consulta de registros no database. Nas linha 38 ao 45 foi feita o inicio da tabela para apresentar em tela os dados. Após isso foi feita a consulta para retornar as linhas de registro no database, sendo feito loopins para poder aprensentar cada linha registrada no database */
            include('conexao.php');
            $sql = "select id, task from list_task order by id ASC";

            echo "<table class='table table-dark table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Tarefa</th>
                    </tr>
                </thead>
                <tbody>";
            if ($resultado = mysqli_query($conexao, $sql)) {
                while ($registro = mysqli_fetch_assoc($resultado)) {

                    echo "<tr><th scope='row'>" . $registro['id'] . "</th>" . " <td>" . $registro['task'] . "</td>" . "</tr>";
                }
            }
            echo "</tbody>";
            echo "</table>";
            ?>
        </div>
    </div>
<script>
    function mostrarMensagem (){
        alert ("Alteração Realizada Com Sucesso!");
    }
    
</script>
</body>

</html>