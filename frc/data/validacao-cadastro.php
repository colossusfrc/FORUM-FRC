<?php 
include_once("conexao.php");

if(empty($_POST['login2']) || empty($_POST['senha2']) || empty($_POST['equipe2'])) {
	header('Location: ../view/index.html');
	exit();
}


$login = mysqli_real_escape_string($conexao, $_POST['login2']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha2']);
$equipe = mysqli_real_escape_string($conexao, $_POST['equipe2']);

 
$query = "select * from usuarios where login = '{$login}'";

$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 

if($row >0) {
	header('Location: ../view/index.html');
} else {
	$sql = "INSERT INTO usuarios (login, senha, equipe) VALUES ('$login', '$senha','$equipe')";
    mysqli_query($conexao,$sql);
	exit();
}

mysqli_close($conexao);

?>