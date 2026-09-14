<?php
session_start();
// Akun dummy
$emailDummy = "admin@gmail.com";
$passwordDummy = "12345678";

// Pastikan request menggunakan POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Ambil data dari form
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    // Validasi input kosong
    if (empty($email) || empty($password)) {
        die("Email dan password wajib diisi.");
    }

    // Cek email dan password
    if ($email === $emailDummy && $password === $passwordDummy) {

        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'admin';
        header('Location: dashboard.php');
        exit();

    } else {

        echo "Email atau password salah.";

    }

} else {

    // Kalau proses_login.php dibuka langsung
    header("Location: login.php");
    exit;
}

?>