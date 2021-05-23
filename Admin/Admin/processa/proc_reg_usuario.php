<?php
session_start();
//include_once("../seguranca.php");
include_once("../conexao.php");
$nome 		= $_POST['nome'];
$email 		= $_POST['email'];
$senha 		= $_POST['senha'];
$confirma 	= $_POST['confirma'];
//insere os dados do usuario no banco
$sql = mysqli_query($conectar,"INSERT INTO registrar_usuarios(nome, email, senha, confirmar_senha)
VALUES ('$nome', '$email', '$senha', '$confirma')") or die("Erro ao tentar cadastrar registro" .mysqli_error($conectar));
//verifica se aas linhas estão preenchidas e retorna os dados listados
if(mysqli_affected_rows($conectar) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://localhost/Quantum/Admin/login.php?link=2'>
	<script type=\"text/javascript\">
	alert(\"Usuário registrado com sucesso.\");
	</script>";
}else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http:http://localhost/Quantum/Admin/registrar.php?link=2'>
	<script type=\"text/javascript\">
	alert(\"Usuário não foi registrado com sucesso.\");
	</script>";
}
?>
