
## ✨ **Basic PHP Syntax**  

### 1️⃣ Running PHP Files  
- PHP files must have a `.php` extension. (e.g., `index.php`, `hello.php`)  
- PHP code is executed on the server and can be embedded in HTML.

---

### 2️⃣ PHP Opening & Closing Tags  
A PHP script starts with `<?php` and ends with `?>`.  

```php
<?php
    // PHP code goes here
?>
```
*🔹 Note:* The closing tag `?>` is optional in pure PHP files (recommended to omit it to avoid accidental whitespace issues).  

---

### 3️⃣ **Outputting Text ("Hello, World!")**  
Every PHP statement must end with a semicolon (`;`).  

```php
<?php
    echo "Hello, World!";
?>
```

---

### 4️⃣ **Assigning Values to Variables**  
- Variables in PHP start with a `$` symbol.  
- They are case-sensitive.  
- Strings should be enclosed in quotes (`""` or `''`).  

```php
<?php
    $message = "Hello, World!";
    echo $message;
?>
```

---

### 5️⃣ **Embedding PHP in HTML**  

You can mix PHP and HTML to dynamically generate content.  

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in HTML</title>
</head>
<body>

    <?php
        $message = "Hello, World!";
        $name = "John Doe";
    ?>

    <h1><?= $message; ?></h1>  <!-- Shorter echo syntax -->
    <p>Welcome, <?= $name; ?>!</p>

</body>
</html>
```

*🔹 Note:* `<?= $variable; ?>` is a shorthand for `<?php echo $variable; ?>` (enabled by default in modern PHP).  

---

### 🔥 **Quick Recap**  
✔ `.php` file extension is required.  
✔ PHP scripts start with `<?php` and can be embedded in HTML.  
✔ `echo` is used to output text.  
✔ Variables start with `$` and must be declared before use.  
✔ The semicolon (`;`) is required at the end of statements.  
