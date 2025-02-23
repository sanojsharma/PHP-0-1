# Closures and Arrow Functions in PHP  

## 1️⃣ Closures in PHP (Anonymous Functions)  

A **closure** (or **anonymous function**) is a function **without a name** that can be stored in a variable, passed as an argument, or returned from another function.

### 🔹 Syntax  
```php
$variableName = function($parameters) {
    // Function body
};
```

### 🔹 Example  
```php
$greet = function($name) {
    return "Hello, $name!";
};

echo $greet("John"); // Output: Hello, John!
```

---

### ✅ Closures with `use()`  

Closures can **access variables** from their parent scope using the `use` keyword.

🔹 **Example:**  
```php
$message = "Welcome";

$greet = function($name) use ($message) {
    return "$message, $name!";
};

echo $greet("Alice"); // Output: Welcome, Alice!
```
🔹 Without `use`, `$message` would not be accessible inside the function.

---

### ✅ Passing Closures as Arguments  

Since closures are just variables, you can **pass them as arguments** to functions.

🔹 **Example:**  
```php
function execute($callback) {
    echo $callback();
}

execute(function() {
    return "Hello from a closure!";
});
// Output: Hello from a closure!
```

---

### ✅ Returning a Closure from a Function  

A function can **return a closure**, allowing for dynamic function creation.

🔹 **Example:**  
```php
function createMultiplier($factor) {
    return function($number) use ($factor) {
        return $number * $factor;
    };
}

$double = createMultiplier(2);
echo $double(5); // Output: 10
```

---

## 2️⃣ Arrow Functions in PHP (`fn` keyword)  

Arrow functions are **shorter alternatives** to closures. They are useful for simple operations.  

### 🔹 Syntax  
```php
fn($parameters) => expression;
```
- No `return` keyword needed.
- Single expression only.
- Inherits variables from parent scope **automatically** (no `use` needed).

---

### ✅ Basic Example  

```php
$greet = fn($name) => "Hello, $name!";

echo $greet("John"); // Output: Hello, John!
```

---

### ✅ Arrow Functions vs Closures  

🔹 **Closure Example:**  
```php
$multiply = function($a, $b) {
    return $a * $b;
};
```

🔹 **Arrow Function Equivalent:**  
```php
$multiply = fn($a, $b) => $a * $b;
```
Arrow functions **reduce boilerplate code** when writing simple functions.

---

### ✅ Accessing Outer Variables  

Unlike closures, arrow functions automatically **inherit** variables from the parent scope.

🔹 **Example:**  
```php
$factor = 3;

$multiply = fn($number) => $number * $factor;

echo $multiply(4); // Output: 12
```
🔹 No need for `use ($factor)`, as required in closures.

---

## 🚀 When to Use Closures vs Arrow Functions?  

| Use Case           | Use Closure (`function`) | Use Arrow Function (`fn`) |
|--------------------|----------------------|----------------------|
| Multi-line logic  | ✅ Yes                | ❌ No (only single expression) |
| Needs `use()`     | ✅ Yes                | ❌ No (automatic inheritance) |
| Simple expressions | ❌ No                 | ✅ Yes |


