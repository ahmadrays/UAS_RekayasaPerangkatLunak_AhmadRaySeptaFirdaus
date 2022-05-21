<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/style.css">

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/images/icon.png" type="image/png">


	<title>Selamat Datang</title>

</head>

<body>
	<?php
	session_start();
	?>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">

				<form action="login-proccess.php" class="sign-in-form" method="post">
					<h2 class="title">Masuk</h2>
					<P>dengan akun yang pernah buat</P>
					<br>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="email" name="email" id="email" placeholder="Email" />
					</div>

					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="password" id="password" placeholder="Password" />
					</div>
					<input type="submit" name="login" class="btn" value="Masuk" />
					<br>
					<?php
					if (isset($_SESSION['success'])) {
					?>
						<div class="alert"><?= $_SESSION['success'] ?></div>
					<?php
						unset($_SESSION['success']);
					} else if (isset($_SESSION['danger'])) {
					?>
						<div class="alert"><?= $_SESSION['danger'] ?></div>
					<?php
						unset($_SESSION['danger']);
					}
					?>

				</form>

				<form action="register-proccess.php" class="sign-up-form" method="post">
					<h2 class="title">Daftar</h2>
					<p>Buat akun anda sekarang juga.</p>
					<br>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="name" id="name" placeholder="Nama" />
					</div>

					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" name="email" id="email" placeholder="Email" />
					</div>

					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="password" id="password" placeholder="Password" />
					</div>

					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="confirm_password" id="confirm_password" placeholder="Password" />
					</div>
					<input type="submit" name="register" class="btn" value="Daftar" />
				</form>

			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>Belum punya Akun ?</h3>
					<p>
						Buat akun baru dan bergabunglah bersama kami.
					</p>
					<button class="btn transparent" id="sign-up-btn">
						Daftar
					</button>
				</div>
			</div>

			<div class="panel right-panel">
				<div class="content">
					<h3>Sudah punya Akun ?</h3>
					<p>
						Masuk dengan akun yang telah Anda buat sebelumnya.
					</p>
					<button class="btn transparent" id="sign-in-btn">
						Masuk
					</button>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/app.js"></script>

</body>

</html>