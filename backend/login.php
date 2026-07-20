<?php
session_start();
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['UserName']);
    $password = trim($_POST['Password']);

    // Prepared statement (SQL Injection Protection)
    $stmt = $conn->prepare("SELECT * FROM registration WHERE UserName = ? AND Password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "✅ Login Successful!";

        // Dashboard Redirect
        header("Location: ../studentdesboard/index.php");
        exit();
    } else {
        // Redirect back with Error Param
        header("Location: ../components/login.php?error=1");
        exit();
    }
}
?>