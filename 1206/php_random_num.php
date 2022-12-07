<?php

function ex2(){
    $args = func_get_args();

    $num_pool = range($args[0], $args[1]);
    shuffle( $num_pool );
    for($i=0; $i<$args[2]; $i++){
        echo $i == $args[2]-1 ? '<span style="color:red">'. $num_pool[$i] .'</span><br><hr>' : $num_pool[$i] . ' , ';
    }
}

for($i=0; $i<15; $i++){
    ex2(1,7,7); //大樂透 1~49 選 6 +1 (特別號)
    // ex2(1,7,7); //7數取7不重複，沒騙你
}

echo "<hr><button onclick='history.go(0)'>大樂透開獎 1~49 選 6 +1 (特別號)</button>";    //Refresh





/*
function ex2(){
    // echo "<pre>".var_dump(func_get_args())."</pre>";
    // echo "<br>func_num_args：". func_num_args();

    $args = func_get_args();
    //方法1
    $num_pool = [];

    for($i=$args[0]; $i<=$args[1]; $i++){
        $num_pool[] = $i;    //這樣塞值到陣列 Array 比 array_push() 快很多，沒有調用函數的額外負擔
    }

    //方法2 只要1行 $num_pool = range($args[0], $args[1]);
    shuffle( $num_pool );
    for($i=0; $i<$args[2]; $i++){
        echo $i == $args[2]-1 ? '<span style="color:red">'. $num_pool[$i] .'</span><br><hr>' : $num_pool[$i] . ' , ';
    }
}


//大樂透開獎
for($i=0; $i<15; $i++){
    ex2(1,7,7); //大樂透 1~49 選 6 +1 (特別號)
    // ex2(1,7,7); //7數取7不重複，沒騙你
}


echo "<hr><button onclick='history.go(0)'>大樂透開獎 1~49 選 6 +1 (特別號)</button>";    //Refresh*/
?>