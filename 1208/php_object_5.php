<?php

class Peo
{
  public $peoName;

  public function __construct($str)
  {
    $this->peoName = $str;
    echo "已經建立名字為:"  . $this->peoName . "的物件! <br>";
  }

  public function __destruct()
  {
    $this->peoName = null; //消除員工的名字
    echo  "這個物件已經被釋放掉了!";
  }
}

$peo = new Peo('allen');
$peo = null; //釋放物件

