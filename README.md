<h1 align="center">🏙️ Municipal Community Complaint System</h1>

<p align="center">
  <b>A Full-Stack Web Platform for Smart Municipal Issue Management</b><br>
  Built using PHP, MySQL, HTML, CSS & JavaScript
</p>

<p align="center">
  <a href="https://municipalcommunitycomplaint.free.nf">
    <img src="https://img.shields.io/badge/🚀 Live Demo-Visit Now-success?style=for-the-badge">
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql">
  <img src="https://img.shields.io/badge/HTML5-Markup-E34F26?style=for-the-badge&logo=html5">
  <img src="https://img.shields.io/badge/CSS3-Styling-1572B6?style=for-the-badge&logo=css3">
  <img src="https://img.shields.io/badge/JavaScript-Frontend-F7DF1E?style=for-the-badge&logo=javascript">
  <img src="https://img.shields.io/badge/Server-Apache-orange?style=for-the-badge">
  <img src="https://img.shields.io/badge/License-Educational-blue?style=for-the-badge">
</p>

---

## 📌 Project Overview

The **Municipal Community Complaint System** is a web-based civic engagement platform that enables citizens to report and track municipal issues digitally.

It ensures transparency, faster issue resolution, and effective communication between citizens and local authorities.

> 💡 This system modernizes traditional complaint handling by bringing municipal services into the digital ecosystem.

---

## 🌐 Live Application

🔗 Access the deployed system here:  
**https://municipalcommunitycomplaint.free.nf**

---

## ✨ Core Features

### 👤 Citizen Panel

- Secure Registration & Login  
- Submit complaints with category & description  
- Upload complaint images (optional)  
- Track complaint status (Pending / In Progress / Resolved)  
- Add comments to complaints  
- Receive system notifications  
- Provide feedback after resolution  

---

### 🛠️ Admin Panel

- Admin Dashboard  
- View & Manage All Complaints  
- Update Complaint Status  
- Assign Departments  
- Manage Users  
- Monitor Feedback & Reports  
- Send Notifications  

---

## 🎨 UI & Styling Approach

The system follows a clean and structured interface design:

- Responsive Layout Design  
- Dashboard-Based UI Structure  
- Category-Based Complaint Forms  
- Card-Based Complaint Display  
- Smooth Hover Effects  
- Modern Typography & Color Scheme  
- Organized Admin Panel  

### CSS Techniques Used

- Flexbox for alignment  
- Grid layout for dashboard  
- Media queries for responsiveness  
- Hover transitions for interactivity  
- Box-shadow & border-radius for modern UI  

---

## 🏗️ System Architecture

```
Citizen (Browser)
        ↓
Frontend (HTML + CSS + JavaScript)
        ↓
Backend (PHP)
        ↓
MySQL Database
        ↓
Admin Dashboard (Complaint Management)
```

---

## 🗂️ Database Structure

### Main Tables

| Table Name     | Description |
|---------------|------------|
| users | Stores citizen & admin information |
| complaints | Stores complaint details |
| comments | Stores discussion/comments |
| feedback | Stores resolution feedback |
| notifications | Stores system notifications |

---

## 📂 Project Structure

```
municipal-complaint-system/
│
├── index.php
├── login.php
├── register.php
├── dashboard.php
├── submit_complaint.php
│
├── admin/
│   ├── admin_dashboard.php
│   ├── manage_complaints.php
│
├── css/
├── js/
├── images/
│
├── database.sql
└── README.md
```

---

## ⚙️ Installation Guide

### 1️⃣ Clone Repository

```bash
git clone https://github.com/yourusername/municipal-complaint-system.git
```

---

### 2️⃣ Move Project Folder

Move the folder to:

- `htdocs` (XAMPP)  
OR  
- `www` (WAMP)

---

### 3️⃣ Create Database

- Open phpMyAdmin  
- Create database named:

```
community_complaints
```

- Import `database.sql`

---

### 4️⃣ Configure Database Connection

Update `db.php` file:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "community_complaints";
```

---

### 5️⃣ Run the Project

Open browser:

```
http://localhost/municipal-complaint-system
```

---

## 🔄 System Workflow

1. Citizen registers or logs in  
2. Citizen submits complaint  
3. Admin reviews complaint  
4. Admin updates status  
5. Citizen receives notification  
6. Complaint resolved  
7. Citizen provides feedback  

---

## 🔐 Security Features

- Session-Based Authentication  
- Password Hashing  
- Input Validation & Sanitization  
- Secure Database Queries  
- Controlled Admin Access  

---

## 🎯 Future Enhancements

- Email Notifications  
- SMS Alerts  
- Complaint Priority Levels  
- Geo-Location Tracking  
- Analytics Dashboard  
- Mobile App Integration  

---

## 👨‍💻 Author

**Chiranjeevi Bathula**  
BTech Computer Science Engineering Student  

---

## 📜 License

This project is developed for educational purposes.

---

## ⭐ Support

If you like this project, consider giving it a ⭐ on GitHub!
