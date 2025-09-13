<?php
function addFront($str) {
   
    $firstThree = substr($str, 0, 3);
    
    return $firstThree . $str . $firstThree;
}

$inputs = ["Python", "JS", "Code"];

foreach ($inputs as $input) {
    echo addFront($input) . "<br>";
}
?>