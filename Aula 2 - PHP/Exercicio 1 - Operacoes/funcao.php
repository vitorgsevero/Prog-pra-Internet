<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>Função com as operações</title>
	</head>

	<body>

	<?php

	$codigo=$_POST['codigo'];


	function multiplicavalores(){

		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		
		$multi = ($a * $b * $c);

		 return $multi;

	}

	function somavalores(){

		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		
		$soma = ($a + $b + $c);

		 return $soma;

	}

	function subtracaovalores (){

		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		
		$subtracao = ($a - $b - $c);

		 return $subtracao;

	}

	function somamultiplica(){

		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		
		$somamulti = (($a + $b + $c)*($produto = 10));

		 return $somamulti;

	}

	function somadivide(){

		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		
		$somadivide = (($a + $b + $c)/($divisor = 10));

		 return $somadivide;

	}


	switch ($codigo) {

		case '1':

			echo("Multiplicação dos valores: " . multiplicavalores());

			break;

		case '2':

			echo("<br>Soma dos valores: " . somavalores());

			break;

		case '3':

			echo("<br>Subtração dos valores: " . subtracaovalores());

			break;

		case '4':
			

			echo("<br>Soma e multiplicação por 10: " . somamultiplica());

			break;

		case '5':
		
			echo("<br><h1>Soma e divisão por 10: " . somadivide());

			break;

		default:
		
			echo("Código Inválido. Digite Novamente...");	

			break;
	}

	?>

	</body>

</html>