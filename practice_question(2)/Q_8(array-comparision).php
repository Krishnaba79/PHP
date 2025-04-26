<?php 
function isSubset($arr1, $arr2, $m, $n)
{
    $i = 0;
    $j = 0;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $m; $j++)
        {
            if($arr2[$i] == $arr1[$j])
                break;
        }
        if ($j == $m)
            return 0;
    }
    return 1;
}

    $arr1 = array(11, 1, 13, 21, 3, 7);
    $arr2 = array(11, 3, 7, 1);

    $m = count($arr1);
    $n = count($arr2);

    if(isSubset($arr1, $arr2, $m, $n))
        echo "arr2[] is subset of arr1[] ";
    else
        echo "arr2[] is not a subset of arr1[]";     
?>