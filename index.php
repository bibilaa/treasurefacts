</php
require 'login';
$servername = "localhost";
$database = "lala xe7";
$username = "root"; 
$password = "";

$conn = mysqli_connect ($servername, $username, $password, $database); 

if (!$conn) {
    die(" Koneksi Gagal : " . mysqli_connest)_error()); 
} else {
    echo " Koneksi Berhasil " ;
}