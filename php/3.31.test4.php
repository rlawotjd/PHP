<?php

$dbc=mysqli_connect("localhost","root","root506","employees",3306);

// var_dump($dbc);

// $result_query_null=mysqli_query($dbc,"SELECT *
// FROM salaries1;");
$sql=
    "
    SELECT 
        emp_no
        ,CONCAT_WS(' ',last_name,first_name)AS fullname		
        ,gender
        ,birth_date 
    FROM 
        employees 
    WHERE 
        emp_no<=10005;
    ";
$result_query=mysqli_query($dbc,$sql);
var_dump($dbc,$sql);
// $obj_a=new mysqli#1 //todo public $affected_rows =>int(5)
// $count=mysqli_num_rows($result_query_null);
// $count=mysqli_num_rows($result_query);
// echo $count;
mysqli_close($dbc);
// $null="";
// if ($count!=0) {
//     while ($temp=mysqli_fetch_assoc($result_query_null)) 
//     {
//         echo($temp["emp_no"]."\t");
//         echo($temp["fullname"]."\t");
//         echo($temp["gender"]."\t");
//         echo($temp["birth_date"]."\n");
//     }
// }
// else {
//     echo "데이터가 비어 있습니다.";
// }
// if ($count==0) {
//     echo "데이터가 비어 있습니다.";
// }
// else {
//     while ($temp=mysqli_fetch_assoc($result_query)) 
//     {
//         // echo($temp["emp_no"]."\t");
//         // echo($temp["fullname"]."\t");
//         // echo($temp["gender"]."\t");
//         // echo($temp["birth_date"]."\n");
//         echo implode("\t",$temp),"\n";
//     }
// }

// while ($temp=mysqli_fetch_assoc($result_query)) {
//     echo($temp["emp_no"]."\t");
//     echo($temp["fullname"]."\t");
//     echo($temp["gender"]."\t");
//     echo($temp["birth_date"]."\n");
// }

// $flg_cnt=false;
// while ($temp=mysqli_fetch_assoc($result_query)) {
//     echo implode(" ",$temp_row),"\n";
//     $flg_cnt=true;
// }
// if (!$flg_cnt) {
//     echo "데이터가 없습니다.";
// }
function fuc_(Type $var = null)
{
    # code...
}