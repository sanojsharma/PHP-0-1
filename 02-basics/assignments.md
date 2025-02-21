### **PHP Assignments** 🚀  

Here are four assignments to practice **comments, constants & variables, data types, and operators** in PHP.  

---

## **1️⃣ Assignment: Comments**  
**Objective:** Understand the use of comments in PHP and differentiate between single-line and multi-line comments.

### **Task:**  
1. Create a PHP script that prints **"Hello, PHP World!"**.  
2. Add a **single-line comment** explaining what the script does.  
3. Add a **multi-line comment** explaining PHP's three types of comments.  

### **Example Output:**  
```
Hello, PHP World!
```

### **Hints:**  
- Use `//` for single-line comments.  
- Use `/* ... */` for multi-line comments.  

---

## **2️⃣ Assignment: Constants and Variables**  
**Objective:** Learn how to declare and use constants and variables in PHP.  

### **Task:**  
1. Create three variables:  
   - `$name` (your name)  
   - `$age` (your age)  
   - `$city` (your city)  
2. Print a sentence like: **"My name is John, I am 25 years old, and I live in Mumbai."**  
3. Define a constant `SITE_NAME` with the value `"PHP Learning Hub"`.  
4. Print the constant.  

### **Example Output:**  
```
My name is John, I am 25 years old, and I live in Mumbai.
Welcome to PHP Learning Hub!
```

### **Hints:**  
- Use `define("CONSTANT_NAME", value);` to create a constant.  
- Use `echo` to print variables and constants.  

---

## **3️⃣ Assignment: Data Types**  
**Objective:** Understand different data types in PHP and how to check them.  

### **Task:**  
1. Declare variables of different types:  
   - `$integerVar` (Integer)  
   - `$floatVar` (Float)  
   - `$stringVar` (String)  
   - `$booleanVar` (Boolean)  
   - `$arrayVar` (Array)  
   - `$nullVar` (NULL)  
2. Print each variable along with its data type using `var_dump()`.  
3. Modify the script to take user input for any two variables and display their types.  

### **Example Output:**  
```
int(10)
float(20.5)
string("Hello PHP!")
bool(true)
array(3) { [0]=> string(3) "one" [1]=> string(3) "two" [2]=> string(5) "three" }
NULL
```

### **Hints:**  
- Use `var_dump($variable);` to check the type of a variable.  
- Use `fgets(STDIN);` in CLI mode to take user input.  

---

## **4️⃣ Assignment: Operators**  
**Objective:** Apply different PHP operators to manipulate and compare values.  

### **Task:**  
1. Declare two numbers: `$num1 = 15` and `$num2 = 4`.  
2. Perform and print the results of **all arithmetic operations** (`+`, `-`, `*`, `/`, `%`, `**`).  
3. Use **comparison operators** (`==`, `!=`, `>`, `<`, `>=`, `<=`, `<=>`) to compare them and print results.  
4. Use **logical operators** (`&&`, `||`, `!`) with some conditions.  
5. Use the **ternary operator** to check if `$num1` is even or odd.  

### **Example Output:**  
```
Addition: 19
Subtraction: 11
Multiplication: 60
Division: 3.75
Modulus: 3

$num1 is greater than $num2
$num1 is an odd number
```

### **Hints:**  
- Use `if-else` to check for conditions.  
- Use `($num1 % 2 == 0) ? "Even" : "Odd";` for ternary operator.  
