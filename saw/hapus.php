<?php 
	include('koneksi.php');
	$nik = $_GET['nik'];
	mysqli_query($koneksi, "DELETE FROM tbl_matrik WHERE nik='$nik'")or die(mysqli_error());

	header("location:view.php");
?>
