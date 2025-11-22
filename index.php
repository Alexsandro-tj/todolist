<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Lista To Do</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=delete" />

    
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
                        <th scope='col'>Alt</th>
                    </tr>
                </thead>
                <tbody>";
            if ($resultado = mysqli_query($conexao, $sql)) {
                while ($registro = mysqli_fetch_assoc($resultado)) {
                    echo "<tr><th scope='row'>" . $registro['id'] . "</th>" . " <td>" . $registro['task'] . "</td>" . "<td>" ."<a href='delete.php?id=" .$registro['id']. "'>"  . "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
  <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
</svg>"."</a>" . "</td>" . "</tr>";
                }
            }
            echo "</tbody>";
            echo "</table>";
            ?>
        </div>
    </div>
    <script>
        function mostrarMensagem() {
            alert("Alteração Realizada Com Sucesso!");
        }
    </script>
</body>

</html>