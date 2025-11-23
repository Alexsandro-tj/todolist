<?php 
include('conexao.php');
isset($_POST['inputedit']);
isset($_GET['id']);
$id = $_GET['id'];
$inputedit = $_POST['inputedit'];

$sql = "UPDATE list_task SET task= '$inputedit' WHERE id= $id";
if($registro = mysqli_query($conexao,$sql))
    {
    echo "Tarefa Alterado com Sucesso!";
}
header('location:index.php')
?>