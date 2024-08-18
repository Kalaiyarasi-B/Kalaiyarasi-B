// PHP program to show standard type casting


<?php 
 
  
$a = 1; 
var_dump($a); 
  

$a = (float) $a; 
var_dump($a); 
  

$a = (double) $a; 
var_dump($a); 
  

$a = (real) $a; 
var_dump($a); 
  

$a = (int) $a; 
var_dump($a); 
  

$a = (integer) $a; 
var_dump($a); 
  

$a = (bool) $a; 
var_dump($a); 
  

$a = (boolean) $a; 
var_dump($a); 
  

$a = (string) $a; 
var_dump($a); 
  
 
$a = (array) $a; 
var_dump($a); 
  

$a = (object) $a; 
var_dump($a); 
  

$a = (unset) $a; 
var_dump($a); 
  
?> 