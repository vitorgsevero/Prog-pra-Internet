<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">	
		<title>Lancheria do SENAC</title>
	</head>

	<body>

	<table border="2" align="center">
		
		<tr>

			<th>
				Especificação
			</th>

			<th>
				Código       
			</th>

			<th>
				Preço
			</th>

		</tr>

		<tr>

			<td>
				Cachorro quente
			</td>

			<td>
				100
			</td>

			<td>
				R$ 4,00
			</td>

		</tr>

		<tr>

			<td>
				Bauru simples 
			</td>

			<td>
				101
			</td>

			<td>
				R$ 5,20
			</td>

		</tr>

		<tr>

			<td>
				Bauru com ovo 
			</td>

			<td>
				102
			</td>

			<td>
				R$ 5,80
			</td>

		</tr>

		<tr>

			<td>
				Cheese burger 
			</td>

			<td>
				104
			</td>

			<td>
				R$ 4,70
			</td>

		</tr>		

		<tr>

			<td>
				Refrigerante 
			</td>

			<td>
				105
			</td>

			<td>
				R$ 2,50
			</td>

		</tr>


	</table>

	
	<form action="funcaolanche.php" method="post">
		<br>
		Informe o código do Item desejado: <input type="number" name="codigo" size="5" required>
		<br>
		Informe a quantidade desejada: <input type="number" name="quantidade" size="5" required>
		<br><br>

		<input type="submit" value="Calcular valor do Pedido">
		<input type="reset" value="Cancelar Pedido">
	</form>

	</body>

</html>