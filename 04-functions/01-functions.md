
# Functions in PHP

## 💡 Tips Before We Start:
- Functions help **organize** your code into reusable blocks.
- Always use **meaningful names** for functions.
- Use **type hints** for better readability and debugging.
- Keep functions **small and focused** on a single task.

---

## 1️⃣ What is a Function?

A function is a **block of reusable code** that performs a specific task. Instead of writing the same logic multiple times, we can call a function when needed.

🔹 Example:
```php
function greet() {
    echo "Hello, World!";
}

greet(); // Output: Hello, World!
```

---

## 2️⃣ How to Declare a Function

Functions in PHP are defined using the `function` keyword.

🔹 Syntax:
```php
function functionName() {
    // Code to execute
}
```

🔹 Example:
```php
function sayHello() {
    echo "Hello from the function!";
}

sayHello(); // Calling the function
```

---

## 3️⃣ Passing Arguments in a Function

You can pass **parameters** to a function to make it more flexible.

🔹 Example:
```php
function greetUser($name) {
    echo "Hello, $name!";
}

greetUser("John"); // Output: Hello, John!
```

---

## 4️⃣ Passing Arguments with Type Declaration

Type declarations help ensure that a function receives the expected data type.

🔹 Example:
```php
function add(int $a, int $b) {
    return $a + $b;
}

echo add(5, 10); // Output: 15
```

If you pass a non-integer value, PHP will throw a **TypeError**.

---

## 5️⃣ Passing Arguments Using Spread Operator

The **spread operator (`...`)** allows passing multiple values as an array.

🔹 Example:
```php
function sumAll(...$numbers) {
    return array_sum($numbers);
}

echo sumAll(1, 2, 3, 4, 5); // Output: 15
```

### ✅ **Ensuring the Spread Operator (`...`) is the Last Parameter**  

The **spread operator (`...`)** must be the **last parameter** in a function when accepting multiple arguments.  

🔹 **Incorrect Usage (❌ Error)**  
```php
function sumAll(...$numbers, $extra) { 
    return array_sum($numbers) + $extra;
}
```
⚠ **Error:** The spread parameter `...$numbers` **must be the last parameter** in the function definition.  

---

🔹 **Correct Usage (✅ Fixed)**  
```php
function sumAll($extra, ...$numbers) {
    return array_sum($numbers) + $extra;
}

echo sumAll(10, 1, 2, 3, 4, 5); // Output: 25
```
📌 **Note:**  
- The **spread operator must be the last parameter**.  
- Here, `$extra` gets the first argument (`10`), and `...$numbers` collects the rest (`[1, 2, 3, 4, 5]`).  
- This ensures the function works as expected without errors. 🚀
---

## 6️⃣ Function with Named Arguments

Named arguments allow passing parameters by name instead of position.

🔹 Example:
```php
function userInfo($name, $age) {
    echo "Name: $name, Age: $age";
}

userInfo(age: 25, name: "Alice"); // Order doesn't matter!
```

---

## 7️⃣ Function with Return Type

A function can return different types of values.

### ✅ Single Return Type
```php
function multiply(int $a, int $b): int {
    return $a * $b;
}

echo multiply(3, 4); // Output: 12
```

### ✅ Mixed Return Type
```php
function getValue(bool $returnString): mixed {
    return $returnString ? "Hello" : 100;
}

echo getValue(true);  // Output: Hello
echo getValue(false); // Output: 100
```

### ✅ Returning `null`
```php
function optionalValue(bool $flag): ?string {
    return $flag ? "Value Exists" : null;
}

var_dump(optionalValue(false)); // Output: NULL
```
