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

		<select name="slTinta">

			<option>Escolha o tipo de tinta:</option>
			<option value="1">Simples</option>
			<option value="2">Premium</option>
			
			
			

		</select>

		<br><br>

		<label>Informe a largura:</label><br>
		<input type="text" name="txtLargura"><br>

		  <br>

		  <label>Informe a Altura:</label><br>
		<input type="text" name="txtAltura"><br>


    <input type="submit" name="btnCalc" value="Calcular"><br>
    <br>
</form>


	<?php

   $Op = $_POST['slTinta'];
   $Largura = $_POST['txtLargura'];
   $Altura = $_POST['txtAltura'];

   $Area = $Altura * $Largura;


   if ($Op=="1"){
   
   	$Litros = $Area / 8.0;
   		
	}

   else if ($Op=="2"){
   	$Litros = $Area / 12.0;
   		
   }
   

  else {
   	$Litros=0;
   }


   $Res = $Litros;



   if ($Res>18){
  	$Lata = intdiv($Res, 18);

  	if ($Res % 18 != 0){
  		$Lata += 1;
  	}

  	  echo "Isso corresponde a <b>$Lata</b> latas de 18L.";
   }
   else if ($Litros > 0) {
       echo "Isso corresponde a $Res latas de 18L.";

   }


 
		?>
		<br>
		<br>
<a href="index.html">Voltar ao inicio</a>
</center>
</body>
</html>