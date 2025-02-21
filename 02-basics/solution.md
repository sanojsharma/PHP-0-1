Here are the **solutions** for the assignments on **comments, constants & variables, data types, and operators** in PHP. 🚀  

---

## **1️⃣ Solution: Comments**  
```php
<?php
// This script prints "Hello, PHP World!" to the screen
echo "Hello, PHP World!";

/*
PHP supports three types of comments:
1. Single-line comment using // 
2. Single-line comment using # (less common)
3. Multi-line comment using /* ... */
/*
?>
```
✅ **Explanation:**  
- `//` is used for single-line comments.  
- `/* ... */` is used for multi-line comments.  

---

## **2️⃣ Solution: Constants and Variables**  
```php
<?php
// Declare variables
$name = "John";
$age = 25;
$city = "Mumbai";

// Print a sentence using variables
echo "My name is $name, I am $age years old, and I live in $city.\n";

// Define a constant
define("SITE_NAME", "PHP Learning Hub");

// Print the constant
echo "Welcome to " . SITE_NAME . "!\n";
?>
```
✅ **Explanation:**  
- Variables are defined using `$` and assigned values.  
- Constants are defined using `define("NAME", "value")`.  
- Concatenation (`.`) is used to combine strings.  

---

## **3️⃣ Solution: Data Types**  
```php
<?php
// Declare variables of different data types
$integerVar = 10;
$floatVar = 20.5;
$stringVar = "Hello PHP!";
$booleanVar = true;
$arrayVar = ["one", "two", "three"];
$nullVar = null;

// Print values and their types
var_dump($integerVar);
var_dump($floatVar);
var_dump($stringVar);
var_dump($booleanVar);
var_dump($arrayVar);
var_dump($nullVar);

?>
```
✅ **Explanation:**  
- `var_dump($variable);` prints the value and type.  
- `trim()` removes extra spaces or newline characters.  

---

## **4️⃣ Solution: Operators**  
```php
<?php
// Declare variables
$num1 = 15;
$num2 = 4;

// Arithmetic Operations
echo "Addition: " . ($num1 + $num2) . "\n";
echo "Subtraction: " . ($num1 - $num2) . "\n";
echo "Multiplication: " . ($num1 * $num2) . "\n";
echo "Division: " . ($num1 / $num2) . "\n";
echo "Modulus: " . ($num1 % $num2) . "\n";
echo "Exponentiation: " . ($num1 ** $num2) . "\n";

// Comparison Operators
echo ($num1 > $num2) ? "$num1 is greater than $num2\n" : "$num1 is not greater than $num2\n";
echo ($num1 == $num2) ? "$num1 is equal to $num2\n" : "$num1 is not equal to $num2\n";

// Logical Operators
$condition1 = ($num1 > 10);
$condition2 = ($num2 < 5);
echo ($condition1 && $condition2) ? "Both conditions are true\n" : "At least one condition is false\n";

// Ternary Operator
echo ($num1 % 2 == 0) ? "$num1 is even\n" : "$num1 is odd\n";
?>
```
✅ **Explanation:**  
- **Arithmetic operations (`+`, `-`, `*`, `/`, `%`, `**`)** perform calculations.  
- **Comparison operators (`>`, `<`, `==`, `!=`)** compare values.  
- **Logical operators (`&&`, `||`, `!`)** check conditions.  
- **Ternary operator (`? :`)** acts as a shorthand for `if-else`.    

---

## **Summary of What You’ve Learned**
✅ **Comments:** Single-line (`//`), multi-line (`/* ... */`).  
✅ **Variables & Constants:** Store data using `$variables` and `define("CONST_NAME", value)`.  
✅ **Data Types:** Integers, Floats, Strings, Booleans, Arrays, NULL (`var_dump()`).  
✅ **Operators:** Arithmetic, Assignment, Comparison, Logical, String, Ternary.  
