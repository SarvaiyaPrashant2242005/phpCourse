<?php
    if(isset($_GET["name"]) || isset($_GET["age"])){
        echo "Hii!! ". $_GET['name']."<br>";
        echo "Your Age is".$_GET['age']."<br>";
        exit();

    }
?>

<html>
    <body>
        <form action="<?php $_PHP_SELF ?>"method="GET">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>