<?php
session_start();
include('conexao.php');

if(empty($_POST['cnpj']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['cnpj']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	sleep(1);	
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	$_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreto!</div>";
	header('Location: index.php');
	exit();
}