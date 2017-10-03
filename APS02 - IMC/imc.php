<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>imc</title>
	</head>

	<body>

	<?php

	$nome = array($_POST['nome1'], $_POST['nome2'], $_POST['nome3']);
	$dtnasc = array($_POST['datanascimento1'], $_POST['datanascimento2'], $_POST['datanascimento3']);
	$sexo = array($_POST['sexo1'], $_POST['sexo2'], $_POST['sexo3']);
	$altura = array($_POST['altura1'], $_POST['altura2'], $_POST['altura3']);
	$peso = array($_POST['peso1'], $_POST['peso2'], $_POST['peso3']);


	function testeNome($nome){

		for ($i=0; $i<3; $i++){

			echo ("$nome[$i]<br>");

		}
	}

	function testeDtNasc($dtnasc){

		for ($i=0; $i<3; $i++) { 
			
			echo("<br>$dtnasc[$i]");
		}

	}

	function calculaIMC($altura, $peso){

		for ($i=0; $i<3; $i++) { 
		
			echo ("$altura[$i]");
			echo ("$peso[$i]");

		}


	}

	testeNome($nome);
	testeDtNasc($dtnasc);
	calculaIMC($altura, $peso);

	?>

	<BR>
	<a href="index.php"> VOLTAR PARA A PÁGINA INICIAL </a>

	</body>

</html>