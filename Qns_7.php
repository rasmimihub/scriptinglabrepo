<!DOCTYPE html>
<html>
    <head>
        <title>Calculate power</title>
    </head>
    <body>
        <h3>Calculate power</h3>
        <form action="Qns_7.php" method="post">
            <label for="voltage">Enter voltage:</label>
            <input type="number" step="any" name="voltage" id="voltage" required>
            <label for="current">Enter current:</label>
            <input type="number" step="any" name="current" id="current"required>
            <button type="submit">Calculate</button>
        </form>
    </body>
</html>
<?php 
//check voltage ra current input vakoca ki xaina
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $voltage = $_POST["voltage"];
    $current = $_POST["current"];

    //numeric value validate
    if (is_numeric($voltage) && is_numeric($current)){
        $power = $voltage * $current ;
        echo "<h4>Power is :" . $power . "</h4>";
    }
}

?>