<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 150, $titleColor, "Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");

imagettftext($image, 32, 0, 350, 350, $titleColor, "Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Anderson Cleiton");

imagestring($image, 3, 440, 370, utf8_encode("Concluído em: ") . date("d/m/y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

 ?>