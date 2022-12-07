<?php
/**
 * 註解格式參考：https://gist.github.com/supersonictw/e3915cfc4443b0f656a09d5fe8033c70
 * 
 * yolion2022的文件
 *
 * 功能1： xxx
 * 功能2： xxx
 *
 * @brief       產生html基本框架的類別
 * @file        $Source: 1207\HtmlBase.php  $
 * @package     NULL
 * @author      yolion <yolion2022@gmail.com>
 * @version     $v1.0: 2022/12/07 $
 * @link        url
 * @date        2022.12.07
 */

/**
 * HtmlBase class
 *
 * 功能1：完成xxxx
 * 功能2：完成xxxxx
 *
 * @author      yolion <yolion2022@gmail.com>
 * @access      public
 * @abstract
 *
 * @param string $title
 * @param string $charset
 * @param string $head
 * @param string $headjs
 * @param string $body
 * @param string $footer
 * @param string $footerjs
 * 
 * @method string genHtml()
 * 
 * @return void
 */
class HtmlBase {
    const PI = 3.14159;
    private static $_test = 'test'; //私有變數 開頭加底線
    
    public $title = 'base Title';
    public $charset = 'UTF-8'; //big5
    public $head = NULL;
    public $headjs = NULL;
    public $body = '<h1>Welcome to Html Base Page ！</h1>';
    public $footer = NULL;
    public $footerjs = NULL;

    // function __construct()  {   //建構式，方式1
    function HtmlBase() {   //建構式，方式2 (function名稱與class相同) 其他語言採用此方式居多！
    }


    /**
     * genHtml function
     * generate base html page
     *
     * @author yolion <yolion2022@gmail.com>
     *
     * @return string
     */
    function genHtml(){

        $html_base = <<<htmlBase
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="$this->charset">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>$this->title</title>

                $this->head
                $this->headjs
            </head>
            <body>
                $this->body

                $this->footer
                $this->footerjs
            </body>
            </html>
htmlBase;

        echo $html_base;
    }   //End of genHtmlBase()

    function __destruct() { //解構式
        
    }

}   //End of HtmlBase class

?>