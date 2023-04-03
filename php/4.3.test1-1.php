<?php
$dbc=mysqli_connect("localhost","root","root506","employees",3306);
$stmt=$dbc->stmt_init();
$sql="SELECT emp_no
        ,salary
    FROM salaries
    WHERE to_date =?
        AND salary >= ?
    ORDER	BY	salary DESC LIMIT ?;";
$def_date_str="9999-01-01";
$sal_int=50000;
$limt_int=5;
$stmt->prepare($sql);
$stmt->bind_param("sii",$def_date_str,$sal_int,$limt_int);
$stmt->execute();
$stmt->bind_result($col1,$col2);

while ($stmt->fetch()) {
    echo "$col1\t$col2\n";
}
function func_stmt($sal_int,$limt_int)
{
    //재생산성쓰래기아닌가?
    $def_date_str="9999-01-01";
    $stmt->bind_param("sii",$def_date_str,$sal_int,$limt_int);
    
}
