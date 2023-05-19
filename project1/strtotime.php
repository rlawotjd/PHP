<?php
$origin = date_create('2009-10-11');
$target = date_create('2009-10-13');
$interval = date_diff($origin, $target);
var_dump($interval);
$origin1 = new DateTime('2009-10-11');
$target1 = new DateTime('2009-10-13');
$interval1 = date_diff($origin1, $target1);
var_dump($interval1);