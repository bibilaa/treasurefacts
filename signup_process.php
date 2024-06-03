<?php
session_start();

// Menghubungkan ke database
$db = new mysqli("localhost", "root", "", "users");

// Mendapatkan input dari form
$username = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['kata_sandi'];

// Mengecek apakah input kosong
if(empty($username) || empty($email) || empty($password)) {
  $_SESSION['message'] = "Semua field harus diisi";
  header("location: signup.php");
  exit();
}

// Mengecek apakah email sudah digunakan
$result = $db->query("SELECT * FROM users WHERE email='$email'");
if($result->num_rows > 0) {
  $_SESSION['message'] = "Email sudah digunakan";
  header("location: signup.php");
  exit();
}

// Membuat akun baru di database
$db->query("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
$_SESSION['message'] = "Akun berhasil dibuat";
header("location: login.php");
exit();
?> 