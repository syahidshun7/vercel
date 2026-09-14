<?php
session_start();

// Akun dummy
$emailDummy = "admin@gmail.com";
$passwordDummy = "12345678";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if (empty($email) || empty($password)) {
        die("Email dan password wajib diisi.");
    }

    if ($email === $emailDummy && $password === $passwordDummy) {

        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $email;
        $_SESSION['role'] = 'admin';

        header("Location: dashboard.php");
        exit;

    } else {

        echo "Email atau password salah.";
    }

} else {

    header("Location: login.php");
    exit;
}