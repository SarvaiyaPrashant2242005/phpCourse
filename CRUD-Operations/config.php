<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mu_2425_test";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn -> connect_error){
        die("Connection Cannot Established!!!!!!" . $conn -> connect_error());
    }
?>