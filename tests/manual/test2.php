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

Left part:

- Value 5 - dimensions: 275 x 125 . Area: 34,375  
- Value 8 - dimensions: 275 x 200. Area: 55,000
- Value 9 - dimensions: 275 x 225. Area: 61,875

Right part:

- Value 14 - dimensions: 575 x 167.39130434. Area: 96,250
- Value 15 - dimensions: 575 x 179.34782608. Area: 103,125
- Value 17 - dimensions: 575 x 203.26086956. Area: 116,875
*/

$blocks = [
    ['x1' => 0, 'y1' => 0, 'x2' => 275, 'y2' => 125, 'color' => $red],
    ['x1' => 0, 'y1' => 125, 'x2' => 275, 'y2' => 125 + 200, 'color' => $green],
    ['x1' => 0, 'y1' => 125 + 200, 'x2' => 275, 'y2' => 125 + 200 + 225, 'color' => $blue],
    ['x1' => 275, 'y1' => 0, 'x2' => 275 + 575, 'y2' => 167.39130434, 'color' => $yellow],
    ['x1' => 275, 'y1' => 167.39130434, 'x2' => 275 + 575, 'y2' => 167.39130434 + 179.34782608, 'color' => $gray],
    ['x1' => 275, 'y1' => 167.39130434 + 179.34782608 , 'x2' => 275 + 575, 'y2' => 550, 'color' => $white]
];

foreach($blocks as $block) {
    imagefilledrectangle($im, $block['x1'], $block['y1'], $block['x2'], $block['y2'], $block['color']);
}

// Output the image
header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);