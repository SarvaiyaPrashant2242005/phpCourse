<?php
    $fullname = $email =$gender = $comment = $number = $age = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname     = test_input($_POST['name']);
        $email   = test_input($_POST['email']);
        $gender   = test_input($_POST['gender']);
        $comment   = test_input($_POST['comment']);
        $number   = test_input($_POST['number']);
        $age   = test_input($_POST['age']);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    echo $fullname;
    echo "<br>";
    echo $email;
    echo "<br>";

    echo $gender;
    echo "<br>";

    echo $comment;
    echo "<br>";

    echo $number;
    echo "<br>";

    echo $age;
    echo "<br>";
?>

