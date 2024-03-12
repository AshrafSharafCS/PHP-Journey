<?php function mergesort($inputarray)
{
   
    $length = sizeof($inputarray);
    if ($length > 1) {
        $half = (int) ($length / 2);
        $lefthalf = array_slice($inputarray, 0, $half);
        $righthalf = array_slice($inputarray, $half);


        $lefthalf = mergeSort($lefthalf);
        $righthalf = mergeSort($righthalf);

    }
    $array=[];
    if ($lefthalf[0] <= $righthalf[0]) {
        $array[] = $lefthalf[0] ;
    } else {
        $array[] = $righthalf[0];
    }

    return $array;
}


?>  