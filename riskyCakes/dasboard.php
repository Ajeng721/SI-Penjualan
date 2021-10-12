<?php 
	session_start();
	if ($_SESSION['status_login'] != true) {
		echo '<script>window.location="login.php"</script>';
	}
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<title>Rizky Cake's</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		
	</head>
	<body>
		<header>
			<div class="container">
			<h1><a href="dashboard.php">Risky Cake's</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php"</a>Data Kue</li>
				<li><a href="keluar.php"</a>Keluar</li>
			</ul>
			</div>
		</header>
		<div class="section">
			<div class="container">
				<h3>Dashboard</h3>
				<div class="box">
					<h4>Selamat Datang <?php echo $_SESSION['a_global']->nama_admin ?></h4>
				</div>
			</div>
		</div>
		<foater>
			<div class="container">
				<small>Copyright &copy; 2021 -  Risky Cake's.</small>
				
			</div>

	
	</body>
	</html>