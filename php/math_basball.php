<?php
// 숫자야구

$temp_anw[0]=9;
$temp_anw[1]=8;
$temp_anw[2]=7;

$strik=0;
$boll=0;
$out=3;

// $rand_int=rand(0,9);
for ($i=0; $i < 3; $i++) { //정답 랜덤값 부여
    $arr_anw[$i]=rand(0,9);
    for ($u=0; $u < $i; $u++) { 
        if ($arr_anw[$i]==$arr_anw[$u]) {
            $i--;
        }
    }
}
// var_dump($arr_anw);


for ($i=0; $i < 3; $i++) { 
    if ($arr_anw[$i]==$temp_anw[$i]) {
        $strik++;
        $boll--;
    }
    for ($u=0; $u < 3; $u++) { 
        if ($arr_anw[$i]==$temp_anw[$u]) {
            $boll++;
            $out--;
        }
    }
}
var_dump($arr_anw);
echo "Strik : ".$strik."\tboll : ".$boll."\tout : ".$out;