<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_pelajaran'];
	
	$id_pelajaran=$_POST['id_pelajaran'];
	$pelajaran=$_POST['pelajaran'];
	$semester=$_POST['semester'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE pelajaran SET id_pelajaran='$id_pelajaran',pelajaran='$pelajaran',semester='$semester' 
	WHERE id_pelajaran=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Pelajaran</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM pelajaran WHERE id_pelajaran=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_pelajaran = $user_data['id_pelajaran'];
	$pelajaran = $user_data['pelajaran'];
	$semester = $user_data['semester'];
}
?>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_pelajaran.php">
		<table border="0">
			<tr> 
				<td>ID Pelajaran</td>
				<td><input type="text" name="id_pelajaran" value=<?php echo $id_pelajaran;?>></td>
			</tr>
			<tr> 
				<td>Pelajaran</td>
				<td><input type="text" name="pelajaran" value=<?php echo $pelajaran;?>></td>
			</tr>
			<tr> 
				<td>Semester</td>
				<td><input type="text" name="semester" value=<?php echo $semester;?>></td>
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