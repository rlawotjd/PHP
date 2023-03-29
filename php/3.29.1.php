<?php
// void함수
function sum($n1,$n2)
{
    echo $n1+$n2,"\n";
}
// return함수
function sum2($n1,$n2)
{
    return $n1+$n2;
}

sum(2,3);
$result = sum2(1,2);
echo $result;