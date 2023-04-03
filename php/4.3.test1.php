<?php
$dbc = mysqli_connect("localhost","root", "root506", "employees", 3306);

$stmt= $dbc->stmt_init();
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
// $stmt->fetch();

while ($stmt->fetch()) {
    echo "$col1\t$col2\n";
}
mysqli_close($dbc);
// $dbc->clos(); //또이또이