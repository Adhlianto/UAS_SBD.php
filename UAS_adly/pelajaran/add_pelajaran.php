<?php include('header.php');?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Pelajaran</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_pelajaran.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Pelajaran</td>
				<td><input type="text" name="id_pelajaran"></td>
			</tr>
			<tr> 
				<td>Pelajaran</td>
				<td><input type="text" name="pelajaran"></td>
			</tr>
			<tr> 
				<td>Semester</td>
				<td><input type="text" name="semester"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_pelajaran = $_POST['id_pelajaran'];
		$pelajaran = $_POST['pelajaran'];
		$semester = $_POST['semester'];
		
		include("config.php");
				
		$result = mysqli_query($conn, "INSERT INTO pelajaran(id_pelajaran,pelajaran,semester) 
        VALUES('$id_pelajaran','$pelajaran','$semester')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>