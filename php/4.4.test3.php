<?php
function fnc_sum($param_a,$param_b)
{
    $sum=$param_a+$param_b;
    return $sum;
}
var_dump(fnc_sum(5,6));

function fnc_sum_d(...$param_num) //가변 파라미터
{
    return array_sum($param_num);
}

var_dump(fnc_sum_d(1,2,3,4,5,5,5,5));
