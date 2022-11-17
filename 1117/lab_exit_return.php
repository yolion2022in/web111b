<?php

    function say(){
        echo '1<br>';
        // return;
        exit;
        echo '2<br>';
    }

    echo 'a<br>';
    say();
    echo 'b<br>';

?>