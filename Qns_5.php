<!DOCTYPE html>
<html>
    <head>
        <title>Area of Triangle</title>
    </head>
    <body>
        <h3>Calculate area of triangle</h3>
        <form action="Qns_5.php" method="post">
            <label for="base" >Enter base:</label>
            <input type="number" step="any" name="base" id="base" required>
            <label for="height">Enter height:</label>
            <input type="number" step="any" name="height" id="height" required>
            <button type="submit">Calculate</button>
        </form>
    </body>
</html>
<?php
    //form bata base ra height duitai ako chaki chain check
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $base = $_POST["base"];
        $height = $_POST["height"];

        //duitai numeric value hoki nai check
        if (is_numeric($base) && is_numeric($height) && $base > 0 && $height >0){
            $area = 0.5 * $base * $height;
            echo "<h3>Area of Triangle is: " . $area . "</h3>";
        }else {
            echo "Error : Please input positive number";
        }
    }


?>