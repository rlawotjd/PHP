<?php

$gugu=fopen("../training/gugudan.txt","w");
// $u=2;
// for ($i=2; $i < 10; $i++) { 
//     fputs($gugu,"$i 단\n");
//     for ($u=1; $u < 10; $u++) { 
//         $asw=$i*$u;
//         fputs($gugu,"$i*$u=$asw\n");
//     }
// }

// function makegugu($n,$tan)
// {
//     if ($tan==0) {
//         return $n."단\n";
//     }
//     else {
//         return "$n*$tan=".$n*$tan."\n";
//     }    
// }

// for ($i=2; $i < 10; $i++) { 
//     for ($u=0; $u < 10; $u++) { 
//         fputs($gugu,makegugu($i,$u));
//     }
// }

function makegugu2($dan)
{
    $gugu_ans .="\n".$dan."단";
    for ($i=1; $i < 10; $i++) 
    { 
        $gugu_ans .="\n$dan * $i =".$dan*$i;
    }
    return $gugu_ans;
}

$two_dan=makegugu2(2);
echo $two_dan;
fputs($gugu,$two_dan);
fclose($gugu);