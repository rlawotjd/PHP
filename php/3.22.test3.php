<?php
$a=-1;
// switch ($a) {
//     case 
    switch ($a){
    case 100:
        $g="A+";
        break;
    case $a>90:
        $g="A";
        break;
    case $a>80:
        $g="B";
        break;
    case $a>70:
        $g="C";
        break;
    case $a>60:
        $g="D";
        break;
    case $a>0:
        $g="F";
        break;
    default:
        $g= "err";
        break;
}
        echo "당신의 점수는",$a,"점 입니다.",$g;
    //     break;
    //     default:
//     echo "ERR다시 확인해주세요";
//     break;
// }
?>