<?php
    include 'nilai.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM nilai WHERE id_na= '{$id}'");

    header('location: nilai.php');
?>
