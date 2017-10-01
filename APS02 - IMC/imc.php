<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>imc</title>
	</head>

	<body>

	<?php

	/*$nome[0]=$_POST['nome1'];
	$nome[1]=$_POST['nome2'];
	$nome[2]=$_POST['nome3'];*/



	$nome = array($_POST['nome1'], $_POST['nome2'], $_POST['nome3']);
	$dtnasc = array($_POST['datanascimento1'], $_POST['datanascimento2'], $_POST['datanascimento3']);
	$sexo = array($_POST['sexo1'], $_POST['sexo2'], $_POST['sexo3']);
	$altura = array($_POST['altura1'], $_POST['altura2'], $_POST['altura3']);



	function testeNome($nome){

			echo ("$nome[0]<br>");
			echo ("$nome[1]<br>");
			echo ("$nome[2]<br>");
	}

	function testeDtNasc($dtnasc){

			echo ("$dtnasc[0]<br>");
			echo ("$dtnasc[1]<br>");
			echo ("$dtnasc[2]<br>");

	}







	testeNome($nome);
	testeDtNasc($dtnasc);


	?>

	</body>

</html>