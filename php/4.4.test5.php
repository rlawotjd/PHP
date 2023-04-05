<?php
/*****************************
파일명 : 
시스템명 :
이력
    v001 : new - d111
    v002 : fnc_star_make 수정 -d111

********************************** */




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

// function fnc_star_make($star) //v001 del
// function fnc_shape_make($num=5, $shape="*") // v002 add
// {
//     // for ($i=0; $i < $star; $i++) { //v001 del
//     for ($i=0; $i < $num; $i++) {  //v002 add
//         // echo "*"; //v001 del
//         echo $shape; //v002 add
//     }
//     echo "\n";
// }
// fnc_shape_make(10,"@");
// function fnc_shape_make_stag($num, $shape = "*") // 스타가 아니기 때문에 숫자/명칭 바꿈 //명칭바꾸니까 2중작업해야하네
// {
//     for ($i=1; $i <= $num; $i++) { 
//         echo fnc_shape_make($i,$shape);
//     }
// }


// // fnc_shape_make("^"); // 파라미터 순서는 지켜야 함 이렇게하면 $nun에 입력 = 무한루프 
// fnc_shape_make(); 
// // fnc_shape_make(,"^"); /
// fnc_shape_make(2,"$");
// fnc_shape_make(3,"$");
// fnc_shape_make(4,"$");
// fnc_shape_make(5,"$");

// fnc_shape_make_stag(5,"$");