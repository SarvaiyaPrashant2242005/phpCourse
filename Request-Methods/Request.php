<?php
    if(isset($_REQUEST['name']) || isset($_REQUEST['age'])){

        echo "<h1>From REQUEST METHOD</h1>";
        echo "Hello " . $_REQUEST['name'] . "<br>";
        echo "Your Age is" . $_REQUEST['age']. "<br>";
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