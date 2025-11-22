<?php
include("conexao.php");
isset($_GET['id']);
$id = $_GET['id'];
$sql = "delete from list_task where id=$id";
if($resultado = mysqli_query($conexao,$sql)){
    echo "Registro Apagado com Sucesso!";
}
header("location:index.php");
?>