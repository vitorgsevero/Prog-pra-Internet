<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calcule a sua média...</title>
	</head>

	<body>

		<form action="calculamedia.php" method="post">
			<br>
				 Informe o nome do seu professor: <input type="text" name="prof" size="20" required><br>
				 Informe o nome da sua disciplina: <input type="text" name="disci" size="20" required><br>
				 Informe o nome do aluno: <input type="text" name="aluno" size="20" required><br><br>
				 Informe sua primeira nota: <input type="number" name="nota1" required><br>
				 Informe o peso da sua primeira nota: <input type="number" name="peso1" required><br>
				 Informe sua segunda nota: <input type="number" name="nota2" required><br>
				 Informe o peso da sua segunda nota: <input type="number" name="peso2" required><br>
				 Informe sua terceira nota: <input type="number" name="nota3" required><br>
				 Informe o peso da sua terceira nota: <input type="number" name="peso3" required><br><br>

				 <input type="submit" value="Ver Média"> 
				 <input type="reset" value="Limpar Dados">
		</form>


	</body>

</html>