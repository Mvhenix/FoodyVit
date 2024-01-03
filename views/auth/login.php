<?php

session_start();

if(isset ($_SESSION["login"])){
    header("Location: ../pages/menu.php");
    exit;
}

require '../../database/function.php';

if ( isset ($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

    // Cek Username
    if (mysqli_num_rows($result) === 1){

        // Cek password
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"])){
            // Set Session
            $_SESSION["login"] = $username;
            
            header("Location: ../pages/menu.php");
            exit();
        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Login/Sign In</h2>

        <?php if (isset ($error)) : ?>
            <p style="color: red; font-style:italic;">Username/Password Salah!</p>
        <?php endif; ?>

        <form action="login.php" method="post">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username"><br><br>

            <label for="password">Password :</label>
            <input type="text" name="password" id="password"><br><br>

            <input type="submit" name="login"><br><br>
        </form>
    </center>

</body>

</html>