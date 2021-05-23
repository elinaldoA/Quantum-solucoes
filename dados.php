<?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $arquivo = (isset($_FILES["arquivo"]));
 
// Para quem vai ser enviado o email
$para = "cpd@quantum-es.com.br";
 
$boundary = "XYZ-".date("dmYis")."-ZYX";
$fp = fopen($arquivo["tmp_name"], "r"); // abre o arquivo enviado
$anexo = fread($fp, filesize($arquivo["tmp_name"])); // calcula o tamanho
$anexo = base64_encode($anexo); // codifica o anexo em base 64
fclose($fp); // fecha o arquivo

// cabeçalho do email
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-Type: multipart/mixed; ";
$headers .= "boundary=".$boundary."\r\n";
$headers .= "$boundary\n";

// email
$mensagem  = "--$boundary\n";
$mensagem .= "Content-Type: text/html; charset='utf-8'\n";
$mensagem .= "<strong>Nome: </strong> $nome \r\n";
$mensagem .= "<strong>E-mail: </strong> $email \r\n";
$mensagem .= "<strong>Assunto: </strong> $assunto \r\n";
$mensagem .= "--$boundary \n";

// anexo
$mensagem .= "Content-Type: " .$arquivo["type"]. "; name=\"\" " .$arquivo['name']. " \n";
$mensagem .= "Content-Transfer-Encoding: base64 \n";
$mensagem .= "Content-Disposition: attachment; filename=\"\" " .$arquivo['name']. " \r\n";
$mensagem .= "$anexo \n";
$mensagem .= "--$boundary \n";

// enviar o email
mail($para, $assunto, $mensagem, $headers);

echo'
	<script>
	alert("Mensagem enviada com sucesso!");
	window.location.href = "https://quantumsolucoesempresariais.000webhostapp.com/";
	</script>
	';
?>