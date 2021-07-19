<?php include('header.php');?>
 
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Mahasiswa</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_mahasiswa.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Mahasiswa</td>
				<td><input type="text" name="id_mhs"></td>
			</tr>
			<tr> 
				<td>Nama Mahasiswa</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
            <tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
 
	if(isset($_POST['Submit'])) {
		$id_mhs = $_POST['id_mhs'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
		
		include("config.php");
		
		$result = mysqli_query($conn, "INSERT INTO mahasiswa(id_mhs,nama,kelas,jurusan) 
		VALUES('$id_mhs','$nama','$kelas','$jurusan')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>