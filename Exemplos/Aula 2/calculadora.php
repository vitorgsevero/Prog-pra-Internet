<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Calculadora</title>
</head>
 
<body>
<?php
   $a = isset($_POST["a"]) ? $_POST["a"] : ''; //se houver valor no text do form, atribui para a vari�vel, sen�o deixa-a em branco
   $b = isset($_POST["b"]) ? $_POST["b"] : '';
?>
<form title="Formul�rio Calculadora" id="formcalc" name="formcalc" action="" method="post">
   Valor 1: <input name="a" type="number" value="<?php echo $a ?>"/><br />
   Valor 2: <input name="b" type="number" value="<?php echo $b ?>"/>
   <br /><br />
   Selecione uma opera��o:<br />
   <input name="operacao" type="radio" value="Soma" />Soma<br />
   <input name="operacao" type="radio" value="Subtra��o" />Subtra��o<br />
   <input name="operacao" type="radio" value="Multiplica��o" />Multiplica��o<br />
   <input name="operacao" type="radio" value="Divis�o" />Divis�o
   <input type="hidden" name="oculto" value="efetuar"/>
   <br /><br/>
   <input name="calcular" type="submit" value="Calcular"/>
   <input name="limpar" type="reset" value="Limpar"  onclick="javascript:window.location.reload();"/>
   <br /><br />
</form>
</body>
 
<?php
if ($_POST && $_POST["oculto"] == "efetuar"){
   $a     = $_POST["a"];
   $b     = $_POST["b"];
   $sinal = $_POST["operacao"];
   switch ($sinal){
      case $sinal == "Soma":
	$total = $a + $b;
	break;
      case $sinal == "Subtra��o":
	$total = $a - $b;
	break;
      case $sinal == "Multiplica��o":
	$total = $a * $b;
	break;
      case $sinal == "Divis�o":
	$total = $a / $b;
	break;
   }
   echo "Valor Total da opera��o: ".$total;
   if ($a>$b){
      echo "<br/><br/>O Valor 1 � MAIOR que o Valor 2.";
   }
   elseif ($a<$b){
      echo "<br/><br/>O Valor 1 � MENOR que o Valor 2.";
   }
   else{
      echo "<br/><br/>Valores iguais.";
   }
}
?>
</html>