<?php

    //2 Remove specific element by value from an array in PHP?
  
    $delete_item = 'march';
    $months = array('jan', 'feb', 'march', 'april', 'may','july','sep','oct');
    if (($key = array_search($delete_item, $months)) !== false) {
    unset($months[$key]);
    }
    var_dump($months);
    echo "<br>" ;
    echo $key;
    echo "<br>" ;
    ?>