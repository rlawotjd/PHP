<?php
//야추
$dif=0;
$sam=0;
for ($i=0; $i <5 ; $i++) { 
    $dice[$i]=rand(1,6);
    // for ($u=1; $u < $i; $u++) { 
    //     if ($dice[$i]==$dice[$u]) {
    //         $i--;
    //     }
    // }
} //주사위 5개던짐
var_dump($dice);

// for ($i=0; $i < 5; $i++) { 
//     for ($u=0; $u < $i; $u++) { 
//         if ($dice[$i]==$dice[$u]) { //같은주사위수 확인
//             $sam++;
//         }
//         elseif ($dice[$i]!=$dice[$u]) { //다른 주사위 확인
//             $dif++;
//         }
//     }
// } 틀림

// echo $dif;
// echo $sam;

if ($sam==4) {
    echo "Full House";
}
elseif ($sam==6) {
    echo "4 of Kind";
}
elseif ($sam==10) {
    echo "Yacht";
}
// elseif($dif)
// elseif ($dif==6) {
//     echo "Small Sraight";
// }
// elseif ($dif==10) {
//     echo "Large Straight";
// }