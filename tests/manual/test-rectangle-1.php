<?php
$imageWidth = 800;
$imageHeight = 600;
$im = imagecreatetruecolor($imageWidth, $imageHeight);
$red = imagecolorallocate($im, 255, 150, 150);
$green = imagecolorallocate($im, 150, 255, 150);
$blue = imagecolorallocate($im, 150, 150, 255);
$yellow = imagecolorallocate($im, 255, 255, 150);
$gray = imagecolorallocate($im, 150, 150, 150);

/*
- Part "1": 125.3013 x 46.1538  
- Part "2": 125.3013 x 92.3076 
- Part "10": 125.3013 x 461.5380  
- Part "20": 674.6987 x 171.4285
- Part "50": 674.6987 x 428.5714
*/

$blocks = [
    ['x1' => 0, 'y1' => 0, 'x2' => 125.3013, 'y2' => 46.1538, 'color' => $red],
    ['x1' => 0, 'y1' => 46.1538, 'x2' => 125.3013, 'y2' => 46.1538 + 92.3076, 'color' => $green],
    ['x1' => 0, 'y1' => 46.1538 + 92.3076, 'x2' => 125.3013, 'y2' => 46.1538 + 92.3076 + 461.583, 'color' => $blue],
    ['x1' => 125.3013, 'y1' => 0, 'x2' => 800, 'y2' => 171.4285, 'color' => $yellow],
    ['x1' => 125.3013, 'y1' => 171.4285, 'x2' => 800, 'y2' => 600, 'color' => $gray]
];

foreach($blocks as $block) {
    imagefilledrectangle($im, $block['x1'], $block['y1'], $block['x2'], $block['y2'], $block['color']);
}

// Output the image
header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);