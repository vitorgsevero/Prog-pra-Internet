<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Média das notas </title>
	</head>

	<body>

		<?php

		$dia=date("d/m/Y");
		$hora=date("G:i");


		$prof = $_POST['prof'];
		$disci = $_POST ['disci'];
		$aluno = $_POST ['aluno'];
		$nota1 = $_POST ['nota1'];
		$peso1 = $_POST ['peso1'];
		$nota2 = $_POST ['nota2'];
		$peso2 = $_POST ['peso2'];
		$nota3 = $_POST ['nota3'];
		$peso3 = $_POST ['peso3'];

		if (!(is_numeric($nota1)) or !(is_numeric($peso1)) or !(is_numeric($nota2)) or !(is_numeric($peso2)) or !(is_numeric($nota3)) or !(is_numeric($peso3))){

			print ("Os valores informados são inválidos.");

		}else{

			$pesos = ($peso1 + $peso2 + $peso3);

			$media = (($nota1*$peso1) + ($nota2*$peso2) + ($nota3*$peso3))/$pesos;



			echo ("<br> Nome do Professor: " . $prof);
			echo ("<br> Nome da Disciplina: " . $disci);
			echo "<br>";
			echo ("<br> Nome do Aluno: " . $aluno);
			echo ("<br> Média Ponderada: " . $media);
			echo ("<br> Primeira nota informada: " . $nota1);
			echo ("<br> Segunda nota informada: " . $nota2);
			echo ("<br> Terceira nota informada: " . $nota3);

			print ("<br><br>Data e Hora:");
			print ("<br>".$dia);
			print ("<br>".$hora);

		}

		?>

	</body>

</html>