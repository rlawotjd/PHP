<?php
$n="\n";
$str_abcde="abcd";
echo strrev($str_abcde),$n;

$str_1= "가나다라마";
echo substr($str_1,2),$n;//바이트기준으로 한글은3바이트여서 더미데이터남음
echo mb_substr($str_1,2),$n;
echo mb_substr($str_1,2,1),$n;//몇글자 자를거냐 몇글자를 가지고 올거냐
echo mb_substr($str_1,3,2),$n;
echo mb_substr($str_1,-2,2),$n;

$str_tng="안녕하세요. PHP입니다.";
echo mb_substr($str_tng,-7),$n;
echo mb_substr($str_tng,7),$n;
echo mb_substr($str_tng,3,5),$n;
echo mb_substr($str_tng,-11,5),$n;
echo mb_substr($str_tng,-6,-5),$n;//몇글자가지고오는거 음수는 안됨

$str_trim="  a s   de  r g      "."\n"."\t";
echo trim($str_trim),$n;//앞뒤 공간만 없엠 개행도포함
echo rtrim($str_trim),$n;
echo ltrim($str_trim),$n;

$str_len_e="abcd";
$str_len_k="가나다라";

echo strlen($str_len_e),$n;
echo strlen($str_len_k),$n;//바이트크기
echo mb_strlen($str_len_k),$n;

printf("안녕하세요.%s입니다.","php");
echo $n;
define("WELCOME","안녕하세요. %s님.");
printf(WELCOME,"홍길동");
echo $n;

$srt_sscanf="가나다라 50 abcd";
sscanf($srt_sscanf,"%s %d %s",$str_ko,$int_d,$str_en);
echo $str_ko,$n,$int_d,$n,$str_en,$n;

echo str_repeat("*",5);

$str_expl="홍길동,27세,남자,의적,아버지를아버지를못부름,조선";
$arr_expl=explode(",",$str_expl);
$arr_impl=implode("/",$arr_expl);

print_r($arr_expl);
print_r($arr_impl);