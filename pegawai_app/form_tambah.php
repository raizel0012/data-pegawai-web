<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Form Tambah Pegawai</h2>
    <form action="simpan.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Departemen:</label>
        <select name="id_departemen" required>
            <option>-- Pilih --</option>
            <?php
            $dep = mysqli_query($conn, "SELECT * FROM departemen");
            while ($d = mysqli_fetch_assoc($dep)) {
                echo "<option value='{$d['id_departemen']}'>{$d['nama_departemen']}</option>";
            }
            ?>
        </select>

        <label>Jabatan:</label>
        <select name="id_jabatan" required>
            <option>-- Pilih --</option>
            <?php
            $jab = mysqli_query($conn, "SELECT * FROM jabatan");
            while ($j = mysqli_fetch_assoc($jab)) {
                echo "<option value='{$j['id_jabatan']}'>{$j['nama_jabatan']}</option>";
            }
            ?>
        </select>

        <label>Gaji:</label>
        <select name="id_gaji" required>
            <option>-- Pilih --</option>
            <?php
            $gaji = mysqli_query($conn, "SELECT * FROM gaji");
            while ($g = mysqli_fetch_assoc($gaji)) {
                echo "<option value='{$g['id_gaji']}'>Rp " . number_format($g['jumlah'], 0, ',', '.') . "</option>";
            }
            ?>
        </select>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>