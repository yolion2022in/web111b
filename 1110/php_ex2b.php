<?php
    $total = 0;
    $subtotal = 0;

    $score = [
        [101,102,104,105,106],
        [200,201,203,205,300]
    ];

    function calcTotal($arr){
        $funTotal = 0;
        foreach($arr as $k => $v){
            echo $k < count($arr)-1 ? $v . '+' : $v;
            
            $funTotal += $v;
        }
        return $funTotal;
    }

    
    foreach($score as $k => $v){
        $subtotal = calcTotal($v);
        echo "<br>第$k 維 subTotal = $subtotal <br><br>";

        
        $total += $subtotal;
    }
    echo "<br> Total = $total <br>";
    


?>
