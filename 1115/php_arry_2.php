<?php
$a = ["HTML", "CSS", "JS", "PHP"];
echo $a[0] . "<br>";
echo $a[1] . "<br>";
echo $a[2] . "<br>";
echo $a[3] . "<br>";

$members = ["John" => "20", "Mary" => "18", "Jack" => "19"];
echo $members["John"] . "<br>";
echo $members["Mary"] . "<br>";
echo $members["Jack"] . "<br>";

foreach ($members as $name => $age) {
  echo $name . "=>" . $age  . "<br>";
}