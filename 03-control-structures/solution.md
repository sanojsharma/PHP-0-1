```php
// 1. Even or Odd
$number = 7;
if ($number % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}

// 2. Largest of Three Numbers
$a = 10; $b = 25; $c = 15;
if ($a > $b && $a > $c) {
    echo "$a is the largest";
} elseif ($b > $c) {
    echo "$b is the largest";
} else {
    echo "$c is the largest";
}

// 3. Grade Calculator
$marks = 85;
echo match (true) {
    $marks >= 90 => "A+",
    $marks >= 80 => "A",
    $marks >= 70 => "B",
    default => "C"
};

// 4. Weekday or Weekend
$day = "Saturday";
switch ($day) {
    case "Saturday":
    case "Sunday":
        echo "It's a weekend!";
        break;
    default:
        echo "It's a weekday!";
}

// 5. Fix the Loop
$i = 1;
while ($i <= 5) {  // Removed the semicolon after while
    echo "Number: $i\n";
    $i++;
}

// 6. Right-Angled Triangle
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat("*", $i) . "\n";
}

// 7. Reverse Counting
$i = 10;
do {
    echo "$i ";
    $i--;
} while ($i >= 1);

// 8. Sum of Digits
$number = 345;
$sum = 0;
while ($number > 0) {
    $sum += $number % 10;
    $number = (int)($number / 10);
}
echo "Sum = $sum";

// 9. Multiplication Table
$n = 3;
for ($i = 1; $i <= 10; $i++) {
    echo "$n x $i = " . ($n * $i) . "\n";
}

// 10. Pyramid Pattern
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat(" ", $n - $i) . str_repeat("*", 2 * $i - 1) . "\n";
}

// 11. Palindrome Checker
$str = "madam";
if ($str === strrev($str)) {
    echo "Yes, it's a palindrome!";
} else {
    echo "No, it's not a palindrome.";
}

// 12. First 10 Prime Numbers
$count = 0;
$num = 2;
while ($count < 10) {
    $isPrime = true;
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo "$num ";
        $count++;
    }
    $num++;
}

// 13. FizzBuzz
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}
```
