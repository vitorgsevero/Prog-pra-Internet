<html>
  <head><title>P�gina com PHP!</title></head>
	<body> 
	<?php
		ECHO ("<h1 align='center'>Teste de PHP!</h1>");
		PRINT ("<p><h1 align='center'>Outro teste...</h1>");
		$a = TRUE; //imprime 1; para FALSE n�o imprime nada
		$b = 17;
		$c = 7.5;
		$d = 'Texto!';
		echo "$b + $c  = " . (float)($b + $c);
		echo "<p>Vari�vel a: $a <br> Vari�vel b: $b <br> Vari�vel c: $c <br> Vari�vel d: $d";

		define ("VAR1", "Ol�!");
		define ("VAR2", 55);
		echo "<p>".VAR1;
		echo "<br>".VAR2;
		
		$dia=date("d/m/Y");
		$hora=date("G:i");
		print ("<p>Data e Hora:");
		print ("<br>".$dia);
		print ("<br>".$hora);
		
		$custo=22.23645;
		echo "<p>Vari�vel com valor formatado:<br>";
		printf("%.3f",$custo);
	?>
	</body>
</html>
