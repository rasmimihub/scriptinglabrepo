<!DOCTYPE html>
<html>
    <head>
        <title>Age in days</title>
    </head>
    <body>
            <h2>Age in Day calculator</h2>
            <form action="Qns_6.php" method="post">
                <label for="age">Enter your age in years:</label>
                <input type="number" step="any" name="age" id="age"> <br />
                <button type="submit">Calculate</button>
            </form>
    </body>
</html>
<?php 
//check if age is input or not
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $age = $_POST["age"];

    //value positive numeric value hoki nai chck
    if (is_numeric($age) && $age > 0){
        $days = $age * 365;
        echo "<h3>$age Years is equal to :" . $days . " Days.</h3>";
    }else {
        echo "Enter positive number for age";
    }
}

?>