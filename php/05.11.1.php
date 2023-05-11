<?php

// cookie 생성
setcookie("name","honggildong",time()+30);
setcookie("age","30",time()+300);

setcookie("age","",0); //쿠키 삭제 방법

var_dump($_COOKIE);
echo $_COOKIE["name"];