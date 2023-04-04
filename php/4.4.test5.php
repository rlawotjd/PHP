<?php

// function fnc_global()
// {
//     global
//     $global_i;
//     $global_i=0;
// }
// $global_i=5;
// fnc_global();

// // echo $global_i;

// function fnc_static()
// {
//     static $statuc_i =0;
//     echo $statuc_i;
//     $statuc_i++;
// }
// fnc_static();
// fnc_static();
// fnc_static();
// fnc_static();
// fnc_static();
// fnc_static();
// fnc_static();
// // echo $statuc_i; //에러발생

// function fnc_reference(&$parm_str)
// {
//     $parm_str = "fnc_reference";
// }
// $str="aaa";
// fnc_reference($str);
// echo $str;

function fnc_star_make($star)
{
    for ($i=0; $i < $star; $i++) { 
        echo "*";
    }
echo "\n";
}
// fnc_star_make(10);
function fnc_star_make_stag($star)
{
    for ($i=1; $i <= $star; $i++) { 
        echo fnc_star_make($i);
    }
}

fnc_star_make(1);
fnc_star_make(2);
fnc_star_make(3);
fnc_star_make(4);
fnc_star_make(5);

fnc_star_make_stag(5);