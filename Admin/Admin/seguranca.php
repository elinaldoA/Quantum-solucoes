<?php
ob_start();
if (($_SESSION['email'] == "" ) || ($_SESSION['senha'] == "" )){
	unset($_SESSION['email'],
          $_SESSION['senha']);
	//Mensagem de erro
	$_SESSION['loginErro'] = "Área restrita para usuários cadastrados";
	//Redireciona o usuário para a tela de login
	header("Location: login.php");
}
?>