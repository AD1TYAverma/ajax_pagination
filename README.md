# PHP AJAX Pagination

A dynamic **Pagination System** built using **PHP, MySQL, AJAX, and jQuery**. This project demonstrates how to fetch and display records page by page without reloading the entire webpage, providing a fast and seamless user experience.

##  Features

- AJAX-based pagination
- Dynamic page navigation
- No page reload required
- MySQL database integration
- Fast data loading
- Responsive pagination UI
- Active page highlighting
- Clean and beginner-friendly code structure

##  Technologies Used

- PHP
- MySQL
- AJAX
- jQuery
- HTML5
- CSS3

## 📂 Project Structure

```text
ajax-pagination/
│
├── index.php
├── ajax-pagination.php
├── js/
│   └── jquery.js
│
└── database/
    └── ajax_db.sql
```

##  Installation

### 1. Clone Repository

```bash
git clone https://github.com/your-username/ajax-pagination.git
```

### 2. Move Project

Copy the project folder into:

```text
xampp/htdocs/
```

### 3. Create Database

Create a database named:

```sql
ajax_db
```

### 4. Import SQL File

Import the SQL file into phpMyAdmin.

### 5. Run Project

Start Apache and MySQL in XAMPP and open:

```text
http://localhost/ajax-pagination
```

##  Database Table

```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL
);
```

##  How It Works

1. User opens the page.
2. AJAX sends a request to the server.
3. PHP fetches records from MySQL using LIMIT and OFFSET.
4. Records are displayed dynamically.
5. Clicking a page number loads new records without refreshing the page.

##  Screenshots

Add screenshots of:

- Main Page
- Pagination Navigation
- Active Page Selection
- Records Loading Dynamically

## Learning Objectives

This project helps understand:

- AJAX Requests using jQuery
- PHP & MySQL Integration
- Pagination Logic
- LIMIT and OFFSET in SQL
- Dynamic Data Loading
- Event Delegation
- DOM Manipulation
- Asynchronous Requests

# Future Improvements

- Search with Pagination
- AJAX Load More Button
- Infinite Scrolling
- Sorting Records
- Bootstrap UI
- Laravel Version
- REST API Integration

# Author

**Aditya Verma**

## ⭐ Support

If you found this project useful, please give it a **Star ⭐** on GitHub.
