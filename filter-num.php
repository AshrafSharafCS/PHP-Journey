<?php
function filterNum($string)
{
    $result = [];
    $num = [];
    
    for ($i = 0; $i < strlen($string); $i++) {
        $index=$string[$i];
        if (ctype_digit($index)) {
            $num[] = $index[$i];
        } elseif ($num !== '') {
            $result[] = intval($num);
            unset($num);

        }
    }
    return $result; 
}


?>