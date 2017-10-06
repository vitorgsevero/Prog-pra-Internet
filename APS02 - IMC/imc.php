<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>IMC</title>
		<link rel="stylesheet" type="text/css" href="styleimc.css">
	</head>

	<body>

	<h1> RESULTADO DO CÁLCULO DO SEU IMC</h1>


	<table>

	<tr>
		<th>
			 Categoria
		</td>

		<th>
			 IMC
		</td>
	</tr>

	<tr>
		<td>
			Abaixo do Peso
		</td>

		<td>
			Abaixo de 18,5
		</td>
	</tr>

	<tr>
		<td>
			Peso Normal
		</td>

		<td>
			18,5 até 24,9
		</td>

	</tr>

	<tr>
		<td>
			Sobrepeso
		</td>

		<td>
			25,0 até 29,9
		</td>
	</tr>

	<tr>
		<td>
			Obesidade Grau I
		</td>

		<td>
			30,0 até 34,9
		</td>
	</tr>

	<tr>
		<td>
			Obesidade Grau II
		</td>
		<td>
			35,0 até 39,9
		</td>

	</tr>

	<tr>
		<td>
			Obesidade Grau III
		</td>

		<td>
			40,0 e acima
		</td>
	</tr>

	</table>

		<?php

	$nome = array($_POST['nome1'], $_POST['nome2'], $_POST['nome3']);
	$dtnasc = array($_POST['datanascimento1'], $_POST['datanascimento2'], $_POST['datanascimento3']);
	$sexo = array($_POST['sexo1'], $_POST['sexo2'], $_POST['sexo3']);
	$altura = array($_POST['altura1'], $_POST['altura2'], $_POST['altura3']);
	$peso = array($_POST['peso1'], $_POST['peso2'], $_POST['peso3']);


		if (!(is_numeric($altura[0])) || !(is_numeric($altura[1])) || !(is_numeric($altura[2])) || !(is_numeric($peso[0])) || !(is_numeric($peso[1])) || !(is_numeric($peso[2]))){
			echo("Você não informou valores válidos!"); 
		}else{


	//FUNCÕES DE PROCESSAMENTO DAS ENTRADAS		

	function imprimeNome($nome){

		for ($i=0; $i<3; $i++) { 
			
			echo("<b><br>Nome do aluno " . $i . ": </b>" . $nome[$i]);
		}

	}		

	function imprimeDtNasc($dtnasc, $nome){

		for ($i=0; $i<3; $i++) { 
			
			echo("<br><b>" .$nome[$i] .  ", sua data de nascimento:</b>" .  $dtnasc[$i]);
		}

	}

	function calculaIMC($altura, $peso){ //imc=peso/altura2

		for ($i=0; $i<3; $i++) { 

			$imc[$i] = $peso[$i]/($altura[$i]*$altura[$i]);
		
			echo ("<b><br>IMC do aluno " . $i . ": </b>" . $imc[$i]);
		}

	function categoriaIMC($altura, $peso, $nome){

		for ($i=0; $i<3; $i++) {

			$imc[$i] = $peso[$i]/($altura[$i]*$altura[$i]); 

	
			if($imc[$i]<18.5){

				$categoria[$i] = "Abaixo do Peso";

				echo("<br><b>Categoria do ".$nome[$i].":</b> " . $categoria[$i]);

			}

			if($imc[$i]>=18.5 and $imc[$i]<24.9){

				$categoria[$i] = "Peso Normal";

				echo("<br><b>Categoria do ".$nome[$i].":</b> " . $categoria[$i]);

			}

			if($imc[$i]>=25.0 and $imc[$i]<29.9){

				$categoria[$i] = "Sobreso";

				echo("<br><b>Categoria do ".$nome[$i].":</b> " . $categoria[$i]);

			}

			if($imc[$i]>=30.0 and $imc[$i]<34.9){

				$categoria[$i] = "Obesidade Grau I";

				echo("<br><b>Categoria do ".$nome[$i].":</b> " . $categoria[$i]);

			}

			if($imc[$i]>=35.0 and $imc[$i]<39.9){

				$categoria[$i] = "Obesidade Grau II";

				echo("<br><b>Categoria do ".$nome[$i].":</b> " . $categoria[$i]);
			}

			if($imc[$i]>=40){

				$categoria[$i] = "Obesidade Grau II";

				echo("<br><b>Categoria do ".$nome[$i].":</b> " . $categoria[$i]);

			}

		}

	}	


	}

	//CHAMADAS DAS FUNÇÕES

	calculaIMC($altura, $peso);
	echo("<br>");
	categoriaIMC($altura, $peso, $nome);
	echo("<br>");
	imprimeDtNasc($dtnasc, $nome);
	echo("<br>");
	imprimeNome($nome);

}//fechamento do if else que verifica se os valores informados estão corretos para poder fazer o cálculo

	?>
	
	<br>
	<a href="index.php"> VOLTAR PARA A PÁGINA INICIAL </a>

	</body>

</html>