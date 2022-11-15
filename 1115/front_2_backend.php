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

    	易混淆函數比較       gettype()	 isset()	 empty()	 is_null()
        $x is undefined	    NULL	    FALSE	    TRUE	    TRUE
        $x = null;	        NULL	    FALSE	    TRUE	    TRUE
        $x = 0;	            integer	    TRUE	    TRUE	    FALSE
        $x = "0";	        string	    TRUE	    TRUE	    FALSE
        $x = 1;	            integer	    TRUE	    FALSE	    FALSE
        $x = "";	        string	    TRUE	    TRUE	    FALSE
        $x = "PHP";	        string	    TRUE	    FALSE	    FALSE
    */

        if( $_GET ){

            foreach($_GET as $name => $value){
                $$name = is_array($value) ? implode(',', $value) : $value;
            }

            $rtn = '';
            $rtn .= "hello , {$user} <br>";
            $rtn .= "請勿將您的密碼： {$pw} 告訴別人！  雖然您的密碼已經被後面的人看到了...<br>";
            $rtn .= "您的mail是 {$mail} <br>";
            $rtn .= "學歷為： {$edu} <br>";
            $rtn .= "興趣是： {$hobbys} <br>";
            $rtn .= "<br>誠摯歡迎您~";
        
        
            echo $rtn;
        

        }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam 01</title>
</head>
<body>
    <div id="main">
        <form action="http://web111b.com:6080/1115/front_2_backend.php" method="get">
            姓名：<input type="text" name="user" id=""><br>
            密碼：<input type="password" name="pw" id=""><br>
            mail：<input type="text" name="mail" id=""><br>
            學歷：
            <select name="edu" id="">
                <option value="primary">國小</option>
                <option value="junior">國中</option>
                <option value="senior">高中</option>
                <option value="college">大學</option>
                <option value="other">其他</option>
            </select>
            <br>
            喜好：
                <input type="checkbox" name="hobbys[]" id="" value="eat">吃&emsp;
                <input type="checkbox" name="hobbys[]" id="" value="drink">喝&emsp;
                <input type="checkbox" name="hobbys[]" id="" value="play">玩&emsp;
                <input type="checkbox" name="hobbys[]" id="" value="merry">樂
            <br><br>&emsp;&emsp;&emsp;
            <button type="submit">送出</button>
            &emsp;&emsp;&emsp;
            <button type="reset">重設</button>
        </form>
    </div>
</body>
</html>

<?php

        
    }   //end of ifelse()
    


?>