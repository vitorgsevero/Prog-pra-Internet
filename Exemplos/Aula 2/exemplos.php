<html>
<head>
<title>Formulário com PHP</title></head>
<body>
<?php
	function dobro($base)
	{
		$dobro = ($base * 2);
		return $dobro;
	}
	$valor = 32;
	print("O dobro de $valor é: " . dobro($valor) . "<p><hr>");
//--------------------------------------------
	function padrao($preco=10.00)
	{
		return "O preço deste produto é: $preco <br>";
	}
	print(padrao());
	print(padrao(5.00)."<hr>");
//--------------------------------------------
	function saida($texto, $vezes=1)
	{
		for ($i=0; $i<$vezes; $i++)
		     print($texto);
	}
	saida("<br>1) Exemplo da função<p>");
	saida("2) Outro exemplo da função - duas vezes<br>", 2);
	print("<hr>");
//--------------------------------------------	
	function soma1($oper) {
		$soma=0;
		for ($i=0;$i<sizeof($oper);$i++) {
		      $soma+=$oper[$i];
		      $oper[$i]=0;  }//não altera global
		return $soma;  }
	$oper=array(10,15,2,25,37);
	print("<p>" . soma1($oper) . "<br>");
	print($oper[2]); //imprime 2
//--------------------------------------------
	function soma2(&$oper) {
		$soma=0;
		for ($i=0;$i<sizeof($oper);$i++) {
		      $soma+=$oper[$i];
		      $oper[$i]=0;  }//altera global
		return $soma;  }
	$oper=array(10,15,2,25,37);
	print("<p>" . soma2($oper) . "<br>");
	print($oper[2] . "<p><hr>"); //imprime 0
//--------------------------------------------
	$a[0] = 100;
	$a[1] = 10;
	$b[10] = "Maria";
	print("$a[0] - $a[1] - $b[10]  <p>");
//--------------------------------------------
	$c[ ] = "João";
	$c[ ] = "Brasil";
	$d[ ] = 100.50;
	print("$c[0] - $c[1] - $d[0]  <p>");
//--------------------------------------------
	$a = array(100, 1, 20.67, "nome"=>"Walace");
	print("$a[0] <br>");
	print("$a[1] <br>");
	print("$a[2] <br>");
	print($a["nome"]);
?>
</body>
</html>