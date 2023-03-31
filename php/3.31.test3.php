<?php
$f_open =fopen("../training/tx1.txt",'r+');

$f_link="../training/tx1.txt";
$arr_f= file($f_link);
// var_dump($arr_f);

// $arr_f_a=implode("\n",$arr_f);
// $arr_f_b=explode("국밥",$arr_f_a);
// $arr_f_c=implode("국밥"."\n"."스테이크",$arr_f_b);

// var_dump($arr_f_c);

// fputs($f_open,$arr_f_c);
// function fuc_gu_n_p($str)
// {
    
// $result_f="";
// foreach ($arr_f as $key => $value) {
//     // if ($value=="국밥") { // 국밥."\n"상태
//         if (trim($value)=="국밥") { 
//             $result_f.=$value."스테이크\n";
//         }
//         else{
//             $result_f.=$value;
//         }
//     }
//     return $result_f;
// // }
// // print(fuc_gu_n_p("스테이크"));
// fputs($f_open,$result_f);
fclose($f_open);