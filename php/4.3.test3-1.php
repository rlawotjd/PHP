<?php
/*
함수명  : my_db_conn
기능    : db connect
파라미턴:PDO &$param_conn
return  :없음
 */

include_once("./4.3.test3.php");


$sql_1 = 
"
SELECT *
FROM employees 
LIMIT :limit_start
";

$arr_prepare_1 = 
array(
    ":limit_start" => 5
);
// $fnc_obj_conn=my_db_conn($obj_conn);
my_db_conn($obj_conn);
$stmt = $obj_conn->prepare($sql_1);
$stmt->execute($arr_prepare_1);
$restlt= $stmt->fetchAll();

var_dump($restlt);

// function func_qul_arr(&$param_conn,$sql,$arr_prepare)
// {
// $stmt = &$param_conn->prepare($sql);
// $stmt->execute($arr_prepare);
// $restlt= $stmt->fetchAll();

// return $restlt;
// }

// var_dump(func_qul_arr($fnc_obj_conn,$sql_1,$arr_prepare_1));

// $obj_conn =null;

// var_dump(func_qul_arr($sql_1,$arr_prepare_1));

$obj_conn =null;