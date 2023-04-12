<?php
?>
<!-- 
// http://localhost/mini_board/doc/src/board_list.php?page_num=1
// 프로토컬 / 도메인 / 헤스                            / 쿼리스트링

// get methode로 데이터 넘겨주는 방법 1
// 쿼리스트링에 키와 값을 셋팅 해준다
//http://localhost/mini_board/doc/src/board_list.php?page_num=1&key1=val1
// form tag 이용방법
-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4.12.2.php" method="get">
        <input type="text" name="test1" value="testvalue1">
        <input type="text" name="test2" value="testvalue2">
        <input type="text" name="test3" value="testvalue3">
        <button type="subimt">submit</button>
    </form>
    <!--
        http://localhost/4.12.1.php?test1=testvalue1 
        으로이동           페이지이름/네임/밸류    
    -->
    <br>
    <a href="http://localhost/4.12.1.php?test1=testvalue1">에이테그</a>
</body>
</html>