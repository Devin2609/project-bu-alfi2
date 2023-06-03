<!DOCTYPE html>
<html>
<head>
	<title>DATA EKSTRAKURIKULER SISWA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>EKSTRAKURIKULER SISWA</h1>
	<a href="tambahsiswa.php"><button>Tambah Data Siswa</button></a>
	<br/><br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Siswa</th>
			<th>Nama Siswa</th>
			<th>Nama Guru Pembimbing</th>
			<th>Ekstrakurikuler Yang Di Ikuti</th>
			<th>No Hp Siswa</th>
			<th>Aksi</th>
		</tr>
		<?php 
		require_once 'koneksi.php';

		$sql = "SELECT * FROM ekskul_siswa ORDER BY kode_siswa ASC";
		$result = mysqli_query($conn, $sql);

		$no = 1;

		while ($row = mysqli_fetch_assoc($result)) {
		 		echo "<tr>";
		 		echo "<td>" . $no . "</td>";
		 		echo "<td>" . $row['kode_siswa']. "</td>";
		 		echo "<td>" . $row['nama_siswa']. "</td>";
		 		echo "<td>" . $row['nama_guru_pembimbing']. "</td>";
		 		echo "<td>" . $row['ekstrakurikuler_yang_diikuti']. "</td>";
		 		echo "<td>" . $row['no_hp_siswa']. "</td>";
		 		echo "<td>";
		 		echo "<a href='hapus.php?kode_siswa=".$row['kode_siswa']."'>HAPUS |	</a>";
		 		echo "<a href='edit.php?kode_siswa=".$row['kode_siswa']."'>EDIT</a>";
		 		echo "</td>";
		 		echo "</tr>";
		 		$no++;
		 }
		 mysqli_close($conn);
		 ?>
	</table>
</body>
</html>