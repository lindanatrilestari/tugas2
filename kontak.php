<?php
		//iclude file koneksi ke database
		include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEVIMA Gofeeder</title>

    <!-- Bootstrap -->
    <link href="lib/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="lib/css/main.css" type="text/css">
		<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon/favicon.png" sizes="16x16">


</head>
<body>

		<div class="container">
			<div class="row">
			<div class="col-xs-12" style="text-align:center">
				<h1><strong>List Data Kontak</strong></h1>
				<p>Daftar yang melakukan kontak melalui form gofeeder.sevima.com diurutkan dari tanggal terbaru</p><br/>
			</div>
			</div>
			
				<div class="row">
				<div class="col-xs-12">
				<a class="btn btn-warning btn-xs" href="admin.html"><< Kembali</a><br/><br/>
					<table class="table table-striped">
					<th>No</th>
					<th>Tanggal</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Universitas</th>
					<th>Deskripsi</th>
				    <?php 
					$i = 1;
					$query = mysql_query("SELECT * FROM tbl_kontak order by tanggal desc") or die(mysql_error());
					if(mysql_num_rows($query) == 0){
						echo '<tr><td colspan="3">Tidak ada data yang ditampilkan.</td></tr>';						
					}else{
						while($data = mysql_fetch_assoc($query)){	
							echo '<tr>';
								echo '<td>'.$i.'</td>';
								echo '<td>'.$data['tanggal'].'</td>';
								echo '<td>'.$data['nama'].'</td>';
								echo '<td>'.$data['email'].'</td>';
								echo '<td>'.$data['universitas'].'</td>';
								echo '<td>'.$data['deskripsi'].'</td>';
								
							echo '</tr>';
							
							$i++;
						}
						
					}
					?>
					</table>
				</div>
				</div>
			</div>
	</body>
</html>