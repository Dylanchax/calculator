<?php
function sum(float $num1, float $num2): float{
    return $num1 + $num2;
}
function diff(float $num1, float $num2): float{
    return $num1 - $num2;
}
function div(float $num1, float $num2): float{
     return $num1 / $num2;
}
function mult(float $num1, float $num2): float{
    return $num1 * $num2;
}
echo sum(10,2)."<br/>";
echo diff(10,2)."<br/>";
echo div(10,2)."<br/>";
echo mult(10,2)."<br/>";
 
function calculator(float $num1,string $opp,float $num2): float{
    if (!($opp == '+' or $opp == '-' or $opp == '/' or $opp == '*')){
        return 0;
        
    }
    switch ($opp){
        case '+': return sum($num1,$num2);
        case '-': return diff($num1,$num2);
        case '/': return div($num1,$num2);
        case '*': return mult($num1,$num2);

    }
}
echo calculator(1,'+',2)."<br/>";
echo calculator(1,'-',2)."<br/>";
echo calculator(1,'/',2)."<br/>";
echo calculator(1,'*',2)."<br/>";
function calculatorv2 (float $num1,string $opp,float $num2):float
{  
    if(!in_array($opp,['+','-','*','/'])){
        return 0 ; 
     }
    $function_name=[
        '+'=>'addition',
        '-'=>'difference',
        '*'=>'multiplication',
        '/'=>'division',
        
     ];
    return $function_name [$opp]($num1,$num2);
}