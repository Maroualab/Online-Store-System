<?php
session_start(); // Start a new session or resume the existing one
require_once '../config/connection.php'; // Include the database connection

if (isset($_POST['submit'])) {
    // Get the form data
    $name = trim($_POST['name']);
    $password = trim($_POST['pwd']);

    // Validate form data
    if (empty($name) || empty($password)) {
        echo "Please fill in both fields.";
        exit();
    }

    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE username = :name AND status  = 'active';";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);



    if ($user) {
        if ($user['role'] == "client") {
            if (password_verify($password, $user['password'])) {
                // $_SESSION['user_id'] = $user['user_id']; 
                // $_SESSION['user_name'] = $user['username']; 
                $_SESSION['user'] = ["id"=>$user['user_id'],"name"=>$user['username'],"email"=>$user['email'],"role"=>$user['role']];

                header("Location: ../views/pages/productView.php");
                exit();
            } else {
                echo "Incorrect password.";
                exit();
            }
        } elseif ($user['role'] == "admin") {
            header("Location: ../views/pages/dashboard.php");
            exit();
        }
    } else {
        echo "No user found with that username or user is not active.";
        exit();
    }
}
