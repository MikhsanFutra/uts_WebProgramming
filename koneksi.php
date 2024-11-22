<?php
// Konfigurasi database
$host = 'localhost'; // Host database, biasanya 'localhost'
$username = 'root';  // Username MySQL, sesuaikan dengan pengaturan Anda
$password = '';      // Password MySQL, kosongkan jika tidak ada password
$database = 'uts';   // Nama database yang akan digunakan

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
