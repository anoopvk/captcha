<?php
session_start();
$height=50;
$width=300;
$image=imagecreate($width,$height);
$black = imagecolorallocate($image,0,0,0);
$white=imagecolorallocate($image,255,255,255);
$fontsize=$height/2;
$x=$width/11;
$y=($height/2)+($fontsize/2);

$font= dirname(__FILE__) . '/font/Arial.ttf';

// creating random string
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

$text=substr(str_shuffle($permitted_chars), 0, 10);
$_SESSION['captchacode']=$text;
// $text="Noobie";
$textlength=strlen($text);
$textarray = str_split($text);

for($i=0;$i<$textlength;$i++){
    $angle=rand(-15,15);    
    imagettftext($image,$fontsize,$angle,$x,$y,$white,$font,$textarray[$i]);
    $x1=0;
    $x2=$width;
    $y1=rand(0,$height);
    $y2=rand(0,$height);
    imageline ($image ,  $x1 ,  $y1 ,  $x2 ,  $y2 ,  $white ) ;
    // imageline ($image ,  ++$x1 ,  $y1 ,  ++$x2 ,  $y2 ,  $white ) ;
    // imageline ($image ,  ++$x1 ,  $y1 ,  ++$x2 ,  $y2 ,  $white ) ;
    // imageline ($image ,  ++$x1 ,  $y1 ,  ++$x2 ,  $y2 ,  $white ) ;
    // imageline ($image ,  ++$x1 ,  $y1 ,  ++$x2 ,  $y2 ,  $white ) ;


    

    // imageline ($image , 10 ,  10 ,  20 ,  20 ,  $white ) ;

    $x+=$fontsize;
}
header('Content-type: image/png');

imagepng($image);
// imagepng($image,"images/captcha.png");
imagedestroy($image);
?>
