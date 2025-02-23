# 📝 PHP Functions Assignments  

## ✅ **Basic Assignments**  

### 1️⃣ **Create a Greeting Function**  
Write a function `greetUser` that takes a name as a parameter and prints:  
```php
Hello, [name]! Welcome to PHP functions.
```
**Example Input:**  
```php
greetUser("John");
```
**Expected Output:**  
```
Hello, John! Welcome to PHP functions.
```

---

### 2️⃣ **Simple Calculator**  
Write a function `calculate` that takes **two numbers and an operator** (`+`, `-`, `*`, `/`) and returns the result.  
**Example Input:**  
```php
echo calculate(10, 5, '*');
```
**Expected Output:**  
```
50
```

---

## 🔥 **Intermediate Assignments**  

### 3️⃣ **Find the Maximum Number (Using Spread Operator)**  
Write a function `findMax` that accepts **any number of arguments** and returns the maximum value.  
**Example Input:**  
```php
echo findMax(10, 25, 5, 100, 50);
```
**Expected Output:**  
```
100
```

---

### 4️⃣ **Named Arguments - Create User Profile**  
Create a function `createUserProfile` that accepts named arguments: `name`, `age`, and `city`, and prints the user details.  
**Example Input:**  
```php
createUserProfile(name: "Alice", age: 28, city: "New York");
```
**Expected Output:**  
```
User Profile: Alice, Age: 28, City: New York
```

---

## 🚀 **Advanced Assignments**  

### 5️⃣ **Multi-Level Closure for Discount Calculation**  
Create a function `discountCalculator` that **returns another function**. The returned function should apply a discount to a price.  
**Example Input:**  
```php
$tenPercentOff = discountCalculator(10);
echo $tenPercentOff(200);
```
**Expected Output:**  
```
180
```
💡 **Hint:** Use closures with `use`.

---

### 6️⃣ **Recursive Function to Generate Fibonacci Series**  
Write a recursive function `fibonacci` that **generates the nth Fibonacci number**.  
**Example Input:**  
```php
echo fibonacci(10);
```
**Expected Output:**  
```
55
```
💡 **Hint:** Use recursion with base conditions.

---

# 🔍 **Fix the Function Problems**  

### 🛠 **1. Fix the Function Name & Argument Type**  
**❌ Incorrect Code:**  
```php
function sumNumbers($a, b) {
    return a + b;
}
```
🔹 **Hint:**  
- Missing `$` before `b`


---

### 🛠 **2. Fix Return Type**  
**❌ Incorrect Code:**  
```php
function checkAge(int $age): int {
    if ($age >= 18) {
        return "Adult";
    }
    return $age;
}
```
🔹 **Issues:**  
- Return type **must be consistent** (int is declared, but string is returned)


---

### 🛠 **3. Fix Arrow Function Scope**  
**❌ Incorrect Code:**  
```php
$factor = 2;
$multiply = fn($num) => $num * $multiplier;
```
🔹 **Issue:** `$multiplier` is not defined.


---

### 🛠 **4. Fix Spread Operator Usage**  
**❌ Incorrect Code:**  
```php
function sumAll(...$numbers, $extra) {
    return array_sum($numbers) + $extra;
}
```
