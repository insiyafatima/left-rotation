<?php
function leftRotatebyOne(&$arr, $n) 
{ 
    $temp = $arr[0]; 
    for ($i = 0; $i < $n - 1; $i++) 
        $arr[$i] = $arr[$i + 1]; 
  
    $arr[$i] = $temp; 
} 
  
function leftRotate(&$arr, $d, $n) 
{ 
    for ($i = 0; $i < $d; $i++) 
        leftRotatebyOne($arr, $n); 
} 
  
function printArray(&$arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i] . " "; 
} 

$arr = array( 1, 2, 3, 4, 5); 
$n = count($arr); 
  
leftRotate($arr, 1, $n); 
printArray($arr, $n); 
  
?> 
