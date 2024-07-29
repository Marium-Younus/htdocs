<?php
$str = md5(microtime());;
$str = substr($str, 0,6);
session_start();
$_SESSION ['cap_code'] = $str;
$img = imagecreate(100,20);
imagecolorallocate ($img,255,255,255 );
$txtcol= imagecolorallocate($img,0,0,0);
imagestring ($img,20,5,5,$str,$txtcol);
header('Content: image/jpeg');
imagejpeg($img);






?>










<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>