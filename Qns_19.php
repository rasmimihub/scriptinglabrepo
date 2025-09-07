<?php
function addIfPrefix($str) {
    // Check if the string starts with 'if'
    if (substr($str, 0, 2) === "if") {
        return $str;
    } else {
        return "if " . $str;
    }
}
echo addIfPrefix("if else") . "<br>";  
echo addIfPrefix("else") . "<br>";    
echo addIfPrefix("if") . "<br>";      
?>