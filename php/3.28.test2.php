<?php
function star($n){
    for ($i=0; $i < $n; $i++) { 
            echo "*";
        }
        echo "\n";
    }

function gap($n){
    for ($i=0; $i < $n; $i++) { 
            echo "@";
        }
    }



function star_stage($n)
{
    for ($i=1; $i <= $n; $i++) { 
        echo star($i);
    }
}
function star_rstage($n)
{
    for ($i=$n; $i >=0 ; $i--) { 
        echo gap($i);
    }
    for ($i=1; $i <= $n; $i++) { 
        echo star($i);
    }
}

function star_wall($n)
{
    for ($i=0; $i < $n; $i++) { 
            echo star($n);
    }
}

echo star_rstage(5);

