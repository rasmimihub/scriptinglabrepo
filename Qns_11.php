<?php
function isDivisibleByFive($number) {
    return $number % 5 === 0;
}

echo isDivisibleByFive(101) ? 'true' : 'false'; 
echo "<br>";
echo isDivisibleByFive(75) ? 'true' : 'false';  
?>