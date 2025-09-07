<?php
function areLengthsEqual($str1, $str2) {
    return strlen($str1) === strlen($str2);
}


echo areLengthsEqual("momyyyy", "baba") ? 'true' : 'false';  
echo "<br>";
echo areLengthsEqual("rashmiiiii", "rashmuuuuu") ? 'true' : 'false'; 
?>