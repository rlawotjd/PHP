<?php
$a=null;
// switch ($a) {
//     case 
if ($a>100 || $a<0){
    echo "잘못된 점수입니다 다시 확인해주세요";
}
else if($a===null){
    echo "잘못된 점수입니다 다시 확인해주세요"; 
}
else if($a==0){
    $g="F";
    echo "당신의 점수는",$a,"점 입니다.",$g;
    // 이럴꺼면 if문을 작성하는게 맞는듯,,,
}
else{
    switch ($a){
        case 100:
            $g="A+";
            break;
        case $a>90:
            $g="A";
            break;
            // 왜여기서 0인게 맞다고나오냐?
        case $a>80:
            $g="B";
            break;
        case $a>70:
            $g="C";
            break;
        case $a>60:
            $g="D";
            break;
        // case $a>=0:
        //     $g="F";
        //     break;
        default:
            $g="F";
            break;
        }
        echo "당신의 점수는",$a,"점 입니다.",$g;
    }
//     break;
    //     default:
//     echo "ERR다시 확인해주세요";
//     break;
// }
?>