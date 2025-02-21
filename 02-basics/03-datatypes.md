### **PHP Data Types – In-Depth Guide**  

PHP is a **loosely typed language**, meaning you don’t need to specify the data type of a variable explicitly. PHP automatically determines the type based on the assigned value.  

There are **8 primary data types** in PHP, divided into three categories:

| Category         | Data Types |
|-----------------|------------|
| **Scalar Types** | `string`, `integer`, `float`, `boolean` |
| **Compound Types** | `array`, `object`, `callable`, `iterable` |
| **Special Types** | `NULL`, `resource` |

---

## **1️⃣ Scalar Data Types (Single-Value Types)**  

### **1. String (`string`)**  
A string is a sequence of characters, enclosed in **single (`'`)** or **double (`"`)** quotes.

```php
<?php
$firstName = "John"; 
$lastName = 'Doe';

echo "Hello, $firstName";  // ✅ Variable inside double quotes is expanded
echo 'Hello, $lastName';   // ❌ Variable is not expanded inside single quotes
?>
```

---

### **2. Integer (`int`)**  
An integer is a **whole number** without a decimal.

```php
<?php
$age = 30;
var_dump($age); // Output: int(30)
?>
```

✔ **Integer Limits (Depends on system architecture):**  
```php
echo PHP_INT_MAX;  // Output: 9223372036854775807 (on 64-bit systems)
echo PHP_INT_MIN;  // Output: -9223372036854775808
```

✔ **Type casting to Integer:**  
```php
$price = "100";
$intPrice = (int)$price; // Type casting to integer
var_dump($intPrice); // int(100)
```

---

### **3. Floating Point (`float`)**  
A floating-point number is a **decimal number**.

```php
<?php
$pi = 3.1416;
var_dump($pi); // Output: float(3.1416)
?>
```

✔ **Use `round()` to round numbers:**  
```php
echo round(3.6);  // Output: 4
echo round(3.4);  // Output: 3
```

✔ **Use `floor()` and `ceil()`:**  
```php
echo floor(3.9);  // Output: 3
echo ceil(3.1);   // Output: 4
```

---

### **4. Boolean (`bool`)**  
A boolean can be **`true`** or **`false`**.

```php
<?php
$isLoggedIn = true;
var_dump($isLoggedIn); // Output: bool(true)
?>
```

✔ **Truthy and Falsy Values**  
- **Truthy:** Non-empty strings, non-zero numbers, arrays with elements.
- **Falsy:** `0`, `""` (empty string), `null`, `false`, `array()` (empty array).

```php
if ("hello") {
    echo "This is truthy"; // ✅ Will execute
}
if (0) {
    echo "This is falsy"; // ❌ Won't execute
}
```

---

## **2️⃣ Compound Data Types (Multiple Values or Objects)**  

### **5. Arrays (`array`)**  
An array can store multiple values in a **single variable**.

✔ **Indexed Array:**  
```php
<?php
$colors = ["red", "green", "blue"];
echo $colors[0]; // Output: red
?>
```

✔ **Associative Array (Key-Value Pairs):**  
```php
<?php
$user = ["name" => "John", "age" => 30];
echo $user["name"]; // Output: John
?>
```

✔ **Multidimensional Array:**  
```php
$users = [
    ["name" => "Alice", "age" => 25],
    ["name" => "Bob", "age" => 28]
];

echo $users[1]["name"]; // Output: Bob
```

---

### **6. Objects (`object`)**  
Objects are instances of **classes**.

```php
<?php
class Car {
    public $brand;
    
    public function setBrand($brand) {
        $this->brand = $brand;
    }
}

$myCar = new Car();
$myCar->setBrand("Toyota");
echo $myCar->brand; // Output: Toyota
?>
```

---

### **7. Callable (`callable`)**  
A callable is a **function reference** that can be passed as an argument.

```php
<?php
function sayHello() {
    return "Hello!";
}

$greet = "sayHello";
echo $greet(); // Output: Hello!
?>
```

---

### **8. Iterable (`iterable`)**  
Iterable is used for **looping through elements** (introduced in PHP 7.1).

```php
<?php
function getNames(): iterable {
    return ["Alice", "Bob", "Charlie"];
}

foreach (getNames() as $name) {
    echo $name . "\n";
}
?>
```

---

## **3️⃣ Special Data Types**  

### **9. NULL (`NULL`)**  
`NULL` represents a **variable with no value**.

```php
<?php
$var = null;
var_dump($var); // Output: NULL
?>
```

---

### **10. Resource (`resource`)**  
A resource is a **special type** that holds references to external resources like **database connections** or **file handles**.

```php
<?php
$file = fopen("test.txt", "r"); // Resource (file handle)
var_dump($file); // Output: resource
?>
```

---

## **Type Juggling & Type Casting in PHP**  

✔ **PHP automatically converts types when needed** (Type Juggling).  
```php
$x = "10" + 5;  // PHP converts "10" to integer
echo $x; // Output: 15
```

✔ **Explicit Type Casting:**  
```php
$y = (int) "100"; // Converts string to integer
$z = (string) 25; // Converts integer to string
$floatVal = (float) "5.67"; // Converts to float
```

✔ **Check Data Type (`gettype()`, `var_dump()`, `is_*()` Functions):**  
```php
var_dump(gettype(123)); // Output: string
var_dump(is_int(123)); // Output: bool(true)
var_dump(is_string("hello")); // Output: bool(true)
```

---

## **Key Takeaways**
✔ PHP has **8 main data types** (string, int, float, bool, array, object, NULL, resource).  
✔ PHP **automatically converts types** (type juggling).  
✔ Use **explicit type casting** when needed.  
✔ Use `gettype()`, `var_dump()`, and `is_*()` functions for type checking.  

Would you like an assignment to practice data types? 🚀