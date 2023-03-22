<?php
$a=200;
($a>100 xor $a<0)?print"Err":
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
?>