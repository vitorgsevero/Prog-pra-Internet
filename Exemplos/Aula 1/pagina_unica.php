<html>
  <head><title>Página com PHP!</title></head>
<body> 

<form action="pagina_unica.php" method="post">
	<br>
	Valor 1:<input type="text" name="valor1" size="5">
	<br>
	Valor 2:<input type="text" name="valor2" size="5">
	<p>
	<input type="submit" value="Somar">
	<input type="reset" value="Limpar">
</form>
<?php

if($_POST)
{
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
if (!(is_numeric($valor1)) or !(is_numeric($valor2))) {
	print("Valor(es) inválido(s)!"); 
	}
else {
	$soma = $valor1 + $valor2;
	print ("O resultado da soma é: $soma");	
	}
}
?>

</body>
</html>
