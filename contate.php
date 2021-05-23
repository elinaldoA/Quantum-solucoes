<?php

	$para="cpd@quantum-es.com.br";
	$assunto="Contato pelo site";

	$fname= $_POST['fname'];
	$email= $_POST['email'];
	$msg= $_POST['msg'];

	if(empty($fname)){
		$mensagem = 'O nome é obrigatório';
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$mensagem = 'Digite um email valido';
	}elseif (empty($msg)) {
		$mensagem = 'A mensagem é obrigatória';
	}
	$corpo= "<strong>Mensagem de contato</strong><br><br>";
	$corpo.= "<strong>Nome: </strong> $fname";
	$corpo.= "<br><strong>Email: </strong> $email";
	$corpo.= "<br><strong>Mensagem: </strong> $msg";

	$header= "Content-Type: text/html; charset= utf-8\n";
	$header.="From: $email Replay-to: $email\n";
	
	@mail($para,$assunto,$corpo,$header);

	echo'
	<script>
	alert("Mensagem enviada com sucesso!");
	window.location.href = "index.php";
	</script>
	';
?>