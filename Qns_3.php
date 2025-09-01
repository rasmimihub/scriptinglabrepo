<!DOCTYPE html>
<html>
    <head>
        <title>Minutes converter</title>
    </head>
    <body>
        <h4>Caculate Minutes into Seconds</h4>
        <form action="Qns_3.php" method="post">
    <label for="minutes">Enter Minutes:</label>
    <input type="number" step="any" name="minutes" id="minutes" required>
    <button type="submit">Calculate</button>
  </form>
    </body>
</html>
<?php 
// Checing if minutes is submitted or not bhanera
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $minutes = $_POST["minutes"];

    //validate input only numeric value matra halna paune
    if (is_numeric($minutes ) && $minutes > 0){
        $seconds = $minutes * 60;
        echo "<h4>Minutes: $minutes</h4>";
        echo "<h4>$minutes Minutes is equal to " . $seconds .  " Seconds.</h4>";
    }else {
        echo "Enter positive number";
    }
}

?>
