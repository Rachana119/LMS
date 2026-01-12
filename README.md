# 📚 Library Management System

## 📌 Project Description
The **Library Management System** is a web-based application developed to manage library operations efficiently.  
It provides separate access for **Admin** and **Students**, allowing smooth handling of book inventory, student registrations, and book borrowing requests.

The system ensures that a student can **borrow only one book at a time**. A student must return the borrowed book before requesting another one. All borrowing requests are reviewed and approved or rejected by the admin.

---

## 🚀 Features

### 👨‍🎓 Student Module
- Student registration and login
- View available books
- Send request to borrow a book
- Can borrow **only one book at a time**
- Must return the book before borrowing again
- View borrowed book status

### 👨‍💼 Admin Module
- Admin login
- Add new books
- Edit book details
- Remove books from the library
- View student registrations
- View student book requests
- Approve or reject book borrowing requests
- Manage returned books

---

## 🛠️ Technologies Used

### Frontend
- HTML
- CSS
- JavaScript

### Backend
- PHP

### Database
- MySQL (using XAMPP)

### Server
- Apache Server (XAMPP)

---

## 🗂️ System Workflow

1. Student registers and logs in
2. Student views available books
3. Student sends a request to borrow a book
4. Admin reviews the request
5. Admin approves or rejects the request
6. If approved:
   - Book status changes to borrowed
   - Student cannot borrow another book until the current one is returned
7. Student returns the book
8. Book becomes available again

---


---


