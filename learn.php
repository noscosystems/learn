<?php

use Nosco\Learn\Calculator\Calculator;
use Nosco\Learn\Interfaces\Calculator\CalculatorInterface as ICalc;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/functions.php';

$calculator = new Calculator;
if (!$calculator instanceof ICalc) {
    throw new RuntimeException('Could not create a correct instance of the calculator.');
}

$halfNumber = $calculator->createNumber(4);
$bigNumber = addTwoNumbers($halfNumber, $halfNumber);

$mediumNumber = $calculator->createNumber(5);
$smallNumber = $calculator->subtract($bigNumber, $mediumNumber);

$expectedResult = '24';
$actualResult = $calculator->multiply($bigNumber, $smallNumber);

echo "Results\n=======\n\n";
echo sprintf("Expected: %s\n", $expectedResult);
echo sprintf("Actual:   %s\n\n", $actualResult->getValue());
echo sprintf("The results are equal:     %s\n", $actualResult->isEqual($expectedResult) ? 'true' : 'false');
echo sprintf("The results are identical: %s", $actualResult->isIdentical($expectedResult) ? 'true' : 'false');
