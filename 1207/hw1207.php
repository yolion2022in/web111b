<?php
    require_once('./Exercise1207.php');

    $hw = new Exercise1207;

    echo $hw -> titleBar('1207 exercise 01 符號畫正方','yellow');
    echo $hw -> square(3, '＠') . $hw::BR;
    echo $hw -> square(5, '＄');// . $hw::BR;

    echo $hw -> titleBar('1207 exercise 02 數字畫矩陣(含排版對齊)');
    echo $hw -> matrix(5,3) . $hw::BR;
    echo $hw -> matrix(9,9);// . $hw::BR;  //9x9

    echo $hw -> titleBar('1207 exercise 03 單位轉換','pink');
    echo $hw -> calculateBody(170,60) . $hw::BR;
    echo $hw -> calculateBody(185,72);// . $hw::BR;

    echo $hw -> titleBar('1207 exercise 04 判斷奇數、偶數');
    echo $hw -> oddEven(170) . $hw::BR;
    echo $hw -> oddEven(185);// . $hw::BR;

    echo $hw -> titleBar('1207 exercise 05 字串拆解成字元(空白分隔)','blue');
    // echo $hw -> decomp('55667788') . $hw::BR;
    echo $hw -> decomp('(022)882-5252') . $hw::BR;
    echo $hw -> decomp('(你餓餓)爸爸餓-我餓我餓');// . $hw::BR;
?>