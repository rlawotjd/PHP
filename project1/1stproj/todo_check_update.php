<?php
    define("DOC_ROOT", $_SERVER["DOCUMENT_ROOT"]."/");
    define( "URL_DB", DOC_ROOT."1stproj/common/db_common.php");
    include_once(URL_DB);

    $arr_get=$_GET;
    // var_dump($arr_get);
    // var_dump($arr_get["list_no"]);

    // $resert_check=update_check_flg($arr_get);

    if ($arr_get["list_done_flg"]==0) {
        $arr_get["list_done_flg"]=1;
        update_check_flg($arr_get);
    }
    elseif ($arr_get["list_done_flg"]==1) {
        $arr_get["list_done_flg"]=0;
        update_check_flg($arr_get);
    }

    header("Location: todo_routine_list.php");
    exit();
?>
<!-- <!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    멍청멍청
</body>
</html> -->