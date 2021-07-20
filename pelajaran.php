<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Sistem Nilai Mahasiswa</h1>
        <h2>Universitas Pelita Bangsa</h2>
</header>
<div class="header">
    <div class="header-logo">Teknik Informatika</div>
</div>
<nav>
    <a href="index.php">Home</a>
    <a href="mahasiswa.php">Mahasiswa</a>
    <a href="pelajaran.php">Pelajaran</a>
    <a href="nilai.php">Nilai</a>
    <a href="logout.php">Log Out</a>
    <button onClick="window.print();">Print</button>
</nav>
<center><h2>Tabel Mahasiswa</a></h2>
       <br> <a href="add_pelajaran.php">TAMBAH DATA BARU</a><br/><br/></center>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Pelajaran</th>
                    <th>Pelajaran</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM pelajaran';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_pelajaran']?></td>
                        <td><?php echo $row['pelajaran']?></td>
                        <td><?php echo $row['semester']?></td>
                        <td><a href="edit_pelajaran.php?id=<?= $row['id_pelajaran']; ?>"><button>UBAH</button></a> |
                    <a href="hapus_pelajaran.php?id=<?= $row['id_pelajaran']; ?>"><button>HAPUS</button></a></td>
                    </tr>
                </tbody>
                <?php
            }  
            ?>          
    </table>
    <br> <br>
    <footer>
        <p>&copy; 2021 - Universitas Pelita Bangsa</p>
    </footer>
</body>
</html>