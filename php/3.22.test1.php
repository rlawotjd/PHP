<?php
$a=-50;
$err="ERR다시확인해주세요ERR";
// int a;
// printf("당신의 점수를 입력하세요");
// scanf("%d",&d);아불편,,,,
// $stdin = fopen('ptp://stdin','r');
// $filecontents = fread($stdin, 1024);
// fclose($stdin);

// echo "적은값 :".$a;

// if ($a>100){
    //     $g="\rERR다시확인해주세요ERR";
    // }
if ($a>100){
echo $err;
}
else if($a<0){
echo $err;
}
else{
    if ($a==100){
        $g="A+";
    }
    else if ($a>=90){
        $g="A";
    }
    else if ($a>=80){
        $g="B";
    }
    else if ($a>=70){
        $g="C";
    }
    else if ($a>=60){
        $g="D";
    }
    else{
        $g="F";
    }
    echo "당신의점수는 ",$a,"점 입니다.",$g;
}
// else{
    //     $g="ERR다시확인해주세요ERR";
    // }
?>