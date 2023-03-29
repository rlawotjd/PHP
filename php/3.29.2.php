<?php
//min,max,floor,round,ceil,rand
echo floor(4.7),"\n";
echo round(4.7),"\n";
echo ceil(4.1),"\n";
echo min(array(3,4,8,2,47,5)),"\n";
echo max(array(3,4,8,2,47,5)),"\n";
echo rand(0,9),"\n";
// echo time(1970-01-01),"\n";
echo date('Y-m-d-M-D H:i:s'),"\n";
echo date('y-m-d-M-D h:i:s'),"\n";
echo 10000000000000000000,"\n";//고정밀도계산함수
echo mt_rand(0,10),"\n";//난수함수

echo PHP_OS_FAMILY,"\n";
echo PHP_VERSION,"\n";
var_dump($GLOBALS);
echo "\n";
phpinfo();
echo "\n";
define('INT_ONE', 1);//상수 선언(명령규칙 : 상수명은 꼭 대문자로 작성한다.)
echo INT_ONE;

