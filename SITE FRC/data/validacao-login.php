<?php 
//include_once('conexao.php');
//session_start();

if(empty($_POST['login']) || empty($_POST['password'])) {
	header('Location: ../login.php');
	exit();
}
 
$login = $_POST['login']

$senha = $_POST['password']

//$login = mysqli_real_escape_string($conexao, $_POST['login']);
//$senha = mysqli_real_escape_string($conexao, $_POST['password']);
 
$login_adm = "colossus"
$senha_adm = "123"

if ($login == $login_adm && $senha == $senha_adm ){
    header('Location:../view/home-usuario.html')

}else {
    header ('Location: ../view/index.html')
}

//$query = "select * from tecnico where login = '{$login}' and senha = '{$senha}'";
 
//result = mysqli_query($conexao, $query);
 
//$row = mysqli_num_rows($result);
 
//if($row >0) {
//	$_SESSION['login'] = $login;
	//header('Location: ../inicio.php');
//} else {
//	$_SESSION['nao_autenticado'] = true;
//	header('Location: ../login.php');
//	exit();
//}
//?>