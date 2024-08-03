<?php
$seed = time();
//获取随机数
$num = rand(1,7);
//拼接图片地址
$picpath = "https://gcore.jsdelivr.net/gh/jiangmingshuai/imgapi".$num.".webp";
die(header("Location: $picpath"));
?>