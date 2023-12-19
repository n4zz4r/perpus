<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Anggota</title>
</head>
<body>

<h2>Form Input Anggota</h2>

<!-- Formulir untuk menambah anggota -->
<form action="anggota_read.php" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br>

    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="telepon">Telepon:</label>
    <input type="number" name="telepon" required><br>

    <input type="submit" name="tambah_anggota" value="Tambah Anggota">
</form>
<!-- Formulir untuk menghapus anggota -->
<form action="anggota_read.php" method="POST">
    <input type="hidden" name="id" value="<?= $anggota['anggota_id'] ?>">
    <input type="submit" name="hapus_anggota" value="Hapus">
</form>


</body>
</html>
