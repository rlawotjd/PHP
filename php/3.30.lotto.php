<?php
$arr=array();
for ($i=0; $i < 6; $i++)
{ 
    $arr[$i]=rand(1,45);//각방에 렌덤값 부여
    for ($u=0; $u < $i; $u++) { 
        if($arr[$u]==$arr[$i]){
            $i--;
            break;
        }
    }
}

// // $temp=rand(0,1);
// echo $arr[1];


// $arr = array();
// $arr[] = 2;
// $arr[] = 3;

// var_dump($arr);