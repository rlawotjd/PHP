<?php
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
<?
function make_space($n,$str)
{
    for ($i=0; $i < $n; $i++) { 
    ?>
    <div class="<?echo $str?>"></div>
    <?
    }
}
?>
</body>
</html>
