<!-- 
    사용자가 입력한 겟메소드로 http리퀘스트를 합니다
    입력한 데이터의 상세 내역은 아래와 같음
    key : id, pw, name, birth_date
    각각의 데이터 추력 var_dump, print_r 금지
-->
<?php
    $get_arr=$_GET;
    // var_dump($get_arr);
    if ($get_arr!=null) {
        echo $get_arr["id"],"\n",$get_arr["pw"],"\n",$get_arr["name"],"\n",$get_arr["birth_date"],"\n";
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
    <form action="4.12.test1.php" method="get">
        <label for="id_inp">아이디 : </label>
        <input type="text" name="id" id="id_inp">
        <br>
        <label for="pw_inp">비밀번호 : </label>
        <input type="password" name="pw" id="pw_inp">
        <br>
        <label for="name_inp">이름 : </label>
        <input type="text" name="name" id="name_inp">
        <br>
        <label for="birth_inp">생년월일 : </label>
        <input type="date" name="birth_date" id="birth_inp">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>