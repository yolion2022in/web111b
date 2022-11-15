<?php
    function vdump($obj){
        echo '<pre>';
        var_dump($obj);
        echo '</pre>';
    }

    $arr = array("Color" => "紅色", "name" => "John", "shapr" => "圓形", 50);

    vdump( implode(',', $arr) );

?>