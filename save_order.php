<?php
session_start(); // ⚠️ indispensable pour accéder à $_SESSION
require 'include/database.php';

if (!isset($_SESSION['user_id'])) {
    echo "not_logged_in"; // ou tu peux rediriger vers login.php
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $user_id = $_SESSION['user_id']; // ✅ utilisateur connecté

    $stmt = $pdo->prepare("
        INSERT INTO orders (user_id, product_name, price, quantity)
        VALUES (?, ?, ?, ?)
    ");

    if($stmt->execute([$user_id, $product, $price, $quantity])){
        echo "success";
    } else {
        echo "error";
    }
}
