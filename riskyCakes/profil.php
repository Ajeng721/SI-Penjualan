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
<<<<<<< HEAD
						<input type="text" name="nama" placeholder="id admin" class="input-control" value="<?php echo $d->id_admin ?" required>
=======
						<input type="text" name="id" placeholder="Id Admin" class="input-control" value="<?php echo $d->id_admin ?" required>
>>>>>>> b2b51684afdeb09af380830403a426de088ef9f5
						<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->nama_admin ?" required>
						<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->adm_username ?" required>
						<input type="text" name="password" placeholder="Password" class="input-control" value="<?php echo $d->adm_password ?" required>
						<input type="Telepon" name="Telepon" placeholder="No. Hp" class="input-control" value="<?php echo $d->adm_telp ?" required>
						<input type="email" name="email" placeholder="Email Lengkap" class="input-control" value="<?php echo $d->adm_email ?" required>
						<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->adm_alamat ?" required>
						<input type="submit" name="submit" value="Ubah Profil" class="btn">
					</form>
					<?php
						if(issert($_POST['submit')){

							$id_admin 		= $_POST['id admin'];
							$nama_admin 	= ucwords($_POST['nama admin']);
							$adm_username 	= $_POST['Username'];
							$adm_password 	= $_POST['Password'];
							$adm_telp 		= $_POST['Telepon'];
							$adm_email 		= $_POST['Email'];
							$adm_alamat 	= ucwords($_POST['alamat']);

							$update = msqli_query($conn, "UPDATE tb_admin SET
											id_admin	= '".$id_admin."'
											nama_admin = '".$nama_admin."',
											adm_username = '".$adm_username."',
											adm_password = '".$adm_paswword."',
											adm_telp= '".$adm_telp."',
											adm_email= '".$adm_email."',
											adm_alamat = '".$adm_alamat."'
											WHERE id_admin = '".$d->id_admin.'" ");
							if($update){
								echo '<script>alert("Ubah data berhasil")</script>';
								echo '<script>window.location=profil.php</script>';
							}else{
								echo'gagal'.mysqli_error($conn);
							}

						}
					?>
				</div>

				<h3>Ubah Password</h3>
				<div class="box">
					<form action="" method="POST">
						<input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
						<input type="password" name="pass2" placeholder="Konfirmasi Password" class="input-control"  required>
						<input type="submit" name="ubah_password" value="Ubah Password" class="btn">
					</form>
					<?php
						if(issert($_POST['ubah_password')){

							$pass1		= $_POST['pass1'];
							$pass2	= $_POST['pass2'];

							if($pass2 != $pass1){
								echo '<script>alert("Konfirmasi Password Baru Tidak Sesuai")</script>';
							}else{
								$u_pass = msqli_query($conn, "UPDATE tb_admin SET
								password = '".MD5($pass1)."'
								WHERE id_admin = '".$d->id_admin.'" ");

								if($u_pass){
									echo '<script>alert("Ubah data berhasil")</script>';
									echo '<script>window.location=profil.php</script>';	
								}else{
									echo'gagal '.mysqli_error($conn);
								}
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
