<?php
$seed = time();
$num = rand(1,7);
$picpath = "https://gcore.jsdelivr.net/gh/jiangmingshuai/imgapi".$num.".jpg";
die(header("Location: $picpath"));
?>
