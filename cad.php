<?php

	$para="cpd@quantum-es.com.br";
	$assunto="Orçamentos Quantum";

	$nome= $_POST['nome'];
	//$subject= $_POST['subject'];
	$email= $_POST['email'];
	$Tel= $_POST['Tel'];
	$ind = $_POST['ind'];
	$Dsocial= $_POST['Dsocial'];
	$cnpj= $_POST['cnpj'];
	$InscE= $_POST['InscE'];
	$Aprin= $_POST['Aprin'];
	$Ftrib= $_POST['Ftrib'];
	$Ttrib= $_POST['Ttrib'];
	$Memp= $_POST['Memp'];
	$Aicms= $_POST['Aicms'];
	$Qtf= $_POST['Qtf'];
	$QMadm= $_POST['QMadm'];
	$QDem= $_POST['QDem'];
	$Rdp= $_POST['Rdp'];
	$Rdc= $_POST['Rdc'];
	$Rdf= $_POST['Rdf'];
	$Tpcons= $_POST['Tpcons'];
	$ACons= $_POST['ACons'];
	$QtnfE= $_POST['QtnfE'];
	$Qtnfs= $_POST['Qtnfs'];
	$Qtmfs= $_POST['Qtmfs'];
	$Qtch= $_POST['Qtch'];
	$Qtdc= $_POST['Qtdc'];
	$Qtex= $_POST['Qtex'];
	$QtexC= $_POST['QtexC'];
	$Pd= $_POST['Pd'];
	$Sret= $_POST['Sret'];
	$Nsis= $_POST['Nsis'];
	$SretI= $_POST['SretI'];
	$NsisI= $_POST['NsisI'];
	$Ns= $_POST['Ns'];
	$Sarq= $_POST['Sarq'];
	$obs= $_POST['obs'];
	$SEs= $_POST['SEs'];
	$Salt= $_POST['Salt'];
	$Opc= $_POST['Opc'];
	$Sarqs= $_POST['Sarqs'];
	$Arqs= $_POST['Arqs'];
	$Pser= $_POST['Pser'];
	$Tribu= $_POST['Tribu'];
	/*echo $assunto."<br>";
	echo $nome."<br>";
	echo $email."<br>";
	echo $msg."<br>";*/

	$corpo= "<strong>Mensagem de contato</strong><br><br>";
	$corpo.= "<strong>Nome: </strong> $nome";
	//$corpo.= "<br><strong>Assunto: </strong> $subject";
	$corpo.= "<br><strong>Email: </strong> $email";
	$corpo.= "<br><strong>Contato: </strong> $contato";
	$corpo.= "<br><strong>Indicado por: </strong> $ind";
	$corpo.= "<br><strong>Denominação social: </strong> $Dsocial";
	$corpo.= "<br><strong>CNPJ: </strong> $cnpj";
	$corpo.= "<br><strong>Inscrição social: </strong> $InscE";
	$corpo.= "<br><strong>Atividade principal: </strong> $Aprin";
	$corpo.= "<br><strong>Forma de tributação: </strong> $Ftrib";
	$corpo.= "<br><strong>Há quanto tempo nesta tributação?: </strong> $Ttrib";
	$corpo.= "<br><strong>Faturamento médio mensal?: </strong> $Ttrib";
	$corpo.= "<br><strong>Apura icms na propria empresa?: </strong> $Aicms";
	$corpo.= "<br><strong>Quantidade de funcionários: </strong> $Qtf";
	$corpo.= "<br><strong>Quantidae de admissões: </strong> $QMadm";
	$corpo.= "<br><strong>Quantidade de demissões: </strong> $QDem";
	$corpo.= "<br><strong>Existe algum responsável pelo departamento pessoal?: </strong> $Rdp";
	$corpo.= "<br><strong>Existe pessoa responsável pela organizamentos enviados à contabilidade?: </strong> $Rdc";
	$corpo.= "<br><strong>Existe pessoa treinada para a digitação de notas fiscais?(tributação): </strong> $Rdf";
	$corpo.= "<br><strong>Possui algum tipo de consultoria? Em qual àrea?: </strong> $Tpcons";
	$corpo.= "<br><strong>Àrea: </strong> $ACons";
	$corpo.= "<br><strong>Quantidade média de notas fiscais de entrada: </strong> $QtnfE";
	$corpo.= "<br><strong>Quantidade média notas fiscais de saída: </strong> $Qtnfs";
	$corpo.= "<br><strong>Quantidade média de notas fiscais de serviço: </strong> $Qtmfs";
	$corpo.= "<br><strong>Quantidade de checkouts: </strong> $Qtch";
	$corpo.= "<br><strong>Quantidade média de documentos pagos mensalmente: </strong> $Qtdc";
	$corpo.= "<br><strong>Quantidade de extratos bancários: </strong> $Qtex";
	$corpo.= "<br><strong>Quantidade de extratos de cartão de crédito: </strong> $QtexC";
	$corpo.= "<br><strong>A empresa emite protocolo de documentação enviada: </strong> $Pd";
	$corpo.= "<br><strong>O sistema é integrado com a frente de loja, se for o caso : </strong> $SretI";
	$corpo.= "<br><strong>Nome: </strong> $NsisI";
	$corpo.= "<br><strong>Nome: </strong> $Ns";
	$corpo.= "<br><strong>O sistema gera arquivos txt de contas "a pagar" ou "a receber": </strong> $Sarq";
	$corpo.= "<br><strong>Obs: </strong> $Obs";
	$corpo.= "<br><strong>O sistema gera arquivos txt de notas fiscais de entrada, saída e ECF se for o caso: </strong> $SEs";
	$corpo.= "<br><strong>Obs </strong> $Obes";
	$corpo.= "<br><strong>Há perpesctiva de alteração de sistema: </strong> $Salt";
	$corpo.= "<br><strong>Qual: </strong> $Opc";
	$corpo.= "<br><strong>O sistema gera arquivo sintegra: </strong> $Sarqs";
	$corpo.= "<br><strong>O arquivo é enviado através da empresa: </strong> $Arqs";
	$corpo.= "<br><strong>Inicio da prestação de serviços contábeis: </strong> $Tribu";
	$corpo.= "<br><strong>Tributação</strong> $SEs";

	$header= "Content-Type: text/html; charset= utf-8\n";
	$header.="From: $email Replay-to: $email\n";
	
	@mail($para,$assunto,$corpo,$header);

	header("location:contato.php?$mensagem=enviado");

?>