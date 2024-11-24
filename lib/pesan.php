<?php
require '../koneksi.php';
session_start();

$ngaran = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';


$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pesan'])) {
    $pesan = $_POST['pesan'];


    $sql_insert = "INSERT INTO pesan (username, email, pesan) VALUES (?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("sss", $ngaran, $email, $pesan);

    if ($stmt_insert->execute()) {
        $_SESSION['message'] = "Pesan berhasil dikirim!";
    } else {
        $_SESSION['message'] = "Gagal mengirim pesan. Silakan coba lagi.";
    }

    $stmt_insert->close();

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}


if (isset($_SESSION['message'])) {
    echo "<script>alert('" . $_SESSION['message'] . "');</script>";
    unset($_SESSION['message']);
}
