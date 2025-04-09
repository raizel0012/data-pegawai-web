<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$id_departemen = $_POST['id_departemen'];
$id_jabatan = $_POST['id_jabatan'];
$id_gaji = $_POST['id_gaji'];

mysqli_query($conn, "UPDATE pegawai SET nama='$nama', id_departemen='$id_departemen', 
                     id_jabatan='$id_jabatan', id_gaji='$id_gaji' WHERE id_pegawai=$id");

header("Location: index.php");
