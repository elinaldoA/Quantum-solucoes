<?php
session_start();
//include_once("../seguranca.php");
include_once("../conexao.php");
$id                 = $_POST["id"];
$nome 				= $_POST["nome"];
$email 				= $_POST["email"];
$senha 				= $_POST["senha"];
$confirma			= $_POST["confirma"];
//insere os dados do usuario no banco
$sql = mysqli_query($conectar,"UPDATE registrar_usuarios set nome='$nome', email='$email', senha='$senha', confirmar_senha='$confirma' WHERE id='$id' ") or die("Erro ao tentar modificar registro" .mysqli_error($conectar));
//verifica se aas linhas estão preenchidas e retorna os dados listados
if(mysqli_affected_rows($conectar) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://localhost/Quantum/Admin/index.php?link=2'>
	<script type=\"text/javascript\">
	alert(\"Usuário editado com sucesso.\");
	</script>";
}else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://localhost/Quantum/Admin/index.php?link=2'>
	<script type=\"text/javascript\">
	alert(\"Usuário não foi editado com sucesso.\");
	</script>";
}
?>
