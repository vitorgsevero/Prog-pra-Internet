<html>
  <head><title>P�gina com PHP!</title></head>
<body> 

<?php
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
if (!(is_numeric($valor1)) or !(is_numeric($valor2))) {
	print("Valor(es) inv�lido(s)!"); }
else {
	$soma = $valor1 + $valor2;
	print ("O resultado da soma �: $soma");	}
?>

<p><a href="oper.php">Voltar</a>

</body>
</html>
