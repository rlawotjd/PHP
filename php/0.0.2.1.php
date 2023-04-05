<?php
//야추
$dif=0;
$sam=0;
$cheak_l=0;
$cheak_s=0;

for ($i=0; $i <5 ; $i++) { 
    $dice[$i]=rand(1,6);
    // for ($u=1; $u < $i; $u++) { 
    //     if ($dice[$i]==$dice[$u]) {
    //         $i--;
    //     }
    // }
} //주사위 5개던짐
var_dump($dice);

for ($i=0; $i < 5; $i++) { 
    for ($u=0; $u < $i; $u++) { 
        if ($dice[$i]==$dice[$u]) { //같은주사위수 확인
            $sam++;
        }
        elseif ($dice[$i]!=$dice[$u]) { //다른 주사위 확인
            $dif++;
        }
    }
} //다른 조건 필요 1,3,4,5,6이 나와도 라지 나옴 ss

for ($i=0; $i < 5; $i++) {  // 라지 스트레이트
    if ($dice[$i]==1 || $dice[$i]==6) { //1과 6이 같이나왔나 확인
        $cheak_l++;
    }
    else if ($dice[$i]==2 || $dice[$i]==5) { //1과 6이 같이나왔나 확인
        $cheak_s++;
    }
}


echo $dif,"\n";
echo $sam,"\n";
echo $cheak_s,"\n";
echo $cheak_l,"\n";

if ($sam==4) {
    echo "Full House";
}
elseif ($sam==6) {
    echo "4 of Kind";
}
elseif ($sam==10) {
    echo "Yacht";
}
elseif ($dif==6 && $cheak_s==2) {
    echo "Small Sraight";
}
elseif ($dif==10 &&  $cheak_s!=2) {
    echo "Small Straight";
}
elseif ($dif==10 &&  $cheak_l!=2) {
    echo "Large Straight";
}

