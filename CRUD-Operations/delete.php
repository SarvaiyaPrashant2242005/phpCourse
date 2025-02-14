<?php
    include "config.php";

    if(isset($_GET['id'])){
        $user_id = $_GET['id'];

        // ✅ Corrected DELETE query
        $sql = "DELETE FROM users WHERE id = '$user_id'";

        $result = $conn->query($sql);

        if($result){
            echo "<script>alert('User deleted successfully!'); window.location.href='view.php';</script>";
        } else {
            echo "<script>alert('Error: Could not delete user!'); window.location.href='view.php';</script>";
        }
    }
?>
