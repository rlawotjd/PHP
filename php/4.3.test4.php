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

// $sql_dcl_2=
// "
//     UPDATE employees 
//     SET last_name = '길동'
//         ,first_name='홍'
//     where emp_no=555555
// ";

// $sql_dcl_arr1=
// "
//     UPDATE employees 
//     SET last_name = :last_name
//         ,first_name= :first_name
//     where emp_no= :emp_no
// ";
// $arr_dcl_1=array(
//     ":last_name"    =>"길동"
//     ,":first_name"  =>"홍"
//     ,":emp_no"      =>555555
// );

$sql_dcl_3=
"
    DELETE FROM employees
    where emp_no=555555
"
;

$sql_dcl_arr2=
"
    DELETE FROM employees
    where emp_no=:emp_no
"
;
$arr_dcl_2=array(
    ":emp_no"   =>555555
);

/*쿼리 메소드로 하는 방법*/
// $stemt= $obj_conn->query($sql_dml);
// $resert=$stemt->fetchAll();
// var_dump($resert);

/*프리페얼 메소드로 하는 방법*/
// $stmt=$obj_conn->prepare($sql_1);
// // $stmt=$obj_conn->prepare($sql_2);
// // $stmt=$obj_conn->prepare($sql_3);
// // $stmt=$obj_conn->prepare($sql_4);
// $stmt->execute();
// $resert=$stmt->fetchAll();

// // $obj_conn->commit();

// var_dump($resert);

/*dml함수*/
// function fnc_test_dml($sql)
// {
//     my_db_conn($obj_conn);
//     $stmt=$obj_conn->prepare($sql);
//     $stmt->execute();
//     $resert=$stmt->fetchAll();
//     return $resert;
// }

// var_dump(fnc_test_dml($sql_dml));
/*dcl함수*/
function fnc_test_dcl($sql)
{
    my_db_conn($obj_conn);
    $stmt=$obj_conn->prepare($sql);
    $stmt->execute();
    $resert=$stmt->fetchAll();
    $obj_conn->commit();
    // flush PRIVILEGES; 세션이 달라서 의미없
    return $resert;
}

var_dump(fnc_test_dcl($sql_dcl_3));


