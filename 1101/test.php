<?php

 $a = 123;


echo $a  .  'type:' . gettype($a) . "<br>";

$a = 999.999 ;

echo $a . gettype($a) . "<br>";




$var = '$a';
$var1 = "$a";

echo $var .  "<br>";
echo $var1 .  "<br>";

echo "======= 動態變數 ========<br>";
$hello = 'world';
$world = 'hello';

echo ${$world} .  "<br>";


?>