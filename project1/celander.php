<?php
// 1970-01-01(금)
$a=time()+28800;
$a/=86400;
$b=floor($a);
$b%=7;
if ($b==0) {
    $c="목";
}
elseif ($b==1) {
    $c="금";
}
elseif ($b==2) {
    $c="토";
}
elseif ($b==3) {
    $c="일";
}
elseif ($b==4) {
    $c="월";
}
elseif ($b==5) {
    $c="화";
}
elseif ($b==6) {
    $c="수";
}
echo $a."\n";
echo $b."\n";
echo "오늘의 요일은 : ".$c;
