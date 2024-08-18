<?php
$sentence = 'I am happy today.';
$string = 'very ';
$position = '5';

echo substr_replace( $sentence, $string, $position, 0 );
?>
