<?php
function repeatFrontTwo($str) {
    if (strlen($str) < 2) {
        return $str;
    }

    $front = substr($str, 0, 2);
    return $front . $front . $front . $front;
}
echo repeatFrontTwo("Raaa") . "<br>";  
echo repeatFrontTwo("SH") . "<br>";       
echo repeatFrontTwo("MI") . "<br>";        
?>