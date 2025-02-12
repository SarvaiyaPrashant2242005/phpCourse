<?php
if(isset($_POST['name']) || isset($_POST['age'])){
    if (preg_match("/[^A-Za-z'-]/", $_POST['name'])){
        die("INVALID NAME");
    }
    echo "<h1>From POST METHOD</h1>";
    echo "Hello " . $_POST['name'] . "<br>";
    echo "Your Age is" . $_POST['age']. "<br>";
    exit();

}

?>

<html>
    <body>
        <form action="<?php $_PHP_SELF ?>"method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>