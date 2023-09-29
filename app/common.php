<?php
// 应用公共文件



/**

 * $msg 待提示的消息

 * $url 待跳转的链接

 * $icon 这里主要有两个，5和6，代表两种表情（哭和笑）

 * $time 弹出维持时间（单位秒）

 */


function alert($msg='',$url='',$icon='',$time=3){ 

    $str='<meta name="viewport" content="initial-scale=1, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="pragma" content="no-cache" />
    <script type="text/javascript" src="/static/index/js/jquery-3.4.1.min.js"></script><script type="text/javascript" src="/static/index/layer/2.4/layer.js"></script>';//加载jquery和layer

    $str.='<script>$(function(){layer.msg("'.$msg.'",{icon:'.$icon.',time:'.($time*1000).'});setTimeout(function(){self.location.href="'.$url.'"},2000)});</script>';//主要方法

    return $str;

}



//删除目录及文件，传入目录
function delFileByDir($dir) {
    $dh = opendir($dir);
    while ($file = readdir($dh)) {
       if ($file != "." && $file != "..") {
 
          $fullpath = $dir . "/" . $file;
          if (is_dir($fullpath)) {
             delFileByDir($fullpath);
          } else {
             unlink($fullpath);
          }
       }
    }
    closedir($dh);
 }
 
