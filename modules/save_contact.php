<?php
include __DIR__ . '/../config/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $content = $_POST['message'] ?? '';
    $address = $_POST['address'] ?? null; 
    $subject = $_POST['subject'] ?? null; 

    $sql = "INSERT INTO contact_customer (name, address, email, phone, subject, content)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $address, $email, $phone, $subject, $content);

    if ($stmt->execute()) {
        echo "OK";
    } else {
        echo "ERROR";
    }

    $stmt->close();
    $conn->close();
}
