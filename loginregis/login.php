<?php
require_once '../koneksi.php';

session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (sha1($password) === $user['password']) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                echo "<script>
                        alert('Login berhasil!'); 
                        window.location.href = '../lib/dashboard.php'; 
                      </script>";
                exit();
            } else {
                $error = "Password salah.";
            }
        } else {
            $error = "Username tidak ditemukan.";
        }

        $stmt->close();
    } catch (Exception $e) {
        $error = "Terjadi kesalahan: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style_loginregis.css">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <form id="loginForm" method="POST" onsubmit="return validateLogin()">
                <div class="mb-3">
                    <label for="username" class="form-label text-dark">
                        <p>Username</p>
                    </label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-dark">
                        <p>Password</p>
                    </label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <p class="text-center mt-3 text-light">Belum punya akun? <a href="register.php" class="daftar">daftar di sini.</a></p>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
    <footer class="text-light text-center py-3 mt-5">
        <p>&copy;Copyright by <a class="cpr fw-bold" href="https://github.com/MikhsanFutra">22552011086_Moch Ikhsan Futra_TIF 22 CID</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function validateLogin() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username == "") {
                alert("Username harus diisi!");
                return false;
            }

            if (password == "") {
                alert("Password harus diisi!");
                return false;
            }

            if (password.length < 6) {
                alert("Password harus terdiri dari minimal 6 karakter!");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>