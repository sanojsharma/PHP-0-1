Here are your **assignments** for **control structures**, covering different difficulty levels. 🚀  

---

# **📌 Basic Assignments**  

### **1️⃣ Print Even or Odd (if-else)**
Write a PHP program that takes a number and prints **"Even"** if it is even and **"Odd"** if it is odd.  

📌 **Example Input:** `7`  
📌 **Output:** `Odd`  

---

### **2️⃣ Find the Largest Number (if-elseif-else)**
Write a program to find the **largest** of three numbers using **if-elseif-else**.  

📌 **Example Input:** `10, 25, 15`  
📌 **Output:** `25 is the largest number.`  

---

### **3️⃣ Grade Calculator (match)**
Write a PHP program that assigns a **grade** based on a student's score using the **match** statement.  

| Marks | Grade |
|---|---|
| 90+ | A+ |
| 80-89 | A |
| 70-79 | B |
| Below 70 | C |  

📌 **Example Input:** `85`  
📌 **Output:** `Grade: A`  

---

### **4️⃣ Weekday or Weekend? (switch-case)**
Write a PHP script that takes a day (Monday-Sunday) and prints whether it is a **weekday** or a **weekend** using `switch`.  

📌 **Example Input:** `"Saturday"`  
📌 **Output:** `It's a weekend!`  

---

### **5️⃣ Fix the Loop (Debugging Exercise)**
The following **while loop** is supposed to print numbers from `1` to `5`, but it doesn't work correctly. **Find and fix the issue.**  

```php
<?php
$i = 1;
while ($i < 5); {  // Something is wrong here
    echo "Number: $i\n";
    $i++;
}
?>
```

---

# **📌 Intermediate Assignments**  

### **6️⃣ Print a Right-Angled Triangle (for loop)**
Write a program that prints a **right-angled triangle** of `*` with `n` rows.  

📌 **Example Input:** `n = 5`  
📌 **Output:**  
```
*
**
***
****
*****
```

---

### **7️⃣ Reverse Counting Using a do-while Loop**
Write a program that prints numbers from **10 to 1** using a **do-while** loop.  

📌 **Output:** `10 9 8 7 6 5 4 3 2 1`  

---

### **8️⃣ Sum of Digits (while loop)**
Write a PHP program to **calculate the sum of digits** of a given number using a **while loop**.  

📌 **Example Input:** `345`  
📌 **Output:** `Sum = 3 + 4 + 5 = 12`  

---

### **9️⃣ Multiplication Table (for loop)**
Write a PHP program that prints the **multiplication table** of any number `n`.  

📌 **Example Input:** `n = 3`  
📌 **Output:**  
```
3 x 1 = 3
3 x 2 = 6
...
3 x 10 = 30
```

---

# **📌 Complex Assignments**  

### **🔟 Print a Pyramid Pattern (Nested Loops)**
Write a PHP script to print a **pyramid** of `*`.  

📌 **Example Input:** `n = 5`  
📌 **Output:**  
```
    *    
   ***   
  *****  
 ******* 
*********
```

---

### **1️⃣1️⃣ Palindrome Checker (Loops & Conditionals)**
Write a PHP program to check whether a given string is a **palindrome** or not. (A palindrome is a word that reads the same forward and backward.)  

📌 **Example Input:** `"madam"`  
📌 **Output:** `Yes, it's a palindrome!`  

📌 **Example Input:** `"hello"`  
📌 **Output:** `No, it's not a palindrome.`  

---

### **1️⃣2️⃣ Find the First 10 Prime Numbers**
Write a PHP program to **find and print the first 10 prime numbers**.  

📌 **Output:**  
```
2 3 5 7 11 13 17 19 23 29
```

---

### **1️⃣3️⃣ FizzBuzz Challenge (Complex Conditional Loop)**
Write a PHP program that prints numbers from `1 to 50`, but:  
- If a number is **divisible by 3**, print `"Fizz"`.  
- If a number is **divisible by 5**, print `"Buzz"`.  
- If a number is **divisible by both 3 and 5**, print `"FizzBuzz"`.  
- Otherwise, print the number itself.  

📌 **Output:**  
```
1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz ...
```