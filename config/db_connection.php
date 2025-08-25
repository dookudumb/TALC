<?php
$server = "localhost"; // IP hoặc domain kết nối để CSDL
$username = "root"; // Người dùng sử dụng để kết nối đến CSDL với PHP
$password = ""; // Mật khẩu sử dụng để kết nối đến CSDL với PHP
$database = "123-cong-ty-co-phan-khoang-san-mien-bac"; // Tên database

// Kết nối đến MySQL với PHP sử dụng MySQLi
$conn = new mysqli($server, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

