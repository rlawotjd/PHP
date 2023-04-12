<?php
$get_arr=$_POST;
// var_dump($get_arr);
foreach ($get_arr as $key => $value) {
    echo $key," : ",$value,"<br>";
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4.12.test2.php" method="post">
        <label for="id_inp">아이디 : </label>
        <input type="text" name="id" id="id_inp">
        <br>
        <label for="pw_inp">비밀번호 : </label>
        <input type="password" name="pw" id="pw_inp">
        <br>
        <label for="name_inp">이름 : </label>
        <input type="text" name="name" id="name_inp">
        <br>
        <label for="birdate_inp">아이디 : </label>
        <input type="date" name="birth_date" id="birdate_inp">
        <br>
        <button type="submit">submit</button>
        <input type="hidden" name="h_page" value="h1">
        <br>
    </form>
</body>
</html>