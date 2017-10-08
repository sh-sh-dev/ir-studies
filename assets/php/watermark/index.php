<?php
include 'WideImage/WideImage.php';
include 'FarsiGD.php';
$bg = WideImage::load("orginal_image.jpg");
$final= $bg ->resize(400, 400);
$canvas = $final ->getCanvas();
$canvas->useFont('./Yekan.ttf', 14, $final->allocateColor(000, 000, 000));
$x=(new FarsiGD)->persianText('کترینگ قائم','fa', 'normal');
$canvas->writeText('left +10', 'top +10',$x);
$final->saveToFile('Ghaem.png');
?>
