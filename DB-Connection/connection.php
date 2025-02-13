<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['SubmitForm'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'mu_2425_test') or die('Connection failed: ' . mysqli_connect_error());

    if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bgroup = $_POST['bgroup'];

        // Use prepared statements to prevent SQL injection
        $sql = "INSERT INTO `registration` (`name`, `email`, `phone`, `bgroup`) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'ssss', $user, $email, $phone, $bgroup);
            if (mysqli_stmt_execute($stmt)) {
                echo "Data Entered into database successfully YIPPII !!!";
            } else {
                echo "Kuchh to gadbad hui he: " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Kuchh to gadbad hui he: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }

    mysqli_close($conn);
}
?>