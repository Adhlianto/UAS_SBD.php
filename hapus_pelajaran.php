<?php
    include 'pelajaran.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM pelajaran WHERE id_pelajaran= '{$id}'");

    header('location: pelajaran.php');
?>
