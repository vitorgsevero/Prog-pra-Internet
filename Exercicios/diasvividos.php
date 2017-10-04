<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Exibição dos dias vividos </title>
	</head>

	<body>

	<?php
	
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$ano = 365;

	if (!(is_numeric($idade))){

			print ("Os valores informados são inválidos.");

		}else{
			
			$totaldias = $idade * $ano;

			print ("<b>" . $nome . ", seu total de dias vividos: </b>" . $totaldias . "<br>");
			print ("<b>Nome digitado: </b>" . $nome . "<br>");
			print ("<b>Idade digitada: </b>" . $idade);

		}

	?>	

	</body>
</html>