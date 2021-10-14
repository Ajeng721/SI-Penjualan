  <?php 
	session_start();
	include 'db.php';
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
				<li><a href="data-produk.php"</a>Data Kue dan Harga</li>
				<li><a href="keluar.php"</a>Keluar</li>
			</ul>
			</div>
		</header>
		<div class="section">
			<div class="container">
				<h3>Data Kategori</h3>
				<div class="box">
					<table border="1" cellspacing="0" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
							 </tr>
                        </thead>
                        <tbody>
							<?php
							$kategori =mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY  id_kategori DESC");
							while($row = mysqli_fetch_array(kategori)){

							
							?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $row['nama_kategori'] ?></td>
                                <td>
                                     <a href ="">Edit</a> || <a href ="">Hapus</a> 
                                </td>
                            </tr>
							<?php } ?>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
		<foater>
			<div class="container">
				<small>Copyright &copy; 2021 -  Risky Cake's.</small>
				
			</div>
	</body>
	</html>