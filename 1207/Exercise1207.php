<?php
class Exercise1207 {
    const BR = '<br>';
    const FAIL = '<h2 style="color:red">Fail ！</h2>';

    public function titleBar($str, $color='#008080'){   //輸出標題列
        return "<h3 style='background:$color'>$str</h3>";
    }

    //--------------------------
    public function __call($name, $arguments){
        //基礎過濾
        if(!$arguments) return self::FAIL;

        foreach($arguments as $arg){
            if(empty($arg)) return self::FAIL;
        }

        //將老師指定的方法名稱，導向私有方法處理。 (如未指定，可直接從__call導至私有方法，無須多此一舉)
        switch($name){
            case 'square':
                return $this->drawSquare($arguments[0], $arguments[1]);
                break;
            case 'matrix':
                return $this->drawMatrix($arguments[0], $arguments[1]);
                break;
            case 'calculateBody':
                return $this->convertBody($arguments[0], $arguments[1]);
                break;
            case 'oddEven':
                return $this->oddOrEven($arguments[0]);
                break;
            case 'decomp':
                return $this->split2char($arguments[0]);
                break;
            default:
                return "<h2>unsupported method ： $name </h2>";
        }
    }


    //以下方法封裝 Encapsulation
    private function drawSquare(){  //exercise 01 以指定邊長、符號畫出正方形
        $args = func_get_args();
        $num = $args[0];
        $char = $args[1];
        $result = NULL;

        for($i=0; $i<$num; $i++){
            // $result .= $char;
            for($j=0; $j<$num; $j++){
                $result .= $char;
            }
            $result .= self::BR;
        }

        return $result;
    }

    private function drawMatrix(){  //exercise 02 畫數字矩陣 (含排版對齊)
        $args = func_get_args();
        $w = $args[0];
        $h = $args[1];
        $base_num = 1;
        $result = '<pre>';

        for($i=0; $i<$h; $i++){ //先跑 height
            for($j=0; $j<$w; $j++){ //再跑 width
                $result .= $base_num * ($j+1) . "\t";    //mb_convert_kana(" " , 'R');
            }
            $base_num++;
            $result .= self::BR;
        }

        return $result .'</pre>';
    }

    private function convertBody(){ //exercise 03 身高(cm) 體重(kg) => 身高(英吋) 體重(磅)。(1磅=0.454公斤，1吋=2.54公分)
        $args = func_get_args();
        $cm = $args[0]; //cm
        $kg = $args[1]; //kg
        $result['inch'] = "身高（ $cm cm = ". round($cm/2.54 , 3) ." inch ）" . self::BR;
        $result['pound'] = "體重（ $kg kg = ". round($kg/.454 , 3) ." pound ）" . self::BR;
        return implode($result);
    }

    private function oddOrEven($num){   //exercise 04 判斷奇偶數
        // return ($num % 2) == 0 ? "$num  為：偶數" : "$num  為：奇數";
        return $num & 1 ?  "$num  為：奇數" : "$num  為：偶數"; // & 位元運算符 (二進制運算) ex. 3&1 (011 & 001 = 001 奇)、 4&1 (100 & 001 = 000 偶)
    }

    private function split2char($string){   //exercise 05 字串拆解成字元(空白分隔)
        // return chunk_split($string, 1, '　');    //英數only
        // return wordwrap($string, 1, "　", true); //英數only
        return implode('　', preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY));  //unicode ok 如：中日韓語系
    }

}

?>