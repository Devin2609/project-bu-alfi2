<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Tambah Data Siswa</h1>
	<div class="bt">
	<a href="index.php"><button>Kembali Ke Halaman Utama</button></a>
</div>
	<br/><br/>

	<?php 
	require_once 'koneksi.php';

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        	$kode_siswa = $_POST['kode_siswa'];
       	if ($_SERVER['REQUEST_METHOD'] === 'POST')
        	$nama_siswa = $_POST['nama_siswa'];
    	if ($_SERVER['REQUEST_METHOD'] === 'POST')
    		$nama_guru_pembimbing = $_POST['nama_guru_pembimbing'];
    	if ($_SERVER['REQUEST_METHOD'] === 'POST')
    		$ekstrakurikuler_yang_diikuti = $_POST['ekstrakurikuler_yang_diikuti'];
    	if ($_SERVER['REQUEST_METHOD'] === 'POST')
    		$no_hp_siswa= $_POST['no_hp_siswa'];

    	$sql = "INSERT INTO ekskul_siswa (kode_siswa, nama_siswa, nama_guru_pembimbing, ekstrakurikuler_yang_diikuti, no_hp_siswa) VALUES ('$kode_siswa', '$nama_siswa', '$nama_guru_pembimbing', '$ekstrakurikuler_yang_diikuti', '$no_hp_siswa')";
    	if (mysqli_query($conn, $sql)) {
    		header("Location: index.php");
    		exit();
    	}else {
    		echo "ERROR : TIDAK DAPAT MENGEKSEKUSI $sql. " . mysqli_error($conn);	
    	}
    }
         ?>
         <form action="tambahsiswa.php" method="post">
         	<table>
         		<tr>
         			<td><label>Kode Siswa</label></td>
         			<td><input type="text" name="kode_siswa"></td>
         		</tr>
         		<tr>
         			<td><label>Nama Siswa</label></td>
         			<td><input type="text" name="nama_siswa"></td>
         		</tr>
         		<tr>
         			<td><label>Nama Guru Pembimbing</label></td>
         			<td><input type="text" name="nama_guru_pembimbing"></td>
         		</tr>
         		<tr>
         			<td><label>Ekstrakurikuler Yang Di Ikuti</label></td>
         			<td><input type="text" name="ekstrakurikuler_yang_diikuti"></td>
         		</tr>
         		<tr>
         			<td><label>Nomor Hp Siswa</label></td>
         			<td><input type="text" name="no_hp_siswa"></td>
         		</tr>
         		<tr>
         		<td><input type="Submit" value="Kirim Dan Simpan Data"></td>
         		</tr>
         	</table>
         </form>
</body>
</html>