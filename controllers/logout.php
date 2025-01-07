<?php
session_start(); // Always start the session first
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to login page after logging out
header("Location: ../public/index.php");
exit();
