<!-- 
    1. post method - 리퀘스트할 떄의 데이터를 외부에서 볼수가 없다  
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
    <!-- 폶테그로 리퀘스트 -->
    <form action="4.12.4.php" method="post">
        <input type="text" name="p_test1">
        <input type="text" name="p_test2">
        <input type="text" name="p_test3">
        <input type="hidden" name="p_hidden" value="aaa">
        <button type="submit">submit</button>
    </form>
</body>
</html>