<?php
function diffFrom51($n) {
    $diff = abs($n - 51);

    if ($n > 51) {
        return 3 * $diff;
    } else {
        return $diff;
    }
}

echo diffFrom51(30); 
echo "<br>";
echo diffFrom51(60); 
?>