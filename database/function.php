<?php 

$koneksi = mysqli_connect("localhost:8111", "root", "", "uas-prak-web-adil-5ie");

if (!$koneksi){
    die("Koneksi Gagal: " .mysqli_connect_error());
}

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function registrasi ($data){
    global $koneksi;

    $username = stripcslashes($data['username']);
    $email = $data['email'];
    $password = mysqli_real_escape_string($koneksi, $data['password']);
    $password2 = mysqli_real_escape_string($koneksi, $data['password2']);

    // Cek Konfirmasi password
    if ($password !== $password2){
        echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
        return 0;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan userbaru ke database
    mysqli_query($koneksi, "INSERT INTO users VALUES ('', '$username', '$email', '$password')");
    return mysqli_affected_rows($koneksi);
}


?>