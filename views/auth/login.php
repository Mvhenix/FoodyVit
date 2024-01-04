<?php

session_start();

if (isset($_SESSION["login"])) {
	header("Location: ../pages/menu.php");
	exit;
}

require '../../database/function.php';

if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

	// Cek Username
	if (mysqli_num_rows($result) === 1) {

		// Cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			// Set Session
			$_SESSION["login"] = $username;

			header("Location: ../pages/menu.php");
			exit();
		}
	}
}

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
	<title>Document</title>
	<link rel="stylesheet" href="../../css/login.css">
</head>


<body>
	
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="" method="post">
				<h1>Create Account</h1>
				<input type="text" name="username" id="username" placeholder="Username" />
				<input type="email" name="email" id="email" placeholder="Email" />
				<input type="password" name="password" id="password" placeholder="Password" />
				<button type="submit" name="registrasi">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="" method="post">
				<h1>Sign in</h1>
				<?php if (isset($error)) : ?>
					<p style="color: red; font-style:italic;">Username/Password Salah!</p>
				<?php endif; ?>
				<input type="text" name="username" id="username" placeholder="Username" />
				<input type="password" name="password" id="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button type="submit" name="login">Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		const signUpButton = document.getElementById("signUp");
		const signInButton = document.getElementById("signIn");
		const container = document.getElementById("container");

		signUpButton.addEventListener("click", () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener("click", () => {
			container.classList.remove("right-panel-active");
		});
	</script>

</body>

</html>