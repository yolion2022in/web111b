<?php

// 指元素儲存的是對應的「鍵值」和「值」, 但「鍵值」不可重複
// 「值」可以重複
// 「鍵值」可以是字串或數值
// 拜訪需用「鍵值」
// 格式: $變數名稱["鍵值"] = "值";

//方式1: 直接指定陣列元素值
$arr["color"] = "紅色";
$arr["name"] = "John";
$arr["shape"] = "圓形";
$arr[] = 50; //php 自動指定從 0 開始的正整數


//方式2: 使用建構式 array
$arr = array("Color" => "紅色", "name" => "John", "shapr" => "圓形", 50);

if (!isset($arr["color"])) {
  $arr["color"] = "綠色";
}

//unset()
unset($arr["color"]);
$arr["color"] = "綠色";


//拜訪需用「鍵值」
foreach ($arr as $key => $value) {
  # code...
  echo "$key=>$value <br>";
}