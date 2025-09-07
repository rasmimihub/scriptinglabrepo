<?php
function findStringIndex($array, $string) {
    // Use array_search to find the index
    $index = array_search($string, $array);

    // If the string is not found, array_search returns false
    if ($index === false) {
        return -1;
    }

    return $index;
}

$myArray = ["boy", "girl", "boy"];
echo findStringIndex($myArray, "boy"); 
echo "<br>";
echo findStringIndex($myArray, "girl");
echo "<br>";
echo findStringIndex($myArray, "grape");  
?>