<html>
<head>
<title>Formulário com PHP</title></head>
<body>
<form action="" method="post">
	<br>
	Nome:<input type="text" name="nome" required>
	<br>
	Idade:<input type="text" name="idade" required>
	<p>
	<input type="submit" value="Enviar">
	<input type="reset" value="Limpar"> <!-- onclick="javascript:window.location.reload();" -->
</form>
</body>
<?php
if ($_POST)
{
		$dia=date("d/m/Y");
		$hora=date("G:i");
		print ("<p>Data e Hora:");
		print ("<br>".$dia);
		print ("<br>".$hora);

$nome=$_POST['nome'];
$idade=$_POST['idade'];
print ("Seja bem-vindo <font color='green'> $nome </font>!");
print("<br> Você tem <font color='gold'> $idade </font> anos!");
}
?>
</html>