<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Página com os resultados das operações</title>
	</head>

	<body>

		<?php

		$codigo=$_POST['codigo'];
		$quantidade=$_POST['quantidade'];


		function calculoProduto1(){ //Cachorro-Quente

		$codigo=$_POST['codigo'];
		$quantidade=$_POST['quantidade'];

		$precoproduto1= 4.00;
		$valorTotal = $quantidade * $precoproduto1;

			return $valorTotal;

		}		

		function calculoProduto2(){//Bauru Simples

		$codigo=$_POST['codigo'];
		$quantidade=$_POST['quantidade'];

		$precoproduto2= 5.20;
		$valorTotal = $quantidade * $precoproduto2;

			return $valorTotal;

		}

		function calculoProduto3(){//Bauru com ovo

		$codigo=$_POST['codigo'];
		$quantidade=$_POST['quantidade'];

		$precoproduto3= 5.80;
		$valorTotal = $quantidade * $precoproduto3;

			return $valorTotal;

		}

		function calculoProduto4(){//Cheese Burger

		$codigo=$_POST['codigo'];
		$quantidade=$_POST['quantidade'];

		$precoproduto4= 4.70;
		$valorTotal = $quantidade * $precoproduto4;

			return $valorTotal;

		}
		
		function calculoProduto5(){//Refrigerante

		$codigo=$_POST['codigo'];
		$quantidade=$_POST['quantidade'];

		$precoproduto5= 2.50;
		$valorTotal = $quantidade * $precoproduto5;

			return $valorTotal;

		}

		function codigoinvalido(){

			$erro = "Código inválido. Tente novamente...";

			return $erro;

		}

		switch ($codigo) {
			case '100':
				echo("Pedido efetuado com sucesso.<br>");
				echo("<br><b>RESUMO DO PEDIDO:</b><br>" . $quantidade . " Cachorro-Quente <br> Total do pedido: R$" . calculoProduto1());
				break;

			case '101':
				echo("Pedido efetuado com sucesso.<br>");
				echo("<br><b>RESUMO DO PEDIDO:</b><br>" . $quantidade . " Bauru Simples <br> Total do pedido: R$" . calculoProduto2());
				break;

			case '102':
				echo("Pedido efetuado com sucesso.<br>");
				echo("<br><b>RESUMO DO PEDIDO:</b><br>" . $quantidade . " Bauru com ovo <br> Total do pedido: R$" . calculoProduto2());
				break;

			case '103':
				echo("Pedido efetuado com sucesso.<br>");
				echo("<br><b>RESUMO DO PEDIDO:</b><br>" . $quantidade . " Hamburger <br> Total do pedido: R$" . calculoProduto3());
				break;

			case '104':
				echo("Pedido efetuado com sucesso.<br>");
				echo("<br><b>RESUMO DO PEDIDO:</b><br>" . $quantidade . " Cheese Burger <br> Total do pedido: R$" . calculoProduto4());
				break;

			case '105':
				echo("Pedido efetuado com sucesso.<br>");
				echo("<br><b>RESUMO DO PEDIDO:</b><br>" . $quantidade . " Refrigerante <br> Total do pedido: R$" . calculoProduto5());
				break;
			
			default:
				echo(codigoinvalido());
				break;
		}

		?>

	</body>

</html>	

