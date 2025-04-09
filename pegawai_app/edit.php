<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai=$id"));
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Edit Data Pegawai</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">

        Nama:
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

        Departemen:
        <select name="id_departemen">
            <?php
            $dep = mysqli_query($conn, "SELECT * FROM departemen");
            while ($d = mysqli_fetch_assoc($dep)) {
                $selected = ($d['id_departemen'] == $data['id_departemen']) ? 'selected' : '';
                echo "<option value='{$d['id_departemen']}' $selected>{$d['nama_departemen']}</option>";
            }
            ?>
        </select>

        Jabatan:
        <select name="id_jabatan">
            <?php
            $jab = mysqli_query($conn, "SELECT * FROM jabatan");
            while ($j = mysqli_fetch_assoc($jab)) {
                $selected = ($j['id_jabatan'] == $data['id_jabatan']) ? 'selected' : '';
                echo "<option value='{$j['id_jabatan']}' $selected>{$j['nama_jabatan']}</option>";
            }
            ?>
        </select>

        Gaji:
        <select name="id_gaji">
            <?php
            $gaji = mysqli_query($conn, "SELECT * FROM gaji");
            while ($g = mysqli_fetch_assoc($gaji)) {
                $selected = ($g['id_gaji'] == $data['id_gaji']) ? 'selected' : '';
                echo "<option value='{$g['id_gaji']}' $selected>Rp " . number_format($g['jumlah'], 0, ',', '.') . "</option>";
            }
            ?>
        </select>

        <input type="submit" value="Update">
    </form>
</body>

</html>