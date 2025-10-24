<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 3</title>
</head>
<body>
	<form action="" method="post">
		
		<label>Digite a distãncia percorrida (Em quilometros)</label>
		<input type="text" name="txtDist">

		<select name="slCarros">
			<option>Escolha o material:</option>
			<option value="1">Econõmico)</option>
			<option value="2">Intermediario</option>
			<option value="3">SUV</option>
		</select>

		<input type="submit" name="" value="Calcular">
	</form>

	<?php
	error_reporting(0);    
	ini_set('display_errors', '0');

	$Op = $_POST['slCarros'];
	$Distancia = $_POST['txtDist'];

	if ($Op == '1') 
	{
		$Distancia = (6.00 * 14); 
		$resultado = $Distancia;
	}

	else if ($Op == '2') 
	{
		
		$Distancia = (6.00 * 10); 
		$resultado = $Distancia;
	}

	else if ($Op == '3') 
	{
		$Distancia = (6.00 * 8); 
		$resultado = $Distancia;
	}


	
	else {
		echo "Valor não informado";
	}

	echo " o Valor estimado é: $resultado  Reais";

	?>
	<br>
	<br>
	<br>
	<a href="index.html">Voltar ao inicio</a>

</body>
</html>