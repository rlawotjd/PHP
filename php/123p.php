<?php

// 3.
function my_len($args){
    // $args = func_get_args();
    $i=0;
    foreach ($args as $key => $value) 
    {
        $i++;
    }
    return $i;
}
$arg_base= array(1,2,3,4,5);
echo my_len($arg_base);

