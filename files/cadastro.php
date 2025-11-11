
<?php 
include("conexao.php");
isset ($_POST['entrada']);
$tarefa = $_POST['entrada'];
$sql = "INSERT INTO list_task (task) VALUES ('$tarefa')";
if (mysqli_query($conexao,$sql))
 {
    echo"<h1>cadastro realizado com sucesso</h1>";
} else{
    echo "cadastro não realizdo!";
}
mysqli_close($conexao);
header("location: index.php");

?>