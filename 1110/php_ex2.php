<?php
    $score = [
        [101,102,104,105,106],
        [200,201,203,205,300]
    ];

    $total = 0;
    
    

    foreach($score as $no => $arr){
        $subtotal = 0;
        foreach($arr as $k => $v){
            echo $k < count($arr)-1 ? $v . '+' : $v;
            $subtotal += $v;
        }
        $total += $subtotal;
        
        echo "<br>第$no 維 subTotal = $subtotal <br><br>";
    }
    echo "<br> Total = $total <br>";

?>
