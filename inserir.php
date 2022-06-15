<?php
	include_once "/config/conn.php";

$sql=INSERT usuarios(nome,email,senha); VALUES($nome,$email,$senha);
$conectar->Query ($sql);
$conectar->close;
	echo="conexão realizada com sucesso."

	//nome,email,senha
	$tabela="aluno";
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];

	//prepare
	$stmt=$conectar->prepare("INSERT INTO users (nome, email, senha); VALUES(:NOME,:EMAIL,:SENHA)");

	//Troca (bind_param)
	$stmt->bind_param(:NOME,$nome);
	$stmt->bind_param(:EMAIL,$email);
	$stmt->bind_param(:SENHA,$senha);

	//Executa

	$stmt->execute();
		echo="Usuário Cadastrado";
?>