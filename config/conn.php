<?php

	//try{
	//$connect=newPDO(mysql:host="localhost"; user="user"; dbname="usuario".$database, $user, $pass);
//}
	//catch(exception $e){
	//	echo "erro:" . $e ->getmenssage();

	//}
//servidor,login,senha, email, dados

$host="localhost";
$user="aluno@gmail.com";
$pass="12345";
$database="senai";

try
{
connect=newPDO("mysql:host=" . $host . "; dbname=" . $database, $user, $pass);
	echo "conexão realizada com sucesso."
}
catch (exception $e){
	echo "erro". $e->getmessage();
}
?>
