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
    $sql = "SELECT * FROM users WHERE username = :name";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);



    if ($user) {
        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, start the session
            $_SESSION['user_id'] = $user['user_id']; // 
            $_SESSION['user_name'] = $user['username'];

            // Redirect to the product view page
            
            header("Location:../views/pages/productView.php");
            exit();
        } else {
            echo "Incorrect password.";
            exit();
        }
    } else {
        echo "No user found with that name.";
        exit();
    }
}

