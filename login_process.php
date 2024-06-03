<?php
session_start();

// Menghubungkan ke database
$db = new mysqli("localhost", "root", "", "users");

// Mendapatkan input dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Mengecek apakah input kosong
if(empty($username) || empty($password)) {
  $_SESSION['message'] = "Username dan password harus diisi";
  header("location: login.php");
  exit();
}

// Mengecek apakah pengguna ada di database
$result = $db->query("SELECT * FROM users WHERE ( username='$username' OR email = '$username') AND password='$password'");
if($result->num_rows == 0) {
  $_SESSION['message'] = "Username atau password salah";
  header("location: login.php");
  exit();
}

// Menyimpan informasi pengguna ke session
$user = $result->fetch_assoc();
$_SESSION['user'] = $user['username'];
$_SESSION['message'] = "Login berhasil";
header("location: index.php");
exit(); 