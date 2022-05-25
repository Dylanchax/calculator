<?php

function sum(float $num1,float $num2): float{
    return $num1 + $num2;    
}
function diff(float $num1,float $num2): float{
    return $num1 - $num2;    
}
function div(float $num1,float $num2): float{
    return $num1 / $num2;    
}
function mult(float $num1,float $num2): float{
    return $num1 * $num2;    
}

function calculator (string $userformula): float

{  
    echo ($userformula);
   