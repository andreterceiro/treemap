<?php
$imageWidth = 850;
$imageHeight = 550;
$im = imagecreatetruecolor($imageWidth, $imageHeight);
$red = imagecolorallocate($im, 255, 150, 150);
$green = imagecolorallocate($im, 150, 255, 150);
$blue = imagecolorallocate($im, 150, 150, 255);
$yellow = imagecolorallocate($im, 255, 255, 150);
$gray = imagecolorallocate($im, 150, 150, 150);
$white = imagecolorallocate($im, 255, 255, 255);

/*
All rectangle:
- dimensions: 850 x 550 . Area: 467,500

Little rectangles:
- Value 5: 162.50000002 x 211.53846150
- Value 8: 162.50000002 x 338.46153840
- Value 9: 287.50000009 x 215.21739123
- Value 14: 287.50000009 x 334.78260858
- Value 15: 400 x 257.81250000
- Value 17: 400 x 292.18750000
*/

$blocks = [
    ['x1' => 0, 'y1' => 0, 'x2' => 162.50000002, 'y2' => 211.53846150, 'color' => $red],
    ['x1' => 0, 'y1' => 211.53846150, 'x2' => 162.50000002, 'y2' => 550, 'color' => $green],
    ['x1' => 162.50000002, 'y1' => 0, 'x2' => 162.50000002 + 287.50000009, 'y2' => 215.21739123 , 'color' => $blue],
    ['x1' =>  162.50000002, 'y1' => 215.21739123, 'x2' => 162.50000002+ 287.50000009, 'y2' => 550, 'color' => $yellow],
    ['x1' => 162.5000002 + 287.5000009, 'y1' => 0, 'x2' => 850, 'y2' => 257.8125, 'color' => $gray],
    ['x1' => 162.5000002 + 287.5000009, 'y1' => 257.8125, 'x2' => 850, 'y2' => 550, 'color' => $white]
];

foreach($blocks as $block) {
    imagefilledrectangle($im, $block['x1'], $block['y1'], $block['x2'], $block['y2'], $block['color']);
}

// Output the image
header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);