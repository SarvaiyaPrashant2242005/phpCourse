<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "mu_2425_test");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['number'] ?? '';
    $email = $_POST['email'] ?? '';

    // Prepared statement to prevent SQL Injection
    $stmt = $conn->prepare("INSERT INTO contacts (name, phone, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $phone, $email);

    if ($stmt->execute()) {
        echo "Record inserted successfully!";
        header("Location: index.html");
        exit(); // Ensure script stops after redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement & connection
    $stmt->close();
    $conn->close();
}
?>
