<?php
// unset()
$arr_space = array(
    array(1,2,3)
    ,array(4,5,6)
    ,array(7,8,9)
    ,array(
        "dont_want"=>array(10,11,12)
        ,array(13,14,15)
        ,array(
            array(16,17,18)
            ,array(
                array(19,20,21)
                ,array(22,23,24)
            )
            ,array("key1"=>25,26,27)
        )
    )
)
;
// unset($arr_space[3]["dont_want"]);
// print_r($arr_space);

$arr_ass_del = array(
        "a"=>1
        ,"b"=>2
        ,"c"=>3
        ,"d"=>4
    )
;
unset($arr_ass_del["c"]);
print_r($arr_ass_del);