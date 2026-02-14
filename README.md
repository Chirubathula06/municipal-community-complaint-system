🏙️ Municipal Community Complaint System

A full-stack web application that allows citizens to register complaints related to municipal services such as sanitation, roads, water supply, street lights, and more. The system enables efficient complaint tracking, communication between citizens and authorities, and transparent issue resolution.

📌 Project Overview

The Municipal Community Complaint System is designed to digitize the process of reporting and managing community issues.

Citizens can submit complaints online, track their status, and receive updates, while administrators can manage complaints, assign departments, and monitor resolutions through a dedicated dashboard.

🚀 Features
👤 User Features

✅ User Registration & Login
✅ Submit complaints with category & description
✅ Upload images (optional)
✅ Track complaint status (Pending / In Progress / Resolved)
✅ Add comments on complaints
✅ Receive notifications/updates
✅ Provide feedback after resolution

🛠️ Admin Features

✅ Admin dashboard
✅ View all complaints
✅ Update complaint status
✅ Assign departments
✅ Manage users
✅ View feedback and reports
✅ Send notifications

🏗️ Tech Stack

Frontend:

HTML5

CSS3

JavaScript

Backend:

PHP

Database:

MySQL

Server:

Apache (XAMPP / WAMP / Hosting)

🗂️ Database Schema

The system includes the following main tables:

users → Stores user information

complaints → Stores complaint details

comments → Stores comments on complaints

feedback → Stores user feedback

notifications → Stores notifications

📂 Project Structure
municipal-complaint-system/
│
├── index.php
├── login.php
├── register.php
├── dashboard.php
├── submit_complaint.php
├── admin/
│   ├── admin_dashboard.php
│   ├── manage_complaints.php
│
├── css/
├── js/
├── images/
├── database.sql
└── README.md

⚙️ Installation Guide
1️⃣ Clone the Repository
git clone https://github.com/yourusername/municipal-complaint-system.git

2️⃣ Move Project Folder

Move the folder to:

htdocs (XAMPP) OR www (WAMP)

3️⃣ Create Database

Open phpMyAdmin

Create database:

community_complaints


Import database.sql

4️⃣ Configure Database Connection

Update db.php file:

$host = "localhost";
$user = "root";
$password = "";
$database = "community_complaints";

5️⃣ Run the Project

Open browser:

http://localhost/municipal-complaint-system

📊 System Workflow

1️⃣ User registers/login
2️⃣ User submits complaint
3️⃣ Admin reviews complaint
4️⃣ Status updated
5️⃣ User receives notification
6️⃣ Complaint resolved
7️⃣ User provides feedback

🔐 Security Features

✅ Session authentication
✅ Input validation
✅ Password hashing
✅ Secure database queries

🎯 Future Enhancements

⭐ Email notifications
⭐ SMS alerts
⭐ Complaint priority levels
⭐ Mobile app integration
⭐ Analytics dashboard
⭐ Geo-location tracking

👨‍💻 Author

Chiranjeevi Bathula
BTech Computer Science Student

📜 License

This project is for educational purposes.

🤝 Contribution

Contributions are welcome!

Fork the repo

Create a new branch

Commit changes

Submit pull request
