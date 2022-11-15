<?php
    /*
    function vdump($obj){
        echo '<pre>';
        var_dump($obj);
        echo '</pre>';
    }

    vdump($_GET);

    ex.
    array(5) {
        ["user"]=>
        string(3) "aaa"
        ["pw"]=>
        string(3) "123"
        ["mail"]=>
        string(11) "123@456.789"
        ["edu"]=>
        string(7) "college"
        ["hobbys"]=>
        array(3) {
            [0]=>
            string(3) "eat"
            [1]=>
            string(4) "play"
            [2]=>
            string(5) "merry"
        }
    }
    */

    $rtn = '';
    $rtn .= "hello , {$_GET['user']} <br>";
    $rtn .= "請勿將您的密碼： {$_GET['pw']} 告訴別人！  雖然您的密碼已經被後面的人看到了...<br>";
    $rtn .= "您的mail是 {$_GET['mail']} <br>";
    $rtn .= "學歷為： {$_GET['edu']} <br>";
    $rtn .= "興趣是： ". implode(',',  $_GET['hobbys'] )  ." <br>";
    $rtn .= "<br>誠摯歡迎您~";


    echo $rtn;


?>