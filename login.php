<?php
// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Di sini Anda akan memeriksa ke database atau sumber autentikasi lainnya
    // Untuk contoh ini, kita akan menggunakan data statis
    $validUsername = 'user'; // Ganti dengan username yang valid
    $validPassword = 'password'; // Ganti dengan password yang valid

    // Validasi username dan password
    if ($username === $validUsername && $password === $validPassword) {
        // Jika valid, arahkan ke halaman selamat datang
        header("Location: welcome.php");
        exit;
    } else {
        // Jika tidak valid, arahkan kembali ke halaman login dengan pesan error
        header("Location: login.html?error=1");
        exit;
    }
}
?>
