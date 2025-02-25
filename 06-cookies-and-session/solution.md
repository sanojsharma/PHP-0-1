Here are the **solutions** for the assignments on **Cookies & Sessions** in PHP. 🚀  

---

# 📝 **Solutions**  

## 1️⃣ **Basic Assignments (Beginner Level)**  

### ✅ **Task 1: Set and Retrieve a Cookie**  

#### **Set the Cookie (set_cookie.php)**
```php
<?php
setcookie("user_color", "blue", time() + 3600, "/"); // Cookie expires in 1 hour
echo "Cookie 'user_color' has been set!";
?>
```

#### **Retrieve the Cookie (get_cookie.php)**
```php
<?php
if (isset($_COOKIE['user_color'])) {
    echo "Your chosen color is: " . $_COOKIE['user_color'];
} else {
    echo "No color preference set!";
}
?>
```

---

### ✅ **Task 2: Start and Access a Session**  

#### **Start a Session and Store Data (start_session.php)**
```php
<?php
session_start();
$_SESSION['username'] = "JohnDoe";
echo "Session started and username set!";
?>
```

#### **Retrieve Session Data (get_session.php)**
```php
<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'];
} else {
    echo "No session data found!";
}
?>
```

---

## 2️⃣ **Intermediate Assignments**  

### ✅ **Task 3: Remember User Choice with Cookies**  

#### **Color Selection Form (select_color.php)**
```php
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $color = $_POST['color'];
    setcookie("user_color", $color, time() + (86400 * 30), "/"); // 30 days
}
?>

<form method="post">
    <label>Select your favorite color:</label>
    <select name="color">
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
    </select>
    <button type="submit">Save</button>
</form>
```

#### **Apply Stored Color (display_color.php)**
```php
<?php
$color = isset($_COOKIE['user_color']) ? $_COOKIE['user_color'] : "white";
?>
<body style="background-color: <?php echo $color; ?>;">
    <p>Your selected background color is applied!</p>
</body>
```

---

### ✅ **Task 4: Login System with Sessions**  

#### **Login Page (login.php)**
```php
<?php
session_start();
$valid_user = "admin";
$valid_password = "password123";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == $valid_user && $_POST['password'] == $valid_password) {
        $_SESSION['user'] = $_POST['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid credentials!";
    }
}
?>

<form method="post">
    <label>Username:</label>
    <input type="text" name="username" required>
    <label>Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
```

#### **Dashboard Page (dashboard.php)**
```php
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
<a href="logout.php">Logout</a>
```

#### **Logout Page (logout.php)**
```php
<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
?>
```

---

## 3️⃣ **Advanced Assignments**  

### ✅ **Task 5: Shopping Cart Using Sessions**  

#### **Add Items to Cart (cart.php)**
```php
<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['item'])) {
    $_SESSION['cart'][] = $_POST['item'];
}

?>

<h2>Shopping Cart</h2>
<form method="post">
    <select name="item">
        <option value="Laptop">Laptop</option>
        <option value="Phone">Phone</option>
        <option value="Tablet">Tablet</option>
    </select>
    <button type="submit">Add to Cart</button>
</form>

<h3>Cart Items:</h3>
<ul>
    <?php foreach ($_SESSION['cart'] as $item) { ?>
        <li><?php echo $item; ?></li>
    <?php } ?>
</ul>

<a href="clear_cart.php">Clear Cart</a>
```

#### **Clear Cart (clear_cart.php)**
```php
<?php
session_start();
$_SESSION['cart'] = [];
header("Location: cart.php");
?>
```

---

### ✅ **Task 6: Auto Logout After Inactivity**  

#### **Login Page (auto_login.php)**
```php
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['last_activity'] = time();
    header("Location: auto_dashboard.php");
    exit();
}
?>

<form method="post">
    <label>Username:</label>
    <input type="text" name="username" required>
    <button type="submit">Login</button>
</form>
```

#### **Dashboard with Auto Logout (auto_dashboard.php)**
```php
<?php
session_start();

$timeout = 300; // 5 minutes

if (!isset($_SESSION['user'])) {
    header("Location: auto_login.php");
    exit();
}

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    session_unset();
    session_destroy();
    header("Location: auto_login.php");
    exit();
}

$_SESSION['last_activity'] = time(); // Reset timeout

?>

<h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
<p>You will be logged out after 5 minutes of inactivity.</p>
<a href="auto_logout.php">Logout</a>
```

#### **Manual Logout (auto_logout.php)**
```php
<?php
session_start();
session_unset();
session_destroy();
header("Location: auto_login.php");
?>
```

---

## 🛠 **Fixed Common Mistakes**  

### ✅ **Fixing: Forgetting to Start a Session**
🔴 **Incorrect:**  
```php
$_SESSION['user'] = "JohnDoe"; // ❌
```
✅ **Fixed:**  
```php
session_start();
$_SESSION['user'] = "JohnDoe";
```

---

### ✅ **Fixing: Cookie Set After Output**
🔴 **Incorrect:**  
```php
echo "Hello!";
setcookie("user", "JohnDoe", time() + 3600); // ❌
```
✅ **Fixed:**  
```php
setcookie("user", "JohnDoe", time() + 3600);
echo "Hello!";
```

---

### ✅ **Fixing: Checking if a Cookie Exists**
🔴 **Incorrect:**  
```php
echo "Welcome, " . $_COOKIE['username']; // ❌ Undefined if not set
```
✅ **Fixed:**  
```php
if (isset($_COOKIE['username'])) {
    echo "Welcome, " . $_COOKIE['username'];
}
```

---

### ✅ **Fixing: Destroying a Session Properly**
🔴 **Incorrect:**  
```php
session_start();
session_destroy(); // ❌ Does not clear session variables immediately
```
✅ **Fixed:**  
```php
session_start();
session_unset();
session_destroy();
```
