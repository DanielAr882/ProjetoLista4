<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consumo de gasolina</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<center>
	<form action="" method="post">

		<select name="slClima">

			<option>como está o clima:</option>
			<option value="1">Frio</option>
			<option value="2">Ameno</option>
			<option value="3">Quente</option>
			
			

		</select>

		<br><br>

		<label>Informe quantas pessoas havia no evento:</label><br>
		<input type="text" name="txtPessoas"><br>

		  <br>

		<label>Informe o tempo do evento em (horas):</label><br>
		<input type="text" name="txtHoras"><br>

    <input type="submit" name="btnCalc" value="Calcular"><br>
    <br>
</form>


	<?php

   $Op = $_POST['slClima'];
   $Horas = $_POST['txtHoras'];
   $Pessoas = $_POST['txtPessoas'];

   if ($Op=="1"){
   
   		$Gasto = $Pessoas * 0.40;
   		
	}

   else if ($Op=="2"){
   	$Gasto = $Pessoas * 0.60;



   }
    else if ($Op=="3"){
   	$Gasto = $Pessoas * 0.80;
 
   }
 

   else {
   	$Gasto=0;
   }

   if ($Gasto>=500){
   	echo "ALERTA: É necessario galões extras";
   }
   else {
   	echo "está tudo bem";
   }

    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo "O gasto final é: $Gasto litros";
    echo"<br>";
    echo"<br>";
     echo "E a Duração foi: $Horas Horas";
    echo"<br>";
 



		?>
		<br>
		<br>
<a href="index.html">Voltar ao inicio</a>
</center>
</body>
</html>