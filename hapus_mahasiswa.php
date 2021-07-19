<?php
    include 'index.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mhs= '{$id}'");

    header('location: index.php');
?>