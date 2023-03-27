<?php

$count=10;

// for($u=1; $u<=$count; $u++){
//     for ($i=0; $i < $u; $i++) { 
//         echo "*";
//     }
//     echo "\n";
// }

for($u=1; $u<=$count; $u++){
    for ($i=$count-$u; $i > 0; $i--) { 
        echo " ";
    }
    for ($i=0; $i < $u; $i++) { 
        echo "*";
    }
    echo "\n";
}

// for($u=1; $u<=$count; $u++){
//     for ($i=$count-$u; $i >= 0; $i--) { 
//             echo "@";
//         }
//         echo "\n";
//     }

// for($u=0; $u<=$count; $u++){
//     for ($i=$count-$u; $i > 0; $i--) { 
//         echo "*";
//     }
//     for ($i=0; $i < $u; $i++) { 
//         echo "@@";
//     }
//     for ($i=$count-$u; $i > 0; $i--) {
//         echo "*";
//     }
//     echo "\n";
// }
// for($u=0; $u<=$count; $u++){
//     for ($i=0; $i < $u; $i++) { 
//         echo "*";
//     }
//     for ($i=$count-$u; $i > 0; $i--) { 
//         echo "@@";
//     }
//     for ($i=0; $i <$u; $i++) {
//         echo "*";
//     }
//     echo "\n";
// }

// for($u=0; $u<=$count; $u++){
//     for ($i=$count-$u; $i > 0; $i--) { 
//         echo "*";
//     }
//     for ($i=0; $i <= $u; $i++) { 
//         echo "@@";
//     }
//     for ($i=$count-$u; $i > 0; $i--) {
//         echo "*";
//     }
//     echo "\n";
// }
// for($u=5; $u<=$count; $u++){
//     for ($i=$count-$u; $i > 0; $i--) { 
//         echo "*";
//     }
//     for ($i=0; $i <= $u; $i++) { 
//         echo "@@";
//     }
//     for ($i=$count-$u; $i > 0; $i--) {
//         echo "*";
//     }
//     echo "\n";
// }
// 기둥을 어케만들지 카운트를 연관시켜야하는데 
