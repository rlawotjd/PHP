<?php
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

$obj_conn= new PDO($db_dns,$db_userid,$db_userpw,$db_option);

$sql=
"
INSERT INTO departments(
	dept_no
	,dept_name
	)
VALUES(
	:dept_no
	,:dept_name
	)
";
$arr_prepare=array(
    ":dept_no"=>"d011"
    ,":dept_name"=>"PHP풀스택"
);

$stmt=$obj_conn->prepare($sql);
$result=$stmt->execute($arr_prepare);

$obj_conn->commit();
// flush privileges;새로고침

// var_dump($result);
$obj_conn=null;
