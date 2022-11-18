<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="text-align:center">
  <form action="star_.php" method="post">
    請輸入列(row)數:<input type="Text" name="star"><br>
    <input type="submit" value="送出">

  </form>
</body>

</html>

<?php

// echo'<pre>'. var_dump($_POST).'<pre>';
// exit;

$num = $_POST['star'];


for ($i=$num; $i > 0 ; $i--) {
  for ($j=1; $j < $i; $j++) {
    echo "*";
    }
  echo  "<br>";
  }



?>