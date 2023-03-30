<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
<?php
$arr=array();
for ($i=0; $i < 6; $i++)
{ 
    $arr[$i]=rand(1,45);//각방에 렌덤값 부여
    for ($u=0; $u < $i; $u++) { 
        if($arr[$u]==$arr[$i]){
            $i--;
            break;
        }
    }

}

?>