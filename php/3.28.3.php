<?php

// call by value

// function fnc_val($int_a,$int_b)
// {
//     $int_a=3;
//     $int_b=4;
// }

// $int_a =1;
// $int_b =2;

// fnc_val(5,6);
// echo $int_a,"\t",$int_b;
// // 3    4
// // 1    2

function fnc_val(&$a,&$b)
{
    $a=3;
    $b=4;
}

$int_a =1;
$int_b =2;

fnc_val($int_a,$int_b);

echo $int_a,"\t",$int_b,"\n";

function fnc_val1($a,$b)
{
    $a=3;
    $b=4;
    return array($a,$b);
}

$int_a =1;
$int_b =2;

fnc_val1($int_a,$int_b);

echo print_r(fnc_val1($int_a,$int_b));