<?php
    include "config.php";

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password =($_POST['password']); // Hash the password
        $gender = $_POST['gender'];

        // Using prepared statements
        $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password, gender) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstname, $lastname, $email, $password, $gender);

        if($stmt->execute()){
            echo "Data gya database me chhapaak!!!";

            echo "<a href='./view.php'><button>View Data</button></a>";
        } else {
            echo "Kuchh gadbad hui he broo: " . $conn->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Form submit nahi hua!";
    }
?>
