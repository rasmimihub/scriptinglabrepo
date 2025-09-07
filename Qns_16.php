<?php
function carsNeeded($people) {
    // Each car can hold 5 people
    $carCapacity = 5;

    // Use ceiling division to round up
    return ceil($people / $carCapacity);
}
echo carsNeeded(5);   
echo "<br>";
echo carsNeeded(6);   
echo "<br>";
echo carsNeeded(19);  
?>