<?php
session_start();
//include_once("../seguranca.php");
include_once("../conexao.php");
$id                 = $_POST["id"];
$autor 				= $_POST["autor"];
$titulo 			= $_POST["titulo"];
$conteudo 			= $_POST["conteudo"];

$titulo 	= $_POST["titulo"];
$autor 		= $_POST["autor"];
$conteudo   = $_POST["conteudo"];

$nome_imagem = $_FILES["imagem"]["name"];
$nome_temporal = $_FILES["imagem"]["tmp_name"];
$tipo_arquivo = $_FILES["imagem"]["type"];

if ($nome_imagem == "") {
	$sql = mysqli_query($conectar,"UPDATE eventos set autor='$autor', titulo='$titulo', conteudo_completo='$conteudo' WHERE id='$id'") or die("Erro ao tentar modificar registro" .mysqli_error($conectar));
}else{
	
	if (isset($_FILES['imagem'])) {
		$resultado=mysqli_query($conectar,"SELECT * FROM eventos ORDER BY 'id'");
  		$linhas=mysqli_num_rows($resultado);

  		if ($nome_imagem == "image/jpeg" || $tipo_arquivo == "image/jpg" || $tipo_arquivo == "image/png" || $tipo_arquivo == "image/gif") {
		move_uploaded_file($nome_imagem, $nome_temporal);
		echo "A imagem foi enviada com sucesso";
		}
		$destino = "Blog/" . $nome_imagem;
			//insere os dados do usuario no banco
		$sql = mysqli_query($conectar,"UPDATE eventos set autor='$autor', imagem='$nome_imagem', titulo='$titulo', conteudo_completo='$conteudo' WHERE id='$id'") or die("Erro ao tentar modificar registro" .mysqli_error($conectar));
	}
}
//verifica se as linhas estão preenchidas e retorna os dados listados
if(mysqli_affected_rows($conectar) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://localhost/Quantum/Admin/index.php?'>
	<script type=\"text/javascript\">
	alert(\"Evento editado com sucesso.\");
	</script>";
}else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://localhost/Quantum/Admin/editar_posts.php?'>
	<script type=\"text/javascript\">
	alert(\"O evento não foi editado com sucesso.\");
	</script>";
}
?>
