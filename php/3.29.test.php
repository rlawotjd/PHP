<?php
// function test_1($roop)
// {
//     // $args=func_get_args();
//     // $args=$roop;
//     $leg=0;
//     foreach ($roop as $key => $value) {
//         $leg+=$value;
//         echo $leg,"\n";
//     }
//     return $leg;
// }

// $bace=array(1,2,3,4);
// echo test_1($bace);

function star($n)
{
for ($i=0; $i < $n; $i++) { 
    echo "*";
}
    echo "\n";
}

// echo star(5);
function null_space($n)
{
    for ($i=0; $i < $n; $i++) { 
        echo "@";
    }
    echo "\n";
}
function star_stage($n)
{
    for ($i=1; $i <= $n; $i++) { 
        echo star($i);
    }
}

echo star_stage(5);