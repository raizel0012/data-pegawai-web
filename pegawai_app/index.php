<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Data Pegawai</h2>
    <a href="form_tambah.php">+ Tambah Pegawai</a><br><br>

    <table>
        <tr>
            <th>Nama</th>
            <th>Departemen</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = mysqli_query($conn, "SELECT pegawai.id_pegawai, pegawai.nama, d.nama_departemen, j.nama_jabatan, g.jumlah
        FROM pegawai
        JOIN departemen d ON pegawai.id_departemen = d.id_departemen
        JOIN jabatan j ON pegawai.id_jabatan = j.id_jabatan
        JOIN gaji g ON pegawai.id_gaji = g.id_gaji");

        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                <td>{$row['nama']}</td>
                <td>{$row['nama_departemen']}</td>
                <td>{$row['nama_jabatan']}</td>
                <td>Rp " . number_format($row['jumlah'], 0, ',', '.') . "</td>
                <td>
                    <a href='edit.php?id={$row['id_pegawai']}'>Edit</a> |
                    <a href='hapus.php?id={$row['id_pegawai']}' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                </td>
              </tr>";
        }
        ?>
    </table>

</body>

</html>