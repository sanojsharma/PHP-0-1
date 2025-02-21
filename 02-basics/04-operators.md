### **PHP Operators – In-Depth Guide**  

Operators in PHP are used to **perform operations on variables and values**. They are classified into different categories:

| Category              | Operators |
|----------------------|------------|
| **Arithmetic Operators** | `+`, `-`, `*`, `/`, `%`, `**` |
| **Assignment Operators** | `=`, `+=`, `-=`, `*=`, `/=`, `%=`, `**=` |
| **Comparison Operators** | `==`, `!=`, `===`, `!==`, `>`, `<`, `>=`, `<=`, `<=>` |
| **Logical Operators** | `&&`, `||`, `!`, `and`, `or`, `xor` |
| **Bitwise Operators** | `&`, `|`, `^`, `~`, `<<`, `>>` |
| **Increment/Decrement Operators** | `++`, `--` |
| **String Operators** | `.`, `.= ` |
| **Ternary & Null Coalescing** | `?:`, `??` |

---

## **1️⃣ Arithmetic Operators**
Used to **perform mathematical operations**.

```php
<?php
$a = 10;
$b = 5;

echo $a + $b; // Output: 15
echo $a - $b; // Output: 5
echo $a * $b; // Output: 50
echo $a / $b; // Output: 2
echo $a % $b; // Output: 0 (modulus: remainder of division)
echo $a ** $b; // Output: 100000 (Exponentiation: 10^5)
?>
```

---

## **2️⃣ Assignment Operators**
Used to **assign values to variables**.

```php
<?php
$x = 10;  
$x += 5; // Same as: $x = $x + 5;
echo $x; // Output: 15

$y = 20;
$y -= 5;  // $y = $y - 5;
$y *= 2;  // $y = $y * 2;
$y /= 4;  // $y = $y / 4;
$y %= 3;  // $y = $y % 3;
$y **= 2; // $y = $y ** 2;
?>
```

---

## **3️⃣ Comparison Operators**
Used to **compare values**. Returns **true (`1`) or false (`0`)**.

```php
<?php
$a = 10;
$b = "10";
$c = 20;

// Equality
var_dump($a == $b); // Output: true (values are equal)
var_dump($a === $b); // Output: false (strict equality: checks both value and type)

// Inequality
var_dump($a != $b); // Output: false
var_dump($a !== $b); // Output: true (different types)

// Greater/Lesser
var_dump($a > $c); // Output: false
var_dump($a < $c); // Output: true
var_dump($a >= 10); // Output: true
var_dump($a <= 5); // Output: false

// Spaceship Operator (PHP 7+)
var_dump($a <=> $c); // Output: -1 (left < right)
var_dump($a <=> $b); // Output: 0 (left == right)
var_dump($c <=> $a); // Output: 1 (left > right)
?>
```

✔ **The `<=>` (Spaceship) Operator returns:**  
- `-1` if left < right  
- `0` if left == right  
- `1` if left > right  

---

## **4️⃣ Logical Operators**
Used for **logical operations**.

```php
<?php
$loggedIn = true;
$isAdmin = false;

// AND (both must be true)
var_dump($loggedIn && $isAdmin); // Output: false
var_dump($loggedIn and $isAdmin); // Output: false

// OR (at least one must be true)
var_dump($loggedIn || $isAdmin); // Output: true
var_dump($loggedIn or $isAdmin); // Output: true

// XOR (only one must be true)
var_dump($loggedIn xor $isAdmin); // Output: true

// NOT (negates the value)
var_dump(!$loggedIn); // Output: false
?>
```

---

## **5️⃣ Bitwise Operators**
**Never used**.
Please read more about at w3schools.com or in offical PHP website.



---

## **6️⃣ Increment / Decrement Operators**
Used to **increase or decrease values**.

```php
<?php
$x = 5;

echo ++$x; // Pre-increment: 6
echo $x++; // Post-increment: 6 (then increases to 7)
echo --$x; // Pre-decrement: 6
echo $x--; // Post-decrement: 6 (then decreases to 5)
?>
```

---

## **7️⃣ String Operators**
Used to **concatenate strings**.

```php
<?php
$str1 = "Hello";
$str2 = " World!";

// Concatenation
echo $str1 . $str2; // Output: Hello World!

// Append to a string
$str1 .= $str2;
echo $str1; // Output: Hello World!
?>
```

---

## **8️⃣ Ternary & Null Coalescing Operators**

✔ **Ternary (`?:`)** – Shorter `if-else` condition  
```php
<?php
$age = 20;
echo ($age >= 18) ? "Adult" : "Minor"; // Output: Adult
?>
```

✔ **Null Coalescing (`??`)** – Checks if variable is null  
```php
<?php
$name = $_GET['name'] ?? "Guest"; // If $_GET['name'] is not set, use "Guest"
echo $name;
?>
```

---

## **Summary**
| Operator Type | Purpose |
|--------------|---------|
| Arithmetic | Perform math operations (`+`, `-`, `*`, `/`, `%`, `**`) |
| Assignment | Assign values (`=`, `+=`, `-=`, `*=`, `/=`, `%=`, `**=`) |
| Comparison | Compare values (`==`, `===`, `!=`, `!==`, `>`, `<`, `>=`, `<=`, `<=>`) |
| Logical | Work with boolean values (`&&`, `||`, `!`, `and`, `or`, `xor`) |
| Bitwise | Manipulate bits (`&`, `|`, `^`, `~`, `<<`, `>>`) |
| Increment/Decrement | Increase or decrease a value (`++`, `--`) |
| String | Concatenate strings (`.`, `.= `) |
| Ternary & Null Coalescing | Short `if-else` (`?:`, `??`) |

---
