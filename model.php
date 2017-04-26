<?php
include('koneksi.php');

if(isset($_POST['form-unduh'])){
	$u_nama 	= $_POST['u_nama'];
	$u_jabatan	= $_POST['u_jabatan'];
	$u_email	= $_POST['u_email'];
	$u_univ 	= $_POST['u_univ'];
	$u_kodeuniv	= $_POST['u_kodeuniv'];
	$u_telp	= $_POST['u_telp'];
	$tanggal	= date("Y-m-d H:i:s");
	
	$input = mysql_query("INSERT INTO tbl_unduh VALUES(NULL, '$u_nama', '$u_jabatan', '$u_univ', '$u_kodeuniv', '$u_email', '$u_telp', '$tanggal')") or die(mysql_error());

	if($input){
		header('location:index.html?unduh');
	}
}
?>
