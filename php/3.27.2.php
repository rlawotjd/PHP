<?php
$arr_space = array(
        array(1,2,3)
        ,array(4,5,6)
        ,array(7,8,9)
        ,array(
            array(10,11,12)
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
// 27
echo $arr_space[3][2][2][1],"\n";
// echo $arr_space["key1"],"\n";
// 22 
echo $arr_space[3][2][1][1][0],"\n";
$want_arr= $arr_space[3][2][1][1];
echo $want_arr[0];

$arr_temp_3_c=array(
        array(9,10,11)
    )
;