<html>
  <head><title>P�gina com PHP!</title></head>
<body> 

<?php
	$x = 5;
	if ($x > 0)
		print("O valor da vari�vel x � positivo!<p>");
	$y = -5;
	if ($y < 0)
		print("O valor da vari�vel y � negativo!<p>");
	$num = 10;
	$n1 = 15;
	$prim = FALSE;
	if (($num==10) && ($n1!=20) || !($prim))
		print("Voc� est� testando operadores...<p>");
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
