# 📝 Solutions for PHP Function Assignments  

## ✅ **Basic Assignments**  

### 1️⃣ **Create a Greeting Function**  
```php
function greetUser($name) {
    echo "Hello, $name! Welcome to PHP functions.";
}

greetUser("John"); // Output: Hello, John! Welcome to PHP functions.
```

---

### 2️⃣ **Simple Calculator**  
```php
function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
        default:
            return "Invalid operator";
    }
}

echo calculate(10, 5, '*'); // Output: 50
```

---

## 🔥 **Intermediate Assignments**  

### 3️⃣ **Find the Maximum Number (Using Spread Operator)**  
```php
function findMax(...$numbers) {
    return max($numbers);
}

echo findMax(10, 25, 5, 100, 50); // Output: 100
```

---

### 4️⃣ **Named Arguments - Create User Profile**  
```php
function createUserProfile(string $name, int $age, string $city) {
    echo "User Profile: $name, Age: $age, City: $city";
}

createUserProfile(name: "Alice", age: 28, city: "New York");
// Output: User Profile: Alice, Age: 28, City: New York
```

---

## 🚀 **Advanced Assignments**  

### 5️⃣ **Multi-Level Closure for Discount Calculation**  
```php
function discountCalculator($discount) {
    return function ($price) use ($discount) {
        return $price - ($price * $discount / 100);
    };
}

$tenPercentOff = discountCalculator(10);
echo $tenPercentOff(200); // Output: 180
```

---

### 6️⃣ **Recursive Function to Generate Fibonacci Series**  
```php
function fibonacci($n) {
    if ($n <= 0) return 0;
    if ($n == 1) return 1;
    return fibonacci($n - 1) + fibonacci($n - 2);
}

echo fibonacci(10); // Output: 55
```

---

# 🔍 **Fix the Function Problems**  

### 🛠 **1. Fix the Function Name & Argument Type**  
```php
function sumNumbers($a, $b) {
    return $a + $b;
}

echo sumNumbers(4, 6); // Output: 10
```

---

### 🛠 **2. Fix Mixed Return Type**  
```php
function checkAge(int $age): mixed {
    return $age >= 18 ? "Adult" : $age;
}

echo checkAge(20); // Output: Adult
echo checkAge(15); // Output: 15
```

---

### 🛠 **3. Fix Arrow Function Scope**  
```php
$factor = 2;
$multiply = fn($num) => $num * $factor;

echo $multiply(4); // Output: 8
```

---

### 🛠 **4. Fix Spread Operator Usage**  
```php
function sumAll($extra, ...$numbers) {
    return array_sum($numbers) + $extra;
}

echo sumAll(10, 1, 2, 3, 4, 5); // Output: 25
```

---

🚀 These solutions should help solidify **your understanding of PHP functions**