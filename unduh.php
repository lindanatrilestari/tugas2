<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		/*GET URI */
		$key = "";
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if(strpos($url,'key')){
		$key		= $_GET['key'];
		}
if($key !="" && $key == "gft4k31t34sy"){		
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
			<div class="col-xs-12">
			</div>
			<div class="col-xs-12" style="text-align:center">
				<h1><strong>List Data Download</strong></h1>
				<p>Daftar yang ingin download aplikasi gofeeder.sevima.com diurutkan dari tanggal terbaru</p><br/>
			</div>
			</div>
			
				<div class="row">
				<div class="col-xs-12">
					<table class="table table-striped">
					<th>No</th>
					<th>Tanggal</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Universitas</th>
					<th>Kode PT</th>
					<th>Email</th>
					<th>No Telp</th>
				    <?php 
					$i = 1;
					$query = mysql_query("SELECT * FROM tbl_unduh order by tanggal desc") or die(mysql_error());
					if(mysql_num_rows($query) == 0){
						echo '<tr><td colspan="8">Tidak ada data yang ditampilkan.</td></tr>';						
					}else{
						while($data = mysql_fetch_assoc($query)){	
							echo '<tr>';
								echo '<td>'.$i.'</td>';
								echo '<td>'.$data['tanggal'].'</td>';
								echo '<td>'.$data['nama'].'</td>';
								echo '<td>'.$data['jabatan_pt'].'</td>';
								echo '<td>'.$data['universitas'].'</td>';
								echo '<td>'.$data['kodept_forlap'].'</td>';
								echo '<td>'.$data['email'].'</td>';
								echo '<td>'.$data['notelp'].'</td>';
								
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
<?php } ?>