<?php

include("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_na'];
	
	$id_na=$_POST['id_na'];
	$id_mhs=$_POST['id_mhs'];
	$id_pelajaran=$_POST['id_pelajaran'];
	$nilai_akhir=$_POST['nilai_akhir'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE nilai SET id_na='$id_na',id_mhs='$id_mhs',id_pelajaran='$id_pelajaran',nilai_akhir='$nilai_akhir' 
	WHERE id_na=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Nilai Akhir</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM nilai WHERE id_na=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_na = $user_data['id_na'];
	$id_mhs = $user_data['id_mhs'];
	$id_pelajaran = $user_data['id_pelajaran'];
	$nilai_akhir = $user_data['nilai_akhir'];
}
?>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_nilai.php">
		<table border="0">
			<tr> 
				<td>ID UAS</td>
				<td><input type="text" name="id_na" value=<?php echo $id_na;?>></td>
			</tr>
			<tr> 
				<td>ID Mahasiswa</td>
				<td><input type="text" name="id_mhs" value=<?php echo $id_mhs;?>></td>
			</tr>
			<tr> 
				<td>ID Pelajaran</td>
				<td><input type="text" name="id_pelajaran" value=<?php echo $id_pelajaran;?>></td>
			</tr>
			<tr> 
				<td>Nilai Akhir</td>
				<td><input type="text" name="nilai_akhir" value=<?php echo $nilai_akhir;?>></td>
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