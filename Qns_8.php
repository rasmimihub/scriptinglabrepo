<!DOCTYPE html>
<html>
<head>
    <title>Animal Leg Counter</title>
</head>
<body>
    <h2>Enter the number of animals</h2>
    <form method="post">
        Chickens (2 legs): <input type="number" name="chickens" min="0" required><br><br>
        Cows (4 legs): <input type="number" name="cows" min="0" required><br><br>
        Pigs (4 legs): <input type="number" name="pigs" min="0" required><br><br>
        <input type="submit" value="Calculate Legs">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chickens = ($_POST["chickens"]);
        $cows = ($_POST["cows"]);
        $pigs = ($_POST["pigs"]);

        $total_legs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);

        echo "<h3>Total number of legs: $total_legs</h3>";
    }
    ?>
</body>
</html>
