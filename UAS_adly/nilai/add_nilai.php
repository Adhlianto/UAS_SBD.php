<?php include('header.php');?>
 
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Nilai</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_nilai.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID UAS</td>
				<td><input type="text" name="id_na"></td>
			</tr>
			<tr> 
				<td>ID Mahasiswa</td>
				<td><input type="text" name="id_mhs"></td>
			</tr>
			<tr> 
				<td>ID Pelajaran</td>
				<td><input type="text" name="id_pelajaran"></td>
			</tr>
            <tr> 
				<td>Nilai Akhir</td>
				<td><input type="text" name="nilai_akhir"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_na = $_POST['id_na'];
		$id_mhs = $_POST['id_mhs'];
		$id_pelajaran = $_POST['id_pelajaran'];
		$nilai_akhir = $_POST['nilai_akhir'];
		
		include("config.php");
				
		$result = mysqli_query($conn, "INSERT INTO nilai(id_na,id_mhs,id_pelajaran,nilai_akhir) 
        VALUES('$id_na','$id_mhs','$id_pelajaran','$nilai_akhir')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>