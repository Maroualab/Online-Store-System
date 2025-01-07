<?php
$host = 'localhost'; // Database host
$dbname = 'ecommercedashboard'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password (leave empty for local server)

try {
    // Establish a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}
?>


