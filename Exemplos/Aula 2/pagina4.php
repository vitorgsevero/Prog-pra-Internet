<html lang="pt-br">
<head>
<title>Exercício 4</title>
<meta charset="iso-8859-1">
<head>
<body>
<h1 style="text-decoration: underline">Informe os valores das vendas efetuadas pelo:</h1>
<form action='' method='get'>
<?php
for ($x=0;$x<5;$x++)
{
	echo "<p>";
	echo "<h2 style='font-weight: bold'> -- Vendedor ".($x+1)." -- </h2>";
	for ($y=0;$y<4;$y++)
	{
		echo "<font style='font-style: italic; color:brown'>   ->    Semana ".($y+1).": </font>";
		echo "<input type='text' name='vend_sem$x$y' size='10' required>";
	}
}
?>
<p>
<input type='submit' value='Enviar'>
</form>
<hr>
<?php
if ($_GET)
{
	$vend_mes=0;
	echo "<h3>Valores:</h3>";
	for ($a=0;$a<5;$a++){//dos 5 vendedores
		$vend_ind=0;
		for ($b=0;$b<4;$b++){//das 4 semanas
			$vend_sem[$a][$b]=$_GET["vend_sem$a$b"];
			$vend_ind+=$vend_sem[$a][$b];
			$vend_mes+=$vend_sem[$a][$b];
		}
		echo "<font style='color:red'>Total das semanas do vendedor ".($a+1).": ".$vend_ind."</font><br>";
	}
	echo "<p>";
	for ($b=0;$b<4;$b++){//das 4 semanas
		$vend_jun=0;
		for ($a=0;$a<5;$a++){//dos 5 vendedores
			$vend_jun+=$vend_sem[$a][$b];
		}
		echo "<font style='color:blue'>Total da semana ".($b+1)." dos vendedores: ".$vend_jun."</font><br>";
	}
	echo "<p><font style='color:green'>Total dos vendedores no mês: ".$vend_mes."</font>";
}
?>
</body>
</html>