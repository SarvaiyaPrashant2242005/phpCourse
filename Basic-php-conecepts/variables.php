<?php
// Dynamic Variables
    echo "<h1>Dynamic Variables</h1>";
    $str = "Hello Prashant!";
    $num = 5;
    $float = 0.05;
    echo $str;

    echo "<p> String : " .$str . "</p>";
    echo "<p> Number :" .$num . "</p>";
    echo "<p> Float Number :" .$float . "</p>";

    echo "<hr>";
// Static Variable which values cannot be change throghout the code its called consonent
echo "<h1>Static Variables</h1>";

echo "<h4>Simple Variable</h4>";
define("Name", "Prashant Sarvaiya | PG Learning");
echo "Name : " .Name;


define("LAPTOPS", ["HP", "Asus", "Lenovo"]);
echo "<br>";
echo "<h4>Array</h4>";
echo "Laptops : " . implode(", ", LAPTOPS);
echo "<br>";
echo LAPTOPS[1];
?>