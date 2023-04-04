<?php
// $sum=0;
// for ($i=1; $i <= 100; $i++) { 
//     if ($i%2==0) {
//         $sum+=$i;
//     }
// }
// echo $sum;

$arr_ass=array(
    "a"=>1
    ,"b"=>2
    ,"info"=>
        array(
            "info_a"=>3
            ,"info_b"=>4
            ,"info_arr"=>array(
                "f_1"=>5
                ,"f_2"=>7
            )
        )
);

$arr_anw_3=$arr_ass["info"]["info_a"];
$arr_anw_7=$arr_ass["info"]["info_arr"]["f_2"];
$arr_anw_5=$arr_ass["info"]["info_arr"]["f_1"];

echo $arr_anw_3,"\t",$arr_anw_5;