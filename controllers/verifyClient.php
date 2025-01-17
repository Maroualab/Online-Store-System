<?php

require_once 'controllers\login.inc.php';

if (!isset($user['id'])) {
    header("Location: ./login.php");
    exit();
}


elseif($user) {
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