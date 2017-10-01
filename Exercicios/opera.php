<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Página com os resultados das operações</title>
	</head>

	<body>

		<?php

		$num1=$_POST['num1'];
		$num2=$_POST['num2'];

		if (!(is_numeric($num1)) or !(is_numeric($num2))){

			print ("Os valores informados são inválidos.");

		}else{

			$soma = $num1 + $num2;

			echo ("<b>Soma dos valores:</b> " . $soma . "<br>");

			$multiplicacao = $num1 * $num2;



			echo ("<b>Multiplicação:</b> " . $multiplicacao . "<br>");

			$subtracao = $num1 - $num2;

			echo ("<b>Subtração:</b> " . $subtracao . "<br>");

			$divisao = $num1 / $num2;

			echo ("<b>Divisão:</b> " . $divisao . "<br>");

			echo ("<br><b>Primeiro valor informado:</b> " . $num1);

			echo ("<br><b>Segundo valor informado:</b> " . $num2);

		}


		?>

	</body>

</html>