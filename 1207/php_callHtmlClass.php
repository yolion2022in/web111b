<?php
    require_once('./HtmlBase.php');

    $html = new HtmlBase;
    $html->body = '<h2 style="color:blue"> call HtmlBase class Generate body content.</h2>';

    $html->genHtml();



?>