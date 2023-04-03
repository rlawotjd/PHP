<?php

include_once("./4.3.test3.php");
my_db_conn($obj_conn);
// var_dump($obj_conn);
$sql_dml=
"
    SELECT AVG(salary)
    FROM salaries;
";

$sql_dcl_1=
"
    INSERT INTO employees(
        emp_no
        ,birth_date
        ,first_name
        ,last_name
        ,gender
        ,hire_date
        )
    VALUES(
        555555
        ,DATE(11111111)
        ,'satgat'
        ,'kim'
        ,'M'
        ,DATE(20230403)
        )
";
// $sql_arr_1=
// "
//     INSERT INTO employees(
//         emp_no
//         ,birth_date
//         ,first_name
//         ,last_name
//         ,gender
//         ,hire_date
//         )
//     VALUES(
//         :emp_no
//         ,:birth_date
//         ,:first_name
//         ,:last_name
//         ,:gender
//         ,:hire_date
//         )
// ";
// $arr_insert=array
// (
//     ":emp_no" =>555555
//     ,":birth_date" =>date(11111111)
//     ,":first_name" =>"satgat"
//     ,":last_name" =>"kim"
//     ,":gender" =>"M"
//     ,":hire_date" =>date(20230403)
// );

$sql_dcl_2=
"
    UPDATE employees 
    SET last_name = '길동'
        ,first_name='홍'
    where emp_no=555555
";

$sql_dcl_3=
"
    DELETE FROM employees
    where emp_no=555555
"
;

// $stmt=$obj_conn->prepare($sql_1);
// // $stmt=$obj_conn->prepare($sql_2);
// // $stmt=$obj_conn->prepare($sql_3);
// // $stmt=$obj_conn->prepare($sql_4);
// $stmt->execute();
// $resert=$stmt->fetchAll();

// // $obj_conn->commit();

// var_dump($resert);

// function fnc_test_dml($sql)
// {
//     my_db_conn($obj_conn);
//     $stmt=$obj_conn->prepare($sql);
//     $stmt->execute();
//     $resert=$stmt->fetchAll();
//     return $resert;
// }

// var_dump(fnc_test_dml($sql_dml));

function fnc_test_dcl($sql)
{
    my_db_conn($obj_conn);
    $stmt=$obj_conn->prepare($sql);
    $stmt->execute();
    $resert=$stmt->fetchAll();
    $obj_conn->commit();
    return $resert;
}

var_dump(fnc_test_dcl($sql_dcl_3));