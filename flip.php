<?php


function flip($number)
{
    $result = [];
    if ($number > 9) {
        $digit = $number % 10;
        $result[] = $digit;
        $result = array_merge($result, flip((int) ($number / 10)));
    } else {
        $result[] = $number;
    }

    return $result;
}


print_r(flip(1234));

?>