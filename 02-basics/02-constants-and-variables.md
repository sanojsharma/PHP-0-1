### **Constants and Variables in PHP**  

In PHP, **variables** and **constants** are used to store and manage data. However, they differ in their behavior and usage.

---

## **1. Variables in PHP**  

### **Definition:**  
A variable is a named storage that holds a value, which can be changed during script execution.

### **Rules for Naming Variables:**
- Must start with a **`$`** sign (e.g., `$name`).
- Can contain letters, numbers, and underscores (e.g., `$user_age`).
- Cannot start with a number (e.g., `$1var` ❌).
- Case-sensitive (`$name` and `$Name` are different).

### **Declaring and Assigning Variables**
```php
<?php
$name = "John";  // String
$age = 30;       // Integer
$price = 99.99;  // Float
$isAdmin = true; // Boolean

echo "Name: $name, Age: $age";
?>
```

### **Variable Scope in PHP**
- **Local Scope** – Variables declared inside a function are not accessible outside.
- **Global Scope** – Variables declared outside a function are not accessible inside a function (unless using `global` keyword or `$GLOBALS` array).
- **Static Variables** – Retain their value even after a function ends.

```php
<?php
$x = 10; // Global variable

function test() {
    global $x; // Accessing global variable
    echo $x;
}

test();
?>
```

 ### Super Global Variables (Accessible Everywhere)
PHP provides **built-in** super global variables:

| Super Global | Description |
|-------------|------------|
| `$_GET` | Data sent via URL (query parameters) |
| `$_POST` | Data sent via form submission |
| `$_SESSION` | Stores session data |
| `$_COOKIE` | Stores cookies |
| `$_SERVER` | Server-related info (e.g., `$_SERVER['REQUEST_METHOD']`) |

Example using `$_GET`:
```php
<?php
// URL: example.com/?name=John
echo $_GET['name']; // Output: John
?>
```

---
---

## **2. Constants in PHP**  

### **Definition:**  
A constant is a **named value that cannot be changed** once it is set.

### **Declaring Constants**
PHP provides two ways to define constants:

### **1️⃣ Using `define()` (Traditional)**
```php
<?php
define("SITE_NAME", "Google");
echo SITE_NAME; // Output: Google
?>
```

### **2️⃣ Using `const` (Recommended)**
```php
<?php
const PI = 3.1416;
echo PI; // Output: 3.1416
?>
```

### **Differences Between Variables and Constants**
| Feature      | Variables | Constants |
|-------------|----------|-----------|
| Declaration | Starts with `$` | No `$`, uses `define()` or `const` |
| Value Change | Can be changed | Cannot be changed once set |
| Scope | Local or global | Always global |
| Case-sensitive | Yes | `define()` constants are case-sensitive unless set otherwise |

---

## **3. Magic Constants in PHP**
PHP provides **predefined constants** that change based on execution.

```php
<?php
echo __FILE__;   // Full file path
echo __LINE__;   // Current line number
echo __DIR__;    // Directory path
?>
```

---

### **Which One to Use?**
- Use **variables** when you need values that change during execution.
- Use **constants** for values that should remain fixed (e.g., API keys, DB credentials).

