<?php
// pdo class 다른 디비로 변경시 쿼리수정후 이용가능 확장성이 큼

$db_host    ="localhost";
$db_userid  ="root";
$db_userpw  ="root506";
$db_name    ="employees";
$db_charset ="utf8mb4";
$db_dns     ="mysql:host=".$db_host.";dbname=".$db_name.";carset".$db_charset;
$db_option  =array(
    PDO::ATTR_EMULATE_PREPARES  =>false //디비의 프리페얼드 기능을 사용하도록 설정
    ,PDO::ATTR_ERRMODE          =>PDO::ERRMODE_EXCEPTION //PDO 익셉션을 throws하도록 설정
    ,PDO::ATTR_DEFAULT_FETCH_MODE   =>PDO::FETCH_ASSOC //연상배열로 패치하도록 설정

);

$obj_conn= new PDO($db_dns,$db_userid,$db_userpw,$db_option);

$sql = 
    "
    SELECT sal.salary
        ,emp.birth_date
    FROM salaries sal
        INNER JOIN employees emp
            ON sal.emp_no=emp.emp_no
	WHERE	(
        sal.emp_no = :emp_no1
		OR sal.emp_no= :emp_no2
        )
		AND sal.to_date>NOW()
    ";

$arr_prepare = 
        array(
            ":emp_no1"=>10001
            ,":emp_no2"=>10002
        );

$stmt = $obj_conn->prepare( $sql ); //prepare 생성
$stmt->execute( $arr_prepare ); //쿼리 실행
$result = $stmt->fetchAll(); //쿼리 결과를 fetch
var_dump($result);

foreach ($result as $key => $value) {
    echo $value["salary"],"\n";
}

$obj_conn=null;