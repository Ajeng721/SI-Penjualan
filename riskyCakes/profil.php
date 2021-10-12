<?php 
	session_start();
	include 'db.php';
	if ($_SESSION['status_login'] != true) {
		echo '<script>window.location="login.php"</script>';
	}

	$query = mysqli-qu($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."' ");
	$d = mysqli_fetch_object($query);
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
				<h3>Profil</h3>
				<div class="box">
					<form action="" method="POST">
						<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->id_admin ?" required>
						<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->nama_admin ?" required>
						<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->adm_username ?" required>
						<input type="text" name="hp" placeholder="No. Hp" class="input-control" value="<?php echo $d->adm_password ?" required>
						<input type="email" name="email" placeholder="Email Lengkap" class="input-control" value="<?php echo $d->adm_telp ?" required>
						<input type="email" name="email" placeholder="Email Lengkap" class="input-control" value="<?php echo $d->adm_email ?" required>
						<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->adm_alamat ?" required>
						<input type="submit" name="submit" value="Ubah Profil" class="btn">
					</form>
					<?php
						if(issert($_POST['submit')){

							$nama 	= $_POST['nama'];
							$user 	= $_POST['user'];
							$hp 	= $_POST['hp'];
							$email 	= $_POST['email'];
							$alamat = $_POST['alamat'];

							$update = msqli_query($conn, "UPDATE tb_admin SET
											admin_name = '".$nama."',
											username = '".$user."',
											admin_telp = '".$hp."',
											admin_email= '".$email."',
											admin_address = '".$alamat."'
											WHERE admin_id = '".$d->admin_id.'" ");
							if($update){
								echo'berhasil';
							}else{
								echo'gagal '.mysqli_error($conn);
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