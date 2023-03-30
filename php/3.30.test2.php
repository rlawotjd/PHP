<?php
// define("ERROR_MSG","ERROR(%d):%s ERROR가 발생했습니다.");
// printf(ERROR_MSG,1,"시스템");

$a="I am always Hello.";
$x="I am always Hello.";
$b=mb_substr($a,0,11);
$c=mb_substr($a,-1);
// echo $b;
define('IAM', "$b %s$c");
// printf(IAM,"Happy");

$arr_x=explode(" ",$x);
// print_r($arr_x);
$arr_x[3]="%s";

$impl_x=implode(" ",$arr_x);
// echo $impl_x;

define('IMPX', "$impl_x$c");
// printf(IMPX,"Happy");

// substr_replace($x,)

$str_all="I am always Hello.";
$str_expl = explode("Hello",$str_all);
$str_impl = implode("%s",$str_expl);
// printf($str_impl,"Happy");

function my_str_replace()
{
    $arg =func_get_args();//가변일 이유는없는데
    $str_all=$arg[0];
    $change=$arg[1];
    $want=$arg[2];
    $str_expl=explode($change,$str_all);
    $result_str=implode($want,$str_expl);
    return $result_str;
}
echo my_str_replace("I am always Hello.","Hello","Happy");

echo str_replace("Hello","Happy","I am always Hello.");