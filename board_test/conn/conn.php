<?php
$db_host="localhost";
$db_name="test_board_info";
$db_user="root";
$db_pass="root506";
$chatset="utf8mb4";
$dns="mysql:host=".$db_host.";dbname=".$db_name.";charset=".$chatset;

$pdo_option = 
    array(
        PDO::ATTR_EMULATE_PREPARES      =>false
        ,PDO::ATTR_ERRMODE              =>PDO::ERRMODE_EXCEPTION
        ,PDO::ATTR_DEFAULT_FETCH_MODE   =>PDO::FETCH_ASSOC
    );

$obj_pdo= new PDO($dns,$db_user,$db_pass);

$stmt=$obj_pdo->prepare();