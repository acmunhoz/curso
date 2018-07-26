<?php 

header("Content-Type: image/png");

$image = imageCreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 2, 60, 120, "Curso PHP 7", $red);

imagepng($image);

imagedestroy($image);

 ?>