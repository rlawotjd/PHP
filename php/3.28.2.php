<?php

// function rcc($param_a)
// {
//     if ($param_a===1) {
//         return 2;
//     }
//     return $param_a*rcc($param_a-1);
//     // rcc5=5*rcc4 => 5*4*rcc3.....=5!
// }

// echo rcc(5);


// function fuc_add()
// {
    // global $int_a;
    // 전역변수 선언
    // $int_a+=10;
    // $int_a=$int_a+10;

    // return $int_a;
// }

// $int_a = 5;
// 전역변수 값대입
// echo fuc_add();
// $int_a = fuc_add();

// function fnc_add_1()
// {
//     $i=1;
//     echo $i,"\n";
//     $i++;
// }

// for ($i=0; $i < 10; $i++) { 
//     fnc_add_1();
// }

function fnc_add_1()
{
    static $i=1;
    echo $i,"\n";
    $i++;
}

for ($i=0; $i < 10; $i++) { 
    fnc_add_1();
}
