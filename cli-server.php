<?php

//TODO 用$_SERVER['PHP_SELF']去DB查询META，然后require模板，否则404

$tpl = $_SERVER['DOCUMENT_ROOT'].'/vendor'.DIRECTORY_SEPARATOR.'xmlscript/tpl'.$_SERVER['PHP_SELF'];

//echo $tpl;

//FIXME 禁止vendor目录访问
//TODO 当前目录下都是缓存！！！！！！

//TODO 如果根目录下存在PHP_SELF，则直接输出
if(is_file($tpl))
  require $tpl;//FIXME 如果是静态文件，会不会拖累IO效率
else{
  http_response_code(404);
  die('404');
}
