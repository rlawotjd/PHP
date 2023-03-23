<?php
$u=2;
while ($u<10) {
    $i=1;
    echo $u,"단\n";
    // i를 다시 1로 입력해야 구구단 다시시작
    while ($i<10) {
        echo $u,"*",$i,"=",$u*$i,"\t";
        $i++;
    }
    $u++;
    echo "\n";
}
?>