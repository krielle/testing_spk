<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['Submit'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nik1=$_POST['nik1'];
	$nama1=$_POST['nama1'];
	$alamat1=$_POST['alamat1'];
	$kriteria1_pekerjaan1=$_POST['kriteria1_pekerjaan1'];
	$kriteria2_penghasilan1=$_POST['kriteria2_penghasilan1'];
	$kriteria3_jenis_rumah1=$_POST['kriteria3_jenis_rumah1'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input1 = mysqli_query($koneksi, "INSERT INTO tbl_matrik VALUES(NULL, '$nik1','$kriteria1_pekerjaan1','$kriteria2_penghasilan1','$kriteria3_jenis_rumah1')")or die(mysqli_error());
	$input = mysqli_query($koneksi, "INSERT INTO tbl_warga VALUES('$nik1', '$nama1', '$alamat1')") or die(mysqli_error());
	//jika query input sukses
	if($input && $input1){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="input.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="input.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>