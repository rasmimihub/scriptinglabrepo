<?php
function recursiveStrLen($str, $index = 0) {
    // Base case: if the character at current index is not set, we've reached the end
    if (!isset($str[$index])) {
        return 0;
    }

    // Recursive case: current ko count garera next ma jane
    return 1 + recursiveStrLen($str, $index + 1);
}


echo recursiveStrLen("Hey girl how are u?"); 
?>