<?php
define('document',$_SERVER["DOCUMENT_ROOT"]."/");
define('url_link',document."board_test/conn/conn.php");
include_once(url_link);

// var_dump(board_list_info());
$page_now=1; //?
$limit_info=5;
$offset= $page_now*$limit_info-$page_now;
$arr_limit_offset=array(
    "limit"=>$limit_info
    ,"offset"=>$offset
);

$list_info=board_list_info($limit_info);
$list_count=board_list_info_count();

$max_page=ceil($list_count/$limit_info);
// $page_butten()
// $get_arr=$_GET;
// var_dump($get_arr);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
    <table>
        <thead>
            <th>
                번호
            </th>
            <th>
                제목
            </th>
            <th>
                작성일자
            </th>
        </thead>
        <tbody>

            <?php
            foreach ($list_info as $value) {
                ?>
                <tr>
                    <td><?echo $value["board_no"]?></td>
                    <td><?echo $value["board_title"]?></td>
                    <td><?echo $value["board_create_date"]?></td>
                </tr>
            <?}
            ?>
        </tbody>
    </table>
    <div>

    </div>
</body>
</html>