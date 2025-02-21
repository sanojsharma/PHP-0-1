## ✨ **Comments in PHP**  

A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code. ( Taken from w3schools)

### 1. **Single-line comments**  
You can use `//` or `#` to create a single-line comment.

```php
// This is a single-line comment
echo "Hello, World!"; // This prints a message

# This is also a single-line comment
echo "PHP is great!";
```

---

### 2. **Multi-line comments**  
You can use `/* ... */` for multi-line comments.
Any text between /* and */ will be ignored.
```php
/* 
   This is a multi-line comment.
   It spans multiple lines.
*/
echo "Hello, PHP!";
```

---

### **Best Practices for Using Comments in PHP**
- Use comments to explain complex logic or business rules.
- Avoid redundant comments (e.g., `// Add 1 to $x` when the code is just `$x = $x + 1;`).
- Keep comments up to date when modifying code.
- Use PHPDoc (`/** ... */`) for documenting functions, classes, and methods. ( Advanced users)

---

### **PHPDoc Comments**
PHPDoc comments are used for documentation purposes and are especially useful for IDEs and documentation generators.

```php
/**
 * Adds two numbers.
 *
 * @param int $a First number
 * @param int $b Second number
 * @return int Sum of $a and $b
 */
function add($a, $b) {
    return $a + $b;
}
```
