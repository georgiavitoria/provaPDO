<?php
	include_once "/config/conn.php";

	$nome=$_POST[nome];
	$email=$_POST[email];
	$senha=$_POST[senha];

	$stmt=$conectar->prepare("UPDATE usuarios(:nome,:email,:senha); VALUES(:NOME,:EMAIL,:SENHA);");

	//troca
	$stmt->bind_param(:nome,$nome);
	$stmt->bind_param(:email,$email);
	$stmt->bind_param(:senha,$senha);

	//executa

	$stmt->execute();
		echo="Usuário Cadastrado";
?>