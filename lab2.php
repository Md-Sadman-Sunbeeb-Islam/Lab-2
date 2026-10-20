<?php

// Lab 2: PHP Expressions and Control Structures

echo '<h1>Lab 2A: Expressions and Control Structures</h1>';

// 1. Expressions and Operators
echo '<h2>1. Expressions and Operators</h2>';

$x = -5;

$y = 3 * (abs(2 * $x) + 4);

echo "The value of y is: $y<br>";

// 2. Boolean Comparisons
echo '<h2>2. Comparisons</h2>';

var_dump(2 > 1);
var_dump(2 == 3);
var_dump("5" == 5);
var_dump("5" === 5);
echo '<br>';

// 3. Unary Operators
echo '<h2>3. Unary Operators</h2>';

$c = 5;

$negativeC = -$c;
$positiveC = +$c;
$incrementedC = ++$c;

echo "Unary minus: $negativeC<br>";
echo "Unary plus: $positiveC<br>";
echo "Pre-incremented c: $incrementedC<br>";

// 4. Operator Precedence
echo '<h2>4. Operator Precedence</h2>';

$precedenceResult = 2 + 3 * 4;
$parenthesesResult = (2 + 3) * 4;

echo "2 + 3 * 4 = $precedenceResult<br>";
echo "(2 + 3) * 4 = $parenthesesResult<br>";

// 5. Assignment Associativity
echo '<h2>5. Assignment Associativity</h2>';

[$level, $score, $time] = [0, 0, 0];

echo "Level: $level, Score: $score, Time: $time<br>";

// 6. Equality and Assignment
echo '<h2>6. Equality and Assignment</h2>';

$firstValue = 5;
$sameValue = 5;
$stringValue = "5";

var_dump($firstValue == $sameValue);
var_dump($firstValue === $sameValue);
var_dump($firstValue == $stringValue);
var_dump($firstValue === $stringValue);
echo '<br>';

// 7. Logical Operators
echo '<h2>7. Logical Operators</h2>';

$a = 1;
$b = 0;

var_dump($a === 1 && $b === 0);
var_dump($a === 1 || $b === 1);
var_dump(!$b);
echo '<br>';

// 8. Scholarship Decision with if...else
echo '<h2>8. Scholarship Decision with if...else</h2>';

$gpa = 3.59;

if ($gpa >= 3.5) {
	echo "With a GPA of $gpa, the student is eligible for a scholarship.<br>";
} else {
	echo "With a GPA of $gpa, the student is not eligible for a scholarship.<br>";
}

// 9. Scholarship Decision with if...elseif...else
echo '<h2>9. Scholarship Decision with if...elseif...else</h2>';

if ($gpa >= 3.7) {
	echo "With a GPA of $gpa, the student receives a full scholarship.<br>";
} elseif ($gpa >= 3.5) {
	echo "With a GPA of $gpa, the student receives a partial scholarship.<br>";
} else {
	echo "With a GPA of $gpa, the student receives no scholarship.<br>";
}

// 10. Access Status
echo '<h2>10. Access Status</h2>';

$status = 'pending';

switch ($status) {
	case 'approved':
		echo "Access approved.<br>";
		break;
	case 'pending':
		echo "Access is pending.<br>";
		break;
	default:
		echo "Access denied.<br>";
}

// 11. While Loop
echo '<h2>11. While Loop</h2>';

$fuel = 10;

while ($fuel > 1) {
	echo "There is enough fuel (fuel: $fuel).<br>";
	$fuel--;
}

// 12. Multiplication Table
echo '<h2>12. Multiplication Table</h2>';

for ($multiplier = 1; $multiplier <= 12; $multiplier++) {
	echo "12 x $multiplier = " . (12 * $multiplier) . '<br>';
}
