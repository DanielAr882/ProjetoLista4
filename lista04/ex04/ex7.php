    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>custo da viagem</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="style4.css">

    <form action="" method="post">

    <label>Quantos ingressos deseja:</label>
    <input type="number" name="ingressos" required>
    <br><br>

    <label></label>
    <select name="select" class="caixa" required>
        <option value="1">inteira</option>
        <option value="2">Meia</option>
        <option value="3">Estudante</option>
       
    </select>

    <br><br>

    <input type="submit" name="btnCalc" value="Calcular" class="btn">
    </form>

    <?php
    $Desejado = $_POST['ingressos'];
    $op = $_POST['select'];



    if ($op == "1"){

        $resultado = $Desejado * 40;

        
    }
    else if ($op == "2"){

           $resultado = $Desejado * 20;
        
    }
    elseif ($op == "3") {
        
        $resultado = $Desejado * 25;

    }
    else {
      echo"escolha  o ingresso";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";

    if ($Desejado>=5) {

        $Resf = $Desejado * 0.10;
        echo "<br>";
        echo "<br>";

        echo "Desconto de 10%";
         echo "<br>";
        echo "<br>";
    }

        else {
            echo "Dentro do limite";
      echo "<br>";
        echo "<br>";
        }
        echo "$Resf";



    ?>
    <br>
    <br>
    <br>
    <a href="index.html">Voltar ao inicio</a>
        
    </body>
    </html>