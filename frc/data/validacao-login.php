<?php 
include_once("conexao.php");

if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: ../view/index.html');
	exit();
}
 
//echo ($senha);

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);
 
$query = "select * from usuarios where login = '{$login}' and senha = '{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row >0) {
	$_SESSION['login'] = $login;
	header('Location: ../view/home-usuario.html');
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../view/index.html');
	exit();
}
?>