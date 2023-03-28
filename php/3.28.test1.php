<?php
// function func_minus($int_a ,$int_b)
// {
//     $minus=$int_a-$int_b;
//     return $minus;
// }
// function func_div($int_a ,$int_b)
// {
//     $div=$int_a/$int_b;
//     return $div;
// }
// function func_mul($int_a ,$int_b)
// {
//     $mul=$int_a*$int_b;
//     return $mul;
// }
//     $resert_add= func_minus(5,2);
//     $resert_div= func_div(4,2);
//     $resert_mul= func_mul(3,2);
//     echo $resert_add,"\t",$resert_div,"\t",$resert_mul;

function fun_val_min()
{
    $args = func_get_args();
    $minus=0;
    foreach ($args as $key => $value) { 
        if($key===0){
            $minus=$value;
        }
        else {
            $minus-=$value;
        }
    }
    return $minus;
}
echo fun_val_min(55,10,9,8,7),"\n";

// $args=array(55,10,5);
// foreach ($args as $key => $value) { 
//     if($key===0){
//         $minus=$value;
//     }
//     else {
//         $minus-=$value;
//     }
// }
// echo $minus;

function fun_val_mul()
{
    $args = func_get_args();
    $mul=0;
    foreach ($args as $key => $value) { 
        if($key===0){
            $mul=$value;
        }
        else {
            $mul*=$value;
        }
    }
    return $mul;
}
echo fun_val_mul(55,10,9,8,7),"\n";

function fun_val_div()
{
    $args = func_get_args();
    $div=0;
    foreach ($args as $key => $value) { 
        if($key===0){
            $div=$value;
        }
        else {
            $div/=$value;
        }
    }
    return $div;
}
echo fun_val_div(55,10,5),"\n";

function func_val_div()
{
    $arg=func_get_args();
    $div=$arg[0]*$arg[0];
    foreach ($arg as $key => $value) {
        $div/=$value;
    }
    return $div;
}
echo func_val_div(55,5,10);