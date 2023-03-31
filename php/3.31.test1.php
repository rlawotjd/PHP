<?php

$f_open =fopen("../training/tx1.txt",'r');

// $result = " ";
// while (!feof($f_open)) {
//     print fgets($f_open);
// }

while ($lien = fgets($f_open)) {
    print $lien;
}
fclose($f_open);