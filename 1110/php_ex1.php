<?php
    $score = [101,102,104,105,106];
    $total = 0;
    foreach($score as $k => $v){
        echo $k < count($score)-1 ? $v . '+' : $v;
        
        $total += $v;
    }
    echo " = $total";

?>
