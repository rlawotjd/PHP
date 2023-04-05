<?php
// 2번 aaa
// 3번fnc_refernce2에서 값 변경
// 1번aaa
// 4번fnc_refernce2에서 값 변경

function fnc_reference2(&$param_str)
{
    echo "2번 : $param_str\n";
    $param_str="바뀔값";
    echo "3번 : $param_str\n";
}
$str="aaa";
echo "1번 : $str\n";
fnc_reference2($str);
echo "4번 : $str\n";