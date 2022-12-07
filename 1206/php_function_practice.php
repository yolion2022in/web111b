<?php
    if($_POST){
        function eat($a, $b) {
            echo "今天 <span style='color:blue'>" . $a . "</span> 吃 <span style='color:red'>" . $b . "</span><br>" ;
            echo "<hr><button onclick='history.back()'>Go Back</button>";
        }

        eat($_POST['think'],$_POST['eat']);

    }else{
        //html form
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php_function_practice.php</title>
    </head>

    <body style='text-align:center; margin-top:25%;'>
        <form id="form" action="php_function_practice.php" method="post">
            <input type="text" name="think" placeholder="今天你？"><br><br>
            <input type="text" name="eat" placeholder="吃尛？"><br><br>
            <input type="submit" value="送">
        </form>

<?php }; ?>

    </body>
</html>