<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>
    <?php
    // Define the function
    function addNumbers($a, $b) {
        return $a + $b;
    }

    // Example usage
    $num1 = 7;
    $num2 = 13;
    $sum = addNumbers($num1, $num2);
    ?>

    <h1>Adding Two Numbers in PHP</h1>
    <p>First Number: <?php echo $num1; ?></p>
    <p>Second Number: <?php echo $num2; ?></p>
    <p><strong>Sum:</strong> <?php echo $sum; ?></p>
</body>
</html>