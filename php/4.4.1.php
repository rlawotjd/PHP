<?php
include_once("./4.3.test3.php");
my_db_conn($obj_conn);
// var_dump($obj_conn);

// trycatch문 에러처리를 하기위한 것

// try {
//     //code... 오류확인
// } catch (\Throwable $th) {
//     //throw $th; 에러시 실행
// }
// finally{
//     //항상작동
// }

try {
    $obj_conn=null;
    my_db_conn($obj_conn);
    $sql = "SELECT * FROM employees where emp_no=1 LIMIT 5";
    $stmt = $obj_conn->query($sql);
    $result=$stmt->fetchall();

if (count($result)===0) {
    throw new Exception("E99"); //에러를 강제로 일으키는 구문
}

    var_dump($result);
    echo "try\n";
} catch (exception $e) {
    
    echo "에러발생\n";
    if ($e->getmessage()==="E99") {
        echo "데이터가없습니다\n";
    }
    else
    echo $e->getmessage()."\n";
}
finally{
    echo "finally\n";
    $obj_conn=null;
}
echo "종료";

