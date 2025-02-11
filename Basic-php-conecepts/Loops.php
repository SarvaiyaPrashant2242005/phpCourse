<?php
    $var = 0;
    echo "<h1>While Loop</h1>";
    while($var < 10){
        echo $var;
        echo "<br>";

        $var++;
    }


    echo "<hr>";
    echo "<h1>For Loop</h1>";
    for($i=0;$i<10;$i++){
        echo $i;
        echo "<br>";
    }

    echo "<hr>";
    echo "<h1>Do-while loop</h1>";
    $ab = 11;
    do{
        echo $ab;
        $ab++;
    }
    while($ab<10);
?>