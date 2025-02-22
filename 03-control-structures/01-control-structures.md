Great so far! **Control Structures** in PHP include conditional statements and loops that help control the flow of execution in a program. 🚀  

---

## **1️⃣ Conditional Statements**
Conditional statements allow you to execute code **only if a condition is met**.

### **if Statement**
```php
<?php
$age = 18;

if ($age >= 18) {
    echo "You are eligible to vote.";
}
?>
```
✅ **Executes the block if the condition (`$age >= 18`) is true.**  

---

### **if-else Statement**
```php
<?php
$age = 16;

if ($age >= 18) {
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}
?>
```
✅ **If the condition is false, the `else` block executes.**  

---

### **if-elseif-else Statement**
```php
<?php
$marks = 85;

if ($marks >= 90) {
    echo "Grade: A+";
} elseif ($marks >= 80) {
    echo "Grade: A";
} elseif ($marks >= 70) {
    echo "Grade: B";
} else {
    echo "Grade: C";
}
?>
```
✅ **Checks multiple conditions sequentially.**  

---

### **Ternary Operator (Shorthand if-else)**
```php
<?php
$age = 20;
$result = ($age >= 18) ? "Adult" : "Minor";
echo $result;
?>
```
✅ **Shortens `if-else` into one line.**  

---

### **Null Coalescing Operator (`??`)**
```php
<?php
$username = $_GET['user'] ?? "Guest";
echo "Hello, " . $username;
?>
```
✅ **If `$_GET['user']` is not set, "Guest" is used as a default.**  

---

## **2️⃣ switch Statement**
A `switch` statement is used when you want to match a value against **multiple cases**.

```php
<?php
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the work week!";
        break;
    case "Friday":
        echo "Weekend is near!";
        break;
    case "Sunday":
        echo "It's a holiday!";
        break;
    default:
        echo "Just another day.";
}
?>
```
✅ **Compares `$day` to different cases and executes the matching block.**  

---

## **3️⃣ Loops**
Loops **repeat** a block of code **until a condition is met**.

### **for Loop**
```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i\n";
}
?>
```
✅ **Runs from `$i = 1` to `$i = 5` (5 times).**  

---

### **while Loop**
```php
<?php
$i = 1;

while ($i <= 5) {
    echo "Number: $i\n";
    $i++;
}
?>
```
✅ **Repeats as long as `$i <= 5`.**  

---

### **do-while Loop**
```php
<?php
$i = 1;

do {
    echo "Number: $i\n";
    $i++;
} while ($i <= 5);
?>
```
✅ **Runs at least once, then checks the condition.**  

---

### **foreach Loop (For Arrays)**
```php
<?php
$fruits = ["Apple", "Banana", "Cherry"];

foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n";
}
?>
```
✅ **Iterates through each item in the array.**  

---

## **4️⃣ break & continue**
### **break (Exit Loop Early)**
```php
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "Number: $i\n";
}
?>
```
✅ **Stops the loop when `$i == 5`.**  

---

### **continue (Skip Current Iteration)**
```php
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "Number: $i\n";
}
?>
```
✅ **Skips `$i == 3` but continues the loop.**  

---

## **5️⃣ match Statement (PHP 8+)**  
- Works **like `switch`**, but is **more concise** and **returns a value**.  
- Uses **strict comparison (`===`)**, unlike `switch` which uses loose comparison (`==`).  

### **Basic Example**
```php
<?php
$day = "Monday";

$message = match ($day) {
    "Monday" => "Start of the work week!",
    "Friday" => "Weekend is near!",
    "Sunday" => "It's a holiday!",
    default => "Just another day.",
};

echo $message;
?>
```
✅ **Why is `match` better than `switch`?**
1. **No need for `break`** (automatically stops after finding a match).  
2. **Returns a value** (instead of executing a block of code).  
3. **Uses strict comparison (`===`)** (no unintended type conversions).  

---

### **Example: Grading System Using `match`**
```php
<?php
$marks = 85;

$grade = match (true) {
    $marks >= 90 => "A+",
    $marks >= 80 => "A",
    $marks >= 70 => "B",
    default => "C",
};

echo "Grade: $grade";
?>
```
✅ **`match (true) {}` trick:**  
- It checks **which condition is `true`**, rather than matching a specific value.  
- Similar to `if-elseif-else`, but **more readable and concise**.  

---

### **Example: Simple Calculator Using `match`**
```php
<?php
$num1 = 10;
$num2 = 5;
$operator = "+";

$result = match ($operator) {
    "+" => $num1 + $num2,
    "-" => $num1 - $num2,
    "*" => $num1 * $num2,
    "/" => ($num2 != 0) ? $num1 / $num2 : "Error: Division by zero",
    "%" => ($num2 != 0) ? $num1 % $num2 : "Error: Division by zero",
    default => "Invalid operator",
};

echo "Result: $result";
?>
```
✅ **Cleaner than `switch-case` and avoids unnecessary `break` statements.**  

---

## **Now, Are You Ready for Assignments?** 😃  