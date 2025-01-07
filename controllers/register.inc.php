<?php
require_once '../config/connection.php';

class UserRegistration
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function register($name, $email, $password, $confirmPassword)
    {
        $this->validateInput($name, $email, $password, $confirmPassword);
        $this->checkEmailExists($email);
        $hashedPassword = $this->hashPassword($password);
        $this->insertUser($name, $email, $hashedPassword);
    }

    private function validateInput($name, $email, $password, $confirmPassword)
    {
        if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
            throw new Exception("Please fill in all fields.");
        }

        if ($password !== $confirmPassword) {
            throw new Exception("Passwords do not match.");
        }
    }

    private function checkEmailExists($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            throw new Exception("Email is already registered.");
        }
    }

    private function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    private function insertUser($name, $email, $hashedPassword)
    {
        try {
            $sql = "INSERT INTO users (username, email, password) VALUES (:name, :email, :password)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);

            $stmt->execute();

            // Start session and set session variables
            session_start();
            $_SESSION['user_id'] = $this->pdo->lastInsertId();
            $_SESSION['user_name'] = $name;

            header("Location:../views/pages/productView.php");
        } catch (PDOException $e) {
            throw new Exception("Error: " . $e->getMessage());
        }
    }
}

// Handle form submission
if (isset($_POST['submit'])) {
    try {
        $registration = new UserRegistration($pdo);
        $registration->register(
            trim($_POST['name']),
            trim($_POST['email']),
            trim($_POST['pwd']),
            trim($_POST['cpwd'])
        );
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
