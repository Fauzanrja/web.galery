<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Database connection parameters
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ukk_galeri';

// Create connection
$koneksi = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optionally set the character set
if (!mysqli_set_charset($koneksi, 'utf8mb4')) { // Set character set to utf8mb4
    die("Error loading character set utf8mb4: " . mysqli_error($koneksi));
}
?>
