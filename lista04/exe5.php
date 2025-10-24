<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>custo da viagem</title>
</head>
<body>

<form action="" method="post">

<label>Informe a distância que você irá percorer</label>
<input type="number" name="distancia" required>
<br><br>

<label>Qual seu plano</label>
<select name="select" class="caixa" required>
    <option value="n0">&nbsp</option>
    <option value="n1">Ecônomico</option>
    <option value="n2">Intermediário</option>
    <option value="n3">SUV</option>
</select>

<br><br>

<input type="submit" name="btnCalc" value="Calcular" class="btn">
</form>

<?php
$distancia = $_POST['distancia'];
$op = $_POST['select'];

if ($op == "n1"){
    $resultado = ($distancia + 14) * 6.00;
    $resultado = number_format($resultado, 2, ',', '.'); 
    echo"O custo da sua da estimado é $resultado ";
    
}
else if ($op == "n2"){
    $resultado = ($distancia + 10) * 6.00;
    $resultado = number_format($resultado, 2, ',', '.');
    echo"o custo da sua viagem estimado é $resultado";
    
}
elseif ($op == "n3") {
    $resultado = ($distancia + 8) * 6.00;
    $resultado = number_format($resultado, 2, ',', '.');
    echo"o custo estimado da sua viagem é $resultado";
   
}
else {
  echo"escolha a forma do carro que você vai querer";
}




?>
<a href="index.html">Voltar ao inicio</a>
    
</body>
</html>