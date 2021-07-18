<?php

include("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_mhs'];
	
	$id_mhs=$_POST['id_mhs'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$jurusan=$_POST['jurusan'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE mahasiswa SET id_mhs='$id_mhs',nama='$nama',kelas='$kelas',jurusan='$jurusan' 
	WHERE id_mhs=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Mahasiswa</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id_mhs=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_mhs = $user_data['id_mhs'];
	$nama = $user_data['nama'];
	$kelas = $user_data['kelas'];
	$jurusan = $user_data['jurusan'];
}
?>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_mahasiswa.php">
		<table border="0">
			<tr> 
				<td>ID Mahasiswa</td>
				<td><input type="text" name="id_mhs" value=<?php echo $id_mhs;?>></td>
			</tr>
			<tr> 
				<td>Nama Mahasiswa</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Kelas</td>
				<td><input type="text" name="kelas" value=<?php echo $kelas;?>></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html>