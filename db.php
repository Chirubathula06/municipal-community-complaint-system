<?php
// Start session management
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Database credentials
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "community_complaints";

// Create a new database connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check the connection
if ($conn->connect_error) {
    // Log the error for debugging
    error_log("Database connection failed: " . $conn->connect_error);
    die("There was an issue connecting to the database. Please try again later.");
}

// Set UTF-8 character encoding
if (!$conn->set_charset("utf8")) {
    error_log("Error setting charset: " . $conn->error);
    die("There was an issue setting up the database. Please contact support.");
}

// Ensure the `users` table exists
$tableCreationQuery = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') NOT NULL DEFAULT 'user',
    email VARCHAR(255) NOT NULL UNIQUE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";
if (!$conn->query($tableCreationQuery)) {
    error_log("Error creating `users` table: " . $conn->error);
    die("There was an issue setting up the database. Please contact support.");
}

// Helper functions for session management
/**
 * Check if a user is logged in
 * 
 * @return bool
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

/**
 * Check if the logged-in user is an admin
 * 
 * @return bool
 */
function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}
?>
