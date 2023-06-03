<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <h1>Edit Data Siswa</h1>
 <a href="index.php"><button>Kembali Ke Halaman Utama</button></a>
 <br/><br/>

 <?php 

 require_once 'koneksi.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$kode_siswa = $_POST['kode_siswa'];
	$nama_siswa = $_POST['nama_siswa'];
	$nama_guru_pembimbing = $_POST['nama_guru_pembimbing'];
	$ekstrakurikuler_yang_diikuti = $_POST['ekstrakurikuler_yang_diikuti'];
	$no_hp_siswa = $_POST['no_hp_siswa'];

	$sql = "UPDATE ekskul_siswa SET kode_siswa='$kode_siswa', nama_siswa='$nama_siswa', nama_guru_pembimbing='$nama_guru_pembimbing', ekstrakurikuler_yang_diikuti='$ekstrakurikuler_yang_diikuti', no_hp_siswa='$no_hp_siswa' WHERE kode_siswa='$kode_siswa'";
	if (mysqli_query($conn, $sql)) {
	 	header("Location: index.php");
	 	exit();
	 } else {
	 	echo "ERROR: Tidak Dapat Mengeksekusi $sql. " .mysqli_ERROR($conn);
	 }
}

$kode_siswa = $_GET['kode_siswa'];
$sql = "SELECT * FROM ekskul_siswa WHERE kode_siswa='$kode_siswa'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
  ?>
  <form action="edit.php" method="post">
  	<label>Kode Siswa</label>
  	<input type="text" name="kode_siswa" value="<?php echo $row['kode_siswa']; ?>" required/>
  	<label>Nama Siswa</label>
  	<input type="text" name="nama_siswa" value="<?php echo $row['nama_siswa']; ?>" required/>
  	<label>Nama Guru Pembimbing</label>
  	<input type="text" name="nama_guru_pembimbing" value="<?php echo $row['nama_guru_pembimbing']; ?>" required/>
  	<label>Ekstrakurikuler Yang Di Ikuti</label>
  	<input type="text" name="ekstrakurikuler_yang_diikuti" value="<?php echo $row['ekstrakurikuler_yang_diikuti']; ?>" required/>
  	<label>No Hp Siswa</label>
  	<input type="text" name="no_hp_siswa" value="<?php echo $row['no_hp_siswa']; ?>" required/>
  	<br/><br/>
  	<input type="submit" value="Kirim Dan Simpan"/>
  </form>
</body>
</html>