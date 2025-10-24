<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 8</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<form action="" method="post">
		<label>Digite o valor do aluguel(em R$):</label>
		<input type="text" name="valor">
		<br>
		<select name="indice">
			<option>Selecione o índice de reajuste:</option>
			<option value="igpm">IGP-M (+0,7%)</option>
			<option value="ipca">IPCA (+0,6%)</option>
			<option value="personalizado">Personalizado (+1,0%)</option>
		</select>

		<input type="submit" name="">
	</form>

	<?php
		$valor = $_POST['valor'];
		$indice = $_POST['indice'];

		if ($indice == 'igpm') 
		{
			$resultado = $valor + ($valor * 0.7);
			echo "R$$resultado";
		}

		else if ($indice == 'ipca') 
		{
			$resultado = $valor + ($valor * 0.6);
			echo "R$$resultado";
		}

		else if ($indice == 'personalizado') 
		{
			$resultado = $valor + ($valor * 1.0);
			echo "R$$resultado";
		}

		else
		{
			echo "Seleção inválida";
		}
	?>
	<br>
	<br>
	<br>
	<a href="index.html">Voltar ao inicio</a>

</body>
</html>