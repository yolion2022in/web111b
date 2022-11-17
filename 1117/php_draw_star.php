<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Star</title>
</head>
<body>
    <?php
        if($_GET && is_numeric($_GET['row_num'])){
            $rn = $_GET['row_num'];

            for($i=$rn; $i>0; $i--){
                for($j=0; $j<$i; $j++){
                    echo '*';
                }
                echo '<br>';
            }

            echo '<button onclick="history.back()">Go Back</button>';
        }else{
            // echo '<b style="color:red">輸入值必須是『數值』！</b>';
    ?>
            <form action="php_draw_star.php" method="get">
                請輸入列(row)數：<input type="text" name="row_num"><br>
                <input type="submit" value="送出">
            </form>
    <?php
        };
    ?>
</body>
</html>