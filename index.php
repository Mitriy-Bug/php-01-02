<?php
echo __FILE__.'<br>';

echo __LINE__.'<br>';


echo <<<START
        a
       b
    c
\n
START;

$a='Рыба';
$b='человек';

echo $a.' рыбою сыта, а '.$b.' человеком';