<?php

$array[] = 21;
$array[] = 32;
$array[] = 47;
$array[] = 56;
$array[] = 61;
$array[] = 32;
$array[] = 43;
$array[] = 98;
$array[] = 9;
$array[] = 52;
$array[] = 7;
$array[] = 16;
$array[] = 23;
$array[] = 30;
$array[] = 33;


for ($g = 0; $g < 15; $g++){
    if ($array[$g] % 2 == 0){
        echo "<p style='color:blue;'> $array[$g] </p>";
        echo "<br>";
    }
    else{
        echo $array[$g];
        echo "<br>";
    }
}

for($f=1;$f<=100;$f++)
{
    if ($f % 2 == 0){
       echo "<p style='color:red;'> $f </p>";
       echo "<br>";
    }
    else{
        echo $f;
        echo "<br>";
    }
    
}
