<!DOCTYPE html>
<html>
<head>
  <title>Circle Area Calculator</title>
</head>
<body>
  <h2>Calculate Area of a Circle</h2>
  <form action="Qns2.php" method="post">
    <label for="radius">Enter Radius:</label>
    <input type="number" step="any" name="radius" id="radius" required>
    <button type="submit">Calculate</button>
  </form>
</body>
</html>
<?php
// Define π as a constant
define("PI", 3.14159265359);

// Check if radius is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST["radius"];

    // Validate input
    if (is_numeric($radius) && $radius > 0) {
        $area = PI * pow($radius, 2);
        echo "<h3>Radius: $radius</h3>";
        echo "<h3>Area of Circle: " . round($area, 2) . "</h3>";
    } else {
        echo "<h3>Please enter a valid positive number for radius.</h3>";
    }
}
?>