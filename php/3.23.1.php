<?php
// // while문 조건투루 연산
// $i=1;
// $gugu=2;
// while($i<10){
//     echo $gugu*$i,"\t";
//     $i++;
// }
// // do{
// //     반복할 처리
// // }
// // while(조건);
// // 최소1번은 돌아감

// $i=0;
// do{
//     $i++;
//     echo $i,"do while";
// }
// while ($i==0);

// while($i==0){
//     $i++;
//     echo $i, "while";
// }

// for문
for ($i=1; $i < 10; $i++) { 
    // $u=1;
    // 밑에 $u=2가 있기때문에 필요없
    echo "\n",$i,"단\n";
    for ($u=2; $u <10 ; $u++) { 
        echo $i,"*",$u,"=",$i*$u,"\t";
    }
}