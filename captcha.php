<?php
session_start();
header("Expires: Mon, 31 Jul 2021 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
function _generateRandom($length=6)
{
    $_rand_src = array(
        array(48,57)    //digits
        , array(97,122) //lowercase
    );
    srand ((double) microtime() * 1000000);
    $random_string = "";
    for($i=0;$i<$length;$i++){
        $i1=rand(0,sizeof($_rand_src)-1);
        $random_string .= chr(rand($_rand_src[$i1][0],$_rand_src[$i1][1]));
    }
    return $random_string;
}
$width = 150;
$height = 60;
$font = "./acme.ttf";
$im = ImageCreateTrueColor($width,$height);
imageantialias($im, true);
$white = ImageColorAllocate($im, 255, 255, 255);
$black = ImageColorAllocate($im, 46, 29, 29);
$grey = ImageColorAllocate($im, 204, 204, 204);
$red = ImageColorAllocate($im, 204, 5, 5);
ImageFill($im, 0, 0, $black);
$rand = _generateRandom(3);
$_SESSION['captcha'] = $rand;
imagettftext($im, 30, 5, 10, $height - 16, $red, $font, $rand[0]."   ".$rand[1]."   ".$rand[2]."   ");
$rand = _generateRandom(3);
imagettftext($im, 30, -5, 10, $height - 24, $grey, $font, "   ".$rand[0]."   ".$rand[1]."   ".$rand[2]);
ImageRectangle($im,0,0,$width-1,$height-1,$grey);
Header ('Content-type: image/png');  
imagepng($im);
ImageDestroy($im);
?>  