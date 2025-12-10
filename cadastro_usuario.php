<?php 
include("conexao.php");
$nome = $_POST['nome_usuario'];
$email = $_POST['email'];
$senha = password_hash($_POST['$password'], PASSWORD_DEFAULT, ['cost' => 10]);
$sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')";

if (mysqli_query($conexao,$sql)){
    echo"deu certo";
}
else{
    echo"deu ruim";
}
mysqli_close($conexao);
header('location:login.php');
?>