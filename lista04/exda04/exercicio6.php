<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 6</title>
</head>
<body>
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
		$resultado = $salario + ($salario * 0.20);
		echo "R$$resultado (R$$salario + 20% de adicional)";
	}

	else if ($periodo == 'diurno') 
	{
		echo "R$$salario";
	}

	else
	{
		echo "Seleção inválida";
	}


	if ($resultado >= 5000) 
	{
		echo "<br>Risco de incidência de imposto de renda ⚠️";
	}
	?>
</body>
</html>