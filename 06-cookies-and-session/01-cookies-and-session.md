## 🍪 **State Management in PHP: Cookies & Sessions**  

PHP is **stateless**, meaning it doesn’t remember data across different page requests. To store and manage user data, we use **Cookies** and **Sessions**.  

---

# 1️⃣ **What is State Management?**  
State management refers to storing and maintaining **user data** across multiple requests in a web application.  

✅ **Example Use Cases:**  
- Keeping users **logged in** after authentication.  
- Remembering **user preferences** (e.g., dark mode).  
- Storing **shopping cart items** in an e-commerce site.  

PHP provides **Cookies** and **Sessions** for state management.

---

# 2️⃣ **Cookies in PHP**  

### ✅ What are Cookies?  
A **cookie** is a small piece of data stored in the user’s **browser**. It is sent with every request to the server.  

📌 **Key Features:**  
- Stored on the **client-side (browser)**.  
- Can have an **expiration time**.  
- Accessible across multiple pages.  

---

### ✏ **How to Set a Cookie in PHP**  
```php
setcookie("username", "JohnDoe", time() + 3600, "/");
```
📌 **Breakdown:**  
- `"username"` → Cookie name.  
- `"JohnDoe"` → Cookie value.  
- `time() + 3600` → Cookie will expire in **1 hour**.  
- `"/"` → Available across the **entire website**.  

---

### 🔍 **How to Read a Cookie**  
```php
if (isset($_COOKIE['username'])) {
    echo "Hello, " . $_COOKIE['username'];
} else {
    echo "No cookie found!";
}
```

---

### ❌ **How to Delete a Cookie**  
```php
setcookie("username", "", time() - 3600, "/");
```
📌 **Setting a past expiration time removes the cookie**.

---

# 3️⃣ **Sessions in PHP**  

### ✅ What are Sessions?  
A **session** stores data on the **server** instead of the user’s browser.  

📌 **Key Features:**  
- Data is stored in the **server**.  
- Uses a unique **Session ID** (`PHPSESSID`).  
- More **secure** than cookies.  

---

### ✏ **How to Start a Session in PHP**  
```php
session_start();
$_SESSION['user'] = "JohnDoe";
```
📌 **Breakdown:**  
- `session_start();` → Always call this at the **top of the page**.  
- `$_SESSION['user'] = "JohnDoe";` → Stores data in the session.

---

### 🔍 **How to Access Session Data**  
```php
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome, " . $_SESSION['user'];
} else {
    echo "No active session found!";
}
```

---

### **How to Destroy a Session**  
```php
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session
```
📌 **This completely removes session data**.

---

# 🔥 **Cookies vs. Sessions: Key Differences**  

| Feature      | Cookies 🍪 | Sessions 📂 |
|-------------|-----------|------------|
| Storage     | Client-side (Browser) | Server-side |
| Security    | Less secure | More secure |
| Expiration  | Can be set manually | Ends when the browser is closed (default) |
| Size Limit  | 4KB per cookie | No practical limit |

---

## 🚀 **When to Use What?**  

✅ **Use Cookies When:**  
- Storing small data like **user preferences**.  
- Remembering the **user login** for future visits.  
- Tracking **analytics data** (e.g., Google Analytics).  

✅ **Use Sessions When:**  
- Storing **sensitive data** (e.g., user authentication).  
- Managing **shopping carts** or user-specific data.  
- Handling **temporary user interactions**.  
