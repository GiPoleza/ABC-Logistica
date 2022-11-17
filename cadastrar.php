<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['razao-social']));
$cnpj = mysqli_real_escape_string($conexao, trim($_POST['cnpj']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$cnpj'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	$_SESSION['msg'] = "<div class='alert alert-danger'>CNPJ Já cadastrado em nosso sitema</div>";
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, email, data_cadastro) VALUES ('$nome', '$cnpj', '$senha', '$usuario', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.php');
exit;
?>