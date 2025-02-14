<?php
    include "config.php";

    // ✅ Check if ID is passed via GET
    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];

        // ✅ Fetch user details from the database
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $gender = $row['gender'];
        } else {
            echo "User not found!";
            exit();
        }
    }

    // ✅ Update user details
    if (isset($_POST['update'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', gender='$gender' WHERE id='$user_id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User updated successfully!'); window.location.href='view.php';</script>";
        } else {
            echo "Error updating user: " . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Edit User</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="Male" <?php if ($gender == "Male") echo "selected"; ?>>Male</option>
                    <option value="Female" <?php if ($gender == "Female") echo "selected"; ?>>Female</option>
                    <option value="Other" <?php if ($gender == "Other") echo "selected"; ?>>Other</option>
                </select>
            </div>

            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="view.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
