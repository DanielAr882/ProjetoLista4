<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 3</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<form action="" method="post">
		
		<label>Digite a quantidade de dias de atrasom(em dias)</label>
		<input type="text" name="atraso">

		<select name="material">
			<option>Escolha o material:</option>
			<option value="livro">Livro (R$1,50)</option>
			<option value="revista">Revista (R$1,00)</option>
			<option value="dvd">DVD (R$2,50)</option>
		</select>
		<br>
		<br>

		<input type="submit" name="" value="Calcular">
	</form>

	<?php

	$material = $_POST['material'];
	$atraso = $_POST['atraso'];
	
	if ($material == 'livro') 
	{
		$resultado = $atraso * 1.50;
		echo "<br>";
		echo "<br>";
		echo "Você deve $resultado";
	}

	else if ($material == 'revista') 
	{
		$resultado =  $atraso * 1.00;
		echo "<br>";
		echo "<br>";
		echo "Você deve $resultado";
	}

	else if ($material == 'dvd') 
	{
		$resultado = $atraso * 2.50;
		echo "<br>";
		echo "<br>";
		echo "Você deve $resultado";
	}


	if ($atraso >= 30) {
		echo "<br>Você está bloqueado para futuros empréstimos.";
		echo "<br>";
		echo "<br>";
		echo "<br>";
	}
	else {
		echo "<br>";
		echo "<br>";
		echo "Você deve $resultado";
	}

	?>
	<br>
	<br>
	<br>
	<a href="index.html">Voltar ao inicio</a>

</body>
</html>