<?php

// str_replace(找尋值,要⽤來取代部分字串的字串,被搜尋的字串, 對替換數進行計數)

echo str_replace("World", "Allen", "Hello World") . "<br>";

$arr = ["blue", "red", "green", "yellow"];
print_r(str_replace("red", "pink", $arr, $i));
echo "有幾個  $i red  <br>";



$find = ["Hello", "world"];
$replae = ["B"];
$arr = ["Hello", "world", "!"];
print_r(str_replace($find, $replae, $arr));

// ["B", , "!"]