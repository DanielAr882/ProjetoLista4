<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multa por atraso</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<center>
	<form action="" method="post">

		<select name="slMater">

			<option>Informe o material pego:</option>
			<option value="1">Livro</option>
			<option value="2">Revista</option>
			<option value="3">Dvd</option>
			
			

		</select>

		<br><br>

		<label>Informe o tempo de atraso (em Dias):</label><br>
		<input type="text" name="txtTempo"><br>

		  <br>
    <input type="submit" name="btnCalc" value="Calcular"><br>
    <br>
</form>
	<?php

   $Op = $_POST['slMater'];
   $Tempo = $_POST['txtTempo'];

   if ($Op=="1"){
   
   		$Atraso = $Tempo * 1.50;
   		
	}

   else if ($Op=="2"){
   	
   	$Atraso = $Tempo * 1.00;


   }
    else if ($Op=="3"){
   	$Atraso = $Tempo * 2.50;
   }
 

   else {
   	$Atraso=0;
   }
   if ($Atraso>=30){
   	echo "<br>";
   	echo "Empréstimos bloqueados";
   }
   else {
   	 echo "O valor Final com a multa Fica: $$Atraso";
   }


		?>
		<br>
		<br>
<a href="index.html">Voltar ao inicio</a>
</center>
</body>
</html>