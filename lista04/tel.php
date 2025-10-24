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

		<select name="slTempo">

			<option>Escolha o plano de telefonia:</option>
			<option value="1">Básico</option>
			<option value="2">Plus</option>
			<option value="3">Pro</option>
			
			
			

		</select>

		<br><br>

		<label>Informe em (Minutos) o seu uso mensal:</label><br>
		<input type="text" name="txtTempo"><br>

		  <br>


    <input type="submit" name="btnCalc" value="Calcular"><br>
    <br>
</form>


	<?php

   $Op = $_POST['slTempo'];
   $Duração = $_POST['txtTempo'];
  

  


   if ($Op=="1"){
   
   	$Res1 = $Duração * 0.50;

   		$Franquia = $Res1 - $Duração;

    if ($Res1>=100){
  	echo "excedente R$ 0.50/Min mensalidade R$ 29,90";

   		
	}
}

   else if ($Op=="2"){
   $Res1 = $Duração * 0.35;

   $Franquia = $Res1 - $Duração;

   if ($Res1>=200){
  		echo "excedente R$ 0.35/Min mensalidade R$ 49,90";
 
   		
   }
}
    else if ($Op=="3"){
   $Res1 = $Duração * 0.20;

   $Franquia = $Res1 - $Duração;

    if ($Res1<=500){
  		echo "excedente R$ 0.20/Min mensalidade R$ 79,90";

  	
  }
   		
   }
   

  else {
   	$Franquia=0;
   }

   echo "o valor final é: $Franquia";
   echo "e o excedente é $Res1";


 
		?>
		<br>
		<br>
<a href="index.html">Voltar ao inicio</a>
</center>
</body>
</html>