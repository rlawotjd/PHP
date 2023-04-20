<?php

$hour_tmp = range(0,23);

// var_dump($hour);
foreach ($hour_tmp as $key => $value) {
    if ($key<10) {
        $hour[]="0".$value;
    }
    else{
        $hour[]=$value;
    }
}
var_dump($hour);