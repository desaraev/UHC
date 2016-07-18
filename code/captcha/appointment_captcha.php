<?php
session_start();

$string = '';

for ($i = 0; $i < 5; $i++) 
{
	// this numbers refer to numbers of the ascii table (lower case)
	$string .= chr(rand(97, 122));
}

$_SESSION['app_rand_code'] = $string;

$dir = 'fonts/';

$image = imagecreatetruecolor(100, 34);
$black = imagecolorallocate($image, 0, 0, 0);
$color = imagecolorallocate($image, 200, 100, 90); // red
$white = imagecolorallocate($image, 245, 245, 245);

imagefilledrectangle($image,0,0,399,99,$white);
imagettftext ($image, 18, 0, 10, 24, $color, $dir."banksia.ttf", $_SESSION['app_rand_code']);

header("Content-type: image/png");
imagepng($image);
