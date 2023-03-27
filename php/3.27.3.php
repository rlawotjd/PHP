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
// print_r($arr_ass_del);

// 중복되지 않는 원소를 반환 array_diff()
$arr_diff_1 = array(1,2,3);
$arr_diff_2 = array(1,2,4);

$arr_diff = array_diff($arr_diff_1,$arr_diff_2);
// print_r($arr_diff);
// 앞이 기준 배열이며(arr_diff_1) 2번방의 '3'이 다르다고 나옴 인덱스 길이가 길수록 속도가 느려짐

// 배열의 정렬 : asort():방의 값을 오른차수로 정렬, arsort(): 방의 값을 내린차수로 정렬, ksort(): ,krsort() : 
// $arr_asort= array(5,7,1,9,2,3);
// $arr_asort_result = asort($arr_asort);
// print_r($arr_asort);

// $arr_arsort= array(5,7,1,9,2,3);
// arsort($arr_arsort);
// print_r($arr_arsort);

$arr_ass_ksort = array(
    "a"=>1
    ,"d"=>4
    ,"c"=>3
    ,"b"=>2
)
;
ksort($arr_ass_ksort);
print_r($arr_ass_ksort);

$arr_ass_krsort = array(
    "a"=>1
    ,"d"=>4
    ,"c"=>3
    ,"b"=>2
)
;
krsort($arr_ass_krsort);
print_r($arr_ass_krsort);

// 키값 기준으로 정렬

echo count($arr_ass_krsort);
// array의 사이즈를 반환하는 함수

