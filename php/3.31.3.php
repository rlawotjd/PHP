<?php

$dbc=mysqli_connect("localhost","root","root506","employees",3306);

var_dump($dbc);

//쿼리

$result_query_empno=mysqli_query($dbc,"SELECT emp_no, first_name From employees limit 10;");


// var_dump($result_query_empno);
$rseult_row= mysqli_fetch_row($result_query_empno);
// var_dump($rseult_row);
// $rseult_row= mysqli_fetch_row($result_query_empno);
// var_dump($rseult_row);
// $result_row_all=array();
// while ($result_row_all=mysqli_fetch_row($result_query_empno)) {
//     var_dump($result_row_all);
// }
// while ($result_row_all=mysqli_fetch_assoc($result_query_empno)) { //키값으로 가지고옴
//     var_dump($result_row_all["first_name"]);
// }
mysqli_close($dbc);
