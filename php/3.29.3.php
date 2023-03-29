<?php
$str_1="aaa";
$str_2="bbb";
echo strtoupper($str_1.$str_2),"\n";
echo strtolower($str_1.$str_2),"\n";
echo ucfirst($str_1.$str_2),"\n";//첫글자만
echo ucwords($str_1." ".$str_2),"\n";//각단어첫글자만

$url ="https://www.googl.com";
var_dump($url);
$url1="https://search.naver.com/search.naver?where=nexearch&sm=top_sug.pre&fbm=1&acr=1&acq=%EC%98%A4%EB%8A%98%EC%9D%98&qdt=0&ie=utf8&query=%EC%98%A4%EB%8A%98%EC%9D%98+%EC%9A%B4%EC%84%B8";
$arr_url=parse_url($url1);
var_dump($arr_url);
parse_str($arr_url["query"],$arr_parse);
var_dump($arr_parse);