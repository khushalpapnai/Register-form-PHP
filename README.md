
# 🔐 PHP User Registration & Login System

This project implements a simple yet functional user registration and login system using PHP and MySQL. It includes basic session management and input handling, wrapped in a clean UI with HTML and CSS.

🌐 **Live Site:** [Visit Live Demo](https://lilninjakhushal.kesug.com/index.php)

---

## 📁 Project Structure

```bash
├── index.php          # User registration form and logic
├── login.php          # User login form and logic
├── welcome.php        # Welcome page after successful login
├── logout.php         # Destroys session and redirects to login
├── style.css          # Styling for registration form
├── login.css          # Styling for login form
└── user_db.sql        # MySQL user table schema (optional)
```

---

## 🚀 Features

- ✅ Register with username, email, and password
- 🚫 Email uniqueness check to avoid duplicates
- 🔒 Login with session handling
- ✨ Minimal UI with CSS styling and Google Fonts
- 🔐 Welcome page gated by session access
- 🔓 Logout feature

---

## 🛠 Technologies Used

- PHP (procedural)
- MySQLi for database interaction
- HTML & CSS (responsive forms)
- JavaScript `alert()` for feedback messages

---

## 🧱 Database Schema

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
```

---

## ⚠️ Security Notes

This project is for learning/demo purposes. For production use, consider implementing:

- Password hashing using `password_hash()` and `password_verify()`
- CSRF protection tokens in forms
- Form validation and sanitization
- Secure session management and HTTPS

---

## 💡 How to Run Locally

1. Clone or download the repository
2. Import the `user_db.sql` schema (or create `users` table manually)
3. Set up your local server (e.g., XAMPP/LAMP) with MySQL enabled
4. Navigate to `http://localhost/your-folder/index.php`
5. Register and login!

---

## 📣 Author

Made with ❤️ by [@Khushal](https://lilninjakhushal.kesug.com)

---


