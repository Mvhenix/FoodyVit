<?php

// Koneksi ke database
require 'C:\xampp\htdocs\uas_prak_web_adil\database\function.php';

if (isset($_POST['registrasi'])) {

    if (registrasi ($_POST) > 0 ) {
        echo "<script>alert('Registrasi Berhasil');</script>";
    } else {
        echo "<script>alert('Registrasi Gagal');</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h2>Registrasi Pengguna</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="password2">Confirmation Password:</label>
        <input type="password" name="password2" id="password2" required><br>

        <input type="submit" value="Daftar" name="registrasi">
    </form>
</body>
</html>