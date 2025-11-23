<?php
include('conexao.php');
isset($_GET['id']);
$id = $_GET['id'];
$task = $_GET['task'];
echo"<head>"."<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>"."</head>";
echo"<div class=' d-flex  justify-content-between position-absolute top-50 start-50 translate-middle'>";
echo"<form action='editor.php?id=".$id."'"."method='POST'>";
echo"<div>"."<input type='text' name='inputedit'" ."value='".$task."'"."class='form-control' required>"."</div>";
echo"<div>"."<input type='submit' value='Editar' class='btn btn-primary'>"."</div>"; 
echo"</form>"."</div>";



?>
