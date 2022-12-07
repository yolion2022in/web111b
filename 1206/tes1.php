<?php

$num = 100;

function func()
{
  global $num;
  echo $num . "<br>";
  $num++;
}



func();
func();
func();