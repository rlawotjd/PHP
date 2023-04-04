<?php
include_once("./4.3.test3.php");
my_db_conn($obj_conn);
// var_dump($obj_conn);

$sql_1="SELECT *
FROM department";
$sql_2="SELECT *
FROM dept_manager LIMIT 1";

// my_db_conn($obj_conn);
// $stmt=$obj_conn->query($sql_1);
// $resert=$stmt->fetchAll();

// function fnc_err_scan($sql)
// {
//     try {
//         $obj_conn=null;
//         my_db_conn($obj_conn);
//         $stmt = $obj_conn -> query($sql);
//         $resert = $stmt -> fetchAll();
//         var_dump($resert);
//         echo "정상종료\n";
        
//         // throw new Exception("Error Processing Request", 1);
        
//     } catch (exception $err) {
//         $err_mas=$err->getmessage()."\n";
//         echo $err_mas;
//     }
// }

// fnc_err_scan($sql_1);
// // fnc_err_scan($sql_2);

// function fnc_err_scan_2()
// {
//     $arr=func_get_args();
//     foreach ($arr as $key => $value) {
//         try {
//             $obj_conn=null;
//             my_db_conn($obj_conn);
//             $stmt = $obj_conn -> query($value);
//             $resert = $stmt -> fetchAll();
//             var_dump($resert);
//             echo "정상종료\n";
            
//             // throw new Exception("Error Processing Request", 1);
            
//         } catch (exception $err) {
//             $err_mas=$err->getmessage()."\n";
//             $line="---------------\n";
//             echo $line.$err_mas.$line;
//         }
//     }
// }

// fnc_err_scan_2($sql_1,$sql_2);

function fnc_err_scan($sql1,$sql2)
{
    try {
        $obj_conn=null;
        my_db_conn($obj_conn);
        $stmt1 = $obj_conn -> query($sql1);
        $resert1 = $stmt1 -> fetchAll();
        $stmt2 = $obj_conn -> query($sql2);
        $resert2 = $stmt2 -> fetchAll();
        // var_dump($resert1,$resert2);
        echo $resert1,"\n",$resert2,"\n";
        echo "정상종료\n";
        
        // throw new Exception("Error Processing Request", 1);
        
    } catch (exception $err) {
        $err_mas=$err->getmessage()."\n";
        echo $err_mas;
    }
    finally{
        $obj_conn=null;
    }
}

fnc_err_scan($sql_1,$sql_2);
