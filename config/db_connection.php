<?php
//ttw_main_db
$host = 'localhost'; // Địa chỉ máy chủ cơ sở dữ liệu
$username = 'root'; // Tên đăng nhập cơ sở dữ liệu
$password = ''; // Mật khẩu cơ sở dữ liệu
$database = '122-cong-ty-co-phan-khoang-san-mien-bac'; // Tên cơ sở dữ liệu
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli($host, $username, $password, $database);
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}