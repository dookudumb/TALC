<?php
include __DIR__ . '/../config/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name       = $_POST['full_name'] ?? '';
    $address         = $_POST['address'] ?? '';
    $phone_number    = $_POST['phone_number'] ?? '';
    $email           = $_POST['email'] ?? '';
    $quoted_quantity = $_POST['quoted_quantity'] ?? 0;
    $industry        = $_POST['industry'] ?? '';
    $special_request = $_POST['special_request'] ?? '';

    $stmt = $conn->prepare("
        INSERT INTO quote_request (full_name, address, phone_number, email, quoted_quantity, industry, special_request) 
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->bind_param("ssssiss", $full_name, $address, $phone_number, $email, $quoted_quantity, $industry, $special_request);

    if ($stmt->execute()) {
        echo "OK"; // JS check chuỗi này
    } else {
        echo "ERROR: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
