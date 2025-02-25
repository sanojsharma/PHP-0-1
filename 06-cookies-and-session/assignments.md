## 📝 **Assignments & Common Mistakes for Cookies & Sessions**  

Now that you understand **Cookies & Sessions**, let’s put that knowledge into practice with **assignments** and **fix common mistakes**. 🚀  

---

# 🏆 **Assignments**  

## 1️⃣ **Basic Assignments** (Beginner Level)  

### 📌 **Task 1: Set and Retrieve a Cookie**  
✅ **Goal:**  
- Create a page that sets a cookie called `"user_color"` with the value `"blue"`.  
- Create another page that reads and displays the cookie value.  

💡 **Hint:** Use `setcookie()` and `$_COOKIE`.  

---

### 📌 **Task 2: Start and Access a Session**  
✅ **Goal:**  
- Start a session and store `"username" => "JohnDoe"` in `$_SESSION`.  
- On another page, retrieve and display the session value.  

💡 **Hint:** Use `session_start()` before accessing session variables.  

---

## 2️⃣ **Intermediate Assignments**  

### 📌 **Task 3: Remember User Choice with Cookies**  
✅ **Goal:**  
- Create a page where a user can **select a background color** (`red`, `blue`, `green`).  
- Store the color in a **cookie** and apply it as the page's background color when the user revisits.  

💡 **Hint:** Use `<form>` to select color and `setcookie()` to store it.  

---

### 📌 **Task 4: Login System with Sessions**  
✅ **Goal:**  
- Create a **login form** (`username`, `password`).  
- If login is successful, store the username in a session.  
- On another page (`dashboard.php`), display **"Welcome, [username]"**.  
- Add a **logout button** that destroys the session.  

💡 **Hint:** Use `session_unset()` and `session_destroy()` to log out users.  

---

## 3️⃣ **Advanced Assignments** (Challenging Tasks)  

### 📌 **Task 5: Shopping Cart Using Sessions**  
✅ **Goal:**  
- Create a **product list** where users can add items to a **cart**.  
- Store the cart data in a **session** (`$_SESSION['cart']`).  
- Display the cart on a separate page.  
- Allow users to **remove items** from the cart.  

💡 **Hint:** Store items as an **associative array** in the session and update it when items are added or removed.  

---

### 📌 **Task 6: Auto Logout After Inactivity**  
✅ **Goal:**  
- Implement an **auto logout feature** where a user is logged out after **5 minutes of inactivity**.  
- Store the **last activity timestamp** in a session and check it on each request.  

💡 **Hint:** Use `time()` to track the last activity and compare it with the current time.  

---

# ❌ **Common Mistakes & Fixes**  

## 🛑 **1. Forgetting to Start a Session**  
🔴 **Incorrect:**  
```php
$_SESSION['user'] = "JohnDoe"; // ❌ This will not work without session_start()
```
✅ **Fix:**  
```php
session_start();
$_SESSION['user'] = "JohnDoe";
```

---

## 🛑 **2. Setting Cookies but Not Sending Headers First**  
🔴 **Incorrect:**  
```php
echo "Welcome!";
setcookie("user", "JohnDoe", time() + 3600); // ❌ Headers already sent error
```
✅ **Fix:**  
```php
setcookie("user", "JohnDoe", time() + 3600);
echo "Welcome!";
```
📌 **Cookies must be set before any output (e.g., `echo`)**.

---

## 🛑 **3. Not Checking if a Cookie Exists Before Accessing It**  
🔴 **Incorrect:**  
```php
echo "Hello, " . $_COOKIE['username']; // ❌ Error if cookie is not set
```
✅ **Fix:**  
```php
if (isset($_COOKIE['username'])) {
    echo "Hello, " . $_COOKIE['username'];
} else {
    echo "No cookie found!";
}
```

---

## 🛑 **4. Forgetting to Destroy a Session Properly**  
🔴 **Incorrect:**  
```php
session_start();
session_destroy(); // ❌ This does not clear session variables immediately
```
✅ **Fix:**  
```php
session_start();
session_unset();  // Removes all session variables
session_destroy(); // Ends the session
```

---

## 🛑 **5. Not Setting a Secure Cookie for Authentication**  
🔴 **Incorrect:**  
```php
setcookie("auth_token", "12345", time() + 3600, "/"); // ❌ Vulnerable to XSS
```
✅ **Fix:**  
```php
setcookie("auth_token", "12345", time() + 3600, "/", "", true, true);
```
📌 **Use `true, true` for the last two parameters to enable**:
- `Secure` → Cookie is only sent over HTTPS.
- `HttpOnly` → Prevents JavaScript access (protects from XSS attacks).