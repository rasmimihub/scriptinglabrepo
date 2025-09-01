<!DOCTYPE html>
<html>
    <head>
        <title>Sum Calculate</title>
    </head>
    <body>
        <h3>Calculate sum of two numbers</h3>
        <form action="Qns_4.php" method="post">
            <label for="num1">Enter first number:</label>
            <input type="number" name="num1" id="num1" required> <br/>
            <label for="num2">Enter second number:</label>
            <input type="number"  name="num2" id="num2" required>
            <button type="submit">Calculate</button>
        </form>
    </body>
</html>
<?php 

//check if both a and b are input or not bhanera
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    //a ra b numeric value ma aauna paryo j pai tei aayera vayena
    if(is_numeric($num1) && is_numeric($num2)){
        $sum = $num1 + $num2;
        echo "<h3> Sum is: </h3>" . $sum;
        }else {
        echo "<h3> Invalid input </h3>";
    }
}


?>