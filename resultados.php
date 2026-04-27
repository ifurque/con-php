<?php

    $resta = $_POST["num1"] - $_POST["num2"];
    $suma = $_POST["num3"] + $_POST["num4"];
    $mult = $_POST["num5"] * $_POST["num6"];
    $dni = $_POST["dni"];
    $edad = $_POST["edad"];

    $num1 = $_POST["num7"];
    $num2 = $_POST["num8"];
    $num3 = 0;
    $valor = $_POST["valor"];

    switch($valor){
        case "1":
            $num3 = $num1 * $num2;
            echo $num3;
            break;
        case "2":
            $num3 = $num1 + $num2;
            echo $num3;
            break;
        case "3":
            $num3 = $num1 - $num2;
            echo $num3;
            break;
        case "4":
            $num3 = $num1 / $num2;
            echo $num3;
            break;
        default:
            echo $num3;
            break;
    }

    if ($edad < 18) {
        echo "<p style='color:red;'> Eres menor de edad. </p>";
        echo "<br>";
    }
    elseif ($edad >= 18 && $edad <= 60) {
        echo "<p style='color:blue;'> Eres mayor de edad. </p>";
        echo "<br>";
    }
    else{
        echo "<p style='color:grey;'> Tercera edad. </p>";
    }
    if($mult <= 100){
        echo "<p style='color:green;'>" . $mult . " es menor a 100.</p>";
        echo "<br>";
    }
    else{
        echo "<p style='color:blue;'>" . $mult . " es mayor a 100.</p>";
        echo "<br>";
    }
    echo $resta;
    echo "<br>";
    echo $suma;
    echo "<br>";
    echo $mult;
?>
