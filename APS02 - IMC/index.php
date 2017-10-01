<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">	
		<title>Calculando IMC</title>
		<link rel="stylesheet" type="text/css" href="">
	</head>

	<body>

	<h1>CALCULANDO O IMC</h1>

	<table>	<!--PRIMEIRO FORMULÁRIO-->

		<form action="imc.php" method="post">

			<tr>
				<td>
					Informe seu nome:
				</td>

				<td>
					<input type="text" name="nome1" size="20" required> 
				</td>
			</tr>

			<tr>
				<td>
					Informe a data de nascimento:
				</td>

				<td>
					<input type="number" name="datanascimento1" size="5" required> 
				</td>
			</tr>

			<tr>
				<td>
					Informe seu sexo:
				</td>

				<td>
					<select name="sexo1">
						<option value="masc1" selected> Masculino <br></option>
						<option value="fem1"> Feminino <br></option>					
						</select>
				</td>
			</tr>



			<tr>
				<td>
					Informe sua altura:
				</td>

				<td>
					<input type="number" name="altura1" size="5" required> m 
				</td>
			</tr>	

			<tr>
				<td>
					Informe seu peso:
				</td>
				<td>
					<input type="number" name="peso1" size="5" required> kg
				</td>
			</tr>	

			</tr>

			<!--SEGUNDO FORMULÁRIO-->


			<tr>
				<td>
					Informe seu nome:
				</td>

				<td>
					<input type="text" name="nome2" size="20" required> 
				</td>
			</tr>

			<tr>
				<td>
					Informe a data de nascimento:
				</td>

				<td>
					<input type="number" name="datanascimento2" size="5" required> 
				</td>
			</tr>

			<tr>
				<td>
					Informe seu sexo:
				</td>

				<td>
					<select name="sexo2">
						<option value="masc2" selected> Masculino </option>
						<option value="fem2"> Feminino </option>					
						</select>
				</td>
			</tr>

			<tr>
				<td>
					Informe sua altura:
				</td>

				<td>
					<input type="number" name="altura2" size="5" required> m 
				</td>
			</tr>	

			<tr>
				<td>
					Informe seu peso:
				</td>
				<td>
					<input type="number" name="peso2" size="5" required> kg
				</td>
			</tr>	

			<!--TERCEIRO FORMULÁRIO-->

			<tr>
				<td>
					Informe seu nome:
				</td>

				<td>
					<input type="text" name="nome3" size="20" required> 
				</td>
			</tr>

			<tr>
				<td>
					Informe a data de nascimento:
				</td>

				<td>
					<input type="number" name="datanascimento3" size="5" required> 
				</td>
			</tr>

			<tr>
				<td>
					Informe seu sexo:
				</td>

				<td>
					<select name="sexo3">
						<option value="masc3" selected> Masculino <br></option>
						<option value="fem3"> Feminino <br></option>					
						</select>
				</td>
			</tr>



			<tr>
				<td>
					Informe sua altura:
				</td>

				<td>
					<input type="number" name="altura3" size="5" required> m 
				</td>
			</tr>	

			<tr>
				<td>
					Informe seu peso:
				</td>
				<td>
					<input type="number" name="peso3" size="5" required> kg
				</td>
			</tr>	

			<tr>
				<td> 
					<input type="submit" value="Calcular IMC">
					<input type="reset" value="Limpar Valores">
				</td>
			</tr>
			

		</form>	

	</table>

	</body>

</html>
