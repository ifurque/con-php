<?php

    $resta = $_POST["num1"] - $_POST["num2"];
    $suma = $_POST["num3"] + $_POST["num4"];
    $mult = $_POST["num5"] * $_POST["num6"];
    $dni = $_POST["dni"];
    $dninum = 45000000;

    if ($dni < 45000000) {
        echo "Eres menor de edad";
        echo "<br>";
    }
    else {
        echo "Eres mayor de edad";
        echo "<br>";
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
