<?php
/*
함수명  : my_db_conn
기능    : db connect
파라미턴:PDO &$param_conn
return  :없음
 */

function my_db_conn(&$param_conn) 
{
$db_host    ="localhost";
$db_userid  ="root";
$db_userpw  ="root506";
$db_name    ="employees";
$db_charset ="utf8mb4";
$db_dns     ="mysql:host=".$db_host.";dbname=".$db_name.";carset".$db_charset;
$db_option  =array(
    PDO::ATTR_EMULATE_PREPARES  =>false 
    ,PDO::ATTR_ERRMODE          =>PDO::ERRMODE_EXCEPTION 
    ,PDO::ATTR_DEFAULT_FETCH_MODE   =>PDO::FETCH_ASSOC 

);

$param_conn= new PDO($db_dns,$db_userid,$db_userpw,$db_option);
}


$obj_conn =null;