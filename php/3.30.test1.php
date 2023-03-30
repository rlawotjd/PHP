<?php
$arr=array();
// $arr[0]=9;
for ($i=1; $i < 6; $i++) { 
    $temp=rand(0,7);//랜덤값 6개뽑음
    for ($u=0; $u < 6; $u++) { 
        $arr[$i]=$temp;//각방에 렌덤값 부여
        if($arr[$u]==$arr[$i]){
            // $i--;
        }
    }
}

// $temp=rand(0,1);
var_dump($arr);
