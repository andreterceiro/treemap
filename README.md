# Observation

As I will write the text in English, I will express the numbers in the notation adopted in US ("EUA" in brazilian portuguese). The thousand separator will be "," and decimal separator will be ".". We adopt the inverse in portuguese. 

# Genreral

Let's think. We need to allocate all the parts in a big part, who needs to be a perfect rectangle (or a square).

I chatted with Chat GPT to try to understand better the problem. Let's talk about the understand:

We will try to build a treemap with the numbers 1, 2, 10, 20, 50.

The sum of these numbers is 1 + 2 + 10 + 20 + 50 = 83.

First of all, the proportions are in the are. In another words, the rectangle "2" needs to have the double of the `area` of the rectangle "1".

We need some assumptions, like the total `area`. We need to adopt the total `width`and `height`. Let's adopt 800x600 (`width` x `height`).

Thus, the total `area` will be 800x600 = 480.000.

The `area` of off all parts needs to be proportional. In another words:
- The sum of the parts is 83;
- The total `area` is 480,000.

Then we need a `scale` factor. The `scale` factor will be:
- 480.000/83 = 5,783.1325 (approximately)

Is a little obvios (kkk), but if we multiply the sum of the parts to the `scale` factor we will get the total ``area`:
(1 + 2 + 10 + 20 + 50) * 5,783.1325 = 479,999.9975 = 478,000

Proportionally, the `area` of the "1" part will be 5,783.1325

We defined that the total square has the 800x600 dimensions. The solution of Chat GPT adopted the 3 minor values on the left and the remainder 2 values on the `right`. We will adopt that we will have:
- If the total of the parts is an even number, then we will have half of the parts in the left and half of the parts in the right;
- If the total of the parts is an odd number, then we will have half of the parts in the left and half of the parts in the right;
- The lower values will be allocated in the left. And this will be result in a right solution? Yes, because the right part will be bigger in x aixis. 
 
"The general shape" of the general idea will be:

```
 __ ________
|__|        |
|  |________|
|__|        |
|  |        |
|  |        |
|  |        |
|__|________|

``` 

And more complex strucures, with more than 2 columns as example. We will not build this types of treemaps.

Let's return to our solution. We will have the `height` of 600. Thus the sum of the `height` on the three parts of the left with the value 600. The dimension will be the same in this 3 parts. This way, proportionally, the `height` of the Y part "1" will be 1/(1 + 2 + 10) * 600 => 1/13 * 600 = 46.1538

We know that the total `area` of the "1" part will be 5,783.1325 as we calculated before. Then the `width` will be:

```
5,783.1325 / 46.1538 = 125.3013
```

To calculate the another ``areas` (not ``width`s` or ``height`s`) we need only the make a multiplication respecting the proportionality. In another words:
- "1" part: `area` will be 5,783.1325 x 1 = 5,783.1325 
- "2" part: `area` will be 5,783.1325 x 2 = 11,566.2650
- "10" part: `area` will be 5,783.1325 x 10 = 57,831.3250
- "20" part: `area` will be 5,783.1325 x 20 = 115,662.6500  
- "50" part: `area` will be 5,783.1325 x 50 = 289,156.6250

Let's verify. We need to have the sum of the parts equals to the total:
5,783.1325 + 11,566.2650 + 57,831.3250 + 115,662.6500 + 289,156.6250 = 479,999.9975

479999.9975 is approximately 480,000.0000

We verified the `area`. Seem that we are right until now.

Let's make another verification. The sum of the 3 y parts of the parts on the left needs to be equals to the total `height`. Reviewing the information of the `height` of the "1" part: 46.1538

As the `width` of the 3 parts are equals, we can mutiply proportionally the values on `height`. Then:
- 1 part: `height` = 46.1538
- 2 part: `height` = 92.3076
- 10 part: `height` = 461.5380

Testing the sum:
46.1538 + 92.3076 + 461.5380 = 599.9994 (approximately 600)

Ok, a little obvious in mathematics as:
x + 2x + 10x = 13x and 13 x 46.1538 = 599.9994

Ok, seems right until now...

We verified the total `height`. Remember, the `height` of the three blocks on the left is equals to the `height` of the two blocks on le right.

We need only to calcute the 2 last rectangles dimensions. We know that the `width` of the minor group of 3 rectangles is 125.3013

Than can calculate the `width` of the another part this way:
800 - 125.3013 = 674.6987

We already calculate the `area` of all the parts. Then we can calculate the `height`s:
- "20" part: `height` will be 115,662.6500 / 674.6987 = 171.4285
- "50" part:  `height` will be 289,156.6250 / 674.6987 = 428.5714

The sum of the calculated `height`s above is:
171.4285 + 428.5714 = 599.999 (approximately 600)

Ok, seems right

The rectangles will be:
- Part "1": 125.3013 x 46.1538  
- Part "2": 125.3013 x 92.3076 
- Part "10": 125.3013 x 461.5380  
- Part "20": 674.6987 x 171.4285
- Part "50": 674.6987 x 428.5714

Let's build the `PHP` script to make the `tree map`. We need first to install the `GD` extension, ok?

```
<?php


?>
```