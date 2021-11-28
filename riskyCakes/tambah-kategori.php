<?php
	session_start();
	include 'index.php';
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
		<link rel="stylesheet" type="text/css" href="css/style.css">`
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
				<li><a href="data-produk.php">Data Kue</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
			</div>
		</header>
		<div class="section">
			<div class="container">  
				<h3>Tambah Data</h3>
				<div class="box">
					<form action="" method="POST">
						<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->nama_admin ?>" required>
						<input type="submit" name="submit" value=" " class="btn">
					</form>
					<?php
                    if(isset($_POST['submit'])){
                        $nama = ucwords($_POST['nama']);
                        $insert = mysqli_query($conn, "INSERT INTO tb_kategori VALUES
                                            null,
                                            '".$nama."')");
                        if($insert){
                            echo 'berhasil';
                        }else{
                            echo 'gagal'.mysqli_error($conn);
                        }
                    }

					?>
				</div>
				
			</div>
		</div>
		<foater>
			<div class="container">
				<small>Copyright &copy; 2021 -  Risky Cake's.</small>

			</div>
	</body>
	</html>
