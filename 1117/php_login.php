<?php
    if($_POST){
        $rtn = null;
        $determin = 'error';
        $say = null;
        $u_data = ['aaa' => '111', 'bbb' => '222'];
        $inputs = $_POST;
        $js_hide = '';    //for javascript做法
        
        foreach($inputs as $name => $pw){
            $$name = is_array($pw) ? implode(',', $pw) : $pw;
        }

        if( $uname && $upw ){
            if( in_array( $uname, array_keys($u_data) ) ){
                if($upw == $u_data[ $uname ]){
                    $determin = 'welcome';
                    $say = "$uname 會員您好！您有新留言";
                    //javascript做法
                    $js_hide = "<script>
                        document.addEventListener('DOMContentLoaded', function () {
                            document.getElementById('form').style.display='none';
                        });
                    </script>";
                }else{
                    $say = '帳密有誤！';
                }
            }else{
                $say = '查無此人！';
            }
        }else{
            $say = '請輸入帳密！';
        }
        
        $rtn = "$js_hide <br><div class='{$determin}'>{$say}</div>";
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>

    <style>
        body    {   text-align: center; }
        div.welcome { color:green;  }
        div.error { color:red;  }
    </style>

    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("form").style.display='none';
        });
    </script> -->
</head>

<body>
    <?php
        /* PHP 做法
        if( $_POST ){
            echo $rtn; 
        }else{
            echo '
            <form id="form" action="php_login.php" method="post">
                帳號 <input type="text" name="uname"><br>
                密碼 <input type="password" name="upw"><br>
                <input type="submit" value="登入">
            </form>
            ';
        }
        */
    ?>
    
    <?= $rtn;   //for javascript做法 ?>

    <form id="form" action="php_login.php" method="post">
        帳號 <input type="text" name="uname"><br>
        密碼 <input type="password" name="upw"><br>
        <input type="submit" value="登入">
    </form>
</body>
</html>