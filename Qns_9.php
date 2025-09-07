<!DOCTYPE html>
<html>
<head>
    <title>Football Points Calculator</title>
</head>
<body>
    <h2>Enter Match Results</h2>
    <form method="post">
        Wins: <input type="number" name="wins" required><br><br>
        Draws: <input type="number" name="draws" required><br><br>
        Losses: <input type="number" name="losses" required><br><br>
        <input type="submit" value="Calculate Points">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wins = (int)$_POST["wins"];
        $draws = (int)$_POST["draws"];
        $losses = (int)$_POST["losses"];

        function calculatePoints($wins, $draws, $losses) {
            return ($wins * 3) + ($draws * 1);
        }

        $totalPoints = calculatePoints($wins, $draws, $losses);
        echo "<h3>Total Points: $totalPoints</h3>";
    }
    ?>
</body>
</html>