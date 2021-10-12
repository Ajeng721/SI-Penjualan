<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		
	</head>
	<body id="bg-login">
		<div class="box-login">
			<h2>Login</h2>
			<form action="" method="POST">
				<input type="text" name="user" placeholder="username" class="input-control">
				<input type="password" name="pass" placeholder="password"class="input-control">
				<input type="submit" name="submit" value ="submit"class="btn-submit">
			</form>
			<?php 
	if (isset($_POST['submit'])) {
		include 'index.php';
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$cek =mysqli_query($conn, "SELECT * FROM tb_admin where adm_username ='".$user."' AND adm_password='".MD5($pass)."'");
		session_start();
		if (mysqli_num_rows($cek) >0){
			$d = mysqli_fetch_object($cek);
			$_SESSION['status_login'] = true;
			$_SESSION['a_global'] = $d;
			$_SESSION['id'] = $d->id_admin;
			echo '<script>window.location="dasboard.php"</script>';
		}else{
			echo '<script>alert("Username atau Password Anda Salah!")</script>';
		}

	}
 ?>
			
		</div>
	
	</body>
	</html>