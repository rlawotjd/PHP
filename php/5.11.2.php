<?php

$user_id = "php506";
$user_pw = "506";

//session 명 지정, 지정 하지 않으면 쿠키의 세션명이 "phpsessid"로 지정
session_name("dk4yc8nwwtge3");

//session 시작

session_start();

//---
//유저 인증작업 필요(지금 생략)
//---

//session 에 데이터 저장
$_SESSION["id"] = $user_id;
$_SESSION["del"] = "delet";
