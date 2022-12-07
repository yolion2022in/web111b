<?php
$num1 = 1;
$num2 = 100;

function swap(&$n1, &$n2)
{
  $temp = $n1;
  $n1 = $n2;
  $n2 = $temp;
  echo  '$n1 的值為' . $n1, "<br>";
  echo  '$n2 的值為' . $n2, "<br>";
}

swap($num1, $num2);

echo  '$num1 的值為' . $num1, "<br>";
echo  '$num2 的值為' . $num2, "<br>";