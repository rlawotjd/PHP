<?php

function rcc($param_a)
{
    if ($param_a===1) {
        return 2;
    }
    return $param_a*rcc($param_a-1);
    // rcc5=5*rcc4 => 5*4*rcc3.....=5!
}

echo rcc(5);