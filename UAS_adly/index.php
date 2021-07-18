<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Nilai Mahasiswa</title>
</head>

<body>
<header>
    <h1>Table Database Nilai Mahasiswa</h1>
</header>
    <div class="header">
        <div class="main"></div>
    </div>
        <h2>Tabel Mahasiswa</a></h2>
        <a href="add_mahasiswa.php">TAMBAH DATA BARU</a><br/><br/>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM mahasiswa';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_mhs']?></td>
                        <td><?php echo $row['nama']?></td>
                        <td><?php echo $row['kelas']?></td>
                        <td><?php echo $row['jurusan']?></td>
                        <td><a href="edit_mahasiswa.php?id=<?= $row['id_mhs']; ?>"><button>UBAH</button></a> |
                    <a href="hapus_mahasiswa.php?id=<?= $row['id_mhs']; ?>"><button>HAPUS</button></a></td>
                    </tr>
                </tbody>
                <?php
            }  
            ?>          
        </table>
        <br></br>
        <h2>Tabel Pelajaran</a></h2>
        <a href="add_pelajaran.php">TAMBAH DATA BARU</a><br/><br/>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Pelajaran</th>
                    <th>Mata Pelajaran</th>
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
    
        <h2>Table Nilai Akhir</a></h2>
        <a href="add_nilai.php">TAMBAH DATA BARU</a><br/><br/>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID UAS</th>
                    <th>ID Mahasiswa</th>
                    <th>ID Pelajaran</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM nilai';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_na']?></td>
                        <td><?php echo $row['id_mhs']?></td>
                        <td><?php echo $row['id_pelajaran']?></td>
                        <td><?php echo $row['nilai_akhir']?></td>
                        <td><a href="edit_nilai.php?id=<?= $row['id_na']; ?>"><button>UBAH</button></a> |
                    <a href="hapus_nilai.php?id=<?= $row['id_na']; ?>"><button>HAPUS</button></a></td>
                    </tr>
                </tbody>
                <?php
            }
                ?>        
        </table>
        <br>
        </br>
    <footer>
        <p>&copy; 2021 - Universitas pelita bangsa Fakultas Teknik Informatika</p>
    </footer
</body>    
</html>