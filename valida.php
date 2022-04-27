<?php
	session_start();
	$i = 0;
	$validacaologin = 0;
	//Incluindo a conexão com banco de dados
	//include 'conexao/conexaosqlserver.php';	
	//O campo usuário e senha preenchido entra no if para validar
	
	//ARRAY DE LOGIN E SENHA
	$users= array("IGOR", "LUKAS", "HADRIA", "MARI");
	$passwords= array("456", "123", "123", "123");
	
	if((isset($_POST['user'])) && (isset($_POST['senha']))){
		$userlogin =  strtoupper($_POST['user']);
		$senhalogin = strtoupper($_POST['senha']);
		echo $userlogin;
		echo $senhalogin;
	}
	
	
	foreach ($users as $user) {
		
		if ($userlogin == $user){
			
			if($senhalogin == $passwords[$i]){
				$validacaologin = 1;
				$_SESSION['user'] = $userlogin;
				header("Location: main.php");
			}
		}
	$i = $i + 1;
    }
	if($validacaologin == 0){
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
	
?>