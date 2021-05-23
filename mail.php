<?php

	$para="cpd@quantum-es.com.br";
	$assunto="Contato pelo site";

	$fname= $_POST['fname'];
	$subject= $_POST['subject'];
	$email= $_POST['email'];
	$msg= $_POST['msg'];

	echo $assunto."<br>";
	echo $nome."<br>";
	echo $email."<br>";
	echo $msg."<br>";

	$corpo= "<strong>Mensagem de contato</strong><br><br>";
	$corpo.= "<strong>Nome: </strong> $fname";
	$corpo.= "<br><strong>Assunto: </strong> $subject";
	$corpo.= "<br><strong>Email: </strong> $email";
	$corpo.= "<br><strong>Mensagem: </strong> $msg";

	$header= "Content-Type: text/html; charset= utf-8\n";
	$header.="From: $email Replay-to: $email\n";
	
	@mail($para,$assunto,$corpo,$header);

	header("location:contato.php?$mensagem=enviado");

?>