<?php
    //set timezone
    date_default_timezone_set('Asia/Taipei');

    //route宣告,搭配 .htaccess 排除資料夾名稱後解析 URL
    $route = new Router(Request::uri());

?>