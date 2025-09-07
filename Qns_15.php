<?php
function getValueByIndex($index, $array) {
    // Check if the index exists in the array
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return "Index not found in array.";
    }
}
$myArray = ["BCA", "BIT", "CSIT"];
echo getValueByIndex(1, $myArray); 
echo "<br>";
echo getValueByIndex(2, $myArray); 
echo "<br>";
echo getValueByIndex(5, $myArray);
?>