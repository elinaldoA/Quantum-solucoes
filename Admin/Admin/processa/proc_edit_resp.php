<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id                 = $_POST["id"];
$nome 				= $_POST["nome"];
$resposta 				= $_POST["resposta"];
//insere os dados do usuario no banco
$sql = mysqli_query($conectar,"UPDATE responder_comentarios set nome='$nome', respostas='$resposta' WHERE id='$id'") or die("Erro ao tentar modificar registro" .mysqli_error($conectar));
//verifica se aas linhas estão preenchidas e retorna os dados listados
if(mysqli_affected_rows($conectar) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=12'>
	<script type=\"text/javascript\">
	alert(\"Resposta editada com sucesso.\");
	</script>";
}else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=12'>
	<script type=\"text/javascript\">
	alert(\"A resposta não foi editada com sucesso.\");
	</script>";
}
?>
