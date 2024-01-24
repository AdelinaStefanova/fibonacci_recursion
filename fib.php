<?php
$fcalls=0;
$num = 10;
$fcache=array();
echo fib($num);
echo "<br> Function cals: $fcalls";

function fib($n): int
{
    global $fcalls, $fcache;
    $fcalls++;
    if($n<2) return $n;
    if(! isset($fcache[$n])){
        $fcache[$n]= fib($n-1) + fib($n -2);
    }
    return $fcache[$n];
}
