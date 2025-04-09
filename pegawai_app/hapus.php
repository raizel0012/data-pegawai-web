<?php
include 'koneksi.php';

$id = $_GET['id'];

if ($id) {
    mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai=$id");
}

header("Location: index.php");
