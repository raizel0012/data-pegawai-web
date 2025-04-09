<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$id_departemen = $_POST['id_departemen'];
$id_jabatan = $_POST['id_jabatan'];
$id_gaji = $_POST['id_gaji'];

if ($nama && $id_departemen && $id_jabatan && $id_gaji) {
    $query = mysqli_query($conn, "INSERT INTO pegawai (nama, id_departemen, id_jabatan, id_gaji)
                                  VALUES ('$nama', '$id_departemen', '$id_jabatan', '$id_gaji')");
    if ($query) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data.";
    }
} else {
    echo "Data belum lengkap!";
}
