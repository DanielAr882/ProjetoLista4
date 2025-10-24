<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 6</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<form action="" method="post">
		<label>Digite o salário-base:</label>
		<input type="text" name="salario">

		<select name="periodo">
			<option>Selecione seu período:</option>
			<option value="diurno">Diurno</option>
			<option value="noturno">Noturno</option>
		</select>
		
		<input type="submit" name="" value="Calcular">	
	</form>

	<?php
	$salario = $_POST['salario'];
	$periodo = $_POST['periodo'];

	if ($periodo == 'noturno') 
	{
		$salariof = ($salario * 0.20);
		echo " (R$$salariof + 20% de adicional)";
	}

	else if ($periodo == 'diurno') 

	{
		echo "R$ $salario Não tem adicional";
	}

	else
	{
		echo "Seleção inválida";
	}

		$resultado = $salariof;

	if ($resultado >= 5000) 
	{
		echo '<span style="display:block;">Risco de incidência de imposto de renda ⚠️ </span>';

		echo "$resultado";
		
	}
	?>
	<br>
	<br>
	<br>
	<a href="index.html">Voltar ao inicio</a>
</body>
</html>