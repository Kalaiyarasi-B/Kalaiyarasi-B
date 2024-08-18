// Error handling in php

<?php
 

function myerror($error_no, $error_msg) {
    echo "Error: [$error_no] $error_msg ";
    echo "\n Now Script will end";
     
    
    die();
} 
 

set_error_handler("myerror");
 
$a = 10;
$b = 0;
 

echo($a / $b);;
?>