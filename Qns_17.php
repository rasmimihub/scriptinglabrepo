<?php
function computeSum($a, $b) {
    if ($a === $b) {
        return 3 * ($a + $b);
    } else {
        return $a + $b;
    }
}
echo computeSum(5, 5);
echo "<br>";
echo computeSum(4, 6);  
?>