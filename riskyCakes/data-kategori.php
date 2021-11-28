<<<<<<< Updated upstream
  <?php
	session_start();
	include 'index.php';
=======
  <?php 
	session_start();		
	include_once("index.php");
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
				<li><a href="data-produk.php">Data Kue</a></li>
				<li><a href="keluar.php">Keluar</a></li>
=======
				<li><a href="data-produk.php"</a>Data Kue </li>
				<li><a href="keluar.php"</a>Keluar</li>
>>>>>>> Stashed changes
			</ul>
			</div>
		</header>
		<div class="section">
			<div class="container">
				<h3>Data Kategori</h3>
				<div class="box">
					<p><a href="tambah-kategori.php">Tambah Data</a><p>
					<table border="1" cellspacing="0" class="table">
                        <thead>
                          
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
<<<<<<< Updated upstream
							 </tr>
=======
                            
>>>>>>> Stashed changes
                        </thead>
                        <tbody>
							<?php
							$no = 1;
							$kategori =mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY  id_kategori DESC");
							while($row = mysqli_fetch_array($kategori)){
							?>
                            <tr class= "center">
                                <td class= "center"><?php echo $no++?></td>
                                <td><?php echo $row['nama_kategori'] ?></td>
                                <td>
                                     <a href ="edit-data.php?id=<?php echo $row['id_kategori']?>">Edit</a> || <a href ="proses-hapus.php?idk=<?php echo $row['id_kategori'] ?>">hapus</a> 
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
