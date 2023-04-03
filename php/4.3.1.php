<?php
$dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
// var_dump($dbc);
$i=10;
// prepared statement : 유동적 데이터
$stmt = $dbc->stmt_init(); // statement 셋팅
$stmt->prepare("SELECT emp_no, first_name From employees limit ?;");
$stmt->bind_param("i",$i); //prepare 셋팅 int,str,double,blob(미디어같은 큰 개체) "isi"
$stmt->execute(); //DB에 쿼리 질의 실행

/*질의결과를 우리가 지정한 변수를 가지고오는 방법*/
$stmt->bind_result($col1, $col2 //prepare 테이블 갯수 확인 col1=emp_no , col2=first_name
); //질의 결과를 각 야규먼트에(col1,col2,,) 저장을 위한 셋팅
// $stmt->fetch(); //brind_result에 셋팅한 아규먼트에 값을 저장

while ($stmt->fetch()) {
    echo"$col1\t$col2\n";
}

/*연상배열로 가지고오는 방법*/
// $result=$stmt->get_result(); //질의 결과를 저장

// while ($row=$result->fetch_assoc()) {
//     var_dump($row);
// }

// var_dump($col1,$col2);
