<html>
  <head><title>Página com PHP!</title></head>
<body> 

<?php
	$x = 5;
	if ($x > 0)
		print("O valor da variável x é positivo!<p>");
	$y = -5;
	if ($y < 0)
		print("O valor da variável y é negativo!<p>");
	$num = 10;
	$n1 = 15;
	$prim = FALSE;
	if (($num==10) && ($n1!=20) || !($prim))
		print("Você está testando operadores...<p>");
?>
<hr>
<form action="processa.php" method="post">
	<br>
	Valor 1:<input type="text" name="valor1" size="5">
	<br>
	Valor 2:<input type="text" name="valor2" size="5">
	<p>
	<input type="submit" value="Somar">
	<input type="reset" value="Limpar">
</form>

</body>
</html>
