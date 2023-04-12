<?php
    var_dump($_GET);
    // $_GET 은 원본 데이터므로 값이 수정 안되게 조심
    echo $_GET["test2"]; //이런방식보단
    $post_get =$_GET; //새로 변수 적용후 
    echo $post_get["test2"]; //이용바람
    var_dump($_GET);
    ?>